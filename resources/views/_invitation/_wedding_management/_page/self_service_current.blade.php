<!DOCTYPE html>
<html lang="en">
    <head>
        @include('_invitation._wedding_management._include.head')
        @include('_invitation._wedding_management._include.asset-top')
        <link href="{{asset('asset-main/css/jquery.dataTables.css')}}" rel="stylesheet">
        <link href="{{asset('asset-main/css/buttons.dataTables.min.css')}}" rel="stylesheet">
        <link href="{{asset('asset-main/css/editors/quill/katex.min.css')}}" rel="stylesheet">
        <link href="{{asset('asset-main/css/editors/quill/quill.snow.css')}}" rel="stylesheet">
        <link href="{{asset('asset-main/css/editors/quill/quill.buble.css')}}" rel="stylesheet">
    </head>
    <body class="gla_middle_titles" id="home">
        <?php
            $invite_index_start  = 0;
            $invite_index_stored_length = $invite_count?$invite_count-1:0;
            $event_width_percent_all    = 30;
            if($event_count){
                $event_width_percent_item   = $event_width_percent_all/$event_count;
            }else{
                $event_width_percent_item   = $event_width_percent_all;
            }
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
                        <small>{{ucfirst(@$selected->groom_name_short)}} dan {{ucfirst(@$selected->bride_name_short)}} bisa dapatkan detail data reservasi, ucapan maupun format sebaran sosial media disini</small>
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
                        <div class="alert alert-danger" id="form-ss-current-error-info-wrap" style="display:none;margin-top:50px">
                            <span aria-hidden="true" class="alert-icon icon_blocked"></span><strong>Ooppsss!</strong><br><span id="form-ss-current-error-info"></span>
                        </div>
                    </div>
                    <div class="container" style="margin-top:-50px">
                    
                        <!-- Daftar Undangan :: begin -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <div class="panel-title row">
                                    <a class="col-xs-6" data-toggle="collapse" href="#table-invite-list-wrap"><b class="text-info">Daftar Undangan</b></a>
                                    <div class="col-xs-6 text-right"></div>
                                </div>
                            </div>
                            <div id="table-invite-list-wrap" class="panel-collapse collapse in">
                                <div class="panel-body">
                                    <form id="form-ss-invite" onsubmit="return false;">
                                        <strong>Template broadcast WA</strong><br>
                                        <div class="row">
                                            <div class="col-sm-4 col-md-2">
                                                <label for="data-subject"> Variable: </label>
                                            </div>
                                            <div class="col-sm-8 col-md-10">
                                                @foreach($invite_vars as $index => $item)
                                                    <button type="button" class="btn btn-primary btn-xs cursor-pointer variable-name" data-value="{{$item->value}}">{{$item->name}}</button>
                                                @endforeach
                                            </div>
                                        </div>
                                        <div class="row" style="margin-top:20px">
                                            <div class="col-md-8">
                                                <div id="full-wrapper">
                                                    <div id="full-container">
                                                        <div class='editor' spellcheck="false">{!! @$selected->broadcast_wa_msg_body !!}</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <table class="table table-sm table-borderless table-striped ft-dark" id="table-invite-list" width="100%" style="margin-top:50px">
                                            <thead>
                                                <tr>
                                                    <th width="5%" class="text-center">#</th>
                                                    <th width="20%" class="text-center">Nama</th>
                                                    <th width="15%" class="text-center">Telp</th>
                                                    <th width="10%" class="text-center">Qty</th>
                                                    @foreach($events as $index => $item)
                                                    <th width="{{$event_width_percent_item}}%" class="text-center">
                                                        <small>Acara {{$index+1}}</small><br><smaller>{{$item->title}}</small>
                                                    </th>  
                                                    @endforeach                          
                                                    <th width="20%" class="text-center">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody id="the-invites" data-index="{{$invite_index_stored_length}}">
                                                @if(!$invite_count)
                                                <tr id="invite-{{$invite_index_start}}-wrap">
                                                    <td width="5%"><b><span id="invite-{{$invite_index_start}}-numbering" class="text-info">{{$invite_index_start+1}}</span></b></td>
                                                    <td width="20%">
                                                        <textarea name="invite[]['name']" maxlength="100" spellcheck="false" class="form-control form-control-compact in-invite" id="in-invite-{{$invite_index_start}}" data-index="{{$invite_index_start}}" required></textarea>
                                                    </td>
                                                    <td width="15%">
                                                        <input type="text" name="invite[]['wa_number']" maxlength="14" spellcheck="false" class="form-control form-control-compact in-invite no-space only-numerik" placeholder="08**********" autocomplete="new-value-only">
                                                    </td>
                                                    <td width="5%" class="text-center">
                                                        <input type="number" name="invite[]['qty']" value="1" class="form-control form-control-compact in-invite" required>
                                                    </td>
                                                    @foreach($events as $index => $item)
                                                    <td width="{{$event_width_percent_item}}%" class="text-center">
                                                        <input type="checkbox" name="invite[]['event'][{{$item->id}}]" class="in-invite-{{$invite_index_start}}" data-event_id="{{$item->id}}" value="true" checked>
                                                    </td>  
                                                    @endforeach                                                   
                                                    <td width="20%" class="text-center">
                                                        <a class="copy-to-clipboard" data-to_copy="">
                                                            <i class="fa fa-code text-success" aria-hidden="true" title="copy link saja"></i>
                                                        </a>
                                                        <a class="copy-to-clipboard" data-to_copy="">
                                                            <i class="fa fa-clipboard text-success ml-x-percent" aria-hidden="true" title="copy template kirim WA"></i>
                                                        </a>
                                                        <a class="btn-remove-invite" id="btn-remove-invite-{{$invite_index_start}}" data-index="{{$invite_index_start}}">
                                                            <i class="fa fa-times text-danger ml-x-percent" aria-hidden="true"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                @else
                                                    @foreach($invites as $index => $item)
                                                    <tr id="invite-{{$index}}-wrap">
                                                        <td width="5%"><b><span id="invite-{{$index}}-numbering" class="text-info">{{$index+1}}</span></b></td>
                                                        <td width="20%">
                                                            <textarea name="invite[]['name']" data-invite_id="{{$item->id}}" maxlength="100" spellcheck="false" class="form-control form-control-compact in-invite" id="in-invite-{{$index}}" data-index="{{$index}}" required>{{$item->name}}</textarea>
                                                        </td>
                                                        <td width="15%">
                                                            <input type="text" name="invite[]['wa_number']" value="{{$item->wa_number}}" maxlength="14" spellcheck="false" class="form-control form-control-compact in-invite no-space only-numerik" placeholder="08**********" autocomplete="new-value-only">
                                                        </td>
                                                        <td width="5%" class="text-center">
                                                            <input type="number" name="invite[]['qty']" value="{{$item->qty}}" value="1" class="form-control form-control-compact in-invite" required>
                                                        </td>
                                                        <?php
                                                            $event_map      = $item->event_map->toArray();
                                                            $event_id_col   = array_column($event_map?$event_map:array(),'event_id');
                                                        ?>
                                                        @foreach($events as $index2 => $item2)
                                                        <td width="{{$event_width_percent_item}}%" class="text-center">
                                                            <?php
                                                                $key                    = array_search($item2->id, $event_id_col);
                                                                $invite_event_map_flag  = ($key !== false?($event_map[$key]['presence_flag']?'checked':''):'');
                                                            ?>
                                                            <input type="checkbox" name="invite[]['event'][{{$item2->id}}]" class="in-invite-{{$index}}" data-event_id="{{$item2->id}}" value="true" {{$invite_event_map_flag}}>
                                                        </td>  
                                                        @endforeach                                                   
                                                        <td width="20%" class="text-center">
                                                            <a class="copy-to-clipboard" data-to_copy="">
                                                                <i class="fa fa-code text-success" aria-hidden="true" title="copy link saja"></i>
                                                            </a>
                                                            <a class="copy-to-clipboard" data-to_copy="">
                                                                <i class="fa fa-clipboard text-success ml-x-percent" aria-hidden="true" title="copy template kirim WA"></i>
                                                            </a>
                                                            <a class="btn-remove-invite" id="btn-remove-invite-{{$index}}" data-index="{{$index}}">
                                                                <i class="fa fa-times text-danger ml-x-percent" aria-hidden="true"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                @endif
                                            </tbody>
                                        </table>
                                        @if(!$is_expired)
                                            <div class="text-right" style="padding:20px 0">
                                                <button type="button" class="btn btn-warning" id="btn-add-new-invite"><i class="fa fa-plus" aria-hidden="true"></i> undangan baru</button>
                                            </div>
                                            <div class="col-md-12 text-center">
                                                <hr>
                                                <input type="submit" class="btn btn-info submit" id="form-ss-invite-store" value="Simpan Perubahan">
                                            </div>
                                        @endif
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- Daftar Undangan :: end -->
                        <!-- RSVP :: begin -->
                        <div class="panel panel-default" style="margin-top:50px">
                            <div class="panel-heading">
                                <div class="panel-title row">
                                    <a class="col-xs-6" data-toggle="collapse" href="#table-rsvp-wrap"><b class="text-info">Konfirmasi Kedatangan</b></a>
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
                                    <a class="col-xs-6" data-toggle="collapse" href="#table-wish-wrap"><b class="text-info">Ucapan</b></a>
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
        <script src="{{asset('asset-main/js/editors/quill/katex.min.js')}}"></script>
        <script src="{{asset('asset-main/js/editors/quill/highlight.min.js')}}"></script>
        <script src="{{asset('asset-main/js/editors/quill/quill.min.js')}}"></script>
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
                            if(data == 1){
                                return  '<center><span><i class="ti ti-check text-primary"></i></span></center>';
                            }else{
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

        $("#full-container").html(`<div class='editor' spellcheck="false"></div>`);
        var editor = new Quill('#full-container .editor', {
            bounds: '#full-container .editor',
            modules: {

                'formula': true,
                'syntax': true,
                'toolbar': [
                    [{
                        'font': []
                    }, {
                        'size': []
                    }],
                    ['bold', 'italic', 'underline', 'strike'],
                    [{
                        'color': []
                    }, {
                        'background': []
                    }],
                    [{
                        'script': 'super'
                    }, {
                        'script': 'sub'
                    }],
                    [{
                        'header': '1'
                    }, {
                        'header': '2'
                    }, 'blockquote', 'code-block'],
                    [{
                        'list': 'ordered'
                    }, {
                        'list': 'bullet'
                    }, {
                        'indent': '-1'
                    }, {
                        'indent': '+1'
                    }],
                    ['direction', {
                        'align': []
                    }],
                    ['link', 'image', 'video', 'formula'],
                    ['clean']
                ],
            },
            theme: 'snow',
            // theme: 'buble',
            // theme: 'core',
        });

        $(document).on("click","#form-ss-invite-store",function(){
            @if(!$is_expired)
            if(document.getElementById('form-ss-invite').checkValidity()){ 
                console.log('handling :: form-ss-invite | validity passed');
                $('#form-ss-current-error-info-wrap').hide();
                $('#form-ss-current-error-info').html('');
                $('.gla_page_loader_light').show();
                
                let invites          = {};
                let temp_ass_idx    = '';
                let runnin_idx      = {name:0,wa_number:0,qty:0,id:0};
                $('.in-invite').each(function(idx,val) {
                    temp_ass_idx    = this.name.split("['").pop().split("']").shift();
                    if (typeof invites[runnin_idx[temp_ass_idx]] == "undefined" ) { // due to js need
                        invites[runnin_idx[temp_ass_idx]] = {};
                    }
                    if(temp_ass_idx == 'name'){
                        if($(val).data('invite_id') != undefined){
                            invites[runnin_idx['id']]['id'] = $(val).data('invite_id');
                        }
                        $invite_index = $(val).data('index');
                        console.log('.in-invite-'+$invite_index);
                        $('.in-invite-'+$invite_index).each(function(idx2,val2) {
                            if (typeof invites[runnin_idx[temp_ass_idx]]['event_detail'] == "undefined" ) {
                                console.log('here');
                                invites[runnin_idx[temp_ass_idx]]['event_detail'] = {};
                            }
                                console.log('hour');
                            invites[runnin_idx[temp_ass_idx]]['event_detail'][idx2] = {};
                            invites[runnin_idx[temp_ass_idx]]['event_detail'][idx2]['event_id'] = $(val2).data('event_id');
                            invites[runnin_idx[temp_ass_idx]]['event_detail'][idx2]['flag']     = $(val2).is(':checked');
                        });
                        runnin_idx['id']++;
                    }
                    invites[runnin_idx[temp_ass_idx]][temp_ass_idx] = $(val).val();
                    runnin_idx[temp_ass_idx]++;
                });
                console.log("______________________________________________________________________________________>>");
                console.log(invites);
                // $('.gla_page_loader_light').hide(); return; 
                let url     = "{{url('/')}}/wm/ss/store-invite/{{$code}}";
                $('.gla_page_loader_light').hide();
                
                $.ajax({
                    url: url,
                    headers: {
                        'x-csrf-token': $('meta[name="csrf-token"]').attr('content'),
                    },
                    type: 'POST',
                    data: JSON.stringify({
                        invites                      : invites
                    }),
                    contentType: 'application/json; charset=utf-8',
                    success: (function (data) {
                        // console.log('---->> '+url,data);
                        if(data.status){
                            toastr.success(data.message, 'Success');
                            location.reload(true);
                        }else{
                            $('#form-ss-current-error-info-wrap').show();
                            $('#form-ss-current-error-info').html(data.message);
                            document.getElementById("top_of_the_page").scrollIntoView({ behavior: "smooth" });
                            $('.gla_page_loader_light').hide();
                        }
                    }),error:function(xhr,status,error) {
                        alert('error [sys]','',xhr.responseText);
                        $('.gla_page_loader_light').hide();
                    }
                });
            }else{
                console.log('handling :: form-ss-prep | validity 0');
            }
            @endif
        }).on("click","#btn-add-new-invite", function(){
            @if(!$is_expired)
            let new_index = $('#the-invites').data('index')+1;
            $('#the-invites').data('index', new_index);
            let template = `
                <tr id="invite-`+new_index+`-wrap" class="tr-compact">
                    <td width="5%"><b><span id="invite-`+new_index+`-numbering" class="text-info">`+(new_index+1)+`</span></b></td>
                    <td width="20%">
                        <textarea name="invite[]['name']" maxlength="100" spellcheck="false" class="form-control form-control-compact in-invite" id="in-invite-`+new_index+`" data-index="`+new_index+`" required></textarea>
                    </td>
                    <td width="15%">
                        <input type="text" name="invite[]['wa_number']" maxlength="14" spellcheck="false" class="form-control form-control-compact in-invite no-space only-numerik" placeholder="08**********" autocomplete="new-value-only">
                    </td>
                    <td width="5%" class="text-center">
                        <input type="number" name="invite[]['qty']" value="1" class="form-control form-control-compact in-invite" required>
                    </td>`;
                @foreach($events as $index => $item)
                template += `
                    <td width="{{$event_width_percent_item}}%" class="text-center">
                        <input type="checkbox" name="invite[]['event'][`+{{$item->id}}+`]" class="in-invite-`+new_index+`" data-event_id="`+{{$item->id}}+`" value="true" checked>
                    </td>`; 
                @endforeach   
                template += `                                                
                    <td width="20%" class="text-center">
                        <a class="copy-to-clipboard" data-to_copy="">
                            <i class="fa fa-code text-success" aria-hidden="true" title="copy link saja"></i>
                        </a>
                        <a class="copy-to-clipboard" data-to_copy="">
                            <i class="fa fa-clipboard text-success ml-x-percent" aria-hidden="true" title="copy template kirim WA"></i>
                        </a>
                        <a class="btn-remove-invite" id="btn-remove-invite-`+new_index+`" data-index="`+new_index+`">
                            <i class="fa fa-times text-danger ml-x-percent" aria-hidden="true"></i>
                        </a>
                    </td>
                </tr>
            `;
            $('#the-invites').append(template);
            @endif
        }).on("click",".btn-remove-invite", function(){
            @if(!$is_expired)
            let text = "Apakah Anda yakin? Data undangan yang dihapus tidak dapat dikembalikan lagi. Klik OK untuk konfirmasi:";
            if (confirm(text) == true) {
                text = "Memproses penghapusan item";
                $('.gla_page_loader_light').show();
                let current_index = $(this).data('index');
                $('#invite-'+current_index+'-wrap').remove();
                let i = current_index+1;
                console.log('begin :: '+i+' __________________ after delete idx '+current_index);
                while ($('#invite-'+i+'-wrap').length) {
                    // ---------------------------------------------------------------------- reset ID --------------- the order is important, please do not switch
                    $('#invite-'+i+'-wrap').attr('id','invite-'+(i-1)+'-wrap');
                    $('#invite-'+i+'-numbering').attr('id','invite-'+(i-1)+'-numbering');
                    $('#in-invite-'+i).attr('id','in-invite-'+(i-1));
                    $('.in-invite-'+i).addClass('in-invite-'+(i-1));
                    $('.in-invite-'+i).removeClass('in-invite-'+i);
                    $('#btn-remove-invite-'+i).attr('id','btn-remove-invite-'+(i-1));
                    // ---------------------------------------------------------------------- change value ----------- //
                    $('#invite-'+(i-1)+'-numbering').html(i);
                    $('#in-invite-'+(i-1)).data('index',(i-1));
                    $('#btn-remove-invite-'+(i-1)).data('index',(i-1));
                    // ----------------------------------------------------------------------------------------------- //
                    i++;
                }
                $('#the-invites').data('index',(i-2));
                $('.gla_page_loader_light').hide();
            } else {
                text = "Batal menghapus...";
            }
            @endif
        }).on("click",".variable-name",function(){
            console.log('hello there : ',$(this).data("value"));
            let value = '';
            if($(this).data("value")){
                value = $(this).data("value");
            }
            
            try{
                editor.focus();
                let caretPosition = editor.getSelection(true);
                editor.insertText(caretPosition, " {{"+value+"}} ");
            }catch (e) {
                $(".ql-editor").html($(".ql-editor").html()+"{{"+value+"}}");
            }
        });
    });
    
</script>