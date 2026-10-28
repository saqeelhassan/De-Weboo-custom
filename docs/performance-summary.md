# Performance comparison ? local verification

Template output before/after uses the same PHP renderer. Browser measurements use Chrome at 390?844, 4? CPU throttling, 1.6 Mbps download / 750 Kbps upload and 40 ms network latency. Analytics requests are blocked consistently in both runs. The committed HEAD templates form the baseline. A single run per version is reported; values are diagnostic, not field data or Lighthouse results. The PHP development server does not apply Apache gzip or immutable-cache directives.

| Measurement | Before | After |
| --- | ---: | ---: |
| Homepage HTML bytes | 142,275 | 95,108 |
| Distinct CSS/JS/preload URLs in source | 29 | 7 |
| Source H1 count | 3 | 1 |
| Initial browser requests | 61 | 36 |
| Browser requests after scripted scroll | 86 | 63 |
| Resource encoded bytes after scroll | 8,257,089 | 3,566,017 |
| Local navigation TTFB | 20.9 ms | 82.5 ms |
| Local mobile LCP | 14.864 s | 14.024 s |
| Initial viewport CLS | 0.003170 | 0.001075 |
| JavaScript runtime errors | 0 | 0 |

HTML size and resource counts improved. Local TTFB increased in this run; both values are below 0.8 seconds on localhost, which does not establish production performance. LCP still needs work and live measurement. Source image-element counts remain 62 in both versions; modern formats and lazy loading reduce transferred data without removing content.

Scroll resource bytes vary with timing and lazy loading; they include resources that actually completed during the run, rather than the sum of every file referenced in HTML. No live before/after production performance claim is made. The supplied external audit baseline was approximately 1.66 s TTFB, 38 CSS/JS files, 145 KB HTML and 53 images; that audit used a different counting method.

The full trace summary is in `browser-performance.json`; template counts are in `seo-before.json` and `seo-after.json`. The local route/status checks are in `http-validation.json`, Apache redirect checks in `redirect-validation.json`, and per-route heading/image/schema checks in `seo-validation.json`. Only the three decorative hero backgrounds intentionally have empty alt attributes.
