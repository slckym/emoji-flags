<?php

    namespace Slckym\Flags;

    use Slckym\Flags\Flags as CountryFlags;
    use Illuminate\Support\ServiceProvider;

    /**
     * Class FlagsServiceProvider
     * @package Slckym\Flags
     */
    class FlagsServiceProvider extends ServiceProvider
    {
        /**
         * Perform post-registration booting of services.
         *
         * @return void
         */
        public function boot()
        {
            $this->publishes([
                __DIR__.'/../config/flags.php' => config_path('flags.php'),
            ], 'config');

            $this->app->bind(CountryFlags::class, function () {
                return new CountryFlags(config('flags.aliases'));
            });

            $this->app->singleton('flags', Flags::class);
        }

        /**
         * Register bindings in the container.
         *
         * @return void
         */
        public function register()
        {
            $this->mergeConfigFrom(__DIR__.'/../config/flags.php', 'flags');
        }
    }
