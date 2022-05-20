valute = readCookie('valute');
if (valute === "AZN") {
	document.getElementById("cena_basic").innerHTML = '<span class="b5_15 b5_0"><span class="b5_16">59 AZN</span></span>';
	document.getElementById("cena_standart").innerHTML = '<span class="b5_15 b5_0"><span class="b5_16">79 AZN</span></span>';
	document.getElementById("cena_pro").innerHTML = '<span class="b5_15 b5_0"><span class="b5_16">119 AZN</span></span>';
	document.getElementById("cena_trial").innerHTML = '<span class="b5_15 b5_0"><span class="b5_16">9 AZN</span></span>';
	document.getElementById("cena_basic_mobile").innerHTML = '<span class="b5_15 b5_0"><span class="b5_16">59 AZN</span></span>';
	document.getElementById("cena_standart_mobile").innerHTML = '<span class="b5_15 b5_0"><span class="b5_16">79 AZN</span></span>';
	document.getElementById("cena_pro_mobile").innerHTML = '<span class="b5_15 b5_0"><span class="b5_16">119 AZN</span></span>';
	document.getElementById("cena_trial_mobile").innerHTML = '<span class="b5_15 b5_0"><span class="b5_16">9 AZN</span></span>';
}
else if (valute == 'USD') {
	document.getElementById("cena_basic").innerHTML = '<span class="b5_15 b5_0"><span class="b5_16">35 USD</span></span>';
	document.getElementById("cena_standart").innerHTML = '<span class="b5_15 b5_0"><span class="b5_16">47 USD</span></span>';
	document.getElementById("cena_pro").innerHTML = '<span class="b5_15 b5_0"><span class="b5_16">70 USD</span></span>';
	document.getElementById("cena_trial").innerHTML = '<span class="b5_15 b5_0"><span class="b5_16">5 USD</span></span>';
	document.getElementById("cena_basic_mobile").innerHTML = '<span class="b5_15 b5_0"><span class="b5_16">35 USD</span></span>';
	document.getElementById("cena_standart_mobile").innerHTML = '<span class="b5_15 b5_0"><span class="b5_16">47 USD</span></span>';
	document.getElementById("cena_pro_mobile").innerHTML = '<span class="b5_15 b5_0"><span class="b5_16">70 USD</span></span>';
	document.getElementById("cena_trial_mobile").innerHTML = '<span class="b5_15 b5_0"><span class="b5_16">5 USD</span></span>';

}
else if (valute == 'EUR') {
	document.getElementById("cena_basic").innerHTML = '<span class="b5_15 b5_0"><span class="b5_16">32 EUR</span></span>';
	document.getElementById("cena_standart").innerHTML = '<span class="b5_15 b5_0"><span class="b5_16">42 EUR</span></span>';
	document.getElementById("cena_pro").innerHTML = '<span class="b5_15 b5_0"><span class="b5_16">63 EUR</span></span>';
	document.getElementById("cena_trial").innerHTML = '<span class="b5_15 b5_0"><span class="b5_16">5 EUR</span></span>';
	document.getElementById("cena_basic_mobile").innerHTML = '<span class="b5_15 b5_0"><span class="b5_16">32 EUR</span></span>';
	document.getElementById("cena_standart_mobile").innerHTML = '<span class="b5_15 b5_0"><span class="b5_16">42 EUR</span></span>';
	document.getElementById("cena_pro_mobile").innerHTML = '<span class="b5_15 b5_0"><span class="b5_16">63 EUR</span></span>';
	document.getElementById("cena_trial_mobile").innerHTML = '<span class="b5_15 b5_0"><span class="b5_16">5 EUR</span></span>';
}
else if (valute == 'RUB') {
	document.getElementById("cena_basic").innerHTML = '<span class="b5_15 b5_0"><span class="b5_16">2500 RUB</span></span>';
	document.getElementById("cena_standart").innerHTML = '<span class="b5_15 b5_0"><span class="b5_16">3400 RUB</span></span>';
	document.getElementById("cena_pro").innerHTML = '<span class="b5_15 b5_0"><span class="b5_16">5100 RUB</span></span>';
	document.getElementById("cena_trial").innerHTML = '<span class="b5_15 b5_0"><span class="b5_16">565 RUB</span></span>';
	document.getElementById("cena_basic_mobile").innerHTML = '<span class="b5_15 b5_0"><span class="b5_16">2500 RUB</span></span>';
	document.getElementById("cena_standart_mobile").innerHTML = '<span class="b5_15 b5_0"><span class="b5_16">3400 RUB</span></span>';
	document.getElementById("cena_pro_mobile").innerHTML = '<span class="b5_15 b5_0"><span class="b5_16">5100 RUB</span></span>';
	document.getElementById("cena_trial_mobile").innerHTML = '<span class="b5_15 b5_0"><span class="b5_16">565 RUB</span></span>';
};