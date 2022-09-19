(function ($) {
    $(".alert").hide();
    "use strict";

    // Navbar on scrolling
    $(window).scroll(function () {
        if ($(this).scrollTop() > 200) {
            $('.navbar').fadeIn('slow').css('display', 'flex');
        } else {
            $('.navbar').fadeOut('slow').css('display', 'none');
        }
    });


    // Smooth scrolling on the navbar links
    $(".navbar-nav a").on('click', function (event) {
        if (this.hash !== "") {
            event.preventDefault();
            
            $('html, body').animate({
                scrollTop: $(this.hash).offset().top - 45
            }, 1500, 'easeInOutExpo');
            
            if ($(this).parents('.navbar-nav').length) {
                $('.navbar-nav .active').removeClass('active');
                $(this).closest('a').addClass('active');
            }
        }
    });

    // banner clientes
    $(".testimonial-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1500,
        dots: true,
        loop: true,
        items: 1
    });

    $('.btn-enviar').click( function(event) {
        var l= Ladda.create( document.querySelector( '.btn-enviar' ) );
        l.start();
        event.stopPropagation();
        event.preventDefault();

        var form = $('#contato');

        $.ajax({
            url: form.attr('action'),
            type: form.attr('method'),
            dataType: 'json',
            data: form.serialize(),
            success: function(data) {
                l.stop();
                if(data.status == true) {
                    $(".alert").hide();
                    swal({
                      title: "Sucesso!",
                      text: "Recebemos o seu contato!",
                      icon: "success",
                    });
                    $('.swal-button').css("background-color", "green");
                    form.trigger('reset');
                }
            },
            error: function (xhr, ajaxOptions, thrownError) {
                //console.log(xhr.responseText);
                l.stop();
                $(".alert").show();
            }
        });
    });
    
})(jQuery);

