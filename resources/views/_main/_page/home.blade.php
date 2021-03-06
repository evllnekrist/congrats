<!DOCTYPE html>
<html lang="en">
    <head>
        @include('_main._include.head')
        @include('_main._include.asset-top')
    </head>
    <body class="gla_middle_titles" id="home">
        <div class="gla_page" id="gla_page">
            <a href="#gla_page" class="gla_top ti ti-angle-up gla_go"></a>
            @include('_main._include.nav')
            <!-- Slider -->
            <div class="gla_slider gla_image_bck  gla_wht_txt gla_fixed"  data-image="{{asset('asset-main/images/bg/couple-1.jpg')}}" data-stellar-background-ratio="0.8">

                <div class="gla_over" data-color="#282828" data-opacity="0.2"></div>
                <div class="container">
                    <div class="gla_slide_txt gla_slide_center_middle text-center">
                        <div class="gla_slide_midtitle">bagikan kebahagianmu lewat berita baik</div>
                    </div>
                </div>
                <a class="gla_scroll_down gla_go" href="#gla_content">
                    <b></b>
                    Scroll
                </a>
            </div>
            <!-- Slider End -->
            @include('_main._include.catalog-1')
            @include('_main._include.pricelist')
            @include('_main._include.footer')
        </div>
        @include('_main._include.asset-bottom')
    </body>
</html>