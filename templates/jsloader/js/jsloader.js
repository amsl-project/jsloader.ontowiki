$(document).ready(function () {

    toastr.options = {
        "positionClass": "toast-bottom-right"
    };

    // Whenever an Ajax request is about to be sent, show the loader
    $(document).ajaxStart(function () {
        //loader.show();
        NProgress.start();
    });
    // hide loader when all request have finished
    $(document).ajaxStop(function () {
        //loader.hide();
        NProgress.done();
    });

});