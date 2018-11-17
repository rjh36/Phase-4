$(document).ready(function(){
    $(".pages div").each(function(e) {
        if (e !== 0)
            $(this).hide();
    });

    $(".PageTurner #next").click(function(){
        if ($(".pages div:visible").next().length !== 0)
            $(".pages div:visible").next().show().prev().hide();
        return false;
    });

    $(".PageTurner #prev").click(function(){
        if ($(".pages div:visible").prev().length !== 0)
            $(".pages div:visible").prev().show().next().hide();
        return false;
    });
});