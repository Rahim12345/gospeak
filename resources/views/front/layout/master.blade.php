<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('template') }}/css/main.css">
</head>
<body>
<div class="overlay js-overlay-modal"></div>
<!-- HEADER =================== -->
<header id="head">
    <div class="container">
        <nav class="header_desktop">
            <span class="header_left_block">
                <span class="logo_left">
                    <a href="{{ route('front.home') }}"><img src="https://www.gospeak.az/img/logo-without%20text.svg"></a>
                </span>
                <span class="header_left_block_links">
                    <a class="main_pg_ru navlink  link_active" href="{{ route('front.home') }}">{{ __('menu.esas') }}</a>
                    <a class="about_course_ru navlink  " href="aboutUs.html">{{ __('menu.kurs_haqqinda') }}</a>
                    <a class="about_us_ru navlink  " href="about_courses.html">{{ __('menu.bizim_haqqimizda') }}</a>
                </span>
            </span>
            <span class="header_elips"><img src="https://www.gospeak.az/img/green.svg"></span>
            <span class="header_right_block">
                <div class="dropdown header_dropdown dropdown-desktop">
                    <button class="btn dropdown-toggle header_dropdown_btn" type="button" id="dropdownMenuButton3" data-bs-toggle="dropdown" aria-expanded="false">
                    @if(app()->getLocale() == 'ru')
                            RU
                        @elseif(app()->getLocale() == 'az')
                            AZ
                        @elseif(app()->getLocale() == 'en')
                            EN
                        @endif
                    </button>
                    <ul class="dropdown-menu" name="select_lang" id="sel" aria-labelledby="dropdownMenuButton3">
                        @if(app()->getLocale() == 'ru')
                            <li><a class="dropdown-item" href="{{ route('lang.swithcher',['locale'=>'az']) }}" >AZ</a></li>
                            <li><a class="dropdown-item" href="{{ route('lang.swithcher',['locale'=>'en']) }}" >EN</a></li>
                        @elseif(app()->getLocale() == 'az')
                            <li><a class="dropdown-item" href="{{ route('lang.swithcher',['locale'=>'ru']) }}" >RU</a></li>
                            <li><a class="dropdown-item" href="{{ route('lang.swithcher',['locale'=>'en']) }}" >EN</a></li>
                        @elseif(app()->getLocale() == 'en')
                            <li><a class="dropdown-item" href="{{ route('lang.swithcher',['locale'=>'az']) }}" >AZ</a></li>
                            <li><a class="dropdown-item" href="{{ route('lang.swithcher',['locale'=>'ru']) }}" >RU</a></li>
                        @endif
                    </ul>
                </div>
                <div class="dropdown header_dropdown dropdown-desktop" id="sel">
                    <button class="btn dropdown-toggle header_dropdown_btn" type="button" id="dropdownMenuButton4" data-bs-toggle="dropdown" aria-expanded="false">
                    AZN
                    </button>
                    <ul class="dropdown-menu" name="select_valute" id="selval" aria-labelledby="dropdownMenuButton4">
                        <li><a class="dropdown-item">AZN</a></li>
                        <li><a class="dropdown-item">USD</a></li>
                        <li><a class="dropdown-item" >EUR</a></li>
                        <li><a class="dropdown-item" >RUB</a></li>
                    </ul>
                </div>
                <span id="joinpc" class="join">
                    <button class="join_btn" onclick="login()">
                        <img src="https://www.gospeak.az/img/Profile.svg">
                        <span class="join_btn_text">Giriş</span>
                    </button>
                </span>
                <a class="call_num" href="tel:+994 50 967 88 26">+994 50 967 88 26</a>
            </span>
            <a class="call_num_mobile" href="tel:+994 50 967 88 26"><img src="https://www.gospeak.az/img/phonem.svg"></a>
            <button class="menu-open" onclick="menu_open()">
                <div id="omenu"><img src="https://www.gospeak.az/img/menu.svg" alt="Open menu"></div>
            </button>
            <ul class="menu" id="menu">
                <li><a class="main_pg_ru" href="https://gospeak.az/az/">Əsas</a></li>
                <li><a class="about_course_ru" href="https://gospeak.az/az/about-course">Kurs haqqında</a></li>
                <li><a class="about_us_ru" href="https://gospeak.az/az/about-us">Bizim haqqımızda</a></li>
                <li>
                    <span id="joinmob" class="join_mobile">
                        <button class="join_btn" onclick="login()">
                            <img src="https://www.gospeak.az/img/Profile.svg">
                            <span class="join_btn_text">Giriş</span>
                        </button>
                    </span>
                </li>
                <select class="select_lang1" name="select_lang" id="selmob" onchange="set_lang(this.value)">
                    <option value="ru">RU</option>
                    <option value="az">AZ</option>
                    <option value="en">EN</option>
                </select>
                <select class="select_valute1" name="select_valute" onchange="set_valute(this.value)" id="selvalmob">
                    <option value="AZN">AZN</option>
                    <option value="USD">USD</option>
                    <option value="EUR">EUR</option>
                    <option value="RUB">RUB</option>
                </select>
            </ul>
        </nav>
        <div class="modal modal_auth" data-modal="5">
            <!--   Svg иконка для закрытия окна  -->
            <svg class="modal__cross js-modal-close" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <path d="M23.954 21.03l-9.184-9.095 9.092-9.174-2.832-2.807-9.09 9.179-9.176-9.088-2.81 2.81 9.186 9.105-9.095 9.184 2.81 2.81 9.112-9.192 9.18 9.1z"></path>
            </svg>
            <h3 class="login_header">Giriş</h3>
            <form class="login_form" id="login_form">
                <input class="login_email" type="email" name="email" placeholder="Sizin E-mail" required="">
                <input class="login_pass" type="password" name="pass" placeholder="Sizin parol" required="">
                <button class="login_submit btn_yellow" type="submit" name="auth">Daxil ol</button>
            </form>
            <button class="restore_pass_btn">Parolu unutmusuz?</button>
            <p class="login_text">Şəxsi kabinetə giriş ancaq kursun tələbələri üçün mümkündür</p>
        </div>
        <div class="modal modal_restorepass" data-modal="9">
            <!--   Svg иконка для закрытия окна  -->
            <svg class="modal__cross js-modal-close" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <path d="M23.954 21.03l-9.184-9.095 9.092-9.174-2.832-2.807-9.09 9.179-9.176-9.088-2.81 2.81 9.186 9.105-9.095 9.184 2.81 2.81 9.112-9.192 9.18 9.1z"></path>
            </svg>
            <h3 class="login_header">Parol bərpası</h3>
            <form class="login_form" id="restore_pass">
                <input class="login_email" type="email" name="email" placeholder="Ваш E-mail" required="">
                <button class="login_submit btn_yellow" type="submit" name="auth">Göndər</button>
            </form>
            <button class="restore_pass_btn">Geri</button>
        </div>
        <div class="modal modal4" data-modal="4">
            <svg class="modal__cross js-modal-close" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <path d="M23.954 21.03l-9.184-9.095 9.092-9.174-2.832-2.807-9.09 9.179-9.176-9.088-2.81 2.81 9.186 9.105-9.095 9.184 2.81 2.81 9.112-9.192 9.18 9.1z"></path>
            </svg>
            <img src="../img/kurssale.svg" class="modal_img">
            <p class="modal__title" >Xəta</p>
            <p class="modal_text">Daxil edilmiş məlumatları yoxlayın!</p>
        </div>
    </div>
</header>
<!-- MAIN =================== -->
<main class="home">
    <div class="container">
        <section class="home_banner col-md-12 col-sm-12 col-12">
            <span class="b1_con col-md-6 col-sm-12 col-12">
                <span class="b1_headert">{!! __('home.ingilis_dilini_tekminlesdireciyik') !!}</span>
                <span class="b1_text">{!! __('home.eger_ingilis_dilinde_selis_danismaq') !!}</span>
                <span class="b1_button"><button class="main_zapisatsa btn_yellow" onclick="zapisatsa1()">{!! __('home.qeydiyyatdan_kecmek') !!}</button></span>
            </span>
            <span class="b1_girl col-md-6 col-sm-12 col-12"><img src="https://www.gospeak.az/img/girl.png"></span>
            <span class="b1_yleft"><img src="https://www.gospeak.az/img/yellow.svg"></span>
        </section>
        <section class="advantages">
            <div class="b2_headert section_heading">{!! __('home.ustunlukler') !!}</div>
            <div class="b2_cards ">
                <span class="b2_card ">
                    <div class="b2_img"><img src="{{ asset('template') }}/img/01.svg"></div>
                    <div class="b2_text_up">
                        <span class="b2_text">{!! __('home.muellif_huququ_materiallari') !!}</span>
                    </div>
                </span>
                <span class="b2_card ">
                    <div class="b2_img"><img src="{{ asset('template') }}/img/02.svg"></div>
                    <div class="b2_text_up">
                        <span class="b2_text">{!! __('home.serfeli_qiymet') !!}</span>
                    </div>
                </span>
                <span class="b2_card ">
                    <div class="b2_img"><img src="{{ asset('template') }}/img/03.svg"></div>
                    <div class="b2_text_up">
                        <span class="b2_text">{!! __('home.istenilen_yerde_ve_istenilen_vaxt') !!}</span>
                    </div>
                </span>
                <span class="b2_card ">
                    <div class="b2_img"><img src="{{ asset('template') }}/img/04.svg"></div>
                    <div class="b2_text_up">
                        <span class="b2_text">{!! __('home.butun_bacariqlarin_intensiv_sekilde') !!} </span>
                    </div>
                </span>
            </div>
        </section>
        <section class="about_courses">
            <div class="b2_headert section_heading">
                {!! __('home.kurs_haqqinda') !!}
            </div>
            <div class="about_items col-md-12 col-sm-12 col-12">
                <div class="about_content col-lg-7 col-md-12 col-sm-12 col-12">
                    <span class="about_header">
                        <h2>{!! __('home.elementraryden_intermediate') !!}</h2>
                    </span>
                    <span class="about_text">{!! __('home.her_bir_telebenin') !!}</span>
                    <div class="about_features">
                        <span class="ab_feature"><img src="{{ asset('template') }}/img/time.svg"> {!! __('home.kurshaqqinda_1_ay') !!}</span>
                        <span class="ab_feature"><img src="{{ asset('template') }}/img/doc.svg"> {!! __('home.kurshaqqinda_3_paket') !!}</span>
                        <span class="ab_feature"><img src="{{ asset('template') }}/img/star.svg"> {!! __('home.ferdi_yanasma') !!}</span>
                    </div>
                    <span class="about_btns">
                        <button class="b3_zp about_signup btn_yellow" onclick="zapisatsa()">{!! __('home.qeydiyyatdan_kecmek') !!}</button>
                        <button class="b3_about about_info btn_white" onclick="about_course()">{!! __('home.etrafli') !!}</button>
                    </span>
                </div>
                <img class="about_img col-lg-5 col-md-12 col-sm-12 col-12" src="{{ asset('template') }}/img/b3_img.png">
            </div>
        </section>
        <section id="tariffs" class="tariffs">
            <div class="b2_headert section_heading">{!! __('home.paketler_ve_qiymetler') !!}</div>
            <div class="tariff_items col-md-12 col-sm-12 col-12">
                <div class="b5_con1 tariff_card col-md-12 col-sm-12 col-12" id="b5con1">
                    <div class="b5_con1t b5_content tariff_content" id="b5con1t">
                        <div class="b5_content1_header tariff_header">{!! __('home.basic') !!}</div>
                        <span class="b5_1 b5_0 ">{!! __('home.1_ay_tedris') !!}</span>
                        <span class="b5_2 b5_0">{!! __('home.45_video_ders') !!}</span>
                        <span class="b5_3 b5_0">{!! __('home.70_materiallar') !!}</span>
                        <span class="b5_4 b5_0">{!! __('home.ev_tapsirigi_yoxlanissiz') !!}</span>
                        <span class="b5_5 b5_0">{!! __('home.platformamizda_sexsi_kabinet') !!}</span>
                        <span class="b5_6 b5_0">{!! __('home.umumi_chat') !!}</span>
                        <span class="b5_7 b5_0">{!! __('home.kursun_gedisatini_izlemek') !!}</span>
                        <span class="b5_8 b5_0">{!! __('home.movienights') !!}</span>
                        <span class="b5_8 b5_0">{!! __('home.kursu_bitirme_haqqinda_elektron') !!}</span>
                        <span class="b5_9 b5_0 b01">{!! __('home.interaktivde_istirak_etmek_imkani') !!}</span>
                        <span class="b5_10 b5_0 b01">{!! __('home.mentor_desteyi') !!}</span>
                        <span class="b5_11 b5_0 b01">{!! __('home.speakingclub_danisiq_dersleri') !!}</span>
                        <span class="b5_12 b5_0 b01">{!! __('home.kursda_olmayan_movzular') !!}</span>
                        <span class="b5_13 b5_0 b01">{!! __('home.mentorla_vip_sohbet') !!}</span>
                        <span class="b5_14 b5_0 b01">{!! __('home.muellimle_ferdi_ders') !!}</span>
                        <span id="cena_basic" class="b5_15 b5_0"><span class="b5_15 b5_0"><span class="b5_16">59 AZN</span></span></span>
                        <button class="b5_basic_btn btn_yellow tariff_btn" onclick="zapisatsa()">{!! __('home.almaq') !!}</button>
                    </div>
                </div>
                <div class="b5_con2 tariff_card col-md-12 col-sm-12 col-12 py-5" id="b5con2">
                    <div class="b5_con2t b5_content tariff_content" id="b5con2t">
                        <div class="b5_content2_header tariff_header">{!! __('home.standart') !!}<span class="tariff_mark"> Tövsiyə olunan paket</span></div>
                        <span class="b5_1 b5_0 ">{!! __('home.1_ay_tedris') !!}</span>
                        <span class="b5_2 b5_0">{!! __('home.45_video_ders') !!}</span>
                        <span class="b5_3 b5_0">{!! __('home.80_materiallar') !!}</span>
                        <span class="b5_4 b5_0">{!! __('home.ev_tapsirigi_yoxlanisla') !!}</span>
                        <span class="b5_5 b5_0">{!! __('home.platformamizda_sexsi_kabinet') !!}</span>
                        <span class="b5_6 b5_0">{!! __('home.umumi_chat') !!}</span>
                        <span class="b5_7 b5_0">{!! __('home.kursun_gedisatini_izlemek') !!}</span>
                        <span class="b5_8 b5_0">{!! __('home.movienights') !!}</span>
                        <span class="b5_8 b5_0">{!! __('home.kursu_bitirme_haqqinda_elektron') !!}</span>
                        <span class="b5_9 b5_0">{!! __('home.interaktivde_istirak_etmek_imkani') !!}</span>
                        <span class="b5_10 b5_0">{!! __('home.mentor_desteyi') !!}</span>
                        <span class="b5_11 b5_0">{!! __('home.speakingclub_danisiq_dersleri') !!}</span>
                        <span class="b5_12 b5_0 b01">{!! __('home.kursda_olmayan_movzular') !!}</span>
                        <span class="b5_13 b5_0 b01">{!! __('home.mentorla_vip_sohbet') !!}</span>
                        <span class="b5_14 b5_0 b01">{!! __('home.muellimle_ferdi_ders') !!}</span>
                        <span id="cena_standart" class="b5_15 b5_0"><span class="b5_15 b5_0"><span class="b5_16">79 AZN</span></span></span>
                        <button class="b5_standart_btn btn_yellow tariff_btn" onclick="zapisatsa()">{!! __('home.almaq') !!}</button>
                    </div>
                </div>
                <div class="b5_con3 tariff_card col-md-12 col-sm-12 col-12" id="b5con3">
                    <div class="b5_con3t b5_content tariff_content" id="b5con3t">
                        <div class="b5_content3_header tariff_header">{!! __('home.pro') !!}<span class="tariff_mark"> только 10 человек</span></div>
                        <span class="b5_1 b5_0 ">{!! __('home.1_ay_tedris') !!}</span>
                        <span class="b5_2 b5_0">{!! __('home.45_video_ders') !!}</span>
                        <span class="b5_3 b5_0">{!! __('home.90_materiallar') !!}</span>
                        <span class="b5_4 b5_0">{!! __('home.ev_tapsirigi_yoxlanisla') !!}</span>
                        <span class="b5_5 b5_0">{!! __('home.platformamizda_sexsi_kabinet') !!}</span>
                        <span class="b5_6 b5_0">{!! __('home.umumi_chat') !!}</span>
                        <span class="b5_7 b5_0">{!! __('home.kursun_gedisatini_izlemek') !!}</span>
                        <span class="b5_8 b5_0">{!! __('home.movienights') !!}</span>
                        <span class="b5_8 b5_0">{!! __('home.kursu_bitirme_haqqinda_elektron') !!}</span>
                        <span class="b5_9 b5_0">{!! __('home.interaktivde_istirak_etmek_imkani') !!}</span>
                        <span class="b5_10 b5_0">{!! __('home.mentor_desteyi') !!}</span>
                        <span class="b5_11 b5_0">{!! __('home.speakingclub_danisiq_dersleri_etrafli_individual') !!}</span>
                        <span class="b5_12 b5_0">{!! __('home.kursda_olmayan_movzular') !!}</span>
                        <span class="b5_13 b5_0">{!! __('home.mentorla_vip_sohbet') !!}</span>
                        <span class="b5_14 b5_0">{!! __('home.muellimle_ferdi_ders') !!}</span>
                        <span id="cena_pro" class="b5_15 b5_0"><span class="b5_15 b5_0"><span class="b5_16">119 AZN</span></span></span>
                        <button class="b5_pro_btn btn_yellow tariff_btn" onclick="zapisatsa()">{!! __('home.almaq') !!}</button>
                    </div>
                </div>
            </div>
            <div class="t_head">
                <h3 class="tariff_text red_highlight">{!! __('home.hele_de_subhelenirsiz') !!}</h3>
                <h5 class="tariff_text">{!! __('home.sinaq_paketi_yoxlayin') !!}</h5>
            </div>
            <div class="b5_con4 tariff_card col-md-12 col-sm-12 col-12 mx-auto" id="b5con4">
                <div class="b5_con3t b5_content tariff_content" id="b5con3t">
                    <div class="b5_content3_header tariff_header"><span class="b5_content3_header1"> {!! __('home.trial') !!}</span></div>
                    <span class="b5_1 b5_0 ">{!! __('home.sexsi_kabinete_3_gunluk_giris') !!}</span>
                    <span class="b5_2 b5_0">{!! __('home.3_video_ders') !!}</span>
                    <span class="b5_3 b5_0">{!! __('home.3_material') !!}</span>
                    <span class="b5_4 b5_0">{!! __('home.1_ev_tapsirigin') !!}</span>
                    <span class="b5_6 b5_0">{!! __('home.umumi_chat') !!}</span>
                    <span id="cena_trial" class="b5_15 b5_0"><span class="b5_15 b5_0"><span class="b5_16">9 AZN</span></span></span>
                    <button class="b5_trial_btn btn_yellow tariff_btn" onclick="zapisatsa()">{!! __('home.almaq') !!}</button>
                </div>
            </div>
        </section>
        <section class="about_us">
            <div class="b4_headert section_heading">{!! __('home.bizim_haqqimizda') !!}</div>
            <div class="b4_content">
                <p class="b4c_headert">{!! __('home.missiyamiz_insanlara_ingilis_dilini') !!}</p>
                <p class="b4c_text">{!! __('home.layihe_ucun_prioritet') !!}</p>
            </div>
        </section>
        <section class="our_properties">
            <div class="b5_headert section_heading">{!! __('home.bizimle') !!}</div>
            <div class="b5_content col-12">
                <span class="b5_con1 b5_card col-12">
                    <img src="{{ asset('template') }}/img/comment.svg">
                    <span class="b5_con1_text">{!! __('home.fikirlerinizi_ingilis_dilinde') !!}</span>
                </span>
                <span class="b5_con2 b5_card col-12">
                    <img src="{{ asset('template') }}/img/person.svg">
                    <span class="b5_con2_text">{!! __('home.qramatikadaki_bosluqlar') !!}</span>
                </span>
                <span class="b5_con3 b5_card col-12">
                    <img src="{{ asset('template') }}/img/books.svg">
                    <span class="b5_con3_text">{!! __('home.soz_ehtiyyatinizi') !!}</span>
                </span>
                <span class="b5_con4 b5_card col-12">
                    <img src="{{ asset('template') }}/img/speak.svg">
                    <span class="b5_con4_text">{!! __('home.aksentden_qurtul_ve_selis') !!}</span>
                </span>
            </div>
            <button class="b5_about_btn btn_white" onclick="about_course()">{!! __('home.etrafli') !!}</button>
        </section>
        <section id="counters" class="counters">
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
            <img src="{{ asset('template') }}/img/purple.svg">
        </section>
        <section class="question col-md-12 col-sm-12 col-12">
            <div class="col-md-6 col-sm-12 col-12">
                <span class="b7_headert">{!! __('home.bize_suallariniz_var') !!} <br>{!! __('home.muracietinizi_gonderin_ve_biz') !!}</span>
                <span class="b7_text">{!! __('home.elaqe_telefon_nomrenizi') !!}</span>
            </div>
            <span class="b7_form col-md-5 col-sm-12 col-12">
                <form id="form col-md-12 col-sm-12 col-12">
                    <div class="form_row col-md-12 col-sm-12 col-12">
                        <input class="col-sm-12 col-12" type="text" name="aname" value="" placeholder="{!! __('home.adiniz') !!}" autocomplete="off">
                        <input class="col-sm-12 col-12" type="text" name="anumber" value="" placeholder="{!! __('home.mobil_nomreniz') !!}" autocomplete="off">
                    </div>
                    <div class="checkbox_container my-2">
                        <input type="checkbox" name="acheckbox" class="b7_fcheckbox" id="checkbox1" required=""> <label for="checkbox1" class="b7_flabel ">{!! __('home.men_sexsi_melumatlarin') !!}</label>
                    </div>
                    <input id="submitf1" type="submit" name="asubmit" value="{!! __('home.gonder') !!}" class="b7_fsubmit btn_green">
                </form>
            </span>
        </section>
        <section class="comments">
            <div class="b8_headert section_heading">{!! __('home.telebelerin_reylei') !!}</div>
            <div class="comment col-md-12 col-sm-12 col-12">
                <span class="b8_con1 review_card col-lg-4 col-md-10 col-sm-12 col-12 d-flex justify-content-end">
                    <div class="review_text_holder">
                        <span class="review_name1 review_pname">{!! __('home.leyla_bunyadzade') !!}</span>
                        <span class="b8c_text1 review_text">
                            "{!! __('home.cox_maraqli_ve_faydali') !!}"
                        </span>
                    </div>
                    <span class="b8c_img1 review_img_items">
                        <img src="{{ asset('template') }}/img/redbg.svg" class="b8c_bg1 review_bg">
                        <img src="{{ asset('template') }}/img/revavatar1.png" class="review_avatar1">
                    </span>
                </span>
                <span class="b8_con2 review_card col-lg-4 col-md-10 col-sm-12 col-12">
                    <div class="review_text_holder">
                        <span class="review_name2 review_pname">{!! __('home.tatyana_atkova') !!}</span>
                        <span class="b8c_text2 review_text">
                            "{!! __('home.marafonu_cox_beyendim') !!}".
                        </span>
                    </div>
                    <span class="b8c_img2 review_img_items">
                        <img src="{{ asset('template') }}/img/greenbg.svg" class="b8c_bg2 review_bg">
                        <img src="{{ asset('template') }}/img/revblockelips.svg" class="revelips2">
                        <img src="{{ asset('template') }}/img/revavatar2.png" class="review_avatar2">
                    </span>
                </span>
                <span class="b8_con3 review_card col-lg-4 col-md-10 col-sm-12 col-12 d-flex justify-content-end">
                    <div class="review_text_holder">
                        <span class="review_name3 review_pname">{!! __('home.fatime_mirbalayeva') !!}</span>
                        <span class="b8c_text3 review_text">
                            "{!! __('home.rahat_ders_cedveli') !!}".
                        </span>
                    </div>
                    <span class="b8c_img3 review_img_items">
                        <img src="{{ asset('template') }}/img/purplebg.svg" class="b8c_bg3 review_bg">
                        <img src="{{ asset('template') }}/img/revavatar3.png" class="review_avatar3">
                    </span>
                </span>
                <span class="b8_con4 review_card col-lg-4 col-md-10 col-sm-12 col-12">
                    <div class="review_text_holder">
                        <span class="review_name4 review_pname">{!! __('home.leyla_mustafayeve') !!}</span>
                        <span class="b8c_text4 review_text">
                            "{!! __('home.mohtesemdir_ki_her_gun') !!}"
                        </span>
                    </div>
                    <span class="b8c_img4 review_img_items">
                        <img src="{{ asset('template') }}/img/yellowbg.svg" class="b8c_bg4 review_bg">
                        <img src="{{ asset('template') }}/img/revavatar4.png" class="review_avatar4">
                    </span>
                </span>
            </div>
        </section>

    </div>
</main>


<!-- footer =================== -->
<footer>
    <div class="container">
        <div class="footer col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="footer_left col-lg-2 col-md-12 col-sm-12 col-12">
                <img src="https://www.gospeak.az/img/logo-white.svg" class="footer_logo">
                <span class="fleft_text">
			<span>{{ __('menu.copyright') }}</span>
			<span>{{ __('menu.all_rights') }}</span>
			<span>VÖEN 2001690142</span>
		</span>
            </div>
            <div class="footer_right col-lg-9 col-md-12 col-sm-12 col-12">
		<span class="fright_1section col-md-3 col-sm-12 col-12">
			<a href="https://gospeak.az/az/index" class="fr_1_1">{{ __('menu.esas') }}</a>
			<a href="https://gospeak.az/az/about-course" class="fr_1_2">{{ __('menu.kurs_haqqinda') }}</a>
			<a href="https://gospeak.az/az/about-us" class="fr_1_3">{{ __('menu.bizim_haqqimizda') }}</a>
			<a href="https://gospeak.az/az/profile" class="fr_1_4">{{ __('menu.sexsi_kabinet') }}</a>
		</span>
                <span class="fright_2section col-lg-4 col-md-12 col-sm-12 col-12">
			<a href="https://gospeak.az/az/confidential" class="fr_2_1">{{ __('menu.mexfilik_siyaseti') }}</a>
			<a href="https://gospeak.az/az/rules" class="fr_2_2">{{ __('menu.istifade_qaydalari') }}</a>
			<span class="fr_2_images">
			<a href="https://instagram.com/gospeak.az" class="fr_2_3"><img src="https://www.gospeak.az/img/inst.svg" class="fr_2_3_img"></a>
			<a href="https://wa.me/994509678826" class="fr_2_4"><img src="https://www.gospeak.az/img/whatsapp.svg" class="fr_2_4_img"></a>
			<a href="https://t.me/@gospeakaz" class="fr_2_5"><img src="https://www.gospeak.az/img/telegram.svg" class="fr_2_5_img"></a>
			<a href="https://www.tiktok.com/@gospeak.az" class="fr_2_6"><img src="https://www.gospeak.az/img/tiktok.svg" class="fr_2_6_img"></a>
			</span>
		</span>
                <span class="fright_3section col-lg-4 col-md-12 col-sm-12 col-12">
			<span class="fr_3_text">{{ __('menu.en_son_xeberleri') }}</span>
			<span class="fr_3_form">
				<form id="form1">
				<input autocomplete="off" type="email" name="e-mail" value="" placeholder="{{ __('menu.sizin_e_poctunuz') }}" class="fr_3_form_input" required="">
				<button type="submit" class="fr_3_form_submit js-open-modal" data-modal="2"><img src="https://www.gospeak.az/img/Arrow-Right.svg"></button>
				</form>
			</span>
		</span>
            </div>
        </div>
    </div>
</footer>






<script type="text/javascript" defer src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type="text/javascript" defer src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script type="text/javascript" defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" defer src="{{ asset('template') }}/js/main.js"></script>
</body>
</html>
