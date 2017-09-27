<?php
/**
 * The template for the content bottom widget areas on posts and pages
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

if ( ! is_active_sidebar( 'sidebar-2' ) && ! is_active_sidebar( 'sidebar-3' ) ) {
	return;
}

// If we get this far, we have widgets. Let's do this.
?>

<div class="bottom-center container row">
  <div class="col-sm-4" id="search">
  	<?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
		<div class="widget-area">
			<?php dynamic_sidebar( 'sidebar-2' ); ?>
		</div><!-- .widget-area -->
	<?php endif; ?>
  </div>
  <div class="col-sm-4">
	<?php if ( is_active_sidebar( 'sidebar-3' ) ) : ?>
		<div class="widget-area">
			<?php dynamic_sidebar( 'sidebar-3' ); ?>
		</div><!-- .widget-area -->
	<?php endif; ?>
  </div>
  <div class="col-sm-4">
	<?php if ( is_active_sidebar( 'sidebar-4' ) ) : ?>
		<div class="widget-area">
			<?php dynamic_sidebar( 'sidebar-4' ); ?>
		</div><!-- .widget-area -->
	<?php endif; ?>

  </div>

</div>



