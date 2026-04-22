# Replyko Boost Design Guidelines Skills

Laravel Boost package for Replyko-specific AI guidelines and agent skills.

This package is intended for the Replyko ecosystem and should be installed in:

- `replyko.com`
- `app.replyko.com`

## What This Package Provides

This package adds Replyko guidance on top of Laravel Boost by shipping:

- a shared Replyko guideline
- a shared package entry skill
- a shared design-system skill
- a marketing-site skill for `replyko.com`
- an app-site skill for `app.replyko.com`

These files live under `resources/boost/...` so Laravel Boost can install them into the consuming Laravel project.

## Included Resources

### Guidelines

- `resources/boost/guidelines/core.blade.php`

### Skills

- `resources/boost/skills/replyko/SKILL.md`
- `resources/boost/skills/replyko-design-system/SKILL.md`
- `resources/boost/skills/replyko-main-site/SKILL.md`
- `resources/boost/skills/replyko-app-site/SKILL.md`

## Requirements

- PHP `^8.2 || ^8.3 || ^8.4 || ^8.5`
- Laravel / Illuminate Support `^12.0 || ^13.0`
- `laravel/boost` installed in the consuming project

## Installation

This package is currently intended for local Composer path installation.

### 1. Add the package as a path repository

In the target Laravel app's `composer.json`, add:

```json
{
  "repositories": [
    {
      "type": "path",
      "url": "../boost-design-guidelines-skills",
      "options": {
        "symlink": true
      }
    }
  ]
}
```

Adjust the relative path to match your local directory structure.

### 2. Require the package

```bash
composer require --dev replyko/boost-design-guidelines-skills:^0.0.1
```

### 3. Refresh Laravel and Boost resources

After installing or changing this package, run these commands in the consuming Laravel project:

```bash
composer update replyko/boost-design-guidelines-skills
composer dump-autoload
php artisan package:discover --ansi
php artisan boost:update
```

If Boost has not been installed in the target project yet, you can use:

```bash
php artisan boost:install
```

## How It Works

This package registers a Laravel service provider so the consuming application can discover it normally through Composer package discovery.

Once the package is discovered, Laravel Boost can read:

- `resources/boost/guidelines/...`
- `resources/boost/skills/...`

and install those resources into the consuming project's AI files when `php artisan boost:update` or `php artisan boost:install` is run.

## Updating

When you update any guideline or skill in this package, refresh the consuming app with:

```bash
composer update replyko/boost-design-guidelines-skills
composer dump-autoload
php artisan package:discover --ansi
php artisan boost:update
```

## Intended Usage

Use:

- `replyko` as the shared entry skill for Replyko work
- `replyko-main-site` for `replyko.com`
- `replyko-app-site` for `app.replyko.com`
- `replyko-design-system` for shared design-system and cross-repo alignment work
