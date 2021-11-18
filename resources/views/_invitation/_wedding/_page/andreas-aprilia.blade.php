<!DOCTYPE html>
<html lang="en">
    <head>
        @include('_invitation._wedding._include.head-1')
        @include('_invitation._wedding._include.asset-top-1')
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
                <div class="gla_invitation_i gla_invitation_ii gla_image_bck text-choco-2" data-image="{{asset($cdn_link.'images/3_inv_ver2.jpg')}}">
                    <p><img src="{{asset('asset-wedding-1/images/invitations/inv_i/save_the_date_bl.gif')}}" style="height:20vh;margin-bottom:15vh"></p>
                    <span class="fix-dosis-m-b"><br><br>
                        @if($invite)
                            <strong class="text-choco-1">Dear, {{$invite}}</strong><br>
                        @endif
                        you are invited!
                    </span><br><br>
                    <span class="fix-dosis-m-b">Wedding of Andreas & Aprilia</span><br>
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
                                    <a href="/" class="gla_logo">Andreas & Aprilia</a>
                                    <div class="gla_logo_und">December 11, 2021</div>
                                </div>
                            </div>
                            @include('_invitation._wedding._include.nav-1')
                        </div>
                    </nav>
                </header>
                <!-- Slider -->
                <div class="gla_slider gla_image_bck  gla_wht_txt gla_fixed"  data-image="{{asset($cdn_link.'images/20.jpg')}}" data-stellar-background-ratio="0.8">
                    <div class="gla_over" data-color="#1e1d2d" data-opacity="0.15"></div>
                    <div class="container">
                        <div class="gla_slide_txt gla_slide_center_bottom text-center">
                            <div class="gla_slide_midtitle">We're Getting Married</div>
                        </div>
                    </div>
                    <a class="gla_scroll_down gla_go" href="#gla_content">
                        <b></b>Scroll
                    </a>
                </div>
                <!-- Slider End -->
                <!-- Main -->
                <section id="gla_content" class="gla_content">
                    <section    id="quote" class="gla_section gla_image_bck gla_fixed" data-stellar-background-ratio="0.8" data-image="{{asset($cdn_link.'images/quote-bg.jpg')}}">
                        <div class="container text-left">
                            <h3>"<sup>4</sup> Love is patient, love is kind. It does not envy, it does not boast, it is not proud. 
                            <sup>5</sup> It does not dishonor others, it is not self-seeking, it is not easily angered, it keeps no record of wrongs. 
                            <sup>6</sup> Love does not delight in evil but rejoices with the truth. 
                            <sup>7</sup> It always protects, always trusts, always hopes, always perseveres."</h3><br>
                            <p class="gla_subtitle">— 1 Corinthians 13:4-7 (NIV)</p>
                        </div>
                    </section>
                    
                    <section    id="profile" class="gla_section gla_image_bck gla_fixed" data-stellar-background-ratio="0.8" 
                                data-image="{{asset($cdn_link.'images/7.jpg')}}">  
                        <div class="gla_over" data-color="#282828" data-opacity="0.4"></div>
                        <div class="container text-center">
                            <div class="col gla_round_block">    
                                <span class="fix-dosis-l-b gla_wht_txt">Are getting married<br>Saturday, 11 December 2021</span>
                                <p class="gla_slide_subtitle gla_wht_txt">Santa Odilia Citra Raya Church<br>Tanggerang</p>
                                <!-- <div class="gla_countdown" data-year="2021" data-month="02" data-day="20"></div> -->
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
                                            <b>Mr. Yohanes Purdjono<br>(Kwee Kim Liong)</b>
                                            <br>&<br>
                                            <b>Mrs. Susiana<br>(Ho Soe Tjin)</b><br><br><br>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                </div>
                                <div class="col-sm-5">
                                    
                                    <div class="gla_news_block">
                                        <a href="{{asset($cdn_link.'images/15.jpg')}}" class="lightbox">
                                            <img src="{{asset($cdn_link.'images/bio-f.jpg')}}" alt="">
                                        </a>
                                        <span class="gla_news_title text-maroon-1 pd-md"><strong>Anastasia Aprilia<br>Paskah</strong></span>
                                        <p>
                                            daughter of<br>
                                            <b>Mr. Souw Antonius Sonny Ananto<br>(Siow Siong Kiat)</b>
                                            <br>&<br>
                                            <b>Mrs. Yosephine Laurentia Ratna Susianawaty<br>(Lauw May Siang)</b>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section    id="event-detail" class="gla_section">
                        <div class="container text-center">
                            <h2>Where & When</h2><br><br>
                            <div class="gla_icon_boxes row text-left">
                                <div class="col-sm-6 col-xs-12">
                                    <a href="#" class="gla_news_block">
                                        <span class="gla_news_img">
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15864.465837869644!2d106.5314932!3d-6.2483813!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x46ab143bbc85215e!2sCatholic%20Church%20St.%20Odilia!5e0!3m2!1sen!2sid!4v1637230122830!5m2!1sen!2sid" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                        </span>
                                        <span class="gla_news_title">Private Holy Matrimony</span>
                                        <p>
                                            <b>Santa Odilia Citra Raya Church</b><br>
                                            Jl. Citra Raya Utama Timur Blok L2 Kav. 31<br>Tanggerang<br>
                                            Saturday, 11 December 2021<br><br>
                                            <span class="label label-success">at 13:00 (1 PM)</span>
                                        </p>
                                    </a>
                                </div> 
                                <div class="col-sm-6 col-xs-12">
                                    <a href="#" class="gla_news_block">
                                        <span class="gla_news_img">
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15865.143202959447!2d106.6585633!3d-6.225998!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xc0158cf1ec37a4a8!2sMenara%20Top%20Food!5e0!3m2!1sen!2sid!4v1637230173149!5m2!1sen!2sid" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                        </span>
                                        <span class="gla_news_title">Wedding Reception</span>
                                        <p>
                                            <b>Menara Top Food - Alam Sutera</b><br>
                                            Jl. Jalur Sutera Bar. No. 3<br>Tanggerang<br>
                                            Saturday, 11 December 2021<br><br>
                                            <span class="label label-info">at 18:00 (6 PM)</span>
                                        </p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section    id="rsvp" class="gla_section gla_image_bck gla_wht_txt gla_fixed" data-stellar-background-ratio="0.8" data-image="{{asset($cdn_link.'images/9.jpg')}}">
                        <div class="gla_over" data-color="#282828" data-opacity="0.8"></div>
                        <div class="container text-right">
                            <p><img src="{{asset('asset-wedding-1/images/animations/rsvp_gold_wh.gif')}}" data-bottom-top="@src:{{asset('asset-wedding-1/images/animations/rsvp_gold_wh.gif')}}" height="150" alt=""></p>         
                            <p>Can't wait to welcome our happy day with you. <br>At below you can confirm your attendance, thank you.</p>
                            <div class="row">
                                <div class="col-md-8 col-md-push-2">
                                    <form id="form-rsvp" onsubmit="return false;">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Name</label>
                                                <input type="text" name="rsvp_name" maxlength="50" class="form-control form-opacity" value="{{$invite}}" required>
                                            </div>
                                            <div class="col-md-6">
                                                <label>Address</label>
                                                <input type="text" name="rsvp_address" maxlength="50" class="form-control form-opacity" required>
                                            </div>
                                            <div class="col-md-12">
                                                <label>Will you come?</label>
                                                <input type="radio" name="rsvp_attend" value="1" required>
                                                <span>Yes, of course!</span><br>
                                                <input type="radio" name="rsvp_attend" value="0">
                                                <span>Sorry, I cant be there.</span>
                                            </div>
                                            <div class="col-md-12" style="padding-top:50px">
                                                <input type="submit" class="btn submit" id="form-rsvp-send" value="simpan">
                                            </div>
                                            @if($display['rsvp'] == 1)
                                            <div class="panel panel-default" style="margin-top:50px">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a class="ft-dark" data-toggle="collapse" href="#table-rsvp-wrap">Look for RSVP list</a>
                                                    </h4>
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
                            </div>
                        </div>
                    </section>
                    <section class="gla_section gla_image_bck" data-color="#ecf2f0">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-4 col-xs-12 gla_image_bck" data-color="#fff">
                                    <div class="gla_simple_block">
                                        <h2>Live Streaming</h2>
                                        <p class="text-muted">MISA PEMBERKATAN ANDREAS & APRILIA | SABTU 11 DESEMBER 2021, PUKUL 13.00</p>
                                        <a href="https://www.youtube.com/watch?v=LCDEbiOboiI">live at <i class="ti ti-youtube gla_icon_box"></i></a>
                                    </div>
                                </div>
                                <iframe class="col-sm-8 col-xs-12 gla_image_bck" width="100%" style="min-height:300px" src="https://www.youtube.com/embed/LCDEbiOboiI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                            
                        </div>
                        <!-- container end -->

                    </section>
                    <section    id="wishes" class="gla_section">
                        <div class="container">
                            <div class="row text-left">
                                <table class="table table-sm table-borderless table-striped fix-dosis-s" style="width:80%" id="table-wish">
                                    <thead>
                                        <tr>
                                            <th width="25%">Sender</th>                              
                                            <th width="75%">Whishes</th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                            <div class="row">
                                <div class="col-md-8 col-md-push-2">
                                    <form id="form-wish" onsubmit="return false;">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <label>Sender</label>
                                                <input type="text" name="wish_name" maxlength="50" class="form-control form-opacity" value="{{$invite}}" required>
                                            </div>
                                            <div class="col-md-12">
                                                <label>Wishes</label>
                                                <textarea name="wish_message" maxlength="500" class="form-control form-opacity" required></textarea>
                                            </div>
                                            <div class="col-md-12">
                                                <input type="submit" class="btn submit" id="form-wish-send" value="send your wishes">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="gla_section gla_image_bck gla_fixed gla_wht_txt" data-stellar-background-ratio="0.8" data-image="{{asset($cdn_link.'images/17-mini.jpg')}}">
                        <div class="container text-center">
                            <p style="height:100vh"><img src="{{asset('asset-wedding-1/images/animations/thanks_gold_wh.gif')}}" 
                                    data-bottom-top="@src:{{asset('asset-wedding-1/images/animations/thanks_gold_wh.gif')}}" height="150" alt=""></p>
                        </div>
                    </section>
                    <section class="gla_image_bck gla_section_extra_sml gla_wht_txt" data-color="#282828">
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

                $(document).on("click","#form-rsvp-send",function(){
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
                });

                $(document).on("click","#form-wish-send",function(){
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