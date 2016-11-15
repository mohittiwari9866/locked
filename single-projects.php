<?php get_header(); ?>

<!-- #Container Area -->
<div id="container">

	<div class="wrapper clearfix">
		<!------ Content ------>
		<div id="content" class="common-contents">
			<?php if(have_posts()) : ?>
			<?php while(have_posts()) : the_post(); ?>

			<div id="post_<?php the_ID(); ?>" class="post">
				<h2 class="entry-title">
					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
						<?php the_title(); ?>
					</a>
				</h2>
				<div class="entry">

					<?php
					
					$program_list =  get_field( "steps" , 462);
					print_R($program_list);
					?>
					
				</div>
				
			</div>
			
			<?php endwhile; ?>

			<div class="next_prev_navigation">
				<div class="next_post_link left_align"><?php previous_post_link('&larr; %', 'Previous', 'no'); ?></div>
				<div class="previous_post_link right_align"><?php next_post_link('% &rarr;', 'Next', 'no'); ?></div>
			</div>

			<?php else : ?>
			<div class="post"><h2><?php _e('Not Found', 'sample-theme'); ?></h2></div>
			<?php endif; ?>		

		</div>
		<!------ Content ------>
		Mohit tiwari
	</div>
</div>

<?php get_footer(); ?>
