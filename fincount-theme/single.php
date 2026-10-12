<?php
/**
 * FinCount Pro Single Post Template
 *
 * @package FinCount_Theme
 */

get_header();
?>

  <article class="section-padding" style="padding-top: 3.5rem;">
    <div class="container" style="max-width: 860px;">
      <!-- Breadcrumb -->
      <div style="font-size: 0.85rem; color: var(--text-muted); margin-bottom: 1.5rem;">
        <a href="<?php echo esc_url(home_url('/')); ?>">Home</a> &nbsp;/&nbsp; 
        <a href="<?php echo esc_url(get_permalink(get_option('page_for_posts')) ?: home_url('/blog/')); ?>">Blog</a> &nbsp;/&nbsp; 
        <span style="color: var(--primary);"><?php the_title(); ?></span>
      </div>

      <?php while (have_posts()) : the_post(); ?>
        <h1 style="margin-bottom: 1.5rem; line-height: 1.25;"><?php the_title(); ?></h1>

        <div style="display: flex; align-items: center; justify-content: space-between; border-bottom: 1px solid var(--border-light); padding-bottom: 1.5rem; margin-bottom: 2.5rem; flex-wrap: wrap; gap: 1rem;">
          <div style="display: flex; align-items: center; gap: 1rem;">
            <div style="width: 46px; height: 46px; border-radius: 50%; background: var(--primary-light); color: var(--primary); display: flex; align-items: center; justify-content: center; font-weight: 700;">
              <?php echo esc_html(strtoupper(substr(get_the_author(), 0, 2))); ?>
            </div>
            <div>
              <strong style="color: var(--text-main); display: block;"><?php the_author(); ?></strong>
              <span style="font-size: 0.85rem; color: var(--text-muted);">Financial Contributor</span>
            </div>
          </div>
          <div style="display: flex; gap: 1rem; font-size: 0.85rem; color: var(--text-muted);">
            <span><i class="far fa-calendar-alt"></i> <?php echo get_the_date(); ?></span>
            <span><i class="far fa-folder"></i> <?php the_category(', '); ?></span>
          </div>
        </div>

        <?php if (has_post_thumbnail()) : ?>
          <div style="margin-bottom: 2.5rem; border-radius: 16px; overflow: hidden; box-shadow: var(--shadow-md);">
            <?php the_post_thumbnail('large', ['style' => 'width:100%; height:auto; display:block;']); ?>
          </div>
        <?php endif; ?>

        <div style="font-size: 1.05rem; line-height: 1.8; color: var(--text-body);">
          <?php the_content(); ?>
        </div>

        <!-- Social Share Buttons -->
        <div style="border-top: 1px solid var(--border-light); border-bottom: 1px solid var(--border-light); padding: 1.5rem 0; margin: 3rem 0; display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 1rem;">
          <span style="font-weight: 700; color: var(--text-main);">Bagikan Artikel:</span>
          <div style="display: flex; gap: 0.5rem;">
            <a href="https://api.whatsapp.com/send?text=<?php echo urlencode(get_the_title() . ' ' . get_permalink()); ?>" target="_blank" class="btn btn-sm btn-outline" style="color: #25D366; border-color: #25D366;"><i class="fab fa-whatsapp"></i> WhatsApp</a>
            <a href="https://www.linkedin.com/sharing/share-offsite/?url=<?php echo urlencode(get_permalink()); ?>" target="_blank" class="btn btn-sm btn-outline" style="color: #0A66C2; border-color: #0A66C2;"><i class="fab fa-linkedin-in"></i> LinkedIn</a>
            <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode(get_permalink()); ?>" target="_blank" class="btn btn-sm btn-outline" style="color: #1877F2; border-color: #1877F2;"><i class="fab fa-facebook-f"></i> Facebook</a>
          </div>
        </div>

        <?php
        if (comments_open() || get_comments_number()) :
            comments_template();
        endif;
        ?>

      <?php endwhile; ?>
    </div>
  </article>

<?php
get_footer();
