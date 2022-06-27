@extends('frontend.template')
@section('baslik', 'Blog | '.$site_ayarlar_provider->site_baslik)
@section('description', $site_ayarlar_provider->site_meta_aciklama)
@section('keywords', $site_ayarlar_provider->site_keywords)
@section('icerik')

    <section id="main-container" class="main-container">
        <div class="container">
            <div class="row">

                <div class="col-lg-8 mb-5 mb-lg-0">
                    @foreach($yazilar as $yazi)
                    <div class="post">
                        <div class="post-media post-image">
                            <img loading="lazy" src="/{{$yazi->gorsel}}" class="img-fluid" alt="post-image">
                        </div>

                            <div class="post-body">
                                <div class="entry-header">
                                    <h2 class="entry-title">
                                        <a href="{{route('blogDetay', $yazi->slug)}}">{{$yazi->baslik}}</a>
                                    </h2>
                                </div><!-- header end -->

                                <div class="entry-content">
                                    <p>{{$yazi->kisa_aciklama}} ...</p>
                                </div>

                                <div class="post-footer">
                                    <a href="{{route('blogDetay', $yazi->slug)}}" class="btn btn-primary">Devamını Oku</a>
                                </div>

                        </div><!-- post-body end -->
                    </div><!-- 1st post end -->
                    @endforeach



                </div><!-- Content Col end -->

                <div class="col-lg-4">

                    <div class="sidebar sidebar-right">
                        <div class="widget recent-posts">
                            <h3 class="widget-title">Son Yazılar</h3>
                            <ul class="list-unstyled">
                                @foreach($yazilar as $yaziListe)
                                    <li class="d-flex align-items-center">
                                        <div class="posts-thumb">
                                            <a href="{{route('blogDetay', $yaziListe->slug)}}"><img loading="lazy" alt="{{$yaziListe->slug}}" src="/{{$yaziListe->gorsel}}"></a>
                                        </div>
                                        <div class="post-info">
                                            <h4 class="entry-title">
                                                <a href="{{route('blogDetay', $yaziListe->slug)}}">{{$yaziListe->baslik}}</a>
                                            </h4>
                                        </div>
                                    </li>
                                @endforeach

                            </ul>

                        </div><!-- Recent post end -->

                    </div><!-- Sidebar end -->
                </div><!-- Sidebar Col end -->

            </div><!-- Main row end -->

        </div><!-- Container end -->
    </section><!-- Main container end -->
@endsection
