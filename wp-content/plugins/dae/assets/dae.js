function upload_image(type, val) {
    aw_uploader = wp.media({
        title: 'Inserir Anexo',
        library: {
            uploadedTo: wp.media.view.settings.post.id
        },
        button: {
            text: 'Usar esse arquivo'
        },
        multiple: true
    }).on('select', function () {
        var attachment = aw_uploader.state().get('selection').first().toJSON();
        var url = attachment.url.replace(window.location.origin, '').trim();
        if (type == 1) { //settings            
            $('#home_input_' + val).val(url);
            $('#preview_home_input_' + val).attr('src', url);
        }
        if (type == 2) { //post upload 
            var x = "";
            var str_anexos = $('#post_upload_' + val).val();
            if (str_anexos != "") x = ",";
            str_anexos += x + url;
            console.log(str_anexos);
            $('#post_upload_' + val).val(str_anexos);
            show_anexos(str_anexos);
        }
    }).open();
}