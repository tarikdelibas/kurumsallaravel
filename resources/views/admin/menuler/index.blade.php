@extends('admin.template')
@section('icerik')
    <div class="container">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="col-lg-11"><h3 class="card-title">Menüler</h3></div>
                </div>
                <div class="table-responsive">
                    <table class="table data-table table-vcenter text-nowrap">
                        <thead>
                        <tr>
                            <th class="w-1">id</th>
                            <th>Menü Adı/Konum</th>
                            <th>Aktif/Pasif</th>
                            <th>Düzenle</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if(isset($menuler))
                            @foreach($menuler as $menu)
                                <tr>
                                    <td><span class="text-muted">{{$menu->id}}</span></td>
                                    <td>{{$menu->baslik}}</td>
                                    <td>{{$menu->aktif_pasif==1 ? "Aktif" : "Pasif"}}</td>
                                    <td>
                                        <a class="icon" href="{{route('admin.menuDuzenle', $menu->id)}}">
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
