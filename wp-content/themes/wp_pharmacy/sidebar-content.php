<?php
/**
 * The Content Sidebar
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

 if (! is_active_sidebar( 'sidebar-2' ) ) : ?>

<?php else : ?>
<div class="widget well advanced-sidebar-menu">
<?php dynamic_sidebar( 'sidebar-2' ); ?>
<?php endif; ?>