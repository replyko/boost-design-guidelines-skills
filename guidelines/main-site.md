# Main Site Guidance

Use this guidance for work in the `replyko.com` repo.

## Purpose

The main site is a conversion-focused marketing site. Every section should support one or more of these goals:
- Clarify the product
- Increase trust
- Reduce signup friction
- Move users toward a trial or signup

## UX Priorities

- Strong hero clarity within the first viewport
- Obvious CTAs with Coral reserved for primary conversion
- Strong trust signals
- Clear feature explanation
- Clean comparison or pricing sections
- Consistent brand voice and visual rhythm

## Stack Reality

- Laravel 13
- Blade views in `resources/views`
- Tailwind v4
- Alpine for lightweight interaction
- Filament for content/admin management
- Existing public routes for blog, alternatives, comparisons, use cases, legal pages, and localized variants

AI systems should prefer the existing Blade component and route conventions used in this repo.

## Visual Behavior

- Use more spacious section padding than the app
- Use Indigo for brand framing and Coral only for primary conversion buttons
- Use Primary Soft backgrounds to separate sections without adding noise
- Use Emerald for Meta API and verification signals

## Avoid

- Dense dashboard-like layouts
- Overloaded navs or control-heavy sections
- Decorative Coral usage
- Generic startup gradients that do not map to the approved palette
- Alternate fonts or neutral palettes
- App-style shadcn dashboard chrome inside public marketing pages
