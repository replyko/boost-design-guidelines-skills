---
name: replyko-design-system
description: Use this skill when working on any Replyko UI so the shared design system for replyko.com and app.replyko.com is applied consistently, including fixed color tokens, typography, button hierarchy, logo rules, and repo-aware usage of the same brand system.
---

# Replyko Design System

Use this skill for any Replyko interface work that affects layout, styling, components, or visual direction.

## What This Skill Covers

- Shared brand tokens for both repos
- Correct CTA color usage
- Typography and hierarchy rules
- Logo, dark section, and trust-signal rules
- The difference between marketing-site use and app-site use
- The current mismatch between the marketing repo and the app repo

## Workflow

1. Read [../../guidelines/design-system.md](../../guidelines/design-system.md) first.
2. Read [../../guidelines/project-context.md](../../guidelines/project-context.md) if the repo context is unclear.
3. Read [../../guidelines/repo-findings.md](../../guidelines/repo-findings.md) when you need stack or implementation context.
4. Read [../../guidelines/migration-plan.md](../../guidelines/migration-plan.md) when the task involves alignment or redesign.
5. If the task is in `replyko.com`, also read [../../guidelines/main-site.md](../../guidelines/main-site.md).
6. If the task is in `app.replyko.com`, also read [../../guidelines/app-site.md](../../guidelines/app-site.md).

## Non-Negotiables

- Use Indigo `#4F46E5` as the primary brand color
- Use Coral `#FF512F` only for primary conversion CTAs
- Use Tailwind Slate neutrals only
- Use `Space Grotesk` for headings and `Manrope` for UI/body
- Use Emerald for verification and trust signals
- Do not invent a new visual system per repo

## Output Standard

When proposing or implementing UI changes:
- Preserve one shared Replyko identity
- Adjust density by repo context instead of changing the brand system
- Keep marketing pages more spacious and app pages more utility-driven
- Be explicit when you are preserving existing app-local teal conventions temporarily versus moving work toward the target shared system
