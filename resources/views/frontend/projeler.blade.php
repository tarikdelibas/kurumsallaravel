@extends('frontend.template')
@section('icerik')

    <section id="main-container" class="main-container">
        <div class="container">
            <div class="row">
                <div class="col-12">

                    <div class="row shuffle-wrapper">
                        <div class="col-1 shuffle-sizer"></div>
                        @foreach($projeler as $proje)
                            <div class="col-lg-4 col-md-6 shuffle-item">
                                <div class="project-img-container">
                                    <a class="gallery-popup" href="{{$proje->gorsel}}">
                                        <img class="img-fluid" src="{{$proje->gorsel}}" alt="project-image">
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
                            </div>
                        @endforeach

                    </div><!-- shuffle end -->
                </div>

            </div><!-- Content row end -->

        </div><!-- Conatiner end -->
    </section><!-- Main container end -->



@endsection
