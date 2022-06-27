@extends('frontend.template')
@section('icerik')

    <section id="main-container" class="main-container">
        <div class="container">

            <div class="row text-center">
                <div class="col-12">
                    <h2 class="section-title">Bizimle İletişime Geçin</h2>
                    <h3 class="section-sub-title">İLETİŞİM</h3>
                </div>
            </div>
            <!--/ Title row end -->

            <div class="row">
                <div class="col-md-4">
                    <div class="ts-service-box-bg text-center h-100">
          <span class="ts-service-icon icon-round">
            <i class="fas fa-map-marker-alt mr-0"></i>
          </span>
                        <div class="ts-service-box-content">
                            <h4>Bizi Zİyaret Edin</h4>
                            <p> {{$site_ayarlar_provider->site_adres}}</p>
                        </div>
                    </div>
                </div><!-- Col 1 end -->

                <div class="col-md-4">
                    <div class="ts-service-box-bg text-center h-100">
          <span class="ts-service-icon icon-round">
            <i class="fa fa-envelope mr-0"></i>
          </span>
                        <div class="ts-service-box-content">
                            <h4>Bize Yazın</h4>
                            <p><a href="mailto:{{$site_ayarlar_provider->site_mail}}"> {{$site_ayarlar_provider->site_mail}}</a></p>
                        </div>
                    </div>
                </div><!-- Col 2 end -->

                <div class="col-md-4">
                    <div class="ts-service-box-bg text-center h-100">
          <span class="ts-service-icon icon-round">
            <i class="fa fa-phone-square mr-0"></i>
          </span>
                        <div class="ts-service-box-content">
                            <h4>Bizi Arayın</h4>
                            <p><a href="tel:{{$site_ayarlar_provider->site_telefon}}">{{$site_ayarlar_provider->site_telefon}}</a></p>
                        </div>
                    </div>
                </div><!-- Col 3 end -->

            </div><!-- 1st row end -->

            <div class="gap-60"></div>

            <div class="google-map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12500.751201159297!2d27.2215941!3d38.4371309!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x3bf7b8c32167a371!2sEge%20Bombe%20Sanayi!5e0!3m2!1str!2str!4v1656340232091!5m2!1str!2str" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

            <div class="gap-40"></div>

            <div class="row">
                <div class="col-md-12">
                    <h3 class="column-title">Bizimle İletişime Geçin</h3>
                    <!-- contact form works with formspree.io  -->
                    <!-- contact form activation doc: https://docs.themefisher.com/constra/contact-form/ -->
                    <form id="contact-form" action="#" method="post" role="form">
                        <div class="error-container"></div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>İsim</label>
                                    <input class="form-control form-control-name" name="name" id="name" placeholder="" type="text" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input class="form-control form-control-email" name="email" id="email" placeholder="" type="email"
                                           required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Konu</label>
                                    <input class="form-control form-control-subject" name="subject" id="subject" placeholder="" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Mesajınız</label>
                            <textarea class="form-control form-control-message" name="message" id="message" placeholder="" rows="10"
                                      required></textarea>
                        </div>
                        <div class="text-right"><br>
                            <button class="btn btn-primary solid blank" type="submit">Gönder</button>
                        </div>
                    </form>
                </div>

            </div><!-- Content row -->
        </div><!-- Conatiner end -->
    </section><!-- Main container end -->
@endsection
