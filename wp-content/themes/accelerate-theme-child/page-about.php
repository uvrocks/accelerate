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
		     	<?php while ( have_posts() ) : the_post();
				$our_services = get_field('our_services');
				$service_1 = get_field('service_1');
				$service_1_desc = get_field('service_1_desc');
				$service_2 = get_field('service_2');
				$service_2_desc = get_field('service_2_desc');
				$service_3 = get_field('service_3');
				$service_3_desc = get_field('service_3_desc');
				$service_4 = get_field('service_4');
				$service_4_desc = get_field('service_4_desc');
				$service_1_image = get_field('service_1_image');
				$service_2_image = get_field('service_2_image');
				$service_3_image = get_field('service_3_image');
				$service_4_image = get_field('service_4_image');
				$size = "full";
				?>
					
				<?php the_content(); ?>
				
				<div class="tagline">		
					<h5>Our Services</h5>
					<p> We take pride in our clients and the content we create for them.<br> 
							Here's a brief overview of our offered services</p>
				</div>			
					
				<div class="service">
					<div class="individual-service">
					<figure class="left">
						<?php echo wp_get_attachment_image($service_1_image, $size); ?>
					</figure>
					
						<h5><?php echo $service_1; ?></h5>
						<p><?php echo $service_1_desc; ?></p>
					</div>						
				</div>	
								
				<div class="service">
					<div class="individual-service">
					<figure class="right">
						<?php echo wp_get_attachment_image($service_2_image, $size); ?>
					</figure>
									
						<h5><?php echo $service_2; ?></h5>
						<p><?php echo $service_2_desc; ?></p>								
					</div>
				</div>	
							
				<div class="service">
					<div class="individual-service">
					<figure class=left>
						<?php echo wp_get_attachment_image($service_3_image, $size); ?>
					</figure>			
								
						<h5><?php echo $service_3; ?></h5>
						<p><?php echo $service_3_desc; ?></p>								
					</div>
				</div>
							
				<div class="service">
					<div class="individual-service">
					<figure class="right">
						<?php echo wp_get_attachment_image($service_4_image, $size); ?>
					</figure>
					
						<h5><?php echo $service_4; ?></h5>
						<p><?php echo $service_4_desc; ?></p>									
					</div>
				</div>	
								
			    <?php endwhile; ?> 
				
				<div class="contact-bar">
					<div class="contact-wrap">
						<h5>Interested in working with us?</h5>
						<a class="button" href="<?php echo home_url(); ?>/contact-us">Contact Us</a>
					</div>
				</div>		
			
			
		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>