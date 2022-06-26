@extends('admin.template')
@section('icerik')
    <div class="container">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Site Ayarlar</h3>
                </div>
                <form action="{{route('admin.siteAyarUpdate')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <fieldset class="form-fieldset">
                        <div class="form-group">
                            <label class="form-label">Site Adı<span class="form-required">*</span></label>
                            <input type="text" class="form-control" name="site_adi" value="{{$site_ayar->site_adi}}" required/>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Site Başlık</label>
                            <input type="text" class="form-control" name="site_baslik" value="{{$site_ayar->site_baslik}}"/>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Meta Etiketler</label>
                            <input type="text" class="form-control" name="site_keywords" value="{{$site_ayar->site_keywords}}"/>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Meta Açıklama</label>
                            <input type="text" class="form-control" name="site_meta_aciklama" value="{{$site_ayar->site_meta_aciklama}}"/>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Adres</label>
                            <input type="text" class="form-control" name="site_adres" value="{{$site_ayar->site_adres}}"/>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Telefon 1</label>
                            <input type="text" class="form-control" name="site_telefon" value="{{$site_ayar->site_telefon}}"/>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Mail Adresi</label>
                            <input type="text" class="form-control" name="site_mail" value="{{$site_ayar->site_mail}}"/>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Facebook</label>
                            <input type="text" class="form-control" name="site_facebook" value="{{$site_ayar->site_facebook}}"/>
                        </div>
                        <div class="form-group">
                            <label class="form-label">İnstagram</label>
                            <input type="text" class="form-control" name="site_instagram" value="{{$site_ayar->site_instagram}}"/>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Twitter</label>
                            <input type="text" class="form-control" name="site_twitter" value="{{$site_ayar->site_twitter}}"/>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Youtube</label>
                            <input type="text" class="form-control" name="site_youtube" value="{{$site_ayar->site_youtube}}"/>
                        </div>
                        <div class="form-group">
                            <label class="form-label">İnstagram</label>
                            <input type="text" class="form-control" name="site_instagram" value="{{$site_ayar->site_instagram}}"/>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Header Tags</label>
                            <textarea class="ckeditor form-control" id="aciklama" name="site_header_tag" >{{$site_ayar->site_header_tag}}</textarea>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Body Tags</label>
                            <textarea class="ckeditor form-control" id="aciklama" name="site_body_tag" >{{$site_ayar->site_body_tag}}</textarea>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Slider Aktif/Pasif</label>
                            <select name="slider_aktif_pasif">
                                <option value="0" {{$site_ayar->slider_aktif_pasif==0 ? "selected" : ""}}>Pasif</option>
                                <option value="1" {{$site_ayar->slider_aktif_pasif==1 ? "selected" : ""}}>Aktif</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Slider Aktif/Pasif</label>
                            <select name="banners_aktif_pasif">
                                <option value="0" {{$site_ayar->banner_aktif_pasif==0 ? "selected" : ""}}>Pasif</option>
                                <option value="1" {{$site_ayar->banner_aktif_pasif==1 ? "selected" : ""}}>Aktif</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <div class="form-label">Logo</div>
                            <img src="../{{$site_ayar->logo}}" width="100" height="100">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="logo" id="logo">
                                <label class="custom-file-label">Değiştir/Ekle</label>
                                <label id="file-name-logo"></label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-label">Favicon</div>
                            <img src="../{{$site_ayar->favicon}}" width="100" height="100">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="favicon" id="favicon">
                                <label class="custom-file-label">Değiştir/Ekle</label>
                                <label id="file-name-favicon"></label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-pill btn-success">Ayarları Kaydet</button>
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
        document.querySelector("#logo").onchange = function(){
            document.querySelector("#file-name-logo").textContent = this.files[0].name;
        }
    </script>
    <script type="text/javascript">
        document.querySelector("#favicon").onchange = function(){
            document.querySelector("#file-name-favicon").textContent = this.files[0].name;
        }
    </script>

@endsection
