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
            .ft-white{
                color:white;
            }
            .img-fix-h{
                -webkit-background-size: cover;
                background-size: cover;
                background-position: center;
            }
            .txt_block {
                padding: 40px 15px 60px;
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
            $cdn_link = "asset-wedding-gb/petrik-menda/";
        ?>
        
        <div class="gla_invitation_container" id="gla_welcome">
            <div class="gla_invitation_i gla_invitation_ii gla_image_bck gla_wht_txt" data-image="{{asset($cdn_link.'images/card-bg.jpg')}}">
                
                <p><img src="{{asset('asset-wedding-1/images/invitations/inv_i/save_the_date.gif')}}" alt="" height="180"></p>
                <br><br><br><br><br><br><br>
                <span class="ft-white fix-dosis-m-b">
                    @if(isset($_GET['invite']))
                        Dear, {{$_GET['invite']}}<br>
                    @endif
                    you are invited!</span>
                <br><br>
                <span class="ft-white fix-dosis-m-b">Wedding of Petrik & Menda</span>
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
                <audio id="myaudio" autoplay controls>
                <!-- dami_im__they_long_to_be_close_to_you.mp3 -->
                    <source src="{{asset($cdn_link.'audios/violin__how_does_a_moment_last_forever.mp3')}}" type="audio/mpeg">
                    <source src="{{asset($cdn_link.'audios/violin__how_does_a_moment_last_forever.mp3')}}" type="audio/ogg">
                    Your browser does not support the audio element.
                </audio>
            </div>
            <header>      
                <nav class="gla_light_nav gla_transp_nav">
                    <div class="container">
                        <div class="gla_logo_container clearfix">
                            <div class="gla_logo_txt">
                                <a href="/" class="gla_logo">Petrik & Menda</a>
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
                        <!-- <div class="gla_main_menu_content gla_image_bck" data-color="rgba(0,0,0,0.9)" data-image="images/wedding/Petrik_Menda/14400933225_3b844816c3_k.jpg">
                            <div class="gla_over" data-color="#000" data-opacity="0.7"></div>
                        </div> -->
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
                            <p><img src="{{asset('asset-wedding-1/images/animations/flowers.gif')}}" data-bottom-top="@src:{{asset('asset-wedding-1/images/animations/flowers.gif')}}" height="150" alt=""></p>     
                            <span class="fix-dosis-l-b ft-white">Are getting married<br>20 February, 2021</span>
                            <p class="gla_slide_subtitle ft-white">St. Thomas's Church,<br>Bristol, U.K.</p>
                            <!-- <div class="gla_countdown" data-year="2021" data-month="02" data-day="20"></div> -->
                        </div>
                    </div>
                    <div class="row text-center" style="margin-top:-80px;margin-bottom:80px">
                        <div class="col-xs-6 gla_round_block">
                            <div class="gla_round_im gla_image_bck border-wh" data-image="{{asset($cdn_link.'images/profile-groom.jpg')}}"></div><br>
                            <center>    
                                <div class="bio-card-m-top">
                                    <span class="fix-dosis-m-b">dr. Petrik <br>Aqrasvawinata Ginting</span>
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
                <section    id="timeline" class="gla_section gla_image_bck gla_fixed" data-stellar-background-ratio="0.9" 
                            data-image="{{asset($cdn_link.'images/timeline-bg.jpg')}}">
                    <div class="container text-center">
                        <h2>Cerita Kita</h2>
                         <div class="row"> 
                            <div class="col-xs-5 col-md-8">
                                <div class="txt_block text-right">
                                    <div class="gla_slide_midtitle">2014</div>
                                    <div class="gla_slide_subtitle">Sudah bersahabat ketika awal koass</div>
                                </div>
                            </div>
                            <div class="col-xs-7 col-md-4 align-middle">
                                <img class="img-fix-h box-shadow" src="{{asset($cdn_link.'images/timeline-1.jpg')}}">
                            </div>
                        </div>
                         <div class="row"> 
                            <div class="col-xs-7 col-md-4">
                                <img class="img-fix-h box-shadow" src="{{asset($cdn_link.'images/timeline-2.jpg')}}">
                            </div>
                            <div class="col-xs-5 col-md-8">
                                <div class="txt_block text-left">
                                    <div class="gla_slide_midtitle">2014</div>
                                    <div class="gla_slide_subtitle">In relationship di jaman koass</div>
                                </div>
                            </div>
                        </div>
                         <div class="row"> 
                            <div class="col-xs-5 col-md-8">
                                <div class="txt_block text-right">
                                    <div class="gla_slide_midtitle">2016</div>
                                    <div class="gla_slide_subtitle">Pelantikan dokter</div>
                                </div>
                            </div>
                            <div class="col-xs-7 col-md-4">
                                <img class="img-fix-h box-shadow" src="{{asset($cdn_link.'images/timeline-3.jpg')}}">
                            </div>
                        </div>
                         <div class="row"> 
                            <div class="col-xs-7 col-md-4"><br><br>
                                <img class="img-fix-h box-shadow" src="{{asset($cdn_link.'images/timeline-4.jpg')}}">
                            </div>
                            <div class="col-xs-5 col-md-8">
                                <div class="txt_block text-left">
                                    <div class="gla_slide_midtitle">2016</div>
                                    <div class="gla_slide_subtitle">Awal internsip</div>
                                </div>
                            </div>
                        </div>
                         <div class="row"> 
                            <div class="col-xs-5 col-md-8">
                                <div class="txt_block text-right">
                                    <div class="gla_slide_midtitle">2016</div>
                                    <div class="gla_slide_subtitle">Masa internsip</div>
                                </div>
                            </div>
                            <div class="col-xs-7 col-md-4">
                                <img class="img-fix-h box-shadow" src="{{asset($cdn_link.'images/timeline-5.jpg')}}">
                            </div>
                        </div>
                         <div class="row"> 
                            <div class="col-xs-7 col-md-4"><br>
                                <img class="img-fix-h box-shadow" src="{{asset($cdn_link.'images/timeline-6.jpg')}}">
                            </div>
                            <div class="col-xs-5 col-md-8">
                                <div class="txt_block text-left"><br>
                                    <div class="gla_slide_midtitle">2017</div>
                                    <div class="gla_slide_subtitle">Akhir internsip</div>
                                </div>
                            </div>
                        </div>
                         <div class="row"> 
                            <div class="col-xs-5 col-md-8">
                                <div class="txt_block text-right"><br>
                                    <div class="gla_slide_midtitle">2019</div>
                                    <div class="gla_slide_subtitle">Tunangan</div>
                                </div>
                            </div>
                            <div class="col-xs-7 col-md-4"><br>
                                <img class="img-fix-h box-shadow" src="{{asset($cdn_link.'images/timeline-7.jpg')}}">
                            </div>
                        </div>
                         <div class="row"> 
                            <div class="col-xs-7 col-md-4">
                                <img class="img-fix-h box-shadow" src="{{asset($cdn_link.'images/timeline-8.jpg')}}">
                            </div>
                            <div class="col-xs-5 col-md-8">
                                <div class="txt_block text-left">
                                    <div class="gla_slide_midtitle">2020</div>
                                    <div class="gla_slide_subtitle">Prewedding</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section    id="event-detail" class="gla_section">
                    <div class="container text-center">
                        <h2>Waktu & Tempat</h2>
                        <div class="gla_icon_boxes row text-left">
                            <div class="col-md-6 col-sm-6">
                                <a href="#" class="gla_news_block">
                                    <span class="gla_news_img">
                                        <span class="gla_over" data-image="http://placehold.it/600x600"></span>  
                                    </span>
                                    <span class="gla_news_title">Wedding Ceremony</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa similique porro officiis nobis nulla quidem nihil iste veniam ut sit, maiores. <br><b>20 February, 2021, St. Thomas's Church, <br>Bristol, U.K.</b></p>
                                </a>
                            </div> 
                            <div class="col-md-6 col-sm-6">
                                <a href="#" class="gla_news_block">
                                    <span class="gla_news_img">
                                        <span class="gla_over" data-image="http://placehold.it/600x600"></span>  
                                    </span>
                                    <span class="gla_news_title">Wedding Party</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa similique porro officiis nobis nulla quidem nihil iste veniam ut sit, maiores. <br><b>20 February, 2021, St. Thomas's Church, <br>Bristol, U.K.</b></p>
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
                                <form action="https://formspree.io/your@mail.com" method="POST">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Nama Lengkap</label>
                                            <input type="text" name="name" class="form-control form-opacity">
                                        </div>
                                        <div class="col-md-6">
                                            <label>Alamat</label>
                                            <input type="text" name="address" class="form-control form-opacity">
                                        </div>
                                        <div class="col-md-12">
                                            <label>Apakah Anda akan hadir?</label>
                                            <input type="radio" name="attend" value="Yes, I will be there">
                                            <span>Ya, tentu!</span><br>
                                            <input type="radio" name="attend" value="Sorry, I can't come">
                                            <span>Maaf, saya tidak bisa hadir.</span>
                                        </div>
                                        <div class="col-md-12" style="padding-top:50px">
                                            <input type="submit" class="btn submit" value="Simpan">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>
                <section    id="wishes" class="gla_section">
                    <div class="container text-center">
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
                        <h2>Ucapan</h2>
                        <div class="row">
                            <div class="col-md-8 col-md-push-2">
                                <form action="https://formspree.io/your@mail.com" method="POST">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label>Nama Lengkap</label>
                                            <input type="text" name="name" class="form-control form-opacity">
                                        </div>
                                        <div class="col-md-12">
                                            <label>Ucapan</label>
                                            <textarea name="message" class="form-control form-opacity"></textarea>
                                        </div>
                                        <div class="col-md-12">
                                            <input type="submit" class="btn submit" value="Kirim">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="gla_section gla_image_bck gla_fixed gla_wht_txt" data-stellar-background-ratio="0.8" data-image="{{asset($cdn_link.'images/bottom-2.jpg')}}">
                    <div class="gla_over" data-color="#282828" data-opacity="0.4"></div>
                    <div class="container text-center">
                        <p><img src="{{asset('asset-wedding-1/images/animations/thnyou_wh.gif')}}" 
                                data-bottom-top="@src:{{asset('asset-wedding-1/images/animations/thnyou_wh.gif')}}" height="70" alt=""></p>
                    </div>
                </section>
            </section>
            <!-- Content End -->
        </div>

        <!-- JQuery -->
        <script src="{{asset('asset-wedding-1/js/jquery-1.12.4.min.js')}}"></script> 
        <!-- Library JS -->
        <script src="{{asset('asset-wedding-1/js/glanz_library.js')}}"></script> 
        <!-- Theme JS -->
        <script src="{{asset('asset-wedding-1/js/glanz_script.js')}}"></script>
        <script>
            // (function() {
                function executeInv(){
                    document.getElementById('myaudio').play(); 
                    document.getElementById('myaudio').volume = .35;
                    $('#gla_welcome').remove();
                    $('#gla_page').show();
                }
            // })();
        </script>
    </body>
</html>