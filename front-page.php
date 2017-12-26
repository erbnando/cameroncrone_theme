<?php get_header(); ?>
	<div class="container home">
		<div class="project-info-container">
		</div>
		<div class="overlay"></div>
		<div class="artwork-container">
			<?php 
			$taxonomies = array( 
			    'project',
			);			
			$args = array(
			    'orderby'           => 'name', 
			    'order'             => 'ASC',
			    'hide_empty'        => true, 
			    'exclude'           => array(), 
			    'exclude_tree'      => array(), 
			    'include'           => array(),
			    'number'            => '', 
			    'fields'            => 'all', 
			    'slug'              => '',
			    'parent'            => '',
			    'hierarchical'      => true, 
			    'child_of'          => 0,
			    'childless'         => false,
			    'get'               => '', 
			    'name__like'        => '',
			    'description__like' => '',
			    'pad_counts'        => false, 
			    'offset'            => '', 
			    'search'            => '', 
			    'cache_domain'      => 'core'
			); 

			$terms = get_terms($taxonomies, $args);
			
			$terms = get_terms( 'project' );
			if ( ! empty( $terms ) && ! is_wp_error( $terms ) ){
			    foreach ( $terms as $term ) { ?>
					<span class="helper"></span>
					<div class="artwork-wrap">
						<span class="helper"></span>
						<?php $term_link = get_term_link( $term ); ?>
						<a href="<?php echo $term_link; ?>"><img class="artwork" src="<?php the_field('project_image', $term); ?>"></a>
						<span class="project-data">
						<a href="<?php echo $term_link; ?>"><span class="title"><?php echo $term->name; ?></span></a><br>
						<?php the_field('year', $term); ?>
						</span>
					</div>
					<?php
				}
			}
		?>
		</div>
	</div>
<?php get_footer(); ?>