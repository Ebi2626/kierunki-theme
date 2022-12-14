<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

$container = get_theme_mod('understrap_container_type');
?>

<?php get_template_part('sidebar-templates/sidebar', 'footerfull'); ?>

<footer class="footer">
  <div class="footer__wrapper">
    <div class="footer__headers">
      <h2 class="footer__title footer__title--main">
        Kierunki
      </h2>
      <h3 class="footer__title">
        portal społeczno-kulturalny
      </h3>
    </div>
    <div class="footer__content">
      <section class="footer__contentItem">
        <h4 class="footer__contentItemTitle">Redaktorzy naczelni</h4>
        <ul class="footer__contentItemList ps-3">
          <li class="footer__contentItemListItem">Adrianna Gąsiorek</li>
          <li class="footer__contentItemListItem">Adam Seweryn</li>
        </ul>
      </section>
      <section class="footer__contentItem">
        <h4 class="footer__contentItemTitle">Skontaktuj się z nami</h4>
        <p class="footer__contentItemText">
          <a href="mailto:redakcja@kierunki.info.pl">
            <i class="fa fa-envelope footer__contentItemTextIcon" aria-hidden="true"></i>
            redakcja@kierunki.info.pl
          </a>
        </p>
        <p class="footer__contentItemText">
          <a href="tel:+48791231934">
            <i class="fa fa-phone  footer__contentItemTextIcon" aria-hidden="true"></i>
            791 231 934
          </a>
        </p>
      </section>
      <section class="footer__contentItem">
        <h4 class="footer__contentItemTitle">
          Polub nas <i class="fa fa-thumbs-o-up d-inline-block ms-2" aria-hidden="true"></i>
        </h4>
        <p class="footer__contentItemText">
          <a href="https://www.facebook.com/kierunki.info/">
            <svg class="footer__contentItemTextIcon footer__contentItemTextIcon--svg" xmlns="http://www.w3.org/2000/svg"
              width="32px" height="32px" viewBox="0 0 24 24">
              <path
                d="M22.675 0h-21.35c-.732 0-1.325.593-1.325 1.325v21.351c0 .731.593 1.324 1.325 1.324h11.495v-9.294h-3.128v-3.622h3.128v-2.671c0-3.1 1.893-4.788 4.659-4.788 1.325 0 2.463.099 2.795.143v3.24l-1.918.001c-1.504 0-1.795.715-1.795 1.763v2.313h3.587l-.467 3.622h-3.12v9.293h6.116c.73 0 1.323-.593 1.323-1.325v-21.35c0-.732-.593-1.325-1.325-1.325z" />
            </svg>
          </a>
        </p>
      </section>
    </div>
  </div>
  <div class="footer__footer">
    <p class="my-2">
      Projekt i realizacja <a href="https://onr.com.pl">ONR</a>
    </p>
  </div>
</footer>

<?php // Closing div#page from header.php. ?>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>