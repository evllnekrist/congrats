<!DOCTYPE html>
<html lang="en">
    <head>
        @include('_invitation._wedding._include.head-1')
        @include('_invitation._wedding._include.asset-top-1')
        <style>
            .spec-ft-blue{
                color:#154167 !important;
            }
            .spec-bg-blue{
                background-color:#154167;
            }
            .spec-border-blue{
                border:2px solid #154167;
            }
            .fix-dosis-l-b{
                font:900 30px/30px Dosis, Arial;
                margin-bottom: 50px;
            }
            .fix-dosis-m-b{
                font:900 20px/20px Dosis, Arial;
                margin-bottom: 50px;
            }
            .fix-dosis-m{
                font:400 18px/18px Dosis, Arial;
                margin-bottom: 50px;
            }
            .ft-dark{
                color:rgb(41, 41, 41) !important;
            }
            .border-wh{
                border:3px dashed white;
            }
            .box-shadow{
                box-shadow: 2px 2px 4px #969696;
            }
            .bio-card-m-top,.bio-card-m,.bio-card-f-top,.bio-card-f{
                padding:15px 2px;
                box-shadow: 2px 2px 2px #969696;
                max-width:200px;
            }
            .bio-card-m-top{
                height:100px;
                background-color:white;
                border-radius: 15px 15px 0px 0px;
            }
            .bio-card-m{
                height:160px;
                background-color:white;
                border-radius: 0px 0px 15px 15px;
            }
            .bio-card-f-top{
                height:100px;
                background-color:white;
                border-radius: 15px 15px 0px 0px;
            }
            .bio-card-f{
                height:160px;
                background-color:white;
                border-radius: 0px 0px 15px 15px;
            }
            .img-fix-h{
                -webkit-background-size: cover;
                background-size: cover;
                background-position: center;
            }
            .txt_block {
                padding: 40px 15px 60px;
            }
            .no-margin-top{
                margin-top: -30px;
            }
            .stick-bottom{
                position:absolute;
                bottom:0;
                width:100%;
            }
            @media (max-width:768px){
                .img-fix-h{
                    max-height:30vh;
                }
            }
            @media (min-width:769px){
                .img-fix-h{
                    max-height:50vh;
                }
            }
        </style>
    </head>
    <body class="gla_middle_titles">
        <?php 
            $cdn_link   = "asset-wedding-gb/petrick-menda/";
        ?>
        
        <div class="gla_invitation_container" id="gla_welcome">
            <div class="gla_invitation_i gla_invitation_ii gla_image_bck gla_wht_txt" data-image="{{asset($cdn_link.'images/card-bg.jpg')}}">
                
                <p><img src="{{asset('asset-wedding-1/images/invitations/inv_i/save_the_date.gif')}}" alt="" height="180"></p>
                <br><br><br><br><br><br><br>
                <span class="gla_wht_txt fix-dosis-m-b">
                    @if($invite)
                        Dear, {{$invite}}<br>
                    @endif
                    you are invited!</span>
                <br><br>
                <span class="gla_wht_txt fix-dosis-m-b">Wedding of Petrick & Menda</span>
                <br><br>
                <button type="button" class="btn btn-info" onclick="executeInv()">Open Invitation</button>
            </div>
        </div>

        <div class="gla_page" id="gla_page" style="display:none">
            <a href="#gla_page" class="gla_top ti ti-angle-up gla_go"></a>
            <div class="gla_music_icon">
                <i class="ti ti-music"></i>
            </div>
            <div class="gla_music_icon_cont">
                <br><br><br><br>
                <audio id="myaudio" controls>
                <!-- dami_im__they_long_to_be_close_to_you.mp3 -->
                    <source src="{{asset($cdn_link.'audios/sezairi__its_you.mp3')}}" type="audio/mpeg">
                    <source src="{{asset($cdn_link.'audios/sezairi__its_you.mp3')}}" type="audio/ogg">
                    Your browser does not support the audio element.
                </audio>
            </div>
            <header>      
                <nav class="gla_light_nav gla_transp_nav">
                    <div class="container">
                        <div class="gla_logo_container clearfix">
                            <div class="gla_logo_txt">
                                <a href="/" class="gla_logo">Petrick & Menda</a>
                                <div class="gla_logo_und">20 February, 2021</div>
                            </div>
                        </div>
                        <!-- Menu -->
                        <div class="gla_main_menu gla_main_menu_mobile">
                            <div class="gla_main_menu_icon">
                                <i></i><i></i><i></i><i></i>
                                <b>Menu</b>
                                <b class="gla_main_menu_icon_b">Back</b>
                            </div>
                        </div>
                        <div class="gla_main_menu_content gla_image_bck" data-color="rgba(0,0,0,0.9)" data-image="">
                            <div class="gla_over" data-color="#000" data-opacity="0.7"></div>
                        </div>
                        <div class="gla_main_menu_content_menu gla_wht_txt text-right">
                            <div class="container">
                                <ul>
                                    <li>
                                        <a href="#profile">Profile</a>
                                    </li>
                                    <li>
                                        <a href="#timeline">Timeline</a>
                                    </li>
                                    <li>
                                        <a href="#event-detail">Event</a>
                                    </li>
                                    <li>
                                        <a href="#rsvp">Konfirmasi Kehadiran</a>
                                    </li>
                                    <li>
                                        <a href="#wishes">Ucapan</a>
                                    </li>
                                </ul>
                                <div class="gla_main_menu_content_menu_copy">
                                    <p>© beritabaik.co 2021</p>
                                </div>
                            </div>
                        </div>
                        <div class="gla_default_menu">
                            <ul>
                                <li>
                                    <a href="#profile">Profile</a>
                                </li>
                                <li>
                                    <a href="#timeline">Timeline</a>
                                </li>
                                <li>
                                    <a href="#event-detail">Event</a>
                                </li>
                                <li>
                                    <a href="#rsvp">Konfirmasi Kehadiran</a>
                                </li>
                                <li>
                                    <a href="#wishes">Ucapan</a>
                                </li>
                            </ul>
                    </div>
                </nav>
            </header>
            <!-- Slider -->
            <div class="gla_slider gla_image_bck  gla_wht_txt gla_fixed"  data-image="{{asset($cdn_link.'images/top.jpg')}}" data-stellar-background-ratio="0.8">
                <div class="gla_over" data-color="#1e1d2d" data-opacity="0.15"></div>
                <div class="container">
                    <div class="gla_slide_txt gla_slide_center_bottom text-center">
                        <img src="{{asset('asset-wedding-1/images/animations/ourwedding_wh.gif')}}" data-top-bottom="@src:{{asset('asset-wedding-1/images/animations/ourwedding_wh.gif')}}" alt="" height="100">
                    </div>
                </div>
                <a class="gla_scroll_down gla_go" href="#gla_content">
                    <b></b>Scroll
                </a>
            </div>
            <!-- Slider End -->
            <!-- Content -->
            <section id="gla_content" class="gla_content">
                <section    id="quote" class="gla_section gla_image_bck gla_fixed" data-stellar-background-ratio="0.8" data-image="{{asset($cdn_link.'images/quote-bg.jpg')}}">
                    <div class="container text-center">
                        <h3>"No one has ever seen God; but if we love one another, God lives in us and his love is made complete in us."</h3>
                        <p class="gla_subtitle">— 1 John 4:12</p>
                    </div>
                </section>
                <section    id="profile" class="gla_section gla_image_bck gla_fixed" data-stellar-background-ratio="0.9" 
                            data-image="{{asset($cdn_link.'images/profile-bg-mask.jpg')}}">  
                    <div class="row text-center">
                        <div class="col gla_round_block">    
                            <span class="fix-dosis-l-b gla_wht_txt">Are getting married<br>20 February, 2021</span>
                            <p class="gla_slide_subtitle gla_wht_txt">St. Thomas's Church,<br>Bristol, U.K.</p>
                            <!-- <div class="gla_countdown" data-year="2021" data-month="02" data-day="20"></div> -->
                        </div>
                    </div>
                    <div class="row text-center" style="margin-top:-80px;margin-bottom:80px">
                        <div class="col-xs-6 gla_round_block">
                            <div class="gla_round_im gla_image_bck border-wh" data-image="{{asset($cdn_link.'images/profile-groom.jpg')}}"></div><br>
                            <center>    
                                <div class="bio-card-m-top">
                                    <span class="fix-dosis-m-b">dr. Petrick <br>Aqrasvawinata</span>
                                </div><a><i class="ti ti-align-right"></i></a>
                                <div class="bio-card-m">
                                    <p class="fix-dosis-m"><br>putra dari<br><br><b>Arius F.S.</b><br>&<br><b>Marilaniasie</b></p>
                                </div>
                            </center>
                        </div>
                        <div class="col-xs-6 gla_round_block">
                            <div class="gla_round_im gla_image_bck border-wh" data-image="{{asset($cdn_link.'images/profile-bride.jpg')}}"></div><br>
                            <center>
                                <div class="bio-card-f-top">
                                    <span class="fix-dosis-m-b">dr. Rimenda <br>Dwirana Barus</span>
                                </div><a><i class="ti ti-align-left"></i></a>
                                <div class="bio-card-f">
                                    <p class="fix-dosis-m"><br>putri dari<br><br><b>Drs. Rakhmad Barus, Apt</b><br>&<br><b>Magdalena K. Girsang, SE</b></p>
                                </div>
                            </center>
                        </div>
                    </div>
                </section>
                <section    id="timeline" class="gla_section gla_image_bck gla_fixed" data-stellar-background-ratio="0" 
                            data-image="{{asset($cdn_link.'images/timeline-bg-2.jpg')}}">
                    <div class="container text-center">
                        <h4>Cerita Tentang Kami</h4>
                        <div class="gla_slider_carousel" style="margin-top:50px">
                            <div class="gla_slider gla_slider_md gla_image_bck gla_wht_txt" data-image="{{asset($cdn_link.'images/timeline-1.jpg')}}">
                                <div class="gla_over" data-color="#000" data-opacity="0"></div>
                                <div class="container">
                                    <div class="stick-bottom">
                                        <div class="gla_slide_midtitle">2014</div>
                                        <div class="gla_slide_subtitle no-margin-top">Semarang</div>
                                        <p><a href="#" class="btn">Pertama kali kenal dan bersahabat saat koass</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="gla_slider gla_slider_md gla_image_bck gla_wht_txt" data-image="{{asset($cdn_link.'images/timeline-2.jpg')}}">
                                <div class="gla_over" data-color="#000" data-opacity="0"></div>
                                <div class="container">
                                    <div class="stick-bottom">
                                        <div class="gla_slide_midtitle">2016</div>
                                        <!-- <div class="gla_slide_subtitle no-margin-top"></div> -->
                                        <p><a href="#" class="btn no-margin-top">In a relationship saat koass</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="gla_slider gla_slider_md gla_image_bck" data-image="{{asset($cdn_link.'images/timeline-3.jpg')}}">
                                <div class="gla_over" data-color="#000" data-opacity="0"></div>
                                <div class="container">
                                    <div class="stick-bottom">
                                        <div class="gla_slide_midtitle">2016</div>
                                        <div class="gla_slide_subtitle no-margin-top"><b>Jakarta</b></div>
                                        <p><a href="#" class="btn">Pelantikan Dokter</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="gla_slider gla_slider_md gla_image_bck gla_wht_txt" data-image="{{asset($cdn_link.'images/timeline-4.jpg')}}">
                                <div class="gla_over" data-color="#000" data-opacity="0.4"></div>
                                <div class="container">
                                    <div class="stick-bottom">
                                        <div class="gla_slide_midtitle">2016-2017</div>
                                        <div class="gla_slide_subtitle no-margin-top">Tenggarong, Kalimantan Timur</div>
                                        <p><a href="#" class="btn">Masa Internsip Dokter</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="gla_slider gla_slider_md gla_image_bck gla_wht_txt" data-image="{{asset($cdn_link.'images/timeline-5.jpg')}}">
                                <div class="gla_over" data-color="#000" data-opacity="0.2"></div>
                                <div class="container">
                                    <div class="stick-bottom">
                                        <div class="gla_slide_midtitle">2016-2017</div>
                                        <div class="gla_slide_subtitle no-margin-top">Tenggarong, Kalimantan Timur</div>
                                        <p><a href="#" class="btn">Masa Internsip Dokter [2]</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="gla_slider gla_slider_md gla_image_bck gla_wht_txt" data-image="{{asset($cdn_link.'images/timeline-6.jpg')}}">
                                <div class="gla_over" data-color="#000" data-opacity="0"></div>
                                <div class="container">
                                    <div class="stick-bottom">
                                        <div class="gla_slide_midtitle">2016-2017</div>
                                        <div class="gla_slide_subtitle no-margin-top">Tenggarong, Kalimantan Timur</div>
                                        <p><a href="#" class="btn">Masa Internsip Dokter [3]</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="gla_slider gla_slider_md gla_image_bck gla_wht_txt" data-image="{{asset($cdn_link.'images/timeline-7.jpg')}}">
                                <div class="gla_over" data-color="#000" data-opacity="0"></div>
                                <div class="container">
                                    <div class="stick-bottom">
                                        <div class="gla_slide_midtitle">2019</div>
                                        <div class="gla_slide_subtitle no-margin-top">Jayapura</div>
                                        <p><a href="#" class="btn">Tunangan</a></p>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br><br>
                        <h4>Pre Wedding</h4>
                        <div class="gla_slider_carousel" style="margin-top:50px">
                            <div class="gla_slider gla_slider_md gla_image_bck gla_wht_txt" data-image="{{asset($cdn_link.'images/prewed-1.jpg')}}">
                                <div class="gla_over" data-color="#000" data-opacity="0"></div>
                                <div class="container">
                                    <div class="stick-bottom">
                                        <div class="gla_slide_midtitle"></div>
                                        <div class="gla_slide_subtitle no-margin-top">~</div>
                                        <!-- <p><a href="#" class="btn"></a></p> -->
                                    </div>
                                </div>
                            </div>
                            <div class="gla_slider gla_slider_md gla_image_bck gla_wht_txt" data-image="{{asset($cdn_link.'images/prewed-2.jpg')}}">
                                <div class="gla_over" data-color="#000" data-opacity="0"></div>
                                <div class="container">
                                    <div class="stick-bottom">
                                        <div class="gla_slide_midtitle"></div>
                                        <div class="gla_slide_subtitle no-margin-top">~</div>
                                        <!-- <p><a href="#" class="btn"></a></p> -->
                                    </div>
                                </div>
                            </div>
                            <div class="gla_slider gla_slider_md gla_image_bck" data-image="{{asset($cdn_link.'images/prewed-3.jpg')}}">
                                <div class="gla_over" data-color="#000" data-opacity="0"></div>
                                <div class="container">
                                    <div class="stick-bottom">
                                        <div class="gla_slide_midtitle"></div>
                                        <div class="gla_slide_subtitle no-margin-top">~</div>
                                        <!-- <p><a href="#" class="btn"></a></p> -->
                                    </div>
                                </div>
                            </div>
                            <div class="gla_slider gla_slider_md gla_image_bck gla_wht_txt" data-image="{{asset($cdn_link.'images/prewed-4.jpg')}}">
                                <div class="gla_over" data-color="#000" data-opacity="0"></div>
                                <div class="container">
                                    <div class="stick-bottom">
                                        <div class="gla_slide_midtitle"></div>
                                        <div class="gla_slide_subtitle no-margin-top">~</div>
                                        <!-- <p><a href="#" class="btn"></a></p> -->
                                    </div>
                                </div>
                            </div>
                            <div class="gla_slider gla_slider_md gla_image_bck gla_wht_txt" data-image="{{asset($cdn_link.'images/prewed-5.jpg')}}">
                                <div class="gla_over" data-color="#000" data-opacity="0"></div>
                                <div class="container">
                                    <div class="stick-bottom">
                                        <div class="gla_slide_midtitle"></div>
                                        <div class="gla_slide_subtitle no-margin-top">~</div>
                                        <!-- <p><a href="#" class="btn"></a></p> -->
                                    </div>
                                </div>
                            </div>
                            <div class="gla_slider gla_slider_md gla_image_bck gla_wht_txt" data-image="{{asset($cdn_link.'images/prewed-6.jpg')}}">
                                <div class="gla_over" data-color="#000" data-opacity="0"></div>
                                <div class="container">
                                    <div class="stick-bottom">
                                        <div class="gla_slide_midtitle"></div>
                                        <div class="gla_slide_subtitle no-margin-top">~</div>
                                        <!-- <p><a href="#" class="btn"></a></p> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section    id="event-detail" class="gla_section">
                    <div class="container text-center">
                        <h2>Waktu & Tempat</h2>
                        <div class="gla_icon_boxes row text-left">
                            <div class="col-md-4 col-sm-12">
                                <a href="#" class="gla_news_block">
                                    <span class="gla_news_img">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3985.7553214899303!2d140.64103621475596!3d-2.5859568981158003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x686cf5d1456d53a3%3A0xb96ef2ed929477c!2sGKI%20Siloam%20Waena!5e0!3m2!1sen!2sid!4v1612002853028!5m2!1sen!2sid" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe> 
                                    </span>
                                    <span class="gla_news_title">Pemberkatan/Sakramen</span>
                                    <p>
                                        <b>Gereja GKI Siloam Waena</b><br>
                                        Sabtu, 20 Februari 2021<br><br>
                                        <span class="label label-success">07.30-09.30</span>
                                    </p>
                                </a>
                            </div> 
                            <div class="col-md-4 col-sm-12">
                                <a href="#" class="gla_news_block">
                                    <span class="gla_news_img">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3985.7330346681897!2d140.67327171475603!3d-2.593040798110677!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x686cf5f73e046929%3A0x24492cd17ffb9584!2sTongkonan%20Convention%20Center!5e0!3m2!1sen!2sid!4v1612002926508!5m2!1sen!2sid" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>  
                                    </span>
                                    <span class="gla_news_title">Resepsi</span>
                                    <p>
                                        <b>Gedung Pertemuan Tongkonan Kotaraja</b><br>
                                        Sabtu, 20 Februari 2021<br><br>
                                        <span class="label label-info">10.30 – 12.00</span>
                                    </p>
                                </a>
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <a href="#" class="gla_news_block">
                                    <span class="gla_news_img">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3985.7330346681897!2d140.67327171475603!3d-2.593040798110677!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x686cf5f73e046929%3A0x24492cd17ffb9584!2sTongkonan%20Convention%20Center!5e0!3m2!1sen!2sid!4v1612002926508!5m2!1sen!2sid" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                                    </span>
                                    <span class="gla_news_title">Pelaksanaan Kerja Adat Karo</span>
                                    <p>
                                        <b>Gedung Pertemuan Tongkonan Kotaraja</b><br>
                                        Sabtu, 20 Februari 2021<br><br>
                                        <span class="label label-warning">12.30 – 17.00</span>
                                    </p>
                                </a>
                            </div>  
                        </div>
                    </div>
                </section>
                <section    id="rsvp" class="gla_section gla_image_bck gla_wht_txt gla_fixed" data-stellar-background-ratio="0.8" data-image="{{asset($cdn_link.'images/rsvp-bg.jpg')}}">
                    <div class="gla_over" data-color="#282828" data-opacity="0.8"></div>
                    <div class="container text-center">
                        <p><img src="{{asset('asset-wedding-1/images/animations/rsvp_wh.gif')}}" data-bottom-top="@src:{{asset('asset-wedding-1/images/animations/rsvp_wh.gif')}}" height="150" alt=""></p>         
                        <p>Tak sabar rasanya menyambut hari bahagia kami bersama Bapak/Ibu/Saudara/i. Di bawah ini dapat dilakukan konfirmasi kehadiran, terima kasih.</p>
                        <div class="row">
                            <div class="col-md-8 col-md-push-2">
                                <form id="form-rsvp" onsubmit="return false;">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Nama</label>
                                            <input type="text" name="rsvp_name" maxlength="50" class="form-control form-opacity" value="{{$invite}}" required>
                                        </div>
                                        <div class="col-md-6">
                                            <label>Alamat</label>
                                            <input type="text" name="rsvp_address" maxlength="50" class="form-control form-opacity" required>
                                        </div>
                                        <div class="col-md-12">
                                            <label>Apakah Anda akan hadir?</label>
                                            <input type="radio" name="rsvp_attend" value="1" required>
                                            <span>Ya, tentu!</span><br>
                                            <input type="radio" name="rsvp_attend" value="0">
                                            <span>Maaf, saya tidak bisa hadir.</span>
                                        </div>
                                        <div class="col-md-12" style="padding-top:50px">
                                            <input type="submit" class="btn submit" id="form-rsvp-send" value="Simpan">
                                        </div>
                                        @if($display['rsvp'] == 1)
                                        <div class="panel panel-default" style="margin-top:50px">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a class="ft-dark" data-toggle="collapse" href="#table-rsvp-wrap">Lihat RSVP</a>
                                                </h4>
                                            </div>
                                            <div id="table-rsvp-wrap" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <table class="table table-sm table-striped ft-dark" id="table-rsvp" width="100%">
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
                    </div>
                </section>
                <section    id="wishes" class="gla_section">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-6">
                                <p><img src="{{asset('asset-wedding-1/images/animations/flowers4.gif')}}" 
                                        data-bottom-top="@src:{{asset('asset-wedding-1/images/animations/flowers4.gif')}}" height="150" alt=""></p>   
                            </div> 
                            <div class="col-xs-6">
                                <p><img src="{{asset('asset-wedding-1/images/animations/flowers4.gif')}}" 
                                        data-bottom-top="@src:{{asset('asset-wedding-1/images/animations/flowers4.gif')}}" height="150" alt=""></p>   
                            </div> 
                        </div>
                        <div class="row text-left">
                            <table class="table table-sm table-hover" id="table-wish">
                                <thead>
                                    <tr>
                                        <th width="25%">Pengirim</th>                              
                                        <th width="75%">Ucapan</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                        <br><br><br><br>
                        <h2>Ucapan</h2>
                        <div class="row">
                            <div class="col-md-8 col-md-push-2">
                                <form id="form-wish" onsubmit="return false;">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label>Nama</label>
                                            <input type="text" name="wish_name" maxlength="50" class="form-control form-opacity" value="{{$invite}}" required>
                                        </div>
                                        <div class="col-md-12">
                                            <label>Ucapan</label>
                                            <textarea name="wish_message" maxlength="500" class="form-control form-opacity" required></textarea>
                                        </div>
                                        <div class="col-md-12">
                                            <input type="submit" class="btn submit" id="form-wish-send" value="Kirim">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="gla_section gla_image_bck gla_fixed gla_wht_txt" data-stellar-background-ratio="0.8" data-image="{{asset($cdn_link.'images/bottom.jpg')}}">
                    <div class="gla_over" data-color="#282828" data-opacity="0.4"></div>
                    <div class="container text-center">
                        <p><img src="{{asset('asset-wedding-1/images/animations/thnyou_wh.gif')}}" 
                                data-bottom-top="@src:{{asset('asset-wedding-1/images/animations/thnyou_wh.gif')}}" height="70" alt=""></p>
                    </div>
                </section>
            </section>
            <!-- Content End -->
        </div>

        @include('_invitation._wedding._include.asset-bottom-1')
        <script>
                function executeInv(){
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

                    $(document).on("click","#form-rsvp-send",function(){
                        console.log('handling :: form-rsvp');
                        let name = $('[name="rsvp_name"]').val();
                        let address = $('[name="rsvp_address"]').val();
                        let attend = $('[name="rsvp_attend"]').val();

                        $.ajax({
                            url: '{{$code}}/send-rsvp',
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
                    });

                    $(document).on("click","#form-wish-send",function(){
                        console.log('handling :: form-wish');
                        let name = $('[name="wish_name"]').val();
                        let message = $('[name="wish_message"]').val();

                        $.ajax({
                            url: '{{$code}}/send-wish',
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
                    });

                    function seeRSVP(){
                        $('#table-rsvp').DataTable().clear().destroy();
                        $('#table-rsvp').DataTable({
                            processing: true,
                            serverSide: true,
                            ajax: '{{$code}}/get-rsvp',
                            columns: [
                                {data: 'sender_name', name: 'sender_name'},
                                {data: 'sender_address', name: 'sender_address'},
                                {data: 'attend', name: 'attend'},
                            ]
                        });
                    }

                    function seeWishes(){
                        $('#table-wish').DataTable().clear().destroy();
                        $('#table-wish').DataTable({
                            processing: true,
                            serverSide: true,
                            ajax: '{{$code}}/get-wish',
                            columns: [
                                {data: 'sender_name', name: 'sender_name'},
                                {data: 'message', name: 'message'},
                            ]
                        });
                    }
                });
        </script>
    </body>
</html>