<?php
/**
 * FinCount Pro Comments Template
 *
 * @package FinCount_Theme
 */

if (post_password_required()) {
    return;
}
?>

<div id="comments" style="background: #FFFFFF; border: 1px solid var(--border-light); border-radius: 16px; padding: 2.5rem; box-shadow: var(--shadow-sm); margin-top: 3.5rem;">
  <?php if (have_comments()) : ?>
    <h3 style="margin-bottom: 1.5rem; color: var(--secondary);">
      <?php
      $comment_count = get_comments_number();
      echo sprintf(
          _n('%s Komentar', '%s Komentar', $comment_count, 'fincount-theme'),
          number_format_i18n($comment_count)
      );
      ?>
    </h3>

    <ul style="list-style: none; margin-bottom: 2.5rem;">
      <?php
      wp_list_comments([
          'style'      => 'ul',
          'short_ping' => true,
          'avatar_size'=> 42,
      ]);
      ?>
    </ul>
  <?php endif; ?>

  <?php if (!comments_open() && get_comments_number() && post_type_supports(get_post_type(), 'comments')) : ?>
    <p style="color: var(--text-muted); font-size: 0.9rem;"><?php _e('Kolom komentar telah ditutup.', 'fincount-theme'); ?></p>
  <?php endif; ?>

  <?php
  comment_form([
      'class_form'           => 'comment-form',
      'title_reply'          => __('Tinggalkan Pertanyaan atau Komentar', 'fincount-theme'),
      'title_reply_before'   => '<h3 style="margin-bottom: 1rem; color: var(--secondary);"><i class="far fa-comments" style="color: var(--primary); margin-right: 8px;"></i> ',
      'title_reply_after'    => '</h3>',
      'class_submit'         => 'btn btn-primary',
      'label_submit'         => __('Kirim Komentar', 'fincount-theme'),
      'comment_notes_before' => '<p style="color: var(--text-muted); font-size: 0.85rem; margin-bottom: 1.25rem;">Alamat email Anda tidak akan dipublikasikan. Bidang yang wajib diisi ditandai *</p>',
  ]);
  ?>
</div>
