		<form method="get" id="searchform" action="<?php bloginfo('url'); ?>">
			<input type="text" value="<?=$s; ?>" name="s" id="s" />
			<input type="submit" id="searchsubmit" name="Submit" value="<?php _e('Go!'); ?>" />
		</form>