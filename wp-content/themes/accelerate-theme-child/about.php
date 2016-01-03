<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * Template name: About Page
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

			<?php while ( have_posts() ) : the_post(); 
				$size = "full";
				$page_heading = get_field('page_heading');
				$overview_text = get_field('overview_text');
				$section_1_heading = get_field('section_1_heading');
				$section_1_image = get_field('section_1_image');
				$section_1_text = get_field('section_1_text');
				$section_2_heading = get_field('section_2_heading');
				$section_2_image = get_field('section_2_image');
				$section_2_text = get_field('section_2_text');
				$section_3_heading = get_field('section_3_heading');
				$section_3_image = get_field('section_3_image');
				$section_3_text = get_field('section_3_text');
				$section_4_heading = get_field('section_4_heading');
				$section_4_image = get_field('section_4_image');
				$section_4_text = get_field('section_4_text');
			?>

<section class="home-page">
	<div class="site-content">
			<div class='homepage-hero'>
				<?php the_content(); ?>
			</div>
			</div>
</section>
	<div id="primary" class="site-content">
		<div id="content" role="main">

			<article class="about">
					
					<div class="about-page-overview-section">
						<div style="text-align: center; ">
							<h4 style="text-transform: uppercase;"><?php echo $page_heading; ?></h4>
							<?php echo $overview_text; ?>
						</div>
						<div class="about-page-sections">
							<div class="about-page-odd-section">
								<?php if($section_1_image) { ?>
									<div class="about-page-odd-image">
										<?php echo wp_get_attachment_image( $section_1_image, $size ); ?>
									</div>
								<?php } ?>
								<div class="about-page-odd-text">
									<h3><?php echo $section_1_heading; ?></h3>
									<p><?php echo $section_1_text; ?></p>
								</div>
							</div>
							<div class="about-page-even-section">
								<?php if($section_2_image) { ?>
									<div class="about-page-even-image">
										<?php echo wp_get_attachment_image( $section_2_image, $size ); ?>
									</div>
								<?php } ?>
								<div class="about-page-even-text">
									<h3><?php echo $section_2_heading; ?></h3>
									<p><?php echo $section_2_text; ?></p>
								</div>
							</div>
							<div class="about-page-odd-section">
								<?php if($section_3_image) { ?>
									<div class="about-page-odd-image">
										<?php echo wp_get_attachment_image( $section_3_image, $size ); ?>
									</div>
								<?php } ?>
								<div class="about-page-odd-text">
									<h3><?php echo $section_3_heading; ?></h3>
									<p><?php echo $section_3_text; ?></p>
								</div>
							</div>
							<div class="about-page-even-section">
								<?php if($section_4_image) { ?>
									<div class="about-page-even-image">
										<?php echo wp_get_attachment_image( $section_4_image, $size ); ?>
									</div>
								<?php } ?>
								<div class="about-page-even-text">
									<h3><?php echo $section_4_heading; ?></h3>
									<p><?php echo $section_4_text; ?></p>
								</div>
							</div>
						</div>
					</div>

				</article>

		</div><!-- #content -->
	</div><!-- #primary -->
			<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>