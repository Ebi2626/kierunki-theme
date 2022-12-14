<?php
/**
 * Single post partial template
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;
?>

<article <?php post_class(); ?> id="post-
  <?php the_ID(); ?>">

  <header class="entry-header">
    <h1 class="entry-title sectionTitle">
      <?php echo get_field('autor'); ?>
      -
      <?php echo get_the_title(); ?>
    </h1>
  </header><!-- .entry-header -->

  <?php echo get_the_post_thumbnail($post->ID, 'large'); ?>

  <div class="entry-content">

    <?php
    the_content();
    ?>

  </div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->