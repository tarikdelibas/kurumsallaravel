@extends('frontend.template')
@section('icerik')

<div id="banner-area" class="banner-area">
    <div class="banner-text">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner-heading">
                        <h1 class="banner-title">HİZMETLERİMİZ</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="{{route('index')}}">ANASAYFA</a></li>
                                <li class="breadcrumb-item"><a href="{{route('hizmetler')}}">HİZMETLER</a></li>
                                <li class="breadcrumb-item active" aria-current="page">TÜM HİZMETLER</li>
                            </ol>
                        </nav>
                    </div>
                </div><!-- Col end -->
            </div><!-- Row end -->
        </div><!-- Container end -->
    </div><!-- Banner text end -->
</div><!-- Banner area end -->

<section id="main-container" class="main-container pb-2">
    <div class="container">
        <div class="row">
        @foreach($hizmetler as $hizmet)
            <div class="col-lg-4 col-md-6 mb-5">
                <div class="ts-service-box">
                    <div class="ts-service-image-wrapper">
                        <img loading="lazy" class="w-100" src="{{$hizmet->gorsel}}" alt="{{$hizmet->slug}}">
                    </div>
                    <div class="d-flex">
                        <div class="ts-service-info">
                            <h3 class="service-box-title"><a href="{{route('hizmetDetay',$hizmet->slug)}}">{{$hizmet->baslik}}</a></h3>
                            <p>{{$hizmet->kisa_aciklama}}</p>
                            <a class="learn-more d-inline-block" href="{{route('hizmetDetay',$hizmet->slug)}}" aria-label="hizmet-detaylar"><i class="fa fa-caret-right"></i> Detay</a>
                        </div>
                    </div>
                </div><!-- Service1 end -->
            </div><!-- Col 1 end -->
            @endforeach
        </div><!-- Main row end -->
    </div><!-- Conatiner end -->
</section><!-- Main container end -->

@endsection
