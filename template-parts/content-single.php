<?php
/**
 * Content for pages
 *
 * @package Portland
 * @since 1.0.0
 */

// Use this hook to add and remove actions.
do_action( 'portland_template_part_setup' );
?>

<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php do_action( 'portland_entry_top' ); ?>

	<?php do_action( 'portland_entry_title_before' ); ?>
	<h1 class="<?php echo apply_filters( 'portland_entry_title_class', 'entry-title' ); ?>">
		<?php the_title(); ?>
	</h1>
	<?php do_action( 'portland_entry_title_after' ); ?>

	<?php portland_post_meta( array( 'date' ), array( 'display_titles' => false ) ); ?>

	<?php do_action( 'portland_entry_content_before' ); ?>
	<div class="<?php echo apply_filters( 'portland_entry_content_class', 'entry-content' ); ?>">
		<?php the_content(); ?>
	</div><!--.entry-content-->
	<?php do_action( 'portland_entry_content_after' ); ?>

	<?php
		// Display additional post meta (function located in includes/helpers.php file).
		portland_post_meta( array( 'categories' ) );

		// Display post naviation (WordPress core function).
		the_post_navigation();

		// Loads comments.php file.
		comments_template();
	?>

	<?php do_action( 'portland_entry_bottom' ); ?>
</div><!-- #post-number -->
