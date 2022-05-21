@extends('front.layout.master')

@section('title') {{ __('menu.kurs_haqqinda') }} @endsection
@section('css')

@endsection

@section('content')
    <main id="about_course">
        <div class="container">
            @include('front.includes.elementary')
            <div class="block_2">
                <div class="b2_headert section_heading">{!! __('cabout.telim_necedir') !!}</div>
                <div class="b2_con col-lg-12 col-md-12 col-sm-12 col-12">
                    <span class="b2_one b2_card col-lg-6 col-md-6 col-sm-12 col-12">
                        <span class="b2_01 b2_card_h"><img src="img/01.svg" /><span class="b2_h">{!! __('cabout.video_dersler') !!}</span></span>
                        <span class="b2_01t b2_card_text">{!! __('cabout.video_dersler_desc') !!}</span>
                    </span>
                    <span class="b2_two b2_card col-lg-6 col-md-6 col-sm-12 col-12">
                        <span class="b2_02 b2_card_h"><img src="img/02.svg" /><span class="b2_h">{!! __('cabout.qeydler') !!}</span></span>
                        <span class="b2_02t b2_card_text">{!! __('cabout.qeydler_desc') !!}</span>
                    </span>
                    <span class="b2_three b2_card col-lg-6 col-md-6 col-sm-12 col-12">
                        <span class="b2_03 b2_card_h"><img src="img/03.svg" /><span class="b2_h">{!! __('cabout.ev_tapsirigi') !!}</span></span>
                        <span class="b2_03t b2_card_text">{!! __('cabout.ev_tapsirigi_desc') !!}</span>
                    </span>
                    <span class="b2_four b2_card col-lg-6 col-md-6 col-sm-12 col-12">
                        <span class="b2_04 b2_card_h"><img src="img/fo.PNG" /><span class="b2_h">{!! __('cabout.elaqe') !!}</span></span>
                        <span class="b2_04t b2_card_text">{!! __('cabout.elaqe_desc') !!}</span>
                    </span>
                    <span class="b2_five b2_card col-lg-6 col-md-6 col-sm-12 col-12">
                        <span class="b2_05 b2_card_h"><img src="img/fivee.PNG" /><span
                                class="b2_h">{!! __('cabout.speaking_club') !!}</span></span>
                        <span class="b2_05t b2_card_text">{!! __('cabout.speaking_club_desc') !!}</span>
                    </span>
                    <span class="b2_six b2_card col-lg-6 col-md-6 col-sm-12 col-12">
                        <span class="b2_06 b2_card_h"><img src="img/sixx.PNG" /><span class="b2_h">{!! __('cabout.movie_nights') !!}</span></span>
                        <span class="b2_06t b2_card_text">{!! __('cabout.movie_nights_desc') !!}</span>
                    </span>
                    <span class="b2_seven b2_card col-lg-6 col-md-6 col-sm-12 col-12">
                        <span class="b2_07 b2_card_h"><img src="img/svn.PNG" /><span
                                class="b2_h">{!! __('cabout.sertifikat') !!}</span></span>
                        <span class="b2_07t b2_card_text">{!! __('cabout.sertifikat_desc') !!}</span>
                    </span>
                    <span class="b2_eight b2_card col-lg-6 col-md-6 col-sm-12 col-12">
                        <span class="b2_08 b2_card_h"><img src="img/eit.PNG" /><span
                                class="b2_h">{!! __('cabout.interaktiv') !!}</span></span>
                        <span class="b2_08t b2_card_text">{!! __('cabout.interaktiv_desc') !!}</span>
                    </span>
                </div>
            </div>
            <img src="img/red.svg" class="b2-b3_elips" />
            <div class="block_3" id="program">
                <div class="b3_headert section_heading">{!! __('cabout.kurs_proqrami') !!}</div>
                <div class="b3_con">
                    <div class="b3_con1 b3_block" id="b3con1">
                        <div class="b3_content1_header b3_header">
                            <span class="b3_ch1_text">{!! __('cabout.giris_bloku') !!}</span><button id="plus1" class="b3_ch1_btn"
                                                                                onClick="plus1()"></button>
                        </div>
                        <ul class="b3_con1t b3_content" id="b3con1t">
                            <li><span>{!! __('cabout.tanisliq_videosu') !!}</span></li>
                            <li><span>{!! __('cabout.oyrenmeyi_oyrenmek') !!}</span></li>
                            <li><span>{!! __('cabout.dil_maneesi') !!}</span></li>
                        </ul>
                    </div>

                    <div class="b3_con2 b3_block" id="b3con2">
                        <div class="b3_content2_header b3_header">
                            <span class="b3_ch2_text">{!! __('cabout.1_ci_hefte') !!}</span><button id="plus2" class="b3_ch2_btn"
                                                                               onClick="plus2()"></button>
                        </div>
                        <ul class="b3_con2t b3_content" id="b3con2t">
                            <li><span>There is vs. there are</span></li>
                            <li><span>Etiquette basics - greetings, farewells and small talk</span></li>
                            <li><span>Articles – with countable and uncountable nouns</span></li>
                            <li><span>Personality and feelings</span></li>
                            <li><span>Countables and Uncountables: much/many</span></li>
                            <li><span>Food and drinks</span></li>
                            <li><span>Modal verbs</span></li>
                            <li><span>Making requests (e.g. at a restaurant)</span></li>
                            <li><span>Adverbs of frequency</span></li>
                            <li><span>Describing habits and daily routines</span></li>
                        </ul>
                    </div>
                    <div class="b3_con3 b3_block" id="b3con3">
                        <div class="b3_content3_header b3_header">
                            <span class="b3_ch3_text">{!! __('cabout.2_ci_hefte') !!}</span><button id="plus3" class="b3_ch3_btn"
                                                                               onClick="plus3()"></button>
                        </div>
                        <ul class="b3_con3t b3_content" id="b3con3t">
                            <li><span>Prepositions of time and place</span></li>
                            <li><span>Describing places</span></li>
                            <li><span>Conjunctions and clauses</span></li>
                            <li><span>Expressing ability and inability</span></li>
                            <li><span>Questions words</span></li>
                            <li><span>Asking for and giving directions</span></li>
                            <li><span>Used to / get used to</span></li>
                            <li><span>Daily and free-time activities</span></li>
                            <li><span>Word order in a sentence</span></li>
                            <li><span>Family and friends</span></li>
                        </ul>
                    </div>
                    <div class="b3_con4 b3_block" id="b3con4">
                        <div class="b3_content4_header b3_header">
                            <span class="b3_ch4_text">{!! __('cabout.3_ci_hefte') !!}</span><button id="plus4" class="b3_ch4_btn"
                                                                               onClick="plus4()"></button>
                        </div>
                        <ul class="b3_con4t b3_content" id="b3con4t">
                            <li><span>Comparatives and superlatives</span></li>
                            <li><span>Making comparisons</span></li>
                            <li><span>Gerund</span></li>
                            <li><span>Weather</span></li>
                            <li><span>Passive voice</span></li>
                            <li><span>Transport and travel</span></li>
                            <li><span>Irregular verbs</span></li>
                            <li><span>Describing jobs</span></li>
                            <li><span>Phrasal verbs</span></li>
                            <li><span>Body and health</span></li>
                        </ul>
                    </div>
                    <div class="b3_con5 b3_block" id="b3con5">
                        <div class="b3_content5_header b3_header">
                            <span class="b3_ch5_text">{!! __('cabout.4_ci_hefte') !!}</span><button id="plus5" class="b3_ch5_btn"
                                                                               onClick="plus5(), plus6()"></button>
                        </div>
                        <ul class="b3_con5t b3_content" id="b3con5t">
                            <li><span>Past simple</span></li>
                            <li><span>Describing past experiences</span></li>
                            <li><span>Present continuous</span></li>
                            <li><span>Education</span></li>
                            <li><span>Present perfect simple</span></li>
                            <li><span>Future simple: will</span></li>
                            <li><span>Future: going to</span></li>
                            <li><span>Expressing future plans</span></li>
                            <li><span>Past continuous</span></li>
                            <li><span>Top idioms</span></li>
                        </ul>
                    </div>
                    <button class="about_zp_btn btn_yellow" id="aboutzp" onClick="window.location.href='/purchase'">{!! __('cabout.qeydiyyatdan_kecmek') !!}</button>
                </div>
            </div>
            <img src="img/purple.svg" class="b3-b4_elips" />
            <div id="_4week" class="block_4 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="b4_con1 col-lg-6 col-md-12 col-sm-12 col-12" id="b4con1">
                    <div class="b4_content1_header">{!! __('cabout.sertifikat') !!} </div>
                    <div class="b4_con_text">{!! __('cabout.kursu_bitirdiyinizi_tesdiqleyecek') !!}</div>
                </div>
                <img class="b4_con_img col-lg-5 col-md-12 col-sm-12 col-12" src="img/ser.png" />
            </div>
            @include('front.includes.paketler')
            <div class="block_6 col-lg-12 col-md-12 col-sm-12 col-12" id="block6">
                <div class="block6_left col-lg-4 col-md-12 col-sm-12 col-12">
                    <span class="b6l_header section_heading">{!! __('cabout.tez_tez_verilen_suallar') !!}</span>
                    <img class="b6l_img" src="img/Message.svg">
                    <span class="b6l_mailtext">{{ __('cabout.her_hansi_bir') }} <a
                            href="mailto:support@gospeak.az" class="b6l_maillink"> support@gospeak.az</a></span>
                </div>
                <div class="block6_right col-lg-7 col-md-12 col-sm-12 col-12">
                    <div class="b6_con1 b6_card" id="b6con1">
                        <div class="b6_content1_header b6_header">
                            <span class="b6_ch1_text b6_question">{!! __('cabout.kurs_hansi_dil') !!}</span><button id="plus6_1" class="b6_ch1_btn" onClick="plus6_1()"></button>
                        </div>
                        <div class="b6_con1t b6_answer" id="b6con1t">{!! __('cabout.kurs_hansi_dil_desc') !!}</div>
                    </div>
                    <div class="b6_con2 b6_card" id="b6con2">
                        <div class="b6_content2_header b6_header">
                            <span class="b6_ch2_text b6_question">{!! __('cabout.dersleri_haradan_izleye') !!}</span><button id="plus6_2" class="b6_ch2_btn"
                                                                 onClick="plus6_2()"></button>
                        </div>
                        <div class="b6_con2t b6_answer" id="b6con2t">{!! __('cabout.dersleri_haradan_izleye_desc') !!}</div>
                    </div>
                    <div class="b6_con3 b6_card" id="b6con3">
                        <div class="b6_content3_header b6_header">
                            <span class="b6_ch3_text b6_question">{!! __('cabout.ev_tapsirigi') !!}</span><button
                                id="plus6_3" class="b6_ch3_btn" onClick="plus6_3()"></button>
                        </div>
                        <div class="b6_con3t b6_answer" id="b6con3t">{!! __('cabout.ev_tapsirigi_desc') !!}</div>
                    </div>
                    <div class="b6_con4 b6_card" id="b6con4">
                        <div class="b6_content4_header b6_header">
                            <span class="b6_ch4_text b6_question">{!! __('cabout.odenisin_ugurlu_olmasi') !!}</span><button id="plus6_4" class="b6_ch4_btn" onClick="plus6_4()"></button>
                        </div>
                        <div class="b6_con4t b6_answer" id="b6con4t">{!! __('cabout.odenisin_ugurlu_olmasi_desc') !!}</div>
                    </div>
                    <div class="b6_con5 b6_card" id="b6con5">
                        <div class="b6_content5_header b6_header">
                            <span class="b6_ch5_text b6_question">{!! __('cabout.tesdiq_e_poctu') !!}</span><button
                                id="plus6_5" class="b6_ch5_btn" onClick="plus6_5()"></button>
                        </div>
                        <div class="b6_con5t b6_answer" id="b6con5t">{!! __('cabout.tesdiq_e_poctu_desc') !!}</div>
                    </div>
                    <div class="b6_con6 b6_card" id="b6con6">
                        <div class="b6_content6_header b6_header">
                            <span class="b6_ch6_text b6_question">{!! __('cabout.derslerim_ne_vaxt') !!}</span><button id="plus6_6" class="b6_ch6_btn" onClick="plus6_6()"></button>
                        </div>
                        <div class="b6_con6t b6_answer" id="b6con6t">{!! __('cabout.derslerim_ne_vaxt_desc') !!}</div>
                    </div>
                </div>
            </div>
            @include('front.includes.reviews')
            <button class="about_zp_btn2 btn_yellow" id="aboutzp2" onClick="window.location.href='/purchase'">{!! __('cabout.qeydiyyatdan_kecmek') !!}</button>
        </div>
        </div>
    </main>
@endsection

@section('js')
    <script type="text/javascript" src="{{ asset('js/about_course.js') }}"></script>
@endsection
