<div class="wrapper">
<h2>Upcoming Events</h2>
<p>Please RSVP</p>
<?php
	date_default_timezone_set('America/New_York');
	$upcoming_events = $pages->find('educate-act-events')->children()->visible()->filter(function($page){
		return $page->date(null, 'datetime') >= date_timestamp_get(date_create());
	})
	->sortBy('datetime', 'asc'); 
	
	foreach ($upcoming_events as $page){
		snippet('event', array('page'=>$page));
	}
?>

<?php
	$past_events = $pages->find('educate-act-events')->children()->filter(function($page){
		return $page->date(null, 'datetime') <= date_timestamp_get(date_create());
	})
	->sortBy('datetime', 'desc');
	
	if(count($past_events) > 0){ echo '<h2>Past Events</h2>'; } 
	
	foreach ($past_events as $page){
		snippet('event', array('page'=>$page));
	}
?>
</div>