<?php get_header(); ?>
<?php get_template_part('navbar'); ?>  

<div class="main_wrap main-bg">
	<div class="wrap">
		   <main>
			<article>
                <?php
                    if(have_posts()):
                        while(have_posts()): the_post(); ?>
              
                        <a href="<?php the_permalink(); ?>"><h1><?php the_title(); ?></h1></a>
                        
                        <p><?php the_content(); ?></p>
                    
                
               <?php endwhile;
                else:
                    echo '<h3>No post available</h3>';
                endif; 
                ?>
                
			</article>
               
<?php get_sidebar(); ?>
<?php get_footer(); ?>