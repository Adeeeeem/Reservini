/* Preloader */
$(window).on("load", function() {
  $("#status").fadeOut();
  $("#preloader").delay(350).fadeOut("slow");
  $("#result2").hide();
});

/* Login Sign up */
var $loginMsg = $('.loginMsg'),
  $login = $('.login'),
  $signupMsg = $('.signupMsg'),
  $signup = $('.signup'),
  $frontbox = $('.frontbox');

$('#switch1').on('click', function() {
  $loginMsg.toggleClass("visibility");
  $frontbox.addClass("moving");
  $signupMsg.toggleClass("visibility");

  $signup.toggleClass('hide');
  $login.toggleClass('hide');
});

$('#switch2').on('click', function() {
  $loginMsg.toggleClass("visibility");
  $frontbox.removeClass("moving");
  $signupMsg.toggleClass("visibility");

  $signup.toggleClass('hide');
  $login.toggleClass('hide');
});

/* Owl Carousel Sponsor */
$(function() {
  $("#sponsor").owlCarousel({
    items: 3,
    autoplay: true,
    smartSpeed: 700,
    loop: true,
    autoplayHoverPause: false,
    nav: false,
    dots: false,
  });
});

/* Result create (Event Maker) */
$("#sidenav1").on("click", function() {
  $("#result1").show();
  $("#result2").hide();
});
$("#sidenav2").on("click", function() {
  $("#result2").show();
  $("#result1").hide();
});

$(document).ready(function() {
    $('#createEventForm').submit(function(event) {
        event.preventDefault();

        if (validateForm()) {
            submitForm();
        }
    });

    function validateForm() {
        var isValid = true;

        $('#createEventForm .is-invalid').removeClass('is-invalid');
        $('#createEventForm .invalid-feedback').remove();

        $('#eventname, #eventlogo, #eventplace, #eventdate, #eventtime').each(function() {
            if (!$(this).val()) {
                isValid = false;
                $(this).addClass('is-invalid');
                $(this).after('<div class="invalid-feedback">This field is required.</div>');
            }
        });

        var eventLogoFile = $('#eventlogo')[0].files[0];
        if (!eventLogoFile) {
            isValid = false;
            $('#eventlogo').addClass('is-invalid');
            $('#eventlogo').after('<div class="invalid-feedback">Please select an event logo.</div>');
        }

        return isValid;
    }

    function submitForm() {
        var formData = new FormData($('#createEventForm')[0]);

        $.ajax({
            url: 'add_event.php',
            type: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            success: function(response) {
                console.log(response);
                alert("Event added successfully.");
                $('#createEventForm')[0].reset();
            },
            error: function(xhr, status, error) {
                console.error(xhr.responseText);
                alert("Error adding event. Please try again later.");
            }
        });
    }
});


$(document).ready(function() {

    function loadPage(page) {
        $.ajax({
            url: page,
            type: 'GET',
            success: function(data) {
                $("#content").html(data);
            },
            error: function(xhr, status, error) {
                console.error(xhr.responseText);
                alert("Error loading page. Please try again later.");
            }
        });
    }
});



$(document).ready(function() {
    // Switch between login and sign-up forms
    $('#switch1').on('click', function() {
        $('.loginMsg').toggleClass('visibility');
        $('.frontbox').addClass('moving');
        $('.signupMsg').toggleClass('visibility');

        $('.signup').toggleClass('hide');
        $('.login').toggleClass('hide');
    });

    $('#switch2').on('click', function() {
        $('.loginMsg').toggleClass('visibility');
        $('.frontbox').removeClass('moving');
        $('.signupMsg').toggleClass('visibility');

        $('.signup').toggleClass('hide');
        $('.login').toggleClass('hide');
    });

    // Login Form Submission
    $('#loginForm').submit(function(event) {
        event.preventDefault();

        var email = $('#email').val();
        var password = $('#password').val();

        $.ajax({
            url: 'login.php',
            type: 'POST',
            data: {
                email: email,
                password: password
            },
            success: function(response) {
                console.log(response);
                window.location.href = 'view_event.php';
            },
            error: function(xhr, status, error) {
                console.error(xhr.responseText);
                alert('Error: ' + xhr.responseText);
            }
        });
    });

    $('#signupForm').submit(function(event) {
        event.preventDefault();

        var fullname = $('#fullname1').val();
        var email = $('#email1').val();
        var password = $('#password1').val();

        $.ajax({
            url: 'signup.php',
            type: 'POST',
            data: {
                fullname: fullname,
                email: email,
                password: password
            },
            success: function(response) {
                console.log(response); 
                window.location.href = 'view_event.php';
            },
            error: function(xhr, status, error) {
                console.error(xhr.responseText);
                alert('Error: ' + xhr.responseText);
            }
        });
    });
});
