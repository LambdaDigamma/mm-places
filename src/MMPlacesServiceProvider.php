<?php

namespace LambdaDigamma\MMPlaces;

use Illuminate\Support\ServiceProvider;
use LambdaDigamma\MMPlaces\Commands\MMPlacesCommand;

class MMPlacesServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../config/mm-places.php' => config_path('mm-places.php'),
            ], 'config');

            $this->publishes([
                __DIR__ . '/../resources/views' => base_path('resources/views/vendor/mm-places'),
            ], 'views');

            $migrationFileName = 'create_mm_places_table.php';
            if (! $this->migrationFileExists($migrationFileName)) {
                $this->publishes([
                    __DIR__ . "/../database/migrations/{$migrationFileName}.stub" => database_path('migrations/' . date('Y_m_d_His', time()) . '_' . $migrationFileName),
                ], 'migrations');
            }

            $this->commands([
                MMPlacesCommand::class,
            ]);
        }

        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'mm-places');
    }

    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/mm-places.php', 'mm-places');
    }

    public static function migrationFileExists(string $migrationFileName): bool
    {
        $len = strlen($migrationFileName);
        foreach (glob(database_path("migrations/*.php")) as $filename) {
            if ((substr($filename, -$len) === $migrationFileName)) {
                return true;
            }
        }

        return false;
    }
}
