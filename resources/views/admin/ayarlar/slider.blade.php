@extends('admin.template')
@section('icerik')
    <div class="container">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="col-lg-10"><h3 class="card-title">Slider</h3></div>
                    <div class="col-lg-1">
                        <a href="{{route('admin.slaytEkle')}}">
                            <input type="button" value="+ Slayt Ekle" class="btn btn-blue" style="position: relative; right: 0; margin-right: 5%;">
                        </a>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table data-table table-vcenter text-nowrap">
                        <thead>
                        <tr>
                            <th>Görsel</th>
                            <th>Aktif/Pasif</th>
                            <th>Yazı</th>
                            <th>Link</th>
                            <th>Sil</th>
                            <th>Düzenle</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if(isset($slaytlar))
                            @foreach($slaytlar as $slayt)
                                <tr>
                                    <td><img src="../../{{$slayt->gorsel}}" width="80" height="80"></td>
                                    <td>{{$slayt->aktif_pasif==0 ? "Pasif" : "Aktif"}}</td>
                                    <td>{!! $slayt->yazi !!}</td>
                                    <td>{{$slayt->link}}</td>
                                    <form method="get" action="{{route('admin.slaytSil', $slayt->id)}}">
                                        @csrf
                                        <td><button type="submit" class="btn btn-danger btn-sm">Sil</button></td>
                                    </form>
                                    <td>
                                        <a class="icon" href="{{route('admin.slaytDuzenle', $slayt->id)}}">
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
