<?php get_header(); ?>
<?php get_template_part('navbar'); ?>  

<div class="main_wrap main-bg">
	<div class="wrap">
		   <main>
			<article>
                <?php 
				
				if(have_posts()) : ?>
				
				<h2 class="archive_heding">
				
		<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>

			<?php /* If this is a category archive */ if (is_category()) { ?>

				<?php _e('Archive For'); ?> '<?php echo single_cat_title(); ?>' <?php _e('Category'); ?>                                    

			<?php /* If this is a tag archive */  } elseif( is_tag() ) { ?>

				<?php _e('Archive For'); ?> <?php single_tag_title(); ?> <?php _e('Tag'); ?>

			<?php /* If this is a daily archive */ } elseif (is_day()) { ?>

				<?php _e(' Archive For '); ?> <?php the_time('F jS, Y'); ?>                                        

			<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>

				<?php _e('Archive For'); ?> <?php the_time('F, Y'); ?>                                    

			<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>

				<?php _e('Archive For'); ?> <?php the_time('Y'); ?>                                        

			<?php /* If this is a search */ } elseif (is_search()) { ?>

				<?php _e('Search Results'); ?>                            

			<?php /* If this is an author archive */ } elseif (is_author()) { ?>

				<?php _e('Author Archive For'); ?> '<?php echo get_the_author(); ?>' 
			<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>

				<?php _e('Blog Archives'); ?>                                        

	<?php } ?>							
				</h2>
                <hr>
                
                <?php
                   
                        while(have_posts()): the_post(); ?>
                
                    <div class="art1">
                        <a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
                        <div class="post-meta">
                            Author: <?php the_author_posts_link(); ?> | Posten On: <span><?php the_time('M d, Y'); ?></span> | Category: <?php the_category(', '); ?> | Comments: <?php comments_popup_link('0', '1', '%', 'comment-class', 'Comments off'); ?>
                        </div>
                        <span class="thumb-size"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                        <p><?php the_content(); ?></p></span>
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