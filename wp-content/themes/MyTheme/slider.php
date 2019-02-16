<div class="main_wrap">
	<section>
			<div class="slider">
					<div class="slider-wrapper theme-dark">
						<div id="slider" class="nivoSlider">
							<?php
                                $custom_slider = new WP_Query(
                                    array(
                                        'post_type' => 'customslider'
                                    )
                                );
                            
                            while($custom_slider->have_posts()): $custom_slider->the_post();
                            
                                the_post_thumbnail();
                            endwhile;
                            ?>
						</div>
					</div>
			</div>
	   </section>
</div>