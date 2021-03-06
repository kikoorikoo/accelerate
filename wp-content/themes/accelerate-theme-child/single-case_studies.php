<?php
/**
 * The template for single case studies pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate
 * @since Accelerate 1.1
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">

			<?php while ( have_posts() ) : the_post(); 
				$size = "full";
				$services = get_field('services');
				$client = get_field('client');
				$site_link = get_field('site_link');
				$image_1 = get_field('image_1');
				$image_2 = get_field('image_2');
				$image_3 = get_field('image_3');
			?>

				<article class="case-study">
					<aside class="case-study-sidebar">
						<h1><?php echo the_title(); ?></h1>

						<h2><?php echo $services; ?></h2>
						<h5>Client: <?php echo $client; ?></h5>
						<?php the_content(); ?>
						<p><strong><a href="<?php echo $site_link; ?>">Visit Live Site</a></strong></p>
					</aside>


					<div class="case-study-content">
						<div class="case-study-images">
							<?php if($image_1) { ?>
							<?php echo wp_get_attachment_image( $image_1, $size ); ?>
							<?php } ?>

							<?php if($image_2) { ?>
							<?php echo wp_get_attachment_image( $image_2, $size ); ?>
							<?php } ?>

							<?php if($image_3) { ?>
							<?php echo wp_get_attachment_image( $image_3, $size ); ?>
							<?php } ?>
						</div>
					</div>
				</article>
			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>