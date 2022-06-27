<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Basic Page Needs
  ================================================== -->
    <meta charset="utf-8">
    <title>@yield('baslik')</title>

    <!-- Mobile Specific Metas
  ================================================== -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">

    <!-- Favicon
  ================================================== -->
    <link rel="icon" type="image/png" href="{{$site_ayarlar_provider->favicon}}">

    <!-- CSS
  ================================================== -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="/frontend/plugins/bootstrap/bootstrap.min.css">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="/frontend/plugins/fontawesome/css/all.min.css">
    <!-- Animation -->
    <link rel="stylesheet" href="/frontend/plugins/animate-css/animate.css">
    <!-- slick Carousel -->
    <link rel="stylesheet" href="/frontend/plugins/slick/slick.css">
    <link rel="stylesheet" href="/frontend/plugins/slick/slick-theme.css">
    <!-- Colorbox -->
    <link rel="stylesheet" href="/frontend/plugins/colorbox/colorbox.css">
    <!-- Template styles-->
    <link rel="stylesheet" href="/frontend/css/style.css">
    @yield('ek-css')
</head>
<body>
<div class="body-inner">

    <div id="top-bar" class="top-bar">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8">
                    <ul class="top-info text-center text-md-left">
                        <li><i class="fas fa-map-marker-alt"></i> <p class="info-text">{{$site_ayarlar_provider->site_adres}} | <i class="fas fa-phone-alt"></i> <a href="tel:{{$site_ayarlar_provider->site_telefon}}">{{$site_ayarlar_provider->site_telefon}}</a></p>
                        </li>
                    </ul>
                </div>
                <!--/ Top info end -->

                <div class="col-lg-4 col-md-4 top-social text-center text-md-right">
                    <ul class="list-unstyled">
                        <li>
                            <a title="Facebook" href="{{$site_ayarlar_provider->site_facebook}}">
                                <span class="social-icon"><i class="fab fa-facebook-f"></i></span>
                            </a>
                            <a title="Twitter" href="{{$site_ayarlar_provider->site_twitter}}">
                                <span class="social-icon"><i class="fab fa-twitter"></i></span>
                            </a>
                            <a title="Instagram" href="{{$site_ayarlar_provider->site_instagram}}">
                                <span class="social-icon"><i class="fab fa-instagram"></i></span>
                            </a>
                            <a title="Youtube" href="{{$site_ayarlar_provider->site_youtube}}">
                                <span class="social-icon"><i class="fab fa-youtube"></i></span>
                            </a>
                        </li>
                    </ul>
                </div>
                <!--/ Top social end -->
            </div>
            <!--/ Content row end -->
        </div>
        <!--/ Container end -->
    </div>
    <!--/ Topbar end -->
    <!-- Header start -->
    <header id="header" class="header-two">
        <div class="site-navigation">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg navbar-light p-0">

                            <div class="logo">
                                <a class="d-block" href="{{route('index')}}">
                                    <img loading="lazy" src="/../{{$site_ayarlar_provider->logo}}" alt="{{$site_ayarlar_provider->site_adi}}">
                                </a>
                            </div><!-- logo end -->

                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>

                            <div id="navbar-collapse" class="collapse navbar-collapse">
                                <ul class="nav navbar-nav ml-auto align-items-center">
                                    <li class="nav-item active"><a class="nav-link" href="{{route('index')}}">Anasayfa</a></li>
                                    <li class="nav-item dropdown">
                                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Kurumsal <i class="fa fa-angle-down"></i></a>
                                        <ul class="dropdown-menu" role="menu">
                                            @foreach($menuler as $menu)
                                                @if($menu->id==1)
                                                    <li><a href="#">{{$menu->baslik}}</a></li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a href="{{route('hizmetler')}}" class="nav-link dropdown-toggle" data-toggle="dropdown">Ürünler <i class="fa fa-angle-down"></i></a>
                                        <ul class="dropdown-menu" role="menu">
                                            @foreach($urunler as $urun)
                                                <li><a href="{{route('urunDetay', $urun->slug)}}">{{$urun->baslik}}</a></li>
                                            @endforeach
                                        </ul>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a href="{{route('hizmetler')}}" class="nav-link dropdown-toggle" data-toggle="dropdown">Hizmetler <i class="fa fa-angle-down"></i></a>
                                        <ul class="dropdown-menu" role="menu">
                                            @foreach($hizmetler as $hizmet)
                                                <li><a href="{{route('hizmetDetay', $hizmet->slug)}}">{{$hizmet->baslik}}</a></li>
                                            @endforeach
                                        </ul>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a href="{{route('projeler')}}" class="nav-link dropdown-toggle" data-toggle="dropdown">Faaliyet Alanlarımız <i class="fa fa-angle-down"></i></a>
                                        <ul class="dropdown-menu" role="menu">
                                            @foreach($projeler as $proje)
                                                <li><a href="{{route('projeDetay', $proje->slug)}}">{{$proje->baslik}}</a></li>
                                            @endforeach
                                        </ul>
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="{{route('blog')}}">Blog</a></li>

                                    <li class="nav-item"><a class="nav-link" href="{{route('iletisim')}}">İletişim</a></li>

                                    <li class="header-get-a-quote">
                                        <a class="btn btn-primary" href="#"><span class="social-icon"><i class="fab fa-whatsapp"></i></span> Destek</a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                    <!--/ Col end -->
                </div>
                <!--/ Row end -->
            </div>
            <!--/ Container end -->

        </div>
        <!--/ Navigation end -->
    </header>
    <!--/ Header end -->
    @yield('icerik')


    <footer id="footer" class="footer bg-overlay">
        <div class="footer-main">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-lg-4 col-md-6 footer-widget footer-about">
                        <h3 class="widget-title">{{$site_ayarlar_provider->site_baslik}}</h3>
                        <img loading="lazy" class="footer-logo" src="/{{$site_ayarlar_provider->logo}}" alt="Constra">
                        <p>{{$site_ayarlar_provider->site_adres}}</p>
                        <div class="footer-social">
                            <ul>
                                <li><a href="{{$site_ayarlar_provider->site_facebook}}" aria-label="Facebook"><i
                                            class="fab fa-facebook-f"></i></a></li>
                                <li><a href="{{$site_ayarlar_provider->site_twitter}}" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                                </li>
                                <li><a href="{{$site_ayarlar_provider->site_instagram}}" aria-label="Instagram"><i
                                            class="fab fa-instagram"></i></a></li>
                                <li><a href="{{$site_ayarlar_provider->site_youtube}}" aria-label="Youtube"><i class="fab fa-youtube"></i></a></li>
                            </ul>
                        </div><!-- Footer social end -->
                    </div><!-- Col end -->

                    <div class="col-lg-3 col-md-6 mt-5 mt-lg-0 footer-widget">
                        <h3 class="widget-title">Hizmetler</h3>
                        <ul class="list-arrow">
                            @foreach($hizmetler as $hizmet)
                                <li><a href="service-single.html">{{$hizmet->baslik}}</a></li>
                            @endforeach
                        </ul>
                    </div><!-- Col end -->

                    <div class="col-lg-4 col-md-6 footer-widget mt-5 mt-md-0">
                        <h3 class="widget-title">İletişim</h3>
                        <div class="working-hours">
                            <span class="fa fa-location-arrow"></span> <span class="text-right">{{$site_ayarlar_provider->site_adres}} </span>
                            <br> <span class="fa fa-phone"></span> <span class="text-right"><a href="tel:{{$site_ayarlar_provider->site_telefon}}"> {{$site_ayarlar_provider->site_telefon}} </a></span>
                            <br> <span class="fa fa-mail-bulk"></span> <span class="text-right"><a href="mailto:{{$site_ayarlar_provider->site_mail}}">{{$site_ayarlar_provider->site_mail}} </a></span>
                            <br> <span class="fa fa-phone"></span> <span class="text-right"><a href="tel:{{$site_ayarlar_provider->site_telefon}}">Muhasebe: {{$site_ayarlar_provider->site_telefon}} </a></span>
                            <br> <span class="fa fa-mail-bulk"></span> <span class="text-right"><a href="mailto:{{$site_ayarlar_provider->site_mail}}">muhasebe@egebombe.com.tr </a></span>
                            <br> <span class="fa fa-phone"></span> <span class="text-right"><a href="tel:{{$site_ayarlar_provider->site_telefon}}">Satınalma: {{$site_ayarlar_provider->site_telefon}} </a></span>
                            <br> <span class="fa fa-mail-bulk"></span> <span class="text-right"><a href="mailto:{{$site_ayarlar_provider->site_mail}}">satinalma@egebombe.com.tr </a></span>

                        </div>
                    </div><!-- Col end -->
                </div><!-- Row end -->
            </div><!-- Container end -->
        </div><!-- Footer main end -->

        <div class="copyright">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="copyright-info text-center">
              <span>Copyright &copy; <script>
                  document.write(new Date().getFullYear())
                </script> Ege Bombe sanayi, Yazılım ve Tasarım <a href="mailto:tarik1990@gmail.com">Tarık Delibaş</a></span>
                        </div>
                    </div>
                </div><!-- Row end -->

                <div id="back-to-top" data-spy="affix" data-offset-top="10" class="back-to-top position-fixed">
                    <button class="btn btn-primary" title="Back to Top">
                        <i class="fa fa-angle-double-up"></i>
                    </button>
                </div>

            </div><!-- Container end -->
        </div><!-- Copyright end -->
    </footer><!-- Footer end -->


    <!-- Javascript Files
    ================================================== -->

    <!-- initialize jQuery Library -->
    <script src="/frontend/plugins/jQuery/jquery.min.js"></script>
    <!-- Bootstrap jQuery -->
    <script src="/frontend/plugins/bootstrap/bootstrap.min.js" defer></script>
    <!-- Slick Carousel -->
    <script src="/frontend/plugins/slick/slick.min.js"></script>
    <script src="/frontend/plugins/slick/slick-animation.min.js"></script>
    <!-- Color box -->
    <script src="/frontend/plugins/colorbox/jquery.colorbox.js"></script>
    <!-- shuffle -->
    <script src="/frontend/plugins/shuffle/shuffle.min.js" defer></script>
    <!-- Google Map API Key-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU" defer></script>
    <!-- Google Map Plugin-->
    <script src="/frontend/plugins/google-map/map.js" defer></script>

    <!-- Template custom -->
    <script src="/frontend/js/script.js"></script>
    @yield('js')
</div><!-- Body inner end -->
</body>

</html>
