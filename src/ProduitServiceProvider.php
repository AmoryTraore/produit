<?php
namespace Sm\Produit; 
use Illuminate\Support\ServiceProvider;

class ProduitServiceProvider extends ServiceProvider{

    public function boot(){
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/views', 'produit');
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
        $this->publishes([__DIR__.'/public/assets'=>public_path('/assets'),'public']);
        // $this->publishes([__DIR__.'/Http/Controller/'=>base_path('app/Http/Controllers/'),'app']);
        $this->publishes([
            __DIR__.'/views'=>base_path('resources/views/'),'resource'
            ]);
        
    }

    public function register(){
        
    }
}