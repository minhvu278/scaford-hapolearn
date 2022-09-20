$(document).ready(function () {
    $('#uploadBtn').on('click', function () {
        $('#uploadInput').trigger('click');
    });
    $('#uploadInput').change(function()  {
        const file = this.files[0];
        if (file) {
            let reader = new FileReader();
            reader.onload = function(event) {
                $('#avatar').attr('src', event.target.result);
            }
            reader.readAsDataURL(file);
        }
    });
});
