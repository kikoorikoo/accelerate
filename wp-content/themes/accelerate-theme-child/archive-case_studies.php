<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">
			<?php while ( have_posts() ) : the_post(); 

			$size = "full";
			$services = get_field('services');
			$image_1 = get_field('image_1');


			?>
			<article class="case-study">
					<aside class="case-study-sidebar">
						<h1><a href="<?php the_permalink(); ?>"><?php echo the_title(); ?></a></h1>

						<h2><?php echo $services; ?></h2>
						<?php the_excerpt(); ?>
						<p><strong><a href="<?php the_permalink(); ?>">View Project</a>&nbsp;<span>&rsaquo;</span></strong></p>
					</aside>


					<div class="case-study-content">
						<div class="case-study-images">
						<a href="<?php the_permalink(); ?>">
							<?php if($image_1) { ?>
							<?php echo wp_get_attachment_image( $image_1, $size ); ?>
							<?php } ?>
							</a>
						</div>
					</div>
				</article>
			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>