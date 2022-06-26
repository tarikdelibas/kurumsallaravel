@extends('admin.template')
@section('icerik')
    <div class="container">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Hizmet Ekle</h3>
                </div>
                <form action="{{route('admin.hizmetCreate')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <fieldset class="form-fieldset">
                        <div class="form-group">
                            <label class="form-label">Hizmet Başlık<span class="form-required">*</span></label>
                            <input type="text" class="form-control" name="baslik" required/>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Kısa Açıklama<span class="form-required">*</span></label>
                            <input type="text" class="form-control" name="kisa_aciklama" maxlength="300" required/>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Meta Etiketler<span class="form-required">*</span></label>
                            <input type="text" class="form-control" name="meta_etiketler" maxlength="350" required/>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Açıklama</label>
                            <textarea class="ckeditor form-control" id="aciklama" name="aciklama" required></textarea>
                        </div>
                        <div class="form-group">
                            <div class="form-label">Görsel</div>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="hizmet_gorsel" id="hizmet_gorsel">
                                <label class="custom-file-label">Dosya Seç</label>
                                <label id="file-name"></label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-pill btn-success">Hizmet Ekle</button>
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
        document.querySelector("#hizmet_gorsel").onchange = function(){
            document.querySelector("#file-name").textContent = this.files[0].name;
        }
    </script>

@endsection
