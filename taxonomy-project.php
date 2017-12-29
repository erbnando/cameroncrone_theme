<?php get_header(); ?>			
	<div class="container project">
		<div class="project-info-container">
			<div class="project-info">					
				<p class="title"><?php $term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) ); echo $term->name;?></p>
				<p><?php the_field('year', $term); ?></p>	
				<p><?php the_field('project_summary', $term); ?></p>	
				<p><?php the_field('dimensions', $term); ?></p>	
				<p><?php
				$termDiscription = term_description( '', get_query_var( 'taxonomy' ) );
				if($termDiscription != '') : ?>
					<div class="tag-desc"><?php echo $termDiscription; ?></div>
				<?php endif; ?></p>
			</div>
		</div>
		<div class="overlay"></div>
		<div class="artwork-container">
		<?php if (have_posts()) : while(have_posts()) : the_post(); ?>
			<?php the_content(); ?>
			<span class="helper"></span>

			<div class="artwork-wrap">
				
				<div>
					<?php $term_link = get_term_link( $term ); ?>
					<?php if( get_field('artwork_image') ): ?>
					<a><img class="artwork" src="<?php echo get_field('artwork_image')['sizes']['artwork']; ?>" /></a>
					<?php endif; ?>
					<?php if( get_field('artwork_text') ): ?>
					<span class="project-data"><?php the_field('artwork_text'); ?></span>
					<?php endif; ?>
				</div>

			</div>

		<?php endwhile; else : ?>
		</div>
	</div>
	<div class="no-posts">
		<h1><?php echo "No posts were found!"; ?></h1>
	</div>
<?php endif; ?>			
<?php get_footer(); ?>