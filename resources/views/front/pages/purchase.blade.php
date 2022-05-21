@extends('front.layout.master')

@section('title') {{ __('menu.kurs_haqqinda') }} @endsection
@section('css')

@endsection

@section('content')
    <main id="purchase">
        <div class="container">
            <div class="purchase-container">
                <div class="pdata_head_sales">
                    <div class="title_sales">{!! __('purchase.kurs_almaq') !!}</div>
                    <div class="about_features">
                        <span class="b1_time ab_feature"><img src="../img/TimeYellow.svg" /> {!! __('purchase.1_ay') !!}</span>
                        <span class="b1_pack ab_feature"><img src="../img/PaperBlue.svg" /> {!! __('purchase.3_paket') !!}</span>
                        <span class="b1_individual ab_feature"><img src="../img/StarGreen.svg" /> {!! __('purchase.ferdi_yanasma') !!}</span>
                        <span class="b1_price ab_feature"><img src="../img/tagred.svg" /> {!! __('purchase.59_aznden') !!}</span>
                    </div>
                </div>
                <div class="personal_data_sales col-lg-9">
                    <form id="form3">
                        <input id="imya" type="text" name="imya" class="purchase-input imya" value="" placeholder="{!! __('purchase.ad') !!}" autocomplete="off" required>
                        <input id="familya" type="text" name="familya" class="purchase-input familya" value="" placeholder="{!! __('purchase.soyad') !!}" autocomplete="off" required>
                        <input id="email" type="email" name="email" class="purchase-input e-mail" value="" placeholder="E-mail" autocomplete="off" required>
                        <input id="phone" type="text" name="phone" class="purchase-input phone" value="" placeholder="{!! __('purchase.mobil_telefon') !!}" autocomplete="off" required>
                        <div class="form-split">
                            <input id="godrojdeniya" placeholder="{!! __('purchase.dogum_tarixi') !!}" type="text" name="godrojdeniya" class="purchase-input godrojdeniya" value="" required />
                            <select id="tarif" name="tarif" class="tarif purchase-input" required onchange="window.location.href='/purchase/'+this.value">
                                <option value="">{!! __('purchase.tarif_paket') !!}</option>
                                @foreach($pakets as $key => $item)
                                <option value="{{ $key }}" {{ $paket == $key ? 'selected' : '' }}>{{ mb_strtoupper($key) }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="d-flex my-3">
                            <input type="checkbox" name="acheckbox" class="b1_fcheckbox" id="checkbox2" required /> <label for="checkbox2" class="b1_flabel">{!! __('purchase.men_melumatlarin_emali_ile_raziyam') !!}</label>
                        </div>
                        <div class="price-container"><span class="cena">{!! __('purchase.qiymet') !!}:</span><span class="cena_" id="cena_">{{ $pakets[$paket] == '' ? '0 '.session('valyuta') : $pakets[$paket] }}</span></div>
                        <input id="promocode1" type="text" name="promocode" class="promocode purchase-input w-100" value="" placeholder="{!! __('purchase.promokod') !!}" autocomplete="off">
                        <button id="subf3_nonetarif" class="kupit" style="display: flex;"><span class="kupit_t">{!! __('purchase.almaq') !!}</span></button>
                    </form>
                </div>
                <span class="b1_yleft"><img src="{{ asset('img/yellow.svg') }}"></span>
                <div class="modal modal3" data-modal="3">
                    <svg class="modal__cross js-modal-close" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path d="M23.954 21.03l-9.184-9.095 9.092-9.174-2.832-2.807-9.09 9.179-9.176-9.088-2.81 2.81 9.186 9.105-9.095 9.184 2.81 2.81 9.112-9.192 9.18 9.1z" />
                    </svg>
                    <img src="/../img/kurssale.svg" class="modal_img" />
                    <p class="modal__title">
                        Məlumat qəbul edildi!</p>
                    <p class="modal_text">Bu səhifəni tərk etməyin, 5 saniyədən sonra siz ödəniş səhifəsinə yönləndiriləcəksiniz.</p>
                </div>
            </div>
        </div>
    </main>
@endsection

@section('js')
    <script type="text/javascript" src="js/about_course.js"></script>
@endsection
