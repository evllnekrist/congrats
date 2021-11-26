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
            .text-creme-1{
                color: #d6b08c
            }
            .pd-md{
                padding-top: 20px;
                padding-bottom: 20px;
            }  
            .pd-md-h{
                padding: 20px 20px 20px 20px;
            }
            .gla_round_block{
                margin-top: 0px !important;
            }
            .ft-shadow{
                color: white;
                text-shadow: 2px 2px 4px #000000;
            }
        </style>
    </head>
    <body class="bg-navy">
        <!-- Preloader -->
            <div class="gla_page_loader gla_image_bck gla_wht_txt" data-color="#181d23">
                <div class="gla_loader">
                    <p><img src="{{asset('asset-wedding-1/images/animations/icons/icon9_wh.gif')}}" height="150" alt=""></p>
                    <p>Loading ...</p>
                </div>
            </div>
        <!-- Preloader End-->
        <!-- OPEN -->
            <div class="gla_invitation_container" id="gla_welcome">
                <div class="gla_invitation_i gla_invitation_ii gla_image_bck text-choco-2" data-image="{{asset($cdn_link.'images/3_inv_ver3.jpg')}}"> 
                    <p style="margin-top:15vh;margin-bottom:5vh">               
                        <span class="fix-montserrat-m">The Wedding of</span><br>
                        <span class="fix-montserrat-m-b">Andreas & Aprilia</span><br><br>
                    </p>
                    <p style="height:5vh;margin-bottom:5vh" id="gla_after_loader_gif"></p>
                    <span class="fix-montserrat-s"><br><br>
                        @if($invite)
                            <strong class="fix-montserrat-s-b text-choco-1">Dear {{$invite}}</strong><br>
                        @endif
                        you are invited!
                    </span><br><br>
                    <button type="button" class="btn btn-light" onclick="executeInv()">Open Invitation</button>
                </div>
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
                        <source src="{{asset($cdn_link.'audios/sam_ock__can_I_have_the_day_with_you_ft_michelle.mp3')}}" type="audio/mpeg">
                        <source src="{{asset($cdn_link.'audios/sam_ock__can_I_have_the_day_with_you_ft_michelle.mp3')}}" type="audio/ogg">
                        Your browser does not support the audio element.
                    </audio>
                </div>
                <header>      
                    <nav class="gla_light_nav gla_transp_nav">
                        <div class="container">
                            <div class="gla_logo_container clearfix">
                                <div class="gla_logo_txt">
                                    <a href="/" class="gla_logo">Andreas & Aprilia</a>
                                    <div class="gla_logo_und">December 11, 2021</div>
                                </div>
                            </div>
                            @include('_invitation._wedding._include.nav-2')
                        </div>
                    </nav>
                </header>
                <!-- Slider -->
                <div class="gla_slider gla_image_bck gla_wht_txt gla_fixed"  data-image="{{asset($cdn_link.'images/20.jpg')}}" data-stellar-background-ratio="0.8">
                    <div class="gla_over" data-color="#1e1d2d" data-opacity="0.15"></div>
                    <div class="container">
                        <div class="gla_slide_txt gla_slide_center_bottom text-center">
                            <div class="gla_slide_midtitle">A & A</div>
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
                                data-image="{{asset($cdn_link.'images/7.jpg')}}">  
                        <div class="gla_over" data-color="#282828" data-opacity="0.6"></div>
                        <div class="container text-center">
                            <div class="col gla_round_block gla_wht_txt">
                                <span class="fix-montserrat-m">We are tying the knot!</span><br><span class="fix-montserrat-m-b">Saturday, 11 December 2021</span><br><br>
                                <div class="gla_countdown" data-year="2021" data-month="12" data-day="11"></div><br><br>
                            </div>
                            <div class="gla_icon_boxes row">
                                <div class="col-sm-5">
                                    <div class="gla_news_block">
                                        <a href="{{asset($cdn_link.'images/18.jpg')}}" class="lightbox">
                                            <img src="{{asset($cdn_link.'images/bio-m.jpg')}}" alt="">
                                        </a>
                                        <span class="gla_news_title text-maroon-1 pd-md"><strong>Andreas Budi<br>Kurniawan</strong></span>
                                        <p>
                                            son of<br>
                                            <span class="fix-montserrat-s-b"><img src="{{asset($cdn_link.'images/cross2.png')}}" style="height:12px;width:8px;margin-right:8px"> Mr. Yohanes Purdjono<br>(Kwee Kim Liong)</span>
                                            <br>&<br>
                                            <span class="fix-montserrat-s-b">Mrs. Susiana<br>(Ho Soe Tjin)</span><br><br><br>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-sm-2"></div>
                                <div class="col-sm-5">
                                    <div class="gla_news_block">
                                        <a href="{{asset($cdn_link.'images/15.jpg')}}" class="lightbox">
                                            <img src="{{asset($cdn_link.'images/bio-f.jpg')}}" alt="">
                                        </a>
                                        <span class="gla_news_title text-maroon-1 pd-md"><strong>Anastasia Aprilia<br>Paskah</strong></span>
                                        <p>
                                            daughter of<br>
                                            <span class="fix-montserrat-s-b">Mr. Souw Antonius Sonny Ananto<br>(Souw Siong Kiat)</span>
                                            <br>&<br>
                                            <span class="fix-montserrat-s-b">Mrs. Yosephine Laurentia Ratna Susianawaty<br>(Lauw May Siang)</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section    id="event-detail" class="gla_section gla_image_bck gla_fixed"  data-image="{{asset($cdn_link.'images/21.jpg')}}" data-stellar-background-ratio="0.8">
                        <div class="container text-center">     
                            <div class="gla_over" data-color="#ffffff" data-opacity="0.2"></div>   
                            <div class="container text-center">                
                                <span class="fix-montserrat-m text-choco-2">By the grace of God,</span><br>
                                <span class="fix-montserrat-s-b text-choco-1">we are pleased to announce our wedding to you, <br>our family and friends</span><br><br><br><br>
                                <div class="gla_icon_boxes row justify-content-center">
                                    @if(!($addition_logic && in_array('wedding',$addition_logic)))
                                    <div class="col-sm-3 col-xs-12"></div>
                                    @endif
                                    <div class="col-sm-6 col-xs-12">
                                        <a href="#" class="gla_news_block">
                                            <span class="gla_news_img">
                                                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15864.465837869644!2d106.5314932!3d-6.2483813!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x46ab143bbc85215e!2sCatholic%20Church%20St.%20Odilia!5e0!3m2!1sen!2sid!4v1637230122830!5m2!1sen!2sid" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                            </span>
                                            <span class="gla_news_title">Private Holy Matrimony</span>
                                            <p>
                                                <span class="fix-montserrat-sm-b text-success">Santa Odilia Citra Raya Church</span><br>
                                                Jl. Citra Raya Utama Timur <br>Blok L2 Kav. 31, Tangerang<br><br><br>
                                                <span class="fix-montserrat-s-b text-success">Saturday, 11 December 2021</span><br><br>
                                                <span class="label label-success">at 13:00 (1 PM)</span>
                                            </p>
                                        </a>
                                    </div> 
                                    @if($addition_logic && in_array('wedding',$addition_logic))
                                    <div class="col-sm-6 col-xs-12">
                                        <a href="#" class="gla_news_block">
                                            <span class="gla_news_img">
                                                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15865.143202959447!2d106.6585633!3d-6.225998!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xc0158cf1ec37a4a8!2sMenara%20Top%20Food!5e0!3m2!1sen!2sid!4v1637230173149!5m2!1sen!2sid" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                            </span>
                                            <span class="gla_news_title">Wedding Reception</span>
                                            <p>
                                                <span class="fix-montserrat-sm-b text-info">Menara Top Food - Alam Sutera</span><br>
                                                Jl. Jalur Sutera Bar. No. 3,<br>Tangerang<br><br><br>
                                                <span class="fix-montserrat-s-b text-info">Saturday, 11 December 2021</span><br><br>
                                                <span class="label label-info">at 18:00 (6 PM)</span>
                                            </p>
                                        </a>
                                    </div>
                                    @else
                                    <div class="col-sm-3 col-xs-12"></div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </section>
                    @if($addition_logic && in_array('wedding',$addition_logic))
                    <section    id="physical-inv" class="gla_section gla_image_bck" data-color="#ecf2f0">
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-12">
                                    <a href="{{asset($cdn_link.'images/inv.jpg')}}" class="lightbox">
                                        <img src="{{asset($cdn_link.'images/inv.jpg')}}" width="100%">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </section>
                    @endif
                    <section    id="live-streaming" class="gla_section gla_image_bck" data-color="#ecf2f0">
                        <div class="container">
                            <div class="row">
                                <span class="fix-montserrat-m">Live Streaming</span><br><br>
                                <div class="col-sm-4 col-xs-12 gla_image_bck" data-color="#fff">
                                    <div class="gla_simple_block">
                                        <h2>MISA PEMBERKATAN ANDREAS & APRILIA</h2>
                                        <p class="text-muted">SABTU, 11 DESEMBER 2021, PUKUL 13.00</p>
                                        <a href="https://www.youtube.com/watch?v=LCDEbiOboiI">live at <i class="ti ti-youtube gla_icon_box"></i></a>
                                    </div>
                                </div>
                                <iframe class="col-sm-8 col-xs-12 gla_image_bck" width="100%" style="min-height:300px" src="https://www.youtube.com/embed/LCDEbiOboiI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>
                    </section>
                    @if($addition_logic && in_array('wedding',$addition_logic))
                    <section    id="rsvp" class="gla_section gla_image_bck gla_wht_txt gla_fixed" data-stellar-background-ratio="0.8" data-image="{{asset($cdn_link.'images/9.jpg')}}">
                        <div class="gla_over" data-color="#282828" data-opacity="0.8"></div>
                        <div class="container text-right">
                            <p><img src="{{asset('asset-wedding-1/images/animations/rsvp_wh.gif')}}" data-bottom-top="@src:{{asset('asset-wedding-1/images/animations/rsvp_wh.gif')}}" height="150" alt=""></p>         
                            <p class="fix-montserrat-s">Can't wait to welcome our happy day with you. <br>At below you can confirm your attendance, thank you.</p>
                            <form id="form-rsvp" onsubmit="return false;">
                                <div class="row">
                                    <div class="col-sm-6"><br>
                                        <span class="fix-montserrat-s-b">Name</span>
                                        <input type="text" name="rsvp_name" maxlength="50" class="form-control form-opacity" value="{{$invite}}" required>
                                    </div>
                                    <div class="col-sm-6"><br>
                                        <span class="fix-montserrat-s-b">Address</span>
                                        <input type="text" name="rsvp_address" maxlength="50" class="form-control form-opacity" required>
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
                    @endif
                    <section    id="wishes" class="gla_section">
                        <div class="row text-left pd-md">
                            <table class="table table-sm table-borderless table-striped fix-montserrat-s text-choco-1" style="width:80%" id="table-wish">
                                <thead>
                                    <tr>
                                        <th width="25%">Sender</th>                              
                                        <th width="75%">Whishes</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </section>
                    <section    id="wishes2" class="gla_section gla_image_bck gla_fixed gla_wht_txt" data-stellar-background-ratio="0.8" data-image="{{asset($cdn_link.'images/1.jpg')}}">
                        <div class="gla_over" data-color="#282828" data-opacity="0.65"></div>
                        <div class="container">
                            <form id="form-wish" onsubmit="return false;">
                                <div class="row pd-md-h">
                                    <p class="fix-montserrat-s">Leave us<br>your beautiful wishes and most sincere prayers here<br>as we are so excited to embark on this new journey together.</p>
                                    <div class="col-md-12">
                                        <span class="fix-montserrat-s-b">Sender</span>
                                        <input type="text" name="wish_name" maxlength="50" class="form-control form-opacity" value="{{$invite}}" required>
                                    </div>
                                    <div class="col-md-12">
                                        <span class="fix-montserrat-s-b">Wishes</span>
                                        <textarea name="wish_message" maxlength="500" class="form-control form-opacity" required></textarea>
                                    </div>
                                    <div class="col-md-12">
                                        <input type="submit" class="btn submit" id="form-wish-send" value="send">
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
                                    $gallery_items = array('23','22','2-mini','5','21','18','19','20','15','13','11','10','9','12','16','24'); 
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
                    @if($addition_logic && in_array('wedding',$addition_logic))
                    <section    id="health-protocol" class="gla_section gla_image_bck" data-color="#fff">
                        <div class="container text-center pd-md">
                            <span class="fix-montserrat-m">Health Protocol</span><br><br>
                            <p class="fix-montserrat-s-b text-choco-2">So that we are all comfortable and safe in the effort to prevent covid-19, invited guests who are willing to attend the event are requested to comply with the following health protocols: </p><br>
                            <div class="row text-center fix-montserrat-s-b">
                                <div class="col-sm-3 col-xs-12 gla_round_block">
                                    <div class="gla_round_im gla_image_bck" data-image="{{asset($cdn_link.'images/hp-1.jpg')}}"></div>
                                    <p class="text-choco-1">wash hands & use hand sanitizer</p>
                                </div>
                                <div class="col-sm-3 col-xs-4 gla_round_block">
                                    <div class="gla_round_im gla_image_bck" data-image="{{asset($cdn_link.'images/hp-2.jpg')}}"></div>
                                    <p class="text-choco-1">use mask</p>
                                </div>
                                <div class="col-sm-3 col-xs-4 gla_round_block">
                                    <div class="gla_round_im gla_image_bck" data-image="{{asset($cdn_link.'images/hp-3.jpg')}}"></div>
                                    <p class="text-choco-1">don't shake hands</p>
                                </div>
                                <div class="col-sm-3 col-xs-4 gla_round_block">
                                    <div class="gla_round_im gla_image_bck" data-image="{{asset($cdn_link.'images/hp-4.jpg')}}"></div>
                                    <p class="text-choco-1">don't crowd</p>
                                </div>
                            </div>
                        </div>
                    </section>
                    @endif
                    <section    id="quote" class="gla_section gla_image_bck gla_fixed" data-stellar-background-ratio="0.8" data-image="{{asset($cdn_link.'images/4-scretch.jpg')}}">
                        <div class="gla_over" data-color="#ffff" data-opacity="0.5"></div>
                        <div class="container text-right pd-md-h">
                            <span class="fix-montserrat-s-b text-choco-1"><i>
                                <sup>4</sup> <span class="ft-shadow">Love is patient, love is kind. <br>It does not envy, it does not boast, <br>it is not proud.</span> 
                                <br><sup>5</sup> <span class="ft-shadow">It does not dishonor others, <br>it is not self-seeking, <br>it is not easily angered, <br>it keeps no record of wrongs.</span> 
                                <br><sup>6</sup> <span class="ft-shadow">Love does not delight in evil <br>but rejoices with the truth.</span> 
                                <br><sup>7</sup> <span class="ft-shadow">It always protects, always trusts, <br>always hopes, always perseveres.</span></i>
                            </span><br><br><br><br><br>
                            <p class="gla_subtitle">— 1 Corinthians 13:4-7 (NIV)</p>
                        </div>
                    </section>
                    <section    id="thank-you" class="gla_section gla_image_bck gla_fixed gla_wht_txt" data-stellar-background-ratio="0.8" data-image="{{asset($cdn_link.'images/17-mini.jpg')}}">
                        <div class="gla_over" data-color="#282828" data-opacity="0.2"></div>
                        <div class="container text-center">
                            <p style="height:100vh"><img src="{{asset('asset-wedding-1/images/animations/thnyou_wh.gif')}}" 
                                    data-bottom-top="@src:{{asset('asset-wedding-1/images/animations/thnyou_wh.gif')}}" height="120" alt=""></p>
                        </div>
                    </section>
                    <section    id="credit" class="gla_image_bck gla_section_extra_sml gla_wht_txt" data-color="#282828">
                        <div class="container">
                            <a href='{{env("APP_URL", "beritabaik.co")}}' target="_blank">© beritabaik.co</a>
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
                                    if(data){
                                        if(data.attend == 1){
                                            return  '<span><i class="ti ti-check"></i></span>';
                                        }else{
                                            return  '<span><i class="ti ti-close"></i></span>';
                                        }
                                    }else{
                                        return  '<span>-</span>';
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