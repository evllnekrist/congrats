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

    <div class="gla_slider gla_image_bck  gla_wht_txt gla_fixed"  data-image="{{asset('asset-wedding-1/images/demo/3/bg-banner.webp')}}" data-stellar-background-ratio="0.2">
        <div class="gla_over" data-color="#000" data-opacity="0.3"></div>
        <div class="container">
            <div class="gla_slide_txt gla_slide_center_middle text-center">
                <p><img src="{{asset('asset-wedding-1/images/animations/ourwedding_gold.gif')}}" alt="" height="330"></p>
                <div class="gla_slide_subtitle">Groom & Bride <br>{{date("F d")}}, {{date("Y")}}</div>
            </div>
        </div>
        <a class="gla_scroll_down gla_go" href="#gla_content">
            <b></b>
            Scroll
        </a>
    </div>
    <section id="gla_content" class="gla_content">
        <section class="gla_section gla_image_bck" data-color="#">
            <div class="container text-center">
                <h2>Our Story</h2>
                <h3 class="gla_subtitle">The Fourth of July</h3>
                
                <p>My fiancé proposed on the Fourth of July. 
                    My mother asked us to go to the backyard to get some chairs and he took me by the shed where we could see all of the fireworks. 
                    He kissed me, then he took the ring box out of his pocket and asked me to be his wife. He was shaking a little. 
                    The proposal was a little silly but perfect, just like him." — Jeska Cords</p>  
            </div>
        </section>
        <section class="gla_section gla_image_bck gla_fixed" data-stellar-background-ratio="0.2" data-image="{{asset('asset-wedding-1/images/demo/3/bg-our-story.webp')}}">
            <div class="container">
                <div class="row gla_auto_height">
                    <div class="col-md-6 gla_image_bck" data-color="#eee">
                        <div class="gla_simple_block">
                            <h2>Ian Wilson</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio mollitia, ipsa accusamus eius. Aspernatur ab sed minima, doloremque eligendi voluptatibus repellat unde, facilis natus ex ipsum eius atque suscipit fugit.</p>
                            <!-- Social Buttons -->
                            <div class="gla_footer_social">
                                <a href="#"><i class="ti ti-facebook gla_icon_box"></i></a>
                                <a href="#"><i class="ti ti-instagram gla_icon_box"></i></a>
                                <a href="#"><i class="ti ti-google gla_icon_box"></i></a>
                            </div>
                        </div>
                        
                    </div>
                    <div class="col-md-6 gla_image_bck" data-image="{{asset('asset-wedding-1/images/demo/3/our-story-man.webp')}}">
                        
                    </div>
                    <div class="col-md-6 col-md-push-6 gla_image_bck" data-color="#eee">
                        <div class="gla_simple_block">
                            <h2>Kelly Johnson</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio mollitia, ipsa accusamus eius. Aspernatur ab sed minima, doloremque eligendi voluptatibus repellat unde, facilis natus ex ipsum eius atque suscipit fugit.</p>
                            <!-- Social Buttons -->
                            <div class="gla_footer_social">
                                <a href="#"><i class="ti ti-facebook gla_icon_box"></i></a>
                                <a href="#"><i class="ti ti-instagram gla_icon_box"></i></a>
                                <a href="#"><i class="ti ti-google gla_icon_box"></i></a>
                            </div>
                        </div>
                        
                    </div>
                    <div class="col-md-6 col-md-pull-6 gla_image_bck" data-image="{{asset('asset-wedding-1/images/demo/3/our-story-woman.webp')}}">
                        
                    </div>
                </div>
            </div>
        </section>
        <section class="gla_section gla_image_bck gla_fixed gla_wht_txt" data-stellar-background-ratio="0.2" data-image="{{asset('asset-wedding-1/images/demo/3/bg-timer.webp')}}">
            <div class="gla_over" data-color="#000" data-opacity="0.7"></div>
            <div class="container text-center">
                <p><img src="{{asset('asset-wedding-1/images/animations/save_gold.gif')}}" height="280" alt=""></p>
                <h2>April 15th, 2016</h2>
                <h3>St. Thomas's Church,<br>Bristol, U.K.</h3>
                <div class="gla_countdown_gold" data-year="2017" data-month="08" data-day="10"></div>
                
            </div>
        </section>
        <section class="gla_section">
            <div class="container text-center">
                <p><img src="{{asset('asset-wedding-1/images/animations/ourwedding_gold_wh.gif')}}" height="200" alt=""></p>
                <h3>Wedding Details</h3>
                <p>Our ceremony and reception will be held at the Liberty House. Located on the Hudson River, it has a beautiful, unobstructed view of the World Trade One building and a convenient ferry that runs between it and Manhattan.</p>
                <div class="row text-center">
                    <div class="col-md-4 gla_round_block">
                        <div class="gla_round_im gla_image_bck" data-image="{{asset('asset-wedding-1/images/demo/3/when-n-where-1.webp')}}"></div>
                        <h3>The Reception</h3>
                        <p>4:00 PM – 5:30 PM<br>
                        St. Thomas's Church,<br>
                        Bristol<br>
                        U.K.<br>
                        +1 777-123-4567</p>
                        <a href="#" class="btn">View Map</a>
                    </div>
                    <div class="col-md-4 gla_round_block">
                        <div class="gla_round_im gla_image_bck" data-image="{{asset('asset-wedding-1/images/demo/3/when-n-where-2.webp')}}"></div>
                        <h3>The Ceremony</h3>
                        <p>4:00 PM – 5:30 PM<br>
                        St. Thomas's Church,<br>
                        Bristol<br>
                        U.K.<br>
                        +1 777-123-4567</p>
                        <a href="#" class="btn">View Map</a>
                    </div>
                    <div class="col-md-4 gla_round_block">
                        <div class="gla_round_im gla_image_bck" data-image="{{asset('asset-wedding-1/images/demo/3/when-n-where-3.webp')}}"></div>
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
        <section class="gla_section gla_image_bck gla_fixed gla_wht_txt" data-stellar-background-ratio="0.2" data-image="{{asset('asset-wedding-1/images/demo/3/bg-rsvp.webp')}}">
            <div class="gla_over" data-color="#000" data-opacity="0.7"></div>
            
            <div class="container text-center">
                <p><img src="{{asset('asset-wedding-1/images/animations/rsvp_gold.gif')}}" height="200" alt=""></p>
                
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
                            <a href="{{asset('asset-wedding-1/images/demo/3/gallery-1-lg.webp')}}" class="lightbox">
                                <img src="{{asset('asset-wedding-1/images/demo/3/gallery-1-sm.webp')}}" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-4 gla_anim_box grid-item engagement">
                        <div class="gla_shop_item">
                            <a href="{{asset('asset-wedding-1/images/demo/3/gallery-2-lg.webp')}}" class="lightbox">
                                <img src="{{asset('asset-wedding-1/images/demo/3/gallery-2-sm.webp')}}" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-4 gla_anim_box grid-item ceremony">
                        <div class="gla_shop_item">
                            <a href="{{asset('asset-wedding-1/images/demo/3/gallery-3-lg.webp')}}" class="lightbox">
                                <img src="{{asset('asset-wedding-1/images/demo/3/gallery-3-sm.webp')}}" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-4 gla_anim_box grid-item engagement">
                        <div class="gla_shop_item">
                            <a href="{{asset('asset-wedding-1/images/demo/3/gallery-4-lg.webp')}}" class="lightbox">
                                <img src="{{asset('asset-wedding-1/images/demo/3/gallery-4-sm.webp')}}" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-4 gla_anim_box grid-item ceremony">
                        <div class="gla_shop_item">
                            <a href="{{asset('asset-wedding-1/images/demo/3/gallery-5-lg.webp')}}" class="lightbox">
                                <img src="{{asset('asset-wedding-1/images/demo/3/gallery-5-sm.webp')}}" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-4 gla_anim_box grid-item engagement">
                        <div class="gla_shop_item">
                            <a href="{{asset('asset-wedding-1/images/demo/3/gallery-6-lg.webp')}}" class="lightbox">
                                <img src="{{asset('asset-wedding-1/images/demo/3/gallery-6-sm.webp')}}" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-4 gla_anim_box grid-item ceremony">
                        <div class="gla_shop_item">
                            <a href="{{asset('asset-wedding-1/images/demo/3/gallery-7-lg.webp')}}" class="lightbox">
                                <img src="{{asset('asset-wedding-1/images/demo/3/gallery-7-sm.webp')}}" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-4 gla_anim_box grid-item engagement">
                        <div class="gla_shop_item">
                            <a href="{{asset('asset-wedding-1/images/demo/3/gallery-8-lg.webp')}}" class="lightbox">
                                <img src="{{asset('asset-wedding-1/images/demo/3/gallery-8-sm.webp')}}" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-4 gla_anim_box grid-item ceremony">
                        <div class="gla_shop_item">
                            <a href="{{asset('asset-wedding-1/images/demo/3/gallery-9-lg.webp')}}" class="lightbox">
                                <img src="{{asset('asset-wedding-1/images/demo/3/gallery-9-sm.webp')}}" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-4 gla_anim_box grid-item engagement">
                        <div class="gla_shop_item">
                            <a href="{{asset('asset-wedding-1/images/demo/3/gallery-10-lg.webp')}}" class="lightbox">
                                <img src="{{asset('asset-wedding-1/images/demo/3/gallery-10-sm.webp')}}" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-4 gla_anim_box grid-item ceremony">
                        <div class="gla_shop_item">
                            <a href="{{asset('asset-wedding-1/images/demo/3/gallery-11-lg.webp')}}" class="lightbox">
                                <img src="{{asset('asset-wedding-1/images/demo/3/gallery-11-sm.webp')}}" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-4 gla_anim_box grid-item ceremony">
                        <div class="gla_shop_item">
                            <a href="{{asset('asset-wedding-1/images/demo/3/gallery-12-lg.webp')}}" class="lightbox">
                                <img src="{{asset('asset-wedding-1/images/demo/3/gallery-12-sm.webp')}}" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-4 gla_anim_box grid-item engagement">
                        <div class="gla_shop_item">
                            <a href="{{asset('asset-wedding-1/images/demo/3/gallery-13-lg.webp')}}" class="lightbox">
                                <img src="{{asset('asset-wedding-1/images/demo/3/gallery-13-sm.webp')}}" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-4 gla_anim_box grid-item engagement">
                        <div class="gla_shop_item">
                            <a href="{{asset('asset-wedding-1/images/demo/3/gallery-14-lg.webp')}}" class="lightbox">
                                <img src="{{asset('asset-wedding-1/images/demo/3/gallery-14-sm.webp')}}" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-4 gla_anim_box grid-item ceremony">
                        <div class="gla_shop_item">
                            <a href="{{asset('asset-wedding-1/images/demo/3/gallery-15-lg.webp')}}" class="lightbox">
                                <img src="{{asset('asset-wedding-1/images/demo/3/gallery-15-sm.webp')}}" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-4 gla_anim_box grid-item engagement">
                        <div class="gla_shop_item">
                            <a href="{{asset('asset-wedding-1/images/demo/3/gallery-16-lg.webp')}}" class="lightbox">
                                <img src="{{asset('asset-wedding-1/images/demo/3/gallery-16-sm.webp')}}" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-4 gla_anim_box grid-item engagement">
                        <div class="gla_shop_item">
                            <a href="{{asset('asset-wedding-1/images/demo/3/gallery-17-lg.webp')}}" class="lightbox">
                                <img src="{{asset('asset-wedding-1/images/demo/3/gallery-17-sm.webp')}}" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-4 gla_anim_box grid-item ceremony">
                        <div class="gla_shop_item">
                            <a href="{{asset('asset-wedding-1/images/demo/3/gallery-18-lg.webp')}}" class="lightbox">
                                <img src="{{asset('asset-wedding-1/images/demo/3/gallery-18-sm.webp')}}" alt="">
                            </a>
                        </div>
                    </div>
                 </div>
            </div>
        </section>
        <section class="gla_section gla_image_bck gla_wht_txt gla_fixed" data-stellar-background-ratio="0.2" data-image="{{asset('asset-wedding-1/images/demo/3/bg-registry.webp')}}">
            <div class="gla_over" data-color="#000" data-opacity="0.7"></div>
            <div class="container text-center">
                <p><img src="{{asset('asset-wedding-1/images/animations/thanks_gold.gif')}}" height="140" alt=""></p>
                <h2>Registry</h2>
                <p>We’re lucky enough to have nearly everything we need for our home already. And since neither of us has ever been outside of North America, we want our honeymoon to be extra special! If you want to help make it unforgettable, you can contribute using the link to the right. If you would like to give us something to update our home, we’ve compiled a short registry as well.</p>
                <div class="gla_icon_boxes gla_partners row">
                    @for($i = 1; $i <= 6; $i++)
                    <div class="gla_partner_box">
                        <a href="#"><img src="{{asset('asset-wedding-1/images/demo/1/registry-'.$i.'.png')}}" height="80" alt=""></a>
                    </div>
                    @endfor
                </div>
            </div>
        </section>
        <section class="gla_section gla_image_bck" data-color="#fff">
            <div class="container text-center">
                <h2>The Wedding Party</h2>
                <div class="row text-center">
                    <div class="col-md-3 gla_round_block">
                        <div class="gla_round_im gla_image_bck" data-image="{{asset('asset-wedding-1/images/demo/3/party-1.webp')}}"></div>
                        <h4>Jessica Robbinson</h4>
                    </div>
                    <div class="col-md-3 gla_round_block">
                        <div class="gla_round_im gla_image_bck" data-image="{{asset('asset-wedding-1/images/demo/3/party-2.webp')}}"></div>
                        <h4>Ronald Down</h4>
                    </div>
                    <div class="col-md-3 gla_round_block">
                        <div class="gla_round_im gla_image_bck" data-image="{{asset('asset-wedding-1/images/demo/3/party-3.webp')}}"></div>
                        <h4>Marry Clay</h4>
                    </div>
                    <div class="col-md-3 gla_round_block">
                        <div class="gla_round_im gla_image_bck" data-image="{{asset('asset-wedding-1/images/demo/3/party-4.webp')}}"></div>
                        <h4>John Pitterson</h4>
                    </div>

                    <div class="col-md-3 gla_round_block">
                        <div class="gla_round_im gla_image_bck" data-image="{{asset('asset-wedding-1/images/demo/3/party-5.webp')}}"></div>
                        <h4>Katy Auzmann</h4>
                    </div>
                    <div class="col-md-3 gla_round_block">
                        <div class="gla_round_im gla_image_bck" data-image="{{asset('asset-wedding-1/images/demo/3/party-6.webp')}}"></div>
                        <h4>Mark Donald</h4>
                    </div>
                    <div class="col-md-3 gla_round_block">
                        <div class="gla_round_im gla_image_bck" data-image="{{asset('asset-wedding-1/images/demo/3/party-7.webp')}}"></div>
                        <h4>Ann Willson</h4>
                    </div>
                    <div class="col-md-3 gla_round_block">
                        <div class="gla_round_im gla_image_bck" data-image="{{asset('asset-wedding-1/images/demo/3/party-8.webp')}}"></div>
                        <h4>Dominic Shilz</h4>
                    </div>
                </div>
            </div>
        </section>
        <section class="gla_section gla_image_bck gla_fixed gla_wht_txt" data-stellar-background-ratio="0.8" data-image="{{asset('asset-wedding-1/images/demo/3/bg-thank-you.webp')}}">
            <div class="gla_over" data-color="#000" data-opacity="0.7"></div>
            <div class="container text-center">
                <p><img src="{{asset('asset-wedding-1/images/animations/just_gold.gif')}}" height="240" alt=""></p>
            </div>
        </section>
    </section>
    
        </div>
        @include('_invitation._wedding._include.asset-bottom-1')
    </body>
</html>