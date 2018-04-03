$(document).ready(function() {
    var slideHeaderInfo = {
        length: $("#slide-header li").length - 1,
        current: 0,
        arrImg: ["img/fundo_slide0.jpg", "img/fundo_slide1.jpg", "img/fundo_slide2.jpg"],
        time: 5000
    }

    var playSlideHeader = setInterval(function() {
        $("#right-slide").click();    
    }, slideHeaderInfo.time); 

    var $itensSlide = $(".header-slide-list-item");
    $("#left-slide").click(function() {
        slideHeaderInfo.current--;

        clearInterval(playSlideHeader);
        if(slideHeaderInfo.current < 0) {
            $itensSlide.css("transform", "translateX(-"+(slideHeaderInfo.length * 100)+"%)");
            slideHeaderInfo.current = slideHeaderInfo.length;
        }
        else {
            $itensSlide.css("transform", "translateX(-"+(slideHeaderInfo.current * 100)+"%)");
        }
        
        playSlideHeader = setInterval(function() {
            $("#right-slide").click();    
        }, slideHeaderInfo.time); 
        $("#banner-slider").fadeOut(150, function() {
            $(this).attr("src", slideHeaderInfo.arrImg[slideHeaderInfo.current]).fadeIn(150);
        });
    });

    $("#right-slide").click(function() {
        slideHeaderInfo.current++;
        clearInterval(playSlideHeader);

        if(slideHeaderInfo.current > slideHeaderInfo.length) {
            $itensSlide.css("transform", "translateX("+0+"%)");
            slideHeaderInfo.current = 0;
        }
        else {
            $itensSlide.css("transform", "translateX(-"+(slideHeaderInfo.current * 100)+"%)");
        }

        playSlideHeader = setInterval(function() {
            $("#right-slide").click();    
        }, slideHeaderInfo.time); 
        $("#banner-slider").fadeOut(300, function() {
            $(this).attr("src", slideHeaderInfo.arrImg[slideHeaderInfo.current]).fadeIn(300);
        });
    });
});