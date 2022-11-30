<div class="wrapper">
  <div class="container">
    <section class="lastArticles">
      <h2 class="text-center sectionTitle">
        W najnowszym numerze
      </h2>
      <?php
      $recent_posts = wp_get_recent_posts(
        array(
          'post_type' => 'volume_post_type',
          'numberposts' => 1,
          'post_status' => 'publish' // Show only the published posts
      
        )
      );
      $recent_post = $recent_posts[0];
      $recent_post_id = $recent_post['ID'];
      $thumbnail_id = get_post_thumbnail_id($recent_post_id);
      ?>
      <div class="lastArticles__content">
        <?php $lastVolumeTagId = get_fields($recent_post_id)['numer_kierunkow']['tag_okreslajacy_numery']; ?>
        <a class="lastArticles__coverLink" href="<?php echo get_post_permalink($recent_post_id); ?>">
          <img class="lastArticles__image img-fluid mx-auto"
            src="<?php echo get_the_post_thumbnail_url($recent_post_id); ?>"
            alt="<?php echo get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true); ?>" />
        </a>
        <?php
        $query_articles_by_tag = array(
          'post_type' => 'post',
          'post_status' => 'publish',
          'tag_id' => $lastVolumeTagId,
        );
        $recent_volume_articles = new WP_Query($query_articles_by_tag);
        ?>
        <ul class="lastArticles__list list-group">
          <?php while ($recent_volume_articles->have_posts()): ?>
          <?php $recent_volume_articles->the_post(); ?>
          <li class="lastArticles__listItem list-group-item">
            <a href="<?php the_permalink(); ?>" class="lastArticles__listItemLink">
              <?php echo get_field('autor'); ?> -
              <?php echo the_title(); ?>
            </a>
          </li>
          <?php endwhile; ?>
        </ul>
        <?php wp_reset_postdata(); ?>
      </div>
    </section>
  </div>
</div>