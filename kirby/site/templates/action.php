		<?php 
			if( !in_array('mailchimp', params()) ){
				snippet('header');
				echo '<div class="wrapper">';
				snippet('action-detail', $page, false);
				echo '</div>';
				snippet('footer');
			}
			else{
				snippet('action-email');
			} 
		?>