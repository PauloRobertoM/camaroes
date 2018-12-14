(function($, window) {
    $('#owl-potiguar').owlCarousel({
        loop: true,
        autoplay: true,
        margin: 0,
        nav: true,
        navText: ["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
        dots: true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
    });
    jQuery(function($) {
        var doAnimations = function() {
            var offset = $(window).scrollTop() + $(window).height(),
            $animatables = $('.animatable');
            if ($animatables.size() == 0) {
                $(window).off('scroll', doAnimations);
            }
            $animatables.each(function(i) {
                var $animatable = $(this);
                if (($animatable.offset().top + $animatable.height() - 20) < offset) {
                    $animatable.removeClass('animatable').addClass('animated');
                }
            });
        };
        $(window).on('scroll', doAnimations);
        $(window).trigger('scroll');
    });

    $('#datepairExample1 .time').timepicker({
        'step': 15,
        'showDuration': true,
        'timeFormat': 'g:ia'
    });
    $('#datepairExample1 .date').datepicker({
        'format': 'd/m/yyyy',
        'autoclose': true
    });
    $('#datepairExample2 .time').timepicker({
        'step': 15,
        'showDuration': true,
        'timeFormat': 'g:ia'
    });
    $('#datepairExample2 .date').datepicker({
        'format': 'd/m/yyyy',
        'autoclose': true
    });
    $('#datepairExample3 .time').timepicker({
        'step': 15,
        'showDuration': true,
        'timeFormat': 'g:ia'
    });
    $('#datepairExample3 .date').datepicker({
        'format': 'd/m/yyyy',
        'autoclose': true
    });
    $('#datepairExample4 .date').datepicker({
        'format': 'd/m/yyyy',
        'autoclose': true
    });

    function bs_input_file() {
        $(".input-file").before(
            function() {
                if ( ! $(this).prev().hasClass('input-ghost') ) {
                    var element = $("<input type='file' class='input-ghost' style='visibility:hidden; height:0'>");
                    element.attr("name",$(this).attr("name"));
                    element.change(function(){
                        element.next(element).find('input').val((element.val()).split('\\').pop());
                    });
                    $(this).find('input').css("cursor","pointer");
                    $(this).find('input').mousedown(function() {
                        $(this).parents('.input-file').prev().click();
                        return false;
                    });
                    return element;
                }
            }
        );
    }
    $(function() {
        bs_input_file();
    });


    $(document).ready(function () {
        $('#map').addClass('scrolloff');
        $('#overlay').on("mouseup",function(){
            $('#map').addClass('scrolloff');
        });
        $('#overlay').on("mousedown",function(){
            $('#map').removeClass('scrolloff');
        });
        $("#map").mouseleave(function () {
            $('#map').addClass('scrolloff');
        });
    });

    
})(jQuery, window);