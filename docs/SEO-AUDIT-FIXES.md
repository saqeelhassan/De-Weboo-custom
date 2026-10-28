# SEO audit implementation — 28 October 2026

Changes are local and ready for deployment. The site remains PHP-based, with its existing URLs, branding, Analytics tag, robots rules and service offers preserved. The sitemap contains 60 canonical URLs; its size does not currently warrant a sitemap index.

| Task | Files changed | Status and verification |
| --- | --- | --- |
| 1. Sitemap | `sitemap.php`, `includes/sitemap.php`, `sitemap.xml`, `.htaccess`, `tools/build-sitemap.php` | Implemented. `/sitemap.xml` is generated dynamically from actual page files and blog, portfolio and team data. Source modification dates supply lastmod; service/FAQ copy changes are included. Search, tooling, error pages and duplicate detail URLs are excluded. XML parses and all 60 URLs return 200 locally. Existing robots Sitemap line remains correct. |
| 2. Headings | `index.php`, `includes/home-solution-tabs.php`, `includes/blog-cards-section.php`, `includes/testimonials-data.php`, `assets/css/main.css`, `assets/css/brand.css`, `assets/css/home-hero.css`, `assets/js/main.js` | Implemented. One H1 per canonical page; homepage section/card headings use H2/H3. Numeric counter is a div. Slider rewinds instead of cloning H1s. Existing heading typography is retained through classes. |
| 3. Canonical URLs | `.htaccess`, `includes/seo-config.php`, `includes/seo.php` | Implemented; live deployment pending. Production HTTP/www redirects target HTTPS/non-www directly and preserve queries. Legacy `/seo-services` redirects to `/seo`. `/index.php` and `.php` links normalize. Apache fixture tests verify actual rewrite behavior. Canonicals never use the request hostname. |
| 4. Metadata | `includes/seo-meta.php`, `includes/seo-head.php`, `includes/header.php` | Implemented. Requested homepage title and description are present, keywords meta is removed, and existing configurable Open Graph/Twitter metadata is retained. `/search` is noindex. |
| 5. Performance | `config.php`, `.htaccess`, `includes/page-cache.php`, `includes/image-output.php`, image/asset manifests, `includes/header.php`, `includes/footer.php`, `assets/css/site-*`, `assets/js/site-*`, `assets/img/optimized/*`, `tools/build-assets.cjs`, `tools/optimize-images.py`, `package.json`, `deploy/php-production.ini`, `blog-sidebar.php`, `includes/blog-posts.php`, `index.php` | Code implemented; production target requires measurement after deployment. Anonymous HTML caches for five minutes outside the web root, invalidates on PHP/data/manifest changes and bypasses cookies, query strings, POSTs, sessions and authorization. CSS/JS bundles are minified with content hashes and one-year immutable caching. Other assets cache for one day. Compression is configured. Responsive WebP sources retain original fallbacks; dimensions and lazy loading are applied centrally. Hero remains eager/high priority and its AVIF preload matches the selected source. Duplicate CSS hero backgrounds are suppressed. Broken archive image paths and a nonexistent blog fallback are corrected. OPcache is already enabled in the inspected local PHP configuration; a production ini snippet is supplied. |
| 6. Structured data | `includes/seo-schema.php`, `includes/seo-config.php`, `includes/faqs-data.json`, `faqs.php`, `includes/blog-render.php`, `includes/service-content.php`, `includes/review-schema.php`, `testimonials.php` | Implemented except confirmed business hours. Organization + ProfessionalService retains seven offers, addresses, geo, contact details and social profiles, adds both phone numbers, Pakistan/US/worldwide coverage, SearchAction and detail breadcrumbs. BlogPosting has source-based modified dates. All eight FAQ schema answers match visible content. Review/aggregate schema and its corresponding visible component remain disabled. Hours configuration uses UTC, as requested, and is intentionally empty until verified days/times are available. External Google/Schema.org validation still requires deployment. |
| 7. Service content and links | Eleven named service pages plus `services-details.php`, `includes/service-content.php`, `includes/service-copy.json`, `includes/service-sections.php`, `blog-details.php` | Templates implemented. Includes/process/tools/results/FAQs/related cases/related posts/CTA sections render. Content placeholders are explicitly marked. Fill `service-copy.json` with approved copy and `{ "question": "…", "answer": "…" }` FAQ entries; FAQ schema appears only when actual questions exist. Related content matches tags, service names and categories automatically; optional `serviceSlugs` arrays can explicitly assign content. Every blog post links to one related service. |
| 8. Social and alt text | `includes/seo-config.php`, `includes/footer.php`, `includes/navbar.php`, `index.php`, `docs/seo-validation.json` | Implemented. All social URLs remain in one configuration; YouTube is hidden unless a channel URL is configured, in either footer variant. Menu image now has an accessible label; meaningful homepage images have alt text. Sitewide rendered scan leaves only the three decorative homepage background images with empty alt. Their paths are recorded in the validation JSON. |

## Cloudflare configuration to apply

Use SSL/TLS **Full (strict)** with a valid origin certificate. The Apache rules check the actual origin HTTPS connection; Flexible SSL would create a redirect loop. Keep both apex and www DNS records proxied.

In **Rules → Redirect Rules → Single Redirects**, add these rules in this order, using custom expressions, status **301**, and **Preserve query string** enabled:

1. Legacy index:
   - Match: `(http.host in {"deweboo.com" "www.deweboo.com"} and http.request.uri.path eq "/index.php")`
   - Static target: `https://deweboo.com/`
2. Legacy SEO alias:
   - Match: `(http.host in {"deweboo.com" "www.deweboo.com"} and http.request.uri.path in {"/seo-services" "/seo-services/" "/seo-services.php"})`
   - Static target: `https://deweboo.com/seo`
3. Canonical origin:
   - Match: `(http.host in {"deweboo.com" "www.deweboo.com"} and (http.host eq "www.deweboo.com" or http.request.scheme eq "http"))`
   - Dynamic target: `concat("https://deweboo.com", http.request.uri.path)`

For the clean URLs tested by the audit, HTTP + www goes directly to the final HTTPS/non-www URL in one hop. Existing PHP-extension legacy URLs are also normalized at Apache. If eliminating every edge/origin hop for extension aliases is necessary, configure individual static redirects ahead of the origin rule. Do not place a separate HTTP-to-HTTPS rule ahead of the combined canonical rule.

Reference: [Cloudflare Single Redirect settings](https://developers.cloudflare.com/rules/url-forwarding/single-redirects/settings/).

After deployment, check redirects and the sitemap:

```sh
curl -I http://deweboo.com/
curl -I http://www.deweboo.com/
curl -I https://www.deweboo.com/
curl -I 'http://www.deweboo.com/contact?source=audit'
curl -I https://deweboo.com/seo-services
curl -I https://deweboo.com/index.php
curl -I https://deweboo.com/sitemap.xml
```

## Build and local verification

Generated assets are included. After changing CSS/JS, run `npm install` then `npm run build:assets`. Keep previous hashes on the server during rolling deployments; upload assets before the new manifest. The builder deliberately preserves vendor order and licenses. Libraries referenced by the existing interaction code were retained.

For new/replaced images, install `tools/requirements.txt` and run `python tools/optimize-images.py`. Upload generated derivatives and `includes/image-manifest.json` together. Production PHP requires XMLWriter for sitemap generation. Merge `deploy/php-production.ini` into the server PHP configuration and restart PHP; the repository cannot change the remote host's PHP settings.

```sh
php tools/build-sitemap.php
python tools/validate-seo.py
python tools/seo-audit.py after
php -S 127.0.0.1:8099 -t . tools/dev-router.php
```

`tools/check-redirects.py` runs the real `.htaccess` against an isolated local Apache fixture. `tools/run-browser-audit.py` compares committed HEAD templates to current templates using temporary baseline files; set `PLAYWRIGHT_MODULE` to an installed Playwright module if it is outside node_modules. These tools are blocked from public HTTP access.

## Performance evidence and remaining work

See `performance-summary.md` for measured before/after values and methodology. The audit's supplied production TTFB of about 1.66 seconds is an external baseline; it cannot be compared directly to localhost timings.

Live Lighthouse/PageSpeed and external structured-data validation have not been run against these undeployed changes. Installing Lighthouse was prevented by the environment's registry/network access. Local Chrome measurements are supplied instead and are not Lighthouse scores. The mobile development-server LCP remains high; production compression/CDN behavior and live TTFB/LCP must be checked before claiming the target is met.

Outstanding inputs/actions: apply the Cloudflare rules, deploy files and the PHP ini settings, supply verified UTC opening days/hours, replace clearly marked service-copy placeholders, and run mobile Lighthouse plus Google Rich Results/Schema.org validators against the deployed site. Reviews remain disabled until verified reviews with visible ratings are supplied. No genuine reviews or operating hours were invented.
