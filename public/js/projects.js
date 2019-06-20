$(document).ready(function () {
    $('.image-container').scroll(function () {
        var scroll = $('.image-container').scrollTop();
        console.log(scroll);
        if (scroll > 80) {
            $(".btn-down").hide();
        } else {
            $(".btn-down").show();
        }
    })
});