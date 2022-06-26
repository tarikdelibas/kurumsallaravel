<?php

namespace App\Http\Controllers;

use App\Hizmetler;
use App\Projeler;
use App\Sayfalar;
use App\SiteSlider;
use App\Urunler;
use App\Yazilar;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $slider = SiteSlider::all();
        return view('frontend.index', compact('slider'));
    }
    public function hizmetler()
    {
        return view('frontend.hizmetler');
    }
    public function hizmetDetay($slug)
    {
        $hizmetDetay = Hizmetler::where('slug',$slug)->first();
        return view('frontend.hizmetDetay', compact('hizmetDetay'));
    }
    public function projeler()
    {
        return view('frontend.projeler');
    }
    public function projeDetay($slug)
    {
        $projeDetay = Projeler::where('slug',$slug)->first();
        return view('frontend.projeDetay', compact('projeDetay'));
    }
    public function urunler()
    {
        return view('frontend.urunler');
    }
    public function urunDetay($slug)
    {
        $urunDetay = Urunler::where('slug',$slug)->first();
        return view('frontend.urunDetay', compact('urunDetay'));
    }
    public function blog()
    {
        $yazilar = Yazilar::paginate(12);
        return view('frontend.blog', compact('yazilar'));
    }
    public function blogDetay($slug)
    {
        $yazi = Yazilar::where('slug',$slug)->fisrt();
        return view('frontend.blogDetay', compact('yazi'));
    }
    public function iletisim()
    {
        return view('frontend.iletisim');
    }
}
