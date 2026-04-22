<?php

declare(strict_types=1);

namespace Replyko\BoostDesignGuidelinesSkills;

use Illuminate\Support\ServiceProvider;

class ReplykoBoostSkillsServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        // This provider exists so Laravel can discover the package and Boost can
        // see the package resources under resources/boost.
    }
}
