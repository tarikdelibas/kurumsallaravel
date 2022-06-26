@extends('admin.template')
@section('icerik')
    <div class="container">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Ürün Düzenle</h3>
                </div>
                <form action="{{route('admin.urunUpdate')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <fieldset class="form-fieldset">
                        <div class="form-group">
                            <label class="form-label">Ürün Başlık<span class="form-required">*</span></label>
                            <input type="text" class="form-control" name="baslik" value="{{$urun->baslik}}" required/>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Kısa Açıklama<span class="form-required">*</span></label>
                            <input type="text" class="form-control" name="kisa_aciklama" value="{{$urun->kisa_aciklama}}" required/>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Meta Etiketler<span class="form-required">*</span></label>
                            <input type="text" class="form-control" name="meta_etiketler" value="{{$urun->meta_etiketler}}" required/>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Açıklama</label>
                            <textarea class="ckeditor form-control" id="aciklama" name="aciklama" required>{{$urun->aciklama}}</textarea>
                        </div>
                        <div class="form-group">
                            <div class="form-label">Görsel</div>
                            <img src="../../{{$urun->gorsel}}" width="80" height="80">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="urun_gorsel2" id="urun_gorsel2">
                                <label class="custom-file-label">Görsel Değiştir</label>
                                <label id="file-name"></label>
                            </div>
                        </div>
                        <input type="hidden" name="id" value="{{$urun->id}}">
                        <button type="submit" class="btn btn-pill btn-success">Ürün Düzenle</button>
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
        document.querySelector("#urun_gorsel2").onchange = function(){
            document.querySelector("#file-name").textContent = this.files[0].name;
        }
    </script>

@endsection
