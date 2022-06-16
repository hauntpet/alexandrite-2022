<?php

namespace HauntPet\Alexandrite;

use HauntPet\Theme\Facades\Repository;
use Illuminate\Support\ServiceProvider;

class ThemeServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $key = 'alexandrite';

        Repository::add($key, [
            'title' => 'Alexandrite (2022 Default Theme)'
        ]);
        Repository::loadViews($key, __DIR__ . '/../views');
        Repository::activate($key);
    }
}
