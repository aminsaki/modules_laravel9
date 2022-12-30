<?php

namespace torfeh\modules\bases;

use Illuminate\Support\ServiceProvider;

class BaseServiceProvider extends ServiceProvider
{
    /**
     * Publishes configuration file.
     *
     * @return  void
     */
    public function boot(): void
    {
        //
    }

    /**
     * @return void
     */
    protected function routeRegister(): void
    {
        //
    }

    /**
     * Make config punishment optional by merging the config from the package.
     *
     * @return  void
     */
    public function register(): void
    {
        //
    }
}
