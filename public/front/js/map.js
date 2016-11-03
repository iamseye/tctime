function map(){

    $("#mapArea li").click(function(){
        var index = $("#mapArea li").index(this),
        	map = $("#mapList li").eq(index),
            url = "url('./images/map"+index+".png')";

        $("#mapList li").css("display","none");
        $(map).fadeIn(200);
        $("#mapArea").css("background",url);
        $("#mapArea").css("background-size","cover");
    });

}


$(window).load(function(){

    map();

});