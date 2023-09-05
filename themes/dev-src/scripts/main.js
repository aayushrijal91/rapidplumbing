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
});

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
    asNavFor: '.trusted-main-slider',
    prevArrow: "<button class='slick-prev'><img class='custom-prev-arrow' src='http://localhost:3000/rapid/themes/_assets/images/icons/arrow.png' alt='Previous' /></button>",
    nextArrow: "<button class='slick-next'><img class='custom-next-arrow' src='http://localhost:3000/rapid/themes/_assets/images/icons/arrow.png' alt='Next' /></button>"
});


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