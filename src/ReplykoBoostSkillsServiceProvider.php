<?php

declare(strict_types=1);

namespace Replyko\BoostDesignGuidelinesSkills;

use Illuminate\Support\ServiceProvider;

class ReplykoBoostSkillsServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        // Boost auto-discovers resources/boost/ directory
    }
}
