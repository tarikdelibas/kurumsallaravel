<?php

namespace App\Providers;

use App\Hizmetler;
use App\Menuler;
use App\Projeler;
use App\SiteAyar;
use App\Urunler;
use Illuminate\Support\ServiceProvider;
use Illuminate\View\View;


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
        $site_ayarlar_provider = SiteAyar::where('id',1)->first();
        $menuler = Menuler::all();
        $hizmetler = Hizmetler::all();
        $projeler = Projeler::all();
        $urunler = Urunler::all();
        \Illuminate\Support\Facades\View::share([
            'site_ayarlar_provider' => $site_ayarlar_provider,
            'menuler' => $menuler,
            'hizmetler' => $hizmetler,
            'projeler' => $projeler,
            'urunler' => $urunler,
        ]);
    }
}
