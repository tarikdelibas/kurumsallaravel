@extends('frontend.template')
@section('icerik')

<section id="main-container" class="main-container">
    <div class="container">

        <div class="row">
            <div class="col-lg-8">
                <div id="page-slider" class="page-slider small-bg">
                    <div class="item">
                        <img loading="lazy" class="img-fluid" src="/{{$projeDetay->gorsel}}" alt="{{$projeDetay->slug}}" />
                    </div>
                </div><!-- Page slider end -->
            </div><!-- Slider col end -->

            <div class="col-lg-4 mt-5 mt-lg-0">

                <h3 class="column-title mrt-0">{{$projeDetay->baslik}}</h3>
                <p>{!! $projeDetay->aciklama !!}</p>

            </div><!-- Content col end -->

        </div><!-- Row end -->

    </div><!-- Conatiner end -->
</section><!-- Main container end -->
@endsection
