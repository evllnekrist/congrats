<!DOCTYPE html>
<html lang="en">
    <head>
        @include('_invitation._wedding._include.head-1')
        <?php
            $version = "?var=".date("Ymd")."009";
            $qrcode1 = "5315111274";
            $qrcode2 = "004138626631";
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
            .highlight-2-light{
                background: rgba(255,255,255,0.8) !important;
                box-shadow: 0 1.5px 9px 0 rgb(0 0 0 / 20%);
                color: #956c5a;
                padding: 5px 30px;
                line-height: 2;
                border-radius: 10px;
            }
            .btn-white-light{
                box-shadow: 0 1.5px 9px 0 rgb(0 0 0 / 40%);
                background-color: white !important;
                font-weight: 600;
            }
            .btn-brown-light-transp{
                box-shadow: 0 1.5px 9px 0 rgb(0 0 0 / 70%);
                /* background: rgba(108,67,49,0.6) !important; */
                background: rgba(0,0,0,0.7) !important;
                font-weight: 600;
            }
            .ft-shadow-soft-reverse{
                text-shadow: 2px 2px 4px green;
            }
            .ft-shadow-soft-reverse-black{
                text-shadow: 2px 2px 4px black;
            }
            .ft-shadow-soft-reverse-gold{
                text-shadow: 2px 2px 2px #bb862a;
            }
            .ft-shadow-soft-reverse-light-gold{
                text-shadow: 2px 2px 4px #ecd5ac;
            }
            .text-gold{
                color: #d39d3d;
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
            .text-creme-1{
                color: #d6b08c
            }
            .pd-lg{
                padding-top: 60px;
                padding-bottom: 60px;
            }
            .pd-md{
                padding-top: 20px;
                padding-bottom: 20px;
            }
            .pd-md-h{
                padding: 20px 20px 20px 20px;
            }
            .pd-sm{
                padding: 5px 20px 10px 20px;
            }
            .gla_round_block{
                margin-top: 0px !important;
            }
            .ft-shadow{
                color: white;
                text-shadow: 2px 2px 4px #000000;
            }
            .event-detail-pd-top{
                @if(($addition_logic && in_array('wedding',$addition_logic)))
                    padding-top: 140px!important;
                @endif
            }
            .gla_first_step header nav.gla_transp_nav{
                display: none;
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
        <!-- Preloader -->
            <div class="gla_page_loader_light gla_image_bck text-choco-3" data-color="#181d23" style="display:none">
                <div class="gla_loader_light">
                    <p><img src="{{asset($cdn_link.'images/loading6.gif')}}" height="150" alt=""></p>
                    <p class="fix-montserrat-xs-b"><i>Processing your feedback ...</i></p>
                </div>
            </div>
        <!-- Preloader End-->
        <!-- OPEN -->
            <div class="gla_invitation_container_longer" id="gla_welcome">
                <div class="gla_invitation_i_longer gla_invitation_ii gla_image_bck" data-image="{{asset($cdn_link.'images/sp-cover.webp')}}">
                    <!-- 31_b -->
                    <p style="margin-top:1vh;margin-bottom:1vh" class="gla_wht_txt ft-shadow-soft-reverse">
                        <span class="fix-montserrat-s-b">The Wedding of</span><br>
                        <span class="gla_slide_midtitle_m2">Bismo & Lisa</span><br><br>
                    </p>
                    <div class="row">
                        @if($invite)
                            <h6 class="gla_wht_txt ft-shadow-soft-reverse-gold">Dear, <span class="fix-montserrat-s-b-extra">{{$invite}}</span></h6>
                            @if(isset($_GET['qty']))
                                <span class="highlight-2-bold fix-montserrat-xs text-lime">
                                    This invitation is limited to <span class="fix-montserrat-xs-b">{{$_GET['qty']}} person {{$_GET['qty']>1?"'s":""}}</span>
                                </span>
                                @if(isset($_GET['seat']))
                                    <br><span class="highlight-2-bold fix-montserrat-xs text-lime"> Your seat{{$_GET['qty']>1?"'s are":" is"}} number <span class="fix-montserrat-xs-b">{{$_GET['seat']}}</span></span>
                                @endif
                                <br><br>
                            @endif
                        @endif
                        <div class="for-mobile" style="display:none">
                            <span class="fix-montserrat-sxs-b highlight-2-light">we would like to invite you to be part of</span><br>
                            <span class="fix-montserrat-sxs-b highlight-2-light">our happy day !</span>
                        </div>
                    </div>
                </div>
                <div class="for-desktop gla_invitation_open_btn_longer__before" style="display:none">
                    <span class="fix-montserrat-xs-b highlight-2-light">we would like to invite you to be part of</span><br>
                    <span class="fix-montserrat-xs-b highlight-2-light">our happy day !</span>
                </div>
                <button type="button" class="btn btn-brown-light-transp text-choco-1 gla_invitation_open_btn_longer" onclick="executeInv()">Open Invitation</button>
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
                        <source src="{{asset($cdn_link.'audios/j_ust__wedding_song__ft_wonpil_day6.mp3')}}" type="audio/mpeg">
                        <source src="{{asset($cdn_link.'audios/j_ust__wedding_song__ft_wonpil_day6.mp3')}}" type="audio/ogg">
                        Your browser does not support the audio element.
                    </audio>
                </div>
                <header>
                    <nav class="gla_light_nav gla_transp_nav">
                        <div class="container">
                            <div class="gla_logo_container clearfix">
                                <div class="gla_logo_txt">
                                    <a href="/" class="gla_logo">Bismo & Lisa</a>
                                    <div class="gla_logo_und">October 1st, 2022</div>
                                </div>
                            </div>
                            @include('_invitation._wedding._include.nav-2-eng')
                        </div>
                    </nav>
                </header>
                <!-- Slider -->
                <div class="gla_slider gla_image_bck gla_wht_txt gla_fixed"  data-image="{{asset($cdn_link.'images/sp-opening.webp')}}" data-stellar-background-ratio="0.8">
                    <div class="gla_over" data-color="#1e1d2d" data-opacity="0.15"></div>
                    <div class="container">
                        <div class="gla_slide_txt gla_slide_center_bottom text-center">
                            <div class="gla_slide_midtitle">B & L</div>
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
                                data-image="{{asset($cdn_link.'images/bg-1.webp')}}">
                        <!-- <div class="gla_over" data-color="#282828" data-opacity="0.6"></div> -->
                        <div class="container text-center">
                            <div class="col gla_round_block text-gold">
                                <span class="fix-montserrat-m">Getting Married</span><br>
                                <span class="fix-montserrat-m-b ft-shadow-soft-reverse-light-gold">Saturday, 01 October 2022</span><br><br>
                                <div class="gla_countdown" data-year="2022" data-month="10" data-day="01"></div><br><br>
                            </div>
                            <div class="gla_icon_boxes row">
                                <div class="col-sm-5">
                                    <div class="gla_news_block">
                                        <a href="{{asset($cdn_link.'images/sp-groom-full.webp')}}" target="_blank">
                                            <!-- class="lightbox" data-lightbox="profile"> -->
                                            <img src="{{asset($cdn_link.'images/sp-groom-square.webp')}}" alt="">
                                        </a>
                                        <span class="gla_news_title text-maroon-1 ft-shadow-soft-reverse-light-gold pd-md"><strong>Bismo<br>Wirayuda</strong></span>
                                        <p>
                                            son of<br>
                                            <span class="fix-montserrat-s-b"><img src="{{asset($cdn_link.'images/cross2.png')}}" style="height:12px;width:8px;margin-right:8px"> Mr. Hendra Janto</span>
                                            <br>&<br>
                                            <span class="fix-montserrat-s-b">Mrs. Lina Tanudjaja</span>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-sm-2"></div>
                                <div class="col-sm-5">
                                    <div class="gla_news_block">
                                        <a href="{{asset($cdn_link.'images/sp-bride-full.webp')}}" target="_blank">
                                            <!-- class="lightbox" data-lightbox="profile"> -->
                                            <img src="{{asset($cdn_link.'images/sp-bride-square.webp')}}" alt="">
                                        </a>
                                        <span class="gla_news_title text-maroon-1 ft-shadow-soft-reverse-light-gold pd-md"><strong>Lisa<br>Melyani</strong></span>
                                        <p>
                                            daughter of<br>
                                            <span class="fix-montserrat-s-b">Mr. Andreas Aten</span>
                                            <br>&<br>
                                            <span class="fix-montserrat-s-b"><img src="{{asset($cdn_link.'images/cross2.png')}}" style="height:12px;width:8px;margin-right:8px"> Mrs. Nurhana</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section    id="event-detail" class="gla_section gla_image_bck gla_fixed"  data-image="{{asset($cdn_link.'images/8.webp')}}" data-stellar-background-ratio="0.8">
                        <div class="container text-center">
                            <!-- <div class="gla_over" data-color="#ffffff" data-opacity="0.2"></div>    -->
                            <div class="container text-center event-detail-pd-top">
                                <span class="fix-montserrat-m text-choco-2">By the grace of God,</span><br>
                                <span class="fix-montserrat-s-b text-choco-1">we are pleased to announce our wedding to you, <br>our family and friends</span><br><br><br><br>
                                <div class="gla_icon_boxes row justify-content-center">
                                    @if(!($addition_logic && in_array('wedding',$addition_logic)))
                                    <div class="col-sm-3 col-xs-12"></div>
                                    @endif
                                    <div class="col-sm-6 col-xs-12">
                                        <a target="_blank" href="https://goo.gl/maps/8dGeWrdDuoS1AEcQ8" class="gla_news_block">
                                            <span class="gla_news_img">
                                                <img src="{{asset($cdn_link.'images/sp-place1.jpg')}}" alt="">
                                            </span>
                                            <span class="gla_news_title">Holy Matrimony</span>
                                            <p>
                                                <span class="fix-montserrat-sm-b text-success">Gereja Santo Matias Rasul</span><br>
                                                RT.11/RW.13, Duri Kosambi,<br>Kec. Cengkareng,<br>Kota Jakarta,<br>DKI Jakarta 11750<br><br><br>
                                                <span class="fix-montserrat-s-b text-success">Saturday, 01 October 2022</span><br><br>
                                                <span class="label label-success">at 10:00 (10 AM)</span>
                                            </p>
                                        </a>
                                    </div>
                                    @if($addition_logic && in_array('wedding',$addition_logic))
                                    <div class="col-sm-6 col-xs-12">
                                        <a target="_blank" href="https://g.page/gskrestaurant?share" class="gla_news_block">
                                            <span class="gla_news_img">
                                                <img src="{{asset($cdn_link.'images/sp-place2.jpg')}}" alt="">
                                            </span>
                                            <span class="gla_news_title">Wedding Reception</span>
                                            <p>
                                                <span class="fix-montserrat-sm-b text-info">Grand Serpong Kitchen</span><br>
                                                Jl. Raya Serpong No.KM.8, Pakulonan,<br>Kec. Serpong Utara,<br>Kota Tangerang Selatan,<br>Banten 15325<br><br><br>
                                                <span class="fix-montserrat-s-b text-info">Saturday, 01 October 2022</span><br><br>
                                                <span class="label label-danger">at 18:00 (6 PM)</span>
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
                    <section    id="rsvp" class="gla_section gla_image_bck gla_wht_txt gla_fixed" data-stellar-background-ratio="0.8" data-image="{{asset($cdn_link.'images/9.webp')}}">
                        <div class="gla_over" data-color="#282828" data-opacity="0.8"></div>
                        <div class="container">
                            <div class="text-right">
                                <img src="{{asset($cdn_link.'images/ani-rsvp.gif')}}" data-bottom-top="@src:{{asset($cdn_link.'images/ani-rsvp.gif')}}" height="100" alt="">
                            </div>
                            <p class="fix-montserrat-s-b">Can't wait to welcome our happy day with you.<br>At below, please confirm your attendance.<br>Thank you.</p>
                            <form id="form-rsvp" onsubmit="return false;">
                                <div class="row">
                                    <div class="col-md-8"><br>
                                        <span class="fix-montserrat-s-b">Name</span>
                                        <input type="text" name="rsvp_name" maxlength="50" class="form-control form-opacity" value="{{$invite}}" required>
                                    </div>
                                    <div class="col-md-4"><br>
                                        <span class="fix-montserrat-s-b" title="Jumlah Tamu Undangan">Number of Guest</span>
                                        <input type="number" name="rsvp_address" class="form-control form-opacity" required>
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
                                                <table class="table table-sm table-borderless table-striped text-info" id="table-rsvp" width="100%">
                                                    <thead>
                                                        <tr>
                                                            <th width="40%">Sender</th>
                                                            <th width="40%">Num of Guest</th>
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
                        <div class="row text-left pd-lg">
                            <table class="table table-sm table-borderless table-striped fix-montserrat-s" style="width:80%" id="table-wish">
                                <thead>
                                    <tr class="text-info">
                                        <th width="25%">Sender</th>
                                        <th width="75%">Wishes</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </section>
                    <section    id="wishes2" class="gla_section gla_image_bck gla_fixed gla_wht_txt" data-stellar-background-ratio="0.8" data-image="{{asset($cdn_link.'images/5.webp')}}">
                        <div class="gla_over" data-color="#282828" data-opacity="0.65"></div>
                        <div class="container">
                            <form id="form-wish" onsubmit="return false;">
                                <div class="row pd-md-h">
                                    <img src="{{asset($cdn_link.'images/ani-write.gif')}}" data-bottom-top="@src:{{asset($cdn_link.'images/ani-write.gif')}}" height="150" alt="">
                                    <p class="fix-montserrat-s">Leave us your beautiful wishes<br>and most sincere prayers here<br>as we are so excited to embark on this new journey together.</p>
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
                    <section    id="gift_qrcode" class="gla_section gla_image_bck gla_fixed"  data-image="{{asset($cdn_link.'images/10.webp')}}" data-stellar-background-ratio="0.8">
                        <div class="container-fluid text-center">
                            <div class="gla_over" data-color="#ffffff" data-opacity="0.6"></div>
                            <div class="container text-center">
                                <span class="fix-montserrat-m-b text-rose-sh highlight-2-light">Wedding Gift</span><br><br>
                                <span class="fix-montserrat-s-b text-choco-1">Without reducing respect,<br>for invited guests who are willing to give a sign of love for us, can go through:
                                <p style="height:20vh"></p>
                                <div class="gla_icon_boxes row justify-content-center">
                                    <div class="col-sm-6 col-xs-6">
                                        <div class="gla_news_block">
                                            <span class="gla_news_img" style="height:auto!important"><br>
                                                <a href="{{asset($cdn_link.'images/qrcode-bismo.webp')}}" target="_blank">
                                                    <!-- class="lightbox" data-lightbox="qrcode">  -->
                                                    <img src="{{asset($cdn_link.'images/qrcode-bismo.webp')}}" download="qrcode-bismo.webp"
                                                    style="height:15vh;width:15vh">
                                                </a>
                                            </span>
                                            <p onclick="copy_to_clipboard('{{$qrcode1}}')">
                                                <span class="fix-montserrat-s-b">
                                                    <label class="text-success">BCA - {{$qrcode1}}<br>a/n Bismo Wirayuda</label>
                                                    <i class="fa fa-clipboard text-secondary" aria-hidden="true" title="copy qrcode"></i>
                                                    <br><small>[copy]<small>
                                                </span>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-xs-6">
                                        <div class="gla_news_block">
                                            <span class="gla_news_img" style="height:auto!important"><br>
                                                <a href="{{asset($cdn_link.'images/qrcode-lisa.webp')}}" target="_blank">
                                                    <!-- class="lightbox" data-lightbox="qrcode">  -->
                                                    <img src="{{asset($cdn_link.'images/qrcode-lisa.webp')}}" download="qrcode-lisa.webp"
                                                    style="height:15vh;width:15vh">
                                                </a>
                                            </span>
                                            <p onclick="copy_to_clipboard('{{$qrcode2}}')">
                                                <span class="fix-montserrat-s-b">
                                                    <label class="text-success">Permata - {{$qrcode2}}<br>a/n Lisa Melyani</label>
                                                    <i class="fa fa-clipboard text-secondary" aria-hidden="true" title="copy qrcode"></i>
                                                    <br><small>[copy]<small>
                                                </span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section    id="gallery" class="gla_section gla_image_bck gla_fixed gla_wht_txt">
                        <div class="container text-center"><br>
                            <span class="fix-montserrat-m text-choco-1">Gallery</span><br><br>
                            <div class="gla_slider_carousel">
                                <?php
                                    $gallery_items = array('1','2','3','4','6','6a','sp-closing','7','11b','11');
                                ?>
                                @foreach($gallery_items as $item)
                                <div class="gla_slider gla_slider_md gla_image_bck gla_wht_txt" data-image="{{asset($cdn_link.'images/'.$item.'.webp')}}">
                                    <div class="gla_over" data-color="#000" data-opacity="0"></div>
                                    <a href="{{asset($cdn_link.'images/'.$item.'.webp')}}" class="lightbox" data-lightbox="gallery">
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
                        </div>
                    </section>
                    @if($addition_logic && in_array('wedding',$addition_logic))
                    <section    id="health-protocol" class="gla_section gla_image_bck" data-color="#fff">
                        <div class="container text-center pd-sm">
                            <span class="fix-montserrat-m">Health Protocol</span><br><br><br>
                            <p class="fix-montserrat-xs-b text-choco-2">So that we are all comfortable and safe in the effort to prevent covid-19, invited guests who are willing to attend the event are requested to comply with the following health protocols: </p>
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
                    @endif
                    <section    id="quote" class="gla_section gla_image_bck gla_fixed" data-stellar-background-ratio="0.8" data-image="{{asset($cdn_link.'images/sp-footer.webp')}}">
                        <!-- <div class="gla_over" data-color="#ffff" data-opacity="0.5"></div> -->
                        <div class="container pd-md-h">
                            <p style="height:5vh">
                                <span class="fix-montserrat-s-b text-choco-1 text-right">
                                    <sup>"</sup>
                                    <span class="ft-shadow">
                                        I love you
                                        <br>&nbsp;&nbsp;for all that you are
                                        <br>&nbsp;&nbsp;all that you have been
                                        <br>&nbsp;&nbsp;and all that you will be
                                    </span>
                                    <sup> .... <b style="color:#ff614b;font-size:20px">&hearts;</b> "</sup>
                                </span>
                            </p>
                            <p style="height:30vh"></p>
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

                let isMobile = /iPhone|iPad|iPod|Android/i.test(navigator.userAgent);
                if (isMobile) {
                    $(".for-mobile").each(function() {
                        $(this).show();
                    });
                }else{
                    $(".for-desktop").each(function() {
                        $(this).show();
                    });
                }

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
                            let address = ($('[name="rsvp_address"]').val()).toString();
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
                                        toastr.success(data.message, 'Thankyou!', {timeOut: 3000});
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
                                        toastr.success(data.message, 'Thankyou!', {timeOut: 3000});
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