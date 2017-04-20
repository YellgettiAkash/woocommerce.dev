<?php 
/*
Template Name: Full-width layout
Template Post Type: post, page, event
*/
// Page code here...

 get_header(); ?>
	<div class="container">
	<?php
	if (have_posts()) :
	while (have_posts()) : the_post(); ?>
	
	<?php 
		$id = ['child_of' =>$post->ID];
		wp_list_pages($id);
	?>

	<article class="post">
		<?php the_content(); ?>
	</article>
	
	<?php endwhile;
	
	else :
		echo '<p>No content found</p>';
	
	endif;
	?>

	<?php the_posts_pagination( array(
    'mid_size' => 2,
    'prev_text' => __( 'previous', 'textdomain' ),
    'next_text' => __( 'next', 'textdomain' ),
) ); ?>
	</div>
	<?php get_footer(); ?>