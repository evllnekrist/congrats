<!DOCTYPE html>
<html lang="en">
    <head>
        @include('_invitation._wedding_management._include.head')
        @include('_invitation._wedding_management._include.asset-top')
    </head>
    <body class="gla_middle_titles" id="home">
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
                    <h4 class="gla_h4_title">Link<br>Creation</h4>
                    <small></small>
                </div>
                <div class="col-md-6">
                    <div class="breadcrumbs">
                        <a href="{{url('/')}}">Home</a><a href="{{url('/')}}">Wedding Management</a><span>Create Link</span>
                    </div>
                </div>
                
                </div>
            </div>
            </div>

            <!-- Content -->
            <section id="gla_content" class="gla_content">
                <section class="gla_section gla_image_bck" data-color="#fafafd">
                    <div class="container-mini" style="padding-top:10%">
                        <div class="alert alert-danger" id="form-create-link-error-info-wrap" style="display:none">
                            <span aria-hidden="true" class="alert-icon icon_blocked"></span><strong>Ooppsss!</strong><br><span id="form-create-link-error-info"></span>
                        </div>
                        <form id="form-create-link" onsubmit="return false;">
                            <div class="row">
                                <div class="col-sm-6">
                                    <input type="text" name="groom_name_short" maxlength="50" spellcheck="false" class="form-control form-in no-space lower" value="Groom Name" placeholder="Groom Name" autocomplete="new-value-only" required>
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" name="bride_name_short" maxlength="50" spellcheck="false" class="form-control form-in no-space lower" value="Bride Name" placeholder="Bride Name" autocomplete="new-value-only" required>
                                </div>
                                <div class="col-sm-12">
                                    <input type="password" name="password" maxlength="50" spellcheck="false" class="form-control form-in" value="123" placeholder="Password" autocomplete="new-value-only" required>
                                </div>
                                <div class="col-md-12 text-right">
                                    <input type="submit" class="btn btn-info submit" id="form-create-link-store" value="create">
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

        $(document).on("click","#form-create-link-store",function(){
            if(document.getElementById('form-create-link').checkValidity()){ 
                console.log('handling :: form-create-link | validity passed');
                $('#form-create-link-error-info-wrap').hide();
                $('#form-create-link-error-info').html('');
                $('.gla_page_loader_light').show();
                $('#created-link').html('');
                let name_1  = $('[name="groom_name_short"]').val();
                let name_2  = $('[name="bride_name_short"]').val();
                let pass    = $('[name="password"]').val();
                let url     = 'create-link/add-new';
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
                            $('#form-create-link-error-info-wrap').show();
                            $('#form-create-link-error-info').html(data.message);
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
                console.log('handling :: form-create-link | validity 0');
            }
        });
    });
    
</script>