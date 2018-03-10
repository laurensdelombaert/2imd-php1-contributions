$( document ).ready(function() {
    $("ul li").on("click tap", function() {
        if($(this).next()[0].nodeName === "ARTICLE") {
            $($(this).next()[0]).slideToggle();
        }
    });
});