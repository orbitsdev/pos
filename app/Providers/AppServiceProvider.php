<?php

namespace App\Providers;

use Filament\Facades\Filament;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Schema;
use Filament\Navigation\NavigationItem;
use Illuminate\Support\ServiceProvider;
use App\Filament\Resources\UserResource;
use Filament\Navigation\NavigationGroup;
use Filament\Navigation\NavigationBuilder;
use App\Filament\Resources\ProductResource;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {

        Blade::directive('formattedNumber', function ($expression) {
            return "<?php echo $expression !== null ? number_format($expression) : ''; ?>";
        });
        Schema::defaultStringLength(191);

        // Filament::serving(function () {

        //     Filament::navigation(function (NavigationBuilder $builder): NavigationBuilder {
        //         return $builder->items([
        //             NavigationItem::make('Dashboard')
        //                 ->icon('heroicon-o-home')
        //                 ->activeIcon('heroicon-s-home')
        //                 ->isActiveWhen(fn (): bool => request()->routeIs('filament.pages.dashboard'))
        //                 ->url(route('filament.pages.dashboard')),
                   
                  
                   
                        
        //                 NavigationGroup::make('System')->items([
                            
        //                     ...UserResource::getNavigationItems(),
        //                 ]),
        //                 NavigationGroup::make('Service')->items([
                            
        //                     ...ProductResource::getNavigationItems(),
        //                 ]),
                   
        //         ]);
        //     });
            
        // });


    }
}
