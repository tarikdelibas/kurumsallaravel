@extends('admin.template')
@section('icerik')
    <div class="container">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Slayt Düzenle</h3>
                </div>
                <form action="{{route('admin.slaytUpdate')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <fieldset class="form-fieldset">
                        <div class="form-group">
                            <label class="form-label">Slayt Yazı</label>
                            <textarea class="ckeditor form-control" id="yazi" name="yazi">{{$slayt->yazi}}</textarea>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Slayt hedef Link</label>
                            <input type="text" class="form-control" name="link" value="{{$slayt->link}}"/>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Aktif/Pasif</label>
                            <select name="aktif_pasif">
                                <option value="0" {{$slayt->aktif_pasif==0 ? "selected" : ""}}>Pasif</option>
                                <option value="1" {{$slayt->aktif_pasif==1 ? "selected" : ""}}>Aktif</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <div class="form-label">Görsel</div>
                            <img src="/../{{$slayt->gorsel}}" width="100" height="100">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="slayt_gorsel2" id="slayt_gorsel2">
                                <label class="custom-file-label">Dosya Seç</label>
                                <label id="file-name"></label>
                            </div>
                        </div>
                        <input type="hidden" name="id" value="{{$slayt->id}}">
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
        document.querySelector("#slayt_gorsel2").onchange = function(){
            document.querySelector("#file-name").textContent = this.files[0].name;
        }
    </script>

@endsection
