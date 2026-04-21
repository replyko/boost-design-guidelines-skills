# Replyko AI Package

This repo is one shared Replyko AI package for:
- `replyko.com`
- `app.replyko.com`

It defines the target shared Replyko design system, documents how the two repos differ today, and provides reusable AI guidance for both codebases.

## What I Verified

- `replyko.com` is a Laravel 13 marketing site using Blade, Tailwind v4, Alpine, localized marketing content, blog pages, competitor pages, use-case pages, legal pages, and a Filament-backed content/admin layer.
- `app.replyko.com` is a Laravel 13 product app using Inertia v3, React 19, TypeScript, Tailwind v4, shadcn/radix-style UI primitives, workspaces, Instagram and Facebook automations, billing, OAuth, queues, and Filament admin tooling.
- The main site already uses the intended Indigo/Coral brand direction.
- The app currently has a separate teal-based token system in `design-tokens.md` and `resources/css/app.css`.

## Package Model

This repo should be treated as:
- one package
- with three modules

### Core module

Shared across both repos:
- design system
- product context
- repo findings
- migration rules
- shared vocabulary and brand guardrails

### Marketing module

Specific to `replyko.com`:
- Blade and Tailwind marketing patterns
- conversion rules
- SEO and content surface guidance

### App module

Specific to `app.replyko.com`:
- Inertia, React, and TypeScript product UI guidance
- workflow-first product UI rules
- migration path from teal to the shared Replyko system

## Structure

- `guidelines/`: canonical shared rules and module-level guidance
- `templates/`: project-specific CLAUDE add-ons to merge into each repo's existing Laravel Boost instructions
- `skills/`: Codex-compatible package skill plus module skills

## Recommended Use

1. Keep each repo's existing Laravel Boost `CLAUDE.md`
2. Merge the relevant template from `templates/` into the project-specific section of that repo's instructions
3. Use `skills/replyko/SKILL.md` as the package entrypoint
4. Use the module skills for deeper repo-specific work:
   - `skills/replyko-design-system`
   - `skills/replyko-main-site`
   - `skills/replyko-app-site`

## Canonical Files

- Shared design system: `guidelines/design-system.md`
- Shared project context: `guidelines/project-context.md`
- Verified repo findings: `guidelines/repo-findings.md`
- Migration guidance for alignment: `guidelines/migration-plan.md`
- Package structure: `guidelines/package-structure.md`
- Marketing site guidance: `guidelines/main-site.md`
- Product app guidance: `guidelines/app-site.md`
