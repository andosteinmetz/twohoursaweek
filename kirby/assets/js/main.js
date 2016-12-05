var $calendarToggle,
	$submissionForm,
	$formContainer,
	$calendarContainer,
	$calendarToggle,
	$readMoreLinks;

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
		nextArrow: '<span class="slick-next"> > </span>',
		prevArrow: '<span class="slick-prev"> < </span>'
	});

	$('#actions').on('beforeChange', function(event, slick, currentSlide, nextSlide){
		//collapseFurtherInfo(currentSlide);
	});

	$('#calendar-toggle').click(toggleCalendar);
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
		var text = $container.hasClass('hidden')
		$formContainer.addClass('hidden');
	}
}

function toggleCalendar(){
	var isHidden = $calendarContainer.hasClass('hidden');
	var newText = isHidden ? 'Hide Calendar' : 'View Calendar';
	$calendarContainer.toggleClass('hidden');
	$calendarToggle.text(newText);
}

function readMore(){
	console.log($(this).siblings('.further-info')[0]);
	var furtherInfo = $(this).siblings('.further-info')[0];
	$(furtherInfo).toggleClass('hidden'); 
}

function collapseFurtherInfo(slide){
  	var currentSlide = $('#actions').find('.action')[slide];
  	console.log(currentSlide);
  	var $furtherInfo = $($(currentSlide).find('.further-info')[0]);
  	console.log($furtherInfo);
  	if(!$furtherInfo.hasClass('hidden')){
  		$furtherInfo.addClass('hidden');
  	}
}