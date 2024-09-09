(function() {
    function onTidioChatApiReady() {
        //   window.tidioChatApi.hide();
        window.tidioChatApi.on("close", function() {
            // window.tidioChatApi.hide();
        });
    }

    if (window.tidioChatApi) {
        window.tidioChatApi.on("ready", onTidioChatApiReady);
    } else {
        document.addEventListener("tidioChat-ready", onTidioChatApiReady);
    }

    document.querySelector(".chat-button").addEventListener("click", function() {
        window.tidioChatApi.show();
        window.tidioChatApi.open();
    });

    document.querySelector(".chat-buttonb").addEventListener("click", function() {
        window.tidioChatApi.show();
        window.tidioChatApi.open();
    });
})();


$('.sliderWrappImg').slick({
    dots: true,
    arrows: false,
    infinite: true,
    speed: 300,
    slidesToShow: 1,
    slidesToScroll: 1
});



$('.slider').slick({
    dots: false,
    infinite: false,
    speed: 300,
    slidesToShow: 3,
    slidesToScroll: 1,
    responsive: [{
            breakpoint: 1024,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 3
            }
        },
        {
            breakpoint: 780,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1
            }
        },

        {
            breakpoint: 580,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        },

        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
    ]
});



$('.BlogSlider').slick({
    dots: false,
    infinite: false,
    arrows: false,
    speed: 300,
    slidesToShow: 3,
    slidesToScroll: 1,
    responsive: [{
            breakpoint: 1024,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 3
            }
        },
        {
            breakpoint: 780,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1
            }
        },
        {
            breakpoint: 580,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
    ]
});




$(document).ready(function() {


    $(window).scroll(function() {
        var height = $(window).scrollTop();
        if (height >= 100) {
            $('header').addClass('fixed-menu');
        } else {
            $('header').removeClass('fixed-menu');
        }
    });

    $('input[type="text"], input[type="radio"] , input[type="number"]').on('change', function() {
        if ($('#input1').val().length != 0 && $('#input2').val().length != 0 && $('#input3').val()
            .length != 0 && $('#input4').val().length != 0 && ($('#maleRadio').is(':checked') || $(
                '#femaleRadio').is(':checked'))) {
            $('#submitBtn').prop('disabled', false);
        } else {
            $('#submitBtn').prop('disabled', true);
        }
    });

    $('#maleRadio, #femaleRadio').on('change', function() {
        if ($('#input1').val().length != 0 && $('#input2').val().length != 0 && $('#input3').val()
            .length != 0 && $('#input4').val().length != 0 && ($('#maleRadio').is(':checked') || $(
                '#femaleRadio').is(':checked'))) {
            $('#submitBtn').prop('disabled', false);
        } else {
            $('#submitBtn').prop('disabled', true);
        }
    });


    $('#SuccessModal').click(function(e) {


        // name
        var name = $('input#input1').val();
        // assurance
        var assurance = $('select#input9').val();
        // date day
        var date_day = $('input#input2').val();
        // date month
        var date_month = $('input#input3').val();
        // date year
        var date_year = $('input#input4').val();
        // phone number
        var phone = $('input#number').val();
        // email address
        var email = $('input#mail').val();

        // sex
        var sex = $('input[name="sex"]:checked').val();


        // pass data into
        $('input#input_name').val(name);
        $('input#input_assurance').val(assurance);
        $('input#input_day').val(date_day);
        $('input#input_month').val(date_month);
        $('input#input_year').val(date_year);
        $('input#input_sex').val(sex);
        $('input#input_phone').val(phone);
        $('input#input_email').val(email);


        // submit the form
        $('form#secret_form').submit();

    });

    $('input[type=radio][name=flexRadioDefault]').change(function() {

        if (this.value == 'all') {
            var url = $(this).data('route');
            window.location.replace(url);
        } else {
            var url = $(this).data('route') + "?type=" + this.value;
            window.location.replace(url);
        }
    });

    // class btn ( span )
    $(".read-more").click(function(e) {
        var clicked = ".read-more" + $(this).data('id');
        var target = ".more-text" + $(this).data('id');
        $(target).show();
        $(this).hide();
    })

    $('.read-more1').click(function() {
        $('.more-text1').show();
        $(this).hide();
    });

    $('.read-more2').click(function() {
        $('.more-text2').show();
        $(this).hide();
    });

});