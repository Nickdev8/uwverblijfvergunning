# Repository Guidelines

## Project Structure & Module Organization
- `index.php`, `info.php`, `header.php`, `footer.php`: Core templates composed through PHP includes. Treat `index.php` as the landing page and `info.php` as the router for article content under `info/`.
- `info/`: Individual knowledge-base articles. Match filenames to the `?page=` query parameter (e.g., `EUprocedure` → `info/EUprocedure.php`).
- `css/style.css`: Central stylesheet; the site expects a single compiled file. Keep additional component styles scoped with class selectors.
- `js/main.js`: Lightweight behaviour (parallax hero, sticky header). Avoid adding frameworks or large dependencies.
- `fotos/`: Static imagery. Optimise assets before committing to keep payloads small.

## Local Development & Verification
- Start a local server from the repo root with `php -S localhost:8000` and open `http://localhost:8000`.
- Run a quick syntax check on all PHP files before committing: `for f in *.php info/*.php; do php -l "$f"; done`.
- When editing CSS/JS, refresh the browser with cache disabled (e.g., Chrome DevTools → Disable cache) to confirm the latest bundle loads.

## Coding Style & Naming Conventions
- PHP: use `<?php ... ?>` blocks, four-space indentation, and guard includes with simple conditionals where needed. Escape dynamic output with `htmlspecialchars`.
- CSS: favour BEM-like class naming (`.contact-wrapper`, `.hero-inner`), keep variables in `:root`, and group related selectors together.
- JS: modern ES syntax (const/let, arrow functions). Keep scripts idempotent; bind once on `DOMContentLoaded`.
- Assets and new pages should follow existing lowercase naming (`info/my-topic.php`, `fotos/my-image.jpg`).

## Testing Guidelines
- There is no automated test suite; rely on manual validation plus `php -l`.
- When adding logic, create targeted sanity scripts or temporary assertions during development, then remove them before pushing.
- For new content modules, verify navigation targets (`href="#section"`) still align after layout changes.

## Commit & Pull Request Guidelines
- Commit messages should be active and concise (e.g., `Align contact form spacing`, `Add EU procedure article`). Group related changes; avoid mixed refactors/content commits.
- Pull requests should include: purpose summary, screenshots or GIFs for UI changes (desktop + mobile), steps to verify (commands run, browsers checked), and references to any tracked issues.
- Before opening a PR, ensure no stray debugging output remains and run the syntax loop noted above.
