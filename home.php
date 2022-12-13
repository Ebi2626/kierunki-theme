<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();

$container = get_theme_mod('understrap_container_type');
?>

<?php get_template_part('global-templates/home-hero'); ?>

<?php get_template_part('global-templates/last-publish-by-tag'); ?>


<div class="wrapper" id="index-wrapper">

  <div class="<?php echo esc_attr($container); ?>" id="content" tabindex="-1">

    <div class="row">

      <?php
      // Do the left sidebar check and open div#primary.
      get_template_part('global-templates/left-sidebar-check');
      ?>

      <main class="site-main" id="main">
        <?php
        $query_volumes = array(
          'post_type' => 'volume_post_type',
          'post_status' => 'publish',
          'posts_per_page' => 15
        );
        $recent_volumes = new WP_Query($query_volumes);
        ?>
        <section class="articles wrapper">
          <h2 class="articles__title text-center sectionTitle">Najnowsze numery</h2>
          <div class="articles__wrapper mx-4">
            <?php if ($recent_volumes->have_posts()): ?>
            <ul class="articles__grid ps-0">
              <?php
              remove_filter('get_the_excerpt', 'wpautop');
              while ($recent_volumes->have_posts()):
                $recent_volumes->the_post();
                $thumbnail_id = get_post_thumbnail_id(get_the_ID());
              ?>
              <li class="card articles__gridItem">
                <img src="<?php the_post_thumbnail_url(); ?>" class="card-img-top"
                  alt="<?php echo get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true); ?>">
                <div class="card-body">
                  <p class="card-text">
                    <?php
                $trimmedExcerpt = trim(wp_strip_all_tags(get_the_excerpt()));
                if ($trimmedExcerpt != '') {
                  $trimmedExcerpt = trim(substr($trimmedExcerpt, 0, -37)); // Trimming czytaj dalej button
                }
                echo $trimmedExcerpt . "..."; // Outputs the processed value to the page
                    ?>
                  </p>
                  <a href="<?php the_permalink(); ?>" class="btn btn-primary text-white">Przejdź do
                    numeru</a>
                </div>
              </li>
              <?php endwhile; ?>
              <?php add_filter('get_the_excerpt', 'wpautop'); ?>
            </ul>
            <?php endif; ?>
          </div>
        </section>
        <?php wp_reset_postdata(); ?>

        <section class="friends wrapper">
          <h2 class="friends__title text-center sectionTitle">Współpracują z nami</h2>
          <div class="friends__wrapper mx-4">
            <?php
            $query_friends = array(
              'post_type' => 'friend_post_type',
              'post_status' => 'publish',
            );
            $friends = new WP_Query($query_friends);
            if ($friends->have_posts()): ?>
            <ul class="friends__grid list-unstyled">
              <?php
              while ($friends->have_posts()):
                $friends->the_post();
                $thumbnail_id = get_post_thumbnail_id(get_the_ID());
              ?>
              <li class="friends__gridItem">
                <a class="friends__gridItemLink text-decoration-none"
                  href="<?php echo get_field('link_do_przyjaciela'); ?>">
                  <img src="<?php the_post_thumbnail_url(); ?>" class="friends__gridItemImage"
                    alt="<?php echo get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true); ?>">
                  <div class="friends__gridItemContent">
                    <p class="friends__gridItemContentText text-center h5">
                      <?php echo the_title(); ?>
                    </p>
                  </div>
                </a>
              </li>
              <?php endwhile; ?>
            </ul>
            <?php endif; ?>
          </div>

        </section>
      </main>

      <?php
      // Display the pagination component.
      understrap_pagination();

      // Do the right sidebar check and close div#primary.
      get_template_part('global-templates/right-sidebar-check');
      ?>

    </div><!-- .row -->

  </div><!-- #content -->

</div><!-- #index-wrapper -->

<?php
get_footer();