;$(function() {
    $(".menu-container").hide();
    $("#m-" + document.location.href.toLowerCase().split("documentation/index.html")[1]).addClass("active").closest("div").show();
    
    var $root = $(".full-size-menu");

    $root.on("click", ".menu-expander", function(e) {
        var $t = $(this), $menu = $t.next(),
            $hide = $t.parent().find(".menu-container:visible");
        
        e.preventDefault();

        if ($menu.is(":visible")) {
            $menu.slideUp("fast");
        } else {
            $hide.slideUp("fast");
            $menu.slideDown("fast");
        }
    });
});
