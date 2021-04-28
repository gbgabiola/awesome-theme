<?php

get_header();

	if(have_posts()) {
		while(have_posts()) {
      the_post(); ?>
			<p><?php the_content(); ?></p>
			<h3><?php the_title(); ?></h3>
			<hr>

		<?php
    }
  }

get_footer();
