<?php
    namespace MyVendor\contactform;

    use Illuminate\Support\ServiceProvider;

    class HelperServiceProvider extends ServiceProvider {
        public function boot()
        {
            $this->loadViewsFrom(__DIR__.'/resources/views', 'helper');

        }
        public function register()
        {
        }
    }
    ?>
