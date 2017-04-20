<?php 
   /*
   Template Name: Left Side Bar layout
   Template Post Type: post, page, event
   */
   // Page code here...
   
   get_header(); ?>
<div class="container">
   <div class="row">
   <div class="col-sm-8">
      <?php
         if (have_posts()) :
         while (have_posts()) : the_post(); ?>
		<?php 	$children = get_pages('child_of='.$post->ID);
  			if( count( $children ) != 0 ) { ?>
  
	    	<nav class="navbar navbar-default">
	         <div class="container-fluid">
	            <div class="navbar-header">
	               <a class="navbar-brand" href="<?php echo get_the_permalink(get_top_ancestor_id()); ?>"><?php echo get_the_title(get_top_ancestor_id()); ?></a>
	            </div>
	            <ul class="nav navbar-nav">
	               <?php
	                  $args = array(
	                  	'child_of' => get_top_ancestor_id(),
	                  	'title_li' => ''
	                  );
	                  
	                  ?>
	               <?php wp_list_pages($args); ?>
	            </ul>
	         </div>
	      </nav>
		<?php  } ?>	      
      <div class="post">
         <?php the_content(); ?>
      </div>
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
   <div class="col-md-4">
      <div class="post-right-sidebar wow fadeInUp animated" data-wow-delay=".5s">
         <div class="row">
            <?php dynamic_sidebar( 'sidebar-widgets' ); ?>
         </div>
      </div>
   </div>
</div>
</div>
<?php get_footer(); ?>