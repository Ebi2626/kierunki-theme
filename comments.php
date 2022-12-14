<?php
/**
 * The template for displaying comments
 *
 * The area of the page that contains both current comments
 * and the comment form.
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

/*
 * If the current post is protected by a password and the visitor has not yet
 * entered the password we will return early without loading the comments.
 */
if (post_password_required()) {
  return;
}
?>

<div class="comments-area" id="comments">

  <?php // You can start editing here -- including this comment! ?>

  <?php if (have_comments()): ?>

  <h2 class="comments-title">

    <?php
    $comments_number = get_comments_number();
    if ((int) $comments_number > 0) {
      printf(
        /* translators: %s: post title */
        esc_html_x('Komentarze do "%s"', 'comments title', 'understrap'),
        '<span>' . get_the_title() . '</span>'
      );
    }
    ?>

  </h2><!-- .comments-title -->

  <?php understrap_comment_navigation('comment-nav-above'); ?>

  <ol class="comment-list list-group list-group-numbered">

    <?php
    wp_list_comments(
      array(
        'style' => 'ol',
        'short_ping' => true,
      )
    );
    ?>

  </ol><!-- .comment-list -->

  <?php understrap_comment_navigation('comment-nav-below'); ?>

  <?php endif; // End of if have_comments(). ?>

  <?php comment_form(); // Render comments form. ?>

</div><!-- #comments -->