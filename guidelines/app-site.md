# App Site Guidance

Use this guidance for work in the `app.replyko.com` repo.

## Purpose

The app is a product interface. It should help users finish tasks with confidence and speed while still feeling aligned with the Replyko brand.

## UX Priorities

- Clear information hierarchy
- Predictable navigation
- Readable forms, tables, cards, and status states
- Reduced friction in task-heavy flows
- Strong visual consistency with the marketing site without marketing-style excess

## Stack Reality

- Laravel 13
- Inertia v3 with React 19 and TypeScript
- Tailwind v4
- shadcn/radix-style component primitives
- Filament for internal/admin tooling
- Product areas for workspaces, onboarding, connected accounts, automations, logs, billing, and operational status

AI systems should follow existing React/Inertia patterns, typed frontend code, and component reuse conventions in this repo.

## Important Current Mismatch

The app currently has a teal-based token system documented in:
- `design-tokens.md`
- `resources/css/app.css`

This package represents the desired shared Replyko direction, not the current full reality of the app.

Practical rule:
- do not expand the old teal system in new strategic UI work
- for small local fixes, preserve nearby conventions unless the task is explicitly about design alignment
- for new shared surfaces, prefer the Replyko Indigo/Coral system and shared typography

## Visual Behavior

- Use the same color tokens and typography as the main site
- Reduce decorative treatments compared with the main site
- Use Indigo for structure, navigation emphasis, and important secondary actions
- Reserve Coral for true primary actions such as signup or major forward flow actions where appropriate
- Use Emerald for verified states and trust indicators

## Avoid

- Landing-page hero treatment inside the product
- Oversized headings where workflow density matters
- Decorative CTA styling on routine controls
- Ad hoc component styling that breaks the shared system
- Introducing more teal-specific design primitives when the work could move toward the shared Replyko system
