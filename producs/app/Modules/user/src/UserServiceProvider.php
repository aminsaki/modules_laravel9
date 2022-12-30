<?php

namespace torfeh\modules\user;

use App\Modules\account\src\Models\Schemas\Constants\AccountConstant;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class UserServiceProvider extends ServiceProvider
{

    protected $namespace = 'app/Modules/user';
    /**
     * Make config punishment optional by merging the config from the package.
     *
     * @return  void
     */
    public function register(): void
    {
        $this->routeRegister();
    }

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
        Route::prefix('api/v1')
            ->group(__DIR__.'/routes/api.php');
    }
}
