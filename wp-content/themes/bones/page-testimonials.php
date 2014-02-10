<?php get_header(); ?>

<!-- <?php echo basename(__FILE__) ?> -->

<div class="container">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<article id="post-<?php the_ID(); ?>" <?php post_class( 'clearfix' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

		<header class="article-header">

			<h1 class="page-title" itemprop="headline"><?php the_title(); ?></h1>

		</header>

		<section class="entry-content clearfix" itemprop="articleBody">
			<?php the_content(); ?>
		</section>

		<section class="testimonials">

			<div id="this-carousel-id" class="carousel slide">
                <div class="carousel-inner">

					<?php
						// Get all children of this post; these are our testimonials.
						$args = array(
							'post_parent' => $post->ID,
							'orderby' => 'menu_order',
							'post_type' => 'page'
						);

						// The Query
						$testimonial_query = new WP_Query( $args );
					?>

					<?php if ( $testimonial_query->have_posts() ) : ?>
						<?php while ( $testimonial_query->have_posts() ) : $testimonial_query->the_post(); ?>
                        	<div class="item <?php if(!isset($first)) { print 'active'; $first = 1; } ?>">
                            	<div class="carousel-caption">
									<?php the_content(); ?>
								</div>
							</div>
						<?php endwhile; ?>
					<?php endif; ?>

					<?php wp_reset_postdata(); ?>
				</div>

				<!--  next and previous controls here
					href values must reference the id for this carousel -->
				<a class="carousel-control left" href="#this-carousel-id" data-slide="prev">&lsaquo;</a>
				<a class="carousel-control right" href="#this-carousel-id" data-slide="next">&rsaquo;</a>

			</div>

		</section>

		<footer class="article-footer">
			<?php the_tags( '<span class="tags">' . __( 'Tags:', 'bonestheme' ) . '</span> ', ', ', '' ); ?>

		</footer>

		<?php comments_template(); ?>

	</article>

	<?php endwhile; else : ?>

			<article id="post-not-found" class="hentry clearfix">
				<header class="article-header">
					<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
				</header>
				<section class="entry-content">
					<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
				</section>
				<footer class="article-footer">
						<p><?php _e( 'This is the error message in the page.php template.', 'bonestheme' ); ?></p>
				</footer>
			</article>

	<?php endif; ?>

</div>

<?php get_footer(); ?>
