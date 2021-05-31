$(document).ready(function(){
    var currentImg = $('.yh');
    var nextImg = currentImg.next();

    if (nextImg.length) {
        currentImg.removeClass('yh').css('z-index',-10);
        nextImg.addClass('yh').css('z-index',10);
    }
})

