$(document).ready(function () {
    var szeles = $(window).width();
    if (szeles > 700) {
        $(".BoroGabor").animate({
            width: "50%",
            opacity: 0.8,
            marginLeft: "55%",
            fontSize: "160%"
        }, 2500);
    } else {
        $(".BoroGabor").animate({
            
            opacity: 0.8,
            marginLeft: "10%",
            marginTop: "20%",
            fontSize: "140%"
        }, 2500);
    }


});