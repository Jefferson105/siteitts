$(document).ready(function() {
    var slideHeaderInfo = {
        length: $("#slide-header li").length - 1,
        current: 0,
        arrImg: ["img/fundo_slide0.jpg", "img/fundo_slide1.jpg", "img/fundo_slide2.jpg"]    
    }

    var $itensSlide = $(".header-slide-list-item");
    $("#left-slide").click(function() {
        slideHeaderInfo.current--;
        if(slideHeaderInfo.current < 0) {
            $itensSlide.css("transform", "translateX(-"+(slideHeaderInfo.length * 100)+"%)");
            slideHeaderInfo.current = slideHeaderInfo.length;
            $("#banner-slider").fadeOut(300, function() {
                $(this).attr("src", slideHeaderInfo.arrImg[slideHeaderInfo.current]).fadeIn(300);
            });
        }
        else {
            $itensSlide.css("transform", "translateX(-"+(slideHeaderInfo.current * 100)+"%)");
            $("#banner-slider").fadeOut(150, function() {
                $(this).attr("src", slideHeaderInfo.arrImg[slideHeaderInfo.current]).fadeIn(150);
            });
        }
    });

    $("#right-slide").click(function() {
        slideHeaderInfo.current++;
        if(slideHeaderInfo.current > slideHeaderInfo.length) {
            $itensSlide.css("transform", "translateX("+0+"%)");
            slideHeaderInfo.current = 0;
            $("#banner-slider").fadeOut(300, function() {
                $(this).attr("src", slideHeaderInfo.arrImg[slideHeaderInfo.current]).fadeIn(300);
            });
        }
        else {
            $itensSlide.css("transform", "translateX(-"+(slideHeaderInfo.current * 100)+"%)");
            $("#banner-slider").fadeOut(300, function() {
                $(this).attr("src", slideHeaderInfo.arrImg[slideHeaderInfo.current]).fadeIn(300);
            });
        }
    });
});