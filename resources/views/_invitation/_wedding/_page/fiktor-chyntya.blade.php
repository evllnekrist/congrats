<!DOCTYPE html>
<html lang="en">
    <head>
        @include('_invitation._wedding._include.head-1')
        <?php
            $version = "?var=".date("Ymd")."010";
            $qrcode1 = "1210201000643";
            $qrcode2 = "024301022670536";
        ?>
        <link href="{{asset('asset-wedding-1/css/glanz_library.css')}}" rel="stylesheet">
        <link href="{{asset('asset-wedding-1/fonts/themify-icons.css')}}" rel="stylesheet">
        <link href="{{asset('asset-wedding-1/css/glanz_style_montserrat.css').$version}}" rel="stylesheet">
        <link href="{{asset('asset-wedding-1/css/custom.css').$version}}" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;600;900&display=swap" rel="stylesheet">
        <link href="{{asset('asset-wedding-1/fonts/marsha/stylesheet.css')}}" rel="stylesheet">
        <link href="{{asset('asset-main/css/jquery.dataTables.css')}}" rel="stylesheet">
        <link href="{{asset('asset-main/css/toastr.css')}}" rel="stylesheet">
        <?php
            $cdn_link   = "asset-wedding-bg/".$code."/";
        ?>
        <style>
            .text-palette-1{
                color: #ee7071;
            }
            .text-palette-2{
                color: #f4adb3;
            }
            .text-palette-3{
                color: #fddee3;
            }
            .text-palette-4{
                color: #fef5f6;
            }
            .text-palette-5{
                color: #d0ab76;
            }
            .text-palette-6{
                color: #d5eaba;
            }
            .text-palette-7{
                color: #abc94e;
            }

            .text-choco-1{
                color: #956c5a
            }
            .text-choco-2{
                /* color: #6c4331 */
                color: #a47766;
            }
            .text-choco-3{
                color: #392F24;
            }

            .btn-green-light-transp-2, .btn-green-light-transp:hover{
                box-shadow: 0 1.5px 9px 0 rgb(0 0 0 / 20%) !important;
                background: rgba(171, 201, 78, 0.8) !important;
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
                color: #956c5a;
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
                padding-top: 20px;
                padding-bottom: 20px;
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
                text-shadow: 2px 2px 4px #000000;
            }
            .btn-blue-light-transp{
                box-shadow: 0 1.5px 9px 0 rgb(0 0 0 / 60%);
                background: rgba(91, 192, 222, 0.7) !important;
                /* 108,67,49 */
                /* font-weight: 600; */
            }
            .btn-brown-light-transp, .btn-blue-light-transp:hover, .btn-brown-light-transp-2:hover{
                box-shadow: 0 1.5px 9px 0 rgb(0 0 0 / 40%);
                background: rgba(224, 126, 51, 0.8) !important;
                /* 108,67,49 */
                /* font-weight: 600; */
            }
            .btn-brown-light-transp-2, .btn-brown-light-transp:hover{
                box-shadow: 0 1.5px 9px 0 rgb(0 0 0 / 60%) !important;
                background: rgba(48, 34, 29, 0.9) !important;
                font-weight: 600;
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
                padding: 10px 20px;
                margin: 10px 0;
                width: 75%;
                border-radius: 20px;
                background-color: white;
                transform: translateY(0) translateX(-50%);
                text-align: center;
                -webkit-box-shadow: 0 1.5px 9px 0 rgba(0,0,0,0.2);
                -moz-box-shadow: 0 1.5px 9px 0 rgba(0,0,0,0.2);
                box-shadow: 0 1.5px 9px 0 rgba(0,0,0,0.2);
                -webkit-transition: all 0.3s;
                -o-transition: all 0.3s;
                transition: all 0.3s;
            }
            .navbar-disabled {
                pointer-events: none;
                opacity: 0;
            }

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
                <div class="gla_invitation_i_longer gla_invitation_ii gla_image_bck text-palette-5" data-image="{{asset($cdn_link.'images/4.webp')}}">
                    <p style="margin-top:2vh;margin-bottom:2vh" class="ft-shadow-dark">
                        <span class="fix-montserrat-s-b">The Wedding of</span><br><br>
                        <span class="gla_slide_midtitle_m ff-ephesis">Fiktor&nbsp;&nbsp;&&nbsp;&nbsp;Chyntya</span><br><br>
                    </p>
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
                <h6><small>Mengundang Anda untuk menjadi bagian<br>dari hari bahagia kami<br><br><br><br><br></small></h6>

                <button type="button" class="btn btn-green-light-transp-2 gla_wht_txt gla_invitation_open_btn_longer__before_after_custom"
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
                    <br><br><br><br>
                    <audio id="myaudio" controls loop>
                    <!-- dami_im__they_long_to_be_close_to_you.mp3 -->
                        <source src="{{asset($cdn_link.'audios/stephen-sanchez_until-i-found-you.mp3')}}" type="audio/mpeg">
                        <source src="{{asset($cdn_link.'audios/stephen-sanchez_until-i-found-you.mp3')}}" type="audio/ogg">
                        Your browser does not support the audio element.
                    </audio>
                </div>
                <header>
                    <nav class="gla_light_nav gla_transp_nav"  id="navbar">
                        <div class="container">
                            <div class="gla_logo_container clearfix">
                                <div class="gla_logo_txt">
                                    <a href="/" class="gla_logo">Fiktor & Chyntya</a>
                                    <div class="gla_logo_und">03 . 04 . 2025</div>
                                </div>
                            </div>
                            @include('_invitation._wedding._include.nav-2')
                        </div>
                    </nav>
                </header>
                <!-- Slider -->
                <div class="gla_slider gla_image_bck gla_wht_txt gla_fixed"  data-image="{{asset($cdn_link.'images/5.webp')}}" data-stellar-background-ratio="0.8">
                    <!-- <div class="gla_over" data-color="#1e1d2d" data-opacity="0.15"></div> -->
                    <div class="container">
                        <div class="gla_slide_txt gla_slide_center_bottom" style="text-align:right;top:35%;left:-20%">
                            <img src="{{asset($cdn_link.'images/logo-pure.png')}}">
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
                                data-image="{{asset($cdn_link.'images/7.webp')}}">
                        <div class="gla_over" data-color="#282828" data-opacity="0.8"></div>
                        <div class="container text-center">
                            <div class="col gla_round_block">
                                <span class="text-palette-7 gla_slide_midtitle_m ff-ephesis" style="font-size: 20px">Dua menjadi satu</span><br>
                                <span class="gla_wht_txt fix-montserrat-m-sb ft-shadow-soft-reverse">Kamis, 03 April 2025</span><br><br>
                                <div class="text-palette-5 gla_countdown" data-year="2025" data-month="04" data-day="03"></div><br><br>
                            </div>
                            <div class="gla_icon_boxes row">
                                <div class="col-xs-6">
                                    <div class="gla_news_block" style="background-color:rgba(0,0,0,0.6);">
                                        <a href="{{asset($cdn_link.'images/bride.webp')}}">
                                            <img class="lazy" src="{{asset('asset-main/images/image/lazyload-bbc.webp')}}" data-src="{{asset($cdn_link.'images/bride.webp')}}" alt="">
                                        </a>
                                        <span class="gla_news_title-m pd-sd gla_wht_txt"><strong><small>Pdt.Chyntya<br>Mutiara<br>Putri,<br>S.Th</small></strong></span>
                                        <img src="{{asset('asset-wedding-1/images/animations/icons/icon10_wh.gif')}}" style="width:40px!important;"><br><br>
                                        <p class="text-palette-5">
                                            <small class="gla_wht_txt ft-shadow-soft-reverse">putri bungsu dari</small><br>
                                            <span class="fix-montserrat-s-b">Djonianto Lamuye</span>
                                            <br>&<br>
                                            <span class="fix-montserrat-s-b">Melati, S.PAK</span>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-xs-6">
                                    <div class="gla_news_block" style="background-color:rgba(0,0,0,0.6);">
                                        <a href="{{asset($cdn_link.'images/groom.webp')}}">
                                            <img class="lazy" src="{{asset('asset-main/images/image/lazyload-bbc.webp')}}" data-src="{{asset($cdn_link.'images/groom.webp')}}" alt="">
                                        </a>
                                        <span class="gla_news_title-m pd-sd gla_wht_txt"><strong><small>Fiktor<br>Eka<br>Pratama,<br>S.M</small></small></strong></span>
                                        <img src="{{asset('asset-wedding-1/images/animations/icons/icon15_wh.gif')}}" style="width:55px!important;"><br><br>
                                        <p class="text-palette-5">
                                            <small class="gla_wht_txt ft-shadow-soft-reverse">putra sulung dari</small></b><br>
                                            <span class="fix-montserrat-s-b">Putra Jaya Utama</span>
                                            <br>&<br>
                                            <span class="fix-montserrat-s-b">Helmie <small>G. Sera</small></span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section    id="event-detail" class="gla_section gla_image_bck gla_fixed"  data-image="{{asset($cdn_link.'images/mbg4.jpg')}}" data-stellar-background-ratio="0.2">
                        <div class="container text-center">
                                <div class="gla_over" data-color="#ffffff" data-opacity="0.2"></div>
                                <span class="text-subtitle-highlight-2 ff-ephesis" style="font-size: 26px">Hanya oleh karunia Tuhan,<br></span>
                                <span class="fix-montserrat-s-b"><span class="text-subtitle-highlight-1">kami dengan hormat meminta<br></span><span class="text-subtitle-highlight-1">kehadiran Anda</span></span><br><br><br><br>
                                <div class="gla_icon_boxes row justify-content-center">
                                    <div class="col-sm-12 gla_news_block">
                                        <span class="gla_news_img">
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3986.806913414784!2d113.88247697496777!3d-2.2262457977540975!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dfcb31376666be9%3A0xaba517e9bf60728d!2sGereja%20Sinar%20Kasih!5e0!3m2!1sen!2sid!4v1742369051086!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                        </span>
                                        <p>
                                            <span class="gla_slide_midtitle_m ff-ephesis ff-ephesis" style="margin-bottom: 0px">Peneguhan dan Pemberkatan Nikah</span>
                                        </p>
                                        <p>
                                            <a href="hhttps://maps.app.goo.gl/vgndgmaqCV2ee7m5A" class="fix-montserrat-sm-b text-choco-2"><b>GKE Sinar Kasih</b></a>
                                            <br>Jl. G.obos XII – Palangka Raya
                                        </p>
                                        <p>
                                            <span class="fix-montserrat-sm-b text-choco-2">Kamis, 3 April 2025</span><br><br>
                                            <span class="label label-default">08.00 WIB s/d selesai</span>
                                        </p>
                                    </div>
                                    <div class="col-sm-6 gla_news_block">
                                        <span class="gla_news_img">
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3986.8522992459098!2d113.92329547454585!3d-2.209403797771055!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dfcb25e914da077%3A0xa188263c11d97f15!2sGPU%20Tambun%20Bungai!5e0!3m2!1sen!2sid!4v1742369244335!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                        </span>
                                        <p>
                                            <span class="gla_slide_midtitle_m ff-ephesis ff-ephesis" style="margin-bottom: 0px">Resepsi</span><br><br><br>
                                        </p>
                                        <p>
                                            <a href="https://maps.app.goo.gl/pumRCRzzmjDXUb479" class="fix-montserrat-sm-b text-choco-2"><b>GPU. Tambun Bungai</b></a>
                                            <br>Jl. W. Sudirohusodo – Palangka Raya
                                        </p>
                                        <p>
                                            <span class="fix-montserrat-sm-b text-choco-2">Kamis, 3 April 2025</span><br><br>
                                            <span class="label label-default">12.00 WIB s/d selesai</span>
                                        </p>
                                    </div>
                                    <div class="col-sm-6 gla_news_block">
                                        <span class="gla_news_img">
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3986.8522992459098!2d113.92329547454585!3d-2.209403797771055!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dfcb25e914da077%3A0xa188263c11d97f15!2sGPU%20Tambun%20Bungai!5e0!3m2!1sen!2sid!4v1742369244335!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                        </span>
                                        <p>
                                            <span class="gla_slide_midtitle_m ff-ephesis ff-ephesis" style="margin-bottom: 0px">Ibadah Ucapan Syukur</span>
                                        </p>
                                        <p>
                                            <a href="https://maps.app.goo.gl/pumRCRzzmjDXUb479" class="fix-montserrat-sm-b text-choco-2"><b>GPU. Tambun Bungai</b></a>
                                            <br>Jl. W. Sudirohusodo – Palangka Raya
                                        </p>
                                        <p>
                                            <span class="fix-montserrat-sm-b text-choco-2">Kamis, 3 April 2025</span><br><br>
                                            <span class="label label-default">15.00 WIB s/d selesai</span>
                                        </p>
                                    </div>
                                </div>
                        </div>
                    </section>
                    <section    id="event-detail" class="gla_section gla_image_bck gla_fixed"  data-image="{{asset($cdn_link.'images/mbg2.webp')}}" data-stellar-background-ratio="0.8">
                        <div class="container text-center">
                            <div class="gla_icon_boxes row">
                                <div class="col-12">
                                    <div class="gla_news_block pd-md text-choco-2" style="background-color:rgba(0,0,0,0.9);">
                                        <span class="fix-montserrat-sm-b">Turut mengundang:</span><br><br>
                                        <table class="table no-border mx-auto small">
                                            <tbody>
                                                <tr>
                                                    <td><b>Pihak mempelai wanita:</b></td>
                                                    <td><b>Pihak mempelai laki-laki:</b></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2"><br><br></td>
                                                </tr>
                                                <tr>
                                                    <td style="vertical-align: top">
                                                        Hermin Ganti<br>
                                                        Nirwan I. Bahat, S.H<br>
                                                        Senimardianto, S.Pd<br>
                                                        Marjani<br>
                                                        Dody Hartito, S.Pd, M.Si<br>
                                                        Pelle Septin I. Bahat, Amd<br>
                                                        Herry Apri Sanjaya Lamuye, S. Kom<br>
                                                        Riadi, Amd<br>
                                                    </td>
                                                    <td style="vertical-align: top">
                                                        Arius Fs<br>
                                                        Setia Jaya, S. Km<br>
                                                        Drs. Andreas Sarupih<br>
                                                        Pdt. Berkat Harsen Adak, S.Th<br>
                                                        Ipda. Dominggus Kanasius Sera, S.Sos<br>
                                                        dr. Petrik aqrasvawinata<br>
                                                        Gimmak Bulinga, S.Sos<br>
                                                        Ganden, S.Pd<br>
                                                        Rodihartono Dalin Sari, S.P, S.Pd<br>
                                                        Walter H.Tawat<br>
                                                        Yanto Dinai Lento<br>
                                                        Yusef Rasa Breang<br>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section    id="wishes" class="gla_section">
                        <div class="row text-left pd-md">
                            <table class="table table-sm table-borderless table-striped fix-montserrat-s" style="width:80%" id="table-wish">
                                <thead>
                                    <tr class="text-text-blue-baby">
                                        <th width="25%">Pengirim</th>
                                        <th width="75%">Harapan</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </section>
                    <section    id="wishes2" class="gla_section gla_image_bck gla_fixed" data-stellar-background-ratio="0.8" data-image="{{asset($cdn_link.'images/6.webp')}}">
                        <div class="gla_over" data-color="#282828" data-opacity="0.1"></div>
                        <div class="container text-left">
                            <form id="form-wish" onsubmit="return false;">
                                <table>
                                    <tr>
                                        <td style="width: 80%">
                                            <p class="text-choco-3" style="font-size:12px;text-align:right"><b>Doa dan harapanmu<br>sangat berarti untuk kami<br>dalam semangat memulai<br>perjalanan baru ini</b></p>
                                        </td>
                                        <td style="width: 20%">
                                            <img src="{{asset($cdn_link.'images/ani-write.gif')}}" data-bottom-top="@src:{{asset($cdn_link.'images/ani-write.gif')}}" height="80" alt="">
                                        </td>
                                    </tr>
                                </table>
                                <br><br>
                                <div class="row gla_wht_txt">
                                    <div class="col-sm-6"><br><br>
                                        <span class="fix-montserrat-s-b ft-shadow">Pengirim</span>
                                        <input type="text" name="wish_name" maxlength="50" spellcheck="false" class="form-control in-focus-white-light" value="{{$invite}}" required>
                                    </div>
                                    <div class="col-sm-6"><br><br>
                                        <span class="fix-montserrat-s-b ft-shadow">Harapan</span>
                                        <textarea name="wish_message" maxlength="500" spellcheck="false" class="form-control in-focus-white-light" required></textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <input type="submit" class="btn btn-green-light-transp gla_wht_txt" id="form-wish-send" value="Kirim">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </section>
                    <section    id="gift_qrcode" class="gla_section">
                        <div class="container-fluid text-center">
                            <div class="container text-center">
                                <span class="fix-montserrat-m-b highlight-2-light">Wedding Gift</span><br><br>
                                <span class="text-choco-1"><span class="fix-montserrat-m-b ff-ephesis">Tanpa mengurangi rasa hormat,</span><span class="fix-montserrat-xs-b"><br>untuk tamu undangan yang bersedia memberikan tanda cinta, bisa melalui:</span></span>
                                <p style="height:5vh"></p>
                                <div class="gla_icon_boxes row justify-content-center">
                                    {{-- <div class="col-2"></div> --}}
                                    <div class="col-xs-6">
                                        <div class="gla_news_block">
                                            <span class="gla_news_img" style="height:auto!important"><br>
                                                <a href="{{asset($cdn_link.'images/bri.jpg')}}" target="_blank">
                                                    <img src="{{asset($cdn_link.'images/bri.jpg')}}" download="bri.jpg"
                                                    style="height:15vh;width:15vh">
                                                </a>
                                            </span>
                                            <p onclick="copy_to_clipboard('{{$qrcode2}}')">
                                                <span class="fix-montserrat-s-b">
                                                    <label class="text-success">{{$qrcode2}}<br>a/n Chyntya Mutiara Putri</label>
                                                    <i class="fa fa-clipboard text-secondary" aria-hidden="true" title="copy qrcode"></i>
                                                    <br><small>[copy]</small>
                                                </span>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-xs-6">
                                        <div class="gla_news_block">
                                            <span class="gla_news_img" style="height:auto!important"><br>
                                                <a href="{{asset($cdn_link.'images/bpk.png')}}" target="_blank">
                                                    <img src="{{asset($cdn_link.'images/bpk.png')}}" download="bpk.png"
                                                    style="height:15vh;width:15vh">
                                                </a>
                                            </span>
                                            <p onclick="copy_to_clipboard('{{$qrcode1}}')">
                                                <span class="fix-montserrat-s-b">
                                                    <label class="text-success">{{$qrcode1}}<br>a/n Chyntya Mutiara Putri</label>
                                                    <i class="fa fa-clipboard text-secondary" aria-hidden="true" title="copy qrcode"></i>
                                                    <br><small>[copy]</small>
                                                </span>
                                            </p>
                                        </div>
                                    </div>
                                    {{-- <div class="col-2"></div> --}}
                                </div>
                            </div>
                        </div>
                    </section>
                    <section    id="rsvp" class="gla_section gla_image_bck gla_fixed gla_wht_txt" data-stellar-background-ratio="0.8" data-image="{{asset($cdn_link.'images/2.webp')}}">
                        <div class="gla_over" data-color="#282828" data-opacity="0.65"></div>
                        <div class="container">{{-- text-right --}}
                            <div class="container-fluid">
                                <div class="text-right">
                                    <img src="{{asset($cdn_link.'images/ani-rsvp.gif')}}" data-bottom-top="@src:{{asset($cdn_link.'images/ani-rsvp.gif')}}" height="100" alt="">
                                </div>
                                <strong class="ff-ephesis" style="font-size: 18px">
                                    Tidak sabar<br>untuk sambut hari bahagia kami bersamamu.<br>Di bawah ini silahkan mengkonfirmasi<br>kehadiran Anda, terima kasih.
                                </strong>
                                <form id="form-rsvp" onsubmit="return false;">
                                    <div class="row">
                                        <div class="col-sm-8"><br>
                                            <span class="fix-montserrat-s-b">Nama</span>
                                            <input type="text" name="rsvp_name" maxlength="50" spellcheck="false" class="form-control form-opacity in-focus-white-light" value="{{$invite}}" required>
                                        </div>
                                        <div class="col-sm-4"><br>
                                            <span class="fix-montserrat-s-b">Alamat</span>
                                            <input type="text" name="rsvp_address" class="form-control form-opacity in-focus-white-light" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12"><br>
                                            <span class="fix-montserrat-s-b">Apakah kamu datang?</span><br>
                                            <input type="radio" name="rsvp_attend" value="1" required>
                                            <small>Ya, tentu!</small><br>
                                            <input type="radio" name="rsvp_attend" value="0">
                                            <small>Maaf, tidak dapat hadir</small>
                                        </div>
                                        <div class="col-md-12" style="padding-top:50px">
                                            <input type="submit" class="btn btn-brown-light-transp-2 text-choco-1" id="form-rsvp-send" value="Simpan">
                                        </div>
                                        @if($display['rsvp'] == 1)
                                        <div class="panel panel-default" style="margin-top:50px">
                                            <div class="panel-heading">
                                                <h5 class="panel-title">
                                                    <a class="ft-dark" data-toggle="collapse" href="#table-rsvp-wrap">Lihat RSVP</a>
                                                </h5>
                                            </div>
                                            <div id="table-rsvp-wrap" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <table class="table table-sm table-borderless table-striped ft-dark" id="table-rsvp" width="100%">
                                                        <thead>
                                                            <tr>
                                                                <th width="40%">Pengirim</th>
                                                                <th width="40%">Alamat</th>
                                                                <th width="20%">Kehadiran</th>
                                                            </tr>
                                                        </thead>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        @endif
                                    </div>
                                </form>
                            </div>
                        </div>
                    </section>
                    <section    id="gallery">
                        <div class="container text-center"><br>
                            <span class="fix-montserrat-m text-choco-1">Gallery</span><br><br>
                            <?php
                                $gallery_items = array(
                                    array('name'=>'1','class'=>'col-xs-4'),
                                    array('name'=>'9','class'=>'col-xs-8'),
                                    array('name'=>'4','class'=>'col-xs-4'),
                                    array('name'=>'5','class'=>'col-xs-4'),
                                    array('name'=>'6','class'=>'col-xs-4'),
                                    array('name'=>'2','class'=>'col-xs-6'),
                                    array('name'=>'3','class'=>'col-xs-6'),
                                    array('name'=>'7','class'=>'col-xs-6'),
                                    array('name'=>'10','class'=>'col-xs-6'),
                                    array('name'=>'11','class'=>'col-xs-4'),
                                    array('name'=>'12','class'=>'col-xs-4'),
                                    array('name'=>'13','class'=>'col-xs-4'),
                                );
                            ?>

                            <div class="d-flex flex-wrap gap-3">
                                @foreach($gallery_items as $item)
                                <div class="{{$item['class']}} text-center">
                                    <a href="{{asset($cdn_link.'images/'.$item['name'].'.webp')}}" class="lightbox">
                                        <img src="{{asset($cdn_link.'images/'.$item['name'].'.webp')}}" class="img-fluid"  alt="img-{{$item['name']}}">
                                    </a><br><br>
                                </div>
                                @endforeach
                            </div>

                        </div><br><br>
                    </section>
                    <section    id="quote" class="gla_image_bck gla_fixed h-fix-img" data-stellar-background-ratio="0.8" data-image="{{asset($cdn_link.'images/9.webp')}}">
                        <!-- <div class="gla_over" data-color="#ffff" data-opacity="0.2"></div> -->
                        <div class="container text-right pd-md-h">
                            <span class="fix-montserrat-s-b gla_wht_txt ft-shadow" style="font-size:65%"><i>
                                <sup>4</sup> <span>&nbsp;&nbsp;Aku mengucap syukur kepada Allahku<br>setiap kali aku mengingat engkau dalam doaku.</span>
                            </i></span><br><br><br><br><br>
                            <p class="gla_subtitle text-choco-3 ft-shadow"><b>— Filemon 1:4</b></p>
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
            function toggleNavbar() {
                if ($(window).scrollTop() === 0) {
                    $("#navbar").addClass("navbar-disabled");
                } else {
                    $("#navbar").removeClass("navbar-disabled");
                }
            }
            function executeInv(){
                $("body").removeClass("bg-navy");
                document.getElementById('myaudio').play();
                document.getElementById('myaudio').volume = .35;
                $('#gla_welcome').remove();
                $('#gla_welcome2').remove();
                $('#gla_welcome3').remove();
                $('#gla_page').show();
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

                $(window).on("scroll", toggleNavbar);
                toggleNavbar(); // Run on page load

                if("{{$display['rsvp']}}"  == 1){
                    seeRSVP();
                }
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
                            let attend = $('input[name="rsvp_attend"]:checked').val();
                            $.ajax({
                                url: 'send-rsvp',
                                headers: {
                                    'x-csrf-token': $('meta[name="csrf-token"]').attr('content'),
                                },
                                type: 'POST',
                                data: JSON.stringify({
                                    sender_name: name,
                                    sender_address: address,
                                    attend: attend
                                }),
                                contentType: 'application/json; charset=utf-8',
                                success: (function (data) {
                                    if(data.status){
                                        if("{{$display['rsvp']}}"  == 1){
                                            seeRSVP();
                                        }
                                        toastr.success(data.message, 'Terima kasih ya!', {timeOut: 3000});
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

                $(document).on("click","#form-wish-send",function(){
                    @if($addition_logic && in_array('do',$addition_logic))
                        toastr.warning(auth_msg, 'Ooops..', {timeOut: 60000});
                    @else
                        if(document.getElementById('form-wish').checkValidity()){
                            console.log('handling :: form-wish | validity passed');
                            $('.gla_page_loader_light').show();
                            let name = $('[name="wish_name"]').val();
                            let message = $('[name="wish_message"]').val();
                            $.ajax({
                                url: 'send-wish',
                                headers: {
                                    'x-csrf-token': $('meta[name="csrf-token"]').attr('content'),
                                },
                                type: 'POST',
                                data: JSON.stringify({
                                    sender_name: name,
                                    message: message
                                }),
                                contentType: 'application/json; charset=utf-8',
                                success: (function (data) {
                                    console.log(data);
                                    if(data.status){
                                        seeWishes();
                                        toastr.success(data.message, 'Terima kasih ya!', {timeOut: 3000});
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
                            console.log('handling :: form-wish | validity 0');
                        }
                    @endif
                });

                function seeRSVP(){
                    $('#table-rsvp').DataTable().clear().destroy();
                    $('#table-rsvp').DataTable({
                        processing: true,
                        serverSide: true,
                        paging: false,
                        ajax: '{{url("/w/".$code."/get-rsvp")}}',
                        columns: [
                            {data: 'sender_name', name: 'sender_name'},
                            {data: 'sender_address', name: 'sender_address'},
                            {data: 'attend', name: 'attend'},
                        ],
                        columnDefs: [
                            {
                                width: '80px',
                                targets: 2,
                                render: function(data, type, full, meta) {
                                    let temp_class = '';
                                    console.log(data, full);
                                    if(data == 1){
                                        console.log('check');
                                        return  '<center><span><i class="ti ti-check text-primary"></i></span></center>';
                                    }else{
                                        console.log('close');
                                        return  '<center><span><i class="ti ti-close text-danger"></i></span></center>';
                                    }
                                },
                            },
                        ],
                    });
                }

                function seeWishes(){
                    $('#table-wish').DataTable().clear().destroy();
                    $('#table-wish').DataTable({
                        processing: true,
                        serverSide: true,
                        paging: false,
                        ajax: '{{url("/w/".$code."/get-wish")}}',
                        columns: [
                            {data: 'sender_name', name: 'sender_name'},
                            {data: 'message', name: 'message'},
                        ],
                        sDom: '<"top"flp>rt<"bottom"i><"clear">'
                    });
                }
            });
        </script>
    </body>
</html>