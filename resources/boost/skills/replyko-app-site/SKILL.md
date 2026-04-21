---
name: replyko-app-site
description: Use this skill for work in the app.replyko.com repository so AI systems build product UI that is clear, efficient, and consistent with the Replyko design system while respecting the app's Inertia, React, and TypeScript architecture.
---

# Replyko App Site

Use this skill for work in `app.replyko.com`.

## When To Use This Skill

Activate this skill for:
- onboarding
- dashboard UI
- connected account screens
- automation screens
- automation log screens
- billing and plans
- settings and workspace flows
- Inertia React TypeScript UI work
- product-surface design alignment

## Stack Context

- Laravel
- Inertia
- React
- TypeScript
- Tailwind CSS
- shared component primitives
- Filament for admin/internal tooling

## Product UI Rules

- optimize for workflow clarity and speed
- keep layouts readable and predictable
- do not turn product screens into landing pages
- keep dense UI where task completion benefits from it

## Important Current Reality

The app currently uses a teal-based token system in local code.

Practical rule:
- for narrow fixes, preserve nearby conventions when changing them would cause unnecessary churn
- for new shared or strategic surfaces, move toward the Replyko Indigo / Coral system

## Avoid

- decorative Coral on routine controls
- marketing hero patterns inside the app
- expanding teal-specific primitives when a shared Replyko token can be used instead
