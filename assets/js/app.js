jQuery(document).ready(function($) {
    /** Drop down menu making link active (check nav walker) **/
    $('.navbar-nav.dropdown').hover(function() {
        $(this).find('.dropdown-menu').first().stop(true, true).delay(250).slideDown();
    }, function() {
        $(this).find('.dropdown-menu').first().stop(true, true).delay(100).slideUp();
    });
    $('.navbar-nav .dropdown > a').click(function() {
        location.href = this.href;
    });
    // Bootstrap menu magic
    $(window).resize(function() {
        if ($(window).width() < 768) {
            $(".dropdown-toggle").attr('data-toggle', 'dropdown');
        } else {
            $(".dropdown-toggle").removeAttr('data-toggle dropdown');
        }
    });
    $("#menu").mmenu({
        extensions: ["shadow-panels", "fx-panels-slide-100", "border-none", "theme-black", "fullscreen"],
        offCanvas: {
            //  position    : "right"
        },
        navbars: {
            content: ["prev", "close"],
            height: 2
        },
        setSelected: true,
    }, {});
});