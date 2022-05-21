@extends('front.layout.master')

@section('title') {{ __('menu.esas') }}@endsection
@section('css')

@endsection

@section('content')
    <main id="home" class="aze">
        <div class="container">
            <div class="block_1 col-md-12 col-sm-12 col-12">
                <span class="b1_con col-md-6 col-sm-12 col-12">
                    <span class="b1_headert">{!! __('home.ingilis_dilini_tekminlesdireciyik') !!}</span>
                    <span class="b1_text">{!! __('home.eger_ingilis_dilinde_selis_danismaq') !!}</span>
                    <span class="b1_button"><button class="main_zapisatsa btn_yellow"
                                                    onClick="window.location.href='/#tariffs'">{!! __('home.qeydiyyatdan_kecmek') !!}</button></span>
                </span>
                <span class="b1_girl col-md-6 col-sm-12 col-12"><img src="img/girl.png" /></span>
                <span class="b1_yleft"><img src="img/yellow.svg"></span>
            </div>
            <div class="block_2">
                <div class="b2_headert section_heading">{!! __('home.ustunlukler') !!}</div>
                <div class="b2_cards col-lg-12 col-md-12 col-sm-12">
                    <span class="b2_card col-sm-6 col-12">
                        <span class="b2_img"><img src="img/01.svg" /></span>
                        <span class="b2_text">{!! __('home.muellif_huququ_materiallari') !!}</span>
                    </span>
                    <span class="b2_card col-sm-6 col-12">
                        <span class="b2_img"><img src="img/02.svg" /></span>
                        <span class="b2_text">{!! __('home.serfeli_qiymet') !!}</span>
                    </span>
                    <span class="b2_card col-sm-6 col-12">
                        <span class="b2_img"><img src="img/03.svg" /></span>
                        <span class="b2_text">{!! __('home.istenilen_yerde_ve_istenilen_vaxt') !!}</span>
                    </span>
                    <span class="b2_card col-sm-6 col-12">
                        <span class="b2_img"><img src="img/04.svg" /></span>
                        <span class="b2_text">{!! __('home.butun_bacariqlarin_intensiv_sekilde') !!}</span>
                    </span>
                </div>
            </div>
            @include('front.includes.elementary')
            @include('front.includes.paketler')
            <img src="img/red.svg" class="b3-b4_elips" />
            <div class="block_4">
                <div class="b4_headert section_heading">{!! __('home.bizim_haqqimizda') !!}</div>
                <div class="b4_content">
                    <p class="b4c_headert">{!! __('home.missiyamiz_insanlara_ingilis_dilini') !!}</p>
                    <p class="b4c_text">{!! __('home.layihe_ucun_prioritet') !!}</p>
                </div>
            </div>
            <div class="block_5">
                <div class="b5_headert section_heading">{!! __('home.bizimle') !!}</div>
                <div class="b5_content col-12">
                    <span class="b5_con1 b5_card col-12">
                        <img src="img/chat1.svg" />
                        <span class="b5_con1_text">{!! __('home.fikirlerinizi_ingilis_dilinde') !!}</span>
                    </span>
                    <span class="b5_con2 b5_card col-12">
                        <img src="img/presentation1.svg" />
                        <span class="b5_con2_text">{!! __('home.qramatikadaki_bosluqlar') !!}</span>
                    </span>
                    <span class="b5_con3 b5_card col-12">
                        <img src="img/book1.svg" />
                        <span class="b5_con3_text">{!! __('home.soz_ehtiyyatinizi') !!}</span>
                    </span>
                    <span class="b5_con4 b5_card col-12">
                        <img src="img/Component1.svg" />
                        <span class="b5_con4_text">{!! __('home.aksentden_qurtul_ve_selis') !!}</span>
                    </span>
                </div>
                <button class="b5_about_btn btn_white" onClick="window.location.href='/about-course#tariffs'">{!! __('home.etrafli') !!}</button>
            </div>
            <div id="counters" class="block_6">
                <span class="b6_content col-md-12 col-sm-12 col-12">
                    <span class="b6_con1 b6_card col-md-4 col-sm-12 col-12">
                        <span class="b6_h1"><span id="counter1">450</span>+</span>{!! __('home.tamamlanmis_ders') !!}
                    </span>
                    <span class="b6_con2 b6_card col-md-4 col-sm-12 col-12">
                        <span class="b6_h2"><span id="counter2">500</span>+</span>{!! __('home.paylama_materiali') !!}
                    </span>
                    <span class="b6_con3 b6_card col-md-4 col-sm-12 col-12">
                        <span class="b6_h3"><span id="counter3">150</span>+</span>{!! __('home.telebe') !!}
                    </span>
                </span>
                <img src="img/purple.svg" />
            </div>
            <div class="block_7 col-md-12 col-sm-12 col-12">
                <div class="col-md-6 col-sm-12 col-12">
                    <span class="b7_headert">{!! __('home.bize_suallariniz_var') !!} <br>{!! __('home.muracietinizi_gonderin_ve_biz') !!}</span>
                    <span class="b7_text">{!! __('home.elaqe_telefon_nomrenizi') !!}</span>
                </div>
                <span class="b7_form col-md-5 col-sm-12 col-12">
                    <form id="form col-md-12 col-sm-12 col-12" action="{{ route('sual.var') }}" onsubmit="return false" method="POST">
                        @csrf
                        <div class="form_row col-md-12 col-sm-12 col-12">
                            <input class="col-sm-12 col-12" type="text" name="aname" value="" placeholder="{!! __('home.adiniz') !!}" autocomplete="off">
                            <input class="col-sm-12 col-12" type="text" name="anumber" value="" placeholder="{!! __('home.mobil_nomreniz') !!}" autocomplete="off">
                        </div>
                        <div class="checkbox_container my-2">
                            <input type="checkbox" name="acheckbox" class="b7_fcheckbox" id="checkbox1" required=""> <label for="checkbox1" class="b7_flabel ">{!! __('home.men_sexsi_melumatlarin') !!}</label>
                        </div>
                        <button class="b7_fsubmit btn_green" type="button">{!! __('home.gonder') !!}</button>
                    </form>
                </span>
            </div>
            @include('front.includes.reviews')
            <div class="modal modal1" data-modal="1">
                <svg class="modal__cross js-modal-close" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path
                        d="M23.954 21.03l-9.184-9.095 9.092-9.174-2.832-2.807-9.09 9.179-9.176-9.088-2.81 2.81 9.186 9.105-9.095 9.184 2.81 2.81 9.112-9.192 9.18 9.1z" />
                </svg>
                <img src="img/modal1.svg" class="modal_img" />
                <p class="modal__title">Müraciətinizi göndərdiyiviz üçün təşəkkür edirik!</p>
                <p class="modal_text">
                    Müraciətiniz uğurla göndərildi!
                    Tezliklə sizinlə əlaqə saxlayacağıq.</p>
            </div>
        </div>
    </main>
@endsection

@section('js')

@endsection
