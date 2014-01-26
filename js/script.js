


var Animations = {
	slideLeft: {left: '-=1500'},
	slideRight: {right: '-=1500'},
	slideDown: {top: '+=200'},
	 
};

var steps = [

	//step 0
	function(){
		//slide Voila logo in from the right
		$('#logo').css('left', 1500).animate( Animations.slideLeft, 2000);

		//slide Motto in from the left
		$('#motto').css('right', 1500).animate(Animations.slideRight, 2000);
	
		$('#nav').css('top', -200).animate(Animations.slideDown, 4000);

		$('.serving').hide().fadeIn(4000);
	},

];

$(steps[0]);

$(function (){

	$('.carousel').carousel({
		carouselWidth: 960,
		carouselHeight: 410,
		frontWidth: 403,
		frontHeight: 403,
		directionNav: true
	}); //needs to be called before smoothScroll

	$('ul li a').smoothScroll( {speed: 1200});

	$('.album ul').roundabout();
	
});	



function isValid(form)
{
	
	if (form.name.value=='')
	{
		alert('Please enter your name.');

		form.name.focus();

		return false;
	}

	if (form.email.value=='')
	{
		alert('Please enter your e-mail address.');

		form.email.focus();

		return false;
	}

	if (!isValidEmail (form.email.value))
	{
		alert('Please enter a valid e-mail address.');

		form.email.focus();

		return false;
	}

	return true;

}

function isValidEmail(value)
{
	var emailRegularExpression = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    return emailRegularExpression.test( value );

}

