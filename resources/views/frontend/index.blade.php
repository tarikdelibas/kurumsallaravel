@extends('frontend.template')
@section('baslik', 'Anasayfa | '.$site_ayarlar_provider->site_baslik)
@section('description', $site_ayarlar_provider->site_meta_aciklama)
@section('keywords', $site_ayarlar_provider->site_keywords)
@section('icerik')
<div class="banner-carousel banner-carousel-2 mb-0">
    @foreach($slider as $slayt)
    <div class="banner-carousel-item" style="background-image:url('{{$slayt->gorsel}}')">
        <div class="container">
            <div class="box-slider-content">
                <div class="box-slider-text">
                    <h2 class="box-slide-title">{!! $slayt->yazi !!}</h2>
                    <h3 class="box-slide-sub-title">{!! $slayt->yazi !!}</h3>
                    <p>
                        <a href="{{$slayt->link}}" class="slider btn btn-primary">İncele</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>

<section class="call-to-action no-padding">
    <div class="container">
        <div class="action-style-box">
            <div class="row">
                <div class="col-md-8 text-center text-md-left">
                    <div class="call-to-action-text">
                        <h3 class="action-title">SİZİ DİNLİYORUZ VE İHTİYAÇLARINIZA ÇÖZÜM ÜRETİYORUZ</h3>
                    </div>
                </div><!-- Col end -->
                <div class="col-md-4 text-center text-md-right mt-3 mt-md-0">
                    <div class="call-to-action-btn">
                        <a class="btn btn-primary" href="contact.html">Teklif Al</a>
                    </div>
                </div><!-- col end -->
            </div><!-- row end -->
        </div><!-- Action style box -->
    </div><!-- Container end -->
</section><!-- Action end -->

<section id="main-container" class="main-container">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h3 class="column-title">Ege Bombe</h3>
                <p>Sektörde 20 yıla varan üretim ve pazarlama tecrübesini takiben İzmir’de Erkan URGEN tarafından kurulan Ege Bombe Sanayi ve Ticaret Limited Şirketi Gıda, Savunma, Isıtma ve Soğutma gibi birçok sektöre karbon çeliği, paslanmaz çelik ve diğer metallerden yarı mamül üretimi yapmaktadır.</p><p> Yurtiçi ve yurt dışında birçok firmaya bombe üreten firmamız kaliteli üretimi ve müşteri memnuniyetini ilke edinmiştir. İşinde uzman bir kadro ile çalışması Ege Bombe‘nin hedeflerini kısa sürede gerçekleşmesine olanak vermektedir. Üretici olmadan önce ve sonrasında katıldığı fuar etkinlikleri ile faaliyet gösterdikleri bombe alanında her türlü yenilik ve gelişmeleri yakından takip etmektedir.

                    Her türlü Pres baskı işleri, Sıvama ve Bombe işleriniz ile ilgili bilgi ve teklif almak için lütfen bizi arayınız. Deneyimli ve tecrübeli personellerimiz sizlerin ihtiyaçlarına cevap sunmak için hazır beklemektedirler.</p>

            </div><!-- Col end -->

            <div class="col-lg-6 mt-5 mt-lg-0">

                <div id="page-slider" class="page-slider small-bg">

                    <div class="item" style="background-image:url(uploads/bombe.jpeg)">
                        <div class="container">
                            <div class="box-slider-content">
                                <div class="box-slider-text">
                                    <h2 class="box-slide-title">Sektörün Öncüsü</h2>
                                </div>
                            </div>
                        </div>
                    </div><!-- Item 1 end -->
                </div><!-- Page slider end-->


            </div><!-- Col end -->
        </div><!-- Content row end -->

    </div><!-- Container end -->
</section><!-- Main container end -->
<section id="ts-features" class="ts-features pb-2">
    <div class="container">
        <div class="row text-center">
            <div class="col-lg-12">
                <h3 class="section-sub-title">ÜRÜNLERİMİZ</h3>
            </div>
        </div>
        <div class="row">
            @foreach($urunler as $urun)
                <div class="col-lg-4 col-md-6 mb-5">
                <div class="ts-service-box">
                    <div class="ts-service-image-wrapper">
                        <img loading="lazy" class="w-100" src="{{$urun->gorsel}}" alt="{{$urun->slug}}">
                    </div>
                    <div class="d-flex">
                        <div class="ts-service-info">
                            <h3 class="service-box-title"><a href="{{route('urunDetay', $urun->slug)}}">{{$urun->baslik}}</a></h3>
                            <p>{{$urun->kisa_aciklama}}</p>
                            <a class="learn-more d-inline-block" href="{{route('urunDetay', $urun->slug)}}" aria-label="service-details"><i class="fa fa-caret-right"></i> Detay</a>
                        </div>
                    </div>
                </div><!-- Service1 end -->
            </div>
            @endforeach
        </div><!-- Content row end -->
    </div><!-- Container end -->
</section><!-- Feature are end -->
<section class="subscribe no-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="subscribe-call-to-acton">
                    <h3>YARDIMCI OLABİLİR MİYİZ?</h3>
                    <h4><a href="tel:{{$site_ayarlar_provider->site_telefon}}"> {{$site_ayarlar_provider->site_telefon}}</a></h4>
                </div>
            </div><!-- Col end -->

            <div class="col-lg-8">
                <div class="ts-newsletter row align-items-center">
                    <div class="col-md-5 newsletter-introtext">
                        <h4 class="text-white mb-0">Bültene Abone Olun</h4>
                        <p class="text-white">Yeniliklerden ilk siz haberdar olun</p>
                    </div>

                    <div class="col-md-7 newsletter-form">
                        <form action="#" method="post">
                            <div class="form-group">
                                <label for="newsletter-email" class="content-hidden">Bülten Email</label>
                                <input type="email" name="email" id="newsletter-email" class="form-control form-control-lg" placeholder="Email adresinizi giriniz" autocomplete="off">
                            </div>
                        </form>
                    </div>
                </div><!-- Newsletter end -->
            </div><!-- Col end -->

        </div><!-- Content row end -->
    </div>
    <!--/ Container end -->
</section>
<!--/ subscribe end -->
<section id="ts-service-area" class="ts-service-area pb-0">
    <div class="container">
        <div class="row text-center">
            <div class="col-12">
                <h2 class="section-title">Bombe Konusunda Uzmanız</h2>
                <h3 class="section-sub-title">Neler Yapıyoruz</h3>
            </div>
        </div>
        <!--/ Title row end -->

        <div class="row">
            <div class="col-lg-4">
                @foreach($hizmetler as $hizmet)
                    {{$loop->count}}
                    <div class="ts-service-box d-flex">
                        <div class="ts-service-box-img">
                            <img loading="lazy" src="/frontend/images/icon-image/service-icon3.png" alt="{{$hizmet->slug}}" >
                        </div>
                        <div class="ts-service-box-info">
                            <h3 class="service-box-title"><a href="{{route('hizmetDetay', $hizmet->slug)}}">{{$hizmet->baslik}}</a></h3>
                            <p>{{$hizmet->kisa_aciklama}}</p>
                        </div>
                    </div><!-- Service 1 end -->
                @endforeach

            </div><!-- Col end -->

            <div class="col-lg-4 text-center">
                <img loading="lazy" class="img-fluid" src="/uploads/bombe.jpeg" alt="service-avater-image">
            </div><!-- Col end -->

        </div><!-- Content row end -->
    </div>
    <!--/ Container end -->
</section><!-- Service end -->


<section id="project-area" class="project-area solid-bg">
    <div class="container">
        <div class="row text-center">
            <div class="col-lg-12">
                <h3 class="section-sub-title">FAALİYET ALANLARIMIZ</h3>
            </div>
        </div>
        <!--/ Title row end -->

        <div class="row">
            <div class="col-12">
                <div class="row shuffle-wrapper">
                    <div class="col-1 shuffle-sizer"></div>
                    @foreach($projeler as $proje)
                        <div class="col-lg-4 col-md-6 shuffle-item">
                            <div class="project-img-container">
                                <a class="gallery-popup" href="{{$proje->gorsel}}" aria-label="project-img">
                                    <img class="img-fluid" src="{{$proje->gorsel}}" alt="project-img">
                                    <span class="gallery-icon"><i class="fa fa-plus"></i></span>
                                </a>
                                <div class="project-item-info">
                                    <div class="project-item-info-content">
                                        <h3 class="project-item-title">
                                            <a href="{{route('projeDetay', $proje->slug)}}">{{$proje->baslik}}</a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div><!-- shuffle item 1 end -->
                    @endforeach


                </div><!-- shuffle end -->
            </div>

            <div class="col-12">
                <div class="general-btn text-center">
                    <a class="btn btn-primary" href="{{route('projeler')}}">Tüm Faaliyet Alanları</a>
                </div>
            </div>

        </div><!-- Content row end -->
    </div>
    <!--/ Container end -->
</section><!-- Project area end -->
<section id="news" class="news">
    <div class="container">
        <div class="row text-center">
            <div class="col-12">
                <h2 class="section-title">Blog</h2>
                <h3 class="section-sub-title">SON YAZILARIMIZ</h3>
            </div>
        </div>
        <!--/ Title row end -->

        <div class="row">
            @foreach($yazilar as $yazi)
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="latest-post">
                    <div class="latest-post-media">
                        <a href="{{route('blogDetay', $yazi->slug)}}" class="latest-post-img">
                            <img loading="lazy" class="img-fluid" src="/{{$yazi->gorsel}}" alt="{{$yazi->baslik}}">
                        </a>
                    </div>
                    <div class="post-body">
                        <h4 class="post-title">
                            <a href="{{route('blogDetay', $yazi->slug)}}" class="d-inline-block">{{$yazi->baslik}}</a>
                        </h4>
                        <div class="latest-post-meta">
                    <span class="post-item-date">
                      <i class="fa fa-clock-o"></i> {{$yazi->created_at}}
                    </span>
                        </div>
                    </div>
                </div><!-- Latest post end -->
            </div><!-- 1st post col end -->
            @endforeach
        </div>
        <!--/ Content row end -->

        <div class="general-btn text-center mt-4">
            <a class="btn btn-primary" href="{{route('blog')}}">Tüm Yazılar</a>
        </div>

    </div>
    <!--/ Container end -->
</section>
<!--/ News end -->
@endsection
