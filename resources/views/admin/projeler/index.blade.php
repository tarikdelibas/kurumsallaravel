@extends('admin.template')
@section('icerik')
    <div class="container">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="col-lg-10"><h3 class="card-title">Faaliyet Alanları</h3></div>
                    <div class="col-lg-1">
                        <a href="{{route('admin.projeEkle')}}">
                            <input type="button" value="+ Faaliyet Ekle" class="btn btn-blue" style="position: relative; right: 0; margin-right: 5%;">
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
                        @if(isset($projeler))
                            @foreach($projeler as $proje)
                                <tr>
                                    <td><span class="text-muted">{{$proje->id}}</span></td>
                                    <td><img src="../../{{$proje->gorsel}}" width="80" height="80"></td>
                                    <td>{{$proje->baslik}}</td>
                                    <form method="get" action="{{route('admin.projeSil', $proje->id)}}">
                                        @csrf
                                        <td><button type="submit" class="btn btn-danger btn-sm">Sil</button></td>
                                    </form>
                                    <td>
                                        <a class="icon" href="{{route('admin.projeDuzenle', $proje->id)}}">
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
