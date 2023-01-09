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

            <div class="gla_slider gla_image_bck gla_wht_txt gla_fixed"  data-image="https://via.placeholder.com/1400x800" data-stellar-background-ratio="0.8">
                <div class="gla_over" data-color="#9abab6" data-opacity="0.2"></div>
                <div class="container">
                    <div class="gla_slide_txt gla_slide_center_bottom text-center">
                        <div class="gla_slide_midtitle">We're Getting Married</div>
                        <div class="gla_slide_subtitle">Mark & Liz</div>
                    </div>
                </div>
                <a class="gla_scroll_down gla_go" href="#gla_content">
                    <b></b>
                    Scroll
                </a>
            </div>
            <section id="gla_content" class="gla_content">
                <section class="gla_section gla_image_bck gla_wht_txt gla_fixed" data-stellar-background-ratio="0.4" data-image="https://via.placeholder.com/1400x800">
                    <div class="gla_over" data-color="#282828" data-opacity="0.4"></div>
                    <div class="container text-left">
                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <h2>Our Story</h2>
                                <h3 class="gla_subtitle">The Fourth of July</h3>
                                <p>My fiancé proposed on the Fourth of July. My mother asked us to go to the backyard to get some chairs and he took me by the shed where we could see all of the fireworks. He kissed me, then he took the ring box out of his pocket and asked me to be his wife. He was shaking a little. The proposal was a little silly but perfect, just like him." — Jeska Cords</p>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="gla_section gla_image_bck gla_wht_txt gla_fixed" data-stellar-background-ratio="0.4" data-image="https://via.placeholder.com/1400x800">
                    <div class="gla_over" data-color="#282828" data-opacity="0.4"></div>
                    <div class="container text-right">
                        <p><img src="{{asset('asset-wedding-1/images/animations/savethedate_wh.gif')}}" data-bottom-top="@src:{{asset('asset-wedding-1/images/animations/savethedate_wh.gif')}}" height="150" alt=""></p>
                        <h2>August 10th, 2017</h2>
                        <h3 class="gla_subtitle">St. Thomas's Church,<br>Bristol, U.K.</h3>
                        <div class="gla_countdown" data-year="2017" data-month="08" data-day="10"></div>
                    </div>
                </section>
                <section class="gla_section gla_image_bck gla_wht_txt gla_fixed" data-stellar-background-ratio="0.4" data-image="https://via.placeholder.com/1400x800">
                    <div class="gla_over" data-color="#282828" data-opacity="0.4"></div>
                    <div class="container text-left">
                        <p><img src="{{asset('asset-wedding-1/images/animations/just_wh.gif')}}" data-bottom-top="@src:{{asset('asset-wedding-1/images/animations/just_wh.gif')}}" height="150" alt=""></p>
                        <h3>You’re wonderful. <br>Can you be wonderful <br>FOREVER?"</h3>
                        <p class="gla_subtitle">— Brennan. A true master of words.</p>
                    </div>
                </section>
                <section class="gla_section gla_image_bck gla_wht_txt gla_fixed" data-stellar-background-ratio="0.4" data-image="https://via.placeholder.com/1400x800">
                    <div class="gla_over" data-color="#282828" data-opacity="0.4"></div>
                    <div class="container text-right">
                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <br>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <p><img src="{{asset('asset-wedding-1/images/animations/rsvp_wh.gif')}}" data-bottom-top="@src:{{asset('asset-wedding-1/images/animations/rsvp_wh.gif')}}" height="180" alt=""></p>
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
                <section class="gla_section gla_image_bck gla_wht_txt gla_fixed" data-stellar-background-ratio="0.4" data-image="https://via.placeholder.com/1400x800">
                    <div class="gla_over" data-color="#282828" data-opacity="0.4"></div>
                    <div class="container text-center">
                        <p><img src="{{asset('asset-wedding-1/images/animations/thnyou_wh.gif')}}" alt="" height="200" data-bottom-top="@src:{{asset('asset-wedding-1/images/animations/thnyou_wh.gif')}}"></p>
                    </div>
                </section>
            </section>
               
        </div>
        @include('_invitation._wedding._include.asset-bottom-1')
    </body>
</html>