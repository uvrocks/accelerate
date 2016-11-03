<?php
/**
 * The template for displaying about page.
 *
 * This is the template that displays the about page.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">
				<div class="aboutpage">
					
					<ul class="aboutpage-services">
			     	<?php while ( have_posts() ) : the_post();
						$service_1 = get_field('service_1');
						$service_1_desc = get_field('service_1_desc');
						$service_2 = get_field('service_2');
						$service_2_desc = get_field('service_2_desc');
						$service_3 = get_field('service_3');
						$service_3_desc = get_field('service_3_desc');
						$service_4 = get_field('service_4');
						$service_4_desc = get_field('service_4_desc');
						$image_1 = get_field('image_1');
						$image_2 = get_field('image_2');
						$image_3 = get_field('image_3');
						$image_4 = get_field('image_4');
						$size = "medium";
					?>
					<?php the_content(); ?>
					
					<li class="individual-service">
						<h5><?php echo $service_1; ?></h5>
						<p><?php echo $service_1_desc; ?></p>
						<figure>
						<?php echo wp_get_attachment_image($image_1, $size); ?>
						</figure>
					</li>
					<li class="individual-service">
						<h5><?php echo $service_2; ?></h5>
						<p><?php echo $service_2_desc; ?></p>
						<figure>
						<?php echo wp_get_attachment_image($image_2, $size); ?>
						</figure>
					</li>
					<li class="individual-service">
						<h5><?php echo $service_3; ?></h5>
						<p><?php echo $service_3_desc; ?></p>
						<figure>
						<?php echo wp_get_attachment_image($image_3, $size); ?>
						</figure>
					</li>
					<li class="individual-service">
						<h5><?php echo $service_4; ?></h5>
						<p><?php echo $service_4_desc; ?></p>	
						<figure>
						<?php echo wp_get_attachment_image($image_4, $size); ?>
						</figure>
					</li>
			     	<?php endwhile; ?> 
			   
					</ul>
				</div>	
			

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>