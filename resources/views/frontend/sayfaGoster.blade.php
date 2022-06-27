@extends('frontend.template')
@section('icerik')
    <section id="main-container" class="main-container">
        <div class="container">
            <div class="row">

                <div class="col-lg-8 mb-5 mb-lg-0">

                    <div class="post-content post-single">
                        <div class="post-media post-image">
                            <img loading="lazy" src="/{{$sayfa->gorsel}}" class="img-fluid" alt="{{$sayfa->baslik}}">
                        </div>

                        <div class="post-body">
                            <div class="entry-header">
                                <h2 class="entry-title">
                                    {{$sayfa->baslik}}
                                </h2>
                            </div><!-- header end -->

                            <div class="entry-content">
                                <p>{!! $sayfa->aciklama !!}</p>
                            </div>

                        </div><!-- post-body end -->
                    </div><!-- post content end -->

                </div><!-- Content Col end -->

            </div><!-- Main row end -->

        </div><!-- Conatiner end -->
    </section><!-- Main container end -->
@endsection
