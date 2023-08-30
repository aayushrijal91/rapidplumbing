function lazyloader() {
    const lazyContent = new LazyLoad({
        elements_selector: ".lazy"
    });

    const lazyBackground = new LazyLoad({
        elements_selector: "iframe.lazy, video.lazy, div.lazy, section.lazy, button.lazy"
    });
}

AOS.init();

$('.main-menu ul li a').on('click', function () {
    $('.main-menu ul li a').removeClass('active'); // Remove active class from all li elements
    $(this).addClass('active'); // Add active class to the clicked li element
});

$('.logo').on('click', function () {
    $('.main-menu ul li a').removeClass('active'); // Remove active class from all li elements
});

$('.content-slider').slick({
    arrows: false,
    dots: false,
    infinite: false,
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: false,
    swipe: false,
});

$('a[data-slide]').on('click', function (e) {
    e.preventDefault();
    var slideno = $(this).data('slide');
    $('.content-slider').slick('slickGoTo', slideno - 1);
});

$('.video-slider').slick({
    arrows: false,
    dots: false,
    infinite: false,
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: false,
    swipe: false,
    asNavFor: '.thumbnail-slider',
});

$('.thumbnail-slider').slick({
    arrows: true,
    dots: false,
    infinite: false,
    slidesToShow: 4,
    slidesToScroll: 1,
    autoplay: false,
    variableWidth: true,
    touchThreshold: 1000,
    focusOnSelect: true,
    asNavFor: '.video-slider',
    nextArrow: $('.thumbnail-next-arrow'),
    prevArrow: $('.thumbnail-prev-arrow'),
});

$('.thumbnail-slider').on('click', '.slick-slide', function () {
    $('.video-slider video').each(function () {
        this.pause();
    });
});

$('.contact-options-slider').slick({
    arrows: true,
    dots: false,
    infinite: false,
    slidesToShow: 4,
    slidesToScroll: 1,
    autoplay: false,
    variableWidth: true,
    touchThreshold: 1000,
    prevArrow: "<img class='slick-prev' src='../themes/_assets/images/arrow-prev.png'>",
    nextArrow: "<img class='slick-next' src='../themes/_assets/images/arrow-next.png'>",
    responsive: [{
        breakpoint: 576,
        settings: {
            slidesToShow: 1,
            variableWidth: false,
        }
    }]
});

$('.cd-slider').slick({
    arrows: false,
    dots: false,
    infinite: false,
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: false,
    swipe: false,
});

$('.step-box-slider').slick({
    arrows: false,
    dots: false,
    infinite: false,
    slidesToShow: 5,
    slidesToScroll: 1,
    autoplay: true,
    touchThreshold: 1000,
    responsive: [{
        breakpoint: 576,
        settings: {
            slidesToShow: 2,
            variableWidth: false,
        }
    }]
});

$('.option[data-slide]').on('click', function (e) {
    e.preventDefault();
    var slideno = $(this).data('slide');
    $('.cd-slider').slick('slickGoTo', slideno - 1);
});

$('.option').on('click', function () {
    $('.option').removeClass('active'); // Remove 'active' class from all options
    $(this).addClass('active'); // Add 'active' class to the clicked option

    // Get the index of the clicked option
    var index = $(this).index();
    // Set the corresponding slide as 'slick-active'
    $('.contact-options-slider').slick('slickGoTo', index);
});

$('.answer-box').hide();
$('.close-answer').on('click', function () {
    var $questionBox = $(this).closest('.qna-box');
    $questionBox.find('.answer-box').hide();
    $questionBox.find('.question-box').removeClass('text-primary bg-white opacity-100');
    $('.question-box').css({
        'pointer-events': 'auto',
        'opacity': '1'
    });;
    $('.open-answer span').removeClass('active');
});

$('.open-answer span').on('click', function () {
    var $questionBox = $(this).closest('.qna-box');
    $questionBox.find('.answer-box').show();
    $questionBox.find('.question-box').addClass('bg-white text-primary opacity-100');
    $('.question-box').css({
        'pointer-events': 'none',
        'opacity': '0.5'
    });;
});

$('.open-answer span').on('click', function () {
    $('.open-answer span').removeClass('active'); // Remove active class from all span elements
    $(this).addClass('active'); // Add active class to the clicked span element
});

// Hide all columns initially
$('#searchResultsSection .search-item').hide();

$('#searchBar').on('input', function () {
    var searchTerm = $(this).val().toLowerCase();
    var searchResults = $('#searchResultsSection .search-item');
    var foundResults = false;

    searchResults.each(function () {
        var columnName = $(this).attr('data-name').toLowerCase();
        if (searchTerm === '') {
            $(this).show(); // If the search bar is empty, show all search items
        } else if (columnName.includes(searchTerm)) {
            $(this).show(); // If the search term matches, show the search item
            foundResults = true;
        } else {
            $(this).hide(); // If the search term doesn't match, hide the search item
        }
    });

    displayNotFoundMessage(foundResults, searchTerm);

    var resultsContainer = $('#searchResultsSection');
    var sortedResults = searchResults.toArray().sort(function (a, b) {
        var textA = $(a).attr('data-name').toLowerCase();
        var textB = $(b).attr('data-name').toLowerCase();
        return textA.localeCompare(textB);
    });
    resultsContainer.append(sortedResults);
});

// Initialize a variable to keep track of whether the "Nothing found" message has been appended.
var nothingFoundAppended = false;

function displayNotFoundMessage(found) {
    if (!found && !nothingFoundAppended) {
        // If no search results were found and the message is not appended yet, append the "Nothing found" message.
        console.log('not found');
        $('#searchResultsSection').append('<p id="nothing-found">For assets that don’t appear in our search engine, please contact your BDM for guidance.</p>');

        // Update the variable to indicate that the message has been appended.
        nothingFoundAppended = true;
    } else if (found && nothingFoundAppended) {
        // If search results were found and the message is appended, remove the "Nothing found" message.
        $('#nothing-found').remove();

        // Update the variable to indicate that the message has been removed.
        nothingFoundAppended = false;
    }
}

$("#clearAll").click(function () {
    // Hide elements with the class name "search-item" within #searchResultsSection
    $("#searchResultsSection .search-item").hide();
    $('#searchResultsSection p#nothing-found').remove();
    $('#searchBar').val('');
});

// Define the rates based on the combinations
let rates = globalAssetList;
rates = JSON.parse(rates);
let clickCount = 0;

// Event handler for the Calculate button
$('#calculate').click(function () {

    clickCount++; // Increment the click count on every click

    if (clickCount % 2 === 0) {
        // Clear the form controls on every second click
        $('.rate-form .form-control').val('');
    }

    if ($('#calculate span').text() === 'Reset my calculator') {
        $('#calculate span').text('Calculate my rate');
        $('#calculate span').addClass('tg-1');
        $('#calculate span').removeClass('text-white');
        $('#calculate').addClass('btn-white');
        $('#calculate').removeClass('btn-secondary');
    } else {
        $('#calculate span').text('Reset my calculator');
        $('#calculate span').addClass('text-white');
        $('#calculate span').removeClass('tg-1');
        $('#calculate').addClass('btn-secondary');
        $('#calculate').removeClass('btn-white');
    }

    $('.rate-form').css({
        'pointer-events': function (_, value) {
            return value === 'none' ? 'auto' : 'none';
        },
        'opacity': function (_, value) {
            return value === '0.5' ? '1' : '0.5';
        }
    });

    $('.rate-section').each(function () {
        var $this = $(this);
        $this.css('width', $this.width() === 0 ? '100%' : 0);
    });

    // Get the selected values from the form
    var assetType = $('#asset-type').val();
    var propertyBacked = $('input[name="property-backed"]:checked').val();
    var abnAge = $('#abn-age').val();
    var gstRegistration = $('#gst-registration').val();
    var endOfTerm = $('#end-of-term').val();

    // Create the combination string and remove special characters and spaces
    var combination = assetType + '_' + propertyBacked + '_' + abnAge + '_' + gstRegistration + '_' + endOfTerm;
    combination = combination.replace(/[^\w\s]+/g, '').replace(/\s+/g, '_');

    console.log("Combination:", combination);

    // Remove special characters and spaces from the rates object
    var trimmedRates = {};
    Object.keys(rates).forEach(function (key) {
        var trimmedKey = key.replace(/[^\w\s]+/g, '').replace(/\s+/g, '_');
        var trimmedValue = rates[key];
        trimmedRates[trimmedKey] = trimmedValue;
    });

    // Get the rate from the trimmed rates object based on the combination
    var rate = trimmedRates[combination];

    // Display the rate in the result element
    if (rate === undefined) {
        $('#rate-result').text("N/A");
    } else {
        $('#rate-result').text(rate + "%");
    }
});

$('#nav-icon4').on('click', function () {
    $(this).toggleClass('open');
    $('.navigation').toggleClass('open');
});

const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]');
const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl));

/*********************** Forms ******************* */
$(document).on("submit", "#enquiry_form", function (e) {
    e.preventDefault();
    // var thank = $(this).attr('data-thank');
    // console.log(thank);
    // e.preventDefault();
    $(".enquiry_form_btn").attr('disabled', 'disabled').val("Loading...");
    grecaptcha.ready(function () {
        grecaptcha.execute('6Ldso5ghAAAAAChSuoeDg027KKnRXuxF5rT3Lb0U', {
                action: 'MyForm'
            })
            .then(function (token) {
                $('.g-recaptcha-response').val(token);
                $.ajax({
                    url: SITE_URL + '/ajax/',
                    data: $("#enquiry_form").serialize(),
                    method: 'POST',
                    success: function (response) {
                        response = response.trim();
                        if (response == "success") {
                            $("#enquiry_form")[0].reset();
                            $(".enquiry_form_btn").removeAttr('disabled').val("SUBMIT");
                            window.location.href = SITE_URL + '/contact-thank-you/';
                        } else if (response == "fail") {
                            alert("Failed, Something went wrong.")
                        }
                    }
                });
            });
    });
});