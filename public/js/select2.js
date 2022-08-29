'use strict';
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
