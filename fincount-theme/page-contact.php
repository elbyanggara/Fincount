<?php
/**
 * Template Name: Contact Us
 *
 * @package FinCount_Theme
 */

get_header();
?>

  <!-- Contact Hero -->
  <section class="section-padding" style="background: linear-gradient(180deg, #EBF3FC 0%, #FFFFFF 100%); padding-bottom: 3.5rem;">
    <div class="container text-center" style="max-width: 820px; margin: 0 auto;">
      <span class="section-tag">KONSULTASI & DUKUNGAN</span>
      <h1 style="margin-bottom: 1.25rem;">
        Hubungi Tim <span style="color: var(--primary);">FinCount</span>
      </h1>
      <p style="font-size: 1.15rem; color: var(--text-muted); line-height: 1.7;">
        Apakah Anda ingin menjadwalkan demo sistem akuntansi, mendiskusikan integrasi khusus, atau membutuhkan informasi harga paket? Kami siap membantu.
      </p>
    </div>
  </section>

  <!-- Contact Form & Info -->
  <section class="container" style="margin-bottom: 5rem;">
    <div class="contact-grid">
      <!-- Contact Info Card -->
      <div>
        <div class="contact-info-card">
          <h3 style="margin-bottom: 1.5rem; color: var(--secondary);">Informasi Kantor & Kontak</h3>
          
          <div class="contact-info-item">
            <div class="contact-info-icon"><i class="fas fa-map-marker-alt"></i></div>
            <div class="contact-info-text">
              <h4>Kantor Pusat FinCount</h4>
              <p>Sentra Bisnis Tanjung Duren Barat No. 88, Grogol Petamburan, Jakarta Barat, DKI Jakarta 11470</p>
            </div>
          </div>

          <div class="contact-info-item">
            <div class="contact-info-icon" style="background: var(--accent-light); color: var(--accent);"><i class="fas fa-phone-volume"></i></div>
            <div class="contact-info-text">
              <h4>Telepon & Bebas Pulsa</h4>
              <p><a href="tel:1800887766" style="font-weight: 700; color: var(--primary);">1800 88 7766</a> (Toll-Free)</p>
              <p><a href="tel:02158907766">(021) 5890-7766</a> (Hunting Jakarta)</p>
            </div>
          </div>

          <div class="contact-info-item">
            <div class="contact-info-icon" style="background: #E0F2FE; color: #0284C7;"><i class="fas fa-envelope-open-text"></i></div>
            <div class="contact-info-text">
              <h4>Email Resmi</h4>
              <p>Penjualan: <a href="mailto:sales@fincount.id">sales@fincount.id</a></p>
              <p>Dukungan: <a href="mailto:support@fincount.id">support@fincount.id</a></p>
            </div>
          </div>

          <div class="contact-info-item">
            <div class="contact-info-icon" style="background: #DCFCE7; color: #166534;"><i class="fab fa-whatsapp"></i></div>
            <div class="contact-info-text">
              <h4>WhatsApp Hotline Cepat</h4>
              <p><a href="https://wa.me/6281234567890" target="_blank" style="font-weight: 700; color: #166534;">+62 812-3456-7890</a></p>
            </div>
          </div>

          <div class="contact-info-item" style="margin-bottom: 0;">
            <div class="contact-info-icon" style="background: #FEF3C7; color: #D97706;"><i class="fas fa-clock"></i></div>
            <div class="contact-info-text">
              <h4>Jam Operasional</h4>
              <p>Senin – Jumat: 08:30 – 17:30 WIB</p>
              <p>Sabtu, Minggu & Libur Nasional: Tutup</p>
            </div>
          </div>
        </div>
      </div>

      <!-- Working Contact Form -->
      <div>
        <div class="contact-form-box">
          <h3 style="margin-bottom: 0.5rem; color: var(--secondary);">Formulir Permintaan Demo & Konsultasi</h3>
          <p style="color: var(--text-muted); font-size: 0.95rem; margin-bottom: 1.75rem;">
            Silakan lengkapi formulir di bawah ini. Tim spesialis FinCount akan menghubungi Anda untuk mengatur jadwal demonstrasi produk.
          </p>

          <div id="formAlert" class="form-alert"></div>

          <form id="contactForm" method="POST" action="<?php echo esc_url(admin_url('admin-ajax.php')); ?>">
            <?php wp_nonce_field('fincount_contact_nonce', 'contact_nonce'); ?>
            <input type="hidden" name="action" value="fincount_contact_submit">

            <div class="form-row">
              <div class="form-group">
                <label class="form-label">Nama Lengkap *</label>
                <input type="text" name="name" class="form-control" placeholder="Contoh: Budi Santoso" required>
              </div>
              <div class="form-group">
                <label class="form-label">Alamat Email Perusahaan *</label>
                <input type="email" name="email" class="form-control" placeholder="budi@perusahaan.com" required>
              </div>
            </div>

            <div class="form-row">
              <div class="form-group">
                <label class="form-label">Nomor WhatsApp / HP *</label>
                <input type="tel" name="phone" class="form-control" placeholder="Contoh: 08123456789" required>
              </div>
              <div class="form-group">
                <label class="form-label">Nama Perusahaan / Bisnis</label>
                <input type="text" name="company" class="form-control" placeholder="PT / CV / Usaha Anda">
              </div>
            </div>

            <div class="form-row">
              <div class="form-group">
                <label class="form-label">Produk yang Diminati *</label>
                <select name="product" class="form-control" required>
                  <option value="FinCount Pro 2.0 (Pro)">FinCount Pro 2.0 (Pro - On-Premise)</option>
                  <option value="FinCount Cloud Accounting">FinCount Cloud Accounting (Online Web)</option>
                  <option value="FinCount Basic Edition">FinCount Basic Edition</option>
                  <option value="FinCount Ultimate Edition">FinCount Ultimate Edition</option>
                  <option value="FinCount POS 5.0">FinCount POS 5.0 (Kasir Retail/F&B)</option>
                  <option value="Modul e-Faktur Terintegrasi">Modul e-Faktur Terintegrasi</option>
                </select>
              </div>
              <div class="form-group">
                <label class="form-label">Bidang Industri Bisnis</label>
                <select name="industry" class="form-control">
                  <option value="Perdagangan / Distributor">Perdagangan / Distributor</option>
                  <option value="Ritel / Toko Fisik">Ritel & Toko Fisik</option>
                  <option value="Manufaktur / Pabrikasi">Manufaktur / Pabrikasi</option>
                  <option value="Jasa / Konsultan">Jasa & Konsultan</option>
                  <option value="Lainnya">Lainnya</option>
                </select>
              </div>
            </div>

            <div class="form-group">
              <label class="form-label">Pesan / Kebutuhan Khusus Anda *</label>
              <textarea name="message" class="form-control" rows="4" placeholder="Ceritakan jumlah pengguna, cabang gudang, atau proses pembukuan yang ingin Anda tingkatkan..." required></textarea>
            </div>

            <button type="submit" class="btn btn-accent btn-lg" style="width: 100%;">
              <i class="fas fa-paper-plane"></i> Kirim Permintaan Demo & Konsultasi
            </button>
          </form>
        </div>
      </div>
    </div>

    <!-- Google Maps Embed -->
    <div class="section-header" style="margin-bottom: 1.5rem;">
      <span class="section-tag accent">LOKASI KANTOR</span>
      <h2 class="section-title">Kunjungi Showroom & Training Center Kami</h2>
      <p class="section-desc">Peta petunjuk arah menuju kantor FinCount di Sentra Bisnis Jakarta Barat.</p>
    </div>

    <div class="map-container">
      <iframe 
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.680674251761!2d106.78280367503762!3d-6.173491893813958!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f6f67a213501%3A0x63391d4e0e676189!2sCentral%20Park%20Mall!5e0!3m2!1sen!2sid!4v1700000000000!5m2!1sen!2sid" 
        title="Peta Lokasi FinCount Indonesia"
        allowfullscreen="" 
        loading="lazy" 
        referrerpolicy="no-referrer-when-downgrade">
      </iframe>
    </div>
  </section>

<?php
get_footer();
