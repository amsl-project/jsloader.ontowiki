/**
 * This file is part of the {@link http://amsl.technology amsl} project.
 *
 * @author Sebastian Nuck
 * @copyright Copyright (c) 2015, {@link http://ub.uni-leipzig.de Leipzig University Library}
 * @license http://opensource.org/licenses/gpl-license.php GNU General Public License (GPL)
 */
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