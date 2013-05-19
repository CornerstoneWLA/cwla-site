<?php
/**
 * The Sidebar containing the primary blog sidebar
 *
 * @package WordPress
 * @subpackage skeleton
 * @since skeleton 0.1
 */
?>
<?php do_action('st_before_sidebar');?>

<div class="entry-meta">
	<?php skeleton_posted_on(); ?>
</div><!-- .entry-meta -->

<?php if ( get_the_author_meta( 'description' ) ) : // If a user has filled out their description, show a bio on their entries  ?>
					<div id="entry-author-info">
						<div id="author-avatar">
							<?php echo get_avatar( get_the_author_meta( 'user_email' ), apply_filters( 'skeleton_author_bio_avatar_size', 60 ) ); ?>
						</div><!-- #author-avatar -->
						<div id="author-description">
							<h2><?php printf( esc_attr__( '%s', 'skeleton' ), get_the_author() ); ?></h2>
							<?php the_author_meta( 'description' ); ?>
							<div id="author-link">
								<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>">
									<?php printf( __( 'View all posts by %s <span class="meta-nav">&rarr;</span>', 'skeleton' ), get_the_author() ); ?>
								</a>
							</div><!-- #author-link	-->
						</div><!-- #author-description -->
					</div><!-- #entry-author-info -->
<?php endif; ?>

<?php // primary widget area
	if ( is_active_sidebar( 'primary-widget-area' ) ) : ?>
	<ul>
		<?php dynamic_sidebar( 'primary-widget-area' ); ?>
	</ul>
<?php endif; // end primary widget area ?>


<?php do_action('st_after_sidebar');?>

