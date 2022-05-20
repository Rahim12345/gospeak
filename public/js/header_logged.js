
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
};
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
  }
};

if (lang != 'ru') {
  document.getElementById('sel').value = lang;
  document.getElementById('selmob').value = lang;
}
else {
  document.getElementById('sel').value = lang;
  // document.getElementById('selmob').value = lang;
};
if (valute != 'AZN') {
  document.getElementById('selval').value = valute;
  document.getElementById('selvalmob').value = valute;
}
else {
  document.getElementById('selval').value = valute;
  // document.getElementById('selvalmob').value = valute;
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

  var dropdown1 = document.getElementById('dropdown1');
  var menu1 = document.getElementById('menu1');

  dropdown1.addEventListener('click', function () {
    menu1.classList.toggle('show');
  })
});



