@extends('frontend.template')
@section('baslik', 'Hizmet | '.$hizmetDetay->baslik)
@section('description', $hizmetDetay->kisa_aciklama)
@section('keywords', $hizmetDetay->meta_etiketler)
@section('icerik')

<section id="main-container" class="main-container">
    <div class="container">
        <div class="row">

            <div class="col-xl-3 col-lg-4">
                <div class="sidebar sidebar-left">
                    <div class="widget">
                        <h3 class="widget-title">HİZMETLERİMİZ</h3>
                        <ul class="nav service-menu">
                            @foreach($hizmetler as $hizmet)
                                <li><a href="{{route('hizmetDetay', $hizmet->slug)}}">{{$hizmet->baslik}}</a></li>
                            @endforeach
                        </ul>
                    </div><!-- Widget end -->

                </div><!-- Sidebar end -->
            </div><!-- Sidebar Col end -->

            <div class="col-xl-8 col-lg-8">
                <div class="content-inner-page">

                    <h2 class="column-title mrt-0">{{$hizmetDetay->baslik}}</h2>

                    <div class="row">
                        <div class="col-md-12">
                            <p>{!! $hizmetDetay->aciklama !!}</p>
                        </div><!-- col end -->
                    </div><!-- 1st row end-->

                    <div class="gap-40"></div>

                    <div id="page-slider" class="page-slider">
                        <div class="item">
                            <img loading="lazy" class="img-fluid" src="/{{$hizmetDetay->gorsel}}" alt="{{$hizmetDetay->slug}}" />
                        </div>
                    </div><!-- Page slider end -->

                    <div class="gap-40"></div>

                    <!--2nd row end -->

                    <div class="gap-40"></div>

                    <div class="call-to-action classic">
                        <div class="row align-items-center">
                            <div class="col-md-8 text-center text-md-left">
                                <div class="call-to-action-text">
                                    <h3 class="action-title">HİZMETİMİZLE İLGİLENİYOR MUSUNUZ?</h3>
                                </div>
                            </div><!-- Col end -->
                            <div class="col-md-4 text-center text-md-right mt-3 mt-md-0">
                                <div class="call-to-action-btn">
                                    <a class="btn btn-primary" href="#">Teklif Alın</a>
                                </div>
                            </div><!-- col end -->
                        </div><!-- row end -->
                    </div><!-- Action end -->

                </div><!-- Content inner end -->
            </div><!-- Content Col end -->


        </div><!-- Main row end -->
    </div><!-- Conatiner end -->
</section><!-- Main container end -->
@endsection
