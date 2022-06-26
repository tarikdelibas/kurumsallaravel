@extends('admin.template')
@section('icerik')
    <div class="container">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="col-lg-10"><h3 class="card-title">Hizmetler</h3></div>
                    <div class="col-lg-1">
                        <a href="{{route('admin.hizmetEkle')}}">
                            <input type="button" value="+ Hizmet Ekle" class="btn btn-blue" style="position: relative; right: 0; margin-right: 5%;">
                        </a>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table data-table table-vcenter text-nowrap">
                        <thead>
                        <tr>
                            <th class="w-1">id</th>
                            <th>Görsel</th>
                            <th>Sayfa Başlık</th>
                            <th>Sil</th>
                            <th>Düzenle</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if(isset($hizmetler))
                            @foreach($hizmetler as $hizmet)
                                <tr>
                                    <td><span class="text-muted">{{$hizmet->id}}</span></td>
                                    <td><img src="../../{{$hizmet->gorsel}}" width="80" height="80"></td>
                                    <td>{{$hizmet->baslik}}</td>
                                    <form method="get" action="{{route('admin.hizmetSil', $hizmet->id)}}">
                                        @csrf
                                        <td><button type="submit" class="btn btn-danger btn-sm">Sil</button></td>
                                    </form>
                                    <td>
                                        <a class="icon" href="{{route('admin.hizmetDuzenle', $hizmet->id)}}">
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
