var sw = 0;

function header(){

    var h = $(window).height();
    $("#header").css("height",h);

}

function slideBanner(){

    var sh = document.body.scrollTop;

    if ( sw == 0 ){
        var h = $(window).height();
        if( sh = 10 ) {
            $("body").animate({"margin-top":-h},650,function(){sw = 1;});
        }
    }

    else if ( sw == 1 ){

        if( sh < 1 ) {
            $("body").animate({"margin-top":0},350,function(){sw = 0;});
        }
    }

}



$(window).resize(function(){
    header();
});

$(document).ready(function(){

    header();

});

$(window).scroll(function(){
});