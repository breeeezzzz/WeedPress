		<?php if ( is_user_logged_in() ) { ?>
			<style  type="text/css" media="screen">
				.logged-in-user { display:block !important; }
			</style>
		<?php
		} else { ?>
			<style  type="text/css" media="screen">
				.logged-in-user { display:none !important; }
			</style>
		<?php } ?>	
		
		<?php if ( is_user_logged_in() ) { ?>
			<style  type="text/css" media="screen">
				.logged-out-user { display:none !important; }
			</style>
		<?php
		} else { ?>
			<style  type="text/css" media="screen">
				.logged-out-user { display:block !important; }
			</style>
		<?php } ?>	