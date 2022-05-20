
function writeCookie(name, val, expires) {
  var date = new Date;
  date.setDate(date.getDate() + expires);
  document.cookie = name + "=" + val + "; path=/; expires=" + date.toUTCString();
};
function readCookie(name) {
  var matches = document.cookie.match(new RegExp(
    "(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"
  ));
  return matches ? decodeURIComponent(matches[1]) : undefined;
};
lang = readCookie('lang');
if (lang == undefined) {
  writeCookie('lang', 'ru', 30);
  lang = readCookie('lang');
};

valute = readCookie('valute');
if (valute == undefined) {
  writeCookie('valute', 'AZN', 30);
  valute = readCookie('valute');
};
async function l_form(e) {

  e.preventDefault();

  let response = await fetch('?mode=auth&auth=check', {
    method: 'POST',
    body: new FormData(login_form),
    mode: "no-cors",

  });


  if (response.ok) {
    authurl = response.headers.get("authurl");
    setTimeout(function () {
      location = authurl;
    }, 500);
    // получаем тело ответа (см. про этот метод ниже) 
    let json = await response.json();
  }
  else {
    alert("error");
  }
};
login_form.onsubmit = l_form;
function menu_open() {
  document.getElementById("menu").classList.toggle("menu-opened");
  document.getElementById("head").classList.toggle("header_mod");
  if (document.getElementById("menu").classList.contains('menu-opened')) {
    document.getElementById("omenu").innerHTML = '<img id="close-menu" src="img/cls.svg" alt="Close menu">';
  }
  else if (true) {
    document.getElementById("omenu").innerHTML = '<img src="img/menu.svg" alt="Open menu">';
  }
}
function about_coure() {
  window.location.href = '/about-course';
};

function login() {
  document.querySelector('.modal_auth').classList.add('active');
  document.querySelector('.js-overlay-modal').classList.add('active');
};
function set_lang(lang) {
  if (lang === 'ru') {
    writeCookie('lang', '' + lang + '', 30);
    //document.cookie = "language="+lang+";";
    window.location.href = '/';
    document.getElementById('sel').value = lang;
    document.getElementById('selmob').value = lang;
  }
  else {
    writeCookie('lang', '' + lang + '', 30);
    window.location.href = '/' + lang;
    document.getElementById('sel').value = lang;
    document.getElementById('selmob').value = lang;
  }
}
function set_valute(valute) {
  if (valute === 'AZN') {
    writeCookie('valute', '' + valute + '', 30);
    document.getElementById('selval').value = valute;
    document.getElementById('selvalmob').value = valute;
  }
  else {
    writeCookie('valute', '' + valute + '', 30);
    document.getElementById('selval').value = valute;
    document.getElementById('selvalmob').value = valute;

    if (window.locatin.href == 'https://www.gospeak.az/about-course') {
      if (valute === "AZN") {
        document.getElementById("cena_basic").innerHTML = '<span class="b5_15 b5_0 b01" style="width: auto;">59 AZN <span class="b5_16">  49 AZN</span></span>';
        document.getElementById("cena_standart").innerHTML = '<span class="b5_15 b5_0 b01" style="width: auto;">79 AZN <span class="b5_16">  69 AZN</span></span>';
        document.getElementById("cena_pro").innerHTML = '<span class="b5_15 b5_0 b01" style="width: auto;">119 AZN <span class="b5_16">  99 AZN</span></span>';
        document.getElementById("cena_basic_mobile").innerHTML = '<span class="b5_15 b5_0 b01" style="width: auto;">59 AZN <span class="b5_16">  49 AZN</span></span>';
        document.getElementById("cena_standart_mobile").innerHTML = '<span class="b5_15 b5_0 b01" style="width: auto;">79 AZN <span class="b5_16">  69 AZN</span></span>';
        document.getElementById("cena_pro_mobile").innerHTML = '<span class="b5_15 b5_0 b01" style="width: auto;">119 AZN <span class="b5_16">  99 AZN</span></span>';
      }
      if (valute == 'USD') {
        document.getElementById("cena_basic").innerHTML = '<span class="b5_15 b5_0 b01" style="width: auto;">35 USD <span class="b5_16">  30 USD</span></span>';
        document.getElementById("cena_standart").innerHTML = '<span class="b5_15 b5_0 b01" style="width: auto;">47 USD <span class="b5_16">  40 USD</span></span>';
        document.getElementById("cena_pro").innerHTML = '<span class="b5_15 b5_0 b01" style="width: auto;">70 USD <span class="b5_16">  60 USD</span></span>';
        document.getElementById("cena_basic_mobile").innerHTML = '<span class="b5_15 b5_0 b01" style="width: auto;">35 USD <span class="b5_16">  30 USD</span></span>';
        document.getElementById("cena_standart_mobile").innerHTML = '<span class="b5_15 b5_0 b01" style="width: auto;">47 USD <span class="b5_16">  40 USD</span></span>';
        document.getElementById("cena_pro_mobile").innerHTML = '<span class="b5_15 b5_0 b01" style="width: auto;">70 USD <span class="b5_16">  60 USD</span></span>';

      }
      if (valute == 'EUR') {
        document.getElementById("cena_basic").innerHTML = '<span class="b5_15 b5_0 b01" style="width: auto;">32 EUR <span class="b5_16">  26 EUR</span></span>';
        document.getElementById("cena_standart").innerHTML = '<span class="b5_15 b5_0 b01" style="width: auto;">42 EUR <span class="b5_16">  37 EUR</span></span>';
        document.getElementById("cena_pro").innerHTML = '<span class="b5_15 b5_0 b01" style="width: auto;">63 EUR <span class="b5_16">  53 EUR</span></span>';
        document.getElementById("cena_basic_mobile").innerHTML = '<span class="b5_15 b5_0 b01" style="width: auto;">32 EUR <span class="b5_16">  26 EUR</span></span>';
        document.getElementById("cena_standart_mobile").innerHTML = '<span class="b5_15 b5_0 b01" style="width: auto;">42 EUR <span class="b5_16">  37 EUR</span></span>';
        document.getElementById("cena_pro_mobile").innerHTML = '<span class="b5_15 b5_0 b01" style="width: auto;">63 EUR <span class="b5_16">  53 EUR</span></span>';
      }
      if (valute == 'RUB') {
        document.getElementById("cena_basic").innerHTML = '<span class="b5_15 b5_0 b01" style="width: auto;">3700 RUB <span class="b5_16">  3000 RUB</span></span>';
        document.getElementById("cena_standart").innerHTML = '<span class="b5_15 b5_0 b01" style="width: auto;">5000 RUB <span class="b5_16">  4300 RUB</span></span>';
        document.getElementById("cena_pro").innerHTML = '<span class="b5_15 b5_0 b01" style="width: auto;">7500 RUB <span class="b5_16">  6200 RUB</span></span>';
        document.getElementById("cena_basic_mobile").innerHTML = '<span class="b5_15 b5_0 b01" style="width: auto;">3700 RUB <span class="b5_16">  3000 RUB</span></span>';
        document.getElementById("cena_standart_mobile").innerHTML = '<span class="b5_15 b5_0 b01" style="width: auto;">5000 RUB <span class="b5_16">  4300 RUB</span></span>';
        document.getElementById("cena_pro_mobile").innerHTML = '<span class="b5_15 b5_0 b01" style="width: auto;">7500 RUB <span class="b5_16">  6200 RUB</span></span>';
      }
    }
    window.location.reload();
  }
  window.location.reload();
}
if (lang != 'ru' && window.location.href == 'https://www.gospeak.az/') {
  window.location.href = '/' + lang;
}
window.onload = function () {
  if (lang != 'ru') {
    document.getElementById('sel').value = lang;
    document.getElementById('selmob').value = lang;

  }
  else {

    document.getElementById('sel').value = lang;
    document.getElementById('selmob').value = lang;
  };
  if (valute != 'AZN') {
    document.getElementById('selval').value = valute;
    document.getElementById('selvalmob').value = valute;
  }
  else {
    document.getElementById('selval').value = valute;
    document.getElementById('selvalmob').value = valute;
  }

};
!function (e) { "function" != typeof e.matches && (e.matches = e.msMatchesSelector || e.mozMatchesSelector || e.webkitMatchesSelector || function (e) { for (var t = this, o = (t.document || t.ownerDocument).querySelectorAll(e), n = 0; o[n] && o[n] !== t;)++n; return Boolean(o[n]) }), "function" != typeof e.closest && (e.closest = function (e) { for (var t = this; t && 1 === t.nodeType;) { if (t.matches(e)) return t; t = t.parentNode } return null }) }(window.Element.prototype);



document.addEventListener('DOMContentLoaded', function () {




  closeButtons = document.querySelectorAll('.js-modal-close');

  closeButtons.forEach(function (item) {

    item.addEventListener('click', function (e) {
      var parentModal = this.closest('.modal');

      parentModal.classList.remove('active');
      document.querySelector('.js-overlay-modal').classList.remove('active');
    });

  });


  document.body.addEventListener('keyup', function (e) {
    var key = e.keyCode;

    if (key == 27) {

      document.querySelector('.modal.active').classList.remove('active');
      document.querySelector('.overlay').classList.remove('active');

    };
  }, false);


  document.querySelector('.overlay').addEventListener('click', function () {
    document.querySelector('.modal.active').classList.remove('active');
    this.classList.remove('active');
  });




});

