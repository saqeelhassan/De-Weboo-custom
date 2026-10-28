const fs = require('node:fs');
const {chromium} = require(process.env.PLAYWRIGHT_MODULE || 'playwright');
(async()=>{
  const browser = await chromium.launch({executablePath: process.env.CHROME_PATH || 'C:/Program Files/Google/Chrome/Application/chrome.exe',headless:true});
  const results = {};
  for (const [name,url] of [['before','http://127.0.0.1:8101/'],['after','http://127.0.0.1:8099/']]) {
    const context = await browser.newContext({viewport:{width:390,height:844},deviceScaleFactor:1,isMobile:true,hasTouch:true});
    const page = await context.newPage(); const errors=[]; const failed=[]; let requests=0;
    page.on('pageerror',e=>errors.push(e.message));
    page.on('response',r=>{if(r.status()>=400)failed.push({url:r.url(),status:r.status()});});
    page.on('request',()=>requests++);
    // Reproducible local comparison: analytics connections excluded in both runs.
    await page.route(/https?:\/\/(?!127\.0\.0\.1)/,route=>route.abort());
    await page.addInitScript(()=>{
      window.auditCLS=0;window.auditLCP=0;
      new PerformanceObserver(list=>{for(const e of list.getEntries())if(!e.hadRecentInput)window.auditCLS+=e.value;}).observe({type:'layout-shift',buffered:true});
      new PerformanceObserver(list=>{for(const e of list.getEntries())window.auditLCP=e.startTime;}).observe({type:'largest-contentful-paint',buffered:true});
    });
    const cdp=await context.newCDPSession(page);
    await cdp.send('Emulation.setCPUThrottlingRate',{rate:4});
    await cdp.send('Network.enable');
    await cdp.send('Network.emulateNetworkConditions',{offline:false,latency:40,downloadThroughput:1.6*1024*1024/8,uploadThroughput:750*1024/8});
    await page.goto(url,{waitUntil:'load',timeout:60000});
    await page.waitForTimeout(5000);
    const initial = await page.evaluate(()=>{const n=performance.getEntriesByType('navigation')[0];return {ttfb_ms:n.responseStart-n.requestStart,lcp_ms:window.auditLCP,cls:window.auditCLS,h1_count:document.querySelectorAll('h1').length,hero_font:getComputedStyle(document.querySelector('.hero-headline-lines')).fontSize,initial_image_urls:[...document.images].filter(i=>i.complete&&i.naturalWidth).map(i=>i.currentSrc),horizontal_overflow:document.documentElement.scrollWidth>innerWidth};});
    initial.initial_requests=requests;
    if(name==='after')await page.screenshot({path:'docs/home-mobile-after.png'});
    for(let y=0;y<await page.evaluate(()=>document.body.scrollHeight);y+=650){await page.evaluate(y=>window.scrollTo(0,y),y);await page.waitForTimeout(70);}
    await page.waitForTimeout(2500);
    const bytes=await page.evaluate(()=>performance.getEntriesByType('resource').reduce((sum,e)=>sum+e.encodedBodySize,0));
    results[name]={...initial,total_requests_after_scroll:requests,resource_encoded_bytes:bytes,js_errors:errors,failed_http:failed};
    await context.close();
  }
  // Functional checks beyond the homepage.
  const page=await browser.newPage();
  await page.route(/https?:\/\/(?!127\.0\.0\.1)/,route=>route.abort());
  await page.goto('http://127.0.0.1:8099/faqs',{waitUntil:'load'});
  const faqCheck=await page.evaluate(()=>{
    const graphs=[...document.querySelectorAll('script[type="application/ld+json"]')].flatMap(s=>JSON.parse(s.textContent)['@graph']||[]);
    const schema=graphs.find(n=>n['@type']==='FAQPage');
    const questions=[...document.querySelectorAll('.accordion-button')].map(n=>n.textContent.trim().replace(/\s+/g,' '));
    const answers=[...document.querySelectorAll('.accordion-body p')].map(n=>n.textContent.trim().replace(/\s+/g,' '));
    return {count:questions.length,matches: schema.mainEntity.every((f,i)=>f.name===questions[i]&&f.acceptedAnswer.text===answers[i])};
  });
  results.faq_schema=faqCheck;
  fs.writeFileSync('docs/browser-performance.json',JSON.stringify(results,null,2));
  console.log(JSON.stringify(results,null,2));
  await browser.close();
})().catch(e=>{console.error(e);process.exit(1)});
