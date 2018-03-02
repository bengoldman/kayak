
<!-- THE HOME PAGE -->
<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap cf">

						<main id="main" class="m-all t-2of3 d-5of7 cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
 <?php //Front page introduction and sidebar ?>
                                <div class="flex-container">
                                    <div class="front-intro" itemprop="articleBody">
                                        <h1>Welcome Aboard!</h1>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Odio aenean sed adipiscing diam donec. Mi proin sed libero enim. Molestie at elementum eu facilisis sed odio morbi. Quisque egestas diam in arcu cursus euismod quis viverra. Duis at consectetur lorem donec massa. Ultrices neque ornare aenean euismod elementum nisi. Dolor sit amet consectetur adipiscing elit pellentesque. Habitant morbi tristique senectus et netus et malesuada. Sit amet consectetur adipiscing elit pellentesque habitant morbi tristique senectus. Enim sed faucibus turpis in eu. Sed euismod nisi porta lorem mollis aliquam. Amet nisl suscipit adipiscing bibendum est ultricies integer quis auctor. Odio eu feugiat pretium nibh ipsum consequat nisl. Enim blandit volutpat maecenas volutpat blandit aliquam. In hac habitasse platea dictumst. Imperdiet dui accumsan sit amet nulla facilisi morbi.
</p>
<p>Fermentum et sollicitudin ac orci phasellus egestas tellus rutrum. Nunc mattis enim ut tellus elementum sagittis vitae. Turpis nunc eget lorem dolor sed viverra. Elementum curabitur vitae nunc sed velit dignissim sodales ut. Tempus imperdiet nulla malesuada pellentesque elit eget gravida cum. Elit scelerisque mauris pellentesque pulvinar pellentesque habitant morbi tristique senectus. Eleifend mi in nulla posuere sollicitudin aliquam ultrices. Porta nibh venenatis cras sed felis eget velit aliquet sagittis. Sed libero enim sed faucibus turpis in eu mi bibendum. Gravida arcu ac tortor dignissim convallis aenean et. Tempor commodo ullamcorper a lacus vestibulum. At lectus urna duis convallis convallis tellus. Enim facilisis gravida neque convallis a cras. Iaculis urna id volutpat lacus laoreet non. Cursus sit amet dictum sit. Id aliquet risus feugiat in. Egestas fringilla phasellus faucibus scelerisque eleifend donec pretium vulputate. Sed id semper risus in hendrerit gravida rutrum quisque non. Gravida quis blandit turpis cursus in hac habitasse platea dictumst.</p>
                                    </div>
                                    <!-- loads featured image -->
									<div><?php the_post_thumbnail( 'bones-thumb-600' ); ?></div>

                                </div><!-- End container -->


								<footer class="article-footer">

                  <?php the_tags( '<p class="tags"><span class="tags-title">' . __( 'Tags:', 'bonestheme' ) . '</span> ', ', ', '</p>' ); ?>

								</footer>

								<?php comments_template(); ?>

							</article>

							<?php endwhile; else : ?>

									<article id="post-not-found" class="hentry cf">
											<header class="article-header">
												<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
										</header>
											<section class="entry-content">
												<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
										</section>
										<footer class="article-footer">
												<p><?php _e( 'This is the error message in the page-custom.php template.', 'bonestheme' ); ?></p>
										</footer>
									</article>

							<?php endif; ?>

						</main>

				</div>

			</div>


<?php get_footer(); ?>
