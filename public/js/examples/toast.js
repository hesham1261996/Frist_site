'use strict';
$(document).ready(function () {

    var doc = $(document);

    toastr.options = {
        timeOut: 2000,
        progressBar: true,
        showMethod: "slideDown",
        hideMethod: "slideUp",
        showDuration: 200,
        hideDuration: 200
    };

    doc.on('click', 'button.toast-success', function () {
        toastr.success('Successfully completed');
        return false;
    });

    doc.on('click', 'a.btn-danger', function () {
        toastr.error('Something went wrong');
        return false;
    });

    doc.on('click', 'a.btn-info', function () {
        toastr.info('This is an informational message');
        return false;
    });

    doc.on('click', 'a.btn-warning', function () {
        toastr.warning('You are currently not authorized');
        return false;
    });

});
