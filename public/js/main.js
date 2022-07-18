$(document).ready(function() {
    $('.photo_files').change(function () {
        fileCount = this.files.length;
        if (fileCount > 3) {
            $(this).prev().html('<span style="color: red;">' + fileCount + ', не более 3 файлов</span>');
            $('.publication_save').prop('disabled', 'disabled');
        } else {
            $('.publication_save').removeAttr('disabled');
            $(this).prev().text('');
        }
    })
});