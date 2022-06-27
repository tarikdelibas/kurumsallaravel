@extends('frontend.template')
@section('baslik', 'Blog | '.$yazi->baslik)
@section('description', $yazi->kisa_aciklama)
@section('keywords', $yazi->meta_etiketler)
@section('icerik')
    <section id="main-container" class="main-container">
        <div class="container">
            <div class="row">

                <div class="col-lg-8 mb-5 mb-lg-0">

                    <div class="post-content post-single">
                        <div class="post-media post-image">
                            <img loading="lazy" src="/{{$yazi->gorsel}}" class="img-fluid" alt="{{$yazi->baslik}}">
                        </div>

                        <div class="post-body">
                            <div class="entry-header">
                                <div class="post-meta">
                                    <span class="post-meta-date"><i class="far fa-calendar"></i> {{$yazi->created_at}}/span>
                                </div>
                                <h2 class="entry-title">
                                    {{$yazi->baslik}}
                                </h2>
                            </div><!-- header end -->

                            <div class="entry-content">
                                <p>{!! $yazi->aciklama !!}</p>
                            </div>

                        </div><!-- post-body end -->
                    </div><!-- post content end -->

                </div><!-- Content Col end -->

                <div class="col-lg-4">

                    <div class="sidebar sidebar-right">
                        <div class="widget recent-posts">
                            <h3 class="widget-title">Son Yazılar</h3>
                            <ul class="list-unstyled">
                                @foreach($tumYazilar as $sonYazilar)
                                <li class="d-flex align-items-center">
                                    <div class="posts-thumb">
                                        <a href="{{route('blogDetay', $sonYazilar->slug)}}"><img loading="lazy" alt="{{$sonYazilar->baslik}}" src="/{{$sonYazilar->gorsel}}"></a>
                                    </div>
                                    <div class="post-info">
                                        <h4 class="entry-title">
                                            <a href="{{route('blogDetay', $sonYazilar->slug)}}">{{$sonYazilar->baslik}}</a>
                                        </h4>
                                    </div>
                                </li><!-- 1st post end-->
                                @endforeach
                            </ul>

                        </div><!-- Recent post end -->
                    </div><!-- Sidebar end -->
                </div><!-- Sidebar Col end -->

            </div><!-- Main row end -->

        </div><!-- Conatiner end -->
    </section><!-- Main container end -->
@endsection
