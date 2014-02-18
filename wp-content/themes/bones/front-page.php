<?php get_header(); ?>
<?php

$map = 	<<<EOS
		<section class="map">
            <div id="map" class="row">
                <div class="container">
                <div class="col-sm-12">
                <h2>Find Your City and State Code</h2>
                </div>
                    <div id="plot-map-container" style="margin:auto;"></div>
                </div><!--end container-->
            </div><!--end map row -->
		</section>
EOS;

?>

	<div class="container">


		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

				<section class="entry-content clearfix" itemprop="articleBody">
					<?php
						print str_replace('[[MAP]]', $map, get_the_content());
					?>
				</section>

				<footer class="article-footer">
					<?php the_tags( '<p class="tags"><span class="tags-title">' . __( 'Tags:', 'bonestheme' ) . '</span> ', ', ', '</p>' ); ?>

				</footer>

				<?php comments_template(); ?>

			</article>

		<?php endwhile; ?>

		<?php else : ?>

			<article id="post-not-found" class="hentry clearfix">
					<header class="article-header">
						<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
					</header>
					<section class="entry-content">
						<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
					</section>
					<footer class="article-footer">
							<p><?php _e( 'This is the error message in the single.php template.', 'bonestheme' ); ?></p>
					</footer>
			</article>

		<?php endif; ?>



	</div>

<?php get_footer(); ?>
