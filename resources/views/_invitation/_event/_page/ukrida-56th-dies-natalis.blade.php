<!DOCTYPE html>
<html lang="en">
    <head>
        @include('_invitation._wedding._include.head-1')
        <?php
            $version = "?var=".date("Ymd")."012";
            $qrcode1 = "60010974057";
            $qrcode2 = "4400017897";
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
            $cdn_link   = "asset-event-bg/".$code."/";
        ?>
        <style>.highlight-1{
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
                background-color: black;
                color: white;
                padding: 5px 30px;
            }
            .gla_news_block{
                -webkit-box-shadow: 0 1.5px 9px 0 rgb(0 0 0 / 40%);
                box-shadow: 0 1.5px 9px 0 rgb(0 0 0 / 40%);
            }
            .text-choco-1{
                color: #956c5a
            }
            .text-choco-2{
                /* color: #6c4331 */
                color: #a47766;
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
            .text-blue{
                color: #0073e6 !important;
            }
            .text-blue-baby{
                color: #5a8ebf;
            }
            .text-blue-baby-sh{
                color: #5a8ebf;
                text-shadow: 2px 2px 4px #ffffff;
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
                padding: 80rem 20px 20px 20px;
            }
            .gla_round_block{
                margin-top: 0px !important;
            }
            .ft-shadow{
                color: white;
                text-shadow: 2px 2px 4px #000000;
            }
            .btn-brown-light-transp{
                box-shadow: 0 1.5px 9px 0 rgb(0 0 0 / 40%);
                background: rgba(149, 108, 90, 0.4) !important; 
                /* 108,67,49 */
                /* font-weight: 600; */
            }
            .btn-brown-light-transp:hover{
                box-shadow: 0 1.5px 9px 0 rgb(0 0 0 / 40%);
                background: rgba(48, 34, 29, 0.4) !important; 
                font-weight: 600;
            }
            .btn-blue-light-transp{
                box-shadow: 0 1.5px 9px 0 rgb(0 0 0 / 40%);
                background: rgba(90, 142, 191,0.4) !important;
                font-weight: 600;
            }
            .in-focus-white-light{
                background: rgba(255,255,255,0.5) !important;
                color: #6c4331 !important;
            }
            .in-focus-white-light:hover, .in-focus-white-light:active, .in-focus-white-light:after{
                background: rgba(255,255,255,0.9) !important;
            }
            .ft-shadow-soft-dark{
                text-shadow: 1px 1px 1px #000000;
            }
            .ft-shadow-soft-white{
                text-shadow: 2px 2px 4px #ffffff;
            }
            .ft-shadow-soft{
                text-shadow: 2px 2px 4px #333333;/* #737373; */
            }
            .ft-shadow-soft-reverse{
                text-shadow: 2px 2px 4px #30221d;
            }
            .boldme{
                font-weight: 700;
            }
            .text-green-sh{
                color: #99ff99;
            }
            .text-old-green-sh{
                color: #006600;
            }
        </style>
    </head>
    <body class="bg-black">
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
                    <p class="fix-montserrat-xs-b"><i>Processing your feedback ...</i></p>
                </div>
            </div>
        <!-- Preloader End-->
        <!-- OPEN -->
        <!-- #GOLD VERSION -->
            <div class="gla_invitation_i_longer gla_invitation_ii gla_image_bck text-choco-2" id="gla_welcome"> 
              <video class="bg-video-square" autoplay loop muted="">
                <source src="{{asset($cdn_link.'videos/bg.mp4')}}" type="video/mp4">
                Your browser does not support the video tag.
              </video>
            </div>
            <div class="bottom_el" id="gla_welcome2">
                  <h6 class="gla_wht_txt">Yang kami kasihi,<br><br><span class="fix-montserrat-s-b">{{@$invite?$invite:'Civitas Akademika Ukrida'}}</span></h6>
                  <h6 class="fix-montserrat-s-b text-choco-1 ft-shadow-soft-dark">mengundang hadir dalam <br>acara Ibadah dan Perayaan</h6>
            </div>
            <button type="button" class="btn btn-brown-light-transp gla_wht_txt gla_invitation_open_btn_longer__before" id="gla_welcome3" onclick="executeInv()">Open Invitation</button> 
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
                        <source src="{{asset($cdn_link.'audios/mars.mp3')}}" type="audio/mpeg">
                        <source src="{{asset($cdn_link.'audios/mars.mp3')}}" type="audio/ogg">
                        Your browser does not support the audio element.
                    </audio>
                </div>
                <header>      
                    <nav class="gla_light_nav gla_transp_nav">
                        <div class="container">
                            <div class="gla_logo_container clearfix">
                                <div class="gla_logo_txt">
                                    <a href="/" class="gla_logo hideontop">Dies Natalis UKRIDA ke 56</a>
                                    <div class="gla_logo_und">20 Januari 2023</div>
                                </div>
                            </div>
                            @include('_invitation._wedding._include.nav-2')
                        </div>
                    </nav>
                </header>
                <!-- Slider -->
                <div class="gla_slider gla_image_bck gla_fixed"  data-image="{{asset($cdn_link.'images/1.png')}}" data-stellar-background-ratio="0.8">
                    <!-- <div class="gla_over" data-color="#1e1d2d" data-opacity="0.15"></div> -->
                    <div class="container">
                    </div><br><br>
                    <a class="gla_scroll_down gla_go" href="#gla_content">
                        <b></b>Scroll
                    </a>
                </div>
                <!-- Slider End -->
                <!-- Main -->
                <section id="gla_content" class="gla_content">
                    <section    id="profile" class="gla_section gla_image_bck gla_fixed" data-stellar-background-ratio="0.8" 
                                data-image="{{asset($cdn_link.'images/place.jpg')}}">  
                        <div class="gla_over" data-color="#282828" data-opacity="0.6"></div>
                        <div class="container text-center">
                            <div class="col gla_round_block gla_wht_txt">
                                <div class="gla_countdown" data-year="2023" data-month="01" data-day="20"></div><br><br>
                            </div>
                            <div class="gla_icon_boxes row">
                                <div class="col-sm-3 col-xs-1"></div>
                                <div class="col-sm-6 col-xs-10">
                                    <a href="#" class="gla_news_block">
                                        <span class="gla_news_img">
                                          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.5938799549294!2d106.77826055057366!3d-6.185069595500282!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f6faf51f385f%3A0x1e6ce15362f792f9!2sUniversitas%20Ukrida%20Fakultas%20Kedokteran!5e0!3m2!1sid!2sid!4v1673323001133!5m2!1sid!2sid" 
                                            width="600" height="450" style="border:0;" allowfullscreen="" 
                                            loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                                          </iframe>
                                        </span>
                                        <span class="gla_news_title">Ibadah & Perayaan</span>
                                        <p>
                                            <span class="fix-montserrat-sm-b text-info">
                                              <b>Gedung B Kampus II UKRIDA, Auditorium FKIK Lantai 2,</b>
                                            </span><br>
                                            Jl. Arjuna Utara No. 6,<br> 
                                            Jakarta Barat<br><br><br>
                                            <span class="fix-montserrat-s-b text-info">Jumat, 20 Januari 2023</span><br><br>
                                            <span class="label label-danger">09.00-12.00 WIB</span>
                                        </p>
                                    </a>
                                </div> 
                                <div class="col-sm-3 col-xs-1"></div>
                            </div>
                        </div>
                    </section>
                    <section    id="rsvp" class="gla_section gla_image_bck gla_wht_txt gla_fixed" data-stellar-background-ratio="0.8" data-image="{{asset($cdn_link.'images/sekarang/12.webp')}}">
                        <div class="gla_over" data-color="#282828" data-opacity="0.8"></div>
                        <div class="container text-right">
                            <div class="container-fluid">
                                <div class="text-right">
                                    <img src="{{asset($cdn_link.'images/ani-rsvp.gif')}}" data-bottom-top="@src:{{asset($cdn_link.'images/ani-rsvp.gif')}}" height="100" alt="">     
                                </div>
                                <p class="fix-montserrat-sxs-b ft-shadow">Mohon mengkonfirmasi kehadiran dengan menggunakan nama asli Anda, terima kasih.</p>
                                <form id="form-rsvp" onsubmit="return false;">
                                    <div class="row">
                                        <div class="col-sm-6"><br>
                                            <span class="fix-montserrat-s-b">Nama</span>
                                            <input type="text" name="rsvp_name" maxlength="50" spellcheck="false" class="form-control form-opacity in-focus-white-light" value="{{$invite}}" required>
                                        </div>
                                        <div class="col-sm-6"><br>
                                            <span class="fix-montserrat-s-b">NIM/Unit/Prodi/Instansi</span>
                                            <input type="text" name="rsvp_address" maxlength="50" spellcheck="false" class="form-control form-opacity in-focus-white-light" required>
                                        </div>
                                        <div class="col-md-12"><br>
                                            <span class="fix-montserrat-s-b">Apakah Anda datang?</span><br>
                                            <input type="radio" name="rsvp_attend" value="1" required>
                                            <small>Ya, tentu!</small><br>
                                            <!-- <input type="radio" name="rsvp_attend" value="0">
                                            <small>Maaf, tidak bisa hadir.</small> -->
                                        </div>
                                        <div class="col-md-12" style="padding-top:50px">
                                            <input type="submit" class="btn submit" id="form-rsvp-send" value="save">
                                        </div>
                                    </div>
                                    <div class="row">
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
                                                                <th width="40%">NIM/Unit/Prodi/Instansi</th>                              
                                                                <th width="20%">Kehadiran</th>
                                                            </tr>
                                                        </thead>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </section>
                    <section    id="wishes" class="gla_section" style="background-color:white">
                        <div class="row text-left pd-md">
                            <table class="table table-sm table-borderless table-striped fix-montserrat-s" style="width:80%" id="table-wish">
                                <thead>
                                    <tr class="text-choco-2">
                                        <th width="25%">Pengirim</th>                              
                                        <th width="75%">Harapan</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </section>
                    <section    id="wishes2" class="gla_section gla_image_bck gla_fixed gla_wht_txt" data-stellar-background-ratio="0.8" data-image="{{asset($cdn_link.'images/sekarang/15.webp')}}">
                        <div class="gla_over" data-color="#282828" data-opacity="0.50"></div>
                        <div class="container text-left">
                            <form id="form-wish" onsubmit="return false;">
                                <p class="fix-montserrat-xs-b"><b>Tuliskan pesan Anda disini ~</b></p>
                                <img src="{{asset($cdn_link.'images/ani-write.gif')}}" data-bottom-top="@src:{{asset($cdn_link.'images/ani-write.gif')}}" height="80" alt="">  
                                <br>
                                <div class="row">
                                    <div class="col-sm-6"><br>
                                        <span class="fix-montserrat-s-b ft-shadow">Pengirim</span>
                                        <input type="text" name="wish_name" maxlength="50" spellcheck="false" class="form-control in-focus-white-light" value="{{$invite}}" required>
                                    </div>
                                    <div class="col-sm-6"><br>
                                        <span class="fix-montserrat-s-b ft-shadow">Harapan</span>
                                        <textarea name="wish_message" maxlength="500" spellcheck="false" class="form-control in-focus-white-light" required></textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <input type="submit" class="btn submit btn-brown-light-transp" id="form-wish-send" value="send">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </section>
                    <section    id="gallery" class="gla_section gla_image_bck gla_fixed gla_wht_txt" data-stellar-background-ratio="0" 
                                data-image="{{asset($cdn_link.'images/white-bg.webp')}}">
                        <div class="container text-center">
                            <?php
                                $galleries          = array(
                                  array("dir"=>"dulu","title"=>"DAHULU"),
                                  array("dir"=>"sekarang","title"=>"SEKARANG"),
                                );
                                $gallery_items[0]   = array(
                                  array("img"=>"1.webp","desc"=>"Gedung Kampus Tanjung Duren Tahun 1992"),
                                  array("img"=>"2.webp","desc"=>"Pelantikan Dokter Pertama Tahun 1977"),
                                  array("img"=>"3.webp","desc"=>"Pameran Pendidikan UKRIDA Tahun 1994"),
                                  array("img"=>"4.webp","desc"=>"Lustrum Ke II UKRIDA Tahun 1977"),
                                  array("img"=>"5.webp","desc"=>"Perkuliahan Fakultas Kedokteran Tahun 1985"),
                                  array("img"=>"6.webp","desc"=>"Peresmian UKRIDA Tahun 1967"),
                                  array("img"=>"7.webp","desc"=>"Pemotongan Tumpeng oleh Pimpinan UKRIDA Tahun 1976","grid"=>"full","height"=>"auto"),
                                ); 
                                $gallery_items[1] =   array(
                                  array("img"=>"1.webp","desc"=>""),
                                  array("img"=>"2.webp","desc"=>""),
                                  array("img"=>"3.webp","desc"=>""),
                                  array("img"=>"4.webp","desc"=>""),
                                  array("img"=>"5.webp","desc"=>""),
                                  array("img"=>"6.webp","desc"=>""),
                                  array("img"=>"7.webp","desc"=>""),
                                  array("img"=>"8.webp","desc"=>""),
                                  array("img"=>"9.webp","desc"=>""),
                                  array("img"=>"10.webp","desc"=>""),
                                  array("img"=>"11.webp","desc"=>""),
                                  array("img"=>"12.webp","desc"=>""),
                                  // array("img"=>"14.webp","desc"=>"","height"=>"auto"),
                                ); 
                            ?>
                            @for($i = 0; $i < sizeof($galleries); $i++)
                              <br><br><span class="fix-montserrat-m-b text-old-green-sh highlight-2-light">{{$galleries[$i]['title']}}</span><br><br><br><br>
                              <div>
                                <div class="gla_icon_boxes row justify-content-center">
                                    @foreach($gallery_items[$i] as $item)
                                    <div class="{{@$item['grid'] == 'full'?'col-xs-12':'col-xs-12 col-md-4'}}">
                                        <div class="gla_news_block">
                                            <a href="{{asset($cdn_link.'images/'.$galleries[$i]['dir'].'/'.$item['img'])}}" class="lightbox">
                                                <img  class="lazy" src="{{asset('asset-main/images/image/lazyload-bbc.webp')}}" 
                                                      data-src="{{asset($cdn_link.'images/'.$galleries[$i]['dir'].'/'.$item['img'])}}" 
                                                      alt="foto ukrida dulu" style="{{@$item['height'] == 'auto'?'':'height:200px;'}}">
                                            </a>
                                            <!-- <span class="gla_news_title-m text-green-sh pd-sd"><strong>Rezeki Tambunan</strong></span> -->
                                            @if(@$item['desc'])
                                              <p class="text-choco-2 text-center" >
                                                  <br><br>
                                                  <span>{!! $item['desc'] !!}</span>
                                              </p>
                                            @endif
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                              </div>
                            @endfor
                        </div>
                        <br><br><br>
                    </section>
                    <section    id="health-protocol" class="gla_section gla_image_bck" data-color="#fff">
                        <div class="container text-center pd-md">
                            <span class="fix-montserrat-m">Protokol Kesehatan</span><br><br>
                            <p class="fix-montserrat-s-b text-choco-2">Agar kita semua merasa nyaman dan aman dalam upaya pencegahan covid-19, tamu undangan yang bersedia hadir dimohon untuk mematuhi protokol kesehatan berikut ini: </p><br>
                            <div class="row text-center fix-montserrat-s-b">
                                <div class="col-sm-3 col-xs-12 gla_round_block">
                                    <div class="gla_round_im gla_image_bck" data-image="{{asset($cdn_link.'images/hp-1.png')}}"></div>
                                    <p class="text-choco-1">menggunakan masker</p>
                                </div>
                                <div class="col-sm-6 col-xs-12 gla_round_block">
                                    <img class="lazy" src="{{asset('asset-main/images/image/lazyload-bbc.webp')}}" data-src="{{asset($cdn_link.'images/hp-2.png')}}" style="max-width:300px">
                                </div>
                                <div class="col-sm-3 col-xs-12 gla_round_block">
                                    <div class="gla_round_im gla_image_bck" data-image="{{asset($cdn_link.'images/hp-3-a.png')}}"></div>
                                    <p class="text-choco-1">cuci tangan & pakai hand sanitizer</p>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section    id="quote" class="gla_image_bck gla_fixed" data-stellar-background-ratio="0.8" data-image="{{asset($cdn_link.'images/sekarang/14.webp')}}">
                        <!-- <div class="gla_over" data-color="#ffff" data-opacity="0.2"></div> -->
                        <div class="container text-right pd-md-h">
                            <span class="fix-montserrat-s-b text-green-sh"><i>
                                <sup>"</sup> 
                                <span class="ft-shadow">
                                  Penyelenggara Tridharma Perguruan Tinggi<br>
                                  yang unggul di taraf nasional dan internasional<br>
                                  berdasarkan nilai-nilai Kristiani.
                                </span>
                                <sup>"</sup>
                            </span><br><br><br><br><br>
                            <p class="gla_subtitle ft-shadow">— Visi UKRIDA</p>
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
                seeRSVP();
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
                                          seeRSVP();
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
                        paging: true,
                        pageLength: 10,
                        ajax: '{{url("/e/".$code."/get-rsvp")}}',
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
                        ajax: '{{url("/e/".$code."/get-wish")}}',
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