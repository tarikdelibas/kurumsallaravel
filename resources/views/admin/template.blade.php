<!doctype html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Language" content="en" />
    <meta name="msapplication-TileColor" content="#2d89ef">
    <meta name="theme-color" content="#4188c9">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"/>
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <link rel="icon" href="" type="image/x-icon"/>
    <link rel="shortcut icon" type="image/x-icon" href="" />
    <title>Site Yönetim Paneli</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,500,500i,600,600i,700,700i&amp;subset=latin-ext">

    <script src="/admin/assets/js/vendors/jquery-3.2.1.min.js"></script>
    <script src="/admin/assets/js/vendors/bootstrap.bundle.min.js"></script>
    <script src="/admin/assets/js/require.min.js"></script>

    <!-- Dashboard Core -->
    <link href="/admin/assets/css/dashboard.css" rel="stylesheet" />
    <link href="/admin/assets/css/toggle.css" rel="stylesheet" />
    <script src="/admin/assets/js/dashboard.js"></script>
    <!-- c3.js Charts Plugin -->
    <link href="/admin/assets/plugins/charts-c3/plugin.css" rel="stylesheet" />
    <script src="/admin/assets/plugins/charts-c3/plugin.js"></script>
    <!-- Google Maps Plugin -->
    <link href="/admin/assets/plugins/maps-google/plugin.css" rel="stylesheet" />
    <script src="/admin/assets/plugins/maps-google/plugin.js"></script>
    <!-- Input Mask Plugin -->
    <script src="/admin/assets/plugins/input-mask/plugin.js"></script>
    <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}" />

</head>
<body class="">
<div class="page">
    <div class="page-main">
        <div class="header py-4">
            <div class="container">
                <div class="d-flex">
                    <a class="header-brand" href="{{route('admin.index')}}">
                        <img src="" class="header-brand-img" alt="Site Adi">
                    </a>
                    <div class="d-flex order-lg-2 ml-auto">
                        <div class="dropdown">
                            <a href="#" class="nav-link pr-0 leading-none" data-toggle="dropdown">
                                <span class="avatar"></span>
                                <span class="ml-2 d-none d-lg-block">
                                  <span class="text-default">Kişi</span>
                                  <small class="text-muted d-block mt-1">Yönetici</small>
                                </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                <a class="dropdown-item" href="">
                                    <i class="dropdown-icon fe fe-log-out"></i> Çıkış
                                </a>
                            </div>
                        </div>
                    </div>
                    <a href="#" class="header-toggler d-lg-none ml-3 ml-lg-0" data-toggle="collapse" data-target="#headerMenuCollapse">
                        <span class="header-toggler-icon"></span>
                    </a>
                </div>
            </div>
        </div>
        <div class="header collapse d-lg-flex p-0" id="headerMenuCollapse">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg order-lg-first">
                        <ul class="nav nav-tabs border-0 flex-column flex-lg-row">
                            <li class="nav-item">
                                <a href="{{route('admin.index')}}" class="nav-link active"><i class="fe fe-home"></i> Home</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a href="javascript:void(0)" class="nav-link" data-toggle="dropdown"><i class="fe fe-calendar"></i> Sayfalar</a>
                                <div class="dropdown-menu dropdown-menu-arrow">
                                    <a href="{{route('admin.sayfalarIndex')}}" class="dropdown-item ">Sayfalar</a>
                                    <a href="{{route('admin.sayfaEkle')}}" class="dropdown-item ">Sayfa Ekle</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a href="javascript:void(0)" class="nav-link" data-toggle="dropdown"><i class="fe fe-calendar"></i> Ürünler</a>
                                <div class="dropdown-menu dropdown-menu-arrow">
                                    <a href="{{route('admin.urunlerIndex')}}" class="dropdown-item ">Ürünler</a>
                                    <a href="{{route('admin.urunEkle')}}" class="dropdown-item ">Ürün Ekle</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a href="javascript:void(0)" class="nav-link" data-toggle="dropdown"><i class="fe fe-calendar"></i> Yazılar/Blog</a>
                                <div class="dropdown-menu dropdown-menu-arrow">
                                    <a href="{{route('admin.yazilarIndex')}}" class="dropdown-item ">Yazılar</a>
                                    <a href="{{route('admin.yaziEkle')}}" class="dropdown-item ">Yazı Ekle</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a href="javascript:void(0)" class="nav-link" data-toggle="dropdown"><i class="fe fe-calendar"></i> Faaliyet Alanları</a>
                                <div class="dropdown-menu dropdown-menu-arrow">
                                    <a href="{{route('admin.projelerIndex')}}" class="dropdown-item ">Faaliyetler</a>
                                    <a href="{{route('admin.projeEkle')}}" class="dropdown-item ">Faaliyet Ekle</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a href="javascript:void(0)" class="nav-link" data-toggle="dropdown"><i class="fe fe-calendar"></i> Hizmetler</a>
                                <div class="dropdown-menu dropdown-menu-arrow">
                                    <a href="{{route('admin.hizmetlerIndex')}}" class="dropdown-item ">Hizmetler</a>
                                    <a href="{{route('admin.hizmetEkle')}}" class="dropdown-item ">Hizmet Ekle</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('admin.menulerIndex')}}" class="nav-link"><i class="fe fe-calendar"></i> Menüler</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a href="javascript:void(0)" class="nav-link" data-toggle="dropdown"><i class="fe fe-calendar"></i> Site Ayarlar</a>
                                <div class="dropdown-menu dropdown-menu-arrow">
                                    <a href="{{route('admin.siteAyarlar')}}" class="dropdown-item ">Genel Ayarlar</a>
                                    <a href="{{route('admin.sliderIndex')}}" class="dropdown-item ">Slider</a>
                                    <a href="{{route('admin.bannerIndex')}}" class="dropdown-item ">Banner</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="my-3 my-md-5">
            <div class="container">
                @yield('icerik')

            </div>
        </div>
    </div>
    <footer class="footer">

        <div class="container">
            <div class="row align-items-center flex-row-reverse">
                <div class="col-12 col-lg-auto mt-3 mt-lg-0 text-center">
                    Copyright © 2022 <a href=".">{{$site_ayarlar_provider->site_adi}}</a>. Tasarım ve Kodlama <a href="mailto:tarik1990@gmail.com">Tarık Delibaş</a>
                </div>
            </div>
        </div>
    </footer>
</div>
@yield('script')

</body>
</html>
