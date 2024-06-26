/* Preloader */
$(window).on("load",function()
{
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
$(function()
{
	$("#sponsor").owlCarousel(
	{
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
$("#sidenav1").on("click", function()
{
	$("#result1").show();
	$("#result2").hide();
});
$("#sidenav2").on("click", function()
{
	$("#result2").show();
	$("#result1").hide();
});

