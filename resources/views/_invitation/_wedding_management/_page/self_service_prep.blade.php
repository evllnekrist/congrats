<!DOCTYPE html>
<html lang="en">
    <head>
        @include('_invitation._wedding_management._include.head')
        @include('_invitation._wedding_management._include.asset-top')
    </head>
    <body class="gla_middle_titles" id="home">
        <?php
            $event_index_start  = 0;
            $sample['link']     = 'https://';
            $sample['title']    = 'resepsi, pemberkatan, ijab qabul, acara adat, dll';
            $sample['place_name']       = '';
            $sample['place_address']    = 'contoh:
            Jl. Gading Indah III Blok NF1 No. 20,
            RT.11/RW.12, Pegangsaan Dua,
            North Jakarta City, Jakarta';
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
            <div class="gla_page_title gla_image_bck gla_wht_txt" data-color="#282828">
            <div class="container text-left">
                <div class="row">
                <div class="col-md-6">
                    <h4 class="gla_h4_title">Preparation</h4>
                    <small></small>
                </div>
                <div class="col-md-6">
                    <div class="breadcrumbs">
                        <a href="{{url('/')}}">Home</a><a href="{{url('/')}}">Wedding Management</a><span>Self Service</span>
                    </div>
                </div>
                
                </div>
            </div>
            </div>

            <!-- Content -->
            <section id="gla_content" class="gla_content">
                <section class="gla_section gla_image_bck" data-color="#fafafd">
                    <div class="container-mini" style="padding-top:10%">
                        <div class="alert alert-danger" id="form-ss-prep-error-info-wrap" style="display:none">
                            <span aria-hidden="true" class="alert-icon icon_blocked"></span><strong>Ooppsss!</strong><br><span id="form-ss-prep-error-info"></span>
                        </div>
                        <form id="form-ss-prep" onsubmit="return false;">
                            <div class="row">
                                <div class="col-sm-12">
                                    <b>Pilihan Bahasa</b><br><small>* yang digunakan untuk <i>wording</i> undangan</small>
                                    <select name="lang" class="form-control form-opacity" required>
                                        <option value="eng">English</option>
                                        <option value="indo">Bahasa Indonesia</option>
                                    </select>
                                </div>
                                <div class="col-sm-12">
                                    <b>Link Foto & Video</b><br><small>* drive, dropbox, dll</small>
                                    <input type="text" name="asset_link" value="-" placeholder="{!!@$sample['link']!!}" maxlength="1000" spellcheck="false" class="form-control form-in" autocomplete="new-value-only" required>
                                </div>
                                <div class="col-sm-12">
                                    <b>Detail Acara</b>
                                    <div class="gla_icon_boxes row justify-content-center" id="the-events" data-index="{{$event_index_start}}" style="margin-top:10px !important">
                                        <div class="col-sm-12" id="event-{{$event_index_start}}-wrap">
                                            <div class="gla_news_block row">
                                                <div class="text-right" style="padding:2px 2px">
                                                    <button type="button" class="btn btn-danger" id="btn-remove-event" data-index="{{$event_index_start}}">
                                                        <i class="fa fa-times" aria-hidden="true"></i>
                                                    </button>
                                                </div>
                                                <div class="col-sm-1"></div>
                                                <div class="col-sm-10" style="padding-top:10px">
                                                    {{$event_index_start+1}}-1. Judul Acara
                                                    <input type="text" name="event['title'][]" value="-" placeholder="{!!@$sample['title']!!}" 
                                                    maxlength="50" spellcheck="false" class="form-control form-in" autocomplete="new-value-only" required>
                                                    {{$event_index_start+1}}-2. Nama Tempat
                                                    <input type="text" name="event['place_name'][]" value="-" placeholder="{!!@$sample['placename']!!}" 
                                                    maxlength="100" spellcheck="false" class="form-control form-in" autocomplete="new-value-only" required>
                                                    {{$event_index_start+1}}-3. Alamat Tempat
                                                    <textarea name="event['place_address'][]" value="-" placeholder="{!!@$sample['place_address']!!}" 
                                                    maxlength="1000" spellcheck="false" class="form-control form-opacity" required></textarea>
                                                    {{$event_index_start+1}}-4. Tanggal & Waktu
                                                    <input name="event['datetime'][]" class="form-control flatpickr flatpickr-input active" type="text" placeholder="Pilih tanggal & waktu ..." data-id="datetime" id="event-{{$event_index_start}}-datetime" readonly="readonly">
                                                    {{$event_index_start+1}}-5. Link <i>live streaming</i> <small>(opsional)</small>
                                                    <input type="text" name="event['live_stream']" value="-" placeholder="{!!@$sample['link']!!}" 
                                                    maxlength="1000" spellcheck="false" class="form-control form-in" autocomplete="new-value-only">
                                                </div>
                                                <div class="col-sm-1"></div>
                                            </div>
                                        </div> 
                                    </div>
                                    <div class="text-right" style="padding:20px 0">
                                        <button type="button" class="btn btn-warning" id="btn-add-new-event"><i class="fa fa-plus" aria-hidden="true"></i> acara baru</button>
                                    </div>
                                </div>
                                <div class="col-sm-12"  style="padding-bottom:20px">
                                    <b>Tampilkan:</b><br><small>* berikan check untuk bagian yang ingin Anda tampilkan, uncheck jika tidak ingin gunakan</small>
                                    <label style="display:inline-block;">
                                        <input type="checkbox" name="is_display_wishes" value="true" checked> Ucapan/<i>Wishes</i>
                                    </label><br>
                                    <label style="display:inline-block;">
                                        <input type="checkbox" name="is_display_rsvp" value="true" checked> RSVP
                                    </label><br>
                                    <label style="display:inline-block;">
                                        <input type="checkbox" name="is_display_qris" value="true" checked> QRIS
                                    </label><br>
                                    <label style="display:inline-block;">
                                        <input type="checkbox" name="is_display_covid_protocols" value="true" checked> Prosedur Covid
                                    </label><br>
                                    <label style="display:inline-block;">
                                        <input type="checkbox" name="is_display_timeline" value="true"> Timeline
                                    </label><br>
                                </div>
                                <div class="col-sm-12">
                                    <b>Preferensi Tema/Warna Dasar</b> <small>(opsional)</small>
                                    <input type="text" name="theme" value="-" maxlength="50" spellcheck="false" class="form-control form-in" autocomplete="new-value-only">
                                </div>
                                <div class="col-sm-12">
                                    <b>Musik</b> <small>(opsional)</small><small><br>* dapat berupa link atau judul-penyanyi</small>
                                    <input type="text" name="audio" value="-" placeholder="{!!@$sample['link']!!}" maxlength="1000" spellcheck="false" class="form-control form-in" autocomplete="new-value-only">
                                </div>
                                <div class="col-sm-12">
                                    <b>Quotes</b> <small>(opsional)</small>
                                    <textarea name="quotes" value="-" 
                                    maxlength="1000" spellcheck="false" class="form-control form-opacity"></textarea>
                                </div>
                                <div class="col-sm-12">
                                    <b>Catatan</b> <small>(opsional)</small><br>* apa yang kami perlu tahu?</small>
                                    <textarea name="client_note" value="-" 
                                    maxlength="1000" spellcheck="false" class="form-control form-opacity"></textarea>
                                </div>
                                <div class="col-md-12 text-right">
                                    <hr>
                                    <input type="submit" class="btn btn-info submit" id="form-ss-prep-store" value="SIMPAN DRAFT">
                                </div>
                                <div class="col-md-12 text-right" style="padding-top:10%">
                                    <div id="created-link"></div>
                                </div>
                            </div>
                        </form>
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
            preventAutocomplete(); // since autocomple=off rarely work, we do it manually
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
                $('#created-link').html('');
                let name_1  = $('[name="groom_name"]').val();
                let name_2  = $('[name="bride_name"]').val();
                let pass    = $('[name="password"]').val();
                let url     = 'ss-prep/add-new';
                $.ajax({
                    url: url,
                    headers: {
                        'x-csrf-token': $('meta[name="csrf-token"]').attr('content'),
                    },
                    type: 'POST',
                    data: JSON.stringify({
                        name: {'groom':name_1,'bride':name_2},
                        pass: pass
                    }),
                    contentType: 'application/json; charset=utf-8',
                    success: (function (data) {
                        console.log('---->> '+url,data);
                        if(data.status){
                            toastr.success(data.message, 'Success');
                            $('.form-in').prop('disabled',true)
                            let template = `<a href="#" class="copy-to-clipboard text-success" data-to_copy="`+data.detail.link+`">copy the new link of <b><i>`+data.detail.code+`</i></b> here <i class="fa fa-clone" aria-hidden="true"></i></a>`;
                            $('#created-link').append(template);
                        }else{
                            $('#form-ss-prep-error-info-wrap').show();
                            $('#form-ss-prep-error-info').html(data.message);
                            if(data.detail.code){
                                let template = `<a href="#" class="copy-to-clipboard text-warning" data-to_copy="`+data.detail.link+`">copy the exist link of <b><i>`+data.detail.code+`</i></b> here <i class="fa fa-clone" aria-hidden="true"></i></a>`;
                                $('#created-link').append(template);
                            }
                        }
                        $('.gla_page_loader_light').hide();
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
                            <button type="button" class="btn btn-danger" id="btn-remove-event" data-index="`+new_index+`">
                                <i class="fa fa-times" aria-hidden="true"></i>
                            </button>
                        </div>
                        <div class="col-sm-1"></div>
                        <div class="col-sm-10" style="padding-top:10px">
                            `+(new_index+1)+`-1. Judul Acara
                            <input type="text" name="event['title'][]" placeholder="{!!@$sample['title']!!}" 
                            maxlength="50" spellcheck="false" class="form-control form-in" autocomplete="new-value-only" required>
                            `+(new_index+1)+`-2. Nama Tempat
                            <input type="text" name="event['place_name'][]" placeholder="{!!@$sample['placename']!!}" 
                            maxlength="100" spellcheck="false" class="form-control form-in" autocomplete="new-value-only" required>
                            `+(new_index+1)+`-3. Alamat Tempat
                            <textarea name="event['place_address'][]"  placeholder="{!!@$sample['place_address']!!}" 
                            maxlength="1000" spellcheck="false" class="form-control form-opacity" required></textarea>
                            `+(new_index+1)+`-4. Tanggal & Waktu
                            <input name="event['datetime'][]" class="form-control flatpickr flatpickr-input active" type="text" placeholder="Pilih tanggal & waktu ..." data-id="datetime" id="event-`+new_index+`-datetime" readonly="readonly">
                            `+(new_index+1)+`-5. Link <i>live streaming</i> <small>(opsional)</small>
                            <input type="text" name="event['live_stream'][]"  placeholder="{!!@$sample['link']!!}" 
                            maxlength="1000" spellcheck="false" class="form-control form-in" autocomplete="new-value-only">
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
        }).on("click","#btn-remove-event", function(){
            let current_index = $(this).data('index');
            $('#event-'+current_index+'-wrap').remove();
        });
    });
    
</script>