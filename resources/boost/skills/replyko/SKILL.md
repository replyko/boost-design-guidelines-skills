---
name: replyko
description: Use this skill first for any Replyko-specific work. It gives shared context for both replyko.com and app.replyko.com, defines the target Replyko design system, and routes work to the correct marketing, app, or shared-design module.
---

# Replyko Package

Use this skill first for any Replyko work.

## When To Use This Skill

Activate this skill when the task involves:
- `replyko.com`
- `app.replyko.com`
- shared Replyko design decisions
- cross-repo product consistency
- deciding whether work belongs to the marketing site or the app

## Repo Routing

If the task is in `replyko.com`, also use `replyko-main-site`.

If the task is in `app.replyko.com`, also use `replyko-app-site`.

If the task affects shared brand, colors, typography, CTA hierarchy, or alignment between the two repos, also use `replyko-design-system`.

## Shared Product Context

Replyko has two repos:
- `replyko.com`: public marketing site
- `app.replyko.com`: logged-in product app

Both should feel like one product, not two separate brands.

## Shared Design Rules

- Primary Brand: `#4F46E5`
- Primary Dark: `#3730A3`
- Primary Soft: `#EEF2FF`
- CTA Accent: `#FF512F`
- Success / trust: `#10B981`
- Neutrals: Tailwind Slate only
- Headings: `Space Grotesk`
- Body / UI: `Manrope`

## Important Current Reality

- The marketing repo is already close to the target Replyko design system.
- The app repo still has a teal-based token system in current code.

Practical rule:
- for small local app fixes, preserve nearby conventions when necessary
- for new shared or strategic UI work, move the app toward the shared Replyko Indigo / Coral system instead of expanding teal usage
