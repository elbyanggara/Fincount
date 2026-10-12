<?php
/**
 * FinCount Pro Theme Footer Template
 *
 * @package FinCount_Theme
 */
?>
  <!-- Footer -->
  <footer class="site-footer">
    <div class="container">
      <div class="footer-grid">
        <!-- Col 1: Brand Info -->
        <div class="footer-col">
          <a href="<?php echo esc_url(home_url('/')); ?>" class="brand-logo" style="color: #FFFFFF; margin-bottom: 1.25rem;">
            <div class="logo-icon">FC</div>
            <div>
              <span>Fin<span style="color: var(--accent);">Count</span></span>
              <span class="logo-sub" style="color: #94A3B8;">Accounting Software</span>
            </div>
          </a>
          <p style="font-size: 0.9rem; line-height: 1.6; color: #94A3B8; margin-bottom: 1.5rem;">
            FinCount adalah penyedia software akuntansi, persediaan, dan manajemen bisnis terkemuka yang dipercaya oleh lebih dari 200.000 perusahaan di Indonesia, Malaysia, dan Asia Tenggara.
          </p>
          <div style="font-size: 0.85rem; color: #CBD5E1; margin-bottom: 0.5rem;">
            <i class="fas fa-award" style="color: var(--accent);"></i> ISO 27001 Certified & Microsoft Gold Partner
          </div>
          <div class="footer-social">
            <a href="https://facebook.com" class="social-btn" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
            <a href="https://linkedin.com" class="social-btn" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
            <a href="https://instagram.com" class="social-btn" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
            <a href="https://youtube.com" class="social-btn" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
            <a href="https://wa.me/6281234567890" class="social-btn" aria-label="WhatsApp"><i class="fab fa-whatsapp"></i></a>
          </div>
        </div>

        <!-- Col 2: Products -->
        <div class="footer-col">
          <h4>Produk & Solusi</h4>
          <ul class="footer-links">
            <li><a href="<?php echo esc_url(home_url('/product/')); ?>">FinCount Pro 2.0</a></li>
            <li><a href="<?php echo esc_url(home_url('/product/#cloud')); ?>">FinCount Cloud Accounting</a></li>
            <li><a href="<?php echo esc_url(home_url('/product/#pos')); ?>">FinCount POS 5.0</a></li>
            <li><a href="<?php echo esc_url(home_url('/product/#invoicing')); ?>">Modul e-Faktur & e-Invoice</a></li>
            <li><a href="<?php echo esc_url(home_url('/product/#inventory')); ?>">Manajemen Stok & Gudang</a></li>
          </ul>
        </div>

        <!-- Col 3: Resources -->
        <div class="footer-col">
          <h4>Bantuan & Sumber Daya</h4>
          <ul class="footer-links">
            <li><a href="<?php echo esc_url(get_permalink(get_option('page_for_posts')) ?: home_url('/blog/')); ?>">Pusat Edukasi & Blog</a></li>
            <li><a href="<?php echo esc_url(home_url('/contact/#faq')); ?>">FAQ & Tanya Jawab</a></li>
            <li><a href="<?php echo esc_url(home_url('/contact/')); ?>">Jadwalkan Demo Software</a></li>
            <li><a href="<?php echo esc_url(home_url('/about/')); ?>">Kisah Klien & Testimoni</a></li>
            <li><a href="<?php echo esc_url(home_url('/sitemap.xml')); ?>">Sitemap XML</a></li>
          </ul>
        </div>

        <!-- Col 4: Contact & Office -->
        <div class="footer-col">
          <h4>Kontak Kantor</h4>
          <p style="font-size: 0.9rem; margin-bottom: 0.75rem;">
            <i class="fas fa-map-marker-alt" style="color: var(--accent); margin-right: 8px;"></i>
            FinCount Center, Sentra Bisnis Jakarta Barat, Indonesia
          </p>
          <p style="font-size: 0.9rem; margin-bottom: 0.75rem;">
            <i class="fas fa-phone-alt" style="color: var(--accent); margin-right: 8px;"></i>
            (021) 5890-7766 / 1800 88 7766
          </p>
          <p style="font-size: 0.9rem; margin-bottom: 0.75rem;">
            <i class="fas fa-envelope" style="color: var(--accent); margin-right: 8px;"></i>
            sales@fincount.id
          </p>
          <p style="font-size: 0.9rem;">
            <i class="fas fa-clock" style="color: var(--accent); margin-right: 8px;"></i>
            Senin - Jumat: 08:30 - 17:30 WIB
          </p>
        </div>
      </div>

      <!-- Footer Bottom -->
      <div class="footer-bottom">
        <div>
          &copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. Hak Cipta Dilindungi Undang-Undang.
        </div>
        <ul class="footer-legal-links">
          <li><a href="<?php echo esc_url(home_url('/about/')); ?>">Kebijakan Privasi</a></li>
          <li><a href="<?php echo esc_url(home_url('/about/')); ?>">Syarat & Ketentuan</a></li>
          <li><a href="<?php echo esc_url(home_url('/contact/')); ?>">Keamanan Informasi</a></li>
        </ul>
      </div>
    </div>
  </footer>

  <!-- Floating WhatsApp Button -->
  <a href="https://wa.me/6281234567890?text=Halo%20FinCount%20Indonesia,%20saya%20ingin%20konsultasi%20software%20akuntansi" class="floating-whatsapp" target="_blank" rel="noopener noreferrer" aria-label="Hubungi kami via WhatsApp">
    <i class="fab fa-whatsapp"></i>
  </a>

  <!-- Back to Top Button -->
  <button class="back-to-top" aria-label="Kembali ke atas">
    <i class="fas fa-chevron-up"></i>
  </button>

<?php wp_footer(); ?>
</body>
</html>
