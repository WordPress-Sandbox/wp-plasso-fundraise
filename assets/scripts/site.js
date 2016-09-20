
/* Panel Toggles
---------------------------------------------------------------------------------------------------- */

jQuery(document).ready(function( $ ) {
    $(document).on('click', '.open', function() {
        $('body').addClass('no-scroll');

        var panel = $(this).attr('href');

        $(panel).removeClass('inactive animated fast slow fadeOut').addClass('active animated fast fadeIn');

        if ($('#panels .active')[0]) {
            $('#panels .active').not(panel).removeClass('animated fast slow fadeIn').addClass('animated slow fadeOut');

            setTimeout(function(){
                $('#panels .active').not(panel).removeClass('active').addClass('inactive');
            }, 500);
        }

        return false;
    });

    function panel_close() {
        $('body').removeClass('no-scroll');

        var panel = '.panel.active';

        $('.panel').removeClass('animated fast slow fadeIn');
        $(panel).addClass('animated fast fadeOut');

        setTimeout(function(){
            $('.panel').removeClass('active').addClass('inactive');
        }, 250);
    }

    $(document).on('click', '.panel', function() {
        panel_close();

        return false;
    });

    $(document).on('keyup',function(evt) {
        if (evt.keyCode == 27) {
            panel_close();
        }
    });
});

/* Video Toggles
---------------------------------------------------------------------------------------------------- */

jQuery(document).ready(function( $ ) {
    $(document).on('click', '.start', function() {

        // Gather video variables.
        var videoType = $(this).data('video-type');
        var videoID = $(this).data('video-id');

        // YouTube embeds.
        if (videoType === 'youtube') {
            $('#video .content').empty().append('<iframe src="//www.youtube.com/embed/'+videoID+'?rel=0&autoplay=1" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>');
        }

        // Vimeo embeds.
        if (videoType === 'vimeo') {
            $('#video .content').empty().append('<iframe src="https://player.vimeo.com/video/'+videoID+'?autoplay=1" frameborder="0" autoplay="true" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>');
        }

        // Return false.
        return false;
    });

    $(document).on('click', '.stop', function() {
        setTimeout(function() {
            $('#video .content').empty();
        }, 200);

        // Return false.
        return false;
    });
});

/* Smooth Scrolling
---------------------------------------------------------------------------------------------------- */

jQuery(document).ready(function( $ ) {
    $(document).on('click', '.scroll', function() {
        var target = this.hash;
        var $target = $(target);

        if ($(this).hasClass('down')) {
            $('html, body').stop().animate({
                'scrollTop': $(window).scrollTop() + 300
            });
        } else if ($(this).hasClass('form')) {

            $('.panel.active').stop().animate({
                'scrollTop': $target.offset().top - 60
            });
        } else {
            $('html, body').stop().animate({
                'scrollTop': $target.offset().top - 60
            });
        }

        return false;
    });
});

/* Equal Height Features
---------------------------------------------------------------------------------------------------- */

jQuery(document).ready(function( $ ) {
    equalheight = function(container) {

        var currentTallest = 0,
            currentRowStart = 0,
            rowDivs = new Array(),
            $el,
            topPosition = 0;
        $(container).each(function() {

            $el = $(this);
            $($el).height('auto')
            topPostion = $el.position().top;

            if (currentRowStart != topPostion) {
                for (currentDiv = 0; currentDiv < rowDivs.length; currentDiv++) {
                    rowDivs[currentDiv].height(currentTallest);
                }
                rowDivs.length = 0; // empty the array
                currentRowStart = topPostion;
                currentTallest = $el.height();
                rowDivs.push($el);
            } else {
                rowDivs.push($el);
                currentTallest = (currentTallest < $el.height()) ? ($el.height()) : (currentTallest);
            }
            for (currentDiv = 0; currentDiv < rowDivs.length; currentDiv++) {
                rowDivs[currentDiv].height(currentTallest);
            }
        });
    }

    $(window).load(function() {
        equalheight('.feature');
    });

    $(window).resize(function(){
        equalheight('.feature');
    });
});