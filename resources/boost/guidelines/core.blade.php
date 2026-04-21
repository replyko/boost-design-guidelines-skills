## Replyko

This package provides Laravel Boost guidance and skills for the Replyko product ecosystem.

Replyko has two separate repositories:
- `replyko.com`: the marketing website
- `app.replyko.com`: the product application

Both repos should converge on one Replyko identity.

### Shared Design System

Always follow these brand rules:

- Primary Brand: `#4F46E5`
- Primary Dark: `#3730A3`
- Primary Soft: `#EEF2FF`
- CTA Accent: `#FF512F`
- Success / trust: `#10B981`
- Neutrals: Tailwind Slate only
- Headings: `Space Grotesk`
- Body / UI: `Manrope`

### Repo Differences

`replyko.com`:
- Laravel + Blade + Tailwind marketing site
- prioritize conversion, trust, SEO pages, and public content

`app.replyko.com`:
- Laravel + Inertia + React + TypeScript product app
- prioritize workflow clarity, task completion, billing, onboarding, connected accounts, and automation management

### Important Current State

The marketing site is already close to the target Indigo / Coral Replyko system.

The app currently still has a teal-based token system in local app code. Do not expand that old teal system in new strategic UI work when the task can move the app toward the shared Replyko design system.

### Skill Activation

Use the Replyko package skill for any Replyko-specific work:
- `replyko`

Then use the matching module skill:
- `replyko-main-site` for `replyko.com`
- `replyko-app-site` for `app.replyko.com`
- `replyko-design-system` for shared design or alignment work across both repos
