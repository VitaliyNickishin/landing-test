$(document).ready(function(){

    var overlay = $('#overlay');
    var open_modal = $('.open-modal');
    var close = $('.modal-close, #overlay');
    var modal = $('.modal-box');
    open_modal.click( function(e){
        e.preventDefault();
        var div = $(this).attr('data-modal');
        overlay.fadeIn(400,
            function(){
                $(div)
                    .css('display', 'block')
                    .animate({opacity: 1, top: '50%'}, 200);
            });
    });
    close.click( function(){
        modal.find('.req').each(function() {
            $(this).val('');
        });
        modal
            .animate({opacity: 0, top: '45%'}, 200,
                function(){
                    $(this).css('display', 'none');
                    $('.success').css('display', 'none');
                    overlay.fadeOut(400);
                }
            );
    });
    $('.success .modal-close').click(function (e) {
        e.preventDefault();
        $('.success').css('display', 'none');
        overlay.fadeOut(400);
    });
    $('.slider-portfolio').slick({
        slidesToShow: 2,
        slidesToScroll: 1,
        arrows: true,
        dots: true,
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                    adaptiveHeight: true,
                    arrows: false
                }
            }
        ]
    });
    $('.slider-reviews').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        dots: true,
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    adaptiveHeight: true,
                    arrows: false
                }
            }
        ]
    });
    $('.slider-sertificates').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        arrows: false,
        dots: true,
        infinite: false,
        responsive: [
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 2
                }
            }
        ]
    });
    $('.slider-stat').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        dots: true
    });
    $('.ico-menu').click(function () {
        $('.menu-mobile').slideToggle('fast');
        $(this).toggleClass('open-menu');
    });

    $('.menu-mobile a').click(function () {
        $('.ico-menu').removeClass('open-menu');
    });
    placeholderSearch();
});

function placeholderSearch() {
    if (document.documentElement.clientWidth < 768){
        $('input[type="search"]').attr('placeholder', 'Type keywords...');
    } else {
        $('input[type="search"]').attr('placeholder', 'Type keywords to find answers...')
    }
}

function checkform(form, goal_id) {
    var errors = "";
    var pl;
    $(form).find('.req').each(function(){
        var val = $(this).val();
        if (val == "" || val == " " || val == "  "){
            errors = "Please fill in the fields!";
            $(this).val('');
            $(this).addClass('error-input').attr('placeholder', errors);
        } else{

        }
    });
    if (errors != "") {
        return false;
    } else {
        $.post('./submit.php', $(form).serialize(), function (data) {
            if (data == 1) {
                $('#overlay').fadeIn(400);
                $(form).find('.req').each(function() {
                    $(this).val('');
                    $(this).removeClass('error-input');
                    $('input[name="name"]').attr('placeholder', 'Name');
                    $('input[name="email"]').attr('placeholder', 'Email');
                    $('textarea[name="msg"]').attr('placeholder', 'Message');
                });
                setTimeout(function(){
                    $('.modal-box') .animate({opacity: 0, top: '45%'}, 200).css('display', 'none');

                }, 500);
                $('body').find(".success").delay(500).fadeIn(500);
            } else {

            }
        });
        return false;
    }
}

$(window).resize(function() {
    placeholderSearch();
});

jQuery(document).ready(function($){
    $('#search-field').keydown(function(eventObject){
        var searchTerm = $(this).val();
        // проверим, если в поле ввода более 2 символов, запускаем ajax
        if(searchTerm.length >= 1){
            $.ajax({
                url : '/wp-admin/admin-ajax.php',
                type: 'POST',
                data:{
                    'action':'codyshop_ajax_search',
                    'term'  :searchTerm
                },
                success:function(result){
                    $('.codyshop-ajax-search').fadeIn().html(result);
                }
            });
        }
    });

    $("#post-date-filter").submit(function(){
        return false;
    });

    $('#post-date-filter button').click(function(eventObject){
        var searchTerm = $('#search-field').val();
        // проверим, если в поле ввода более 2 символов, запускаем ajax
        if(searchTerm.length >= 1){
            $.ajax({
                url : '/wp-admin/admin-ajax.php',
                type: 'POST',
                data:{
                    'action':'codyshop_ajax_search',
                    'term'  :searchTerm
                },
                success:function(result){
                    $('.codyshop-ajax-search').fadeIn().html(result);
                }
            });
        }
    });

    $('.wpcf7-submit').click(function() {

        function show_success() {
            console.log($('.wpcf7-form').hasClass('sent'));
            if($('.wpcf7-form').hasClass('sent')) {
                $('#callback').css('display', 'none');
                $('body .success').css('display', 'block'); 
            }
        }

        setTimeout(show_success, 400);

    });
});