# Replyko Package Structure

This repo should be used as one Replyko package with three modules.

## Package

Name:
- `replyko`

Purpose:
- provide one AI-facing source of truth for both Replyko repos
- reduce design drift between the marketing site and the app
- keep repo-specific guidance available without splitting into separate packages

## Modules

### Core

Applies to both repos.

Files:
- `guidelines/design-system.md`
- `guidelines/project-context.md`
- `guidelines/repo-findings.md`
- `skills/replyko/SKILL.md`
- `skills/replyko-design-system/SKILL.md`

Responsibilities:
- shared brand system
- shared product understanding
- shared language
- cross-repo consistency

### Marketing

Applies to `replyko.com`.

Files:
- `guidelines/main-site.md`
- `templates/main-site-CLAUDE.md`
- `skills/replyko-main-site/SKILL.md`

Responsibilities:
- conversion-focused marketing guidance
- Blade and Tailwind public-site patterns
- blog, comparison, use-case, and legal page context

### App

Applies to `app.replyko.com`.

Files:
- `guidelines/migration-plan.md`
- `guidelines/app-site.md`
- `templates/app-site-CLAUDE.md`
- `skills/replyko-app-site/SKILL.md`

Responsibilities:
- workflow-first product UI guidance
- Inertia, React, and TypeScript app patterns
- product-surface alignment toward the shared Replyko system
- teal-to-Indigo migration sequencing

## Usage Rule

Default usage should be:
1. start with the `replyko` package skill
2. load the `core` guidance
3. then load the `marketing` or `app` module depending on the repo

For cross-repo design work, use the `replyko-design-system` skill directly instead of routing through a module.

This keeps one package while preserving repo-specific depth.
