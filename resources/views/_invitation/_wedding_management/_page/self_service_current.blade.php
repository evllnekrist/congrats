<!DOCTYPE html>
<html lang="en">
    <head>
        @include('_invitation._wedding_management._include.head')
        @include('_invitation._wedding_management._include.asset-top')
        <link href="{{asset('asset-main/css/jquery.dataTables.css')}}" rel="stylesheet">
        <link href="{{asset('asset-main/css/buttons.dataTables.min.css')}}" rel="stylesheet">
    </head>
    <body class="gla_middle_titles" id="home">
        <?php
            $event_index_start  = 0;
            $event_index_stored_length = $event_count?$event_count-1:0;
            $sample['link']     = 'https://';
            $sample['title']    = 'resepsi, pemberkatan, ijab qabul, acara adat, dll';
            $sample['place_name']       = '';
            $sample['place_address']    = 'contoh:
            Jl. Gading Indah III Blok NF1 No. 20,
            RT.11/RW.12, Pegangsaan Dua,
            North Jakarta City, Jakarta';
            $sample['note']             = 'contoh:
            saya ingin ada dua jenis undangan, 
            dengan dan tanpa resepsi';
            // dump($selected);
            // dump($events);
        ?>
        <!-- Preloader -->
            <div class="gla_page_loader_light gla_image_bck text-choco-3" data-color="#181d23">
                <div class="gla_loader_light">
                    <p><img src="{{asset('asset-main/images/ani/walks.gif')}}" height="150" alt=""></p>
                    <p class="fix-montserrat-xs-b"><i>Loading ...</i></p>
                </div>
            </div>
        <!-- Preloader End-->
        <!-- Page -->
        <div class="gla_page" id="gla_page">

            <a href="#gla_page" class="gla_top ti ti-angle-up gla_go"></a>
            @include('_invitation._wedding_management._include.nav')
            <div class="gla_page_title_xsm gla_image_bck gla_wht_txt" data-color="#282828" id="top_of_the_page">
                <div class="container text-left">
                    <div class="row">
                    <div class="col-md-6">
                        <h4 class="gla_h4_title">My Current Data</h4>
                        <small>Dapatkan detail data reservasi, ucapan maupun format sebaran sosial media disini</small>
                    </div>
                    <div class="col-md-6">
                        <div class="breadcrumbs">
                            <a href="{{url('/')}}">Home</a><a href="{{url('/')}}">Wedding Management</a><span>SS</span>
                        </div>
                    </div>
                    
                    </div>
                </div>
            </div>
            <div class="gla_page_title_xsm_x gla_image_bck text-black" data-color="#282828" id="top_of_the_page">
                <div class="row text-center">
                    @foreach(@$wm_menus as $index => $item)
                        <?php
                            $rewrite_url = '/wm'.str_replace("{code}",$code,$item->logic);
                        ?>
                        <a class="col-md-6 gla_page_title_sm_x_item {{$item->value=='2'?'btn-success':'btn-default'}}" href="{{$item->value=='2'?'#':url($rewrite_url)}}">
                            {{$item->name}}
                        </a>
                    @endforeach
                </div>
            </div>

            <!-- Content -->
            <input id="wa_phone" value='{{env("WA_PHONE")}}' hidden>
            <input id="wa_greet" value='{{env("WA_GREET")}}' hidden>
            <section id="gla_content" class="gla_content">
                <section class="gla_section gla_image_bck" data-color="#fafafd">
                    <div class="container-mini">
                        <div class="text-success" style="padding-top:60px">
                            <h6 class="gla_h6_title">Data Invitasi - {{ucfirst(@$selected->groom_name)}} dan {{ucfirst(@$selected->bride_name)}}</h6>
                        </div>
                        <div class="alert alert-danger" id="form-ss-prep-error-info-wrap" style="display:none">
                            <span aria-hidden="true" class="alert-icon icon_blocked"></span><strong>Ooppsss!</strong><br><span id="form-ss-prep-error-info"></span>
                        </div>
                    </div>
                    <div class="container">

                        <!-- RSVP :: begin -->
                        <div class="panel panel-default" style="margin-top:-50px">
                            <div class="panel-heading">
                                <div class="panel-title row">
                                    <a class="col-xs-6" data-toggle="collapse" href="#table-rsvp-wrap"><b class="text-info">RSVP (Daftar Reservasi)</b></a>
                                    <div class="col-xs-6 text-right"></div>
                                </div>
                            </div>
                            <div id="table-rsvp-wrap" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <table class="table table-sm table-borderless table-striped ft-dark" id="table-rsvp" width="100%">
                                        <thead>
                                            <tr>
                                                <th width="30%">Pengirim</th>
                                                <th width="20%">Asal Kota</th>                              
                                                <th width="20%">Status Kehadiran</th>
                                                <th width="30%">Alamat Pengiriman Souvenir</th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- RSVP :: end -->
                        <!-- Wishes :: begin -->
                        <div class="panel panel-default" style="margin-top:50px">
                            <div class="panel-heading">
                                <div class="panel-title row">
                                    <a class="col-xs-6" data-toggle="collapse" href="#table-wish-wrap"><b class="text-info">Wishes (Ucapan)</b></a>
                                    <div class="col-xs-6 text-right"></div>
                                </div>
                            </div>
                            <div id="table-wish-wrap" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <table class="table table-sm table-borderless table-striped ft-dark" id="table-wish" width="100%">
                                        <thead>
                                            <tr class="text-blue">
                                                <th width="25%">Sender</th>                              
                                                <th width="75%">Wishes</th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- Wishes :: end -->

                    </div>
                </section>
            </section>
            <!-- Content End -->

        </div>
        <!-- Page End -->
        @include('_invitation._wedding_management._include.asset-bottom')
        <script src="{{asset('asset-main/js/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('asset-main/js/dataTables.buttons.min.js')}}"></script>
        <script src="{{asset('asset-main/js/jszip.min.js')}}"></script>
        <script src="{{asset('asset-main/js/pdfmake.min.js')}}"></script>
        <script src="{{asset('asset-main/js/vfs_fonts.js')}}"></script>
        <script src="{{asset('asset-main/js/buttons.html5.min.js')}}"></script>
        <script src="{{asset('asset-main/js/buttons.print.min.js')}}"></script>
    </body>
</html>

<script>
    $( document ).ready(function() {
        setTimeout(function() {
            $('.gla_page_loader_light').hide();
        },2000);

        seeRSVP();
        seeWishes();

        function seeRSVP(){
            $('#table-rsvp').DataTable().clear().destroy();
            $('#table-rsvp').DataTable({
                processing: true,
                serverSide: true,
                paging: true,
                dom: 'Bfrtlip',
                buttons: [
                    'excel','csv','copy','pdf','print'
                ],
                lengthMenu : [[10, 50, 100, -1], [10, 50, 100, "All"]],
                ajax: '{{url("/w/".$code_str."/get-rsvp")}}',
                columns: [
                    {data: 'sender_name', name: 'sender_name'},
                    {data: 'sender_address', name: 'sender_address'},
                    {data: 'attend', name: 'attend'},
                    {data: 'shipping_address', name: 'shipping_address'},
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
                paging: true,
                dom: 'Bfrtlip',
                buttons: [
                    'excel','csv','copy','pdf','print'
                ],
                lengthMenu : [[10, 50, 100, -1], [10, 50, 100, "All"]],
                ajax: '{{url("/w/".$code_str."/get-wish")}}',
                columns: [
                    {data: 'sender_name', name: 'sender_name'},
                    {data: 'message', name: 'message'},
                ],
            });
        }
    });
    
</script>