@extends('admin.template')
@section('icerik')
    <div class="container">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Banner Düzenle</h3>
                </div>
                <form action="{{route('admin.bannerUpdate')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <fieldset class="form-fieldset">
                        <div class="form-group">
                            <label class="form-label">Banner hedef Link</label>
                            <input type="text" class="form-control" name="link" value="{{$banner->link}}"/>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Aktif/Pasif</label>
                            <select name="aktif_pasif">
                                <option value="0" {{$banner->aktif_pasif==0 ? "selected" : ""}}>Pasif</option>
                                <option value="1" {{$banner->aktif_pasif==1 ? "selected" : ""}}>Aktif</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <div class="form-label">Görsel</div>
                            <img src="/../{{$banner->gorsel}}" width="100" height="100">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="banner_gorsel2" id="banner_gorsel2">
                                <label class="custom-file-label">Dosya Seç</label>
                                <label id="file-name"></label>
                            </div>
                        </div>
                        <input type="hidden" name="id" value="{{$banner->id}}">
                        <button type="submit" class="btn btn-pill btn-success">Slayt Düzenle</button>
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
        document.querySelector("#banner_gorsel2").onchange = function(){
            document.querySelector("#file-name").textContent = this.files[0].name;
        }
    </script>

@endsection
