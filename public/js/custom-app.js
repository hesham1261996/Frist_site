function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('#imagePreview').css('background-image', 'url('+e.target.result +')');
            $('#imagePreview').hide();
            $('#imagePreview').fadeIn(650);
        }
        reader.readAsDataURL(input.files[0]);
    }
}
$("#imageUpload").change(function() {
    readURL(this);
});

$(document).ready(function () {
    $('.sweet-delete').on('click', function () {
        swal({
            title: "Be Careful!",
            text: "You have clicked the delete button This button will delete all data!",
            icon: "error",
            buttons: true,
            dangerMode: true,
        })
    });
});

$(document).ready(function () {

    $('.js-example-basic-single').select2({
        placeholder: 'Select',
        dir: $('body').hasClass('rtl') ? 'rtl' : ''
    });

    $('.select2').select2({
        placeholder: 'Select'
    });
    $(".select2-hide-search").select2({
        minimumResultsForSearch: Infinity
    });

});
