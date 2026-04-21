# Replyko Project Context

Replyko has two separate repos that should converge on one recognizable product identity.

## Main Site

- Domain: `replyko.com`
- Stack: Laravel 13, Blade, Tailwind v4, Alpine, Filament
- Purpose: marketing website and public content system
- Current responsibilities:
  - homepage and conversion funnels
  - blog and SEO content
  - competitor alternative/comparison pages
  - use-case pages
  - legal pages
  - localized content and locale switching

## App Site

- Domain: `app.replyko.com`
- Stack: Laravel 13, Inertia v3, React 19, TypeScript, Tailwind v4, shadcn/radix-style UI, Filament
- Purpose: logged-in product application
- Current responsibilities:
  - workspace-based product flows
  - Instagram automations
  - Facebook automations
  - onboarding
  - billing and subscriptions
  - webhook ingestion and execution tracking
  - admin and operational tooling

## Shared Product Story

Replyko helps creators and businesses automate Instagram and related messaging workflows. The site sells the promise; the app delivers the workflow.

## Shared Principles

- One brand system across both repos
- One vocabulary across both repos
- Marketing can be more expressive, but it must not look unrelated to the app
- Product can be denser, but it must still feel unmistakably Replyko
- New design work should reduce drift, not increase it

## Current Reality

- `replyko.com` already reflects the desired Indigo and Coral direction
- `app.replyko.com` currently ships a separate teal token system
- This package should be treated as the target system for future alignment work

## AI Guidance Intent

This repo exists to help AI systems:
- understand the real differences between the two repos
- keep implementation advice stack-aware
- follow one target design system even while the app is mid-transition
- avoid inventing new visual languages per feature or repo
