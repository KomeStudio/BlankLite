# BlankLite: Ultra-Lightweight WordPress Starter & Fallback Theme

**BlankLite** is a zero-bloat, classic WordPress theme in a handful of tiny files. Use it as a permanent **fallback theme**, a clean **starter theme**, or a blank canvas for **page builders** (Elementor, Bricks) and **headless** setups. No JavaScript, no options panel, no maintenance.

- **Live demo:** [wp-themes.com/blanklite](https://wp-themes.com/blanklite/)
- **Theme page:** [komestudio.com/blanklite](https://komestudio.com/blanklite)
- **Download:** [Releases](https://github.com/KomeStudio/BlankLite/releases)

## Why BlankLite

- **Tiny footprint:** about 6 KB for the standard edition, about 4 KB for the Mini edition. Ideal for shared hosting with limited storage.
- **Future-proof:** relies only on long-stable classic theme functions. Built for WordPress 5.2+ and PHP 7.4+, with clean code for current and upcoming PHP versions (8.3, 8.4+).
- **No JavaScript:** only WordPress core's comment-reply script loads, and only when threaded comments are enabled.
- **Page-builder friendly:** layout rules use zero-specificity selectors, so Elementor, Bricks and other builders can override them freely.
- **Headless friendly:** minimal markup and standard WordPress hooks (`wp_head`, `wp_body_open`, `wp_footer`).
- **Free and open source:** GPL v2 or later.

## Requirements

| | Minimum | Tested up to |
|---|---|---|
| WordPress | 5.2 | 7.1 |
| PHP | 7.4 | 8.4+ ready |

## Two editions

| | Standard (`BlankLite.zip`) | Mini (`BlankLite-Mini.zip`) |
|---|---|---|
| Best for | WordPress.org-style installs, most users | Smallest possible footprint |
| Files | 7 | 4 |
| Size | about 6.4 KB | about 4.3 KB |
| `header.php` / `footer.php` | Yes | No (single `index.php`) |
| Comments template | Yes | No |
| Updates | Standard WordPress updates | Not auto-updated; download new releases manually |

Both editions share the same look and the same core code. The Mini edition lives in the [`mini/`](mini/) folder of this repository.

## Installation

1. Download the zip from [Releases](https://github.com/KomeStudio/BlankLite/releases).
2. In WordPress, go to **Appearance > Themes > Add New > Upload Theme**, choose the zip, and activate it. Or upload the `blanklite` folder to `/wp-content/themes/` by FTP.
3. Optional: add this line to `wp-config.php` so core updates stop installing a new default theme every year and your storage stays small:

```php
define( 'CORE_UPGRADE_SKIP_NEW_BUNDLED', true );
```

## Repository layout

```
BlankLite/
├── header.php
├── footer.php
├── index.php
├── comments.php
├── functions.php
├── style.css
├── readme.txt
├── mini/          # Mini edition (4 files)
├── README.md
└── LICENSE
```

Please install from the zip files in Releases rather than GitHub's automatic "Source code" archive, which uses a different folder name.

## FAQ

**Is BlankLite a good fallback theme?**
Yes. It keeps your site functional and fast if your main theme is deleted or breaks, and it takes almost no disk space.

**Can I use it with Elementor or Bricks?**
Yes. BlankLite provides a clean, unopinionated canvas. For full-width pages, use the builder's own canvas or blank page template.

**Does it collect any data?**
No. BlankLite does not track, collect or send any data.

**Can I build a child theme on top of it?**
Yes. The setup function is wrapped in `function_exists()`, so a child theme can override it.

## Support the project

BlankLite is free and will stay free. If it saves you time or storage, please consider supporting its development:

**[Donate at hoangdacviet.github.io](https://hoangdacviet.github.io)**

Starring this repository and sharing the theme also helps a lot.

## About the author

BlankLite is created by [hoangdacviet](https://komestudio.com/hoangdacviet), founder of [Kome Studio](https://komestudio.com). Focused on minimalism and speed, he builds lightweight web tools and [Kome Games](https://kome.top), an instant-play platform for classic casual puzzles and retro arcade games with zero friction.

- Website: [komestudio.com](https://komestudio.com)
- Games: [kome.top](https://kome.top), free browser games with no sign-up
- WordPress.org profile: [hoangdacviet](https://profiles.wordpress.org/hoangdacviet/)

## License

BlankLite is licensed under the [GNU General Public License v2 or later](https://www.gnu.org/licenses/gpl-2.0.html).
Copyright 2026 hoangdacviet.
