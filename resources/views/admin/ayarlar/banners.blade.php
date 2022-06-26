@extends('admin.template')
@section('icerik')
    <div class="container">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="col-lg-10"><h3 class="card-title">Banner Yönetimi</h3></div>
                    <div class="col-lg-1">
                        <a href="{{route('admin.bannerEkle')}}">
                            <input type="button" value="+ Banner Ekle" class="btn btn-blue" style="position: relative; right: 0; margin-right: 5%;">
                        </a>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table data-table table-vcenter text-nowrap">
                        <thead>
                        <tr>
                            <th>Görsel</th>
                            <th>Aktif/Pasif</th>
                            <th>Link</th>
                            <th>Sil</th>
                            <th>Düzenle</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if(isset($banners))
                            @foreach($banners as $banner)
                                <tr>
                                    <td><img src="../../{{$banner->gorsel}}" width="80" height="80"></td>
                                    <td>{{$banner->aktif_pasif==0 ? "Pasif" : "Aktif"}}</td>
                                    <td>{{$banner->link}}</td>
                                    <form method="get" action="{{route('admin.bannerSil', $banner->id)}}">
                                        @csrf
                                        <td><button type="submit" class="btn btn-danger btn-sm">Sil</button></td>
                                    </form>
                                    <td>
                                        <a class="icon" href="{{route('admin.bannerDuzenle', $banner->id)}}">
                                            <i class="fe fe-edit"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
@endsection
