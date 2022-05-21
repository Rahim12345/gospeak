<footer>
    <div class="container">
        <div class="footer col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="footer_left col-lg-2 col-md-12 col-sm-12 col-12">
                <img src="{{ asset('img/logo-white.svg') }}" class="footer_logo" />
                <span class="fleft_text">
                    <span>{{ __('menu.copyright') }}</span>
                    <span>{{ __('menu.all_rights') }}</span>
                    <span>VÖEN 2001690142</span>
                </span>
            </div>
            <div class="footer_right col-lg-9 col-md-12 col-sm-12 col-12">
                <span class="fright_1section col-md-3 col-sm-12 col-12">
                    <a href="{{ route('front.home') }}" class="fr_1_1">{{ __('menu.esas') }}</a>
                    <a href="{{ route('front.about.cource') }}" class="fr_1_2">{{ __('menu.kurs_haqqinda') }}</a>
                    <a href="{{ route('front.about') }}" class="fr_1_3">{{ __('menu.bizim_haqqimizda') }}</a>
                    <a href="https://gospeak.az/az/profile" class="fr_1_4">{{ __('menu.sexsi_kabinet') }}</a>
                </span>
                <span class="fright_2section col-lg-4 col-md-12 col-sm-12 col-12">
                    <a href="https://gospeak.az/az/confidential" class="fr_2_1">{{ __('menu.mexfilik_siyaseti') }}</a>
                    <a href="https://gospeak.az/az/rules" class="fr_2_2">{{ __('menu.istifade_qaydalari') }}</a>
                    <span class="fr_2_images">
                        <a href="https://instagram.com/gospeak.az" class="fr_2_3"><img src="{{ asset('img/inst.svg') }}"
                                                                                       class="fr_2_3_img" /></a>
                        <a href="https://wa.me/994509678826" class="fr_2_4"><img src="{{ asset('img/whatsapp.svg') }}"
                                                                                 class="fr_2_4_img" /></a>
                        <a href="https://t.me/@gospeakaz" class="fr_2_5"><img src="{{ asset('img/telegram.svg') }}"
                                                                              class="fr_2_5_img" /></a>
                        <a href="https://www.tiktok.com/@gospeak.az" class="fr_2_6"><img src="{{ asset('img/tiktok.svg') }}"
                                                                                         class="fr_2_6_img" /></a>
                    </span>
                </span>
                <span class="fright_3section col-lg-4 col-md-12 col-sm-12 col-12">
                        <span class="fr_3_text">{{ __('menu.en_son_xeberleri') }}</span>
                        <span class="fr_3_form">
                            <form id="form1">
                                <input autocomplete="off" type="email" name="e-mail" value="" placeholder="{{ __('menu.sizin_e_poctunuz') }}" class="fr_3_form_input" required="">
                                <button type="submit" class="fr_3_form_submit js-open-modal" data-modal="2"><img src="{{ asset('img/Arrow-Right.svg') }}"></button>
                            </form>
                        </span>
                    </span>
            </div>
        </div>
    </div>
</footer>

@include('front.includes.tesekkur-edirik')
<div class="overlay js-overlay-modal"></div>
<script type="text/javascript" src="{{ asset('js/footer.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/main_page.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/valute.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/counter.js') }}"></script>
@toastr_js
@toastr_render
@yield('js')
