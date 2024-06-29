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
        $('#switch1').on('click', function() {
            $('.loginMsg').toggleClass('visibility');
            $('.frontbox').addClass('moving');
            $('.signupMsg').toggleClass('visibility');

            $('.signup').removeClass('hide');
            $('.login').addClass('hide');
        });

        $('#switch2').on('click', function() {
            $('.loginMsg').toggleClass('visibility');
            $('.frontbox').removeClass('moving');
            $('.signupMsg').toggleClass('visibility');

            $('.signup').addClass('hide');
            $('.login').removeClass('hide');
        });

        $('#loginButton').click(function(event) {
            event.preventDefault();

            var email = $('#email').val().trim();
            var password = $('#password').val().trim();

            if (email === '' || password === '') {
                alert('Please enter both email and password.');
                return;
            }

            $.ajax({
                url: 'login.php',
                type: 'POST',
                dataType: 'json',
                data: {
                    email: email,
                    password: password
                },
                success: function(response) {
                    if (response.status === "success") {
                        window.location.href = 'view_event.php';
                    } else if (response.status === "not_found") {
                        alert(response.message);
                        $('#switch1').click();
                    } else {
                        alert(response.message);
                    }
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                    alert('Error: ' + xhr.responseText);
                }
            });
        });
    });

$(document).ready(function() {
    $('.reserve-button').on("click", function(event) {
        event.preventDefault();

        var eventId = $(this).data('event-id');

        $.ajax({
            url: 'reserve_event.php',
            type: 'POST',
            data: {
                event_id: eventId
            },
            success: function(response) {
                console.log(response);
                alert('Event reserved successfully!');
                window.location.reload();
            },
            error: function(xhr, status, error) {
                console.error(xhr.responseText);
                alert('Error: ' + xhr.responseText);
            }
        });
    });
});
