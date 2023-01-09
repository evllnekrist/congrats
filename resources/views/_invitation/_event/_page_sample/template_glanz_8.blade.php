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

            <div class="gla_slider gla_image_bck  gla_wht_txt gla_fixed"  data-image="https://via.placeholder.com/1400x800" data-stellar-background-ratio="0.4">
                <div class="gla_over" data-color="#282828" data-opacity="0.5"></div>
                <div class="container">
                    <div class="gla_slide_txt gla_slide_center_bottom text-center">
                        <p><img src="{{asset('asset-wedding-1/images/badge.png')}}"  alt="" height="350"></p>
                    </div>
                </div>
                <a class="gla_scroll_down gla_go" href="#gla_content">
                    <b></b>
                    Scroll
                </a>
            </div>
            <section id="gla_content" class="gla_content">
                <section class="gla_section">
                    <div class="container text-center">
                        <div class="row text-center">
                            <div class="col-md-4 gla_round_block">
                                <div class="gla_round_im gla_image_bck" data-image="https://via.placeholder.com/600x600"></div>
                                <h3>Carita Kimball</h3>
                            </div>
                            <div class="col-md-4 gla_round_block">
                                <p><img src="{{asset('asset-wedding-1/images/animations/mrandmrs.gif')}}" data-bottom-top="@src:{{asset('asset-wedding-1/images/animations/mrandmrs.gif')}}" height="150" alt=""></p>                
                                <h3>Are getting married<br>on August 10, 2017</h3>
                                St. Thomas's Church,<br>Bristol, U.K.
                            </div>
                            <div class="col-md-4 gla_round_block">
                                <div class="gla_round_im gla_image_bck" data-image="https://via.placeholder.com/600x600"></div>
                                <h3>Lee Guarino</h3>
                            </div>
                        </div>
                        <div class="gla_countdown" data-year="2017" data-month="08" data-day="10"></div>
                    </div>
                </section>
                <section class="gla_section gla_image_bck" data-color="#ecf2f0">
                    <div class="container">
                        <div class="row s">
                            <div class="col-md-6 gla_image_bck" data-color="#fff">
                                <div class="gla_simple_block">
                                    <h2>Lee Guarino</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio mollitia, ipsa accusamus eius. Aspernatur ab sed minima, doloremque eligendi voluptatibus repellat unde, facilis natus ex ipsum eius atque suscipit fugit.</p>
                                    <!-- Social Buttons -->
                                    <div class="gla_footer_social">
                                        <a href="#"><i class="ti ti-facebook gla_icon_box"></i></a>
                                        <a href="#"><i class="ti ti-instagram gla_icon_box"></i></a>
                                        <a href="#"><i class="ti ti-google gla_icon_box"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 gla_image_bck" data-image="https://via.placeholder.com/1400x800">
                            </div>
                            <div class="col-md-6 col-md-push-6 gla_image_bck" data-color="#fff">
                                <div class="gla_simple_block">
                                    <h2>Carita Kimball</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio mollitia, ipsa accusamus eius. Aspernatur ab sed minima, doloremque eligendi voluptatibus repellat unde, facilis natus ex ipsum eius atque suscipit fugit.</p>
                                    <!-- Social Buttons -->
                                    <div class="gla_footer_social">
                                        <a href="#"><i class="ti ti-facebook gla_icon_box"></i></a>
                                        <a href="#"><i class="ti ti-instagram gla_icon_box"></i></a>
                                        <a href="#"><i class="ti ti-google gla_icon_box"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-md-pull-6 gla_image_bck" data-image="https://via.placeholder.com/1400x800">
                            </div>
                        </div>
                    </div>
                </section>
                <section class="gla_section">
                    <div class="container text-center">
                        <h2>When & Where</h2>
                        <div class="gla_icon_boxes row text-left">
                            <div class="col-md-6 col-sm-6">
                                <a href="#" class="gla_news_block">
                                    <span class="gla_news_img">
                                        <span class="gla_over" data-image="https://via.placeholder.com/600x600"></span>  
                                    </span>
                                    <span class="gla_news_title">Wedding Ceremony</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa similique porro officiis nobis nulla quidem nihil iste veniam ut sit, maiores. <br><b>10 August, 2017, St. Thomas's Church, <br>Bristol, U.K.</b></p>
                                </a>
                            </div> 
                            <div class="col-md-6 col-sm-6">
                                <a href="#" class="gla_news_block">
                                    <span class="gla_news_img">
                                        <span class="gla_over" data-image="https://via.placeholder.com/600x600"></span>  
                                    </span>
                                    <span class="gla_news_title">Wedding Party</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa similique porro officiis nobis nulla quidem nihil iste veniam ut sit, maiores. <br><b>10 August, 2017, St. Thomas's Church, <br>Bristol, U.K.</b></p>
                                </a>
                            </div> 
                        </div>
                    </div>
                </section>
                <section class="gla_section">
                    <div class="gla_map">
                        <iframe src="https://www.google.com/maps/d/embed?mid=1Db39qSrYMFfOT9Momg4l4VQEOng&hl=en" width="100%" height="480"></iframe>\
                    </div>

                </section>
                <section class="gla_section gla_image_bck">
                    <div class="container text-center">
                        <h2>Registry</h2>
                        <p>We’re lucky enough to have nearly everything we need for our home already. And since neither of us has ever been outside of North America, we want our honeymoon to be extra special! If you want to help make it unforgettable, you can contribute using the link to the right. If you would like to give us something to update our home, we’ve compiled a short registry as well.</p>
                        <div class="gla_icon_boxes gla_partners row">
                            <div class="gla_partner_box">
                                <a href="#"><img src="{{asset('asset-wedding-1/images/partners/macys-logo_bl.png')}}" height="80" alt=""></a>
                            </div>
                            <div class="gla_partner_box">
                                <a href="#"><img src="{{asset('asset-wedding-1/images/partners/amazon_bl.png')}}" height="80" alt=""></a>
                            </div>
                            <div class="gla_partner_box">
                                <a href="#"><img src="{{asset('asset-wedding-1/images/partners/bed-bath-beyond-logo_bl.png')}}" height="80" alt=""></a>
                            </div>
                            <div class="gla_partner_box">
                                <a href="#"><img src="{{asset('asset-wedding-1/images/partners/crate_bl.png')}}" height="80" alt=""></a>
                            </div>
                            <div class="gla_partner_box">
                                <a href="#"><img src="{{asset('asset-wedding-1/images/partners/newly_bl.png')}}" height="80" alt=""></a>
                            </div>
                            <div class="gla_partner_box">
                                <a href="#"><img src="{{asset('asset-wedding-1/images/partners/macys-logo_bl.png')}}" height="80" alt=""></a>
                            </div>
                            <div class="gla_partner_box">
                                <a href="#"><img src="{{asset('asset-wedding-1/images/partners/amazon_bl.png')}}" height="80" alt=""></a>
                            </div>
                            <div class="gla_partner_box">
                                <a href="#"><img src="{{asset('asset-wedding-1/images/partners/bed-bath-beyond-logo_bl.png')}}" height="80" alt=""></a>
                            </div>
                            <div class="gla_partner_box">
                                <a href="#"><img src="{{asset('asset-wedding-1/images/partners/crate_bl.png')}}" height="80" alt=""></a>
                            </div>
                            <div class="gla_partner_box">
                                <a href="#"><img src="{{asset('asset-wedding-1/images/partners/newly_bl.png')}}" height="80" alt=""></a>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="gla_section gla_image_bck gla_wht_txt gla_fixed" data-stellar-background-ratio="0.8" data-image="https://via.placeholder.com/1400x800">
                    <div class="gla_over" data-color="#282828" data-opacity="0.8"></div>
                    <div class="container text-center">
                        <h2>Will You Attend?</h2>
                        <h3 class="gla_subtitle">Please sign your RSVP</h3>
                        
                        <div class="row">
                            <div class="col-md-8 col-md-push-2">
                                <form action="https://formspree.io/your@mail.com" method="POST">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Your name*</label>
                                            <input type="text" name="name" class="form-control form-opacity">
                                        </div>
                                        <div class="col-md-6">
                                            <label>Your e-mail*</label>
                                            <input type="text" name="email" class="form-control form-opacity">
                                        </div>
                        
                                        <div class="col-md-6">
                                            <label>Will you attend?</label>

                                            <input type="radio" name="attend" value="Yes, I will be there">
                                            <span>Yes, I will be there</span><br>
                                            <input type="radio" name="attend" value="Sorry, I can't come">
                                            <span>Sorry, I can't come</span>
                                            
                                        </div>
                                        <div class="col-md-6">
                                            <label>Meal preference</label>
                                            <select name="meal" class="form-control form-opacity">
                                                <option value="I eat anything">I eat anything</option>
                                                <option value="Beef">Beef</option>
                                                <option value="Chicken">Chicken</option>
                                                <option value="Vegetarian">Vegetarian</option>
                                            </select>
                                        </div>
                                        <div class="col-md-12">
                                            <label>Notes</label>
                                            <textarea name="message" class="form-control form-opacity"></textarea>
                                        </div>
                                        <div class="col-md-12">
                                            <input type="submit" class="btn submit" value="Send">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="gla_section gla_image_bck" data-color="#fff">
                    <div class="container text-center">
                        <h2>The Wedding Party</h2>
                        <div class="row text-center">
                            <div class="col-md-3 gla_round_block">
                                <div class="gla_round_im gla_image_bck" data-image="https://via.placeholder.com/600x600"></div>
                                <h4>Jessica Robbinson</h4>
                            </div>
                            <div class="col-md-3 gla_round_block">
                                <div class="gla_round_im gla_image_bck" data-image="https://via.placeholder.com/600x600"></div>
                                <h4>Ronald Down</h4>
                            </div>
                            <div class="col-md-3 gla_round_block">
                                <div class="gla_round_im gla_image_bck" data-image="https://via.placeholder.com/600x600"></div>
                                <h4>Marry Clay</h4>
                            </div>
                            <div class="col-md-3 gla_round_block">
                                <div class="gla_round_im gla_image_bck" data-image="https://via.placeholder.com/600x600"></div>
                                <h4>John Pitterson</h4>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="gla_section gla_image_bck gla_fixed gla_wht_txt" data-stellar-background-ratio="0.8" data-image="https://via.placeholder.com/1400x800">
                    <div class="gla_over" data-color="#282828" data-opacity="0.4"></div>
                    <div class="container text-center">
                        <p><img src="{{asset('asset-wedding-1/images/animations/just_wh.gif')}}" data-bottom-top="@src:images/animations/just_wh.gif')}}" height="150" alt=""></p>
                        <h3>You’re wonderful. Can you be wonderful forever?"</h3>
                        <p class="gla_subtitle">— Brennan. A true master of words.</p>
                    </div>
                </section>
            </section>
            
        </div>
        @include('_invitation._wedding._include.asset-bottom-1')
    </body>
</html>