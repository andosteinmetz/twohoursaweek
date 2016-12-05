var $calendarToggle,
	$submissionForm,
	$formContainer,
	$calendarContainer,
	$calendarToggle;

var	$readMoreLinks;

var formSelector;


$('document').ready(function(){

	// initialize jquery variables
	$submissionForm = $('#submission-form');
	$formContainer = $('#form-container');
	$calendarContainer = $('#calendar-container');
	$calendarToggle = $('#calendar-toggle');
	$readMoreLinks = $('.read-more')

	formSelector = document.getElementById('form-selector');

	$('#actions').slick({
		centerMode: false,
		arrows: true,
		nextArrow: '<i class="fa fa-angle-right slick-next" aria-hidden="true"></i>',
		prevArrow: '<i class="fa fa-angle-left slick-prev" aria-hidden="true"> </i>'
	});

	//$('#actions').on('beforeChange', function(event, slick, currentSlide, nextSlide){
	//	collapseFurtherInfo(currentSlide);
	//});

	makeToggleLink('#calendar-toggle', '#calendar-container', 'Show Calendar', 'Hide Calendar');
	makeToggleLink('#toggle-signup', '#signup-form', 'Sign Up', 'Hide Form');

	$readMoreLinks.click(readMore);
});

function selectForm(){
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

// deprecated
//function toggleCalendar(){
//	var isHidden = $calendarContainer.hasClass('hidden');
//	var newText = isHidden ? 'Hide Calendar' : 'View Calendar';
//	$calendarContainer.toggleClass('hidden');
//	$calendarToggle.text(newText);
//}

function readMore(){
	console.log($(this).siblings('.further-info')[0]);
	var furtherInfo = $(this).siblings('.further-info')[0];
	$(furtherInfo).toggleClass('hidden'); 
	$(this).toggleClass('active');
}

// not working as expected
function collapseFurtherInfo(actionIndex){
  	var currentSlide = $('#actions').find('.action')[actionIndex];
  	console.log(currentSlide);
  	var $furtherInfo = $($(currentSlide).find('.further-info')[0]);
  	console.log($furtherInfo);
  	if(!$furtherInfo.hasClass('hidden')){
  		$furtherInfo.addClass('hidden');
  	}
}

function makeToggleLink(linkSelector, targetSelector, showText, hideText){
	var $link = linkSelector.charAt(0) == '#' ? $(linkSelector) : $(document.getElementsByClassName(linkSelector)[0]);
	var $target = $(targetSelector);
	$link.click(function(){
		var isHidden = $target.hasClass('hidden');
		var newText = isHidden ? hideText : showText;
		var oldText = isHidden ? showText : hideText;
		$target.toggleClass('hidden');
		$link.toggleClass('active');
		$link.html.replace(oldText, newText);
	});
}