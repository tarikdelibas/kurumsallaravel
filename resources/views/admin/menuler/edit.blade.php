@extends('admin.template')
@section('icerik')
    <div class="container">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Menü Düzenle</h3>
                </div>
                <form action="{{route('admin.menuUpdate')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <fieldset class="form-fieldset">
                        <div class="form-group">
                            <label class="form-label">Menü Başlık<span class="form-required">*</span></label>
                            <input type="text" class="form-control" name="baslik" value="{{$menu->baslik}}" required/>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Aktif/Pasif<span class="form-required">*</span></label>
                            <select name="aktif_pasif">
                                <option value="0" {{$menu->aktif_pasif==0 ? "selected" : ""}}>Pasif</option>
                                <option value="1" {{$menu->aktif_pasif==1 ? "selected" : ""}}>Aktif</option>
                            </select>
                        </div>
                        <input type="hidden" name="id" value="{{$menu->id}}">
                        <button type="submit" class="btn btn-pill btn-success">Menü Düzenle</button>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('script')

    <script type="text/javascript">
        CKEDITOR.replace('aciklama', {
            filebrowserUploadUrl: "",
            filebrowserUploadMethod: 'form'
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('.ckeditor').ckeditor();
        });
    </script>
    <script type="text/javascript">
        document.querySelector("#sayfa_gorsel2").onchange = function(){
            document.querySelector("#file-name").textContent = this.files[0].name;
        }
    </script>

@endsection
