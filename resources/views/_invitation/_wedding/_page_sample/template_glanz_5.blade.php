<!DOCTYPE html>
<html lang="en">
    <head>
        @include('_invitation._wedding._include.head-1')
        <?php
            $version = "?var=".date("Ymd")."001";
        ?>
        <link href="{{asset('asset-wedding-1/css/glanz_library.css')}}" rel="stylesheet">
        <link href="{{asset('asset-wedding-1/fonts/themify-icons.css')}}" rel="stylesheet">
        <link href="{{asset('asset-wedding-1/css/glanz_style.css').$version}}" rel="stylesheet">
        <link href="{{asset('asset-wedding-1/css/custom.css').$version}}" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css?family=Dosis:300,400,600,700%7COpen+Sans:300,400,700%7CPlayfair+Display:400,400i,700,700i" rel="stylesheet">
        <link href="{{asset('asset-main/css/jquery.dataTables.css')}}" rel="stylesheet">
    </head>
    <body class="gla_middle_titles">
        <div class="gla_page" id="gla_page">
            <a href="#gla_page" class="gla_top ti ti-angle-up gla_go"></a>
            <div class="gla_music_icon">
                <i class="ti ti-music"></i>
            </div>
            <div class="gla_music_icon_cont">
                <iframe src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/108238095&amp;auto_play=true&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true"></iframe>
            </div>
            <header>       
                <nav class="gla_light_nav gla_transp_nav">
                    <div class="container">
                        <div class="gla_logo_container clearfix">
                            <!-- <img src="images/glanz_logo.png" alt="" class="gla_logo_rev"> -->
                            <div class="gla_logo_txt">
                                <a href="/" class="gla_logo">Groom & Bride</a>
                                <div class="gla_logo_und">{{date("m d")}}, {{date("Y")}}</div>
                            </div>
                        </div>
                        @include('_invitation._wedding._include.nav-2')
                    </div>
                </nav>
            </header>
            
            <div class="gla_slider gla_image_bck gla_fixed" data-stellar-background-ratio="0.2" data-color="#efe5dd">
                <div class="gla_slider_flower">
                    <div class="gla_slider_flower_c1 gla_slider_flower_item" data-start="top:0px; left:0px" data-200-start="top:-300px; left:-300px"></div>
                    <div class="gla_slider_flower_c2 gla_slider_flower_item" data-start="top:0px; right:0px" data-200-start="top:-300px; right:-300px"></div>
                    <div class="gla_slider_flower_c3 gla_slider_flower_item" data-start="bottom:0px; right:0px" data-200-start="bottom:-300px; right:-300px"></div>
                    <div class="gla_slider_flower_c4 gla_slider_flower_item" data-start="bottom:0px; left:0px" data-200-start="bottom:-300px; left:-300px"></div>
                    <div class="gla_slider_flower_c5 gla_slider_flower_item" data-start="top:0px; left:50%" data-200-start="top:-300px; left:50%"></div>
                    <div class="gla_slider_flower_c6 gla_slider_flower_item" data-start="bottom:0px; left:50%" data-200-start="bottom:-300px; left:50%"></div>
                </div>
                <div class="gla_over" data-color="#9abab6" data-opacity="0"></div>
                <div class="container">
                    <div class="gla_slide_txt gla_slide_center_middle text-center">
                        <div class="gla_slide_midtitle">Carita & Lee <br>10 August, 2017</div>
                    </div>
                </div>
                <a class="gla_scroll_down gla_go" href="#gla_content">
                    <b></b>
                    Scroll
                </a>
            </div>
            <section id="gla_content" class="gla_content">
                <section class="gla_section gla_lg_padding gla_image_bck gla_fixed gla_wht_txt" data-stellar-background-ratio="0.2" data-image="https://via.placeholder.com/1400x800">
                    <div class="gla_slider_flower" data-bottom-top="@class:active" data--200-bottom="@class:no_active">
                        <div class="gla_slider_flower_c1 gla_slider_flower_item"></div>
                        <div class="gla_slider_flower_c2 gla_slider_flower_item"></div>
                        <div class="gla_slider_flower_c3 gla_slider_flower_item"></div>
                        <div class="gla_slider_flower_c4 gla_slider_flower_item"></div>
                        <div class="gla_slider_flower_c5 gla_slider_flower_item"></div>
                        <div class="gla_slider_flower_c6 gla_slider_flower_item"></div>
                    </div>
                    <div class="container text-center">
                        <p><img src="images/animations/ourwedding_wh.gif" data-bottom-top="@src:images/animations/ourwedding_wh.gif" height="150" alt=""></p>
                        <h2>We’re Getting Married!</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium nisi earum nihil perspiciatis magnam facilis, error explicabo obcaecati maiores sunt exercitationem doloribus tempora, sit voluptate autem quibusdam velit alias. Reprehenderit.</p>
                    </div>
                </section>
                <section class="gla_section gla_image_bck gla_fixed" data-stellar-background-ratio="0.2" data-color="#fff">
                    <div class="container text-center">
                        <p><img src="images/animations/savethedate.gif" data-bottom-top="@src:images/animations/savethedate.gif" height="150" alt=""></p>
                        <h2>August 10th, 2017</h2>
                        <h3 class="gla_subtitle">St. Thomas's Church,<br>Bristol, U.K.</h3>
                        <div class="gla_countdown" data-year="2017" data-month="08" data-day="10"></div>
                        
                    </div>
                </section>
                <section class="gla_section gla_lg_padding gla_image_bck" data-color="#efe5dd">
                    <div class="gla_slider_flower" data-bottom-top="@class:active" data--200-bottom="@class:no_active">
                        <div class="gla_slider_flower_c1 gla_slider_flower_item"></div>
                        <div class="gla_slider_flower_c2 gla_slider_flower_item"></div>
                        <div class="gla_slider_flower_c3 gla_slider_flower_item"></div>
                        <div class="gla_slider_flower_c4 gla_slider_flower_item"></div>
                        <div class="gla_slider_flower_c5 gla_slider_flower_item"></div>
                        <div class="gla_slider_flower_c6 gla_slider_flower_item"></div>
                    </div>
                    <div class="container text-center">
                        <p><img src="images/animations/just_st.gif" data-bottom-top="@src:images/animations/just.gif" height="150" alt=""></p>
                        <div class="gla_slide_midtitle">See you at the wedding!</div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum pariatur vel rerum qui nesciunt eaque, suscipit delectus sunt, dolore facilis! Dignissimos fugit facere veniam ad nisi, eveniet pariatur maiores laborum!</p>
                        <p><a href="#" class="btn">RSVP</a></p>
                    </div>
                </section>
                <section class="gla_section gla_image_bck gla_wht_txt gla_fixed" data-stellar-background-ratio="0.8" data-image="https://via.placeholder.com/1400x800">
                    <div class="gla_over" data-color="#1e1d2d" data-opacity="0.4"></div>
                    <div class="container text-center">
                        <h2>Registry</h2>
                        <p>We’re lucky enough to have nearly everything we need for our home already. And since neither of us has ever been outside of North America, we want our honeymoon to be extra special! If you want to help make it unforgettable, you can contribute using the link to the right. If you would like to give us something to update our home, we’ve compiled a short registry as well.</p>
                        <div class="gla_icon_boxes gla_partners row">
                            <div class="gla_partner_box">
                                <a href="#"><img src="https://via.placeholder.com/250x100" height="80" alt=""></a>
                            </div>
                            <div class="gla_partner_box">
                                <a href="#"><img src="https://via.placeholder.com/250x100" height="80" alt=""></a>
                            </div>
                            <div class="gla_partner_box">
                                <a href="#"><img src="https://via.placeholder.com/250x100" height="80" alt=""></a>
                            </div>
                            <div class="gla_partner_box">
                                <a href="#"><img src="https://via.placeholder.com/250x100" height="80" alt=""></a>
                            </div>
                            <div class="gla_partner_box">
                                <a href="#"><img src="https://via.placeholder.com/250x100" height="80" alt=""></a>
                            </div>
                            <div class="gla_partner_box">
                                <a href="#"><img src="https://via.placeholder.com/250x100" height="80" alt=""></a>
                            </div>
                            <div class="gla_partner_box">
                                <a href="#"><img src="https://via.placeholder.com/250x100" height="80" alt=""></a>
                            </div>
                            <div class="gla_partner_box">
                                <a href="#"><img src="https://via.placeholder.com/250x100" height="80" alt=""></a>
                            </div>
                            <div class="gla_partner_box">
                                <a href="#"><img src="https://via.placeholder.com/250x100" height="80" alt=""></a>
                            </div>
                            <div class="gla_partner_box">
                                <a href="#"><img src="https://via.placeholder.com/250x100" height="80" alt=""></a>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="gla_section gla_image_bck">
                    <div class="container text-center">
                        <h2>The Day They Got Engaged</h2>
                        <p>Andy and Jeska met in university in the Graphic Design program. They both remember each other from orientation, but it wasn’t love at first sight, that’s for sure. Andy remembers Jeska as a ‘snooty art bitch (having been in the visual arts program at the time), and she remembers Andy being an ‘arrogant computer nerd’, boasting his knowledge of Macs over the other students.</p>
                        <div class="button-group filter-button-group">
                            <a data-filter="*">Show All</a>
                            <a data-filter=".engagement">Engagement</a>
                            <a data-filter=".ceremony">Ceremony</a>
                        </div>
                        <div class="gla_portfolio_no_padding grid">
                            <div class="col-sm-4 gla_anim_box grid-item engagement">
                                <div class="gla_shop_item">
                                    <a href="https://via.placeholder.com/1400x800" class="lightbox">
                                        <img src="https://via.placeholder.com/600x600" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-4 gla_anim_box grid-item ceremony">
                                <div class="gla_shop_item">
                                    <a href="https://via.placeholder.com/1400x800" class="lightbox">
                                        <img src="https://via.placeholder.com/600x600" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-4 gla_anim_box grid-item engagement">
                                <div class="gla_shop_item">
                                    <a href="https://via.placeholder.com/1400x800" class="lightbox">
                                        <img src="https://via.placeholder.com/600x600" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-4 gla_anim_box grid-item ceremony">
                                <div class="gla_shop_item">
                                    <a href="https://via.placeholder.com/1400x800" class="lightbox">
                                        <img src="https://via.placeholder.com/600x600" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-4 gla_anim_box grid-item engagement">
                                <div class="gla_shop_item">
                                    <a href="https://via.placeholder.com/1400x800" class="lightbox">
                                        <img src="https://via.placeholder.com/600x600" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-4 gla_anim_box grid-item ceremony">
                                <div class="gla_shop_item">
                                    <a href="https://via.placeholder.com/1400x800" class="lightbox">
                                        <img src="https://via.placeholder.com/600x600" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-4 gla_anim_box grid-item engagement">
                                <div class="gla_shop_item">
                                    <a href="https://via.placeholder.com/1400x800" class="lightbox">
                                        <img src="https://via.placeholder.com/600x600" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-4 gla_anim_box grid-item ceremony">
                                <div class="gla_shop_item">
                                    <a href="https://via.placeholder.com/1400x800" class="lightbox">
                                        <img src="https://via.placeholder.com/600x600" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-4 gla_anim_box grid-item engagement">
                                <div class="gla_shop_item">
                                    <a href="https://via.placeholder.com/1400x800" class="lightbox">
                                        <img src="https://via.placeholder.com/600x600" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-4 gla_anim_box grid-item engagement">
                                <div class="gla_shop_item">
                                    <a href="https://via.placeholder.com/1400x800" class="lightbox">
                                        <img src="https://via.placeholder.com/600x600" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-4 gla_anim_box grid-item ceremony">
                                <div class="gla_shop_item">
                                    <a href="https://via.placeholder.com/1400x800" class="lightbox">
                                        <img src="https://via.placeholder.com/600x600" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-4 gla_anim_box grid-item engagement">
                                <div class="gla_shop_item">
                                    <a href="https://via.placeholder.com/1400x800" class="lightbox">
                                        <img src="https://via.placeholder.com/600x600" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-4 gla_anim_box grid-item engagement">
                                <div class="gla_shop_item">
                                    <a href="https://via.placeholder.com/1400x800" class="lightbox">
                                        <img src="https://via.placeholder.com/600x600" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-4 gla_anim_box grid-item ceremony">
                                <div class="gla_shop_item">
                                    <a href="https://via.placeholder.com/1400x800" class="lightbox">
                                        <img src="https://via.placeholder.com/600x600" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-4 gla_anim_box grid-item engagement">
                                <div class="gla_shop_item">
                                    <a href="https://via.placeholder.com/1400x800" class="lightbox">
                                        <img src="https://via.placeholder.com/600x600" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-4 gla_anim_box grid-item ceremony">
                                <div class="gla_shop_item">
                                    <a href="https://via.placeholder.com/1400x800" class="lightbox">
                                        <img src="https://via.placeholder.com/600x600" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-4 gla_anim_box grid-item engagement">
                                <div class="gla_shop_item">
                                    <a href="https://via.placeholder.com/1400x800" class="lightbox">
                                        <img src="https://via.placeholder.com/600x600" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-4 gla_anim_box grid-item ceremony">
                                <div class="gla_shop_item">
                                    <a href="https://via.placeholder.com/1400x800" class="lightbox">
                                        <img src="https://via.placeholder.com/600x600" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="gla_section gla_image_bck gla_fixed gla_wht_txt" data-stellar-background-ratio="0.2" data-image="https://via.placeholder.com/1400x800">
                    <div class="gla_over" data-color="#000" data-opacity="0.4"></div>
                    <div class="container text-center">
                        <p><img src="images/animations/thnyou_wh.gif" alt="" height="200" data-bottom-top="@src:images/animations/thnyou_wh.gif"></p>
                    </div>
                </section>
            </section>
    
        </div>
        @include('_invitation._wedding._include.asset-bottom-1')
    </body>
</html>