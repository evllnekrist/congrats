<!DOCTYPE html>
<html lang="en">
    <head>
        @include('_main._include.head')
        @include('_main._include.asset-top')
    </head>
    <body class="gla_middle_titles" id="home">
        <div class="gla_page" id="gla_page">
            <!-- Slider -->
            <div class="gla_slider gla_wht_txt">

                <!-- Slider -->
                <div class="gla_slider_carousel">
                    <div class="gla_slider gla_image_bck" data-image="{{asset('asset-main/images/porto/muscleb/0.jpg')}}">
                        <div class="gla_over" data-color="#000" data-opacity="0.5"></div>
                        <div class="container">
                            <div class="gla_slide_txt gla_slide_center_middle text-center">
                                <h4>Membership Program <br>for <br>@muscleboundepfc</h4>
                            </div>
                        </div>
                    </div>
                    <div class="gla_slider gla_image_bck" data-image="{{asset('asset-main/images/porto/muscleb/1.jpg')}}">
                    </div>
                    <div class="gla_slider gla_image_bck" data-image="{{asset('asset-main/images/porto/muscleb/1b.jpg')}}">
                    </div>
                    <div class="gla_slider gla_image_bck" data-image="{{asset('asset-main/images/porto/muscleb/2.jpg')}}">
                    </div>
                    <div class="gla_slider gla_image_bck" data-image="{{asset('asset-main/images/porto/muscleb/3.jpg')}}">
                    </div>
                    <div class="gla_slider gla_image_bck" data-image="{{asset('asset-main/images/porto/muscleb/4.jpg')}}">
                    </div>
                    <!-- Slider End -->
                </div>
                <!-- carousel end -->
                <!-- Slide Down -->
                <a class="gla_scroll_down gla_go" href="#gla_content">
                    <b></b>
                    Scroll
                </a>
            </div>
            <!-- Slider End -->
            @include('_main._include.footer')
        </div>
        @include('_main._include.asset-bottom')
    </body>
</html>