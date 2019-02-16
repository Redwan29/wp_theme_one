<?php get_header(); ?>
<?php get_template_part('navbar'); ?>   
<?php get_template_part('slider'); ?>  

<div class="main_wrap main-bg">
	<div class="wrap">
		   <main>
			<article>
                
                <?php
                    if(have_posts()):
                        while(have_posts()): the_post(); ?>
                
                    <div class="art1">
                        <a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
                        <div class="post-meta">
                            Author: <?php the_author_posts_link(); ?> | Posten On: <span><?php the_time('M d, Y'); ?></span> | Category: <?php the_category(', '); ?> | Comments: <?php comments_popup_link('0', '1', '%', 'comment-class', 'Comments off'); ?>
                        </div>
                        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                        <p><?php the_excerpt(); ?></p>
                    </div>
                
                
               <?php endwhile;
                else:
                    echo '<h3>No post available</h3>';
                endif; 
                ?>
                
			</article>
<?php get_sidebar(); ?>               
            
            <?php if (function_exists("pagination")) {pagination($additional_loop->max_num_pages);} ?>   
                  

<?php get_footer(); ?>