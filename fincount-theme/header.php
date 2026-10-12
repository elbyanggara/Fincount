<?php
/**
 * FinCount Pro Theme Header Template
 *
 * @package FinCount_Theme
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

  <!-- Top Notification Bar -->
  <div class="top-bar">
    <div class="container top-bar-inner">
      <div style="display: flex; align-items: center; gap: 0.75rem;">
        <span class="top-bar-badge">TERBARU</span>
        <span>FinCount V2.0 kini mendukung integrasi e-Faktur otomatis & multi-cabang tanpa ribet!</span>
      </div>
      <ul class="top-bar-links">
        <li><a href="tel:1800887766"><i class="fas fa-phone-alt"></i> Bebas Pulsa: 1800 88 7766</a></li>
        <li><a href="<?php echo esc_url(home_url('/contact/')); ?>"><i class="fas fa-headset"></i> Bantuan & Support</a></li>
      </ul>
    </div>
  </div>

  <!-- Main Navigation Header -->
  <header class="site-header">
    <div class="container navbar-inner">
      <a href="<?php echo esc_url(home_url('/')); ?>" class="brand-logo" aria-label="FinCount Logo">
        <?php if (has_custom_logo()) : ?>
          <?php the_custom_logo(); ?>
        <?php else : ?>
          <div class="logo-icon">FC</div>
          <div>
            <span>Fin<span class="highlight">Count</span></span>
            <span class="logo-sub">Pro Accounting</span>
          </div>
        <?php endif; ?>
      </a>

      <!-- Desktop & Mobile Navigation Menu -->
      <nav>
        <?php
        if (has_nav_menu('primary')) {
            wp_nav_menu([
                'theme_location' => 'primary',
                'container'      => false,
                'menu_class'     => 'nav-menu',
                'fallback_cb'    => false,
            ]);
        } else {
        ?>
        <ul class="nav-menu">
          <li><a href="<?php echo esc_url(home_url('/')); ?>" class="nav-link <?php if(is_front_page()) echo 'active'; ?>">Home</a></li>
          <li class="has-dropdown">
            <a href="<?php echo esc_url(home_url('/product/')); ?>" class="nav-link <?php if(is_page('product') || is_page_template('page-product.php')) echo 'active'; ?>">Produk & Fitur <i class="fas fa-chevron-down" style="font-size: 0.75rem;"></i></a>
            <ul class="dropdown-menu">
              <li class="dropdown-item">
                <a href="<?php echo esc_url(home_url('/product/#overview')); ?>">
                  <div class="item-icon" style="background: var(--primary-light); color: var(--primary);">
                    <i class="fas fa-desktop"></i>
                  </div>
                  <div>
                    <strong>Accounting 2.0 (On-Premise)</strong>
                    <span class="item-desc">Solusi finansial & pembukuan lokal berkecepatan tinggi</span>
                  </div>
                </a>
              </li>
              <li class="dropdown-item">
                <a href="<?php echo esc_url(home_url('/product/#cloud')); ?>">
                  <div class="item-icon" style="background: var(--accent-light); color: var(--accent);">
                    <i class="fas fa-cloud"></i>
                  </div>
                  <div>
                    <strong>Cloud Accounting</strong>
                    <span class="item-desc">Akses pembukuan kapan saja via browser web & mobile</span>
                  </div>
                </a>
              </li>
              <li class="dropdown-item">
                <a href="<?php echo esc_url(home_url('/product/#pos')); ?>">
                  <div class="item-icon" style="background: #E0F2FE; color: #0284C7;">
                    <i class="fas fa-cash-register"></i>
                  </div>
                  <div>
                    <strong>FinCount POS 5.0</strong>
                    <span class="item-desc">Mesin kasir ritel & F&B multi-outlet terintegrasi</span>
                  </div>
                </a>
              </li>
              <li class="dropdown-item">
                <a href="<?php echo esc_url(home_url('/product/#einvoice')); ?>">
                  <div class="item-icon" style="background: #DCFCE7; color: #166534;">
                    <i class="fas fa-qrcode"></i>
                  </div>
                  <div>
                    <strong>LHDN e-Invoice Solution</strong>
                    <span class="item-desc">Validasi faktur pajak digital & QR code otomatis</span>
                  </div>
                </a>
              </li>
              <li class="dropdown-item">
                <a href="<?php echo esc_url(home_url('/product/#inventory')); ?>">
                  <div class="item-icon" style="background: #FEF3C7; color: #D97706;">
                    <i class="fas fa-warehouse"></i>
                  </div>
                  <div>
                    <strong>Kontrol Persediaan & Stok</strong>
                    <span class="item-desc">Multi-gudang, batch tracking, dan HPP presisi</span>
                  </div>
                </a>
              </li>
            </ul>
          </li>
          <li><a href="<?php echo esc_url(home_url('/product/')); ?>" class="nav-link <?php if(is_page('product')) echo 'active'; ?>">Fitur Lengkap</a></li>
          <li><a href="<?php echo esc_url(home_url('/about/')); ?>" class="nav-link <?php if(is_page('about')) echo 'active'; ?>">Tentang Kami</a></li>
          <li><a href="<?php echo esc_url(get_permalink(get_option('page_for_posts')) ?: home_url('/blog/')); ?>" class="nav-link <?php if(is_home() || is_singular('post')) echo 'active'; ?>">Blog & Tips</a></li>
          <li><a href="<?php echo esc_url(home_url('/contact/')); ?>" class="nav-link <?php if(is_page('contact')) echo 'active'; ?>">Hubungi Kami</a></li>
        </ul>
        <?php } ?>
      </nav>

      <!-- Nav Action CTAs -->
      <div class="nav-actions">
        <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn btn-outline btn-sm">Minta Demo</a>
        <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn btn-accent btn-sm">Uji Coba Gratis</a>
      </div>

      <!-- Hamburger Button (Mobile) -->
      <button class="mobile-toggle" aria-label="Toggle Menu">
        <i class="fas fa-bars"></i>
      </button>
    </div>
  </header>
