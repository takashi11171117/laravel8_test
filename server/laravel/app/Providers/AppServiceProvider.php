<?php

namespace App\Providers;

use App\Models\Cart;
use App\Models\Article;
use App\Models\Episode;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Relations\Relation;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Relation::morphMap([
            'article' => Article::class,
            'episode' => Episode::class,
        ]);

        View::composer('*', function ($view) {
            $view->with('cart', Cart::bySession()->first());
        });

        Blade::directive('money', function ($expression) {
            return "<?php echo Laravel\Cashier\Cashier::formatAmount($expression, config('cashier.currency')); ?>";
        });
    }
}
