# Replyko Repo Findings

These findings are based on the current state of the actual repos.

## `replyko.com`

Observed stack:
- Laravel 13
- Blade views
- Tailwind v4
- Alpine
- Filament

Observed public surface:
- homepage
- blog
- category and tag pages
- competitor alternative and comparison pages
- use-case pages
- legal pages
- locale-aware routes

Observed design behavior:
- uses `Space Grotesk` and `Manrope`
- already uses Indigo and Coral marketing tokens
- already uses `fonts.bunny.net`
- primary conversion button already uses Coral in `resources/views/components/marketing/button-link.blade.php`

Implication:
- this repo is already close to the target Replyko design system
- AI guidance here should mostly reinforce and protect the current direction

## `app.replyko.com`

Observed stack:
- Laravel 13
- Inertia v3
- React 19
- TypeScript
- Tailwind v4
- shadcn/radix-style UI primitives
- Filament

Observed product surface:
- authentication and onboarding
- workspaces
- Instagram account connection and automations
- Facebook account connection and automations
- automation logs and operational status
- billing and plans
- queues, webhooks, and admin tooling

Observed design behavior:
- `Space Grotesk` and `Manrope` are present
- app docs and CSS still define a teal primary system
- design tokens in `design-tokens.md` conflict with the target Indigo/Coral system
- buttons and badges currently inherit the teal `primary` token through shared React UI primitives

Implication:
- this repo needs migration guidance, not just brand reinforcement
- AI guidance should distinguish between small local maintenance and deliberate alignment work
