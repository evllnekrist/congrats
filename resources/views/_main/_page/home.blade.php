<!DOCTYPE html>
<html lang="en">
    <head>
        @include('_main._include.head')
        @include('_main._include.asset-top')
        <style>
            .ft-shadow-soft{
                color: white;
                text-shadow: 2px 2px 4px #737373;
            }
            smaller{
                font-size:65%;
            }
        </style>
    </head>
    <body class="gla_middle_titles" id="home">
        <div class="gla_page" id="gla_page">
            <a href="#gla_page" class="gla_top ti ti-angle-up gla_go"></a>
            @include('_main._include.nav')
            <!-- Slider -->
            <div class="gla_slider gla_image_bck  gla_wht_txt gla_fixed"  data-image="{{asset('asset-main/images/bg/couple-1.webp')}}" data-stellar-background-ratio="0.8">

                <!-- <div class="gla_over" data-color="#282828" data-opacity="0.15"></div> -->
                <div class="container">
                    <div class="gla_slide_txt gla_slide_center_middle_m text-center">
                        <div class="gla_slide_midtitle_m ft-shadow-soft">
                            <!-- <smaller> -->
                                bagikan&nbsp;&nbsp;kebahagiaanmu<br>lewat&nbsp;&nbsp;berita&nbsp;&nbsp;baik
                            <!-- </smaller> -->
                        </div>
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