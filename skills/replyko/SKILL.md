---
name: replyko
description: Use this skill as the package entrypoint for any Replyko work. It routes AI systems to the shared core guidance and then to the correct repo-specific module for replyko.com or app.replyko.com so both repos follow one product identity without losing stack-specific implementation context.
---

# Replyko Package

Use this skill first for any work related to Replyko.

## Package Model

Replyko should be treated as one package with three modules:
- `core`
- `marketing`
- `app`

## Read In This Order

1. [../../guidelines/package-structure.md](../../guidelines/package-structure.md)
2. [../../guidelines/project-context.md](../../guidelines/project-context.md)
3. [../../guidelines/repo-findings.md](../../guidelines/repo-findings.md)
4. [../../guidelines/design-system.md](../../guidelines/design-system.md)

## Then Route By Repo

If the task is in `replyko.com`:
- read [../../guidelines/main-site.md](../../guidelines/main-site.md)
- use [../replyko-main-site/SKILL.md](../replyko-main-site/SKILL.md)

If the task is in `app.replyko.com`:
- read [../../guidelines/migration-plan.md](../../guidelines/migration-plan.md)
- read [../../guidelines/app-site.md](../../guidelines/app-site.md)
- use [../replyko-app-site/SKILL.md](../replyko-app-site/SKILL.md)

If the task is shared design work across both repos:
- use [../replyko-design-system/SKILL.md](../replyko-design-system/SKILL.md)

## Package Rules

- Keep one Replyko identity across both repos
- Do not split brand logic into separate packages
- Use module-specific guidance instead of inventing repo-specific visual systems
- Be explicit about whether a change follows current local conventions or moves the product toward the shared target system
