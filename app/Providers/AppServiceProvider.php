<?php

namespace App\Providers;

use App\Models\General;
use Illuminate\Support\ServiceProvider;
use App\Models\Message;
use App\Models\NewsletterSubscriber;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;

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
        Schema::defaultStringLength(191);
        
        View::composer('components.app.sidebar', function ($view) {
            // Obtener los datos del footer
            $mensajes = Message::where('is_read', '!=', 1 )->where('status', '!=', 0)->where('source', '=', 'piscinas')->count();
            $suscriptores = NewsletterSubscriber::where('active', '=', 1 )->count();  
            // Pasar los datos a la vista
            $view->with('mensajes', $mensajes)
                ->with('suscriptores', $suscriptores);
        });


        View::composer('components.public.footer', function ($view) {
            // Obtener los datos del footer
            $datosgenerales = General::all(); // Suponiendo que tienes un modelo Footer y un método footerData() en él
            // Pasar los datos a la vista
            $view->with('datosgenerales', $datosgenerales);
        });
    }
}