<div class="wrapper">
<h2>Upcoming Events</h2>
<p>Please RSVP</p>
<?php
	$upcoming_events = $pages->find('educate-act-events')->children()->visible()->filter(function($page){return $page->date(null, 'datetime') >= date_timestamp_get(date_create());})->sortBy('datetime', 'asc'); 
	foreach ($upcoming_events as $page){
		snippet('event', array('page'=>$page));
	}
?>

<?php
	$past_events = $pages->find('educate-act-events')->children()->filter(function($page){return $page->date(null, 'datetime') <= date_timestamp_get(date_create());})->sortBy('datetime', 'asc');
	if(count($past_events) > 0){ echo '<h2>Past</h2>'; } 
	foreach ($past_events as $page){
		snippet('event', array('page'=>$page));
	}
?>
</div>