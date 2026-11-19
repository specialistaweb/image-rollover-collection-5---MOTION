# rollovercollection5 – MOTION

Nine modern hover layouts for the content elements **textmedia**, **media**, **textpic** and **image**
of bootstrap_package. CSS only: no JavaScript, no jQuery, no extra requests on pages that do not use them.

| | |
|---|---|
| TYPO3 | 12.4 LTS, 13.4 LTS, 14.3 LTS |
| PHP | 8.1+ (as required by the TYPO3 version) |
| bootstrap_package | 14, 15 or 16 (Bootstrap 5) |

## Layouts

Choose the layout in the content element, tab *Appearance > Layout*:

| Layout | Name | Effect |
|---|---|---|
| 2850 | MOTION - Arch | arch-shaped image that opens into a rectangle, badge with arrow, texts below |
| 2851 | MOTION - Accordion panels | vertical strips, the one under the pointer widens and shows the texts |
| 2852 | MOTION - Frosted glass | frosted glass panel with the title, opens to show text and button |
| 2853 | MOTION - 3D tilt | the card tilts towards the pointer with a moving light reflection |
| 2854 | MOTION - Glowing border | rotating gradient border with a soft glow |
| 2855 | MOTION - Bento grid | tiles of different sizes (pattern of six), the others fade on hover |
| 2856 | MOTION - Black and white to colour | tinted black and white image, colour and slow zoom on hover, texts rise line by line |
| 2857 | MOTION - Open full screen | a click opens the image large with the full text (HTML Popover API) |
| 2858 | MOTION - Curtain | the image splits in two halves that open and reveal a coloured panel |

Fields used per image (file reference): **title**, **description**, **link** (target of the "more"
button), **alternative text**. Only image files are shown; videos and other files are skipped.
The number of columns is the field *Number of columns* of the content element (1–6; on tablets
at most 2, on phones 1). Accordion and bento ignore it. For textmedia/textpic use the image position
*above* or *below* the text, so the layout gets the full width.
Content elements with any other layout are rendered by bootstrap_package as usual.

### Behaviour on touch screens and for accessibility

* Touch screens have no hover: texts are shown directly (glass, bento, black and white, curtain,
  accordion becomes a column of tiles).
* Keyboard: focusing the "more" button has the same effect as the mouse.
* With "reduce motion" enabled in the operating system, movements become simple fades.
* Browsers without support for a newer technique (for example the closing animation of the full
  screen view) still show the content, simply without that animation.

## Installation

Composer:

    composer require specialistaweb/rollovercollection5

Classic mode: upload the zip in *Admin Tools > Extensions*.

Then activate it for the site:

* **TYPO3 13 / 14 – site set (recommended):** *Site Management > Sites > edit site > Sets*, add
  **Rollovercollection 5 - MOTION** (it depends on "Bootstrap Package: Content Elements").
* **TYPO3 12, or sites with TypoScript records:** add the static template
  **Rollovercollection 5 - MOTION** after the bootstrap_package TypoScript.

Finally flush all caches.

## Configuration

With the site set, every option is in *Site Management > Settings*, category
**Rollovercollection 5 - MOTION**. With a TypoScript record, the same options are constants
(Constant Editor, category *bootstrap package: rollovercollection5-motion*).

| Option (`plugin.tx_rollovercollection5.settings.*`) | Default | Meaning |
|---|---|---|
| `titleRawdataOutput` | 1 | 1 = HTML typed in the image title is kept (cleaned by the TYPO3 HTML sanitizer), 0 = plain text |
| `captionRawdataOutput` | 0 | 1 = HTML of the description is kept (sanitized), 0 = plain text with line breaks |
| `useButtonMore` | 1 | shows the "more" button when the image has a link |
| `imageMaxWidth` | 1400 | images wider than this are scaled down before delivery, 0 = original file |
| `cssFile` | `EXT:rollovercollection5/Resources/Public/Css/motion.css` | stylesheet; change it only to use your own copy |
| `accentColor` | `#3d5afe` | buttons, badge, tint of the black and white layout, curtain panel |
| `textColor` | `#12141a` | texts under the images |
| `mutedColor` | `#5d6472` | descriptions under the images |
| `surfaceColor` | `#ffffff` | background of the glowing border cards and of the full screen view |
| `lineColor` | `#e2e5eb` | border of the glowing border cards at rest |
| `glowColors` | `#22d3ee, #a855f7, #f43f5e` | colours of the rotating border, after the accent colour |
| `radius` | 18 | corner radius in px |
| `gap` | 24 | space between the images in px |

Button labels: `lib.rollovercollection5.label.readMore`, `.open`, `.close`
(English, Italian and German included; add `lang.xx` for other languages).

### Performance

* The stylesheet (about 22 KB, 5 KB compressed) and the colour variables are added only to pages
  that contain a MOTION layout, once per page.
* One scaled image per file (`imageMaxWidth`), loaded lazily. The curtain layout uses the same
  image twice (one download, the browser reuses it).
* Animations use only `transform`, `opacity`, `clip-path` and `filter`; the glowing border rotates
  only while the pointer is on the card.

## License

GPL-2.0-or-later, see LICENSE.
