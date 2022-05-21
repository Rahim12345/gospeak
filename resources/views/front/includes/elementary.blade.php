<div class="block_about">
    @if(Route::currentRouteName() != 'front.about.cource')
    <div class="b2_headert section_heading">
        {!! __('home.kurs_haqqinda') !!}
    </div>
    @endif
    <div class="about_items col-md-12 col-sm-12 col-12">
        <div class="about_content col-lg-7 col-md-12 col-sm-12 col-12">
                        <span class="about_header">
                            <h2>{!! __('home.elementraryden_intermediate') !!}</h2>
                        </span>
            <span class="about_text">{!! __('home.her_bir_telebenin') !!}</span>
            <div class="about_features">
                <span class="ab_feature"><img src="img/TimeCircle.svg" /> {!! __('home.kurshaqqinda_1_ay') !!}</span>
                <span class="ab_feature"><img src="img/Paper.svg" /> {!! __('home.kurshaqqinda_3_paket') !!}</span>
                <span class="ab_feature"><img src="img/Star.svg" /> {!! __('home.ferdi_yanasma') !!}</span>
            </div>
            <span class="about_btns">
                            <button class="b3_zp about_signup btn_yellow" onClick="window.location.href='/purchase'">{!! __('home.qeydiyyatdan_kecmek') !!}</button>
                            <button class="b3_about about_info btn_white" onClick="window.location.href='/about-course#tariffs'">{!! __('home.etrafli') !!}</button>
                        </span>
        </div>
        <img class="about_img col-lg-5 col-md-12 col-sm-12 col-12" src="img/b3_img.png" />
    </div>
</div>
