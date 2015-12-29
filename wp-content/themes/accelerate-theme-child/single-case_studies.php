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
		<?php
			$services = get_field('services');
			$client = get_field('client');
			$site_link = get_field('site_link');
			$image_1 = get_field('image_1');
			$image_2 = get_field('image_2');
			$image_3 = get_field('image_3');

		?>

			<?php while ( have_posts() ) : the_post(); ?>
				<aside class="case-study-sidebar">
					<h1><?php echo the_title(); ?></h1>

					<h2><?php echo $services; ?></h2>
					<h5>Client: <?php echo $client; ?></h5>
					<?php the_content(); ?>
					<p><strong><a href="<?php echo $site_link; ?>">Visit Live Site</a></strong></p>
				</aside>


				<article class="case-study">
					<div class="case-study-content">
						<div class="case-study-images">
							<?php if($image_1) { ?>
							<img src="<?php echo $image_1; ?>" />
							<?php } ?>

							<?php if($image_2) { ?>
							<img src="<?php echo $image_2; ?>" />
							<?php } ?>

							<?php if($image_3) { ?>
							<img src="<?php echo $image_3; ?>" />
							<?php } ?>
						</div>
					</div>
				</article>
			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>