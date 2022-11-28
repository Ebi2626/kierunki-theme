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

  <div class="entry-content">
    <?php
    if (have_rows('numer_kierunkow')):
        the_row();
        $pdfData = get_sub_field('plik_pdf');
    ?>
    <h1 class="text-center">
      <?php the_title(); ?>
    </h1>

    <object class="embed" data="<?php echo $pdfData['url']; ?>" width="100%" height="800px"></object>

    <?php endif; ?>
  </div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->