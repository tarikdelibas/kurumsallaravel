<?php

namespace App\Http\Controllers;

use App\Hizmetler;
use App\Menuler;
use App\Projeler;
use App\Sayfalar;
use App\SiteAyar;
use App\SiteBanner;
use App\SiteSlider;
use App\Urunler;
use App\Yazilar;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }
    public function sayfalar()
    {
        $sayfalar = Sayfalar::all();
        return view('admin.sayfalar.index', compact('sayfalar'));
    }
    public function sayfaEkle()
    {
        $menuler = Menuler::all();
        return view('admin.sayfalar.create',compact('menuler'));
    }
    public function sayfaCreate(Request $request)
    {
        $sayfa = new Sayfalar();
        $sayfa->menu_id = request('menu');
        $sayfa->baslik = request('baslik');
        $sayfa->slug = Str::slug(request('baslik'));
        $sayfa->kisa_aciklama = request('kisa_aciklama');
        $sayfa->meta_etiketler = request('meta_etiketler');
        $sayfa->aciklama = request('aciklama');
        if(request()->hasFile('sayfa_gorsel'))
        {
            $this->validate(request(),array('sayfa_gorsel'=>'image|mimes:png,jpg,jpeg,gif|max:2048'));
            $resim = request()->file('sayfa_gorsel');
            $dosya_adi = 'sayfa_gorsel-'.time().'.'.$resim->extension();
            if($resim->isValid())
            {
                $hedef_klasor = 'uploads/gorseller';
                $dosya_yolu = $hedef_klasor.'/'.$dosya_adi;
                $resim->move($hedef_klasor,$dosya_adi);
                $sayfa->gorsel = $dosya_yolu;
            }
        }
        $sayfa->save();
        return redirect()->route('admin.sayfalarIndex');
    }
    public function sayfaDuzenle($id)
    {
        $menuler = Menuler::all();
        $sayfa = Sayfalar::where('id',$id)->first();
        return view('admin.sayfalar.edit', compact('sayfa', 'menuler'));
    }
    public function sayfaUpdate(Request $request)
    {
        $sayfa = Sayfalar::where('id',request('id'))->first();
        $sayfa->menu_id = request('menu');
        $sayfa->baslik = request('baslik');
        $sayfa->slug = Str::slug(request('baslik'));
        $sayfa->kisa_aciklama = request('kisa_aciklama');
        $sayfa->meta_etiketler = request('meta_etiketler');
        $sayfa->aciklama = request('aciklama');
        if(request()->hasFile('sayfa_gorsel2'))
        {
            $this->validate(request(),array('sayfa_gorsel2'=>'image|mimes:png,jpg,jpeg,gif|max:2048'));
            $resim = request()->file('sayfa_gorsel2');
            $dosya_adi = 'sayfa_gorsel-'.time().'.'.$resim->extension();
            if($resim->isValid())
            {
                $hedef_klasor = 'uploads/gorseller';
                $dosya_yolu = $hedef_klasor.'/'.$dosya_adi;
                $resim->move($hedef_klasor,$dosya_adi);
                File::delete($sayfa->gorsel);
                $sayfa->gorsel = $dosya_yolu;
            }
        }
        $sayfa->save();
        return redirect()->route('admin.sayfalarIndex');
    }
    public function sayfaSil($id)
    {
        $sayfa = Sayfalar::where('id',$id)->first();
        File::delete($sayfa->gorsel);
        Sayfalar::destroy($id);
        return redirect()->route('admin.sayfalarIndex');
    }
    public function yazilar()
    {
        $yazilar = Yazilar::all();
        return view('admin.yazilar.index', compact('yazilar'));
    }
    public function yaziEkle()
    {
        return view('admin.yazilar.create');
    }
    public function yaziCreate(Request $request)
    {
        $yazi = new Yazilar();
        $yazi->baslik = request('baslik');
        $yazi->slug = Str::slug(request('baslik'));
        $yazi->kisa_aciklama = request('kisa_aciklama');
        $yazi->meta_etiketler = request('meta_etiketler');
        $yazi->aciklama = request('aciklama');
        if(request()->hasFile('yazi_gorsel'))
        {
            $this->validate(request(),array('yazi_gorsel'=>'image|mimes:png,jpg,jpeg,gif|max:2048'));
            $resim = request()->file('yazi_gorsel');
            $dosya_adi = 'yazi_gorsel-'.time().'.'.$resim->extension();
            if($resim->isValid())
            {
                $hedef_klasor = 'uploads/gorseller';
                $dosya_yolu = $hedef_klasor.'/'.$dosya_adi;
                $resim->move($hedef_klasor,$dosya_adi);
                $yazi->gorsel = $dosya_yolu;
            }
        }
        $yazi->save();
        return redirect()->route('admin.yazilarIndex');
    }
    public function yaziDuzenle($id)
    {
        $yazi = Yazilar::where('id',$id)->first();
        return view('admin.yazilar.edit', compact('yazi'));
    }
    public function yaziUpdate(Request $request)
    {
        $yazi = Yazilar::where('id',request('id'))->first();
        $yazi->baslik = request('baslik');
        $yazi->slug = Str::slug(request('baslik'));
        $yazi->kisa_aciklama = request('kisa_aciklama');
        $yazi->meta_etiketler = request('meta_etiketler');
        $yazi->aciklama = request('aciklama');
        if(request()->hasFile('yazi_gorsel2'))
        {
            $this->validate(request(),array('yazi_gorsel2'=>'image|mimes:png,jpg,jpeg,gif|max:2048'));
            $resim = request()->file('yazi_gorsel2');
            $dosya_adi = 'yazi_gorsel-'.time().'.'.$resim->extension();
            if($resim->isValid())
            {
                $hedef_klasor = 'uploads/gorseller';
                $dosya_yolu = $hedef_klasor.'/'.$dosya_adi;
                $resim->move($hedef_klasor,$dosya_adi);
                File::delete($yazi->gorsel);
                $yazi->gorsel = $dosya_yolu;
            }
        }
        $yazi->save();
        return redirect()->route('admin.yazilarIndex');
    }
    public function yaziSil($id)
    {
        $yazi = Yazilar::where('id',$id)->first();
        File::delete($yazi->gorsel);
        Yazilar::destroy($id);
        return view('admin.yazilar.index');
    }
    public function hizmetler()
    {
        $hizmetler = Hizmetler::all();
        return view('admin.hizmetler.index', compact('hizmetler'));
    }
    public function hizmetEkle()
    {
        return view('admin.hizmetler.create');
    }
    public function hizmetCreate(Request $request)
    {
        $hizmet = new Hizmetler();
        $hizmet->baslik = request('baslik');
        $hizmet->slug = Str::slug(request('baslik'));
        $hizmet->kisa_aciklama = request('kisa_aciklama');
        $hizmet->meta_etiketler = request('meta_etiketler');
        $hizmet->aciklama = request('aciklama');
        if(request()->hasFile('hizmet_gorsel'))
        {
            $this->validate(request(),array('hizmet_gorsel'=>'image|mimes:png,jpg,jpeg,gif|max:2048'));
            $resim = request()->file('hizmet_gorsel');
            $dosya_adi = 'hizmet_gorsel-'.time().'.'.$resim->extension();
            if($resim->isValid())
            {
                $hedef_klasor = 'uploads/gorseller';
                $dosya_yolu = $hedef_klasor.'/'.$dosya_adi;
                $resim->move($hedef_klasor,$dosya_adi);
                $hizmet->gorsel = $dosya_yolu;
            }
        }
        $hizmet->save();
        return redirect()->route('admin.hizmetlerIndex');
    }
    public function hizmetDuzenle($id)
    {
        $hizmet = Hizmetler::where('id',$id)->first();
        return view('admin.hizmetler.edit', compact('hizmet'));
    }
    public function hizmetUpdate(Request $request)
    {
        $hizmet = Hizmetler::where('id',request('id'))->first();
        $hizmet->baslik = request('baslik');
        $hizmet->slug = Str::slug(request('baslik'));
        $hizmet->kisa_aciklama = request('kisa_aciklama');
        $hizmet->meta_etiketler = request('meta_etiketler');
        $hizmet->aciklama = request('aciklama');
        if(request()->hasFile('hizmet_gorsel2'))
        {
            $this->validate(request(),array('hizmet_gorsel2'=>'image|mimes:png,jpg,jpeg,gif|max:2048'));
            $resim = request()->file('hizmet_gorsel2');
            $dosya_adi = 'hizmet_gorsel-'.time().'.'.$resim->extension();
            if($resim->isValid())
            {
                $hedef_klasor = 'uploads/gorseller';
                $dosya_yolu = $hedef_klasor.'/'.$dosya_adi;
                $resim->move($hedef_klasor,$dosya_adi);
                File::delete($hizmet->gorsel);
                $hizmet->gorsel = $dosya_yolu;
            }
        }
        $hizmet->save();
        return redirect()->route('admin.hizmetlerIndex');
    }
    public function hizmetSil($id)
    {
        $hizmet = Hizmetler::where('id',$id)->first();
        File::delete($hizmet->gorsel);
        Hizmetler::destroy($id);
        return redirect()->route('admin.hizmetlerIndex');
    }
    public function projeler()
    {
        $projeler = Projeler::all();
        return view('admin.projeler.index', compact('projeler'));
    }
    public function projeEkle()
    {
        return view('admin.projeler.create');
    }
    public function projeCreate(Request $request)
    {
        $proje = new Projeler();
        $proje->baslik = request('baslik');
        $proje->slug = Str::slug(request('baslik'));
        $proje->kisa_aciklama = request('kisa_aciklama');
        $proje->meta_etiketler = request('meta_etiketler');
        $proje->aciklama = request('aciklama');
        if(request()->hasFile('proje_gorsel'))
        {
            $this->validate(request(),array('proje_gorsel'=>'image|mimes:png,jpg,jpeg,gif|max:2048'));
            $resim = request()->file('proje_gorsel');
            $dosya_adi = 'proje_gorsel-'.time().'.'.$resim->extension();
            if($resim->isValid())
            {
                $hedef_klasor = 'uploads/gorseller';
                $dosya_yolu = $hedef_klasor.'/'.$dosya_adi;
                $resim->move($hedef_klasor,$dosya_adi);
                $proje->gorsel = $dosya_yolu;
            }
        }
        $proje->save();
        return redirect()->route('admin.projelerIndex');
    }
    public function projeDuzenle($id)
    {
        $proje = Projeler::where('id',$id)->first();
        return view('admin.projeler.edit', compact('proje'));
    }
    public function projeUpdate(Request $request)
    {
        $proje = Projeler::where('id',request('id'))->first();
        $proje->baslik = request('baslik');
        $proje->slug = Str::slug(request('baslik'));
        $proje->kisa_aciklama = request('kisa_aciklama');
        $proje->meta_etiketler = request('meta_etiketler');
        $proje->aciklama = request('aciklama');
        if(request()->hasFile('proje_gorsel2'))
        {
            $this->validate(request(),array('proje_gorsel2'=>'image|mimes:png,jpg,jpeg,gif|max:2048'));
            $resim = request()->file('proje_gorsel2');
            $dosya_adi = 'proje_gorsel-'.time().'.'.$resim->extension();
            if($resim->isValid())
            {
                $hedef_klasor = 'uploads/gorseller';
                $dosya_yolu = $hedef_klasor.'/'.$dosya_adi;
                $resim->move($hedef_klasor,$dosya_adi);
                File::delete($proje->gorsel);
                $proje->gorsel = $dosya_yolu;
            }
        }
        $proje->save();
        return redirect()->route('admin.projelerIndex');
    }
    public function projeSil($id)
    {
        $proje = Projeler::where('id',$id)->first();
        File::delete($proje->gorsel);
        Projeler::destroy($id);
        return redirect()->route('admin.projelerIndex');
    }


    public function urunler()
    {
        $urunler = Urunler::all();
        return view('admin.urunler.index', compact('urunler'));
    }
    public function urunEkle()
    {
        return view('admin.urunler.create');
    }
    public function urunCreate(Request $request)
    {
        $urun = new Urunler();
        $urun->baslik = request('baslik');
        $urun->slug = Str::slug(request('baslik'));
        $urun->kisa_aciklama = request('kisa_aciklama');
        $urun->meta_etiketler = request('meta_etiketler');
        $urun->aciklama = request('aciklama');
        if(request()->hasFile('urun_gorsel'))
        {
            $this->validate(request(),array('urun_gorsel'=>'image|mimes:png,jpg,jpeg,gif|max:2048'));
            $resim = request()->file('urun_gorsel');
            $dosya_adi = 'urun_gorsel-'.time().'.'.$resim->extension();
            if($resim->isValid())
            {
                $hedef_klasor = 'uploads/gorseller';
                $dosya_yolu = $hedef_klasor.'/'.$dosya_adi;
                $resim->move($hedef_klasor,$dosya_adi);
                $urun->gorsel = $dosya_yolu;
            }
        }
        $urun->save();
        return redirect()->route('admin.urunlerIndex');
    }
    public function urunDuzenle($id)
    {
        $urun = Urunler::where('id',$id)->first();
        return view('admin.urunler.edit', compact('urun'));
    }
    public function urunUpdate(Request $request)
    {
        $urun = Urunler::where('id',request('id'))->first();
        $urun->baslik = request('baslik');
        $urun->slug = Str::slug(request('baslik'));
        $urun->kisa_aciklama = request('kisa_aciklama');
        $urun->meta_etiketler = request('meta_etiketler');
        $urun->aciklama = request('aciklama');
        if(request()->hasFile('urun_gorsel2'))
        {
            $this->validate(request(),array('urun_gorsel2'=>'image|mimes:png,jpg,jpeg,gif|max:2048'));
            $resim = request()->file('urun_gorsel2');
            $dosya_adi = 'urun_gorsel-'.time().'.'.$resim->extension();
            if($resim->isValid())
            {
                $hedef_klasor = 'uploads/gorseller';
                $dosya_yolu = $hedef_klasor.'/'.$dosya_adi;
                $resim->move($hedef_klasor,$dosya_adi);
                File::delete($urun->gorsel);
                $urun->gorsel = $dosya_yolu;
            }
        }
        $urun->save();
        return redirect()->route('admin.urunlerIndex');
    }
    public function urunSil($id)
    {
        $urun = Urunler::where('id',$id)->first();
        File::delete($urun->gorsel);
        Urunler::destroy($id);
        return redirect()->route('admin.urunlerIndex');
    }



    public function menuler()
    {
        $menuler = Menuler::all();
        return view('admin.menuler.index', compact('menuler'));
    }
    public function menuDuzenle($id)
    {
        $menu = Menuler::where('id', $id)->first();
        return view('admin.menuler.edit', compact('menu'));
    }
    public function menuUpdate(Request $request)
    {
        $menu = Menuler::where('id',request('id'))->first();
        $menu->baslik = request('baslik');
        $menu->aktif_pasif = request('aktif_pasif');
        $menu->save();
        return redirect()->route('admin.menulerIndex');
    }
    public function siteAyarlar()
    {
        $site_ayar = SiteAyar::where('id',1)->first();
        return view('admin.ayarlar.siteAyarlar', compact('site_ayar'));
    }
    public function siteAyarUpdate(Request $request)
    {
        $site_ayar = SiteAyar::where('id',1)->first();
        $site_ayar->site_adi = request('site_adi');
        $site_ayar->site_baslik = request('site_baslik');
        $site_ayar->site_keywords = request('site_keywords');
        $site_ayar->site_meta_aciklama = request('site_meta_aciklama');
        $site_ayar->site_adres = request('site_adres');
        $site_ayar->site_telefon = request('site_telefon');
        $site_ayar->site_mail = request('site_mail');
        $site_ayar->site_header_tag = request('site_header_tag');
        $site_ayar->site_body_tag = request('site_body_tag');
        $site_ayar->site_facebook = request('site_facebook');
        $site_ayar->site_instagram = request('site_instagram');
        $site_ayar->site_twitter = request('site_twitter');
        $site_ayar->site_youtube = request('site_youtube');
        $site_ayar->slider_aktif_pasif = request('slider_aktif_pasif');
        $site_ayar->banners_aktif_pasif = request('banners_aktif_pasif');
        if(request()->hasFile('logo'))
        {
            $this->validate(request(),array('logo'=>'image|mimes:png,jpg,jpeg,gif|max:2048'));
            $resim = request()->file('logo');
            $dosya_adi = 'logo-'.time().'.'.$resim->extension();
            if($resim->isValid())
            {
                $hedef_klasor = 'uploads/gorseller';
                $dosya_yolu = $hedef_klasor.'/'.$dosya_adi;
                $resim->move($hedef_klasor,$dosya_adi);
                File::delete($site_ayar->logo);
                $site_ayar->logo = $dosya_yolu;
            }
        }
        if(request()->hasFile('favicon'))
        {
            $this->validate(request(),array('favicon'=>'image|mimes:png,jpg,jpeg,gif|max:2048'));
            $resim = request()->file('favicon');
            $dosya_adi = 'favicon-'.time().'.'.$resim->extension();
            if($resim->isValid())
            {
                $hedef_klasor = 'uploads/gorseller';
                $dosya_yolu = $hedef_klasor.'/'.$dosya_adi;
                $resim->move($hedef_klasor,$dosya_adi);
                File::delete($site_ayar->favicon);
                $site_ayar->favicon = $dosya_yolu;
            }
        }
        $site_ayar->save();
        return redirect()->route('admin.index');

    }
    public function sliderIndex()
    {
        $slaytlar = SiteSlider::all();
        return view('admin.ayarlar.slider', compact('slaytlar'));
    }
    public function slaytEkle()
    {
        return view('admin.ayarlar.slaytEkle');
    }
    public function slaytCreateslider(Request $request)
    {
        $slayt = new SiteSlider();
        $slayt->yazi = request('yazi');
        $slayt->link = request('link');
        if(request()->hasFile('slayt_gorsel'))
        {
            $this->validate(request(),array('slayt_gorsel'=>'image|mimes:png,jpg,jpeg,gif|max:2048'));
            $resim = request()->file('slayt_gorsel');
            $dosya_adi = 'slayt_gorsel-'.time().'.'.$resim->extension();
            if($resim->isValid())
            {
                $hedef_klasor = 'uploads/gorseller';
                $dosya_yolu = $hedef_klasor.'/'.$dosya_adi;
                $resim->move($hedef_klasor,$dosya_adi);
                $slayt->dosya_adi = $resim->getClientOriginalName();
                $slayt->gorsel = $dosya_yolu;
            }
        }
        $slayt->save();
        return redirect()->route('admin.sliderIndex');
    }
    public function slaytDuzenle($id)
    {
        $slayt = SiteSlider::where('id',$id)->first();
        return view('admin.ayarlar.slaytDuzenle', compact('slayt'));
    }
    public function slaytUpdate(Request $request)
    {
        $slayt = SiteSlider::where('id', request('id'))->first();
        $slayt->yazi = request('yazi');
        $slayt->link = request('link');
        $slayt->aktif_pasif = request('aktif_pasif');
        if(request()->hasFile('slayt_gorsel2'))
        {
            $this->validate(request(),array('slayt_gorsel2'=>'image|mimes:png,jpg,jpeg,gif|max:2048'));
            $resim = request()->file('slayt_gorsel2');
            $dosya_adi = 'slayt_gorsel-'.time().'.'.$resim->extension();
            if($resim->isValid())
            {
                $hedef_klasor = 'uploads/gorseller';
                $dosya_yolu = $hedef_klasor.'/'.$dosya_adi;
                $resim->move($hedef_klasor,$dosya_adi);
                $slayt->dosya_adi = $resim->getClientOriginalName();
                File::delete($slayt->gorsel);
                $slayt->gorsel = $dosya_yolu;
            }
        }
        $slayt->save();
        return redirect()->route('admin.sliderIndex');
    }
    public function slaytSil($id)
    {
        $slayt = SiteSlider::where('id',$id)->first();
        File::delete($slayt->gorsel);
        SiteSlider::destroy($id);
        return redirect()->route('admin.sliderIndex');
    }


    public function bannerIndex()
    {
        $banners = SiteBanner::all();
        return view('admin.ayarlar.banners', compact('banners'));
    }
    public function bannerEkle()
    {
        return view('admin.ayarlar.bannerEkle');
    }
    public function bannerCreate(Request $request)
    {
        $banner = new SiteBanner();
        $banner->link = request('link');
        if(request()->hasFile('banner_gorsel'))
        {
            $this->validate(request(),array('banner_gorsel'=>'image|mimes:png,jpg,jpeg,gif|max:2048'));
            $resim = request()->file('banner_gorsel');
            $dosya_adi = 'banner_gorsel-'.time().'.'.$resim->extension();
            if($resim->isValid())
            {
                $hedef_klasor = 'uploads/gorseller';
                $dosya_yolu = $hedef_klasor.'/'.$dosya_adi;
                $resim->move($hedef_klasor,$dosya_adi);
                $banner->dosya_adi = $resim->getClientOriginalName();
                $banner->gorsel = $dosya_yolu;
            }
        }
        $banner->save();
        return redirect()->route('admin.bannerIndex');
    }
    public function bannerDuzenle($id)
    {
        $banner = SiteBanner::where('id',$id)->first();
        return view('admin.ayarlar.bannerDuzenle', compact('banner'));
    }
    public function bannerUpdate(Request $request)
    {
        $banner = SiteBanner::where('id', request('id'))->first();
        $banner->link = request('link');
        $banner->aktif_pasif = request('aktif_pasif');
        if(request()->hasFile('banner_gorsel2'))
        {
            $this->validate(request(),array('banner_gorsel2'=>'image|mimes:png,jpg,jpeg,gif|max:2048'));
            $resim = request()->file('banner_gorsel2');
            $dosya_adi = 'banner_gorsel-'.time().'.'.$resim->extension();
            if($resim->isValid())
            {
                $hedef_klasor = 'uploads/gorseller';
                $dosya_yolu = $hedef_klasor.'/'.$dosya_adi;
                $resim->move($hedef_klasor,$dosya_adi);
                $banner->dosya_adi = $resim->getClientOriginalName();
                File::delete($banner->gorsel);
                $banner->gorsel = $dosya_yolu;
            }
        }
        $banner->save();
        return redirect()->route('admin.bannerIndex');
    }
    public function bannerSil($id)
    {
        $banner = SiteBanner::where('id',$id)->first();
        File::delete($banner->gorsel);
        SiteSlider::destroy($id);
        return redirect()->route('admin.bannerIndex');
    }
}























