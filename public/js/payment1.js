                                    function setprice(){
                                        var tar = document.getElementById('tarif').value;
                                        if (tar === "1") {
                                                if (valute == 'AZN') {
                                                    document.getElementById("cena_").innerHTML = '<span class="b5_15 b5_0 b01" style="width: auto;">59 AZN <span class="b5_16">  47 AZN</span></span>';
                                                }
                                                else if (valute == 'USD') {
                                                    document.getElementById("cena_").innerHTML = '<span class="b5_15 b5_0 b01" style="width: auto;">35 USD <span class="b5_16">  28 USD</span></span>';
                                                }
                                                else if (valute == 'EUR') {
                                                    document.getElementById("cena_").innerHTML = '<span class="b5_15 b5_0 b01" style="width: auto;">32 EUR <span class="b5_16">  26 EUR</span></span>';
                                                }
                                                else if (valute == 'RUB') {
                                                    document.getElementById("cena_").innerHTML = '<span class="b5_15 b5_0 b01" style="width: auto; font-size: 14px;">2500 RUB <span class="b5_16">  2000 RUB</span></span>';
                                                }
                                                f3_1.style.display = "flex";
                                                f3.style.display = "none";
                                            }
                                            else if (tar === "2") {
                                                if (valute == 'AZN') {
                                                    document.getElementById("cena_").innerHTML = '<span class="b5_15 b5_0 b01" style="width: auto;">79 AZN <span class="b5_16">  63 AZN</span></span>';
                                                }
                                                else if (valute == 'USD') {
                                                    document.getElementById("cena_").innerHTML = '<span class="b5_15 b5_0 b01" style="width: auto;">47 USD <span class="b5_16">  37 USD</span></span>';
                                                }
                                                else if (valute == 'EUR') {
                                                    document.getElementById("cena_").innerHTML = '<span class="b5_15 b5_0 b01" style="width: auto;">42 EUR <span class="b5_16">  35 EUR</span></span>';
                                                }
                                                else if (valute == 'RUB') {
                                                    document.getElementById("cena_").innerHTML = '<span class="b5_15 b5_0 b01" style="width: auto; font-size: 14px;">3400 RUB <span class="b5_16">  2700 RUB</span></span>';
                                                }
                                                f3_1.style.display = "flex";
                                                f3.style.display = "none";
                                            }
                                            else if (tar === "5") {

                                                if (valute == 'AZN') {
                                                    document.getElementById("cena_").innerHTML = '<span class="b5_16  " style="width: auto;">9 AZN</span>';
                                                }
                                                else if (valute == 'USD') {
                                                    document.getElementById("cena_").innerHTML = '<span class="b5_16  " style="width: auto;">8 USD</span>';
                                                }
                                                else if (valute == 'EUR') {
                                                    document.getElementById("cena_").innerHTML = '<span class="b5_16  " style="width: auto;">7.80 EUR</span>';
                                                }
                                                else if (valute == 'RUB') {
                                                    document.getElementById("cena_").innerHTML = '<span class="b5_16  " style="width: auto; font-size: 14px;">565 RUB</span>';
                                                }
                                                f3_1.style.display = "flex";
                                                f3.style.display = "none";

                                            }
                                            else if (tar === "3") {

                                                if (valute == 'AZN') {
                                                    document.getElementById("cena_").innerHTML = '<span class="b5_15 b5_0 b01" style="width: auto;">119 AZN <span class="b5_16">  95 AZN</span></span>';
                                                }
                                                else if (valute == 'USD') {
                                                    document.getElementById("cena_").innerHTML = '<span class="b5_15 b5_0 b01" style="width: auto;">70 USD <span class="b5_16">  56 USD</span></span>';
                                                }
                                                else if (valute == 'EUR') {
                                                    document.getElementById("cena_").innerHTML = '<span class="b5_15 b5_0 b01" style="width: auto;">63 EUR <span class="b5_16">  53 EUR</span></span>';
                                                }
                                                else if (valute == 'RUB') {
                                                    document.getElementById("cena_").innerHTML = '<span class="b5_15 b5_0 b01" style="width: auto; font-size: 14px;">5100 RUB <span class="b5_16">  4100 RUB</span></span>';
                                                }
                                                f3_1.style.display = "flex";
                                                f3.style.display = "none";
                                            }
                                            else if (tar === "-1") {

                                                f3_1.style.display = "none";
                                                f3.style.display = "flex";
                                                document.getElementById("cena_").innerHTML = '0 AZN';
                                            }
                                            //console.log(tar);
                                    }
                                    async function promo_form() {

                                    let response = await fetch('https://www.gospeak.az/api/scripts/reg/promo.php', {
                                        method: 'POST',
                                        body: new FormData(promocode),
                                        redirect: "manual",
                                        mode: "no-cors",

                                    });
                                    promook = response.headers.get("promook");
                                        if (response.ok) {
                                            if (promook == 'res_ok') {
                                            document.getElementById('tarif').addEventListener('change', function () {
                                            var tarif = this.value;
                                            valute = readCookie('valute');
                                            if (tarif === "1") {
                                                if (valute == 'AZN') {
                                                    document.getElementById("cena_").innerHTML = '<span class="b5_15 b5_0 b01" style="width: auto;">59 AZN <span class="b5_16">  47 AZN</span></span>';
                                                }
                                                else if (valute == 'USD') {
                                                    document.getElementById("cena_").innerHTML = '<span class="b5_15 b5_0 b01" style="width: auto;">35 USD <span class="b5_16">  28 USD</span></span>';
                                                }
                                                else if (valute == 'EUR') {
                                                    document.getElementById("cena_").innerHTML = '<span class="b5_15 b5_0 b01" style="width: auto;">32 EUR <span class="b5_16">  26 EUR</span></span>';
                                                }
                                                else if (valute == 'RUB') {
                                                    document.getElementById("cena_").innerHTML = '<span class="b5_15 b5_0 b01" style="width: auto; font-size: 14px;">2500 RUB <span class="b5_16">  2000 RUB</span></span>';
                                                }
                                                f3_1.style.display = "flex";
                                                f3.style.display = "none";
                                            }
                                            else if (tarif === "2") {
                                                if (valute == 'AZN') {
                                                    document.getElementById("cena_").innerHTML = '<span class="b5_15 b5_0 b01" style="width: auto;">79 AZN <span class="b5_16">  63 AZN</span></span>';
                                                }
                                                else if (valute == 'USD') {
                                                    document.getElementById("cena_").innerHTML = '<span class="b5_15 b5_0 b01" style="width: auto;">47 USD <span class="b5_16">  37 USD</span></span>';
                                                }
                                                else if (valute == 'EUR') {
                                                    document.getElementById("cena_").innerHTML = '<span class="b5_15 b5_0 b01" style="width: auto;">42 EUR <span class="b5_16">  35 EUR</span></span>';
                                                }
                                                else if (valute == 'RUB') {
                                                    document.getElementById("cena_").innerHTML = '<span class="b5_15 b5_0 b01" style="width: auto; font-size: 14px;">3400 RUB <span class="b5_16">  2700 RUB</span></span>';
                                                }
                                                f3_1.style.display = "flex";
                                                f3.style.display = "none";
                                            }
                                            else if (tarif === "5") {

                                                if (valute == 'AZN') {
                                                    document.getElementById("cena_").innerHTML = '<span class="b5_16  " style="width: auto;">9 AZN</span>';
                                                }
                                                else if (valute == 'USD') {
                                                    document.getElementById("cena_").innerHTML = '<span class="b5_16  " style="width: auto;">8 USD</span>';
                                                }
                                                else if (valute == 'EUR') {
                                                    document.getElementById("cena_").innerHTML = '<span class="b5_16  " style="width: auto;">7.80 EUR</span>';
                                                }
                                                else if (valute == 'RUB') {
                                                    document.getElementById("cena_").innerHTML = '<span class="b5_16  " style="width: auto; font-size: 14px;">565 RUB</span>';
                                                }
                                                f3_1.style.display = "flex";
                                                f3.style.display = "none";

                                            }
                                            else if (tarif === "3") {

                                                if (valute == 'AZN') {
                                                    document.getElementById("cena_").innerHTML = '<span class="b5_15 b5_0 b01" style="width: auto;">119 AZN <span class="b5_16">  95 AZN</span></span>';
                                                }
                                                else if (valute == 'USD') {
                                                    document.getElementById("cena_").innerHTML = '<span class="b5_15 b5_0 b01" style="width: auto;">70 USD <span class="b5_16">  56 USD</span></span>';
                                                }
                                                else if (valute == 'EUR') {
                                                    document.getElementById("cena_").innerHTML = '<span class="b5_15 b5_0 b01" style="width: auto;">63 EUR <span class="b5_16">  53 EUR</span></span>';
                                                }
                                                else if (valute == 'RUB') {
                                                    document.getElementById("cena_").innerHTML = '<span class="b5_15 b5_0 b01" style="width: auto; font-size: 14px;">5100 RUB <span class="b5_16">  4100 RUB</span></span>';
                                                }
                                                f3_1.style.display = "flex";
                                                f3.style.display = "none";
                                            }
                                            else if (tarif === "-1") {

                                                f3_1.style.display = "none";
                                                f3.style.display = "flex";
                                                document.getElementById("cena_").innerHTML = '0 AZN';
                                            }
                                        });
                                    setprice();


                                }
                                        else {
                                            document.querySelector('.modal4').classList.add('active');
                                            document.querySelector('.js-overlay-modal').classList.add('active');
                                        }
                                    }
                                    else {
                                            document.querySelector('.modal4').classList.add('active');
                                            document.querySelector('.js-overlay-modal').classList.add('active');
                                        }
                                    };
async function p_form(e) {

    e.preventDefault();

    let response = await fetch('https://www.gospeak.az/api/scripts/reg/reg.php', {
        method: 'POST',
        body: new FormData(form3),
        redirect: "manual",
        mode: "no-cors",

    });


    if (response.ok) {
        payurl = response.headers.get("payurl");
        document.querySelector('.modal3').classList.add('active');
        document.querySelector('.js-overlay-modal').classList.add('active');
        setTimeout(function () {
            location = payurl;
        }, 7000);

    }
    else {
        document.querySelector('.modal4').classList.add('active');
        document.querySelector('.js-overlay-modal').classList.add('active');
    }
};

if (window.location.href === 'https://www.gospeak.az/purchase' || 'https://www.gospeak.az/az/purchase' || 'https://www.gospeak.az/en/purchase') {
    form3.onsubmit = p_form;
    var f3 = document.getElementById("subf3_nonetarif");
    var f3_1 = document.getElementById("kupit");
    document.getElementById('subf3_nonetarif').addEventListener('click', function () {
        document.querySelector('.modal4').classList.add('active');
        document.querySelector('.js-overlay-modal').classList.add('active');
    });
    document.getElementById('tarif').addEventListener('change', function () {
        var tarif = this.value;
        valute = readCookie('valute');
        if (tarif === "1") {
            if (valute == 'AZN') {
                document.getElementById("cena_").innerHTML = '<span class="b5_16  " style="width: auto;">59 AZN</span>';
            }
            else if (valute == 'USD') {
                document.getElementById("cena_").innerHTML = '<span class="b5_16  " style="width: auto;">35 USD</span>';
            }
            else if (valute == 'EUR') {
                document.getElementById("cena_").innerHTML = '<span class="b5_16  " style="width: auto;">32 EUR</span>';
            }
            else if (valute == 'RUB') {
                document.getElementById("cena_").innerHTML = '<span class="b5_16  " style="width: auto; font-size: 14px;">2500 RUB</span>';
            }
            f3_1.style.display = "flex";
            f3.style.display = "none";
        }
        else if (tarif === "2") {
            if (valute == 'AZN') {
                document.getElementById("cena_").innerHTML = '<span class="b5_16  " style="width: auto;">79 AZN</span>';
            }
            else if (valute == 'USD') {
                document.getElementById("cena_").innerHTML = '<span class="b5_16  " style="width: auto;">47 USD</span>';
            }
            else if (valute == 'EUR') {
                document.getElementById("cena_").innerHTML = '<span class="b5_16  " style="width: auto;">42 EUR </span>';
            }
            else if (valute == 'RUB') {
                document.getElementById("cena_").innerHTML = '<span class="b5_16  " style="width: auto; font-size: 14px;">3400 RUB</span>';
            }
            f3_1.style.display = "flex";
            f3.style.display = "none";
        }
        else if (tarif === "5") {

            if (valute == 'AZN') {
                document.getElementById("cena_").innerHTML = '<span class="b5_16  " style="width: auto;">9 AZN</span>';
            }
            else if (valute == 'USD') {
                document.getElementById("cena_").innerHTML = '<span class="b5_16  " style="width: auto;">8 USD</span>';
            }
            else if (valute == 'EUR') {
                document.getElementById("cena_").innerHTML = '<span class="b5_16  " style="width: auto;">7.80 EUR</span>';
            }
            else if (valute == 'RUB') {
                document.getElementById("cena_").innerHTML = '<span class="b5_16  " style="width: auto; font-size: 14px;">565 RUB</span>';
            }
            f3_1.style.display = "flex";
            f3.style.display = "none";

        }
        else if (tarif === "3") {

            if (valute == 'AZN') {
                document.getElementById("cena_").innerHTML = '<span class="b5_16  " style="width: auto;">119 AZN </span>';
            }
            else if (valute == 'USD') {
                document.getElementById("cena_").innerHTML = '<span class="b5_16  " style="width: auto;">70 USD </span>';
            }
            else if (valute == 'EUR') {
                document.getElementById("cena_").innerHTML = '<span class="b5_16  " style="width: auto;">63 EUR </span>';
            }
            else if (valute == 'RUB') {
                document.getElementById("cena_").innerHTML = '<span class="b5_16" style="width: auto; font-size: 14px;">5100 RUB </span>';
            }
            f3_1.style.display = "flex";
            f3.style.display = "none";
        }
        else if (tarif === "-1") {

            f3_1.style.display = "none";
            f3.style.display = "flex";
            document.getElementById("cena_").innerHTML = '0 AZN';
        }
    });
}


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