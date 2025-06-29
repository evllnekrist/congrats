<!DOCTYPE html>
<html lang="en">
    <head>
        @include('_invitation._wedding._include.head-1')
        <?php
            $version = "?var=".date("Ymd")."010";
            $qrcode1 = "0823261785";
            $qrcode2 = "8601177412";
        ?>
        <link href="{{asset('asset-wedding-1/css/glanz_library.css')}}" rel="stylesheet">
        <link href="{{asset('asset-wedding-1/fonts/themify-icons.css')}}" rel="stylesheet">
        <link href="{{asset('asset-wedding-1/css/glanz_style_montserrat.css').$version}}" rel="stylesheet">
        <link href="{{asset('asset-wedding-1/css/custom.css').$version}}" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;600;900&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.5.2/css/all.min.css" rel="stylesheet" />
        <link href="{{asset('asset-wedding-1/fonts/marsha/stylesheet.css')}}" rel="stylesheet">
        <link href="{{asset('asset-main/css/jquery.dataTables.css')}}" rel="stylesheet">
        <link href="{{asset('asset-main/css/toastr.css')}}" rel="stylesheet">
        <link href="{{asset('asset-main/css/chatbox.css').$version}}" rel="stylesheet">
        <?php
            $cdn_link   = "asset-wedding-bg/".$code."/";
        ?>
        <style>
            .text-babypink{
                color: #ff99ff;
            }
            .text-green{
                color: #abc94e;
            }
            .text-skyblue{
                color: #99ccff;
            }

            .text-choco-1{
                color: #956c5a
            }
            .text-choco-2{
                color: #bf913e;
            }
            a.text-choco-2:hover{
                color: #99ccff; !important;
                font-weight: 200;
                text-decoration: underline;
            }
            .text-choco-3{
                color: #392F24;
            }
            .btn-brown-light-transp, .btn-brown-light-transp-2:hover{
                box-shadow: 0 1.5px 9px 0 rgb(0 0 0 / 40%);
                background: rgba(149, 108, 90, 0.4) !important;
                /* 108,67,49 */
                /* font-weight: 600; */
            }
            .btn-brown-light-transp-2, .btn-brown-light-transp:hover{
                box-shadow: 0 1.5px 9px 0 rgb(0 0 0 / 60%) !important;
                background: rgba(48, 34, 29, 0.9) !important;
                font-weight: 600;
            }
            .btn-green-light-transp-2, .btn-green-light-transp:hover{
                box-shadow: 0 1.5px 9px 0 rgb(0 0 0 / 20%) !important;
                background: rgba(171, 201, 78, 0.8) !important;
                font-weight: 600;
            }

            .btn-skyblue-light-transp-2, .btn-skyblue-light-transp:hover{
                box-shadow: 0 1.5px 9px 0 rgb(0 0 0 / 20%) !important;
                background: rgb(77, 166, 255, 0.8) !important;
                font-weight: 600;
            }

            .highlight-1{
                background-color: black;
                color: white;
                padding: 15px 30px;
            }
            .highlight-2{
                background: rgba(255,255,255,0.8) !important;
                box-shadow: 0 1.5px 9px 0 rgb(0 0 0 / 40%);
                /* color: #956c5a; */
                color: #5a8ebf;
                padding: 5px 30px;
                line-height: 2;
            }
            .highlight-2-bold{
                background: rgba(0,0,0,0.35) !important;
                box-shadow: 0 1.5px 9px 0 rgb(0 0 0 / 20%);
                color: #956c5a;
                padding: 5px 30px;
                line-height: 2;
            }
            .highlight-2-light{
                background: rgba(255,255,255,0.8) !important;
                box-shadow: 0 1.5px 9px 0 rgb(0 0 0 / 20%);
                /* color: #956c5a; */
                color: #bf913e;
                padding: 5px 30px;
                line-height: 2;
                border-radius: 10px;
            }
            .text-subtitle-highlight-1{
                background-color: white;
                color: black;
                padding: 5px 30px;
            }
            .text-subtitle-highlight-2{
                background-color:#392F24;
                color: white;
                padding: 5px 30px;
            }
            .gla_news_block{
                -webkit-box-shadow: 0 1.5px 9px 0 rgb(0 0 0 / 40%);
                box-shadow: 0 1.5px 9px 0 rgb(0 0 0 / 40%);
            }
            .pd-sd{
                padding-top: 20px;
                padding-bottom: 10px;
            }
            .pd-md{
                padding: 20px;
            }
            .pd-md-h{
                padding: 2rem 20px 20px 20px;
            }
            .h-fix-img{
                height: 900px;
            }
            .gla_round_block{
                margin-top: 0px !important;
            }
            .ft-shadow{
                color: white;
                text-shadow: 1px 1px 4px #000000;
            }
            .in-focus-white-light{
                background: rgba(255,255,255,0.8) !important;
                color: #6c4331 !important;
            }
            .in-focus-white-light:hover, .in-focus-white-light:active, .in-focus-white-light:after{
                background: rgba(255,255,255,0.9) !important;
            }
            .ft-shadow-soft-dark{
                text-shadow: 1px 1px 1px #000000;
            }
            .ft-shadow-dark{
                text-shadow: 1px 1px 1px black;
            }
            .ft-shadow-soft{
                text-shadow: 2px 2px 4px #333333;/* #737373; */
            }
            .ft-shadow-soft-reverse{
                text-shadow: 1px 1px 1px #30221d;
            }
            .boldme{
                font-weight: 700;
            }
            .text-green-sh{
                color: #99ff99;
            }
            .gla_invitation_open_btn_longer__before_after_custom {
                position: absolute;
                -ms-transform: translateY(-50%);
                transform: translateY(-50%);
                left: 50%;
                bottom: 8%;
                transform: translateY(0) translateX(-50%);
                text-align: center;
                -webkit-box-shadow: 0 1.5px 9px 0 rgba(0,0,0,0.2);
                -moz-box-shadow: 0 1.5px 9px 0 rgba(0,0,0,0.2);
                box-shadow: 0 1.5px 9px 0 rgba(0,0,0,0.2);
                -webkit-transition: all 0.3s;
                -o-transition: all 0.3s;
                transition: all 0.3s;
            }
            .gla_invitation_open_btn_longer__before_custom {
                position: absolute;
                -ms-transform: translateY(-50%);
                transform: translateY(-50%);
                left: 50%;
                bottom: 10%;
                padding: 0px 10px;
                margin: 10px 0;
                width: 75%;
                border-radius: 20px;
                background: rgba(255, 255, 255, 0.8) !important;
                transform: translateY(0) translateX(-50%);
                text-align: center;
                -webkit-box-shadow: 0 1.5px 9px 0 rgba(0,0,0,0.2);
                -moz-box-shadow: 0 1.5px 9px 0 rgba(0,0,0,0.2);
                box-shadow: 0 1.5px 9px 0 rgba(0,0,0,0.2);
                -webkit-transition: all 0.3s;
                -o-transition: all 0.3s;
                transition: all 0.3s;
            }
            /* .navbar-disabled {
                pointer-events: none;
                opacity: 0;
            } */

            table.no-border, table.no-border th, table.no-border td {
                border: none !important;
            }

            .grid {
                max-width: 100%;
            }
            .grid-item {
                display: block;
                margin-bottom: 10px;
            }
            .type-1 { width: 33%; } /* 1/3 width */
            .type-2 { width: 66%; } /* 2/3 width */
            .type-3 { width: 50%; } /* 1/2 width */
            .grid-item img {
                width: 100%;
                display: block;
                border-radius: 8px;
                padding-right: 10px;
            }
            .badge{
                font-size: 10px;
                font-weight: 400;
            }
            .badge-info{
                background-color: #f7f5bc;
                color: black;
            }
            .video-wrapper {
                max-width: 720px;
                margin: 10px 10px 5px 10px;
                aspect-ratio: 16 / 9;
                position: relative;
            }
            iframe {
                width: 100%;
                height: 100%;
                border: none;
            }
            #slide_img, #quote {
                transition: background-image 0.5s ease-in-out, opacity 0.8s ease;
                opacity: 1;
            }
            .fade-out {
                opacity: 0;
            }
        </style>
    </head>
    <body class="bg-navy">
        <!-- Preloader -->
            <div class="gla_page_loader gla_image_bck gla_wht_txt" data-color="#181d23">
                <div class="gla_loader">
                    <p><img src="{{asset($cdn_link.'images/loading.gif')}}" height="150" alt=""></p>
                    <p>Loading ...</p>
                </div>
            </div>
        <!-- Preloader End-->
        <!-- Preloader -->
            <div class="gla_page_loader_light gla_image_bck gla_wht_txt" data-color="#181d23" style="display:none">
                <div class="gla_loader_light">
                    <p><img src="{{asset($cdn_link.'images/loading.gif')}}" height="150" alt=""></p>
                    <p class="fix-montserrat-xs-b"><i>Memproses masukan Anda ...</i></p>
                </div>
            </div>
        <!-- Preloader End-->
        <!-- OPEN -->
        <!-- #GOLD VERSION -->
            <div class="gla_invitation_container_longer" id="gla_welcome">
                <div class="gla_invitation_i_longer gla_invitation_ii gla_image_bck text-skyblue" data-image="{{asset($cdn_link.'images/open.png')}}">
                </div>
            </div>
            <div class="row gla_wht_txt gla_invitation_open_btn_longer__before_custom text-choco-3" id="gla_welcome2">
                <h6>Yth. <span class="fix-montserrat-s-b">{{$invite?$invite:'Saudara/(i)'}}</span>,</h6>
                @if(isset($_GET['qty']))
                    <span class="highlight-2-bold fix-montserrat-xs text-choco-3">
                        Undangan ini terbatas untuk <span class="fix-montserrat-xs-b">{{$_GET['qty']}} orang {{$_GET['qty']>1?"'s":""}}</span>
                    </span>
                    <br><br>
                @endif
                <h6><small>Mengundang Anda untuk menjadi bagian<br>dari hari bahagia kami<br><br><br><br></small></h6>

                <button type="button" class="btn btn-xs btn-skyblue-light-transp-2 gla_wht_txt gla_invitation_open_btn_longer__before_after_custom"
                id="gla_welcome3" onclick="executeInv()">Buka Undangan
                </button>
            </div>
        <!-- OPEN End -->
        <!-- CONTENT -->
            <div class="gla_page" id="gla_page" style="display:none">
                <a href="#gla_page" class="gla_top ti ti-angle-up gla_go"></a>
                <div class="gla_music_icon">
                    <i class="ti ti-music"></i>
                </div>
                <div class="gla_music_icon_cont">
                    <audio id="myaudio" controls loop>
                    <!-- dami_im__they_long_to_be_close_to_you.mp3 -->
                        <source src="{{asset($cdn_link.'audios/westlife-evergreen.mp3')}}" type="audio/mpeg">
                        <source src="{{asset($cdn_link.'audios/westlife-evergreen.mp3')}}" type="audio/ogg">
                        Your browser does not support the audio element.
                    </audio>
                </div>
                <!-- <header>
                    <nav class="gla_light_nav gla_transp_nav"  id="navbar">
                        <div class="container">
                            <div class="gla_logo_container clearfix">
                                <div class="gla_logo_txt">
                                    <a href="/" class="gla_logo">Holly & Christian</a>
                                </div>
                            </div>
                        </div>
                    </nav>
                </header> -->
                <!-- Slider -->
                <div id="slide_img" class="gla_slider gla_image_bck gla_wht_txt gla_fixed"  data-image="{{asset($cdn_link.'images/s-2.webp')}}" data-stellar-background-ratio="0.8">
                    <!-- <div class="gla_over" data-color="#1e1d2d" data-opacity="0.15"></div> -->
                    <div class="container">
                        <div class="gla_slide_txt gla_slide_center_bottom" style="text-align:right;top:55%;left:-62%">
                            <img src="{{asset($cdn_link.'images/logo-pure.gif')}}" style="width:40vw !important">
                        </div>
                    </div>
                    <a class="gla_scroll_down gla_go" href="#gla_content">
                        <b></b>Scroll
                    </a>
                </div>
                <!-- Slider End -->
                <!-- Main -->
                <section id="gla_content" class="gla_content">
                    <section    id="profile" class="gla_section gla_image_bck gla_fixed" data-stellar-background-ratio="0.8"
                                data-image="{{asset($cdn_link.'images/top-7c.webp')}}">
                        <div class="gla_over" data-color="#282828" data-opacity="0.6"></div>
                        <div class="container text-center">
                            <div class="col gla_round_block">
                                <img src="{{asset($cdn_link.'images/line-epilog.png')}}" style="width: 50vw;"><br>
                                <span class="gla_wht_txt fix-montserrat-m-sb ft-shadow-soft-reverse">Sabtu,  12 Juli 2025</span><br><br>
                                <div class="text-skyblue gla_countdown" data-year="2025" data-month="07" data-day="12"></div><br><br>
                            </div>
                            <div class="gla_icon_boxes row">
                                <div class="col-xs-6">
                                    <div class="gla_news_block" style="background-color:rgba(0,0,0,0.6);">
                                        <a href="{{asset($cdn_link.'images/bride-1.webp')}}">
                                            <img class="lazy" src="{{asset('asset-main/images/image/lazyload-bbc.webp')}}" data-src="{{asset($cdn_link.'images/bride-1.webp')}}" alt="">
                                        </a>
                                        <span class="gla_news_title-m pd-sd gla_wht_txt"><strong><small>Bernadeta<br>Holly<br>Ayuningrum,<br>S.T.</small></strong></span>
                                        <img src="{{asset('asset-wedding-1/images/animations/icons/icon10_wh.gif')}}" style="width:40px!important;"><br><br>
                                        <p class="text-skyblue">
                                            <small class="gla_wht_txt ft-shadow-soft-reverse">putri sulung<br>dari</small><br>
                                            <span class="fix-montserrat-s-b"><small>Bapak Yohannes</small> Aris M.</span>
                                            <br>&<br>
                                            <span class="fix-montserrat-s-b">Ibu Martane</span>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-xs-6">
                                    <div class="gla_news_block" style="background-color:rgba(0,0,0,0.6);">
                                        <a href="{{asset($cdn_link.'images/groom-2.webp')}}">
                                            <img class="lazy" src="{{asset('asset-main/images/image/lazyload-bbc.webp')}}" data-src="{{asset($cdn_link.'images/groom-2.webp')}}" alt="">
                                        </a>
                                        <span class="gla_news_title-m pd-sd gla_wht_txt"><strong><small>Christian<br>Leonard,<br>S.T.<br><br></small></small></strong></span>
                                        <img src="{{asset('asset-wedding-1/images/animations/icons/icon15_wh.gif')}}" style="width:55px!important;"><br><br>
                                        <p class="text-skyblue">
                                            <small class="gla_wht_txt ft-shadow-soft-reverse">putra bungsu<br>dari</small></b><br>
                                            <span class="fix-montserrat-s-b">Bapak Setia Jaya</span>
                                            <br>&<br>
                                            <span class="fix-montserrat-s-b">Ibu Riak</small></span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section    id="event-detail" class="gla_section gla_image_bck gla_fixed"  data-image="{{asset($cdn_link.'images/pawel-czerwinski.jpg')}}" data-stellar-background-ratio="0.2">
                        <div class="container text-center">
                                <span class="text-subtitle-highlight-2 ff-ephesis" style="font-size: 26px">Hanya oleh karunia Tuhan,<br></span>
                                <span class="fix-montserrat-s-b"><span class="text-subtitle-highlight-1">kami dengan hormat meminta<br></span><span class="text-subtitle-highlight-1">kehadiran Anda</span></span><br><br><br><br>
                                <div class="row">
                                    <div class="col-xs-2"></div>
                                    <div class="col-xs-8 gla_news_block" style="background-color:rgba(255,255,255,0.3);">
                                        <div class="gla_news_img">
                                            <img src="{{asset($cdn_link.'images/hawaii.webp')}}">
                                        </div>
                                        <p>
                                            <span class="gla_slide_midtitle_m2 ff-ephesis ff-ephesis" style="margin-bottom: 0px">Pemenuhan Hukum Adat</span><br><br>
                                            <span class="fix-montserrat-sm-b text-choco-2">Jumat,  11 Juli 2025</span><br><br>
                                            <span class="label label-default">09.00 WIB s/d selesai</span><br><br>
                                        </p>
                                            <img src="{{asset($cdn_link.'images/line-spare.png')}}" style="height: 50px;width:auto">
                                        <p>
                                            <span class="gla_slide_midtitle_m2 ff-ephesis ff-ephesis" style="margin-bottom: 0px">Ibadah setelah Acara Adat</span><br><br>
                                            <span class="fix-montserrat-sm-b text-choco-2">Sabtu,  11 Juli 2025</span><br><br>
                                            <span class="label label-default">11.00 WIB s/d selesai</span><br><br>
                                        </p>
                                        <p>
                                            <a href="https://maps.app.goo.gl/Hwb4HfY6h3NxRwgz6" target="_blank" class="fix-montserrat-sm-b text-choco-2">
                                                <i class="fa-solid fa-location-dot text-danger"></i>&nbsp;&nbsp;<b>Hotel Hawaii</b>
                                            </a>
                                            <br>Jl. Bubut No.3, Bukit Tunggal, Kec. Jekan Raya, Kota Palangka Raya
                                        </p>
                                    </div>
                                    <div class="col-xs-2"></div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-2"></div>
                                    <div class="col-xs-8 gla_news_block" style="background-color:rgba(255,255,255,0.3);">
                                        <div class="gla_news_img">
                                            <img src="{{asset($cdn_link.'images/ygb.webp')}}">
                                        </div>
                                        <p>
                                            <span class="gla_slide_midtitle_m2 ff-ephesis ff-ephesis" style="margin-bottom: 0px">Peneguhan dan Pemberkatan Nikah</span>
                                        </p>
                                        <p>
                                            <span class="fix-montserrat-sm-b text-choco-2">Sabtu,  12 Juli 2025</span><br><br>
                                            <span class="label label-default">08.00 WIB s/d selesai</span><br><br>
                                            <a href="https://g.co/kgs/fcbJTY9" target="_blank" class="fix-montserrat-sm-b text-choco-2">
                                                <i class="fa-solid fa-location-dot text-danger"></i>&nbsp;&nbsp;<b>Gereja Katolik<br>Yesus Gembala Baik</b>
                                            </a>
                                            <br>Jl. Tjilik Riwut KM. 9, Bukit Tunggal, Kec. Jekan Raya, Kota Palangka Raya
                                        </p>
                                    </div>
                                    <div class="col-xs-2"></div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-2"></div>
                                    <div class="col-xs-8 gla_news_block" style="background-color:rgba(255,255,255,0.3);">
                                        <div class="gla_news_img">
                                            <img src="{{asset($cdn_link.'images/hawaii.webp')}}">
                                        </div>
                                        <p>
                                            <span class="gla_slide_midtitle_m2 ff-ephesis ff-ephesis" style="margin-bottom: 0px">Ibadah Ucapan Syukur</span><br><br>
                                            <span class="fix-montserrat-sm-b text-choco-2">Sabtu,  12 Juli 2025</span><br><br>
                                            <span class="label label-default">11.00 WIB s/d selesai</span><br><br>
                                        </p>
                                            <img src="{{asset($cdn_link.'images/line-spare.png')}}" style="height: 50px;width:auto">
                                        <p>
                                            <span class="gla_slide_midtitle_m ff-ephesis ff-ephesis" style="margin-bottom: 0px">Resepsi</span><br><br>
                                            <span class="fix-montserrat-sm-b text-choco-2">Sabtu,  12 Juli 2025</span><br><br>
                                            <span class="label label-default">12.00 s/d 15.00 WIB</span><br><br>
                                        </p>
                                        <p>
                                            <a href="https://maps.app.goo.gl/Hwb4HfY6h3NxRwgz6" target="_blank" class="fix-montserrat-sm-b text-choco-2">
                                                <i class="fa-solid fa-location-dot text-danger"></i>&nbsp;&nbsp;<b>Hotel Hawaii</b>
                                            </a>
                                            <br>Jl. Bubut No.3, Bukit Tunggal, Kec. Jekan Raya, Kota Palangka Raya
                                        </p>
                                    </div>
                                    <div class="col-xs-2"></div>
                                </div>
                        </div>
                    </section>
                    <div class="video-wrapper" id="video_container">
                            <!-- Placeholder to be replaced when visible -->
                    </div>
                    <section    id="rsvp" class="gla_section gla_image_bck gla_fixed gla_wht_txt" data-stellar-background-ratio="0.8" data-image="{{asset($cdn_link.'images/top-3.webp')}}">
                        <!-- <div class="gla_over" data-color="#000" data-opacity="0.1"></div> -->
                        <div class="container" style="padding-bottom: 0px !important;">
                                <div class="row mb-10">
                                    <div class="col-xs-3"><br>
                                        <img src="{{asset($cdn_link.'images/ani-rsvp.gif')}}" data-bottom-top="@src:{{asset($cdn_link.'images/ani-rsvp.gif')}}" height="100" alt="">
                                    </div>
                                    <strong class="col-xs-9 ff-ephesis text-right" style="font-size: 22px">
                                        Doa dan ucapanmu<br>sangat berarti untuk kami <br>dalam semangat memulai<br>perjalanan baru ini
                                    </strong>
                                </div>
                                <form id="form-rsvp" onsubmit="return false;">
                                        <div class="row">
                                            <div class="col-xs-1"></div>
                                            <div class="col-xs-10">
                                                <span class="fix-montserrat-s-b">Pengirim</span>
                                                <input type="text" name="rsvp_name" maxlength="50" spellcheck="false" class="form-control form-opacity in-focus-white-light" value="{{$invite}}" required>
                                            </div>
                                            <div class="col-xs-1"></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-1"></div>
                                            <div class="col-xs-10">
                                                <span class="fix-montserrat-s-b">Ucapan</span>
                                                <textarea name="wish_message" maxlength="500" spellcheck="false" class="form-control form-opacity in-focus-white-light" required></textarea>
                                            </div>
                                            <div class="col-xs-1"></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-1"></div>
                                            <div class="col-xs-5"><br><br><br><br><br><br>
                                                <span class="fix-montserrat-s-b">Alamat</span>
                                                <input type="text" name="rsvp_address" class="form-control form-opacity in-focus-white-light" required>
                                                <input type="submit" class="btn btn-block btn-skyblue-light-transp-2 text-choco-1" 
                                                style="margin-top:20px" id="form-rsvp-send" value="Kirim">
                                            </div>
                                            <div class="col-xs-6 text-choco-3"><br><br><br><br><br><br>
                                                <span class="fix-montserrat-s-b">Apakah kamu datang?</span><br>
                                                <input type="radio" name="rsvp_attend" value="1" required>
                                                <small>Ya, tentu!</small><br>
                                                <input type="radio" name="rsvp_attend" value="0">
                                                <small>Maaf, tidak dapat hadir</small><br><br>
                                            </div>
                                        </div>
                                </form>
                        </div><br><br>
                        <img src="{{asset($cdn_link.'images/line-wishes2.png')}}">
                        <div class="text-left pd-md"><br><br><br><br><br><br><br><br>
                            <div id="chat" class="chat_box_wrapper chat_box_small chat_box_active" style="opacity: 1; display: block; transform: translateX(0px); background-color: rgba(255,255,255,0.3);border-radius: 25px;">
                                <div class="chat_box touchscroll chat_box_colors_a" id="table-wish">
                                </div>
                            </div>
                        </div>
                    </section>
                    <section    id="gift_qrcode" class="gla_section">
                        <div class="container-fluid text-center">
                            <div class="container text-center">
                                <span class="fix-montserrat-m-b highlight-2-light">Wedding Gift&nbsp;&nbsp;<i class="fas fa-gifts"></i></span><br><br>
                                <span class="text-choco-2"><span class="fix-montserrat-m-b ff-ephesis">Tanpa mengurangi rasa hormat,</span><span class="fix-montserrat-xs-b"><br>untuk tamu undangan<br>yang ingin memberikan tanda cinta,<br>dapat melalui:</span></span>
                                <p style="height:5vh"></p>
                                <div class="gla_icon_boxes row justify-content-center">
                                    {{-- <div class="col-2"></div> --}}
                                    <div class="col-xs-6">
                                        <div class="gla_news_block">
                                            <span class="gla_news_img" style="height:auto!important"><br>
                                                <a href="{{asset($cdn_link.'images/bca.png')}}" target="_blank">
                                                    <img src="{{asset($cdn_link.'images/bca.png')}}" download="bca.jpg"
                                                    style="height:15vh;width:15vh">
                                                </a>
                                            </span>
                                            <p onclick="copy_to_clipboard('{{$qrcode2}}')">
                                                <span class="fix-montserrat-s-b">
                                                    <label class="text-success">{{$qrcode2}}<br>a/n Bernadeta Holly </label>
                                                    <br><small><i class="fa fa-clipboard text-secondary" aria-hidden="true" title="copy qrcode"></i> [copy]</small>
                                                </span>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-xs-6">
                                        <div class="gla_news_block">
                                            <span class="gla_news_img" style="height:auto!important"><br>
                                                <a href="{{asset($cdn_link.'images/bni.png')}}" target="_blank">
                                                    <img src="{{asset($cdn_link.'images/bni.png')}}" download="bni.png"
                                                    style="height:15vh;width:15vh">
                                                </a>
                                            </span>
                                            <p onclick="copy_to_clipboard('{{$qrcode1}}')">
                                                <span class="fix-montserrat-s-b">
                                                    <label class="text-success">{{$qrcode1}}<br>a/n Christian Leonard</label>
                                                    <br><small><i class="fa fa-clipboard text-secondary" aria-hidden="true" title="copy qrcode"></i> [copy]</small>
                                                </span>
                                            </p>
                                        </div>
                                    </div>
                                    {{-- <div class="col-2"></div> --}}
                                </div>
                            </div>
                        </div>
                    </section>
                    <section    id="gallery">
                        <div class="container text-center"><br>
                            <?php
                                $gallery_items = array(
                                    array('name'=>'dyk-1a','class'=>'col-xs-4'),
                                    array('name'=>'dyk-1b','class'=>'col-xs-4'),
                                    array('name'=>'dyk-9','class'=>'col-xs-4'),
                                    array('name'=>'dyk-6','class'=>'col-xs-4'),
                                    array('name'=>'dyk-8','class'=>'col-xs-4'),
                                    array('name'=>'dyk-7','class'=>'col-xs-4'),
                                    array('name'=>'s-2','class'=>'col-xs-4'),
                                    array('name'=>'s-3','class'=>'col-xs-4'),
                                    array('name'=>'s-1','class'=>'col-xs-4'),
                                    array('name'=>'s-4','class'=>'col-xs-6'),
                                    array('name'=>'s-5','class'=>'col-xs-6'),
                                    array('name'=>'top-1','class'=>'col-xs-6'),
                                    array('name'=>'top-2','class'=>'col-xs-6'),
                                    array('name'=>'top-3','class'=>'col-xs-4'),
                                    array('name'=>'top-4','class'=>'col-xs-4'),
                                    array('name'=>'top-5','class'=>'col-xs-4'),
                                );
                            ?>

                            
                                @php $counter = 0; @endphp
                                @foreach($gallery_items as $item)
                                    @php
                                        $number_only = preg_replace('/[^0-9]/', '', $item['class']);
                                        if($counter == 0){
                                            echo '<div class="row">';
                                        }
                                        $counter += $number_only;
                                    @endphp
                                    <div class="{{$item['class']}} text-center">
                                        <a href="{{asset($cdn_link.'images/'.$item['name'].'.webp')}}" class="lightbox">
                                            <img src="{{asset($cdn_link.'images/'.$item['name'].'.webp')}}" class="img-fluid"  alt="img-{{$item['name']}}">
                                        </a><br><br>
                                    </div>
                                    @php
                                        if($counter == 12){
                                            echo '</div><div class="clearfix visible-xs-block"></div>';
                                            $counter = 0; // reset for new row
                                        }
                                    @endphp
                                @endforeach

                        </div><br><br>
                    </section>
                    <section    id="quote" class="gla_image_bck gla_fixed h-fix-img" data-stellar-background-ratio="0.8" data-image="{{asset($cdn_link.'images/dyk-3.webp')}}">
                        <!-- <div class="gla_over" data-color="#ffff" data-opacity="0.2"></div> -->
                        <div class="container text-right pd-md-h">
                            <span class="fix-montserrat-s-b gla_wht_txt" style="font-size:75%"><i>
                                <sup class="text-green">14</sup> <span class="ft-shadow">&nbsp;&nbsp;Dan di atas semuanya itu: kenakanlah kasih, sebagai pengikat yang mempersatukan dan menyempurnakan.</span>
                                <sup class="text-green">15</sup> <span class="ft-shadow">&nbsp;&nbsp;Hendaklah damai sejahtera Kristus memerintah dalam hatimu, karena untuk itulah kamu telah dipanggil menjadi satu tubuh. Dan bersyukurlah.</span>
                            </i></span><br><br><br><br><br>
                            <p class="gla_subtitle text-choco-3 ft-shadow"><b>— Kolose 3 : 14-15</b></p>
                        </div>
                    </section>
                    <section    id="credit" class="gla_image_bck gla_section_extra_sml gla_wht_txt" data-color="#282828">
                        <div class="container">
                            <a href='{{url("/")}}' target="_blank">© beritabaik.co</a>
                        </div>
                    </section>
                </section>
                <!-- Main End -->
            </div>
        <!-- CONTENT End -->
        @include('_invitation._wedding._include.asset-bottom-1')
        <script>
            let entered = 0;
            const myaudio = document.getElementById('myaudio');
            const videoContainer = document.getElementById('video_container');
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        // Load and autoplay YouTube when in view
                        videoContainer.innerHTML = `
                            <iframe
                                src="https://www.youtube.com/embed/qb3LGsi2JMQ?si=QZfdxCX4TD_MUBmf&autoplay=1&rel=0"
                                title="YouTube video"
                                allow="autoplay; encrypted-media"
                                allowfullscreen
                                >
                            </iframe>`;
                        // Pause background audio
                        myaudio.pause();
                    } else {
                        if(entered){
                            // Remove iframe to stop video playback
                            videoContainer.innerHTML = '';
                            // Resume background audio
                            myaudio.play();
                        }
                    }
                });
            }, {
            threshold: 0.5 // 50% visibility triggers
            });

            observer.observe(videoContainer);

            // function toggleNavbar() {
            //     if ($(window).scrollTop() === 0) {
            //         $("#navbar").addClass("navbar-disabled");
            //     } else {
            //         $("#navbar").removeClass("navbar-disabled");
            //     }
        // }
            const mainimages = ['s-2','s-1'];
            const mainimages_bottom = ['dyk-3','dyk-8','dyk-2','dyk-1b'];
            const baseurl = "{{asset($cdn_link.'images')}}";
            let el_mi = document.getElementById("slide_img");
            let el_mi_bottom = document.getElementById("quote");
            let index = 0;
            let index_bottom = 0;
            function executeInv(){
                $("body").removeClass("bg-navy");
                entered = 1;
                myaudio.play();
                myaudio.volume = .35;
                $('#gla_welcome').remove();
                $('#gla_welcome2').remove();
                $('#gla_welcome3').remove();
                $('#gla_page').show();

                el_mi.classList.add("fade-out");
                el_mi_bottom.classList.add("fade-out");
                setInterval(() => {
                    index = (index + 1) % mainimages.length;
                    el_mi.style.backgroundImage = "url('"+baseurl+"/"+mainimages[index]+".webp')";
                    el_mi.classList.remove("fade-out");
                    
                    index_bottom = (index_bottom + 1) % mainimages_bottom.length;
                    el_mi_bottom.style.backgroundImage = "url('"+baseurl+"/"+mainimages_bottom[index_bottom]+".webp')";
                    el_mi_bottom.classList.remove("fade-out");
                }, 5000); 
            }

            $( document ).ready(function() {

                $('.lazy').lazy({
                    // your configuration goes here
                    scrollDirection: 'vertical',
                    effect: 'fadeIn',
                    visibleOnly: true,
                    beforeLoad: function(element) {},
                    afterLoad: function(element) {},
                    onError: function(element) {
                        console.log('\033[42m\033[37m lazy :: \033[41m error loading ' + element.data('src') + ' ');
                    },
                    onFinishedAll: function() {
                        console.log('\033[42m\033[37m lazy :: \033[0m loaded all ');
                    }
                });

                // $(window).on("scroll", toggleNavbar);
                // toggleNavbar(); // Run on page load

                seeWishes();
                @if($addition_logic && in_array('do',$addition_logic))
                    let auth_msg = `<br><br>Hello!<br>Thankyou for trying this page,
                    unfortunately rsvp & wishes can only be filled by guests of our respected bride and groom.<br><br>
                    Even so, please feel free to contact our admin by select order menu <a href='{{url("/")}}'>at beritabaik.co main page</a>`;
                @endif
                $(document).on("click","#form-rsvp-send",function(){
                    @if($addition_logic && in_array('do',$addition_logic))
                        toastr.warning(auth_msg, 'Ooops..', {timeOut: 60000});
                    @else
                        if(document.getElementById('form-rsvp').checkValidity()){
                            console.log('handling :: form-rsvp | validity passed');
                            $('.gla_page_loader_light').show();
                            let name = $('[name="rsvp_name"]').val();
                            let address = $('[name="rsvp_address"]').val();
                            let message = $('[name="wish_message"]').val();
                            let attend = $('input[name="rsvp_attend"]:checked').val();
                            $.ajax({
                                url: 'send-wish&rsvp',
                                headers: {
                                    'x-csrf-token': $('meta[name="csrf-token"]').attr('content'),
                                },
                                type: 'POST',
                                data: JSON.stringify({
                                    sender_name: name,
                                    sender_address: address,
                                    message: message,
                                    attend: attend
                                }),
                                contentType: 'application/json; charset=utf-8',
                                success: (function (data) {
                                    if(data.status){
                                        seeWishes();
                                        document.getElementById('form-rsvp').reset();
                                        toastr.success(data.message, 'Terima kasih ya!', {timeOut: 3000});
                                        document.getElementById("form-rsvp-send").scrollIntoView({
                                            behavior: "smooth", // or "auto"
                                            block: "start" // top of the element
                                        });
                                    }else{
                                        toastr.error(data.message, 'Ooops..', {timeOut: 5000});
                                    }
                                    $('.gla_page_loader_light').hide();
                                }),error:function(xhr,status,error) {
                                    toastr.error(xhr.responseText, 'error [sys]', {timeOut: 5000});
                                    $('.gla_page_loader_light').hide();
                                }
                            });
                        }else{
                            console.log('handling :: form-rsvp | validity 0');
                        }
                    @endif
                });
                
                function seeWishes(){
                    $.ajax({
                        url: "{{ url('/w/'.$code.'/get-wish/v2') }}",
                        type: "GET",
                        success: function(response) {
                            console.log("Data diterima:", response.products);
                            let template = ``;
                            (response.products).forEach((item) => {
                                template += `
                                        <div class="chat_message_wrapper">
                                            <ul class="chat_message">
                                                <li>
                                                    <div class="row">
                                                        <span class="chat_user_txt col-xs-8">`+item.sender_name+`</span>
                                                        <div class="col-xs-4">
                                                            <span class="badge badge-info small">  `+
                                                                (item.attend?`<i class="fas fa-circle-check"></i>&nbsp;&nbsp; hadir`:`tidak hadir`)+
                                                            `</span>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <p>`+item.message+` <span class="chat_message_time">`+item.created_at+`</span> </p>
                                    
                                                </li>
                                            </ul>
                                        </div>`;
                            });
                            $('#table-wish').html(template);
                        },
                        error: function(xhr, status, error) {
                            console.error("Error:", error);
                        }
                    });
                }
            });
        </script>
    </body>
</html>