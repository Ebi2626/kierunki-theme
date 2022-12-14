<?php
/**
 * Navbar branding
 *
 * @package Understrap
 * @since 1.2.0
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

if (!has_custom_logo()) { ?>

<?php if (is_front_page() && is_home()): ?>

<h1 class="navbar-brand mb-0">
  <a rel="home" href="<?php echo esc_url(home_url('/')); ?>" itemprop="url">
    <?php bloginfo('name'); ?>
  </a>
</h1>

<?php else: ?>

<a class="navbar-brand" rel="home" href="<?php echo esc_url(home_url('/')); ?>" itemprop="url">
  <?php bloginfo('name'); ?>
</a>

<?php endif; ?>

<?php
} else { ?>
<div class="d-flex flex-row align-items-center">
  <?php the_custom_logo(); ?>
  <a href="<?php echo esc_url(home_url('/')); ?>" rel="home" itemprop="url"
    class="text-decoration-none d-none d-sm-inline-block">
    <h2 class="text-primary h4 mb-0">Kierunki.info.pl</h2>
  </a>
</div>
<?php
}