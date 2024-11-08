<?php

namespace Bulkmake\BackpackSocialPlay;

use Illuminate\Support\ServiceProvider;

class AddonServiceProvider extends ServiceProvider
{
    use AutomaticServiceProvider;

    protected $vendorName = 'bulkmake';
    protected $packageName = 'backpack-social-play';
    protected $commands = [];
}
