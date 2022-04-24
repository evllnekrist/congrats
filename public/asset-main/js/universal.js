(function(window, undefined) {
    'use strict';
    
    $(document).on('keypress', '.no-space', function(e) {
        if (e.which == 32){
            toastr.warning(e, 'this field cannot contain spaces', { "progressBar": true });
            console.log('%c no space allowed ', 'background: #222; color: #bada55');
            return false;
        }
    }).on('paste', '.no-space', function(e) {
        var clipboardData = e.clipboardData || e.originalEvent.clipboardData || window.clipboardData;
        var pastedData = clipboardData.getData('text');
        if((/ /g).test(pastedData)){
            toastr.warning(e, 'this field cannot contain spaces | <br>space is automatically removed', { "progressBar": false });
            pastedData = pastedData.replace(/ /g, '');
        }
        $(this).val(pastedData);
        return false;

    }).on("input", '.only-numerik', function() {
        this.value = this.value.replace(/\D/g,'');
    
    }).on("keypress", '.only-key-url', function(e) {
        if(this.value != this.value.replace(/[^\P{P}-]+/u)){
            toastr.warning(e, 'this field only allowed contain alphabeth and strip (-)', { "progressBar": true });
            this.value = this.value.replace(/[^\P{P}-]+/u, '');
        }

    }).on("input", '.str-to-endpoint', function(e) {
        let target_id = $(this).attr("data-taget_id");
        let value = this.value;
        value = value.replaceAll(/ /g,'-');
        value = value.replaceAll(/[^\P{P}-]+/ug, '');
        console.log($(this).attr("data-taget_id"), this.value, value);
        $('#'+target_id).val(value);

    }).on("click", '.copy-to-clipboard', function() {
        let str = $(this).data('to_copy');
        copy_to_clipboard(str);
    }).on("change", '.check-link-to-btn', function() {
        let link = $(this).val();
        let target_el = $(this).data('target_el');
        if(!link){
            $(target_el).hide();
        }else{
            $(target_el).show();
            $(target_el).attr('href',link);
        }
    });

})(window);


// if(typeof jQuery!=='undefined'){ console.log('jQuery Loaded'); }else{ console.log('not loaded yet'); }
$( document ).ready(function() {
    let isMobile = /iPhone|iPad|iPod|Android/i.test(navigator.userAgent);
    let wa_phone = $('#wa_phone').val();
    let wa_greet = $('#wa_greet').val();
    if (isMobile) {
        console.log('%c\nrunnin` on MOBILE\n', 'background: #222; color: #cce6ff');
        $(".link_wa").each(function() {
            $(this).attr("href", 'https://wa.me/'+wa_phone+'/?text='+wa_greet+'');
        });
    }else{
        console.log('%c\nrunnin` on DESKTOP\n', 'background: #222; color: #ffcce0');
        $(".link_wa").each(function() {
            $(this).attr("href", 'https://web.whatsapp.com/send?phone='+wa_phone+'&text='+wa_greet+'');
        });
    }
});


function copy_to_clipboard(str){
    console.log('%c>> copy to clipboard :: ','background: #222; color: #cce6ff');
    console.log(str);
    var el = document.createElement('textarea'); // Create new element
    el.value = str; // Set value (string to be copied)
    el.setAttribute('readonly', ''); // Set non-editable to avoid focus and move outside of view
    el.style = {position: 'absolute', left: '-9999px'};
    document.body.appendChild(el); // Select text inside element
    el.select(); // Copy text to clipboard
    document.execCommand('copy'); 
    document.body.removeChild(el); // Remove temporary element
    toastr.success('Copied!', 'Success');
}