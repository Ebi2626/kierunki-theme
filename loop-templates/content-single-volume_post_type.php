<?php
/**
 * Single post partial template
 *
 * @package Understrap
 */

// Dodajemy tytuł, numer, spis treści (linki do wpisów) - tytuł np kierunki wrzesien 2023 albo kierunki 01/23

// Exit if accessed directly.
defined('ABSPATH') || exit;
?>

<article <?php post_class(); ?> id="post-
  <?php the_ID(); ?>">

  <div class="entry-content volume">
    <?php
    if (have_rows('numer_kierunkow')):
      the_row();
      $pdfData = get_sub_field('plik_pdf');
      $excerptPattern = "[...]";
      $excerpt = get_the_excerpt();
      $positionToTrim = strpos($excerpt, $excerptPattern);
      $excerpt = substr($excerpt, 0, $positionToTrim);
      $thumbnail_id = get_post_thumbnail_id(get_the_ID());
    ?>
    <header class="volume__header container">
      <h1 class="volume__headerTitle text-center">
        <?php the_title(); ?>
      </h1>
      <p class="volume__headerText lead">
        <?php echo $excerpt; ?>
      </p>
    </header>
    <section class="volume__section container">
      <h2 class="volume__title text-center sectionTitle">W numerze</h2>
      <div class="volume__content">
        <div class="volume__contentImage">
          <img class="volume__image img-fluid" src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>"
            alt="<?php echo get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true); ?>" />
        </div>
        <?php
      $tagId = get_fields(get_the_ID())['numer_kierunkow']['tag_okreslajacy_numery'];
      $query_articles_by_tag = array(
        'post_type' => 'post',
        'post_status' => 'publish',
        'tag_id' => $tagId,
      );
      $volume_articles = new WP_Query($query_articles_by_tag);
        ?>

        <ul class="volume__list list-group">
          <?php while ($volume_articles->have_posts()): ?>
          <?php $volume_articles->the_post(); ?>
          <li class="volume__listItem list-group-item">
            <a href="<?php the_permalink(); ?>" class="volume__listItemLink d-block">
              <?php echo get_field('autor'); ?> -
              <?php echo the_title(); ?>
            </a>
          </li>
          <?php endwhile; ?>
        </ul>
      </div>
      <footer class="volume__footer">
        <a download="<?php the_title(); ?>" href="<?php echo $pdfData['url']; ?>" class="btn btn-primary"><i
            aria-hidden="true" class="fa fa-download d-inline-block me-2"></i>Pobierz PDF</a>
        <a href="<?php echo $pdfData['url']; ?>" rel="noopener noreferrer" target="_blank" class="btn btn-secondary"><i
            aria-hidden="true" class="fa fa-external-link d-inline-block me-2"></i>Otwórz PDF</a>
      </footer>
    </section>

    <!--<object class="embed" data="<?php
      // echo $pdfData['url']; 
    ?>" 
    width="100%" height="800px"></object> -->

    <?php endif; ?>
  </div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->