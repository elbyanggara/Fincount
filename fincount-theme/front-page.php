<?php
/**
 * FinCount Pro Front Page Template
 *
 * @package FinCount_Theme
 */

get_header();
?>

  <!-- Hero Section -->
  <section class="hero-section">
    <div class="container hero-grid">
      <div class="hero-content">
        <div class="hero-badge">
          <span class="pulse-dot"></span>
          <span>Versi 2.0 Generasi Baru Software Akuntansi</span>
        </div>
        <h1 class="hero-title">
          Kelola Keuangan Bisnis Lebih <span class="text-highlight">Cepat, Akurat & Terukur</span>
        </h1>
        <p class="hero-desc">
          FinCount Pro 2.0 menggabungkan pembukuan terintegrasi, manajemen persediaan multi-gudang, e-Faktur, dan laporan keuangan komprehensif dalam satu platform yang mudah digunakan.
        </p>
        <div class="hero-cta-group">
          <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn btn-accent btn-lg">
            <i class="fas fa-play-circle"></i> Mulai Uji Coba Gratis 14 Hari
          </a>
          <a href="<?php echo esc_url(home_url('/product/')); ?>" class="btn btn-outline btn-lg">
            <i class="fas fa-compass"></i> Pelajari Fitur
          </a>
        </div>
        <div class="hero-trust">
          <div class="trust-avatars">
            <div class="trust-avatar" style="background:#0054A6; color:#fff;">PT</div>
            <div class="trust-avatar" style="background:#76B82A; color:#fff;">CV</div>
            <div class="trust-avatar" style="background:#00A3E0; color:#fff;">TB</div>
            <div class="trust-avatar" style="background:#F59E0B; color:#fff;">+50k</div>
          </div>
          <div class="trust-text">
            <strong>Dipercaya oleh 200.000+ Bisnis</strong>
            <span>Dari UMKM hingga perusahaan multinasional di Asia Tenggara.</span>
          </div>
        </div>
      </div>

      <!-- Hero Dashboard Preview Visual -->
      <div class="mockup-wrapper">
        <div class="floating-stat floating-stat-1">
          <div class="stat-icon green">
            <i class="fas fa-arrow-trend-up"></i>
          </div>
          <div>
            <div style="font-size: 0.75rem; color: var(--text-muted);">Arus Kas Masuk</div>
            <div style="font-weight: 700; font-size: 1.05rem; color: var(--text-main);">Rp 482.500.000</div>
            <div style="font-size: 0.7rem; color: #10B981; font-weight: 600;">+18.4% vs bulan lalu</div>
          </div>
        </div>

        <div class="mockup-card">
          <div class="mockup-header">
            <div class="mockup-dots">
              <span></span><span></span><span></span>
            </div>
            <div style="font-size: 0.8rem; font-weight: 600; color: #64748B;">
              FinCount Pro v2.0 - Dashboard Manajemen
            </div>
            <div class="mockup-badge">ONLINE SYNC</div>
          </div>
          <div class="mockup-body">
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1rem; margin-bottom: 1.25rem;">
              <div style="background: #F8FAFC; padding: 1rem; border-radius: 8px; border: 1px solid #E2E8F0;">
                <span style="font-size: 0.75rem; color: #64748B;">Total Penjualan (MTD)</span>
                <div style="font-size: 1.25rem; font-weight: 800; color: #0054A6; margin-top: 4px;">Rp 1.240.850.000</div>
              </div>
              <div style="background: #F8FAFC; padding: 1rem; border-radius: 8px; border: 1px solid #E2E8F0;">
                <span style="font-size: 0.75rem; color: #64748B;">Laba Bersih Real-time</span>
                <div style="font-size: 1.25rem; font-weight: 800; color: #76B82A; margin-top: 4px;">Rp 348.120.000</div>
              </div>
            </div>

            <div style="background: #FFFFFF; border: 1px solid #E2E8F0; border-radius: 8px; padding: 1rem; margin-bottom: 1.25rem;">
              <div style="display: flex; justify-content: space-between; font-size: 0.8rem; font-weight: 600; margin-bottom: 0.75rem;">
                <span>Tren Arus Kas 6 Bulan Terakhir</span>
                <span style="color: #76B82A;">Sehat (Rasio 2.8)</span>
              </div>
              <div style="display: flex; align-items: flex-end; gap: 12px; height: 110px; padding-top: 10px;">
                <div style="flex: 1; height: 50%; background: #E2E8F0; border-radius: 4px 4px 0 0;"></div>
                <div style="flex: 1; height: 65%; background: #E2E8F0; border-radius: 4px 4px 0 0;"></div>
                <div style="flex: 1; height: 58%; background: #E2E8F0; border-radius: 4px 4px 0 0;"></div>
                <div style="flex: 1; height: 82%; background: #93C5FD; border-radius: 4px 4px 0 0;"></div>
                <div style="flex: 1; height: 75%; background: #60A5FA; border-radius: 4px 4px 0 0;"></div>
                <div style="flex: 1; height: 98%; background: #0054A6; border-radius: 4px 4px 0 0;"></div>
              </div>
              <div style="display: flex; justify-content: space-between; font-size: 0.7rem; color: #94A3B8; margin-top: 6px;">
                <span>Mei</span><span>Jun</span><span>Jul</span><span>Agt</span><span>Sep</span><span>Okt</span>
              </div>
            </div>

            <div style="font-size: 0.75rem; color: #64748B; font-weight: 600; margin-bottom: 6px;">FAKTUR PENJUALAN TERAKHIR</div>
            <div style="display: flex; flex-direction: column; gap: 6px;">
              <div style="display: flex; justify-content: space-between; padding: 6px 10px; background: #F8FAFC; border-radius: 6px; font-size: 0.8rem;">
                <span><strong>INV-2026-0891</strong> PT Berkah Abadi</span>
                <span style="color: #10B981; font-weight: 600;">Lunas (Rp 45.000.000)</span>
              </div>
              <div style="display: flex; justify-content: space-between; padding: 6px 10px; background: #F8FAFC; border-radius: 6px; font-size: 0.8rem;">
                <span><strong>INV-2026-0892</strong> CV Maju Jaya</span>
                <span style="color: #F59E0B; font-weight: 600;">Jatuh Tempo 3 Hari (Rp 18.500.000)</span>
              </div>
            </div>
          </div>
        </div>

        <div class="floating-stat floating-stat-2">
          <div class="stat-icon blue">
            <i class="fas fa-shield-halved"></i>
          </div>
          <div>
            <div style="font-size: 0.75rem; color: var(--text-muted);">Keamanan Data</div>
            <div style="font-weight: 700; font-size: 0.95rem; color: var(--text-main);">ISO 27001 & Cloud Backup</div>
            <div style="font-size: 0.7rem; color: #0054A6;">Audit Trail Terjamin</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Partner Logos Banner -->
  <section class="partners-section">
    <div class="container">
      <div class="partners-title">Diintegrasikan & Dipercaya Oleh Industri Terkemuka</div>
      <div class="partners-grid">
        <div class="partner-logo"><i class="fas fa-building fa-lg" style="color: var(--primary);"></i> MANUFAKTUR & PABRIK</div>
        <div class="partner-logo"><i class="fas fa-cart-shopping fa-lg" style="color: var(--accent);"></i> RITEL & DISTRIBUSI</div>
        <div class="partner-logo"><i class="fas fa-utensils fa-lg" style="color: #00A3E0;"></i> F&B & RESTORAN</div>
        <div class="partner-logo"><i class="fas fa-hand-holding-dollar fa-lg" style="color: #F59E0B;"></i> KONSULTAN PAJAK</div>
        <div class="partner-logo"><i class="fas fa-truck-fast fa-lg" style="color: #8B5CF6;"></i> LOGISTIK & EKSPEDISI</div>
      </div>
    </div>
  </section>

  <!-- Core Features Highlights -->
  <section class="section-padding" style="background: #FFFFFF;">
    <div class="container">
      <div class="section-header">
        <span class="section-tag">Fitur Unggulan</span>
        <h2 class="section-title">Semua yang Dibutuhkan untuk Mengelola Keuangan Bisnis</h2>
        <p class="section-desc">
          Dari pencatatan transaksi harian hingga analisis laba rugi strategis, FinCount Pro menyediakan solusi komprehensif tanpa kerumitan.
        </p>
      </div>

      <div class="features-grid">
        <div class="feature-card">
          <div class="feature-icon-wrapper"><i class="fas fa-calculator"></i></div>
          <h3 class="feature-title">Buku Besar & Pembukuan Otomatis</h3>
          <p class="feature-text">Posting transaksi langsung ke jurnal, buku besar, dan neraca lajur secara otomatis. Minimalkan human error dengan aturan entri pintar.</p>
          <ul class="feature-list">
            <li>Jurnal umum & recurring entry terjadwal</li>
            <li>Laporan laba rugi multi-cabang & perbandingan periode</li>
            <li>Dukungan multi-mata uang dengan konversi kurs harian</li>
          </ul>
          <a href="<?php echo esc_url(home_url('/product/#gl')); ?>" class="feature-link">Pelajari Selengkapnya <i class="fas fa-arrow-right"></i></a>
        </div>

        <div class="feature-card">
          <div class="feature-icon-wrapper" style="background: var(--accent-light); color: var(--accent);"><i class="fas fa-file-invoice"></i></div>
          <h3 class="feature-title">Faktur, Piutang & e-Invoicing</h3>
          <p class="feature-text">Buat quotation, sales order, delivery order, dan faktur penagihan profesional dengan logo bisnis Anda. Siap e-Faktur terintegrasi.</p>
          <ul class="feature-list">
            <li>Kirim faktur via WhatsApp & Email dengan 1 klik</li>
            <li>Pengingat otomatis invoice jatuh tempo ke pelanggan</li>
            <li>Validasi kepatuhan pajak & ekspor file e-Faktur</li>
          </ul>
          <a href="<?php echo esc_url(home_url('/product/#invoicing')); ?>" class="feature-link">Pelajari Selengkapnya <i class="fas fa-arrow-right"></i></a>
        </div>

        <div class="feature-card">
          <div class="feature-icon-wrapper" style="background: #E0F2FE; color: #0284C7;"><i class="fas fa-warehouse"></i></div>
          <h3 class="feature-title">Kontrol Persediaan Multi-Gudang</h3>
          <p class="feature-text">Pantau pergerakan stok real-time di seluruh cabang atau gudang. Dapatkan notifikasi saat stok menipis dan cegah kehabisan barang.</p>
          <ul class="feature-list">
            <li>Metode HPP otomatis: FIFO, Weighted Average, LIFO</li>
            <li>Manajemen nomor batch, serial, & tanggal kedaluwarsa</li>
            <li>Penyesuaian stok cepat & stock take barcode ready</li>
          </ul>
          <a href="<?php echo esc_url(home_url('/product/#inventory')); ?>" class="feature-link">Pelajari Selengkapnya <i class="fas fa-arrow-right"></i></a>
        </div>
      </div>
    </div>
  </section>

  <!-- Interactive Deep-Dive Tabs -->
  <section class="section-padding" style="background: var(--bg-subtle);">
    <div class="container">
      <div class="section-header">
        <span class="section-tag accent">Fleksibilitas Sistem</span>
        <h2 class="section-title">Pilih Mode Kerja: On-Premise Kuat atau Akses Cloud Fleksibel</h2>
      </div>

      <div class="tab-nav">
        <button class="tab-btn active" data-tab="tab-onpremise"><i class="fas fa-desktop"></i> FinCount On-Premise 2.0</button>
        <button class="tab-btn" data-tab="tab-cloud"><i class="fas fa-cloud"></i> FinCount Cloud Accounting</button>
        <button class="tab-btn" data-tab="tab-pos"><i class="fas fa-cash-register"></i> FinCount POS Retail / F&B</button>
      </div>

      <div id="tab-onpremise" class="tab-content active">
        <div>
          <span style="color: var(--primary); font-weight: 700; font-size: 0.85rem; text-transform: uppercase;">PERFORMA TINGGI DENGAN DATA INTERNAL</span>
          <h3 style="margin: 0.5rem 0 1rem; font-size: 1.85rem;">Stabilitas Maksimal untuk Bisnis Volume Transaksi Tinggi</h3>
          <p style="color: var(--text-muted); margin-bottom: 1.5rem;">
            Dirancang khusus untuk perusahaan yang memprioritaskan privasi data internal, kecepatan respons instan tanpa bergantung koneksi internet, serta penyesuaian formulir tak terbatas.
          </p>
          <ul class="feature-list" style="margin-bottom: 2rem;">
            <li>Kecepatan luar biasa dalam memproses puluhan ribu invoice per hari</li>
            <li>Dukungan SQL Server database yang stabil & kapasitas tak terbatas</li>
            <li>Kustomisasi format faktur, PO, voucher, & barcode dengan Report Designer</li>
          </ul>
          <a href="<?php echo esc_url(home_url('/product/')); ?>" class="btn btn-primary"><i class="fas fa-download"></i> Pelajari Edisi On-Premise</a>
        </div>
        <div>
          <div style="background: #FFFFFF; border-radius: 16px; padding: 2rem; border: 1px solid var(--border-light); box-shadow: var(--shadow-lg);">
            <div style="font-weight: 700; color: var(--secondary); margin-bottom: 1rem; display: flex; align-items: center; gap: 8px;">
              <i class="fas fa-server" style="color: var(--primary);"></i> Arsitektur FinCount V2 On-Premise
            </div>
            <div style="display: flex; flex-direction: column; gap: 12px;">
              <div style="padding: 12px; background: #F8FAFC; border-radius: 8px; border-left: 4px solid var(--primary);">
                <strong>Workstation Client:</strong> Antarmuka desktop responsif berbasis Windows dengan shortcut keyboard super cepat.
              </div>
              <div style="padding: 12px; background: #F8FAFC; border-radius: 8px; border-left: 4px solid var(--accent);">
                <strong>Database Server:</strong> Microsoft SQL Server lokal dengan indexing canggih dan enkripsi tingkat tinggi.
              </div>
            </div>
          </div>
        </div>
      </div>

      <div id="tab-cloud" class="tab-content">
        <div>
          <span style="color: var(--accent); font-weight: 700; font-size: 0.85rem; text-transform: uppercase;">MOBILITAS TANPA BATAS</span>
          <h3 style="margin: 0.5rem 0 1rem; font-size: 1.85rem;">Pantau Keuangan Kapan Saja & Di Mana Saja</h3>
          <p style="color: var(--text-muted); margin-bottom: 1.5rem;">
            Akses dashboard pembukuan langsung melalui browser HP, tablet, atau laptop. Cocok untuk pemilik bisnis yang dinamis dan tim kerja remote.
          </p>
          <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn btn-accent"><i class="fas fa-rocket"></i> Coba FinCount Cloud Gratis</a>
        </div>
        <div>
          <div style="background: #FFFFFF; border-radius: 16px; padding: 2rem; border: 1px solid var(--border-light); box-shadow: var(--shadow-lg);">
            <div style="font-weight: 700; color: var(--secondary); margin-bottom: 1rem;">
              <i class="fas fa-cloud" style="color: var(--accent);"></i> Manfaat FinCount Cloud
            </div>
            <p style="color: var(--text-muted); font-size: 0.95rem;">Kolaborasi multi-cabang instan tanpa konfigurasi server lokal yang rumit.</p>
          </div>
        </div>
      </div>

      <div id="tab-pos" class="tab-content">
        <div>
          <span style="color: var(--cyan); font-weight: 700; font-size: 0.85rem; text-transform: uppercase;">INTEGRASI KASIR DAN PEMBUKUAN</span>
          <h3 style="margin: 0.5rem 0 1rem; font-size: 1.85rem;">Solusi POS 5.0 yang Terhubung Langsung ke Laba Rugi</h3>
          <p style="color: var(--text-muted); margin-bottom: 1.5rem;">
            Setiap struk kasir yang dicetak langsung memotong stok gudang dan mencatat pendapatan di buku besar FinCount.
          </p>
          <a href="<?php echo esc_url(home_url('/product/')); ?>" class="btn btn-outline"><i class="fas fa-cash-register"></i> Lihat Fitur POS</a>
        </div>
        <div>
          <div style="background: #FFFFFF; border-radius: 16px; padding: 2rem; border: 1px solid var(--border-light); box-shadow: var(--shadow-lg);">
            <div style="font-weight: 700; color: var(--secondary); margin-bottom: 1rem;">
              <i class="fas fa-store" style="color: var(--cyan);"></i> Alur Transaksi Kasir Terpadu
            </div>
            <p style="color: var(--text-muted); font-size: 0.95rem;">Transaksi kasir cepat & sinkronisasi pembukuan instan.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Live Statistics Counter -->
  <section class="stats-section">
    <div class="container">
      <div class="stats-grid">
        <div class="stat-item">
          <h3><span class="stat-number" data-target="200000">0</span><span class="plus">+</span></h3>
          <p>Bisnis & UMKM Pengguna Aktif</p>
        </div>
        <div class="stat-item">
          <h3><span class="stat-number" data-target="25">0</span><span class="plus"> Thn</span></h3>
          <p>Pengalaman Mengembangkan Software</p>
        </div>
        <div class="stat-item">
          <h3><span class="stat-number" data-target="99">0</span><span class="plus">.98%</span></h3>
          <p>Tingkat Kepuasan & Uptime Sistem</p>
        </div>
        <div class="stat-item">
          <h3><span class="stat-number" data-target="600">0</span><span class="plus">+</span></h3>
          <p>Mitra Dealer & Konsultan Tersertifikasi</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Pricing Comparison -->
  <section class="section-padding" style="background: #FFFFFF;">
    <div class="container">
      <div class="section-header">
        <span class="section-tag">Paket & Edisi</span>
        <h2 class="section-title">Pilihan Paket Fleksibel Sesuai Skala Bisnis Anda</h2>
      </div>

      <div class="pricing-grid">
        <div class="pricing-card">
          <h3 class="pricing-title">FinCount Basic</h3>
          <p class="pricing-desc">Ideal untuk UMKM, usaha jasa, dan bisnis baru yang membutuhkan pembukuan rapi.</p>
          <div class="pricing-price">Rp 4.500.000 <span class="period">/lisensi</span></div>
          <ul class="pricing-features">
            <li><i class="fas fa-check" style="color: var(--accent);"></i> Buku Besar (GL) Lengkap</li>
            <li><i class="fas fa-check" style="color: var(--accent);"></i> Piutang (AR) & Hutang (AP)</li>
            <li><i class="fas fa-check" style="color: var(--accent);"></i> Pembuatan Faktur & Kwitansi</li>
          </ul>
          <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn btn-outline" style="width: 100%;">Pilih Basic</a>
        </div>

        <div class="pricing-card featured">
          <span class="pricing-badge">PALING POPULER</span>
          <h3 class="pricing-title">FinCount Pro 2.0</h3>
          <p class="pricing-desc">Solusi all-in-one untuk distributor, ritel, grosir, dan perusahaan dagang berkembang.</p>
          <div class="pricing-price" style="color: var(--primary);">Rp 8.900.000 <span class="period">/lisensi</span></div>
          <ul class="pricing-features">
            <li><i class="fas fa-check" style="color: var(--accent);"></i> Semua Fitur Basic Termasuk</li>
            <li><i class="fas fa-check" style="color: var(--accent);"></i> <strong>Kontrol Persediaan & Multi-Gudang</strong></li>
            <li><i class="fas fa-check" style="color: var(--accent);"></i> <strong>Integrasi e-Faktur Pajak</strong></li>
            <li><i class="fas fa-check" style="color: var(--accent);"></i> Multi-Mata Uang Otomatis</li>
          </ul>
          <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn btn-primary" style="width: 100%;">Mulai Uji Coba Pro</a>
        </div>

        <div class="pricing-card">
          <h3 class="pricing-title">FinCount Ultimate</h3>
          <p class="pricing-desc">Untuk manufaktur, kontraktor, dan grup bisnis dengan kebutuhan costing mendalam.</p>
          <div class="pricing-price">Rp 14.500.000 <span class="period">/lisensi</span></div>
          <ul class="pricing-features">
            <li><i class="fas fa-check" style="color: var(--accent);"></i> Semua Fitur Pro Termasuk</li>
            <li><i class="fas fa-check" style="color: var(--accent);"></i> <strong>Bill of Materials (BOM) & Pabrikasi</strong></li>
            <li><i class="fas fa-check" style="color: var(--accent);"></i> Konsolidasi Laporan Multi-Perusahaan</li>
          </ul>
          <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn btn-outline" style="width: 100%;">Konsultasi Ultimate</a>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA -->
  <section class="cta-section">
    <div class="container cta-box">
      <h2>Siap Mengubah Cara Bisnis Anda Mengelola Pembukuan?</h2>
      <p>Bergabunglah bersama lebih dari 200.000 bisnis sukses yang telah meninggalkan pencatatan manual.</p>
      <div class="cta-buttons">
        <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn btn-accent btn-lg"><i class="fas fa-calendar-check"></i> Jadwalkan Demo Gratis</a>
        <a href="tel:1800887766" class="btn btn-white btn-lg"><i class="fas fa-phone-alt"></i> 1800 88 7766</a>
      </div>
    </div>
  </section>

<?php
get_footer();
