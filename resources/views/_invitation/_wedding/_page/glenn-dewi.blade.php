<!DOCTYPE html>
<html lang="en">
    <head>
        @include('_invitation._wedding._include.head-1')
        <?php
            $version = "?var=".date("Ymd")."009";
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
        <?php 
            $cdn_link   = "asset-wedding-bg/".$code."/";
        ?>
        <style>
            .highlight-1{
                background-color: black;
                color: white;
                padding: 15px 30px;
            }
            .highlight-2{
                background: rgba(255,255,255,0.8) !important;
                box-shadow: 0 1.5px 9px 0 rgb(0 0 0 / 80%);
                color: #956c5a;
                padding: 5px 30px;
                line-height: 2;
            }
            .highlight-2-bold{
                background: rgba(255,255,255,1) !important;
                box-shadow: 0 1.5px 9px 0 rgb(0 0 0 / 20%);
                color: #956c5a;
                padding: 5px 30px;
                line-height: 2;
            }
            .text-subtitle-highlight-1{
                background-color: white;
                color: black;
                padding: 5px 30px;
            }
            .text-subtitle-highlight-2{
                background-color: black;
                color: white;
                padding: 5px 30px;
            }
            .shadow_block{
                -webkit-box-shadow: 0 1.5px 9px 0 rgb(0 0 0 / 40%);
                box-shadow: 0 1.5px 9px 0 rgb(0 0 0 / 40%);
            }
            .text-choco-1{
                color: #956c5a
            }
            .text-choco-2{
                color: #6c4331
            }
            .text-choco-3{
                color: #392F24
            }
            .text-grey-1{
                color: #B4B6B2
            }
            .text-maroon-1{
                color: #82151b
            }
            .text-creme-1{
                color: #e8ba88
            }
            .text-creme-2{
                color: #d6b08c
            }
            .text-lime{
                color: #a1c260
            }
            .text-rose-sh{
                color: #4d0026;
                text-shadow: 1.2px 2px #e60073;
            }
            .pd-md-2-downer{
                padding-top: 55vh;
                padding-bottom: 45vh;
            }  
            .pd-md-2-downer-per-three{
                padding-top: 5vh;
                padding-bottom: 60vh;
            }  
            .pd-md-2{
                padding-top: 20vh;
                padding-bottom: 20vh;
            }  
            .pd-md{
                padding-top: 20px;
                padding-bottom: 20px;
            }  
            .pd-md-h{
                padding: 80rem 20px 20px 20px;
            }
            .gla_round_block{
                margin-top: 0px !important;
            }
            .ft-shadow{
                color: white;
                text-shadow: 2px 2px 4px #000000;
            }
            .btn-white-light{
                box-shadow: 0 1.5px 9px 0 rgb(0 0 0 / 40%);
                background-color: white !important;
                font-weight: 600;
            }
            .btn-brown-light-transp{
                box-shadow: 0 1.5px 9px 0 rgb(0 0 0 / 40%);
                background: rgba(108,67,49,0.4) !important;
                font-weight: 600;
            }
            .in-focus-white-light{
                background: rgba(255,255,255,0.5) !important;
                color: #6c4331 !important;
            }
            .in-focus-white-light:hover, .in-focus-white-light:active, .in-focus-white-light:after{
                background: rgba(255,255,255,0.9) !important;
            }
            .ft-shadow-soft{
                color: white;
                text-shadow: 2px 2px 4px #333333;
                /* #737373; */
            }
            .boldme{
                font-weight: 700;
            }
            .geser-dikit-gan{
                padding-left:20px;
            }
        </style>
    </head>
    <body class="bg-navy">
        <!-- Preloader -->
            <div class="gla_page_loader gla_image_bck gla_wht_txt" data-color="#181d23">
                <div class="gla_loader">
                    <p><img src="{{asset($cdn_link.'images/loading6.gif')}}" height="150" alt=""></p>
                    <p>Loading ...</p>
                </div>
            </div>
        <!-- Preloader End-->
        <!-- OPEN -->
            <div class="gla_invitation_container_longer" id="gla_welcome">
                <div class="gla_invitation_i_longer gla_invitation_ii gla_image_bck" data-image="{{asset($cdn_link.'images/31_b.jpg')}}"> 
                    <p style="margin-top:18vh;margin-bottom:2vh" class="ft-shadow-soft">               
                        <span class="fix-montserrat-m">The Wedding of</span><br>
                        <span class="fix-montserrat-m-b">Glenn & Dewi</span><br><br>
                    </p>
                    <div class="row">
                        @if($invite)
                            <h6 class="gla_wht_txt">Dear {{$invite}},</h6>
                        @endif
                        <span class="fix-montserrat-xs-b highlight-2">we would like to invite you to be part of</span><br>
                        <span class="fix-montserrat-xs-b highlight-2">our happy day !</span>
                    </div>
                </div>
            </div>
            <button type="button" class="btn btn-brown-light-transp text-choco-1 gla_invitation_open_btn_longer" onclick="executeInv()">Open Invitation</button> 
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
                        <source src="{{asset($cdn_link.'audios/pengungkapan_hatimu_final_mastered.wav')}}" type="audio/mpeg">
                        <source src="{{asset($cdn_link.'audios/pengungkapan_hatimu_final_mastered.wav')}}" type="audio/ogg">
                        Your browser does not support the audio element.
                    </audio>
                </div>
                <header>      
                    <nav class="gla_light_nav gla_transp_nav">
                        <div class="container">
                            <div class="gla_logo_container clearfix">
                                <div class="gla_logo_txt">
                                    <a href="/" class="gla_logo">Glenn & Dewi</a>
                                    <div class="gla_logo_und">December 11, 2022</div>
                                </div>
                            </div>
                            @include('_invitation._wedding._include.nav-2')
                        </div>
                    </nav>
                </header>
                <!-- Slider -->
                <div class="gla_slider gla_image_bck gla_wht_txt gla_fixed"  data-image="{{asset($cdn_link.'images/3.jpg')}}" data-stellar-background-ratio="0.8">
                    <!-- <div class="gla_over" data-color="#1e1d2d" data-opacity="0.15"></div> -->
                    <div class="container">
                        <div class="gla_slide_txt gla_slide_center_bottom text-center">
                            <!-- <div class="gla_slide_midtitle">G & D</div> -->
                        </div>
                    </div>
                    <a class="gla_scroll_down gla_go" href="#gla_content">
                        <b></b>Scroll
                    </a>
                </div>
                <!-- Slider End -->
                <!-- Main -->
                
                <section id="gla_content" class="gla_content">
                    <section class="gla_section gla_image_bck" data-image="{{asset($cdn_link.'images/timeline-bg.jpg')}}">
                        <div class="container text-center" style="padding-bottom:20vh!important">
                            <p><img src="{{asset('asset-wedding-1/images/animations/flowers.gif')}}" data-bottom-top="@src:{{asset('asset-wedding-1/images/animations/flowers.gif')}}" height="150" alt=""></p>
                            <span class="fix-montserrat-m">United in love and grace</span><br>
                            <span class="fix-montserrat-m-b">Groom & Bride</span><br>
                            <div class="row gla_auto_height shadow_block" style="margin-top:8vh;background-color:rgb(238, 238, 238)!important;">
                                <div class="col-xs-6" >
                                    <div class="gla_simple_block">
                                        <h2 class="text-lime boldme">Glenn Adhi<br>Ekaputra</h2><br><br>
                                        <p>
                                            1st son of<br><br>
                                            <span class="fix-montserrat-s-b"><img src="{{asset($cdn_link.'images/cross1.png')}}" style="height:16px;margin-right:8px"> Bpk Andreas Setijadi</span>
                                            <br>&<br>
                                            <span class="fix-montserrat-s-b">Ibu Jeane Windarti</span><br><br>
                                        </p>
                                        <a href="https://www.instagram.com/glenn_adhi" target="_blank"><i class="ti ti-instagram gla_icon_box"></i></a>
                                    </div>
                                </div>
                                <div class="col-xs-6 gla_image_bck" data-image="{{asset($cdn_link.'images/groom.jpg')}}"></div>
                            </div>
                            <div class="row gla_auto_height shadow_block" style="background-color:rgb(238, 238, 238)!important;">
                                <div class="col-xs-6 gla_image_bck" data-image="{{asset($cdn_link.'images/bride.jpg')}}"></div>
                                <div class="col-xs-6">
                                    <div class="gla_simple_block">
                                        <h2 class="text-lime boldme">Dewi<br>Kumalasari</h2><br><br>
                                        <p>
                                            3rd daughter of<br><br>
                                            <span class="fix-montserrat-s-b">Bpk Suwarno YS</span>
                                            <br>&<br>
                                            <span class="fix-montserrat-s-b">Ibu Sutiyah</span><br>
                                        </p>
                                        <a href="https://www.instagram.com/kumalasari510" target="_blank"><i class="ti ti-instagram gla_icon_box"></i></a>
                                    </div>
                                </div>
                            </div>
                    </section>
                    <section    id="profile" class="gla_section gla_slider gla_image_bck gla_fixed pd-md-2-downer-per-three" data-stellar-background-ratio="0.8" 
                                data-image="{{asset($cdn_link.'images/5_slim.jpg')}}">  
                        <div class="gla_slider_flower">
                            <div class="gla_slider_flower_c1 gla_slider_flower_item" data-start="top:0px; left:0px" data-200-start="top:-170px; left:-200px"></div>
                            <div class="gla_slider_flower_c2 gla_slider_flower_item" data-start="top:0px; right:0px" data-200-start="top:-170px; right:-200px"></div>
                            <div class="gla_slider_flower_c3 gla_slider_flower_item" data-start="bottom:0px; right:0px" data-200-start="bottom:-120px; right:-220px"></div>
                            <div class="gla_slider_flower_c4 gla_slider_flower_item" data-start="bottom:0px; left:0px" data-200-start="bottom:-120px; left:-400px"></div>
                            <div class="gla_slider_flower_c5 gla_slider_flower_item" data-start="top:0px; left:50%" data-200-start="top:-170px; left:50%"></div>
                            <div class="gla_slider_flower_c6 gla_slider_flower_item" data-start="bottom:0px; left:50%" data-200-start="bottom:-120px; left:70%"></div>
                        </div>
                        <div class="gla_over" data-color="#000000" data-opacity="0.2"></div>
                        <div class="container text-center">
                            <div class="col gla_round_block gla_wht_txt">
                                <div class="gla_slide_midtitle_m ft-shadow-soft"><smaller>Saturday,<br>26 March 2022</smaller></div>
                                <div class="gla_countdown" data-year="2022" data-month="3" data-day="26"></div><br><br>
                            </div>
                        </div>
                    </section>
                    <section    id="event-detail" class="gla_section gla_image_bck gla_fixed"  data-image="{{asset($cdn_link.'images/timeline-bg.jpg')}}" data-stellar-background-ratio="0.8">
                        <div class="container text-center">     
                            <!-- <div class="gla_over" data-color="#ffffff" data-opacity="0.2"></div>    -->
                            <div class="container text-center">                
                                <span class="fix-montserrat-m text-subtitle-highlight-2">By the grace of God,</span><br>
                                <span class="fix-montserrat-s-b"><i>we are pleased to announce our wedding to you,<br>our family and friends</i><br><br><br><br>
                                <div class="gla_icon_boxes row justify-content-center">
                                    <div class="col-sm-6 col-xs-12">
                                        <a href="#" class="gla_news_block">
                                            <span class="gla_news_img">
                                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.77290498242!2d106.91047731429933!3d-6.161161662098781!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e698acd2c003f5d%3A0xf12fc79030493250!2sGKI%20Gading%20Indah%2C%20Jl.%20Gading%20Indah%20III%2C%20RT.11%2FRW.12%2C%20Pegangsaan%20Dua%2C%20Kelapa%20Gading%2C%20North%20Jakarta%20City%2C%20Jakarta%2014250!5e0!3m2!1sen!2sid!4v1645706517816!5m2!1sen!2sid" 
                                                    width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                            </span>
                                            <span class="gla_news_title">Holy Matrimony</span>
                                            <p>
                                                <span class="fix-montserrat-sm-b text-success">GKI Gading Indah </span><br><br><br>
                                                Jl. Gading Indah III Blok NF1 No. 20, <br>RT.11/RW.12, Pegangsaan Dua, <br>North Jakarta City, Jakarta<br><br><br>
                                                <span class="fix-montserrat-s-b text-success">Saturday, 26 March 2022</span><br><br>
                                                <span class="label label-success">at 09:00 AM</span>
                                            </p>
                                        </a>
                                    </div> 
                                    <div class="col-sm-6 col-xs-12">
                                        <a href="#" class="gla_news_block">
                                            <span class="gla_news_img">
                                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.836431449461!2d106.89038911429931!3d-6.152655762019448!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f540eb816041%3A0xfefb8647c5efc73a!2sAngke%20Restaurant%20-%20Kelapa%20Gading!5e0!3m2!1sen!2sid!4v1645708753298!5m2!1sen!2sid" 
                                                    width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                            </span>
                                            <span class="gla_news_title">Wedding Reception</span>
                                            <p>
                                                <span class="fix-montserrat-sm-b text-info">Angke Restaurant - <br>Kelapa Gading</span><br><br>
                                                Ruko MOI, Jl. Boulevard Raya No.33, <br>RT.18/RW.8, Kelapa Gading, <br>North Jakarta City, Jakarta<br><br><br>
                                                <span class="fix-montserrat-s-b text-info">Saturday, 26 March 2022</span><br><br>
                                                <span class="label label-info">at 12:00 AM</span>
                                            </p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section    id="live-streaming" class="gla_section gla_image_bck" data-color="#ecf2f0">
                        <div class="container">
                            <div class="row">
                                <span class="fix-montserrat-m">Live Streaming</span><br><br>
                                <div class="col-sm-4 col-xs-12 gla_image_bck" data-color="#fff">
                                    <div class="gla_simple_block">
                                        <h2>PEMBERKATAN <br>GLENN & DEWI</h2>
                                        <p class="text-muted">Sabtu, 26 Maret 2022, <br>PUKUL 09.00</p><br><br><br>
                                        <a href="https://www.youtube.com/watch?v=y81yIo1_3o8">live at <i class="ti ti-youtube gla_icon_box"></i></a>
                                    </div>
                                </div>
                                <iframe class="col-sm-8 col-xs-12 gla_image_bck" width="100%" style="min-height:300px" src="https://www.youtube.com/embed/y81yIo1_3o8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>
                    </section>
                    <section    id="rsvp" class="gla_section gla_image_bck gla_wht_txt gla_fixed" data-stellar-background-ratio="0.8" data-image="{{asset($cdn_link.'images/9.jpg')}}">
                        <div class="gla_over" data-color="#282828" data-opacity="0.8"></div>
                        <div class="container text-right">
                            <p><img src="{{asset('asset-wedding-1/images/animations/rsvp_wh.gif')}}" data-bottom-top="@src:{{asset('asset-wedding-1/images/animations/rsvp_wh.gif')}}" height="150" alt=""></p>         
                            <p class="fix-montserrat-s">Can't wait to welcome our happy day with you. <br>At below you can confirm your attendance, thank you.</p>
                            <form id="form-rsvp" onsubmit="return false;">
                                <div class="row">
                                    <div class="col-sm-6"><br>
                                        <span class="fix-montserrat-s-b">Name</span>
                                        <input type="text" name="rsvp_name" maxlength="50" spellcheck="false" class="form-control form-opacity" value="{{$invite}}" required>
                                    </div>
                                    <div class="col-sm-6"><br>
                                        <span class="fix-montserrat-s-b">Address</span>
                                        <input type="text" name="rsvp_address" maxlength="50" spellcheck="false" class="form-control form-opacity" required>
                                    </div>
                                    <div class="col-md-12"><br>
                                        <span class="fix-montserrat-s-b">Will you come?</span><br>
                                        <input type="radio" name="rsvp_attend" value="1" required>
                                        <small>Yes, of course!</small><br>
                                        <input type="radio" name="rsvp_attend" value="0">
                                        <small>Sorry, I cant be there.</small>
                                    </div>
                                    <div class="col-md-12" style="padding-top:50px">
                                        <input type="submit" class="btn submit" id="form-rsvp-send" value="save">
                                    </div>
                                    @if($display['rsvp'] == 1)
                                    <div class="panel panel-default" style="margin-top:50px">
                                        <div class="panel-heading">
                                            <h5 class="panel-title">
                                                <a class="ft-dark" data-toggle="collapse" href="#table-rsvp-wrap">Look for RSVP list</a>
                                            </h5>
                                        </div>
                                        <div id="table-rsvp-wrap" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <table class="table table-sm table-borderless table-striped ft-dark" id="table-rsvp" width="100%">
                                                    <thead>
                                                        <tr>
                                                            <th width="40%">Sender</th>
                                                            <th width="40%">Address</th>                              
                                                            <th width="20%">Presence Status</th>
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
                    </section>
                    <section    id="wishes" class="gla_section">
                        <div class="row text-left pd-md">
                            <table class="table table-sm table-borderless table-striped fix-montserrat-s" style="width:80%" id="table-wish">
                                <thead>
                                    <tr class="text-blue">
                                        <th width="25%">Sender</th>                              
                                        <th width="75%">Wishes</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </section>
                    <section    id="wishes2" class="gla_section gla_image_bck gla_fixed" data-stellar-background-ratio="0.8" data-image="{{asset($cdn_link.'images/22.jpg')}}">
                        <!-- <div class="gla_over" data-color="#282828" data-opacity="0.65"></div> -->
                        <div class="container text-left">
                            <form id="form-wish" onsubmit="return false;">
                                <p class="fix-montserrat-s-b">
                                    <span class="highlight-2-bold">Leave us your beautiful wishes</span><br>
                                    <span class="highlight-2-bold">and most sincere prayers here&nbsp;</span><br>
                                    <span class="highlight-2-bold">as we are so excited to embark</span><br>
                                    <span class="highlight-2-bold">on this new journey together ~</span></p>    
                                <div class="row">
                                    <div class="col-sm-6"><br>
                                        <span class="fix-montserrat-s-b ft-shadow-soft">Sender</span>
                                        <input type="text" name="wish_name" maxlength="50" spellcheck="false" class="form-control in-focus-white-light" value="{{$invite}}" required>
                                    </div>
                                    <div class="col-sm-6"><br>
                                        <span class="fix-montserrat-s-b ft-shadow-soft">Wishes</span>
                                        <textarea name="wish_message" maxlength="500" spellcheck="false" class="form-control in-focus-white-light" required></textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <input type="submit" class="btn submit btn-white-light text-choco-3" id="form-wish-send" value="send">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </section>
                    <section    id="gallery" class="gla_section gla_image_bck gla_fixed gla_wht_txt" data-stellar-background-ratio="0" 
                                data-image="{{asset($cdn_link.'images/white-bg.jpg')}}">
                        <div class="container text-center"><br>
                            <span class="fix-montserrat-m text-choco-1">Gallery</span><br><br>
                            <div class="gla_slider_carousel">
                                <?php
                                    $gallery_items = array('1','2','3','4','5','6','7','8','10','11','12','13','14','16','15','16','17','18','19','20','21','22','23','24','25','26','27','28','29','30','31','32','33','34'); 
                                ?>
                                @foreach($gallery_items as $item)
                                <div class="gla_slider gla_slider_md gla_image_bck gla_wht_txt" data-image="{{asset($cdn_link.'images/'.$item.'.jpg')}}">
                                    <div class="gla_over" data-color="#000" data-opacity="0"></div>
                                    <a href="{{asset($cdn_link.'images/'.$item.'.jpg')}}" class="lightbox">
                                        <div class="container">
                                            <div class="stick-bottom">
                                                <div class="gla_slide_midtitle"></div>
                                                <div class="gla_slide_subtitle no-margin-top">~</div>
                                                <!-- <p><a href="#" class="btn"></a></p> -->
                                            </div>
                                        </div>
                                    </a>    
                                </div>
                                @endforeach
                            </div>
                        </div><br><br><br>
                    </section>
                    <section    id="health-protocol" class="gla_section gla_image_bck" data-color="#fff">
                        <div class="container text-center pd-md">
                            <span class="fix-montserrat-m">Health Protocol</span><br><br>
                            <p class="fix-montserrat-s-b text-choco-2">So that we are all comfortable and safe in the effort to prevent covid-19, invited guests who are willing to attend the event are requested to comply with the following health protocols: </p><br>
                            <div class="row text-center fix-montserrat-s-b">
                                <div class="col-sm-3 col-xs-12 gla_round_block">
                                    <div class="gla_round_im gla_image_bck" data-image="{{asset($cdn_link.'images/hp-1.png')}}"></div>
                                    <p class="text-choco-1">wear mask</p>
                                </div>
                                <div class="col-sm-6 col-xs-12 gla_round_block">
                                    <img src="{{asset($cdn_link.'images/hp-2.png')}}" style="max-width:300px">
                                </div>
                                <div class="col-sm-3 col-xs-12 gla_round_block">
                                    <div class="gla_round_im gla_image_bck" data-image="{{asset($cdn_link.'images/hp-3-a.png')}}"></div>
                                    <p class="text-choco-1">wash hands & use hand sanitizer</p>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section    id="quote" class="gla_image_bck gla_fixed" data-stellar-background-ratio="0.8" data-image="{{asset($cdn_link.'images/2.jpg')}}">
                        <!-- <div class="gla_over" data-color="#ffff" data-opacity="0.2"></div> -->
                        <div class="container text-right pd-md-h">
                            <span class="fix-montserrat-s-b text-choco-1"><i>
                                <sup>18</sup> <span class="ft-shadow">There is no fear in love. 
                                <br>But perfect love drives out fear <br>because fear has to do with punishment. 
                                <br>The one who fears is not made perfect in love.</span> 
                                <br><sup>19</sup> <span class="ft-shadow">We love because he first loved us.</span></i>
                            </span><br><br><br><br><br>
                            <p class="gla_subtitle ft-shadow">— 1 John 4:18-19 (NIV)</p>
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
            function executeInv(){
                $("body").removeClass("bg-navy");
                document.getElementById('myaudio').play(); 
                document.getElementById('myaudio').volume = .35;
                $('#gla_welcome').remove();
                $('#gla_page').show();
            }

            $( document ).ready(function() {

                if("{{$display['rsvp']}}"  == 1){
                    seeRSVP();
                }
                seeWishes();
                @if($addition_logic && in_array('do',$addition_logic))
                    let auth_msg = `Hello! Thankyou for trying this page, 
                    unfortunately rsvp & wishes can only be filled by guests of our respected bride and groom. 
                    Even so, please feel free to contact our admin by select order menu at beritabaik.co main page`;
                @endif
                $(document).on("click","#form-rsvp-send",function(){
                    @if($addition_logic && in_array('do',$addition_logic))
                        alert(auth_msg);
                    @else
                        if(document.getElementById('form-rsvp').checkValidity()){ 
                            console.log('handling :: form-rsvp | validity passed');
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
                                        alert(data.message+'\nthankyou!');
                                    }else{
                                        alert('error','',data.message);
                                    }
                                }),error:function(xhr,status,error) {
                                    alert('error [sys]','',xhr.responseText);
                                }
                            });
                        }else{
                            console.log('handling :: form-rsvp | validity 0');
                        }
                    @endif
                });

                $(document).on("click","#form-wish-send",function(){
                    @if($addition_logic && in_array('do',$addition_logic))
                        alert(auth_msg);
                    @else
                        if(document.getElementById('form-wish').checkValidity()){ 
                            console.log('handling :: form-wish | validity passed');
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
                                        alert(data.message+'\nthankyou!');
                                    }else{
                                        alert('error','',data.message);
                                    }
                                }),error:function(xhr,status,error) {
                                    alert('error [sys]','',xhr.responseText);
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