// request animation frame
(function(){for(var e=0,b=["ms","moz","webkit","o"],a=0;a<b.length&&!window.requestAnimationFrame;++a)window.requestAnimationFrame=window[b[a]+"RequestAnimationFrame"],window.cancelAnimationFrame=window[b[a]+"CancelAnimationFrame"]||window[b[a]+"CancelRequestAnimationFrame"];window.requestAnimationFrame||(window.requestAnimationFrame=function(a,b){var c=(new Date).getTime(),d=Math.max(0,16-(c-e)),f=window.setTimeout(function(){a(c+d)},d);e=c+d;return f});window.cancelAnimationFrame||(window.cancelAnimationFrame=
function(a){clearTimeout(a)})})();

var B2BPortal = B2BPortal || {};
B2BPortal.AnimationManager = B2BPortal.AnimationManager = {};
B2BPortal.Utils = B2BPortal.Utils || {};
B2BPortal.Utils.Tools = B2BPortal.Utils.Tools || {};
B2BPortal.UI = B2BPortal.UI || {};
B2BPortal.UI.Layout = B2BPortal.UI.Layout || {};

B2BPortal.UI.Navigation = (function () {
    var tThis = this;
    var count = -1;
    var mouseWheelable = true;
    var duration = 900;
    var autoScroll = false;
    var toggleFadeHover = false;
    var height = 40;
    var vlimit = 'Show my the limit';
    var offset = 0;
    
    var scrollBusy = false,
        scrollTop,
        productNavTop, $productNav, 
        $linksNav, $linksSideNav,
        $products, $current,
        $sections,
        doParallax = !/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent),
        $w = $(window);


    function handleAutoScroll(event) {
        event.preventDefault();
        console.log('Current Count: ' + count);
        console.log('MouseWheelable: ' + mouseWheelable);
        console.log('Limit: ' + vlimit);


        if (mouseWheelable) {
            console.log(event.deltaY);
            console.log(event.deltaFactor);

            if (event.deltaY <= -1) {
                if (count < vlimit)
                    count++;
            } else if (event.deltaY >= 1) {
                if (count > -1)
                    count--;
            }
            mouseWheelable = false;
            scrollToProduct(count);
        };
    }

    function scrollSections() {
        $linksNav.eq(0).addClass('active');
        
        //B2BPortal.AnimationManager.scrollTo($('.navbar').eq(count), 0, 0); //causes issues for hash links e.g. to #api or #whitelabel
        activateLinks('#portal-product-sidenav');
        activateLinks('#portal-product-nav');
        activateLinks('#product-intro-section');
		
        $('input, textarea').placeholder();

        $('#icon-arrow-cta').click(function () {
            scrollToProduct(1);
        });
    };

    function activateLink(href) {

        $linksSideNav
            .filter(".active").removeClass("active").end()
            .filter("a[href='" + href + "']").addClass("active");

        $linksNav
            .filter(".active").removeClass("active").end()
            .filter("a[href='" + href + "']").addClass("active");

    };

    function activateLinks(nav) {
        var links = $(nav + ' a');

        links.click(function (e) {
            var href = this.getAttribute("href");
            e.preventDefault();
            activateLink(href);

            if (autoScroll) {
                console.log('AUTO SCROLL ACTIVATED');
                $('body').bind('mousewheel', handleAutoScroll);
            }

            scrollToProduct(href);
            // scrollToProduct(index, tOffset);
            mouseWheelable = false;
        });
    }

    function scrollToProduct(id, aOffset) {
        // console.log('Index to Scroll To: ', index, aOffset);
        // var target = (index == -1) ? '#portal-header' : '#' + $('.product-detail-content').eq(index).attr('id');
        var tOffset = aOffset || 40,
            target = $(id);

        B2BPortal.AnimationManager.scrollTo(target, duration, tOffset, function () {
            // if (index != -1) {
            //     activateLink(index);
            // }
            // else {
            //     activateLink(0);
            // }
            mouseWheelable = true;
        });
    };

    function getActiveProduct (scrollTop) {
        var ret;

        $products.each(function(idx) {
            var $t = $(this),
                wh = $w.height() / 2,
                top = $t.offset().top,
                h = $t.height();

            if (scrollTop + wh >= top) {
                ret = $t;
            }

        });

        return ret || $products.eq(0);
    }

    function setActive (id) {
        $linksNav.add($linksSideNav)
            .filter(".active").removeClass("active").end()
            .filter("[href='#" + id + "']").addClass("active");
    }

    function isVisible ($el, scrollTop, wh) {
        var top = $el.offset().top;
        return top > scrollTop && top < scrollTop + wh;
    }

    // general onscroll handler
    function onScroll () {
        var wh = $w.height(),
            isFixed = $productNav.hasClass("fixed"),
            $product;

        // sticky nav
        if (scrollTop > productNavTop) {
            if (!isFixed) $productNav.addClass("fixed");
        } else {
            if (isFixed) $productNav.removeClass("fixed");
        }

        // don't waste time updating the product nav if the scroll is animated
        if (!B2BPortal.AnimationManager.isScrolling) {
            $product = getActiveProduct(scrollTop);

            // links updating
            if ($current[0].id !== $product[0].id) {
                $current = $product;
                setActive($current[0].id);
            }
        }

        // parallax
        if (doParallax) {
            $sections.each(function() {
                var $t = $(this);

                if (!isVisible($t, scrollTop, wh)) return

                // Scroll the background at var speed
                // the yPos is a negative value because we're scrolling it UP!  
                var offset = ($t.data('offset')) ? $t.data('offset') : 0;
                var yPos = -(scrollTop / $t.data('speed') + offset);

                // Put together our final background position
                $t.css({ backgroundPosition: '50% ' + yPos + 'px' });
            })
        }

        scrollBusy = false;
    }

    return {
        SideMenu: {
            //controls the scrolling when link is clicked
            init: function () {
              
            }
        },
        onScrollHandler : function() {
            scrollTop = $w.scrollTop();
            if (scrollBusy) return;
            scrollBusy = true;
            window.requestAnimationFrame(onScroll);
        },
        ProductMenu: {
            init: function () {
                $productNav = $("#menuparado");

                $linksNav = $productNav.find("a");

                productNavTop = $productNav.offset().top;

                $linksSideNav = $("#portal-product-sidenav").find("a");

                scrollSections();

                $products = $(".product-detail-content");

                $current = getActiveProduct($w.scrollTop());
                setActive($current[0].id);

                $sections = $('section[data-type="background"]');

                $w.on("scroll.UINAV", B2BPortal.UI.Navigation.onScrollHandler);

                B2BPortal.UI.Navigation.onScrollHandler();
            }
        },
        AutoScroll: {
            init: function (limit) {

                autoScroll = true;
                vlimit = limit;

                if (autoScroll) {
                    console.log('AUTO SCROLL ACTIVATED');
                    $('body').bind('mousewheel', handleAutoScroll);
                };
            }
        }
    };
})();

B2BPortal.AnimationManager = {
    scrollContent: function (nav, offset, duration, callback) {
        var links = $(nav + ' a');
        var offset = (offset != null) ? offset : 0;
        var duration = duration || 0;
        var callback = callback || null;
        var target;
        var link;
        var tThis = this;

        links.click(function (e) {
            link = $(this);
            e.preventDefault();
            target = link.attr("href");

            if (links.hasClass('active'))
                links.removeClass('active');
            link.addClass('active');

            tThis.scrollTo(target, offset, duration, callback);
        });
    },

    scrollTo: function (target, duration, offset, callback) {
        duration = duration || 800;
        offset = offset || 0;

        if ($(target).offset()) {
            B2BPortal.AnimationManager.isScrolling = true;

            $("html, body").animate({
                scrollTop: $(target).offset().top - offset
            }, duration, "swing", function() {
                B2BPortal.AnimationManager.isScrolling = false;

                if ($.isFunction(callback)) {
                    callback.call(this);
                }
            });
        }
    },

    toggleFadeOnHover: function (el, duration) {
        console.log('toggleHover working: ' + duration);
        var duration = duration || 0;

        $(el).mouseenter(function () {
            mouseOver = true;
            $(this).animate({
                opacity: 1
            }, duration, function () {
            });
        });

        $(el).mouseleave(function () {
            mouseOut = true;
            $(this).animate({
                opacity: 0
            }, duration, function () {
            });
        });
    },
    removeHover: function (el) {
        $(el).unbind('mouseenter mouseleave');
    }
};

B2BPortal.UI.Layout = {
    shiftLogoToLeft: function (val) {
        var tVal = val || 0;
        $('#portal-logo').css({ position: 'absolute', left: tVal });
    }
};

B2BPortal.Utils.Tools = {
    setBrowserFallbackFn: function (browser, version, callback) {
        if ($.browser[browser]) {
            console.log('B2BPortal.Utils.Tools - The following browser version is used: ' + ($.browser.version));

            if ($.browser.version == version) {
                console.log('B2BPortal.Utils.Tools - Callback Function has been invoked');
                callback();
            }
        };
    },
    activateLinks: function (nav, activeStateClass, callback) {
        $(nav + ' a').click(function () {
            $(this).parent().find('a').removeClass(activeStateClass);
            $(this).addClass(activeStateClass);
            console.log('Link should be active');
            callback();
        });
    }
};
