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
          Polub nas i postaw kawę <i class="fa fa-thumbs-o-up d-inline-block ms-2" aria-hidden="true"></i>
        </h4>
        <p class="footer__contentItemText">
          <a href="https://www.facebook.com/kierunki.info/">
            <svg class="footer__contentItemTextIcon footer__contentItemTextIcon--svg" xmlns="http://www.w3.org/2000/svg"
              width="32px" height="32px" viewBox="0 0 24 24">
              <path
                d="M22.675 0h-21.35c-.732 0-1.325.593-1.325 1.325v21.351c0 .731.593 1.324 1.325 1.324h11.495v-9.294h-3.128v-3.622h3.128v-2.671c0-3.1 1.893-4.788 4.659-4.788 1.325 0 2.463.099 2.795.143v3.24l-1.918.001c-1.504 0-1.795.715-1.795 1.763v2.313h3.587l-.467 3.622h-3.12v9.293h6.116c.73 0 1.323-.593 1.323-1.325v-21.35c0-.732-.593-1.325-1.325-1.325z" />
            </svg>
            facebook.com/kierunki.info/
          </a>
        </p>
        <p class="footer__contentItemText text-center">
          <a href="https://buycoffee.to/kierunki" class="footer__contentItemTextLink--buyCoffe" target="_blank">
            <svg width="159" height="38.8" version="1.1" id="Warstwa_1" xmlns="http://www.w3.org/2000/svg"
              xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 159 38.8" xml:space="preserve">
              <path class="st0" d="M139.6,38.7H19.4C8.7,38.7,0,30.1,0,19.3l0,0C0,8.6,8.7-0.1,19.4-0.1h120.2c10.7,0,19.4,8.7,19.4,19.4l0,0
  C159,30.1,150.3,38.7,139.6,38.7z" />
              <g class="st1">
                <path class="st2" d="M48.9,23.7c0,0.5-0.4,0.9-0.9,0.9c-0.5,0-0.9-0.4-0.9-0.9v-9.9c0-0.6,0.4-1,1-1h3.7c2.5,0,3.6,1.9,3.6,3.7
    s-1,3.7-3.6,3.7h-2.9V23.7z M48.9,14.5v4.1h2.8c1.3,0,1.9-1,1.9-2c0-1-0.5-2.1-1.8-2.1H48.9z" />
                <path class="st2" d="M56.3,20.5c0-2.5,1.9-4.1,4.1-4.1c2.3,0,4.2,1.6,4.2,4.1c0,2.5-1.9,4.2-4.2,4.2C58.2,24.7,56.3,23,56.3,20.5z
     M62.9,20.5c0-1.5-1.1-2.4-2.4-2.4c-1.3,0-2.4,1-2.4,2.4c0,1.5,1.1,2.5,2.4,2.5C61.8,23,62.9,22,62.9,20.5z" />
                <path class="st2" d="M66.6,21.9c0.4-0.2,0.7,0.1,0.9,0.3c0.3,0.6,0.9,1,1.7,1c0.8,0,1.4-0.4,1.4-1c0-0.5-0.5-0.7-1.1-0.9l-1.1-0.3
    c-1.7-0.5-2.3-1.4-2.2-2.7c0.1-1.2,1.4-2.1,2.8-2.1c1.1,0,2,0.3,2.5,1.2c0.2,0.4,0.1,0.8-0.2,1c-0.3,0.2-0.6,0.2-1-0.1
    c-0.4-0.4-1-0.5-1.4-0.5c-0.4,0-0.9,0.2-1.1,0.4c-0.1,0.2-0.2,0.4-0.1,0.7c0.1,0.3,0.6,0.5,1,0.6l1.2,0.3c1.7,0.4,2.1,1.5,2.1,2.3
    c0,1.5-1.3,2.4-3.2,2.4c-1.2,0-2.5-0.6-2.9-1.8C66,22.5,66.2,22.1,66.6,21.9z" />
                <path class="st2" d="M74.6,18h-0.8c-0.4,0-0.7-0.3-0.7-0.7c0-0.4,0.3-0.7,0.7-0.7h0.8v-2.2c0-0.5,0.4-0.9,0.9-0.9
    c0.5,0,0.9,0.4,0.9,0.9v2.2h1c0.4,0,0.7,0.3,0.7,0.7c0,0.4-0.3,0.7-0.7,0.7h-1v5.7c0,0.5-0.4,0.9-0.9,0.9c-0.5,0-0.9-0.4-0.9-0.9
    V18z" />
                <path class="st2" d="M85.7,23.4c-0.5,0.9-1.7,1.3-2.7,1.3c-2.1,0-4-1.6-4-4.1c0-2.5,1.9-4.1,4-4.1c1,0,2.1,0.4,2.7,1.3v-0.3
    c0-0.5,0.4-0.9,0.9-0.9c0.5,0,0.9,0.4,0.9,0.9v6.3c0,0.5-0.4,0.9-0.9,0.9c-0.5,0-0.9-0.4-0.9-0.9V23.4z M83.2,23
    c1.3,0,2.4-0.9,2.4-2.5c0-1.6-1.3-2.4-2.4-2.4c-1.3,0-2.4,1-2.4,2.4C80.8,22,81.9,23,83.2,23z" />
                <path class="st2"
                  d="M95.1,16.6c0.5,0,0.9,0.3,1,0.8l1.6,4.6l1.7-4.8c0.2-0.5,0.6-0.7,1.1-0.6c0.5,0.1,0.7,0.6,0.6,1.1l-2.4,6.3
    c-0.2,0.5-0.5,0.7-0.9,0.7h-0.1c-0.4,0-0.7-0.2-0.9-0.7L95.1,19l-1.7,4.9c-0.2,0.5-0.5,0.7-0.9,0.7h-0.1c-0.4,0-0.7-0.2-0.9-0.7
    l-2.4-6.3c-0.2-0.4,0.1-1,0.6-1.1c0.5-0.1,0.9,0.1,1.1,0.6l1.7,4.8l1.6-4.6C94.2,16.8,94.6,16.6,95.1,16.6L95.1,16.6z" />
                <path class="st2" d="M112.9,23.2c0.3,0.3,0.3,0.9,0,1.2c-0.4,0.3-0.9,0.3-1.2,0l-3.2-3.5v2.9c0,0.5-0.4,0.9-0.9,0.9
    c-0.5,0-0.8-0.4-0.8-0.9V13.1c0-0.5,0.4-0.9,0.8-0.9c0.5,0,0.9,0.4,0.9,0.9v6.1l2.4-2.4c0.3-0.3,0.9-0.3,1.2,0
    c0.3,0.4,0.3,0.9,0,1.2l-2,2.1L112.9,23.2z" />
                <path class="st2" d="M120.8,23.4c-0.5,0.9-1.7,1.3-2.7,1.3c-2.1,0-4-1.6-4-4.1c0-2.5,1.9-4.1,4-4.1c1,0,2.1,0.4,2.7,1.3v-0.3
    c0-0.5,0.4-0.9,0.8-0.9c0.5,0,0.9,0.4,0.9,0.9v6.3c0,0.5-0.4,0.9-0.9,0.9c-0.5,0-0.8-0.4-0.8-0.9V23.4z M118.4,23
    c1.3,0,2.4-0.9,2.4-2.5c0-1.6-1.3-2.4-2.4-2.4c-1.3,0-2.4,1-2.4,2.4C115.9,22,117,23,118.4,23z" />
                <path class="st2"
                  d="M130.3,16.6c0.5,0,0.9,0.3,1,0.8l1.6,4.6l1.7-4.8c0.2-0.5,0.6-0.7,1.1-0.6c0.5,0.1,0.7,0.6,0.6,1.1l-2.4,6.3
    c-0.2,0.5-0.5,0.7-0.9,0.7h-0.1c-0.4,0-0.7-0.2-0.9-0.7l-1.7-4.9l-1.7,4.9c-0.2,0.5-0.5,0.7-0.9,0.7h-0.1c-0.4,0-0.7-0.2-0.9-0.7
    l-2.4-6.3c-0.2-0.4,0.1-1,0.6-1.1c0.5-0.1,0.9,0.1,1.1,0.6l1.7,4.8l1.6-4.6C129.3,16.8,129.7,16.6,130.3,16.6L130.3,16.6z" />
                <path class="st2" d="M143.6,26.1c0,0.2,0.2,0.5,0.6,0.5c0.1,0,0.4,0,0.5-0.4c0.1-0.4,0.3-0.5,0.7-0.5c0.4,0.1,0.6,0.4,0.5,0.8
    c-0.2,0.8-0.9,1.4-1.7,1.4c-1.3,0-1.9-0.8-1.9-1.7c0-0.2,0.1-0.6,0.2-0.8l0.5-1c-0.5,0.2-1,0.3-1.6,0.3c-2.3,0-4.1-1.6-4.1-4.2
    c0-2.5,1.8-4.1,4.1-4.1c2.2,0,3.9,1.5,4,4c0,0.5-0.4,0.8-0.8,0.8h-5.5c0.2,1.2,1.2,2,2.4,2c0.8,0,1.3-0.3,1.9-0.8
    c0.3-0.2,0.8-0.4,1.1-0.1c0.3,0.3,0.2,0.7,0,1.1C143.5,25.9,143.6,26.1,143.6,26.1z M143.7,19.9c-0.2-1.2-1.1-2-2.3-2
    c-1.2,0-2.2,0.7-2.3,2H143.7z" />
              </g>
              <g>
                <path class="st3" d="M21.6,26.7c-4.9,0-7.4-2.6-8.5-4.9c-1.2-2.4-1.4-5-1.4-6c0-2.2,1.8-3.8,4.3-3.8h7c0.7,0,1.3,0.6,1.3,1.3
    c0,0.7-0.6,1.3-1.3,1.3h-7c-0.5,0-1,0.1-1.3,0.4c-0.3,0.2-0.4,0.4-0.4,0.8c0,1.9,0.5,8.3,7.3,8.3c5.8,0,7.3-4.6,7.9-8.1
    c0-0.2,0-0.3,0.1-0.4c0.2-0.9,0.4-1.7,0.8-2.3C31,12.4,31.9,12,33,12c0.5,0,0.9,0.2,1.2,0.5c0.5,0.4,0.9,1.3,1.2,4.1
    c0.1,1.4,0.1,2.6,0.1,2.7c0,0.7-0.6,1.3-1.3,1.3l0,0c-0.7,0-1.3-0.6-1.3-1.3c0,0,0-1.1-0.1-2.3c-0.1-1-0.2-1.7-0.3-2.1
    c-0.1,0.3-0.2,0.9-0.3,1.1c0,0.1,0,0.2-0.1,0.4c-0.2,1.2-0.7,3.7-2.1,5.9c-0.8,1.3-1.9,2.3-3.2,3.1C25.4,26.3,23.6,26.7,21.6,26.7z
    " />
                <ellipse class="st4" cx="26.7" cy="13.3" rx="1.3" ry="1.3" />
              </g>
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