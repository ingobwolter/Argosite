B2BPortal.UI.WidgetCreator = {

    //ANIMATION FOR WIDGETS
    active: false,
    init: function () {
        $("#build-widget-btn").click(function () {
            var el = $(this);
            var builder = $(".widget-builder");
            el.toggleClass("active");

            this.active = !this.active;
            // console.log('WIDGET ACTIVE = ' + this.active);

            if (!builder.is(":visible")) {
                builder.fadeIn();

                $("html, body").animate({
                    scrollTop: builder.offset().top - ($(window).height() * .2)
                }, 400, "swing", function () {

                });
            } else {
                builder.fadeOut();
            }

            $(".widget-options").hide();
            $(".widget-builder article").removeClass("active");

            return false;
        });

        $(".widget-builder > article").click(function () {
            var el = $(this);
            var options = $(".widget-options");

            $(".widget-builder article").removeClass("active");

            el.addClass("active");

            options.fadeIn();

            $("html, body").animate({
                scrollTop: options.offset().top - ($(window).height() * .4)
            }, 400, "swing", function () {

            });
            return false;
        });

        $("#close-widget-opt-btn").click(function () {
            $(".widget-builder article").removeClass("active");
            $(".widget-options").fadeOut();

            return false;
        });
    }
};

