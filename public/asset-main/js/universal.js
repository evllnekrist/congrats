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
        console.log('>> copy to clipboard :: '+str);
        var el = document.createElement('textarea'); // Create new element
        el.value = str; // Set value (string to be copied)
        el.setAttribute('readonly', ''); // Set non-editable to avoid focus and move outside of view
        el.style = {position: 'absolute', left: '-9999px'};
        document.body.appendChild(el); // Select text inside element
        el.select(); // Copy text to clipboard
        document.execCommand('copy'); 
        document.body.removeChild(el); // Remove temporary element
        toastr.success('Copied!', 'Success');
    });
})(window);