"""Generate dimension metadata and WebP derivatives; preserve all originals."""
import json, hashlib, re, xml.etree.ElementTree as ET
from pathlib import Path
from PIL import Image
R = Path(__file__).resolve().parent.parent
manifest = {}; saved = 0
destination = R/'assets/img/optimized'; destination.mkdir(exist_ok=True)
paths = list((R/'assets/img').rglob('*'))
for path in paths:
    if 'optimized' in path.parts: continue
    if path.suffix.lower() == '.svg':
        try:
            svg = ET.parse(path).getroot(); view = svg.get('viewBox','').split()
            width = float(re.sub('[^0-9.]','',svg.get('width','')) or (view[2] if len(view)==4 else 0))
            height = float(re.sub('[^0-9.]','',svg.get('height','')) or (view[3] if len(view)==4 else 0))
            if width and height: manifest['/'+path.relative_to(R).as_posix()]={'width':int(width),'height':int(height)}
        except (OSError,ValueError,ET.ParseError): pass
        continue
    if path.suffix.lower() not in ('.png', '.jpg', '.jpeg', '.webp', '.avif'): continue
    if '.optimized' in path.name: continue
    try:
        with Image.open(path) as image:
            width, height = image.size
            item = {'width':width, 'height':height}
            manifest['/'+path.relative_to(R).as_posix()] = item
            if path.suffix.lower() in ('.png','.jpg','.jpeg') and width >= 300:
                candidates = []
                for size in sorted(set([min(width, 480), min(width, 960), min(width, 1600)])):
                    key = hashlib.sha256(path.relative_to(R).as_posix().encode()).hexdigest()[:12]
                    target = destination / (path.stem + f'.{key}-{size}.webp')
                    if not target.exists() or target.stat().st_mtime < path.stat().st_mtime:
                        thumb = image.convert('RGBA' if image.mode in ('RGBA','LA','P') else 'RGB')
                        thumb.thumbnail((size, max(1, round(height * size / width))), Image.Resampling.LANCZOS)
                        thumb.save(target, 'WEBP', quality=82, method=4)
                    candidates.append({'src':'/'+target.relative_to(R).as_posix(),'width':size})
                if candidates and path.stat().st_size > target.stat().st_size:
                    item['webp'] = candidates; saved += path.stat().st_size-target.stat().st_size
            manifest['/'+path.relative_to(R).as_posix()] = item
    except (OSError, ValueError): pass
(R/'includes/image-manifest.json').write_text(json.dumps(manifest, separators=(',',':')), encoding='utf-8')
print(f'{len(manifest)} images indexed; full-size WebP derivatives save {saved:,} bytes versus originals (all assets, not a page-weight claim).')
