<?php get_header(); ?>			
<?php if (have_posts()) : while(have_posts()) : the_post(); ?>
	<div class="container page">						
		<div class="overlay"></div>
		<?php the_content(); ?>
	</div>
<?php endwhile; else : ?>
	<div class="no-posts">
		<h1><?php echo "No posts were found!"; ?></h1>
	</div>
<?php endif; ?>			
<?php get_footer(); ?>