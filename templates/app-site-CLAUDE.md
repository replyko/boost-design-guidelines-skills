# Replyko App Site Rules

Add this to the existing Laravel Boost `CLAUDE.md` in `app.replyko.com`. It is a project-specific add-on, not a replacement for the framework rules.

This repo is `app.replyko.com`, the product application for Replyko.

Follow these rules on every task:

## Product Context

- This repo exists to help users complete product workflows efficiently
- Optimize for clarity, consistency, and speed
- Keep the UI branded, but not marketing-heavy
- Respect the existing Inertia + React + TypeScript architecture and shared component patterns

## Shared Design System

### Colors
- Primary Brand: `#4F46E5`
- Primary Dark: `#3730A3`
- Primary Soft: `#EEF2FF`
- CTA Accent: `#FF512F` and only for true primary conversion or major forward actions
- Neutrals: Tailwind Slate only
- Success: `#10B981`

### Typography
- Headings: `Space Grotesk`
- Body/UI: `Manrope`
- Load from `fonts.bunny.net`

### 60-30-10 Rule
- 60% neutral slate and white
- 30% Indigo brand usage
- 10% Coral CTA usage only

### Button Hierarchy
1. Coral CTA for the highest-priority forward action when appropriate
2. Indigo filled for important actions
3. Ghost or outline for tertiary actions

### Brand Guardrails
- Never recolor the Replyko mark
- Never use Coral decoratively
- Never use Gray or Zinc neutrals
- Meta API and trust badges must use Emerald

## Repo-Specific Guidance

- Favor readable forms, tables, navigation, and state clarity
- Do not turn product screens into landing pages
- Use denser layouts only where workflow demands it
- Prefer consistency over experimentation in core product UI
- The current app still contains teal-based tokens; do not expand that system in new shared UI unless the task is narrowly scoped to an existing local surface
- For new strategic surfaces, move toward the shared Indigo/Coral Replyko system
