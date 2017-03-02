var $calendarToggle,
	$submissionForm,
	$formContainer,
	$calendarContainer,
	$calendarToggle,
	$actions;

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

var isHome = document.body.classList.contains('home');


$('document').ready(function(){

	isMobile = /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ? true : false;
	
	// initialize jquery variables
	$submissionForm = $('#submission-form');
	$formContainer = $('#form-container');
	$calendarContainer = $('#calendar-container');
	$calendarToggle = $('#calendar-toggle');
	$readMoreLinks = $('.read-more');
	$expandEventLinks = $('.event__read-more');
	$actions = $('#actions');
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
	};

	var selectFormMobile = function(){
		var url = formSelector.options[formSelector.selectedIndex].value;
		window.open(url, "_system"); 
	};

	var selectForm = isMobile ? selectFormMobile : selectFormDesktop;

	var doOnHomePage = function(){
		// initialize slider
		initSlide = window.location.hash ? window.location.hash.split('#')[1] -1 : $('#actions').find('.action').length -1;

		$actions.slick({
			centerMode: false,
			arrows: true,
			initialSlide: initSlide,
			nextArrow: '<i class="fa fa-angle-right slick-next" aria-hidden="true"></i>',
			prevArrow: '<i class="fa fa-angle-left slick-prev" aria-hidden="true"> </i>'
		});

		// update hash on slide change
		$actions.on('afterChange', function(){
			var currentSlide = $actions.slick('slickCurrentSlide');
			var hash = '#'+ (currentSlide +1);
			if(history.pushState) {
			    history.pushState(null, null, hash);
			}
			else {
			    location.hash = hash;
			}
		});
				
		// $readMoreLinks.click(readMore); 
		document.getElementById('form-selector').onchange = selectForm;
		makeToggleLink('#toggle-signup', '#signup-form', 'Sign Up', 'Hide Form');

		if(!isMobile){
		makeToggleLink('#calendar-toggle', '#calendar-container', 'Show Calendar', 'Hide Calendar');
		}
		else{
	
		}
	};

	if(isHome){
		doOnHomePage();
	}

	$('.action main p a').attr('target', '_blank');
	$expandEventLinks.click(expandEvent);

});

function readMore(){
	var furtherInfo = $(this).siblings('.further-info')[0];
	$('#actions').toggleClass('expanded');
	$readMoreLinks.each(function(){
		$(this).toggleClass('active');
	});
}

function expandEvent(e){
	e.preventDefault();
	var description = $(this).closest('.event__description');
	$(this).toggleClass('event__read-more--expanded');
	$(description).toggleClass('event__description--expanded');
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