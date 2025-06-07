<?php
if (post_password_required()) {
  return;
}
?>

<div id="comments" class="comments-area">

  <h2 class="comments-title">Comentários</h2>

  <?php if (have_comments()) : ?>
    <ul class="comment-list">
      <?php
      wp_list_comments(array(
        'style'      => 'ul',
        'avatar_size' => 60,
        'callback'   => 'custom_comment_format',
      ));
      ?>
    </ul>
  <?php endif; ?>

  <?php
  if (!comments_open() && get_comments_number()) :
  ?>
    <p class="no-comments">Os comentários estão fechados.</p>
  <?php endif; ?>

  <?php
  comment_form();
  ?>
</div>