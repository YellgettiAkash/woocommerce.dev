
	<?php get_header(); ?>
	<div class="container">
	<?php
	if (have_posts()) :
	while (have_posts()) : the_post(); ?>
	
	<article class="post">
		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
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