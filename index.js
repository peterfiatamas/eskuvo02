$(document).ready(function () {
    var szeles = $(window).width();
    if (szeles > 700) {
        $(".BoroGabor").animate({
            width: "50%",
            opacity: 0.8,
            marginLeft: "50%",
            fontSize: "180%"
        }, 2500);
    } else {
        $(".BoroGabor").animate({
            
            opacity: 0.8,
            marginLeft: "10%",
            marginTop: "20%",
            fontSize: "120%"
        }, 2500);
    }


});