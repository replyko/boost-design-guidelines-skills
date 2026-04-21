# Replyko AI Package Repo

This repository is the source of truth for AI-facing guidance used across the Replyko ecosystem.

Scope:
- One shared Replyko package for both `replyko.com` and `app.replyko.com`
- A `core` module shared by both repos
- A `marketing` module for `replyko.com`
- An `app` module for `app.replyko.com`
- Reusable skills and templates that can be copied into the main site repo and the app repo

Authoring rules:
- Keep the shared design system consistent across all files in this repo
- Treat `guidelines/design-system.md` as the canonical visual spec
- Treat `guidelines/main-site.md` and `guidelines/app-site.md` as the behavioral split between repos
- Treat `guidelines/package-structure.md` as the package layout reference
- Keep skills concise and use references instead of duplicating long specs
- When updating colors, typography, button hierarchy, or logo guidance, update all affected templates and skills in the same change

Deliverables in this repo:
- `guidelines/` for canonical written guidance
- `templates/` for repo-specific `CLAUDE.md` add-ons
- `skills/replyko/` for the package entrypoint
- `skills/replyko-design-system/` for core design-system usage
- `skills/replyko-main-site/` for marketing-site usage
- `skills/replyko-app-site/` for app-site usage
