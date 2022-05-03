<!-- 01_02_home_pink_flowers -->
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
                                <div class="gla_logo_und">{{date("F d")}}, {{date("Y")}}</div>
                            </div>
                        </div>
                        @include('_invitation._wedding._include.nav-2')
                    </div>
                </nav>
            </header>
            
            <div class="gla_slider gla_image_bck  gla_wht_txt gla_fixed"  data-image="{{asset('asset-wedding-1/images/demo/2/banner.webp')}}" data-stellar-background-ratio="0.8">
                <div class="gla_over" data-color="#1e1d2d" data-opacity="0.2"></div>
                <div class="container">
                    <div class="gla_slide_txt gla_slide_center_middle text-center">
                        <div class="gla_flower gla_flower2">
                            <div class="gla_flower2_name_l">Groom <b>Save The Date</b></div>
                            <div class="gla_flower2_name_r">Bride <b>{{date("F d")}}, {{date("Y")}}</b></div>
                            <img src="{{asset('asset-wedding-1/images/demo/2/photo-banner.webp')}}" alt="">
                        </div>
                    </div>
                </div>
                <a class="gla_scroll_down gla_go" href="#gla_content">
                    <b></b>
                    Scroll
                </a>
            </div>

            <section id="gla_content" class="gla_content">
                <section class="gla_section gla_image_bck" data-color="#fafafd">
                            
                    <div class="container text-center">
                        <p><img src="{{asset('asset-wedding-1/images/animations/flower5.gif')}}" data-bottom-top="@src:{{asset('asset-wedding-1/images/animations/flower5.gif')}}; opacity:1" class="gla_animated_flower" height="150" alt=""></p>
                        <h2>Our Story</h2>
                        <h3 class="gla_subtitle">The Fourth of July</h3>
                        
                        

                        <p>My fiancé proposed on the Fourth of July. My mother asked us to go to the backyard to get some chairs and he took me by the shed where we could see all of the fireworks. He kissed me, then he took the ring box out of his pocket and asked me to be his wife. He was shaking a little. The proposal was a little silly but perfect, just like him." — Jeska Cords</p>

                    
                        
                    </div>
                </section>
                <section class="gla_section gla_image_bck gla_fixed gla_wht_txt" data-stellar-background-ratio="0.8" data-image="{{asset('asset-wedding-1/images/demo/2/timer.webp')}}">
                    <div class="gla_over" data-color="#1e1d2d" data-opacity="0.4"></div>
                    
                    <div class="container text-center">
                        <p><img src="{{asset('asset-wedding-1/images/animations/savethedate_wh.gif')}}" data-bottom-top="@src:{{asset('asset-wedding-1/images/animations/savethedate_wh.gif')}}" height="150" alt=""></p>
                        <h2>August 10th, 2017</h2>
                        <h3 class="gla_subtitle">St. Thomas's Church,<br>Bristol, U.K.</h3>
                        <div class="gla_countdown" data-year="2017" data-month="08" data-day="10"></div>
                        
                    </div>
                </section>
                <section class="gla_section">
                    
                    
                    <div class="container text-center">
                        <p><img src="{{asset('asset-wedding-1/images/animations/flower6.gif')}}" data-bottom-top="@src:{{asset('asset-wedding-1/images/animations/flower6.gif')}}; opacity:1" class="gla_animated_flower" height="110" alt=""></p>
                        <h2>Wedding Details</h2>
                        <h3 class="gla_subtitle">When & Where</h3>
                        <p>Our ceremony and reception will be held at the Liberty House. Located on the Hudson River, it has a beautiful, unobstructed view of the World Trade One building and a convenient ferry that runs between it and Manhattan.</p>
                        <div class="row text-center">
                            <div class="col-md-4 gla_round_block">
                                <div class="gla_round_im gla_image_bck" data-image="{{asset('asset-wedding-1/images/demo/2/when-n-where-1.webp')}}"></div>
                                <h3>The Reception</h3>
                                <p>4:00 PM – 5:30 PM<br>
                                St. Thomas's Church,<br>
                                Bristol<br>
                                U.K.<br>
                                +1 777-123-4567</p>
                                <a href="#" class="btn">View Map</a>
                            </div>
                            <div class="col-md-4 gla_round_block">
                                <div class="gla_round_im gla_image_bck" data-image="{{asset('asset-wedding-1/images/demo/2/when-n-where-2.webp')}}"></div>
                                <h3>The Ceremony</h3>
                                <p>4:00 PM – 5:30 PM<br>
                                St. Thomas's Church,<br>
                                Bristol<br>
                                U.K.<br>
                                +1 777-123-4567</p>
                                <a href="#" class="btn">View Map</a>
                            </div>
                            <div class="col-md-4 gla_round_block">
                                <div class="gla_round_im gla_image_bck" data-image="{{asset('asset-wedding-1/images/demo/2/when-n-where-3.webp')}}"></div>
                                <h3>The Afterparty</h3>
                                <p>4:00 PM – 5:30 PM<br>
                                St. Thomas's Church,<br>
                                Bristol<br>
                                U.K.<br>
                                +1 777-123-4567</p>
                                <a href="#" class="btn">View Map</a>
                            </div>
                        </div>

                        
                    </div>
                </section>
                <section class="gla_section gla_image_bck gla_fixed gla_wht_txt" data-stellar-background-ratio="0.2" data-image="{{asset('asset-wedding-1/images/demo/2/rsvp.webp')}}">
                    <div class="gla_over" data-color="#1e1d2d" data-opacity="0.4"></div>
                    
                    <div class="container text-center">
                        <p><img src="{{asset('asset-wedding-1/images/animations/rsvp_wh.gif')}}" data-bottom-top="@src:{{asset('asset-wedding-1/images/animations/rsvp_wh.gif')}}" height="200" alt=""></p>
                        
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
                <section class="gla_section gla_image_bck">
                    <div class="container text-center">
                        <p><img src="{{asset('asset-wedding-1/images/animations/flower7.gif')}}" data-bottom-top="@src:{{asset('asset-wedding-1/images/animations/flower7.gif')}}; opacity:1" class="gla_animated_flower" height="110" alt=""></p>
                        <h2>The Day They Got Engaged</h2>
                        <p>Andy and Jeska met in university in the Graphic Design program. They both remember each other from orientation, but it wasn’t love at first sight, that’s for sure. Andy remembers Jeska as a ‘snooty art bitch (having been in the visual arts program at the time), and she remembers Andy being an ‘arrogant computer nerd’, boasting his knowledge of Macs over the other students.</p>
                        
                        <div class="button-group filter-button-group">
                            <a data-filter="*">Show All</a>
                            <a data-filter=".engagement">Engagement</a>
                            <a data-filter=".ceremony">Ceremony</a>
                        </div>
                        <div class="gla_portfolio_no_padding grid">
                            @for($i = 1; $i <= 18; $i++)
                                <div class="col-sm-4 gla_anim_box grid-item {{ rand(0,1) % 2 == 0 ? 'engagement' : 'ceremony'}}"0>
                                    <div class="gla_shop_item">
                                        <a href="{{asset('asset-wedding-1/images/demo/2/gallery-'.$i.'-bg.webp')}}" class="lightbox">
                                            <img src="{{asset('asset-wedding-1/images/demo/2/gallery-'.$i.'-sm.webp')}}" alt="">
                                        </a>
                                    </div>
                                </div>
                            @endfor
                        </div>
                    </div>
                </section>
                <section class="gla_section gla_image_bck gla_wht_txt gla_fixed" data-stellar-background-ratio="0.8" data-image="{{asset('asset-wedding-1/images/demo/2/registry.webp')}}">

                    <!-- Over -->
                    <div class="gla_over" data-color="#1e1d2d" data-opacity="0.4"></div>
                    
                    <div class="container text-center">


                        <h2>Registry</h2>
                        <p>We’re lucky enough to have nearly everything we need for our home already. And since neither of us has ever been outside of North America, we want our honeymoon to be extra special! If you want to help make it unforgettable, you can contribute using the link to the right. If you would like to give us something to update our home, we’ve compiled a short registry as well.</p>

                        <!-- icon boxes -->
                        <div class="gla_icon_boxes gla_partners row">
                            
                                
                            <!-- item -->
                            <div class="gla_partner_box">
                                <a href="#"><img src="{{asset('asset-wedding-1/images/demo/2/registry-1.png')}}" height="80" alt=""></a>
                            </div>

                            <!-- item -->
                            <div class="gla_partner_box">
                                <a href="#"><img src="{{asset('asset-wedding-1/images/demo/2/registry-2.png')}}" height="80" alt=""></a>
                            </div>

                            <!-- item -->
                            <div class="gla_partner_box">
                                <a href="#"><img src="{{asset('asset-wedding-1/images/demo/2/registry-3.png')}}" height="80" alt=""></a>
                            </div>

                            <!-- item -->
                            <div class="gla_partner_box">
                                <a href="#"><img src="{{asset('asset-wedding-1/images/demo/2/registry-4.png')}}" height="80" alt=""></a>
                            </div>

                            <!-- item -->
                            <div class="gla_partner_box">
                                <a href="#"><img src="{{asset('asset-wedding-1/images/demo/2/registry-5.png')}}" height="80" alt=""></a>
                            </div>

                            <!-- item -->
                            <div class="gla_partner_box">
                                <a href="#"><img src="{{asset('asset-wedding-1/images/demo/2/registry-6.png')}}" height="80" alt=""></a>
                            </div>

                        </div>
                        <!-- icon boxes end -->
                                
                    </div>
                </section>
                <section class="gla_section gla_image_bck" data-color="#fff">
                    <div class="container text-center">
                        <h2>The Wedding Party</h2>
                        <div class="button-group filter-button-group">
                            <a data-filter="*">Show All</a>
                            <a data-filter=".groomsmen">Groomsmen</a>
                            <a data-filter=".bridesmaids">Bridesmaids</a>
                        </div>
                        <div class="gla_portfolio_no_padding grid">
                            <div class="col-sm-4 gla_anim_box grid-item bridesmaids">
                                <div class="gla_shop_item">
                                    <a href="{{asset('asset-wedding-1/images/demo/2/party-1-bg.webp')}}" class="lightbox">
                                        <img src="{{asset('asset-wedding-1/images/demo/2/party-1-sm.webp')}}" alt="">
                                    </a>
                                    <a href="#" class="gla_shop_item_title">
                                        Andrew & Joanna
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-4 gla_anim_box grid-item bridesmaids">
                                <div class="gla_shop_item">
                                    <a href="{{asset('asset-wedding-1/images/demo/2/party-2-bg.webp')}}" class="lightbox">
                                        <img src="{{asset('asset-wedding-1/images/demo/2/party-2-sm.webp')}}" alt="">
                                    </a>
                                    <a href="#" class="gla_shop_item_title">
                                        Stewart & Ann
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-4 gla_anim_box grid-item bridesmaids">
                                <div class="gla_shop_item">
                                    <a href="{{asset('asset-wedding-1/images/demo/2/party-3-bg.webp')}}" class="lightbox">
                                        <img src="{{asset('asset-wedding-1/images/demo/2/party-3-sm.webp')}}" alt="">
                                    </a>
                                    <a href="#" class="gla_shop_item_title">
                                        Mark & Jenny
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-4 gla_anim_box grid-item broombridesmaidssmen">
                                <div class="gla_shop_item">
                                    <a href="{{asset('asset-wedding-1/images/demo/2/party-4-bg.webp')}}" class="lightbox">
                                        <img src="{{asset('asset-wedding-1/images/demo/2/party-4-sm.webp')}}" alt="">
                                    </a>
                                    <a href="#" class="gla_shop_item_title">
                                        Izzy & Katy
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-4 gla_anim_box grid-item groomsmen">
                                <div class="gla_shop_item">
                                    <a href="{{asset('asset-wedding-1/images/demo/2/party-5-bg.webp')}}" class="lightbox">
                                        <img src="{{asset('asset-wedding-1/images/demo/2/party-5-sm.webp')}}" alt="">
                                    </a>
                                    <a href="#" class="gla_shop_item_title">
                                        Bob
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-4 gla_anim_box grid-item groomsmen">
                                <div class="gla_shop_item">
                                    <a href="{{asset('asset-wedding-1/images/demo/2/party-6-bg.webp')}}" class="lightbox">
                                        <img src="{{asset('asset-wedding-1/images/demo/2/party-6-sm.webp')}}" alt="">
                                    </a>
                                    <a href="#" class="gla_shop_item_title">
                                        Mark
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-4 gla_anim_box grid-item groomsmen">
                                <div class="gla_shop_item">
                                    <a href="{{asset('asset-wedding-1/images/demo/2/party-7-bg.webp')}}" class="lightbox">
                                        <img src="{{asset('asset-wedding-1/images/demo/2/party-7-sm.webp')}}" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-4 gla_anim_box grid-item groomsmen">
                                <div class="gla_shop_item">
                                    <a href="{{asset('asset-wedding-1/images/demo/2/party-8-bg.webp')}}" class="lightbox">
                                        <img src="{{asset('asset-wedding-1/images/demo/2/party-8-sm.webp')}}" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-4 gla_anim_box grid-item groomsmen">
                                <div class="gla_shop_item">
                                    <a href="{{asset('asset-wedding-1/images/demo/2/party-9-bg.webp')}}" class="lightbox">
                                        <img src="{{asset('asset-wedding-1/images/demo/2/party-9-sm.webp')}}" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-4 gla_anim_box grid-item groomsmen">
                                <div class="gla_shop_item">
                                    <a href="{{asset('asset-wedding-1/images/demo/2/party-10-bg.webp')}}" class="lightbox">
                                        <img src="{{asset('asset-wedding-1/images/demo/2/party-10-sm.webp')}}" alt="">
                                    </a>                        
                                </div>
                            </div>
                            <div class="col-sm-4 gla_anim_box grid-item groomsmen">
                                <div class="gla_shop_item">
                                    <a href="{{asset('asset-wedding-1/images/demo/2/party-11-bg.webp')}}" class="lightbox">
                                        <img src="{{asset('asset-wedding-1/images/demo/2/party-11-sm.webp')}}" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-4 gla_anim_box grid-item groomsmen">
                                <div class="gla_shop_item">
                                    <a href="{{asset('asset-wedding-1/images/demo/2/party-12-bg.webp')}}" class="lightbox">
                                        <img src="{{asset('asset-wedding-1/images/demo/2/party-12-sm.webp')}}" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="gla_section gla_image_bck gla_fixed gla_wht_txt" data-stellar-background-ratio="0.8" data-image="{{asset('asset-wedding-1/images/demo/2/thank-you.webp')}}">
                    <div class="gla_over" data-color="#1e1d2d" data-opacity="0.4"></div>
                    <div class="container text-center">
                        <p><img src="{{asset('asset-wedding-1/images/animations/thnyou_wh.gif')}}" alt="" height="200" data-bottom-top="@src:{{asset('asset-wedding-1/images/animations/thnyou_wh.gif')}}"></p>  
                    </div>
                </section>
            </section>

        </div>
        @include('_invitation._wedding._include.asset-bottom-1')
    </body>
</html>