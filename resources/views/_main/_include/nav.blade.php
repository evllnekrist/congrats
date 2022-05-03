<!-- Header -->
<header>      
    <nav class="gla_light_nav gla_transp_nav" style="color:#333">

        <div class="container">
            <div class="gla_logo_container clearfix">
                <img src="{{asset('asset-main/images/logo/logo-v2-fill-darker.png')}}" alt="" class="gla_logo_rev">
                <div class="gla_logo_txt">
                    <a href="/" class="gla_logo" style="color:#333">beritabaik.co</a>
                    <div class="gla_logo_und">digital solution</div>
                </div>
            </div>
            <!-- Menu -->
            <div class="gla_main_menu gla_main_menu_mobile">
                <div class="gla_main_menu_icon">
                    @for($i=0;$i<3;$i++)
                        <i></i>
                    @endfor
                    <b>Menu</b>
                    <b class="gla_main_menu_icon_b">Back</b>
                </div>
            </div>
            <div class="gla_main_menu_content gla_image_bck" data-color="rgba(0,0,0,0.9)" data-image="images/wedding/Petrick_Menda/14400933225_3b844816c3_k.jpg">
                <div class="gla_over" data-color="#000" data-opacity="0.7"></div>
            </div>
            <div class="gla_main_menu_content_menu text-right">
                <div class="container">
                    <ul>
                        <li><a href="{{url('/#home')}}">Home</a></li>
                        <li><a href="{{url('/#catalog-template')}}">Catalog Template</a></li>
                        <li><a href="{{url('/#pricelist')}}">Pricelist</a></li>
                        <li><a href="" class="link_wa" target="_blank">Order</a></li>
                        <li class="gla_parent"><a href="#">More</a>
                            <ul class="mega-menu">
                                <li class="mega-menu-col">
                                    <ul>
                                        <li class="mega-menu-col-header">Apps Development</li>
                                        <li><a href="{{url('/co-solution')}}"><b>Company Solution</b></a></li>
                                    </ul>
                                </li>
                                <li class="mega-menu-col">
                                    <ul>
                                        <li class="mega-menu-col-header">Commerce</li>
                                        <li><a href="{{url('/jastip')}}"><b>Jasa Titip</b></a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li> 
                    </ul>
                    <div class="gla_main_menu_content_menu_copy">
                        <form>
                            <input type="text" class="form-control" placeholder="Enter Your Keywords">
                            <button type="submit" class="btn">Search</button>
                        </form>
                        <br>
                        <p>© beritabaik.co 2021</p>
                        <!-- Social Buttons -->
                        <div class="gla_footer_social">
                            <a href="#"><i class="ti ti-instagram gla_icon_box"></i></a>
                            <a href="#"><i class="ti ti-google gla_icon_box"></i></a>
                            <a href="#"><i class="ti ti-mail gla_icon_box"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Menu End -->
            <!-- Search Block -->
            <div class="gla_search_block">
                <div class="gla_search_block_link gla_search_parent"><i class="ti ti-search"></i>
                    <ul>
                        <li>
                            <form>
                                <input type="text" class="form-control" placeholder="Enter Your Keywords">
                                <button type="submit" class="btn">
                                <i class="ti ti-search"></i>
                                </button>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Search Block End -->
            <!-- Top Menu -->
            <div class="gla_default_menu">
                <ul>
                    <li><a href="{{url('/#home')}}" style="color:#333">Home</a></li>
                    <li><a href="{{url('/#catalog-template')}}" style="color:#333">Catalog Template</a></li>
                    <li><a href="{{url('/#pricelist')}}" style="color:#333">Pricelist</a></li>
                    <li><a href="" class="link_wa" target="_blank" style="color:#333">Order</a></li>
                    <li class="gla_parent"><a href="#" style="color:#333">More</a>
                        <ul class="mega-menu">
                            <li class="mega-menu-col">
                                <ul>
                                    <li class="mega-menu-col-header" style="color:#333">Apps Development</li>
                                    <li><a href="{{url('/co-solution')}}" style="color:#333"><b>Company Solution</b></a></li>
                                </ul>
                            </li>
                            <li class="mega-menu-col">
                                <ul>
                                    <li class="mega-menu-col-header" style="color:#333">Commerce</li>
                                    <li><a href="{{url('/jastip')}}" style="color:#333"><b>Jasa Titip</b></a></li>
                                </ul>
                            </li>
                        </ul>
                    </li> 
                </ul>
            </div>
            <!-- Top Menu End -->
        </div>
        <!-- container end -->
    </nav>
</header>
<!-- Header End -->