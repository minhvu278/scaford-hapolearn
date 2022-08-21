$(document).ready(function () {
    $('#uploadBtn').on('click', function () {
        $('#uploadInput').trigger('click');
    })
});
// $('#input-avatar').change(function(){
//     var reader = new FileReader();
//     reader.onload = function (e) {
//         var img = $('#avatar').first()[0];
//         img.src = e.target.result;
//     };
//     reader.readAsDataURL($('#input-avatar').first()[0].files[0]);
// });
