<!DOCTYPE html>
<html lang="en">
    <head>
        @include('_main._include.head')
        @include('_main._include.asset-top')
    </head>
    <body class="gla_middle_titles" id="home">
        <!-- Page -->
        <div class="gla_page" id="gla_page">

            <a href="#gla_page" class="gla_top ti ti-angle-up gla_go"></a>
            @include('_main._include.nav')
            <div class="gla_page_title gla_image_bck gla_wht_txt" data-color="#282828">
            <div class="container text-left">
                <div class="row">
                <div class="col-md-8">
                    <h1 class="gla_h1_title">Jastip</h1>
                    <small>Bisa pewe pilih barang yang kamu mau dari berbagai brand sekaligus, <br>biarin kami yang pergi belanja!</small>
                </div>
                <div class="col-md-4">
                    <div class="breadcrumbs">
                    <a href="{{url('/')}}">Home</a><a href="{{url('/')}}">More</a><span>Jastip</span>
                    </div>
                </div>
                
                </div>
            </div>
            </div>

            <!-- Content -->
            <section id="gla_content" class="gla_content">
                <!-- section -->
                <section class="gla_section gla_image_bck" data-color="#fafafd">
                    <div class="container text-center">
                        <div class="row">
                            <img    src="{{asset('asset-main/images/ani/walk7.gif')}}" data-bottom-top="@src:{{asset('asset-main/images/ani/walk7.gif')}}; opacity:1" 
                                    class="gla_animated_flower" height="100" alt="">
                            <img    src="{{asset('asset-main/images/ani/walk4.gif')}}" data-bottom-top="@src:{{asset('asset-main/images/ani/walk4.gif')}}; opacity:1" 
                                    class="gla_animated_flower" height="100" alt="">
                            <img    src="{{asset('asset-main/images/ani/walk9.gif')}}" data-bottom-top="@src:{{asset('asset-main/images/ani/walk9.gif')}}; opacity:1" 
                                    class="gla_animated_flower" height="100" alt="">
                            <img    src="{{asset('asset-main/images/ani/walk2.gif')}}" data-bottom-top="@src:{{asset('asset-main/images/ani/walk2.gif')}}; opacity:1" 
                                    class="gla_animated_flower" height="100" alt="">
                            <img    src="{{asset('asset-main/images/ani/walk6.gif')}}" data-bottom-top="@src:{{asset('asset-main/images/ani/walk6.gif')}}; opacity:1" 
                                    class="gla_animated_flower" height="100" alt="">
                        </div><br><br>
                        <h3 class="gla_subtitle">Syarat & Ketentuan</h3>
                        <table class="table table-hover table-dark text-left">
                            <tbody class="tbody-white">
                                <tr>
                                    <th scope="row">1</th><th>Foto/screenshoot gambar barang dari <a href="#website-catalog">website catalog</a>, pastikan ada foto dan nama barang</th>
                                </tr>
                                <tr>
                                    <th scope="row">2</th><th>Pilih ukuran dan warna jika tersedia</th>
                                </tr>
                                <tr>
                                    <th scope="row">3</th><th>Order/diskusi melalui WA &nbsp;&nbsp;&nbsp;&nbsp;
                                        <a href="" class="link_wa" target="_blank" style="color:green;font-weight:600;font-size:16px;"><u>disini</u></a>
                                    </th>
                                </tr>
                                <tr>
                                    <th scope="row">4</th><th>Admin akan menghitung biaya belanja 
                                        (berapa sih biayanya? <a href="#faq" style="color:blue;font-weight:600;">lihat disini ya</a>)</th>
                                </tr>
                                <tr>
                                    <th scope="row">5</th><th>Admin hitung biaya kirim</th>
                                </tr>
                                <tr>
                                    <th scope="row">6</th><th>Transfer biaya transaksi</th>
                                </tr>
                                <tr>
                                    <th scope="row">7</th><th>Kami berangkat belanja dan kirim (1-4 hari dari tanggal transfer)</th>
                                </tr>
                                <tr>
                                    <th scope="row">8</th><th>Kamu tinggal tunggu barang datang! Yeay!</th>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </section>
                <!-- section end -->
                <!-- section -->
                <section class="gla_section" style="background-color: rgb(242, 242, 242);">
                    <div class="container" id="website-catalog-loading" style="display:none">
                        <img    src="{{asset('asset-main/images/ani/walks.gif')}}" data-bottom-top="@src:{{asset('asset-main/images/ani/walks.gif')}}; opacity:1" 
                                class="gla_animated_flower" height="200" alt="loading..."><br>Loading ...
                    </div>
                    <div class="container" id="website-catalog">
                        <div class="gla_shop_header">
                            <div class="row">
                                <div class="col-md-6">
                                    Menampilkan <b id="start_list_info">{{@$start_list+1}}</b>–<b id="until_list_info">{{@$start_list+@$limit_list}}</b> 
                                    dari total <b id="total_list_info">{{@$brand_list_total}}</b> hasil
                                    <input name="limit_list" value="{{$limit_list}}" hidden>
                                </div>
                                <div class="col-md-6 text-right">
                                    <select name="category" onchange="reloadWebsiteCatalog(1)">
                                        <option value="" selected="selected">Semua Category</option>
                                        <option value="fashion">Fashion</option>
                                        <option value="bag">Bag</option>
                                        <option value="shoes">Shoes</option>
                                        <option value="beauty">Beauty</option>
                                        <option value="fragrance">Fragrance</option>
                                        <option value="electronics">Electronics</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row" id="website-catalog-item">
                            @foreach($brand_list as $item)
                            <div class="col-xs-6 col-md-3 gla_anim_box">
                                <div class="gla_shop_item">
                                    @if($item->is_sale_available)
                                        <span class="gla_shop_item_sale">Diskon tersedia</span>
                                    @endif
                                    <span class="gla_shop_item_slider">
                                        <img src="{{asset($item->image_preview)}}" alt="">
                                    </span>
                                    <a href="{{$item->catalog_url}}" target="_blank" class="gla_shop_item_title">
                                        <img src="{{asset($item->image_logo)}}" style="height:100px;width:auto !important">
                                        <br><br><small class="text-muted">lihat catalog</small>
                                    </a>
                                </div>
                            </div>
                            @endforeach
                        </div>

                        <nav class="gla_blog_pag">
                            <ul class="pagination">
                                <?php
                                    $total_page = ceil($brand_list_total/@$limit_list);
                                ?>
                                <li><a href="#"><i class="ti ti-angle-left"></i></a></li>
                                @for($i=1;$i<=$total_page;$i++)
                                <li class="reload-website-catalog-li {{$i==1?'active':''}} reload-website-catalog-li-{{$i}}">
                                    <a href="#website-catalog" onclick="reloadWebsiteCatalog({{$i}})">{{$i}}</a>
                                </li>
                                @endfor
                                <li><a href="#"><i class="ti ti-angle-right"></i></a></li>
                            </ul>
                            <input name="total_page" value="{{$total_page}}" hidden>
                        </nav> 
                    </div>
                    <!-- container end -->
                </section>
                <!-- section end -->

                
                <section class="gla_section">
                    <div class="container">
                        <div class="row" data-100-top="@class:row sticky_block" data--200-bottom="@class:row hide_sticky_block" data-bottom-top="@class:row nosticky_block">
                            <div class="col text-center">
                                <!-- Accordion -->
                                <h3 class="gla_subtitle" id="faq">Frequently Asked Questions (FAQ)</h3>
                                <div class="panel-group accord-chev" >
                                    @foreach($faq_list as $item)
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h6 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#faq" href="#collapseFaq_{{$item->id}}">{{$item->ask}}</a>
                                            </h6>
                                        </div>
                                        <div id="collapseFaq_{{$item->id}}" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <b>{!! $item->answer !!}</b>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                                <!-- Accordion end--> 
                                <br><br>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- section end -->
                

            </section>
            <!-- Content End -->

        </div>
        <!-- Page End -->
        @include('_main._include.asset-bottom')
    </body>
</html>

<script>
    function reloadWebsiteCatalog(page_num){
        let limit_list  = $("[name='limit_list']").val();
        let category    = $('[name="category"]').val();
        $('#website-catalog-loading').show();
        $('#website-catalog').hide();
        $.ajax({
            url: '{{url("/jastip/get-page")}}',
            headers: {
                'x-csrf-token': $('meta[name="csrf-token"]').attr('content'),
            },
            type: 'GET',
            data: {
                page_num: page_num,
                limit_list: limit_list,
                category: category
            },
            success: (function (data) {
                // console.log(data);
                if(data.status){
                    $('#start_list_info').html(data.detail.start_list);
                    $('#until_list_info').html(data.detail.until_list);
                    $('#total_list_info').html(data.detail.brand_list_total);
                    let total_page_current = Math.ceil(data.detail.brand_list_total/limit_list);
                    let template = '';
                    if($('[name="total_page"]').val() != total_page_current){
                        $('[name="total_page"]').val(total_page_current);
                        $('.pagination').html('');
                        let active_page = 1;
                        if(data.detail.start_list != 1){
                            active_page = Math.ceil(data.detail.start_list/limit_list);
                        }
                        template = `<li><a href="#"><i class="ti ti-angle-left"></i></a></li>`;
                        for(let i=1;i<=total_page_current;i++){
                            template += `<li class="reload-website-catalog-li `+(i==active_page?`active`:``)+` reload-website-catalog-li-`+i+`">
                                            <a href="#website-catalog" onclick="reloadWebsiteCatalog(`+i+`)">`+i+`</a>
                                        </li>`;
                        }
                        template += `<li><a href="#"><i class="ti ti-angle-right"></i></a></li>`;
                        $('.pagination').append(template);
                    }else{
                        $('.reload-website-catalog-li').removeClass('active');
                        $('.reload-website-catalog-li-'+page_num).addClass('active');
                    }
                    
                    template = '';
                    $('#website-catalog-item').html('');
                    (data.detail.brand_list).forEach(function(obj,key){
                        template = `<div class="col-xs-6 col-md-3 gla_anim_box">
                                        <div class="gla_shop_item">`+(obj.is_sale_available?`<span class="gla_shop_item_sale">Diskon tersedia</span>`:``)+`
                                            <span class="gla_shop_item_slider">
                                                <img src="`+(obj.image_preview)+`" alt="">
                                            </span>
                                            <a href="`+(obj.catalog_url)+`" target="_blank" class="gla_shop_item_title">
                                                <img src="`+(obj.image_logo)+`" style="height:100px;width:auto !important">
                                                <br><br><small class="text-muted">lihat catalog</small>
                                            </a>
                                        </div>
                                    </div>`;
                        $('#website-catalog-item').append(template);
                    });
                }else{
                    alert('Oops, we`re sorry','',data.message);
                }
                $('#website-catalog-loading').hide();
                $('#website-catalog').show();
            }),error:function(xhr,status,error) {
                alert('error [sys]','',xhr.responseText);
            }
        });
    }
</script>