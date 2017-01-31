		<?php 
			if( !in_array('mailchimp', params()) ){
				snippet('header');
				echo '<div class="wrapper">';
				snippet('action-detail', $page, false);
				echo '</div>';
				snippet('footer');
			}
			else{
				switch( $page->action_type()->value() ){
					case('electoral'):
						// blue template
						break;
					case('mindfulness'):
						// purple template
						break;
					case('stops_and_checks'):
						//pink template
						break;
					case('two_hours'):
						// grey template
						break;
					case('anti_trump'):
						// yello/orange template
						break;
					case('policy'):
						// green
						break;
				}
				snippet('action-email-blue');
			} 
		?>