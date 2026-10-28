// Minify in existing CSS directories so all relative font/image URLs stay valid.
const fs = require('node:fs');
const path = require('node:path');
const crypto = require('node:crypto');
const esbuild = require(process.env.ESBUILD_MODULE || 'esbuild');
const root = path.resolve(__dirname, '..');
const groups = {
  critical: ['fonts.css', 'bootstrap.min.css', 'all.min.css', 'swiper-bundle.min.css', 'main.css', 'brand.css'],
  deferred: ['animate.css', 'magnific-popup.css', 'meanmenu.css', 'nice-select.css'],
  scripts: ['jquery-3.7.1.min.js', 'viewport.jquery.js', 'bootstrap.bundle.min.js', 'jquery.nice-select.min.js', 'jquery.waypoints.js', 'jquery.counterup.min.js', 'swiper-bundle.min.js', 'jquery.meanmenu.min.js', 'jquery.magnific-popup.min.js', 'wow.min.js', 'gsap.min.js', 'ScrollTrigger.min.js', 'spilitext-gsap.js', 'vanilla-tilt.min.js', 'main.js'],
};
(async () => {
  const manifest = {};
  for (const [group, files] of Object.entries(groups)) {
    const extension = group === 'scripts' ? 'js' : 'css';
    const folder = path.join(root, 'assets', extension);
    const source = files.map(file => fs.readFileSync(path.join(folder, file), 'utf8')).join(extension === 'js' ? '\n;\n' : '\n');
    const result = await esbuild.transform(source, {loader: extension, minify: true, legalComments: 'inline', target: extension === 'js' ? 'es2018' : undefined});
    const hash = crypto.createHash('sha256').update(result.code).digest('hex').slice(0, 12);
    const name = `site-${group}.${hash}.${extension}`;
    fs.writeFileSync(path.join(folder, name), result.code);
    manifest[group] = `/assets/${extension}/${name}`;
    console.log(`${group}: ${files.length} files -> ${name} (${Buffer.byteLength(result.code)} bytes)`);
  }
  fs.writeFileSync(path.join(root, 'includes', 'assets-manifest.json'), JSON.stringify(manifest, null, 2) + '\n');
})().catch(error => { console.error(error); process.exit(1); });
