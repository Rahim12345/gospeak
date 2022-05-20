<header id="head">
    <div class="container">
        <nav class="header_desktop">
                <span class="header_left_block">
                    <span class="logo_left">
                        <a href="/"><img src="img/logo-without text.svg" /></a>
                    </span>
                    <span class="header_left_block_links">
                        <a class="main_pg_ru navlink {{ Route::currentRouteName() == 'front.home' ? 'link_active' : '' }}" href="{{ route('front.home') }}">{{ __('menu.esas') }}</a>
                        <a class="about_course_ru navlink  {{ Route::currentRouteName() == 'front.about.cource' ? 'link_active' : '' }}" href="{{ route('front.about.cource') }}">{{ __('menu.kurs_haqqinda') }}</a>
                        <a class="about_us_ru navlink  " href="https://gospeak.az/az/about-us">{{ __('menu.bizim_haqqimizda') }}</a>
                    </span>
                </span>
            <span class="header_elips"><img src="img/green.svg" /></span>
            <span class="header_right_block">
                    <div class="dropdown header_dropdown dropdown-desktop">
                        <button class="btn dropdown-toggle header_dropdown_btn" type="button" id="dropdownMenuButton3"
                                data-bs-toggle="dropdown" aria-expanded="false">
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
                        <button class="btn dropdown-toggle header_dropdown_btn" type="button" id="dropdownMenuButton4"
                                data-bs-toggle="dropdown" aria-expanded="false">
                            AZN
                        </button>
                        <ul class="dropdown-menu" name="select_valute" id="selval"
                            aria-labelledby="dropdownMenuButton4">
                            <li><a class="dropdown-item" onClick="set_valute(`AZN`);window.location.reload();">AZN</a>
                            </li>
                            <li><a class="dropdown-item" onClick="set_valute(`USD`);window.location.reload();">USD</a>
                            </li>
                            <li><a class="dropdown-item" onClick="set_valute(`EUR`);window.location.reload();">EUR</a>
                            </li>
                            <li><a class="dropdown-item" onClick="set_valute(`RUB`);window.location.reload();">RUB</a>
                            </li>
                        </ul>
                    </div>
                    <span id="joinpc" class="join">
                        <button class="join_btn" onClick="login()">
                            <img src="img/Profile.svg" />
                            <span class="join_btn_text">Giriş</span>
                        </button>
                    </span>
                    <a class="call_num" href="tel:+994 50 967 88 26">+994 50 967 88 26</a>
                </span>
            <a class="call_num_mobile" href="tel:+994 50 967 88 26"><img src="img/phonem.svg" /></a>
            <button class="menu-open" onClick="menu_open()">
                <div id="omenu"><img src="img/menu.svg" alt="Open menu"></div>
            </button>
            <ul class="menu" id="menu">
                <li><a class="main_pg_ru" href="{{ route('front.home') }}">{{ __('menu.esas') }}</a></li>
                <li><a class="about_course_ru" href="{{ route('front.about.cource') }}">{{ __('menu.kurs_haqqinda') }}</a></li>
                <li><a class="about_us_ru" href="https://gospeak.az/az/about-us">Bizim haqqımızda</a></li>
                <li>
                        <span id="joinmob" class="join_mobile">
                            <button class="join_btn" onClick="login()">
                                <img src="img/Profile.svg" />
                                <span class="join_btn_text">Giriş</span>
                            </button>
                        </span>
                </li>
                <select class="select_lang1" name="select_lang" id="selmob" onchange="window.location.href='/langs/'+this.value">
                    @if(app()->getLocale() == 'ru')
                        <option value="ru">RU</option>
                        <option value="az">AZ</option>
                        <option value="en">EN</option>
                    @elseif(app()->getLocale() == 'az')
                        <option value="az">AZ</option>
                        <option value="ru">RU</option>
                        <option value="en">EN</option>
                    @elseif(app()->getLocale() == 'en')
                        <option value="en">EN</option>
                        <option value="az">AZ</option>
                        <option value="ru">RU</option>
                    @endif
                </select>
                <select class="select_valute1" name="select_valute" onchange="set_valute(this.value)"
                        id="selvalmob">
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
                <path
                    d="M23.954 21.03l-9.184-9.095 9.092-9.174-2.832-2.807-9.09 9.179-9.176-9.088-2.81 2.81 9.186 9.105-9.095 9.184 2.81 2.81 9.112-9.192 9.18 9.1z" />
            </svg>
            <h3 class="login_header">Giriş</h3>
            <form class="login_form" id="login_form">
                <input class="login_email" type="email" name="email" placeholder="Sizin E-mail" required>
                <input class="login_pass" type="password" name="pass" placeholder="Sizin parol" required>
                <button class="login_submit btn_yellow" type="submit" name="auth">Daxil ol</button>
            </form>
            <button class="restore_pass_btn">Parolu unutmusuz?</button>
            <p class="login_text">Şəxsi kabinetə giriş ancaq kursun tələbələri üçün mümkündür</p>
        </div>
        <div class="modal modal_restorepass" data-modal="9">
            <!--   Svg иконка для закрытия окна  -->
            <svg class="modal__cross js-modal-close" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <path
                    d="M23.954 21.03l-9.184-9.095 9.092-9.174-2.832-2.807-9.09 9.179-9.176-9.088-2.81 2.81 9.186 9.105-9.095 9.184 2.81 2.81 9.112-9.192 9.18 9.1z" />
            </svg>
            <h3 class="login_header">Parol bərpası</h3>
            <form class="login_form" id="restore_pass">
                <input class="login_email" type="email" name="email" placeholder="Ваш E-mail" required>
                <button class="login_submit btn_yellow" type="submit" name="auth">Göndər</button>
            </form>
            <button class="restore_pass_btn">Geri</button>
        </div>
        <div class="modal modal4" data-modal="4">
            <svg class="modal__cross js-modal-close" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <path
                    d="M23.954 21.03l-9.184-9.095 9.092-9.174-2.832-2.807-9.09 9.179-9.176-9.088-2.81 2.81 9.186 9.105-9.095 9.184 2.81 2.81 9.112-9.192 9.18 9.1z" />
            </svg>
            <img src="img/kurssale.svg" class="modal_img" />
            <p class="modal__title" style="color: red;">Xəta</p>
            <p class="modal_text" style="color: red;">Daxil edilmiş məlumatları yoxlayın!</p>
        </div>
        <script type="text/javascript" src="js/header1.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
                crossorigin="anonymous"></script>
    </div>
</header>
