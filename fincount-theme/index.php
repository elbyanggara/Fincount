<?php
/**
 * FinCount Pro Blog Archive Template
 *
 * @package FinCount_Theme
 */

get_header();
?>

  <!-- Blog Banner -->
  <section class="section-padding" style="background: linear-gradient(180deg, #EBF3FC 0%, #FFFFFF 100%); padding-bottom: 3.5rem;">
    <div class="container text-center" style="max-width: 820px; margin: 0 auto;">
      <span class="section-tag">PUSAT EDUKASI AKUNTANSI</span>
      <h1 style="margin-bottom: 1.25rem;">
        Wawasan & Strategi <span style="color: var(--primary);">Keuangan Bisnis</span>
      </h1>
      <p style="font-size: 1.15rem; color: var(--text-muted); line-height: 1.7; margin-bottom: 2rem;">
        Kumpulan panduan praktis, analisis regulasi pajak digital, serta tips manajemen stok gudang dari para ahli FinCount untuk memajukan bisnis Anda.
      </p>

      <div style="display: flex; justify-content: center; gap: 0.65rem; flex-wrap: wrap;">
        <a href="<?php echo esc_url(get_permalink(get_option('page_for_posts')) ?: home_url('/blog/')); ?>" class="btn btn-primary btn-sm" style="border-radius: 99px;">Semua Artikel</a>
        <?php
        $categories = get_categories(['number' => 4]);
        foreach ($categories as $cat) {
            echo '<a href="' . esc_url(get_category_link($cat->term_id)) . '" class="btn btn-outline btn-sm" style="border-radius: 99px;">' . esc_html($cat->name) . '</a>';
        }
        ?>
      </div>
    </div>
  </section>

  <!-- Blog Posts Grid -->
  <section class="container" style="margin-bottom: 5rem;">
    <div class="blog-grid">
      <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
          <article id="post-<?php the_ID(); ?>" <?php post_class('blog-card'); ?>>
            <div class="blog-thumb" style="background: linear-gradient(135deg, #0054A6, #00A3E0); display: flex; align-items: center; justify-content: center;">
              <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail('medium_large', ['style' => 'width:100%; height:100%; object-fit:cover;']); ?>
              <?php else : ?>
                <i class="fas fa-file-invoice-dollar fa-4x" style="color: rgba(255, 255, 255, 0.35);"></i>
              <?php endif; ?>
              
              <?php
              $cats = get_the_category();
              if (!empty($cats)) {
                  echo '<span class="blog-category">' . esc_html($cats[0]->name) . '</span>';
              }
              ?>
            </div>
            <div class="blog-content">
              <div class="blog-meta">
                <span><i class="far fa-calendar-alt"></i> <?php echo get_the_date(); ?></span>
                <span><i class="far fa-clock"></i> 5 Menit</span>
              </div>
              <h3 class="blog-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
              <p class="blog-excerpt"><?php echo wp_trim_words(get_the_excerpt(), 18, '...'); ?></p>
              <div class="blog-author">
                <div class="blog-author-img" style="background:#0054A6; color:#fff; display:flex; align-items:center; justify-content:center; font-size:12px;">
                  <?php echo esc_html(strtoupper(substr(get_the_author(), 0, 2))); ?>
                </div>
                <span><?php the_author(); ?></span>
              </div>
            </div>
          </article>
        <?php endwhile; ?>
      <?php else : ?>
        <!-- Default sample articles if blog is newly activated -->
        <article class="blog-card">
          <div class="blog-thumb" style="background: linear-gradient(135deg, #0054A6, #00A3E0); display: flex; align-items: center; justify-content: center;">
            <i class="fas fa-chart-line fa-4x" style="color: rgba(255, 255, 255, 0.35);"></i>
            <span class="blog-category">Tips Akuntansi</span>
          </div>
          <div class="blog-content">
            <div class="blog-meta">
              <span><i class="far fa-calendar-alt"></i> 10 Oktober 2026</span>
              <span><i class="far fa-clock"></i> 5 Menit</span>
            </div>
            <h3 class="blog-title"><a href="#">7 Cara Efektif Mengelola Arus Kas Bisnis UMKM Agar Tetap Positif</a></h3>
            <p class="blog-excerpt">Pahami cara menjaga siklus kas keluar-masuk dengan disiplin pembukuan harian dan software akuntansi terintegrasi.</p>
            <div class="blog-author">
              <div class="blog-author-img" style="background:#0054A6; color:#fff; display:flex; align-items:center; justify-content:center; font-size:12px;">FA</div>
              <span>Farhan Akbar, Konsultan Finansial</span>
            </div>
          </div>
        </article>

        <article class="blog-card">
          <div class="blog-thumb" style="background: linear-gradient(135deg, #76B82A, #10B981); display: flex; align-items: center; justify-content: center;">
            <i class="fas fa-file-invoice-dollar fa-4x" style="color: rgba(255, 255, 255, 0.35);"></i>
            <span class="blog-category" style="background: var(--accent);">Regulasi Pajak</span>
          </div>
          <div class="blog-content">
            <div class="blog-meta">
              <span><i class="far fa-calendar-alt"></i> 05 Oktober 2026</span>
              <span><i class="far fa-clock"></i> 6 Menit</span>
            </div>
            <h3 class="blog-title"><a href="#">Panduan Lengkap Implementasi e-Faktur dan e-Invoicing Terbaru 2026</a></h3>
            <p class="blog-excerpt">Ketahui cara kerja validasi invoice digital otomatis langsung dari software akuntansi tanpa perlu input manual di situs pajak satu persatu.</p>
            <div class="blog-author">
              <div class="blog-author-img" style="background:#76B82A; color:#fff; display:flex; align-items:center; justify-content:center; font-size:12px;">DS</div>
              <span>Dian Sastrowidjoyo, Spesialis Pajak</span>
            </div>
          </div>
        </article>

        <article class="blog-card">
          <div class="blog-thumb" style="background: linear-gradient(135deg, #0B2545, #3B82F6); display: flex; align-items: center; justify-content: center;">
            <i class="fas fa-warehouse fa-4x" style="color: rgba(255, 255, 255, 0.35);"></i>
            <span class="blog-category" style="background: #0B2545;">Manajemen Stok</span>
          </div>
          <div class="blog-content">
            <div class="blog-meta">
              <span><i class="far fa-calendar-alt"></i> 28 September 2026</span>
              <span><i class="far fa-clock"></i> 4 Menit</span>
            </div>
            <h3 class="blog-title"><a href="#">Metode HPP: Perbedaan FIFO vs Weighted Average dan Dampaknya ke Pajak</a></h3>
            <p class="blog-excerpt">Pilihan metode kalkulasi persediaan menentukan besaran laba kotor dan beban pajak penghasilan perusahaan.</p>
            <div class="blog-author">
              <div class="blog-author-img" style="background:#0B2545; color:#fff; display:flex; align-items:center; justify-content:center; font-size:12px;">BP</div>
              <span>Budi Prakoso, Praktisi Logistik</span>
            </div>
          </div>
        </article>
      <?php endif; ?>
    </div>

    <!-- Pagination -->
    <div style="display: flex; justify-content: center; gap: 0.5rem; margin-top: 3.5rem;">
      <?php
      the_posts_pagination([
          'prev_text' => '<i class="fas fa-chevron-left"></i> Sebelumnya',
          'next_text' => 'Berikutnya <i class="fas fa-chevron-right"></i>',
      ]);
      ?>
    </div>
  </section>

<?php
get_footer();
