# Replyko Design System

Use these rules for both `replyko.com` and `app.replyko.com`. Do not introduce alternate brand palettes, typography systems, or CTA colors.

## Core Intent

Replyko should feel:
- Clear
- Trustworthy
- Modern
- Fast
- Conversion-oriented without looking noisy

Apply the same core visual language across both repos, then adjust layout and density based on product context:
- `replyko.com`: more marketing, storytelling, and conversion emphasis
- `app.replyko.com`: more utility, clarity, and workflow emphasis

## Colors

Never deviate from these tokens:

| Token | Value | Usage |
| --- | --- | --- |
| Primary Brand | `#4F46E5` | Logo, icons, borders, secondary buttons |
| Primary Dark | `#3730A3` | Hover and active brand states |
| Primary Soft | `#EEF2FF` | Section backgrounds, hover tints |
| CTA Accent | `#FF512F` | Conversion CTAs only |
| Slate 50 | `#F8FAFC` | Page background |
| Slate 200 | `#E2E8F0` | Borders |
| Slate 600 | `#475569` | Body text |
| Slate 900 | `#0F172A` | Headings |
| Slate 950 | `#020617` | Dark background |
| Success Emerald | `#10B981` | Verified badges, checkmarks, trust indicators |

Rules:
- Use Tailwind Slate neutrals only. Never swap to Gray or Zinc.
- Use Coral `#FF512F` only for conversion actions such as `Get Started Free`, `Start Free Trial`, and `Sign Up`.
- Do not use Coral as a decorative accent.
- Trust and Meta API badges must use Emerald, never Indigo.

## Typography

Never change these families:
- Headings and display: `Space Grotesk`, weights `500` and `700`
- Body and UI text: `Manrope`, weights `400`, `500`, `600`, `700`, `800`
- Font source: `fonts.bunny.net`

Usage guidance:
- Reserve `Space Grotesk` for headings, wordmarks, short emphasis, and key numeric moments
- Use `Manrope` for body copy, controls, labels, forms, tables, and dashboard text

## 60-30-10 Balance

Apply the layout ratio:
- 60% neutral slate or white
- 30% Indigo brand usage
- 10% Coral CTA usage only

This is a guardrail against over-branding and against CTA overuse.

## Button Hierarchy

1. Coral CTA
   - Background: `#FF512F`
   - Text: white
   - Shape: `rounded-full`
   - Use only for primary conversion actions
2. Indigo Brand
   - Background: `#4F46E5`
   - Text: white
   - Shape: `rounded-full`
   - Use for secondary important actions
3. Ghost or Outline
   - Background: transparent
   - Border: Slate 200
   - Use for tertiary actions like `Login` or `Learn More`

## Logo

Rules:
- Mark is a white `R` on `#4F46E5`
- Use a rounded square with about `10px` radius on a `40px` square
- Wordmark is `ReplyKo` in `Space Grotesk 700`
- Dark variant keeps indigo mark and white wordmark
- Never recolor the mark
- Never place the mark without at least `16px` clear space on all sides

## Dark Sections

Use:
- `#1E1B4B` or
- `#020617`

Rules:
- Keep CTA buttons Coral in dark sections
- Do not invent alternate CTA colors for dark mode
- Maintain strong contrast for headings and interface chrome

## Site-Level Application

For `replyko.com`:
- Use more generous spacing, section rhythm, and storytelling layouts
- Promote CTA clarity and trust indicators
- Keep hero and pricing areas conversion-focused

For `app.replyko.com`:
- Use denser layouts where needed
- Prioritize readable hierarchy, navigation, table clarity, form clarity, and workflow speed
- Use the shared design system without making the app feel like a landing page
