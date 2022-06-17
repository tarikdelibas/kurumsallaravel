<?php

namespace App\Http\Controllers;

use App\Menuler;
use App\Sayfalar;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }
    public function sayfalar()
    {
        return view('admin.sayfalar.index');
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
        $sayfa->slug = str_slug(request('baslik'));
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
                $sayfa->sayfa_gorsel = $dosya_yolu;
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
        $sayfa->slug = str_slug(request('baslik'));
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
                $sayfa->sayfa_gorsel = $dosya_yolu;
            }
        }
        $sayfa->save();
        return redirect()->route('admin.sayfalarIndex');
    }
}
