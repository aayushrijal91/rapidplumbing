var baseUrl = window.location.protocol + "//" + window.location.host + '/rapid';

function lazyloader() {
    const lazyContent = new LazyLoad({
        elements_selector: ".lazy"
    });

    const lazyBackground = new LazyLoad({
        elements_selector: "iframe.lazy, video.lazy, div.lazy, section.lazy, button.lazy"
    });
}

AOS.init();

$('.homebanner').slick({
    arrows: false,
    dots: false,
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    swipe: false,
    speed: 3000
});

$('.expect-slider').slick({
    dots: false,
    arrows: false,
    infinite: false,
    slidesToShow: 1,
    slidesToScroll: 1,
    centerMode: true,
    speed: 500,
    autoplay: false,
    variableWidth: true,
    touchThreshold: 1000,
});

$('.expect-slider').slick('slickGoTo', 2);

$('.testimonials-slider').slick({
    dots: false,
    arrows: false,
    infinite: false,
    slidesToShow: 1,
    slidesToScroll: 1,
    speed: 500,
    autoplay: false,
    variableWidth: true,
    touchThreshold: 1000,
});

$('.gallery-slider').slick({
    dots: false,
    arrows: false,
    infinite: true,
    slidesToShow: 2,
    slidesToScroll: 1,
    centerMode: true,
    centerPadding: '220px',
    speed: 500,
    autoplay: false,
    touchThreshold: 1000,
    responsive: [
        {
            breakpoint: 1100,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
                centerPadding: "60px",
                autoplay: true,
            }
        },
        {
            breakpoint: 900,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                centerPadding: "100px",
                autoplay: true,
            }
        },
        {
            breakpoint: 540,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                centerMode: false,
                centerPadding: 0,
                autoplay: true,
            }
        }
    ]
});

if ($(window).width() < 540) {
    $('#servicesSlider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        centerMode: true,
        centerPadding: "50px",
        autoplay: true,
    })
}

$('.trusted-main-slider').slick({
    dots: false,
    arrows: false,
    infinite: false,
    slidesToShow: 1,
    slidesToScroll: 1,
    speed: 1000,
    autoplay: false,
    swipe: false,
    asNavFor: '.trusted-thumbnail-slider',
    focusOnSelect: true,
});


$('.trusted-thumbnail-slider').slick({
    dots: false,
    arrows: true,
    infinite: false,
    slidesToShow: 3,
    slidesToScroll: 1,
    speed: 1000,
    autoplay: false,
    swipe: false,
    touchThreshold: 1000,
    asNavFor: '.trusted-main-slider',
    prevArrow: `<button class='slick-prev'><svg width="37" height="36" viewBox="0 0 37 36" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="18.6763" cy="18.0659" r="17.7505" transform="rotate(-180 18.6763 18.0659)" fill="#F0C324"/><path d="M22.0529 26.8188L13.2999 18.0659L22.0529 9.31299" stroke="white" stroke-width="4"/></svg></button>`,
    nextArrow: `<button class='slick-next'><svg width="37" height="36" viewBox="0 0 37 36" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="18.6763" cy="18.066" r="17.7505" fill="#F0C324"/><path d="M15.2998 9.31299L24.0527 18.0659L15.2998 26.8188" stroke="white" stroke-width="4"/></svg></button>`
});

if ($(window).width() < 540) {
    $('#awards-slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        arrows: false,
        centerMode: true,
        centerPadding: "60px"
    });
}


$('#about-review').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true,
    infinite: false,
    touchThreshold: 1000,
    prevArrow: `<button class='slick-prev'><svg width="37" height="36" viewBox="0 0 37 36" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="17.7505" cy="17.7505" r="17.2505" transform="matrix(-1 0 0 1 36.2505 0.0898438)" stroke="white"/><path d="M21.8765 9.0874L13.1235 17.8403L21.8765 26.5933" stroke="white" stroke-width="4"/></svg></button>`,
    nextArrow: `<button class='slick-next'><svg width="37" height="36" viewBox="0 0 37 36" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="18.4996" cy="17.8404" r="17.2505" stroke="white"/><path d="M15.123 9.0874L23.876 17.8403L15.123 26.5933" stroke="white" stroke-width="4"/></svg></button>`
});

$('.customersSlider').slick({
    slidesToShow: 10,
    slidesToScroll: 1,
    variableWidth: true,
    arrows: false,
    autoplay: true,
    speed: 8000,
    autoplaySpeed: 0,
    cssEase: 'linear'
});

$('.faq-slider').slick({
    arrows: false,
    infinite: false,
    slidesToShow: 4,
    slidesToScroll: 1,
    centerMode: true,
    centerPadding: "200px",
    speed: 500,
    autoplay: false,
    initialSlide: 2,
    touchThreshold: 1000,

    responsive: [
        {
            breakpoint: 1600,
            settings: {
                slidesToShow: 3,
                centerPadding: "100px",
                initialSlide: 1,
            }
        },
        {
            breakpoint: 1200,
            settings: {
                slidesToShow: 3,
                centerPadding: "50px",
                initialSlide: 1,
            }
        },
        {
            breakpoint: 900,
            settings: {
                slidesToShow: 2,
                centerPadding: "50px",
                initialSlide: 1,
            }
        },
        {
            breakpoint: 540,
            settings: {
                centerPadding: "50px",
                initialSlide: 0,
                slidesToShow: 1,
            }
        }
    ]
});

$('.innerServiceFaqSlider').slick({
    arrows: false,
    infinite: false,
    slidesToShow: 3,
    slidesToScroll: 1,
    speed: 500,
    autoplay: false,
    touchThreshold: 1000,
    responsive: [
        {
            breakpoint: 1200,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
                centerMode: true,
                centerPadding: "50px",
                infinite: true,
                autoplay: true,
                autoplaySpeed: 5000,
                speed: 1000
            }
        },
        {
            breakpoint: 900,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                centerMode: true,
                centerPadding: "100px",
                infinite: true,
                autoplay: true,
                autoplaySpeed: 5000,
                speed: 1000
            }
        },
        {
            breakpoint: 540,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                centerMode: true,
                centerPadding: "20px",
                infinite: true,
                autoplay: true,
                autoplaySpeed: 5000,
                speed: 1000
            }
        }
    ]
});

$('.membershipSlider').slick({
    arrows: false,
    slidesToShow: 3,
    slidesToScroll: 1,
    centerMode: true,
    centerPadding: "100px"
});

$('.tapstoiltesservices-slider').slick({
    dots: false,
    arrows: false,
    infinite: false,
    slidesToShow: 1,
    slidesToScroll: 1,
    speed: 500,
    autoplay: false,
    variableWidth: true,
    touchThreshold: 1000,
});

if ($(window).width() < 540) {
    $('.innerServiceListingSlider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        centerMode: true,
        centerPadding: "50px",
        autoplay: true,
    })
}

function validateForm(form) {
    const inputs = form.find('input.required');
    const errorMessages = form.find('.error');
    let isValid = true;

    inputs.each(function (index) {
        const input = $(this);
        const errorMessage = $(errorMessages[index]);
        const inputValue = input.val().trim();

        if (inputValue === '') {
            errorMessage.css('display', 'block').text('This field is required.');
            input.addClass('is-invalid');
            isValid = false;
        } else {
            errorMessage.text('');
            input.removeClass('is-invalid');

            if (input.attr('type') === 'email' && !validateEmail(inputValue)) {
                errorMessage.text('Invalid email format.');
                input.addClass('is-invalid');
                isValid = false;
            } else if (input.attr('type') === 'tel' && !validatePhoneNumber(inputValue)) {
                errorMessage.text('Invalid phone number format.');
                input.addClass('is-invalid');
                isValid = false;
            }
        }
    });

    return isValid;
}

function validateEmail(email) {
    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailPattern.test(email);
}

function validatePhoneNumber(phoneNumber) {
    const phonePattern = /^\d{10}$/; // Assuming 10-digit phone numbers
    return phonePattern.test(phoneNumber);
}

$(document).on("submit", "#enquiry_form", function (e) {
    e.preventDefault();
    let form = $(this);
    if (!validateForm(form)) {
        e.preventDefault();
        form.addClass('was-validated');
    } else {
        e.preventDefault();
        $('.submit_btn').attr('disabled', 'disabled').val("Loading...");

        $.ajax({
            url: SITE_URL + '/ajax/',
            data: $("#enquiry_form").serialize(),
            method: 'POST',
            success: function (response) {
                response = response.trim();
                if (response == "success") {
                    $("#enquiry_form")[0].reset();
                    $(".submit_btn").removeAttr('disabled').val("SUBMIT");
                    window.location.href = SITE_URL + '/thank-you/';
                } else if (response == "fail") {
                    alert("Failed, Something went wrong.")
                }
            }
        });
    }
})

const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]');
const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl));

/*********************** Forms ******************* */
// $(document).on("submit", "#enquiry_form", function (e) {
//     e.preventDefault();
//     // var thank = $(this).attr('data-thank');
//     // console.log(thank);
//     // e.preventDefault();
//     $(".enquiry_form_btn").attr('disabled', 'disabled').val("Loading...");
//     grecaptcha.ready(function () {
//         grecaptcha.execute('6Ldso5ghAAAAAChSuoeDg027KKnRXuxF5rT3Lb0U', {
//                 action: 'MyForm'
//             })
//             .then(function (token) {
//                 $('.g-recaptcha-response').val(token);
//                 $.ajax({
//                     url: SITE_URL + '/ajax/',
//                     data: $("#enquiry_form").serialize(),
//                     method: 'POST',
//                     success: function (response) {
//                         response = response.trim();
//                         if (response == "success") {
//                             $("#enquiry_form")[0].reset();
//                             $(".enquiry_form_btn").removeAttr('disabled').val("SUBMIT");
//                             window.location.href = SITE_URL + '/contact-thank-you/';
//                         } else if (response == "fail") {
//                             alert("Failed, Something went wrong.")
//                         }
//                     }
//                 });
//             });
//     });
// });