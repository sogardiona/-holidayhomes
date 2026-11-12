# holidayhomes.lu

Hand-coded PHP/HTML. Every push to `main` deploys to **test.holidayhomes.lu** (GitHub Actions → FTP into `public_html/test`).

- `index.php` — the gate (buy / sell)
- `buy/`, `sell/` — the two worlds
- `includes/config.php` — site-wide text and settings (change once, updates everywhere)
- `assets/css/site.css` — the one stylesheet
- `assets/fonts/` — self-hosted Cormorant Garamond and Inter (SIL OFL)

Going live: set `noindex` to false in config, remove the X-Robots-Tag lines in `.htaccess` and the `Disallow` in `robots.txt`, and change `test/` to `./` in `.github/workflows/deploy.yml`.
