var $calendarToggle,
	$submissionForm,
	$formContainer,
	$calendarContainer,
	$calendarToggle;

var	$readMoreLinks;

var formSelector;

var selectForm;

var colorCodes = {
	electoral: '#badff1',
	mindfulness: '#cfcfeb',
	two_hours_a_week: '#efeff1',
	stop_trump: '#fece82',
	personal: '#fef991',
	policy: '#d2f0d4'
};

var isMobile = false;


$('document').ready(function(){

	isMobile = /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ? true : false;
	

	// initialize jquery variables
	$submissionForm = $('#submission-form');
	$formContainer = $('#form-container');
	$calendarContainer = $('#calendar-container');
	$calendarToggle = $('#calendar-toggle');
	$readMoreLinks = $('.read-more');
	formSelector = document.getElementById('form-selector');

	var selectFormDesktop = function(){
		var url = formSelector.options[formSelector.selectedIndex].value;
		
		var isHidden = $formContainer.hasClass('hidden');
	
		$submissionForm.attr('src', url);
		if(isHidden){
			$formContainer.removeClass('hidden');
		}
		if(url == ''){
			$formContainer.addClass('hidden');
		}
	}

	var selectFormMobile = function(){
		var url = formSelector.options[formSelector.selectedIndex].value;
		window.open(url, "_system"); 
	}

	var selectForm = isMobile ? selectFormMobile : selectFormDesktop;

	var initSlide = window.location.hash ? window.location.hash.split('#')[1] : null;

	document.getElementById('form-selector').onchange = selectForm;

	$('#actions').slick({
		centerMode: false,
		arrows: true,
		//rtl: true,
		//slidesToScroll: -1,
		//initialSlide: initSlide,
		nextArrow: '<i class="fa fa-angle-right slick-next" aria-hidden="true"></i>',
		prevArrow: '<i class="fa fa-angle-left slick-prev" aria-hidden="true"> </i>'
	});

	$readMoreLinks.click(readMore);

	makeToggleLink('#toggle-signup', '#signup-form', 'Sign Up', 'Hide Form');

	if(!isMobile){
		makeToggleLink('#calendar-toggle', '#calendar-container', 'Show Calendar', 'Hide Calendar');
	}
	else{

	}

});

function readMore(){
	console.log($(this).siblings('.further-info')[0]);
	var furtherInfo = $(this).siblings('.further-info')[0];
	$('#actions').toggleClass('expanded');
	$readMoreLinks.each(function(){
		$(this).toggleClass('active');
	});
}

function makeToggleLink(linkSelector, targetSelector, showText, hideText){
	var $link = linkSelector.charAt(0) == '#' ? $(linkSelector) : $(document.getElementsByClassName(linkSelector)[0]);
	var $target = $(targetSelector);
	$link.click(function(e){
		e.preventDefault();
		var isHidden = $target.hasClass('hidden');
		var newText = isHidden ? hideText : showText;
		var oldText = isHidden ? showText : hideText;
		$target.toggleClass('hidden');
		$link.toggleClass('active');
		$link.html().replace(oldText, newText);
	});
}