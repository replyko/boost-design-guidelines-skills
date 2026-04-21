# Replyko Design Alignment Plan

Use this when the task is about bringing `app.replyko.com` closer to the same design system as `replyko.com`.

## Goal

Move both repos toward one visible Replyko identity without breaking product usability or creating a large unstable redesign.

## Current State

- `replyko.com` is already close to the target Indigo/Coral system
- `app.replyko.com` still uses teal-based semantic tokens in shared CSS and React UI primitives

## Practical Migration Rules

1. Do not redesign the entire app in one pass.
2. Do not keep expanding teal usage in new shared components.
3. For app work, prefer migrating at the token and shared-component level when the task scope allows it.
4. For isolated bug fixes or narrow product work, preserve nearby conventions unless the user explicitly asks for alignment.

## Suggested Order

### Phase 1: Shared Token Alignment

- update app-level semantic tokens so `primary` maps to Replyko Indigo instead of teal
- define a clear CTA accent token for Coral
- preserve semantic state colors for destructive, warning, and success
- keep Slate neutrals

### Phase 2: Shared Primitives

- align shared React button variants with the Replyko button hierarchy
- align badges, tabs, nav indicators, and icon containers with Indigo instead of teal
- keep forms and dense controls product-appropriate rather than marketing-styled

### Phase 3: Strategic Surfaces

- onboarding
- dashboard summary surfaces
- billing and pricing surfaces
- account connection success and trust states

These are the highest-value screens for visible alignment.

## Things To Preserve

- existing product information density where it helps task completion
- clear operational states
- accessibility and contrast
- current route, controller, and component architecture

## Things To Avoid

- hero-style marketing layouts inside the app
- decorative Coral spread across normal controls
- one-off color exceptions per screen
- mixing the old teal system and new Indigo system without a clear semantic plan
