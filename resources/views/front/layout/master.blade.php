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
                    <a href="/"><img src="https://www.gospeak.az/img/logo-without%20text.svg"></a>
                </span>
                <span class="header_left_block_links">
                    <a class="main_pg_ru navlink  link_active" href="index.html">Əsas</a>
                    <a class="about_course_ru navlink  " href="aboutUs.html">Kurs haqqında</a>
                    <a class="about_us_ru navlink  " href="about_courses.html">Bizim haqqımızda</a>
                </span>
            </span>
            <span class="header_elips"><img src="https://www.gospeak.az/img/green.svg"></span>
            <span class="header_right_block">
                <div class="dropdown header_dropdown dropdown-desktop">
                    <button class="btn dropdown-toggle header_dropdown_btn" type="button" id="dropdownMenuButton3" data-bs-toggle="dropdown" aria-expanded="false">
                    az
                    </button>
                    <ul class="dropdown-menu" name="select_lang" id="sel" aria-labelledby="dropdownMenuButton3">
                        <li><a class="dropdown-item" >RU</a></li>
                        <li><a class="dropdown-item" >AZ</a></li>
                        <li><a class="dropdown-item" >EN</a></li>
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
                <span class="b1_headert">İngilis dilinizi təkmilləşdirəcəyik</span>
                <span class="b1_text">Əgər ingilis dilində səlis danışmaq istəyirsinizsə, lakin səviyyəniz “my name is” - dirsə, bizim kurs sizin üçündür :)</span>
                <span class="b1_button"><button class="main_zapisatsa btn_yellow" onclick="zapisatsa1()">Qeydiyyatdan keçmək</button></span>
            </span>
            <span class="b1_girl col-md-6 col-sm-12 col-12"><img src="https://www.gospeak.az/img/girl.png"></span>
            <span class="b1_yleft"><img src="https://www.gospeak.az/img/yellow.svg"></span>
        </section>
        <section class="advantages">
            <div class="b2_headert section_heading">Üstünlüklər</div>
            <div class="b2_cards ">
                <span class="b2_card ">
                    <div class="b2_img"><img src="{{ asset('template') }}/img/01.svg"></div>
                    <div class="b2_text_up">
                        <span class="b2_text">Müəllif hüququ materialları</span>
                    </div>
                </span>
                <span class="b2_card ">
                    <div class="b2_img"><img src="{{ asset('template') }}/img/02.svg"></div>
                    <div class="b2_text_up">
                        <span class="b2_text">Sərfəli qiymət</span>
                    </div>
                </span>
                <span class="b2_card ">
                    <div class="b2_img"><img src="{{ asset('template') }}/img/03.svg"></div>
                    <div class="b2_text_up">
                        <span class="b2_text">İstənilən yerdə və istənilən vaxt təhsil almaq imkanı</span>
                    </div>
                </span>
                <span class="b2_card ">
                    <div class="b2_img"><img src="{{ asset('template') }}/img/04.svg"></div>
                    <div class="b2_text_up">
                        <span class="b2_text">Bütün bacarıqların intensiv şəkildə pompalanması </span>
                    </div>
                </span>
            </div>
        </section>
        <section class="about_courses">
            <div class="b2_headert section_heading">
                Kurs haqqında
            </div>
            <div class="about_items col-md-12 col-sm-12 col-12">
                <div class="about_content col-lg-7 col-md-12 col-sm-12 col-12">
                    <span class="about_header">
                        <h2>"Elementary"-dən "Intermediate"-a qədər</h2>
                    </span>
                    <span class="about_text">Hər bir tələbənin arzusu: hazır qeydlər, ixtisaslı mentorlar və digər bonuslardan ibarət kurs. Proqram bütün bacarıqları artırmaq üçün nəzərdə tutulmuşdur. Cəmi 30 gün ərzində dil maneəsi üzərində tam qələbə. </span>
                    <div class="about_features">
                        <span class="ab_feature"><img src="{{ asset('template') }}/img/time.svg"> 1 ay</span>
                        <span class="ab_feature"><img src="{{ asset('template') }}/img/doc.svg"> 3 paket</span>
                        <span class="ab_feature"><img src="{{ asset('template') }}/img/star.svg"> Fərdi yanaşma</span>
                    </div>
                    <span class="about_btns">
                        <button class="b3_zp about_signup btn_yellow" onclick="zapisatsa()">Qeydiyyatdan keçmək</button>
                        <button class="b3_about about_info btn_white" onclick="about_course()">Ətraflı</button>
                    </span>
                </div>
                <img class="about_img col-lg-5 col-md-12 col-sm-12 col-12" src="{{ asset('template') }}/img/b3_img.png">
            </div>
        </section>
        <section id="tariffs" class="tariffs">
            <div class="b2_headert section_heading">Paketlər və qiymətlər</div>
            <div class="tariff_items col-md-12 col-sm-12 col-12">
                <div class="b5_con1 tariff_card col-md-12 col-sm-12 col-12" id="b5con1">
                    <div class="b5_con1t b5_content tariff_content" id="b5con1t">
                        <div class="b5_content1_header tariff_header">BASIC</div>
                        <span class="b5_1 b5_0 ">1 ay tədris</span>
                        <span class="b5_2 b5_0">45+ video dərs</span>
                        <span class="b5_3 b5_0">70+ materiallar</span>
                        <span class="b5_4 b5_0">Ev tapşırığı <span class="red_highlight"> yoxlanışsız</span></span>
                        <span class="b5_5 b5_0">Platformamızda şəxsi kabinet</span>
                        <span class="b5_6 b5_0">Ümumi chat</span>
                        <span class="b5_7 b5_0">Kursun gedişatını izləmək üçün iş dəftəri</span>
                        <span class="b5_8 b5_0">MovieNights</span>
                        <span class="b5_8 b5_0">Kursu bitirmə haqqında elektron sertifikat</span>
                        <span class="b5_9 b5_0 b01">İnteraktivlərdə iştirak etmək imkanı</span>
                        <span class="b5_10 b5_0 b01">Mentor dəstəyi</span>
                        <span class="b5_11 b5_0 b01">SpeakingClub danışıq dərsləri</span>
                        <span class="b5_12 b5_0 b01">Kursda olmayan mövzular üzrə 5 əlavə material</span>
                        <span class="b5_13 b5_0 b01">Mentorla VIP söhbət</span>
                        <span class="b5_14 b5_0 b01">Müəllimlə fərdi dərs</span>
                        <span id="cena_basic" class="b5_15 b5_0"><span class="b5_15 b5_0"><span class="b5_16">59 AZN</span></span></span>
                        <button class="b5_basic_btn btn_yellow tariff_btn" onclick="zapisatsa()">Almaq</button>
                    </div>
                </div>
                <div class="b5_con2 tariff_card col-md-12 col-sm-12 col-12 py-5" id="b5con2">
                    <div class="b5_con2t b5_content tariff_content" id="b5con2t">
                        <div class="b5_content2_header tariff_header">STANDART<span class="tariff_mark"> Tövsiyə olunan paket</span></div>
                        <span class="b5_1 b5_0 ">1 ay tədris</span>
                        <span class="b5_2 b5_0">45+ video dərs</span>
                        <span class="b5_3 b5_0"><span class="green_highlight">80+ </span>materiallar</span>
                        <span class="b5_4 b5_0">Ev tapşırığı <span class="green_highlight"> yoxlanışla</span></span>
                        <span class="b5_5 b5_0">Platformamızda şəxsi kabinet</span>
                        <span class="b5_6 b5_0">Ümumi chat</span>
                        <span class="b5_7 b5_0">Kursun gedişatını izləmək üçün iş dəftəri</span>
                        <span class="b5_8 b5_0">MovieNights</span>
                        <span class="b5_8 b5_0">Kursu bitirmə haqqında elektron sertifikat</span>
                        <span class="b5_9 b5_0">İnteraktivlərdə iştirak etmək imkanı</span>
                        <span class="b5_10 b5_0">Mentor dəstəyi</span>
                        <span class="b5_11 b5_0">SpeakingClub danışıq dərsləri</span>
                        <span class="b5_12 b5_0 b01">Kursda olmayan mövzular üzrə 5 əlavə material</span>
                        <span class="b5_13 b5_0 b01">Mentorla VIP söhbət</span>
                        <span class="b5_14 b5_0 b01">Müəllimlə fərdi dərs</span>
                        <span id="cena_standart" class="b5_15 b5_0"><span class="b5_15 b5_0"><span class="b5_16">79 AZN</span></span></span>
                        <button class="b5_standart_btn btn_yellow tariff_btn" onclick="zapisatsa()">Almaq</button>
                    </div>
                </div>
                <div class="b5_con3 tariff_card col-md-12 col-sm-12 col-12" id="b5con3">
                    <div class="b5_con3t b5_content tariff_content" id="b5con3t">
                        <div class="b5_content3_header tariff_header">PRO<span class="tariff_mark"> только 10 человек</span></div>
                        <span class="b5_1 b5_0 ">1 ay tədris</span>
                        <span class="b5_2 b5_0">45+ video dərs</span>
                        <span class="b5_3 b5_0"><span class="green_highlight">90+ </span>materiallar</span>
                        <span class="b5_4 b5_0">Ev tapşırığı <span class="green_highlight"> yoxlanışla</span></span>
                        <span class="b5_5 b5_0">Platformamızda şəxsi kabinet</span>
                        <span class="b5_6 b5_0">Ümumi chat</span>
                        <span class="b5_7 b5_0">Kursun gedişatını izləmək üçün iş dəftəri</span>
                        <span class="b5_8 b5_0">MovieNights</span>
                        <span class="b5_8 b5_0">Kursu bitirmə haqqında elektron sertifikat</span>
                        <span class="b5_9 b5_0">İnteraktivlərdə iştirak etmək imkanı</span>
                        <span class="b5_10 b5_0">Mentor dəstəyi</span>
                        <span class="b5_11 b5_0">SpeakingClub danışıq dərsləri<span class="green_highlight green_highlight"> ətraflı individual feedback ilə</span></span>
                        <span class="b5_12 b5_0">Kursda olmayan mövzular üzrə 5 əlavə material</span>
                        <span class="b5_13 b5_0">Mentorla VIP söhbət</span>
                        <span class="b5_14 b5_0">Müəllimlə fərdi dərs</span>
                        <span id="cena_pro" class="b5_15 b5_0"><span class="b5_15 b5_0"><span class="b5_16">119 AZN</span></span></span>
                        <button class="b5_pro_btn btn_yellow tariff_btn" onclick="zapisatsa()">Almaq</button>
                    </div>
                </div>
            </div>
            <div class="t_head">
                <h3 class="tariff_text red_highlight">Hələ də şübhələnirsiniz?</h3>
                <h5 class="tariff_text">Sinaq paketi yoxlayin!</h5>
            </div>
            <div class="b5_con4 tariff_card col-md-12 col-sm-12 col-12 mx-auto" id="b5con4">
                <div class="b5_con3t b5_content tariff_content" id="b5con3t">
                    <div class="b5_content3_header tariff_header"><span class="b5_content3_header1"> TRIAL</span></div>
                    <span class="b5_1 b5_0 ">Şəxsi kabinetə 3 günlük giriş</span>
                    <span class="b5_2 b5_0"><span class="green_highlight">3 </span> video dərs</span>
                    <span class="b5_3 b5_0"><span class="green_highlight">3 </span>material</span>
                    <span class="b5_4 b5_0"><span class="green_highlight"> 1 </span> ev tapşırığın yoxlanışı </span>
                    <span class="b5_6 b5_0">Ümumi chat</span>
                    <span id="cena_trial" class="b5_15 b5_0"><span class="b5_15 b5_0"><span class="b5_16">9 AZN</span></span></span>
                    <button class="b5_trial_btn btn_yellow tariff_btn" onclick="zapisatsa()">Almaq</button>
                </div>
            </div>
        </section>
        <section class="about_us">
            <div class="b4_headert section_heading">Bizim haqqımızda</div>
            <div class="b4_content">
                <p class="b4c_headert">Missiyamız insanlara ingilis dilini<span class="b4c_headert_green green_highlight">əyləncəli, asan və əlçatan</span> şəkildə öyrənməyə kömək etməkdir.
                </p>
                <p class="b4c_text">Layihə üçün prioritet materialların keyfiyyəti və interaktiv tədris metodudur.<br><br>
                    Biz tələbələrə Present Perfect Tense ilə bağlı fobiyalarını aradan qaldırmağa və Prepositions ilə qarışıqlıq gördükdə təslim olmamağa kömək edirik. <br><br>
                    Daima tələbələrlə ünsiyyətdə olub, motivasiya etməyə çalışırıq. Gündəlik praktika proqramlarımızın ayrılmaz hissəsidir. Məhz onun sayəsində bütün tələbələrimiz kursun sonunda böyük irəliləyiş görürlər.</p>
            </div>
        </section>
        <section class="our_properties">
            <div class="b5_headert section_heading">Bizimlə:</div>
            <div class="b5_content col-12">
                <span class="b5_con1 b5_card col-12">
                    <img src="{{ asset('template') }}/img/comment.svg">
                    <span class="b5_con1_text">Fikirlərinizi ingilis dilində ifadə edin</span>
                </span>
                <span class="b5_con2 b5_card col-12">
                    <img src="{{ asset('template') }}/img/person.svg">
                    <span class="b5_con2_text">Qrammatikadaki boşluqlar üzərində işləyin</span>
                </span>
                <span class="b5_con3 b5_card col-12">
                    <img src="{{ asset('template') }}/img/books.svg">
                    <span class="b5_con3_text">Söz ehtiyatınızı genişləndirin</span>
                </span>
                <span class="b5_con4 b5_card col-12">
                    <img src="{{ asset('template') }}/img/speak.svg">
                    <span class="b5_con4_text">Aksentdən qurtul və səlis danış</span>
                </span>
            </div>
            <button class="b5_about_btn btn_white" onclick="about_course()">Ətraflı</button>
        </section>
        <section id="counters" class="counters">
            <span class="b6_content col-md-12 col-sm-12 col-12">
                <span class="b6_con1 b6_card col-md-4 col-sm-12 col-12">
                    <span class="b6_h1"><span id="counter1">450</span>+</span>Tamamlanmış dərs
                </span>
                <span class="b6_con2 b6_card col-md-4 col-sm-12 col-12">
                    <span class="b6_h2"><span id="counter2">500</span>+</span>Paylama materialı
                </span>
                <span class="b6_con3 b6_card col-md-4 col-sm-12 col-12">
                    <span class="b6_h3"><span id="counter3">150</span>+</span>Tələbə
                </span>
            </span>
            <img src="{{ asset('template') }}/img/purple.svg">
        </section>
        <section class="question col-md-12 col-sm-12 col-12">
            <div class="col-md-6 col-sm-12 col-12">
                <span class="b7_headert">Bizə suallarınız var? <br>Müraciətinizi göndərin və biz sizinlə əlaqə saxlayacayıq!</span>
                <span class="b7_text">Əlaqə telefon nömrənizi daxil edin və iş günü ərzində sizinlə əlaqə saxlayacayıq</span>
            </div>
            <span class="b7_form col-md-5 col-sm-12 col-12">
                <form id="form col-md-12 col-sm-12 col-12">
                    <div class="form_row col-md-12 col-sm-12 col-12">
                        <input class="col-sm-12 col-12" type="text" name="aname" value="" placeholder="Adınız" autocomplete="off">
                        <input class="col-sm-12 col-12" type="text" name="anumber" value="" placeholder="Mobil nömrəniz" autocomplete="off">
                    </div>
                    <div class="checkbox_container my-2">
                        <input type="checkbox" name="acheckbox" class="b7_fcheckbox" id="checkbox1" required=""> <label for="checkbox1" class="b7_flabel ">Mən şəxsi məlumatların emalı ilə razıyam</label>
                    </div>
                    <input id="submitf1" type="submit" name="asubmit" value="Göndər" class="b7_fsubmit btn_green">
                </form>
            </span>
        </section>
        <section class="comments">
            <div class="b8_headert section_heading">Tələbələrin rəyləri</div>
            <div class="comment col-md-12 col-sm-12 col-12">
                <span class="b8_con1 review_card col-lg-4 col-md-10 col-sm-12 col-12 d-flex justify-content-end">
                    <div class="review_text_holder">
                        <span class="review_name1 review_pname">Leyla Bünyadzadə</span>
                        <span class="b8c_text1 review_text">
                            "Çox maraqlı və faydalı oldu! Bu marafon sayəsində mən kiçik bir məqsədimə nail oldum: Yeni il qabağı ingilis dilimi təkmilləşdirmək. Məsuliyyəti hiss etmək və motivasiya çox gözəl idi. Mən də gözəl iştirakçılar və mentorlarla görüşməyimə şad oldum!"
                        </span>
                    </div>
                    <span class="b8c_img1 review_img_items">
                        <img src="{{ asset('template') }}/img/redbg.svg" class="b8c_bg1 review_bg">
                        <img src="{{ asset('template') }}/img/revavatar1.png" class="review_avatar1">
                    </span>
                </span>
                <span class="b8_con2 review_card col-lg-4 col-md-10 col-sm-12 col-12">
                    <div class="review_text_holder">
                        <span class="review_name2 review_pname">Tatyana Atkova</span>
                        <span class="b8c_text2 review_text">
                            "Marafonu çox bəyəndim! Zaman çox tez və inanılmaz dərəcədə maraqlı keçdi! Təşkilatçıların daimi dəstəyinə və bütün suallara cavab verməyə hazır olduqlarına görə minnətdaram. Hər gün tapşırıqlar qeyri-adi və maraqlı idi".
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
                        <span class="review_name3 review_pname">Fatimə Mirbilalova</span>
                        <span class="b8c_text3 review_text">
                            "Rahat dərs cədvəli, sürətli Quiz tapşırıqları, interaktivlər, memlar, maraqlı ünsiyyət və şübhəsiz ki, danışıq, dinləmə və yazma kimi bacarıqların və dil səviyyəsininin yüksəlməsi. Görülən keyfiyyətli iş və maraqlı təcrübə üçün təşəkkür edirəm".
                        </span>
                    </div>
                    <span class="b8c_img3 review_img_items">
                        <img src="{{ asset('template') }}/img/purplebg.svg" class="b8c_bg3 review_bg">
                        <img src="{{ asset('template') }}/img/revavatar3.png" class="review_avatar3">
                    </span>
                </span>
                <span class="b8_con4 review_card col-lg-4 col-md-10 col-sm-12 col-12">
                    <div class="review_text_holder">
                        <span class="review_name4 review_pname">Leyla Mustafayevа</span>
                        <span class="b8c_text4 review_text">
                            "Möhtəşəmdir ki, hər gün praktiki olaraq təkrar olunmayan yeni növ tapşırıqlar olur. İnteraktivləri də qeyd etmək istərdim. Marafonu daha da maraqlı edən və eyni zamanda sizdə növbəti birinə qoşulmaq istəyi yaradan gözəl ideya. Bu mənim planlarımda deyildi, amma mən artıq gözləyə bilmirəm."
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
			<span>GoSpeak Copyright 2022.</span>
			<span>All Rights Reserved GoSpeak</span>
			<span>VÖEN 2001690142</span>
		</span>
            </div>
            <div class="footer_right col-lg-9 col-md-12 col-sm-12 col-12">
		<span class="fright_1section col-md-3 col-sm-12 col-12">
			<a href="https://gospeak.az/az/index" class="fr_1_1">Əsas</a>
			<a href="https://gospeak.az/az/about-course" class="fr_1_2">Kurs haqqında</a>
			<a href="https://gospeak.az/az/about-us" class="fr_1_3">Bizim haqqımızda</a>
			<a href="https://gospeak.az/az/profile" class="fr_1_4">Şəxsi kabinet</a>
		</span>
                <span class="fright_2section col-lg-4 col-md-12 col-sm-12 col-12">
			<a href="https://gospeak.az/az/confidential" class="fr_2_1">Məxfilik siyasəti</a>
			<a href="https://gospeak.az/az/rules" class="fr_2_2">İstifadə qaydaları</a>
			<span class="fr_2_images">
			<a href="https://instagram.com/gospeak.az" class="fr_2_3"><img src="https://www.gospeak.az/img/inst.svg" class="fr_2_3_img"></a>
			<a href="https://wa.me/994509678826" class="fr_2_4"><img src="https://www.gospeak.az/img/whatsapp.svg" class="fr_2_4_img"></a>
			<a href="https://t.me/@gospeakaz" class="fr_2_5"><img src="https://www.gospeak.az/img/telegram.svg" class="fr_2_5_img"></a>
			<a href="https://www.tiktok.com/@gospeak.az" class="fr_2_6"><img src="https://www.gospeak.az/img/tiktok.svg" class="fr_2_6_img"></a>
			</span>
		</span>
                <span class="fright_3section col-lg-4 col-md-12 col-sm-12 col-12">
			<span class="fr_3_text">Ən son xəbərləri qaçırmamaq üçün abunə olun!</span>
			<span class="fr_3_form">
				<form id="form1">
				<input autocomplete="off" type="email" name="e-mail" value="" placeholder="Sizin E-poçtunuz" class="fr_3_form_input" required="">
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
