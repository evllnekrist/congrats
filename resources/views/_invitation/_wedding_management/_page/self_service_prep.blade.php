<!DOCTYPE html>
<html lang="en">
    <head>
        @include('_invitation._wedding_management._include.head')
        @include('_invitation._wedding_management._include.asset-top')
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
                        <h4 class="gla_h4_title">Preparation</h4>
                        <small>Persiapkan menjadi jelas dan dapat diubah kapan saja</small>
                    </div>
                    <div class="col-md-6">
                        <div class="breadcrumbs">
                            <a href="{{url('/')}}">Home</a><a href="{{url('/')}}">Wedding Management</a><span>Prep</span>
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
                        <a class="col-md-6 gla_page_title_sm_x_item {{$item->value=='1'?'btn-success':'btn-default'}}" href="{{$item->value=='1'?'#':url($rewrite_url)}}">
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
                        <div class="text-success" style="padding:60px 0">
                            <h6 class="gla_h6_title">Hello, {{ucfirst(@$selected->groom_name)}} and {{ucfirst(@$selected->bride_name)}}</h6>
                            <span>Terima kasih telah memilih berbagi kabar bahagiamu lewat berita baik. Berikut ini data yang perlu kami ketahui untuk pembuatan E-Invitation. Silahkan dilengkapi ya!</span>
                        </div>
                        <div class="alert alert-danger" id="form-ss-prep-error-info-wrap" style="display:none">
                            <span aria-hidden="true" class="alert-icon icon_blocked"></span><strong>Ooppsss!</strong><br><span id="form-ss-prep-error-info"></span>
                        </div>
                        <form id="form-ss-prep" onsubmit="return false;">
                            <div class="row">
                                <div class="col-sm-12">
                                    <b>Pilihan Bahasa <red>*</red></b><br><small>yang digunakan untuk <i>wording</i> undangan</small>
                                    <select name="lang" class="form-control form-opacity" required>
                                        @foreach(@$langs as $index => $item)
                                            <option value="{{$item->value}}" {{$item->value==@$selected->lang?'selected':''}}>{{$item->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-sm-12">
                                    <b>Link Penyimpanan Foto & Video <red>*</red></b><br><small>drive, dropbox, dll</small>
                                    <input type="text" name="asset_link" data-target_el="#check_link_of_asset_link" value="{{@$selected->asset_link??'-'}}" placeholder="{!!@$sample['link']!!}" maxlength="1000" spellcheck="false" class="form-control form-in check-link-to-btn" autocomplete="new-value-only" required>
                                    <div class="text-right">
                                        <a style="{{@$selected->asset_link?'':'display:none'}}" id="check_link_of_asset_link" href="{{@$selected->asset_link??''}}" target="_blank" class="btn medium yellow btn_border">
                                            check link <i class="fa fa-external-link"></i>
                                        </a>
                                    </div><br>
                                </div>
                                <div class="col-sm-12">
                                    <b>Detail Acara <red>*</red></b>
                                    <div class="gla_icon_boxes row justify-content-center" id="the-events" data-index="{{$event_index_stored_length}}" style="margin-top:10px !important">
                                    @if(!$event_count)
                                        <div class="col-sm-12" id="event-{{$event_index_start}}-wrap">
                                            <div class="gla_news_block row">
                                                <div class="col-sm-1"></div>
                                                <div class="col-sm-10" style="padding-top:10px">
                                                    <strong class="text-info">Acara - <span id="event-{{$event_index_start}}-numbering">{{$event_index_start+1}}</span></strong><br><br>
                                                    a. Judul Acara
                                                    <input type="text" name="event[]['title']" value="-" placeholder="{!!@$sample['title']!!}" 
                                                    maxlength="50" spellcheck="false" class="form-control form-in in-event" autocomplete="new-value-only" required>
                                                    b. Nama Tempat
                                                    <input type="text" name="event[]['place_name']" value="-" placeholder="{!!@$sample['placename']!!}" 
                                                    maxlength="100" spellcheck="false" class="form-control form-in in-event" autocomplete="new-value-only" required>
                                                    c. Alamat Tempat
                                                    <textarea name="event[]['place_address']" value="-" placeholder="{!!@$sample['place_address']!!}" 
                                                    maxlength="1000" spellcheck="false" class="form-control form-opacity in-event" required></textarea>
                                                    d. Tanggal & Waktu
                                                    <input name="event[]['datetime']" class="form-control flatpickr flatpickr-input active in-event" type="text" placeholder="Pilih tanggal & waktu ..." data-id="datetime" id="event-{{$event_index_start}}-datetime" readonly="readonly">
                                                    e. Link <i>live streaming</i> <small>(opsional)</small>
                                                    <input type="text" name="event[]['live_stream']" value="-" placeholder="{!!@$sample['link']!!}" 
                                                    maxlength="1000" spellcheck="false" class="form-control form-in in-event" autocomplete="new-value-only">
                                                </div>
                                                <div class="col-sm-1"></div>
                                            </div>
                                        </div>
                                    @else 
                                        @foreach($events as $index => $item)
                                        <div class="col-sm-12" id="event-{{$index}}-wrap">
                                            <div class="gla_news_block row">
                                                <div class="text-right" style="padding:2px 2px">
                                                    <button type="button" class="btn btn-danger btn-remove-event" id="btn-remove-event-{{$index}}" data-index="{{$index}}">
                                                        <i class="fa fa-times" aria-hidden="true"></i>
                                                    </button>
                                                </div>
                                                <div class="col-sm-1"></div>
                                                <div class="col-sm-10" style="padding-top:10px">
                                                    <strong class="text-success">Acara - <span id="event-{{$index}}-numbering">{{$index+1}}</span></strong>
                                                    <span class="label label-success" style="margin-left:20px">Telah Tersimpan</span>
                                                    <br><br>
                                                    a. Judul Acara
                                                    <input type="text" name="event[]['title']" value="{{$item->title}}" placeholder="{!!@$sample['title']!!}" 
                                                    maxlength="50" spellcheck="false" class="form-control form-in in-event" autocomplete="new-value-only" 
                                                    data-event_id="{{$item->id}}" required>
                                                    b. Nama Tempat
                                                    <input type="text" name="event[]['place_name']" value="{{$item->place_name}}" placeholder="{!!@$sample['placename']!!}" 
                                                    maxlength="100" spellcheck="false" class="form-control form-in in-event" autocomplete="new-value-only" required>
                                                    c. Alamat Tempat
                                                    <textarea name="event[]['place_address']" placeholder="{!!@$sample['place_address']!!}" 
                                                    maxlength="1000" spellcheck="false" class="form-control form-opacity in-event" required>{{$item->place_address}}</textarea>
                                                    d. Tanggal & Waktu
                                                    <input name="event[]['datetime']" value="{{$item->date}} {{$item->time}}" class="form-control flatpickr flatpickr-input active in-event" type="text" placeholder="Pilih tanggal & waktu ..." data-id="datetime" id="event-{{$index}}-datetime" readonly="readonly">
                                                    e. Link <i>live streaming</i> <small>(opsional = isi jika ada versi </i>live stream</i>)</small>
                                                    <input type="text" name="event[]['live_stream']" value="{{$item->live_stream}}" placeholder="{!!@$sample['link']!!}" 
                                                    maxlength="1000" spellcheck="false" class="form-control form-in in-event" autocomplete="new-value-only">
                                                    <br><br>
                                                    <a data-toggle="collapse" href="#collapseEvent{{$index}}DetailMore" class="text-success"><b>lihat lebih banyak >></b></a>
                                                    <br><br>
                                                    <div id="collapseEvent{{$index}}DetailMore" class="panel-collapse collapse">
                                                        <br>
                                                        f. Link <i>Google Map</i>
                                                        <input type="text" value="{{$item->place_gmap_target}}" placeholder="field ini diisi Team Berita Baik" spellcheck="false" class="form-control">
                                                        <div class="text-right">
                                                            <a style="{{@$item->place_gmap_target?'':'display:none'}}" id="check_link_of_gmap_target" href="{{@$item->place_gmap_target??''}}" target="_blank" class="btn medium green btn_border">
                                                                check link <i class="fa fa-external-link"></i>
                                                            </a>
                                                        </div>
                                                        g. Link <i>Google Map (Embed)</i>
                                                        <input type="text" value="{{$item->place_gmap_embed}}" placeholder="field ini diisi Team Berita Baik" spellcheck="false" class="form-control">
                                                        <div class="text-right">
                                                            <iframe style="{{@$item->place_gmap_embed?'':'display:none'}}" id="check_link_of_gmap_embed" src="{{@$item->place_gmap_embed??''}}" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                                        </div>
                                                        <br><br>
                                                    </div>
                                                </div>
                                                <div class="col-sm-1"></div>
                                            </div>
                                        </div> 
                                        @endforeach
                                    @endif
                                    </div>
                                    <div class="text-right" style="padding:20px 0">
                                        <button type="button" class="btn btn-warning" id="btn-add-new-event"><i class="fa fa-plus" aria-hidden="true"></i> acara baru</button>
                                    </div>
                                </div>
                                <div class="col-sm-12"  style="padding-bottom:20px">
                                    <b>Tampilkan:</b><br> <small>berikan check untuk bagian yang ingin Anda tampilkan, uncheck jika tidak ingin gunakan</small><br>
                                    <label style="display:inline-block;">
                                        <input type="checkbox" name="is_display_wishes" value="true" 
                                        {{$selected->is_display_wishes == 1?'checked':(!$selected->edit_count > 0?'checked':'')}}> Ucapan/<i>Wishes</i>
                                    </label><br>
                                    <label style="display:inline-block;">
                                        <input type="checkbox" name="is_display_rsvp" value="true" 
                                        {{$selected->is_display_rsvp == 1?'checked':(!$selected->edit_count > 0?'checked':'')}}> RSVP
                                    </label><br>
                                    <label style="display:inline-block;">
                                        <input type="checkbox" name="is_display_qris" value="true" 
                                        {{$selected->is_display_qri == 1?'checked':(!$selected->edit_count > 0?'checked':'')}}> QRIS
                                    </label><br>
                                    <label style="display:inline-block;">
                                        <input type="checkbox" name="is_display_covid_protocol" value="true"
                                        {{$selected->is_display_covid_protocol == 1?'checked':(!$selected->edit_count > 0?'checked':'')}}> Prosedur Covid
                                    </label><br>
                                    <label style="display:inline-block;">
                                        <input type="checkbox" name="is_display_timeline" value="true"
                                        {{$selected->is_display_timeline == 1?'checked':(!$selected->edit_count > 0?'':'')}}> Timeline
                                    </label><br>
                                </div>
                                <div class="col-sm-12">
                                    <b>Preferensi Tema/Warna Dasar</b> <small>(opsional)</small>
                                    <input type="text" name="theme" value="{{@$selected->pref_theme??'-'}}" maxlength="50" spellcheck="false" class="form-control form-in" autocomplete="new-value-only">
                                </div>
                                <div class="col-sm-12">
                                    <b>Musik</b> <small>(opsional)</small><small><br>dapat berupa link atau judul-penyanyi</small>
                                    <input type="text" name="audio" value="{{@$selected->audio??'-'}}" placeholder="{!!@$sample['link']!!}" maxlength="1000" spellcheck="false" class="form-control form-in" autocomplete="new-value-only">
                                </div>
                                <div class="col-sm-12">
                                    <b>Quotes</b> <small>(opsional)</small>
                                    <textarea name="quotes" value="-" 
                                    maxlength="1000" spellcheck="false" class="form-control form-opacity">{{@$selected->quotes??'-'}}</textarea>
                                </div>
                                <div class="col-sm-12">
                                    <b>Catatan</b> <small>(opsional)</small><br>apa yang kami perlu tahu?</small>
                                    <textarea name="client_note" value="-"  placeholder="{!!@$sample['note']!!}"
                                    maxlength="1000" spellcheck="false" class="form-control form-opacity">{{@$selected->client_note??''}}</textarea>
                                </div>
                                <div class="col-sm-12">
                                    <b>Pilihan Paket<red>*</red></b>
                                    </small><br><a data-toggle="collapse" href="#collapsePackage">tampilkan detail >> </a></small>
                                    <select name="package" class="form-control form-opacity" required>
                                        @foreach(@$packages as $index => $item)
                                            <option value="{{$item->value}}" {{$item->value=='class_1st'?'selected':''}}>{{$item->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-sm-12">
                                    <b>Referensi<red>*</red></b><br>dapatkah kami ketahui dari mana kamu dan dia kenal Berita Baik?</small>
                                    <select name="ref_type" class="form-control form-opacity" id="run_logic_ref_type" required>
                                        @foreach(@$ref_types as $index => $item)
                                            <option value="{{$item->value}}" data-logic="ref_type_{{$item->logic}}" {{$item->value==@$selected->ref_type?'selected':''}}>{{$item->name}}</option>
                                        @endforeach
                                    </select>
                                    <input type="text" name="ref_name"  value="{{@$selected->ref_name??''}}" placeholder="Nama pemberi referensi" 
                                    maxlength="50" spellcheck="false" class="form-control form-in" autocomplete="new-value-only">
                                </div>
                                <div class="col-md-12 text-center">
                                    <hr>
                                    <input type="submit" class="btn btn-info btn-lg submit" id="form-ss-prep-store" value="{{@$selected->edit_count > 0?'UPDATE [Draft ke '.(@$selected->edit_count+1).']':'SIMPAN SEBAGAI DRAFT KE-1'}}">
                                </div>
                                <div class="col-md-12 text-secondary">
                                    <hr>
                                    <small><a data-toggle="collapse" href="#collapseHistory">Histori perubahan [max 10 data terbaru] >></a></small>
                                    <table class="table table-hover text-left panel-collapse collapse"  id="collapseHistory" aria-expanded="false">
                                        <thead>
                                            <tr class="text-info">
                                                <th>No.</th>
                                                <th>Aktivitas</th>
                                                <th>Waktu</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach(@$logs as $index => $item)
                                            <tr class="text-info">
                                                <td>{{$index+1}}</td>
                                                <td>{!!$item->desc!!}</td>
                                                <td>{{$item->created_at}}</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="container">
                        <div id="collapsePackage" class="panel-collapse collapse" aria-expanded="false">
                            <div class="gla_icon_boxes row gla_news_block" style="margin-top:-30px;padding:40px">
                                <h4 class="gla_h4_title text-success">Pricelist</h4>
                                <div data-animation="animation_blocks" data-bottom="@class:noactive" data--100-bottom="@class:active">
                                    @foreach(@$packages as $index => $item)
                                        {!! $item->desc !!}
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </section>
            <!-- Content End -->

        </div>
        <!-- Page End -->
        @include('_invitation._wedding_management._include.asset-bottom')
    </body>
</html>

<script>
    $( document ).ready(function() {
        function preventAutocomplete(){ 
            $('.form-in').each(function(i,obj){
                $(obj).val('');
            });
        }
        setTimeout(function() {
            @if(!$selected->edit_count > 0)
                preventAutocomplete(); // since autocomple=off rarely work, we do it manually
            @endif
            $('.gla_page_loader_light').hide();
        },2000);

        $('#event-0-datetime').flatpickr({
            dateFormat: "Y-m-d H:i",
            enableTime: true,
            allowInput: true
        });
        
        $(document).on("click","#form-ss-prep-store",function(){
            if(document.getElementById('form-ss-prep').checkValidity()){ 
                console.log('handling :: form-ss-prep | validity passed');
                $('#form-ss-prep-error-info-wrap').hide();
                $('#form-ss-prep-error-info').html('');
                $('.gla_page_loader_light').show();
                
                let events          = {};
                let temp_ass_idx    = '';
                let runnin_idx      = {title:0,place_name:0,place_address:0,datetime:0,live_stream:0,id:0};
                $('.in-event').each(function(idx,val) {
                    temp_ass_idx    = this.name.split("['").pop().split("']").shift();
                    if (typeof events[runnin_idx[temp_ass_idx]] == "undefined" ) { // due to js need
                        events[runnin_idx[temp_ass_idx]] = {};
                    }
                    if(temp_ass_idx == 'title' && $(val).data('event_id') != undefined){
                        // console.log('MASHOOK ',runnin_idx['id'],$(val).data('event_id'));
                        events[runnin_idx['id']]['id'] = $(val).data('event_id');
                        runnin_idx['id']++;
                    }
                    events[runnin_idx[temp_ass_idx]][temp_ass_idx] = $(val).val();
                    runnin_idx[temp_ass_idx]++;
                });
                console.log('event-1',events);
                // $('.gla_page_loader_light').hide(); return; 
                let url     = "{{url('/')}}/wm/ss/store-draft/{{$code}}";
                $('.gla_page_loader_light').hide();
                
                $.ajax({
                    url: url,
                    headers: {
                        'x-csrf-token': $('meta[name="csrf-token"]').attr('content'),
                    },
                    type: 'POST',
                    data: JSON.stringify({
                        lang                        : $('[name="lang"]').val(),
                        asset_link                  : $('[name="asset_link"]').val(),
                        theme                       : $('[name="theme"]').val(),
                        audio                       : $('[name="audio"]').val(),
                        quotes                      : $('[name="quotes"]').val(),
                        client_note                 : $('[name="client_note"]').val(),
                        package                     : $('[name="package"]').val(),
                        ref_type                    : $('[name="ref_type"]').val(),
                        ref_name                    : $('[name="ref_name"]').val(),
                        is_display_wishes           : $('[name="is_display_wishes"]').is(':checked') ? true : false,
                        is_display_rsvp             : $('[name="is_display_rsvp"]').is(':checked') ? true : false,
                        is_display_qris             : $('[name="is_display_qris"]').is(':checked') ? true : false,
                        is_display_covid_protocol   : $('[name="is_display_covid_protocol"]').is(':checked') ? true : false,
                        is_display_timeline         : $('[name="is_display_timeline"]').is(':checked') ? true : false,
                        events                      : events
                    }),
                    contentType: 'application/json; charset=utf-8',
                    success: (function (data) {
                        console.log('---->> '+url,data);
                        if(data.status){
                            toastr.success(data.message, 'Success');
                            location.reload(true);
                        }else{
                            $('#form-ss-prep-error-info-wrap').show();
                            $('#form-ss-prep-error-info').html(data.message);
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
        }).on("click","#btn-add-new-event", function(){
            let new_index = $('#the-events').data('index')+1;
            $('#the-events').data('index', new_index);
            let template = `
                <div class="col-sm-12" id="event-`+new_index+`-wrap">
                    <div class="gla_news_block row">
                        <div class="text-right" style="padding:2px 2px">
                            <button type="button" class="btn btn-danger btn-remove-event" id="btn-remove-event-`+new_index+`" data-index="`+new_index+`">
                                <i class="fa fa-times" aria-hidden="true"></i>
                            </button>
                        </div>
                        <div class="col-sm-1"></div>
                        <div class="col-sm-10" style="padding-top:10px">
                            <strong class="text-info">Acara - <span id="event-`+new_index+`-numbering">`+(new_index+1)+`</span></strong><br><br>
                            a. Judul Acara
                            <input type="text" name="event[]['title']" placeholder="{!!@$sample['title']!!}" 
                            maxlength="50" spellcheck="false" class="form-control form-in in-event" autocomplete="new-value-only" required>
                            b. Nama Tempat
                            <input type="text" name="event[]['place_name']" placeholder="{!!@$sample['placename']!!}" 
                            maxlength="100" spellcheck="false" class="form-control form-in in-event" autocomplete="new-value-only" required>
                            c. Alamat Tempat
                            <textarea name="event[]['place_address']"  placeholder="{!!@$sample['place_address']!!}" 
                            maxlength="1000" spellcheck="false" class="form-control form-opacity in-event" required></textarea>
                            d. Tanggal & Waktu
                            <input name="event[]['datetime']" class="form-control flatpickr flatpickr-input active in-event" type="text" placeholder="Pilih tanggal & waktu ..." data-id="datetime" id="event-`+new_index+`-datetime" readonly="readonly">
                            e. Link <i>live streaming</i> <small>(opsional)</small>
                            <input type="text" name="event[]['live_stream']"  placeholder="{!!@$sample['link']!!}" 
                            maxlength="1000" spellcheck="false" class="form-control form-in in-event" autocomplete="new-value-only">
                        </div>
                        <div class="col-sm-1"></div>
                    </div>
                </div> `;
            $('#the-events').append(template);
            $('#event-'+new_index+'-datetime').flatpickr({
                dateFormat: "Y-m-d H:i",
                enableTime: true,
                allowInput: true
            });
        }).on("click",".btn-remove-event", function(){
            let text = "Apakah Anda yakin? Detail acara yang dihapus tidak dapat dikembalikan lagi. Klik OK untuk konfirmasi:";
            if (confirm(text) == true) {
                text = "Memproses penghapusan item";
                $('.gla_page_loader_light').show();
                let current_index = $(this).data('index');
                $('#event-'+current_index+'-wrap').remove();
                let i = current_index+1;
                console.log('begin :: '+i+' __________________ after delete idx '+current_index);
                while ($('#event-'+i+'-wrap').length) {
                    // ---------------------------------------------------------------------- reset ID
                    $('#event-'+i+'-wrap').attr('id','event-'+(i-1)+'-wrap');
                    $('#event-'+i+'-datetime').attr('id','event-'+(i-1)+'-datetime');
                    $('#event-'+i+'-numbering').attr('id','event-'+(i-1)+'-numbering');
                    $('#btn-remove-event-'+i).attr('id','btn-remove-event-'+(i-1));
                    // ---------------------------------------------------------------------- change value
                    $('#event-'+(i-1)+'-numbering').html(i);
                    $('#btn-remove-event-'+(i-1)).data('index',(i-1));
                    i++;
                }
                $('#the-events').data('index',(i-2));
                $('.gla_page_loader_light').hide();
            } else {
                text = "Batal menghapus...";
            }
        }).on("change","#run_logic_ref_type", function(){
            let logic = $('#run_logic_ref_type :selected').data('logic');
            console.log('run logic -->>>> '+logic);
            if(logic == 'ref_type_askname'){
                $('[name="ref_name"]').show();
                $('[name="ref_name"]').attr('placeholder','Nama pemberi referensi');
            }else if(logic == 'ref_type_askname2'){
                $('[name="ref_name"]').show();
                $('[name="ref_name"]').attr('placeholder','Nama mempelai');
            }else if(logic == 'ref_type_askdetail'){
                $('[name="ref_name"]').show();
                $('[name="ref_name"]').attr('placeholder','Tulis sesuatu...');
            }else if(logic == 'ref_type_'){
                $('[name="ref_name"]').hide();
                $('[name="ref_name"]').attr('placeholder','');
            }
        });
    });
    
</script>