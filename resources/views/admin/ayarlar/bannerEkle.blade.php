@extends('admin.template')
@section('icerik')
    <div class="container">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Banner Ekle</h3>
                </div>
                <form action="{{route('admin.bannerCreate')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <fieldset class="form-fieldset">
                        <div class="form-group">
                            <label class="form-label">Banner hedef Link</label>
                            <input type="text" class="form-control" name="link"/>
                        </div>
                        <div class="form-group">
                            <div class="form-label">Görsel</div>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="banner_gorsel" id="banner_gorsel">
                                <label class="custom-file-label">Dosya Seç</label>
                                <label id="file-name"></label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-pill btn-success">Banner Ekle</button>
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
        document.querySelector("#banner_gorsel").onchange = function(){
            document.querySelector("#file-name").textContent = this.files[0].name;
        }
    </script>

@endsection
