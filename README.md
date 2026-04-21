# Replyko Boost Package

This repository is a Laravel Boost package for the Replyko ecosystem.

It is intended to be installed in:
- `replyko.com`
- `app.replyko.com`

## Package Files

- `composer.json`
- `resources/boost/guidelines/core.blade.php`
- `resources/boost/skills/replyko/SKILL.md`
- `resources/boost/skills/replyko-design-system/SKILL.md`
- `resources/boost/skills/replyko-main-site/SKILL.md`
- `resources/boost/skills/replyko-app-site/SKILL.md`

## Purpose

This package gives Laravel Boost:
- one shared Replyko guideline
- one package entry skill
- repo-specific skills for the marketing site and app site
- a shared design-system skill for cross-repo alignment

## Install In A Laravel App

1. Require the package with Composer.
2. Run:

```bash
php artisan boost:update
```

or:

```bash
php artisan boost:install
```

Laravel Boost should then discover the package resources from `resources/boost/...`.
