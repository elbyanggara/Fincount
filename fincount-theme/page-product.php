<?php
/**
 * Template Name: Product Features
 *
 * @package FinCount_Theme
 */

get_header();
?>

  <!-- FinCount Product Sub-Navigation Anchor Bar -->
  <div class="product-subnav">
    <div class="container product-subnav-inner">
      <div class="product-subnav-title">
        <span>FinCount Pro</span>
        <span class="badge-v2">VERSI 2.2 READY</span>
      </div>
      <ul class="product-subnav-links">
        <li><a href="#overview">Overview</a></li>
        <li><a href="#hotpicks">Hotpicks</a></li>
        <li><a href="#gl">General Ledger</a></li>
        <li><a href="#einvoice">e-Invoice</a></li>
        <li><a href="#inventory">Inventory & Costing</a></li>
        <li><a href="#comparison">Edition Comparison</a></li>
        <li><a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn btn-accent btn-sm" style="color: #fff !important; padding: 4px 14px;">Minta Demo</a></li>
      </ul>
    </div>
  </div>

  <!-- Hero Section (FinCount pro-accounting2.html style) -->
  <section id="overview" class="section-padding" style="background: linear-gradient(180deg, #F0F6FD 0%, #FFFFFF 100%); padding-top: 4rem;">
    <div class="container">
      <div class="hero-grid">
        <div>
          <p class="subhead">POWERFUL ACCOUNTING SOFTWARE FOR SMES</p>
          <h1 style="color: var(--secondary); margin-bottom: 1.25rem; font-size: clamp(2rem, 3.8vw, 3.25rem);">
            FinCount Pro V2 <br><span style="color: var(--primary);">Customisable Software for Growing Businesses</span>
          </h1>
          <p style="font-size: 1.15rem; color: var(--text-muted); line-height: 1.7; margin-bottom: 2rem;">
            Kelola transaksi akuntansi kompleks, kepatuhan e-Faktur terintegrasi, analisis margin laba persediaan real-time, dan pelaporan keuangan lengkap dalam satu aplikasi on-premise yang sangat stabil dan aman.
          </p>
          <div style="display: flex; gap: 1rem; flex-wrap: wrap; margin-bottom: 2.5rem;">
            <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn btn-accent btn-lg">
              <i class="fas fa-paper-plane"></i> Request Free Demo
            </a>
            <a href="#hotpicks" class="btn btn-outline btn-lg">
              <i class="fas fa-circle-play"></i> Discover Features
            </a>
          </div>
          <div style="display: flex; gap: 2rem; border-top: 1px solid var(--border-light); padding-top: 1.5rem;">
            <div>
              <strong style="display: block; font-size: 1.35rem; color: var(--primary); font-family: var(--font-heading);">200.000+</strong>
              <span style="font-size: 0.85rem; color: var(--text-muted);">Perusahaan Pengguna</span>
            </div>
            <div>
              <strong style="display: block; font-size: 1.35rem; color: var(--accent); font-family: var(--font-heading);">99.98%</strong>
              <span style="font-size: 0.85rem; color: var(--text-muted);">Stabilitas SQL Database</span>
            </div>
            <div>
              <strong style="display: block; font-size: 1.35rem; color: var(--cyan); font-family: var(--font-heading);">e-Invoice</strong>
              <span style="font-size: 0.85rem; color: var(--text-muted);">Compliant & Validated</span>
            </div>
          </div>
        </div>

        <div>
          <!-- FinCount V2 Product Showcase Card -->
          <div class="mockup-card" style="box-shadow: 0 16px 40px rgba(0, 84, 166, 0.16);">
            <div class="mockup-header" style="background: var(--secondary); color: #fff;">
              <div class="mockup-dots">
                <span></span><span></span><span></span>
              </div>
              <span style="font-size: 0.85rem; font-weight: 700; color: #fff;">FinCount Pro V2.2 Enterprise</span>
              <span style="background: var(--accent); color: #fff; padding: 2px 8px; border-radius: 4px; font-size: 0.7rem; font-weight: 700;">SQL ENGINE</span>
            </div>
            <div class="mockup-body" style="background: #F8FAFC;">
              <div style="background: #fff; border: 1px solid var(--border-light); border-radius: 8px; padding: 1.25rem; margin-bottom: 1rem;">
                <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 1rem;">
                  <strong style="color: var(--secondary); font-size: 0.95rem;"><i class="fas fa-chart-line" style="color: var(--primary); margin-right: 6px;"></i> Financial Overview Dashboard</strong>
                  <span style="color: var(--accent); font-weight: 700; font-size: 0.8rem;">● Live Connected</span>
                </div>
                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 10px;">
                  <div style="background: #F1F5F9; padding: 10px; border-radius: 6px;">
                    <span style="font-size: 0.75rem; color: #64748B;">Monthly Revenue</span>
                    <div style="font-size: 1.1rem; font-weight: 800; color: #0054A6;">Rp 1.482.000.000</div>
                  </div>
                  <div style="background: #F1F5F9; padding: 10px; border-radius: 6px;">
                    <span style="font-size: 0.75rem; color: #64748B;">Net Margin</span>
                    <div style="font-size: 1.1rem; font-weight: 800; color: #80C31E;">26.8% (+4.2%)</div>
                  </div>
                </div>
              </div>

              <!-- Module Quick Access Matrix -->
              <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 8px; font-size: 0.8rem; text-align: center;">
                <div style="background: #fff; padding: 10px; border-radius: 6px; border: 1px solid #E2E8F0;">
                  <i class="fas fa-book" style="color: #0054A6; font-size: 1.25rem; margin-bottom: 4px; display: block;"></i>
                  General Ledger
                </div>
                <div style="background: #fff; padding: 10px; border-radius: 6px; border: 1px solid #E2E8F0;">
                  <i class="fas fa-file-invoice" style="color: #80C31E; font-size: 1.25rem; margin-bottom: 4px; display: block;"></i>
                  AR / Invoicing
                </div>
                <div style="background: #fff; padding: 10px; border-radius: 6px; border: 1px solid #E2E8F0;">
                  <i class="fas fa-boxes-stacked" style="color: #00A3E0; font-size: 1.25rem; margin-bottom: 4px; display: block;"></i>
                  Stock Costing
                </div>
                <div style="background: #fff; padding: 10px; border-radius: 6px; border: 1px solid #E2E8F0;">
                  <i class="fas fa-building-columns" style="color: #F59E0B; font-size: 1.25rem; margin-bottom: 4px; display: block;"></i>
                  Bank Reco
                </div>
                <div style="background: #fff; padding: 10px; border-radius: 6px; border: 1px solid #E2E8F0;">
                  <i class="fas fa-qrcode" style="color: #10B981; font-size: 1.25rem; margin-bottom: 4px; display: block;"></i>
                  e-Invoicing
                </div>
                <div style="background: #fff; padding: 10px; border-radius: 6px; border: 1px solid #E2E8F0;">
                  <i class="fas fa-chart-pie" style="color: #8B5CF6; font-size: 1.25rem; margin-bottom: 4px; display: block;"></i>
                  Audit Trail
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Enhancement HOTPICKS -->
  <section id="hotpicks" class="section-padding-sm" style="background: #FFFFFF; border-bottom: 1px solid var(--border-light);">
    <div class="container">
      <div class="section-header" style="margin-bottom: 2rem;">
        <p class="subhead">ENHANCEMENT HOTPICKS</p>
        <h2 class="section-title">Fitur Unggulan Generasi FinCount 2.2</h2>
        <p class="section-desc">Peningkatan signifikan untuk mempercepat alur kerja harian staf akunting dan manajemen Anda.</p>
      </div>

      <div class="hotpicks-grid">
        <div class="hotpick-card">
          <div class="hotpick-icon"><i class="fas fa-qrcode"></i></div>
          <h3 class="hotpick-title">LHDN e-Invoice Ready</h3>
          <p class="hotpick-desc">Validasi TIN/NPWP instan, pembuatan QR Code faktur otomatis, konsolidasi e-Invoice, dan fitur revisi faktur dalam batas waktu legal.</p>
        </div>

        <div class="hotpick-card">
          <div class="hotpick-icon"><i class="fas fa-calculator"></i></div>
          <h3 class="hotpick-title">Intelligent Stock Costing</h3>
          <p class="hotpick-desc">Kalkulasi ulang stok cerdas saat terjadi perubahan transaksi masa lalu tanpa mengganggu keabsahan mutasi buku besar historis.</p>
        </div>

        <div class="hotpick-card">
          <div class="hotpick-icon"><i class="fas fa-tags"></i></div>
          <h3 class="hotpick-title">Multi-Tier Price Book</h3>
          <p class="hotpick-desc">Mendukung hingga 6 level harga dan diskon bertingkat berdasarkan kategori pelanggan, kuantitas volume beli, atau periode promo.</p>
        </div>

        <div class="hotpick-card">
          <div class="hotpick-icon"><i class="fas fa-file-shield"></i></div>
          <h3 class="hotpick-title">Document Linking & Audit</h3>
          <p class="hotpick-desc">Keterlacakan penuh dari Quotation ke Sales Order, Delivery Order, Invoice, hingga Pelunasan Pembayaran lengkap dengan log modifikasi user.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Detailed Module 1: General Ledger (GL) -->
  <section id="gl" class="section-padding" style="background: var(--bg-subtle);">
    <div class="container">
      <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 4rem; align-items: center;">
        <div>
          <p class="subhead">CORE ACCOUNTING & GENERAL LEDGER</p>
          <h2 style="margin-bottom: 1rem;">Otomatisasi Pembukuan Double-Entry Berkecepatan Tinggi</h2>
          <p style="color: var(--text-muted); margin-bottom: 1.5rem;">
            FinCount Pro V2 memastikan setiap debet dan kredit tercatat secara seimbang tanpa jeda waktu. Menangani pembukuan multi-anak perusahaan, multi-cabang, dan multi-mata uang asing.
          </p>
          <ul class="feature-list" style="margin-bottom: 2rem;">
            <li><strong>Flexible Chart of Accounts:</strong> Bagan akun multi-level dengan kode akun dinamis sesuai format PSAK atau IFRS.</li>
            <li><strong>Recurring Entries Automation:</strong> Set transaksi berkala untuk biaya sewa, amortisasi, atau depresiasi aset tetap.</li>
            <li><strong>Financial Statements On-Demand:</strong> Neraca Saldo, Neraca Keuangan (Balance Sheet), dan Laporan Laba Rugi (P&L) komparatif.</li>
            <li><strong>Foreign Exchange Gain/Loss:</strong> Kalkulasi otomatis laba/rugi selisih kurs yang terealisasi maupun belum terealisasi.</li>
          </ul>
          <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn btn-primary"><i class="fas fa-download"></i> Unduh Lembar Modul GL</a>
        </div>
        <div>
          <div style="background: #FFFFFF; border-radius: 16px; border: 1px solid var(--border-light); padding: 2rem; box-shadow: var(--shadow-lg);">
            <div style="display: flex; justify-content: space-between; align-items: center; border-bottom: 1px solid var(--border-light); padding-bottom: 1rem; margin-bottom: 1.25rem;">
              <strong style="color: var(--secondary);"><i class="fas fa-scale-balanced" style="color: var(--primary); margin-right: 8px;"></i> Neraca Saldo Otomatis (Trial Balance)</strong>
              <span style="font-size: 0.75rem; background: #DCFCE7; color: #166534; padding: 2px 8px; border-radius: 99px; font-weight: 700;">BALANCED</span>
            </div>
            <table style="width: 100%; font-size: 0.85rem; border-collapse: collapse;">
              <tr style="border-bottom: 1px dashed var(--border-light);">
                <td style="padding: 8px 0;">1000 - Kas & Setara Kas (BCA & Mandiri)</td>
                <td style="text-align: right; font-weight: 700; color: #0054A6;">Rp 850.400.000</td>
              </tr>
              <tr style="border-bottom: 1px dashed var(--border-light);">
                <td style="padding: 8px 0;">1200 - Piutang Dagang (Accounts Receivable)</td>
                <td style="text-align: right; font-weight: 700; color: #0054A6;">Rp 410.250.000</td>
              </tr>
              <tr style="border-bottom: 1px dashed var(--border-light);">
                <td style="padding: 8px 0;">1300 - Persediaan Barang Dagang (Inventory)</td>
                <td style="text-align: right; font-weight: 700; color: #0054A6;">Rp 620.000.000</td>
              </tr>
              <tr style="border-bottom: 1px dashed var(--border-light);">
                <td style="padding: 8px 0; color: #64748B;">2000 - Hutang Usaha (Accounts Payable)</td>
                <td style="text-align: right; color: #EF4444;">(Rp 340.500.000)</td>
              </tr>
              <tr style="background: #EBF3FC; font-weight: 800;">
                <td style="padding: 10px 6px; color: var(--primary);">Total Ekuitas & Laba Ditahan</td>
                <td style="padding: 10px 6px; text-align: right; color: var(--primary);">Rp 1.540.150.000</td>
              </tr>
            </table>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Detailed Module 2: e-Invoice -->
  <section id="einvoice" class="section-padding" style="background: #FFFFFF;">
    <div class="container">
      <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 4rem; align-items: center;">
        <div style="order: 2;">
          <p class="subhead">COMPLIANT E-INVOICE SOLUTION</p>
          <h2 style="margin-bottom: 1rem;">Integrasi e-Faktur Pajak Digital Tanpa Repot</h2>
          <p style="color: var(--text-muted); margin-bottom: 1.5rem;">
            Hilangkan proses input ulang invoice penjualan ke aplikasi pihak ketiga. FinCount Pro V2 memiliki modul e-Invoice bawaan yang memvalidasi format dokumen secara otomatis.
          </p>
          <ul class="feature-list" style="margin-bottom: 2rem;">
            <li><strong>Automated QR Code Generation:</strong> Setiap faktur yang divalidasi langsung disematkan QR Code resmi.</li>
            <li><strong>Batch e-Invoice Submission:</strong> Kirim ratusan faktur sekaligus dalam satu kali klik ke sistem perpajakan.</li>
            <li><strong>One-Click WhatsApp & Email Sending:</strong> Kirim dokumen penagihan langsung ke WhatsApp pelanggan dengan template pesan rapi.</li>
            <li><strong>Credit Control System:</strong> Kunci pesanan otomatis saat plafon kredit atau batas jatuh tempo pelanggan terlampaui.</li>
          </ul>
          <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn btn-accent"><i class="fas fa-play"></i> Konsultasi Integrasi e-Faktur</a>
        </div>
        <div style="order: 1;">
          <div style="background: #FFFFFF; border-radius: 16px; border: 1px solid var(--border-light); padding: 2rem; box-shadow: var(--shadow-lg);">
            <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 1.25rem;">
              <span style="font-weight: 700; color: var(--secondary);"><i class="fas fa-receipt" style="color: var(--accent); margin-right: 8px;"></i> e-Faktur Status Monitor</span>
              <span style="background: #DCFCE7; color: #166534; font-size: 0.75rem; padding: 2px 8px; border-radius: 99px; font-weight: 700;">VALIDATED</span>
            </div>
            <div style="background: #F8FAFC; border: 1px solid var(--border-light); border-radius: 8px; padding: 1.25rem; font-size: 0.85rem;">
              <div style="display: flex; justify-content: space-between; margin-bottom: 8px;">
                <span style="color: #64748B;">No Faktur Penjualan:</span>
                <strong>INV-2026-00481</strong>
              </div>
              <div style="display: flex; justify-content: space-between; margin-bottom: 8px;">
                <span style="color: #64748B;">Status Perpajakan:</span>
                <span style="color: #10B981; font-weight: 700;">TERVERIFIKASI SERVER</span>
              </div>
              <div style="display: flex; justify-content: space-between; margin-bottom: 8px;">
                <span style="color: #64748B;">Nilai Dasar Pengenaan Pajak (DPP):</span>
                <strong>Rp 100.000.000</strong>
              </div>
              <div style="display: flex; justify-content: space-between;">
                <span style="color: #64748B;">Tarif Pajak PPN (12%):</span>
                <strong style="color: var(--primary);">Rp 12.000.000</strong>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Detailed Module 3: Stock & Inventory Costing -->
  <section id="inventory" class="section-padding" style="background: var(--bg-subtle);">
    <div class="container">
      <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 4rem; align-items: center;">
        <div>
          <p class="subhead">ADVANCED INVENTORY CONTROL</p>
          <h2 style="margin-bottom: 1rem;">Kontrol Persediaan & Analisis Margin Laba Presisi</h2>
          <p style="color: var(--text-muted); margin-bottom: 1.5rem;">
            Dirancang khusus untuk bisnis ritel, distributor, dan perusahaan perdagangan bervolume tinggi. Ketahui dengan tepat nilai persediaan dan laba kotor per item barang secara akurat.
          </p>
          <ul class="feature-list" style="margin-bottom: 2rem;">
            <li><strong>Multiple Costing Methods:</strong> Pilihan metode kalkulasi FIFO, Weighted Average, dan LIFO otomatis.</li>
            <li><strong>Multi-Location Warehouse:</strong> Kelola perpindahan stok antar cabang gudang dengan dokumen transfer resmi.</li>
            <li><strong>Batch & Expiry Date Tracking:</strong> Pelacakan masa kedaluwarsa dan nomor seri untuk industri makanan, medis, dan suku cadang.</li>
            <li><strong>Stock Disassembly & BOM:</strong> Pembongkaran atau perakitan barang jadi dari komponen bahan baku secara otomatis.</li>
          </ul>
          <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn btn-outline"><i class="fas fa-boxes-packing"></i> Minta Demo Modul Stok</a>
        </div>
        <div>
          <div style="background: #FFFFFF; border-radius: 16px; border: 1px solid var(--border-light); padding: 2rem; box-shadow: var(--shadow-lg);">
            <div style="font-weight: 700; color: var(--secondary); margin-bottom: 1rem; display: flex; justify-content: space-between;">
              <span>Kartu Stok Real-Time (Stock Card)</span>
              <span style="font-size: 0.8rem; color: var(--accent);">FIFO Costing</span>
            </div>
            <div style="display: flex; flex-direction: column; gap: 10px; font-size: 0.85rem;">
              <div style="padding: 10px; background: #F8FAFC; border-radius: 6px; display: flex; justify-content: space-between;">
                <span>Stok Fisik Gudang Pusat</span>
                <strong style="color: #10B981;">3.450 Pcs (Tersedia)</strong>
              </div>
              <div style="padding: 10px; background: #F8FAFC; border-radius: 6px; display: flex; justify-content: space-between;">
                <span>Stok Dipesan Customer (SO)</span>
                <strong style="color: #F59E0B;">280 Pcs (Alokasi)</strong>
              </div>
              <div style="padding: 10px; background: #F8FAFC; border-radius: 6px; display: flex; justify-content: space-between;">
                <span>Stok Bebas Jual (Free Stock)</span>
                <strong style="color: #0054A6;">3.170 Pcs</strong>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Detailed Module 4: Cloud Accounting -->
  <section id="cloud" class="section-padding" style="background: #FFFFFF;">
    <div class="container">
      <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 4rem; align-items: center;">
        <div>
          <p class="subhead">FINCOUNT CLOUD ACCOUNTING</p>
          <h2 style="margin-bottom: 1rem;">Akses Pembukuan Real-Time dari Browser & Ponsel Anda</h2>
          <p style="color: var(--text-muted); margin-bottom: 1.5rem;">
            Bekerja fleksibel tanpa batasan lokasi fisik. FinCount Cloud memungkinkan Anda dan tim akuntansi berkolaborasi secara langsung dari laptop, tablet, atau smartphone tanpa perlu instalasi server rumit.
          </p>
          <ul class="feature-list" style="margin-bottom: 2rem;">
            <li><strong>Akses Kapan Saja & Di Mana Saja:</strong> Cukup buka browser Google Chrome atau Safari dan login dengan kredensial aman.</li>
            <li><strong>Pencadangan Otomatis Tingkat Perbankan:</strong> Data keuangan dicadangkan secara berkala ke data center bersertifikat ISO 27001 dengan enkripsi SSL 256-bit.</li>
            <li><strong>Kolaborasi Multi-Cabang Instan:</strong> Satukan data transaksi dari cabang Jakarta, Surabaya, hingga Medan dalam satu laporan keuangan konsolidasi.</li>
            <li><strong>Pembaruan Otomatis:</strong> Pembaruan aturan pajak dan fitur sistem terbaru berjalan mulus tanpa proses instalasi manual.</li>
          </ul>
          <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn btn-accent"><i class="fas fa-cloud-arrow-up"></i> Uji Coba FinCount Cloud</a>
        </div>
        <div>
          <div style="background: #FFFFFF; border-radius: 16px; border: 1px solid var(--border-light); padding: 2rem; box-shadow: var(--shadow-lg);">
            <div style="display: flex; justify-content: space-between; align-items: center; border-bottom: 1px solid var(--border-light); padding-bottom: 1rem; margin-bottom: 1.25rem;">
              <strong style="color: var(--secondary);"><i class="fas fa-cloud" style="color: var(--accent); margin-right: 8px;"></i> Cloud Session Status</strong>
              <span style="font-size: 0.75rem; background: #DCFCE7; color: #166534; padding: 2px 8px; border-radius: 99px; font-weight: 700;">CLOUD SECURE</span>
            </div>
            <div style="display: flex; flex-direction: column; gap: 10px; font-size: 0.85rem;">
              <div style="padding: 10px; background: #F8FAFC; border-radius: 6px; display: flex; justify-content: space-between;">
                <span>Sesi Pengguna Aktif</span>
                <strong style="color: #0054A6;">6 Pengguna (Multi-User)</strong>
              </div>
              <div style="padding: 10px; background: #F8FAFC; border-radius: 6px; display: flex; justify-content: space-between;">
                <span>Lokasi Data Center</span>
                <strong style="color: #10B981;">Tier 4 Jakarta Data Center</strong>
              </div>
              <div style="padding: 10px; background: #F8FAFC; border-radius: 6px; display: flex; justify-content: space-between;">
                <span>Status Cadangan Harian</span>
                <strong style="color: #10B981;"><i class="fas fa-check"></i> Selesai (02:00 WIB)</strong>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Detailed Module 5: FinCount POS 5.0 -->
  <section id="pos" class="section-padding" style="background: var(--bg-subtle);">
    <div class="container">
      <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 4rem; align-items: center;">
        <div style="order: 2;">
          <p class="subhead">RETAIL & F&B POINT OF SALE</p>
          <h2 style="margin-bottom: 1rem;">FinCount POS 5.0 Terhubung Langsung ke Laba Rugi</h2>
          <p style="color: var(--text-muted); margin-bottom: 1.5rem;">
            Hilangkan input ulang penjualan toko manual. Setiap transaksi yang dicetak di mesin kasir otomatis memotong persediaan barang di gudang dan mencatat pemasukan di laporan keuangan pusat.
          </p>
          <ul class="feature-list" style="margin-bottom: 2rem;">
            <li><strong>Kecepatan Pemindaian 0.2 Detik:</strong> Mendukung barcode scanner laser, printer struk thermal, cash drawer, dan layar ganda kasir.</li>
            <li><strong>Mode Offline Siaga:</strong> Tetap melayani transaksi penjualan saat koneksi internet toko offline; sinkronisasi otomatis saat kembali online.</li>
            <li><strong>Program Loyalitas Pelanggan:</strong> Manajemen data member, akumulasi poin belanja, voucher diskon, dan bundling harga.</li>
            <li><strong>Rekapitulasi Kas Kasir Shift:</strong> Laporan tutup shift kasir akurat untuk pencocokan uang fisik dengan transaksi QRIS/EDC kartu.</li>
          </ul>
          <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn btn-primary"><i class="fas fa-cash-register"></i> Lihat Demo FinCount POS</a>
        </div>
        <div style="order: 1;">
          <div style="background: #FFFFFF; border-radius: 16px; border: 1px solid var(--border-light); padding: 2rem; box-shadow: var(--shadow-lg);">
            <div style="display: flex; justify-content: space-between; align-items: center; border-bottom: 1px solid var(--border-light); padding-bottom: 1rem; margin-bottom: 1.25rem;">
              <strong style="color: var(--secondary);"><i class="fas fa-store" style="color: var(--cyan); margin-right: 8px;"></i> POS Terminal Sync Monitor</strong>
              <span style="font-size: 0.75rem; background: #DCFCE7; color: #166534; padding: 2px 8px; border-radius: 99px; font-weight: 700;">ONLINE SYNC</span>
            </div>
            <div style="display: flex; flex-direction: column; gap: 10px; font-size: 0.85rem;">
              <div style="padding: 10px; background: #F8FAFC; border-radius: 6px; display: flex; justify-content: space-between;">
                <span>Outlet Mall Grand Indonesia</span>
                <strong style="color: #10B981;">142 Struk (Rp 28.450.000)</strong>
              </div>
              <div style="padding: 10px; background: #F8FAFC; border-radius: 6px; display: flex; justify-content: space-between;">
                <span>Outlet Senayan City</span>
                <strong style="color: #10B981;">98 Struk (Rp 19.820.000)</strong>
              </div>
              <div style="padding: 10px; background: #F8FAFC; border-radius: 6px; display: flex; justify-content: space-between;">
                <span>Posting Akuntansi Pusat</span>
                <strong style="color: #0054A6;"><i class="fas fa-check-double"></i> Terposting ke Buku Besar</strong>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Edition Comparison Matrix -->
  <section id="comparison" class="section-padding" style="background: #FFFFFF;">
    <div class="container">
      <div class="section-header">
        <p class="subhead">AUTOCOUNT V2 EDITIONS COMPARISON</p>
        <h2 class="section-title">Matriks Perbandingan Paket FinCount 2.0</h2>
        <p class="section-desc">Pilih edisi yang paling tepat dengan ukuran dan kompleksitas alur bisnis perusahaan Anda.</p>
      </div>

      <div style="overflow-x: auto;">
        <table style="width: 100%; min-width: 760px; border-collapse: collapse; font-size: 0.95rem; border: 1px solid var(--border-light); border-radius: 12px; overflow: hidden; box-shadow: var(--shadow-md);">
          <thead>
            <tr style="background: var(--secondary); color: #fff;">
              <th style="padding: 1.25rem 1.5rem; text-align: left; width: 42%;">Fitur & Modul Utama</th>
              <th style="padding: 1.25rem 1rem; text-align: center;">Basic Edition</th>
              <th style="padding: 1.25rem 1rem; text-align: center; background: var(--primary);">Pro Edition (Best Choice)</th>
              <th style="padding: 1.25rem 1rem; text-align: center;">Ultimate Edition</th>
            </tr>
          </thead>
          <tbody>
            <tr style="background: #F8FAFC; font-weight: 700; border-bottom: 1px solid var(--border-light);">
              <td colspan="4" style="padding: 0.75rem 1.5rem; color: var(--secondary);">MODUL KEUANGAN & PEMBUKUAN</td>
            </tr>
            <tr style="border-bottom: 1px solid var(--border-light);">
              <td style="padding: 0.85rem 1.5rem;">General Ledger (GL), Buku Kas, Jurnal Penyesuaian</td>
              <td style="text-align: center; color: #80C31E;"><i class="fas fa-check-circle fa-lg"></i></td>
              <td style="text-align: center; color: #80C31E; background: #F0F6FD;"><i class="fas fa-check-circle fa-lg"></i></td>
              <td style="text-align: center; color: #80C31E;"><i class="fas fa-check-circle fa-lg"></i></td>
            </tr>
            <tr style="border-bottom: 1px solid var(--border-light);">
              <td style="padding: 0.85rem 1.5rem;">Accounts Receivable (AR) & Accounts Payable (AP)</td>
              <td style="text-align: center; color: #80C31E;"><i class="fas fa-check-circle fa-lg"></i></td>
              <td style="text-align: center; color: #80C31E; background: #F0F6FD;"><i class="fas fa-check-circle fa-lg"></i></td>
              <td style="text-align: center; color: #80C31E;"><i class="fas fa-check-circle fa-lg"></i></td>
            </tr>
            <tr style="border-bottom: 1px solid var(--border-light);">
              <td style="padding: 0.85rem 1.5rem;">Multi-Mata Uang & Kurs Harian Otomatis</td>
              <td style="text-align: center; color: #CBD5E1;"><i class="fas fa-minus"></i></td>
              <td style="text-align: center; color: #80C31E; background: #F0F6FD;"><i class="fas fa-check-circle fa-lg"></i></td>
              <td style="text-align: center; color: #80C31E;"><i class="fas fa-check-circle fa-lg"></i></td>
            </tr>
            <tr style="background: #F8FAFC; font-weight: 700; border-bottom: 1px solid var(--border-light);">
              <td colspan="4" style="padding: 0.75rem 1.5rem; color: var(--secondary);">PENJUALAN, PERSEDIAAN & E-FAKTUR</td>
            </tr>
            <tr style="border-bottom: 1px solid var(--border-light);">
              <td style="padding: 0.85rem 1.5rem;">Faktur Penjualan, Purchase Order & Surat Jalan</td>
              <td style="text-align: center; color: #80C31E;"><i class="fas fa-check-circle fa-lg"></i></td>
              <td style="text-align: center; color: #80C31E; background: #F0F6FD;"><i class="fas fa-check-circle fa-lg"></i></td>
              <td style="text-align: center; color: #80C31E;"><i class="fas fa-check-circle fa-lg"></i></td>
            </tr>
            <tr style="border-bottom: 1px solid var(--border-light);">
              <td style="padding: 0.85rem 1.5rem;">Integrasi e-Faktur Pajak Digital Resmi</td>
              <td style="text-align: center; color: #CBD5E1;"><i class="fas fa-minus"></i></td>
              <td style="text-align: center; color: #80C31E; background: #F0F6FD;"><i class="fas fa-check-circle fa-lg"></i></td>
              <td style="text-align: center; color: #80C31E;"><i class="fas fa-check-circle fa-lg"></i></td>
            </tr>
            <tr style="border-bottom: 1px solid var(--border-light);">
              <td style="padding: 0.85rem 1.5rem;">Kontrol Persediaan Multi-Gudang & Real-time Costing</td>
              <td style="text-align: center; color: #CBD5E1;"><i class="fas fa-minus"></i></td>
              <td style="text-align: center; color: #80C31E; background: #F0F6FD;"><i class="fas fa-check-circle fa-lg"></i></td>
              <td style="text-align: center; color: #80C31E;"><i class="fas fa-check-circle fa-lg"></i></td>
            </tr>
            <tr style="border-bottom: 1px solid var(--border-light);">
              <td style="padding: 0.85rem 1.5rem;">Nomor Batch, Serial Number, & Expired Date Tracking</td>
              <td style="text-align: center; color: #CBD5E1;"><i class="fas fa-minus"></i></td>
              <td style="text-align: center; color: #80C31E; background: #F0F6FD;"><i class="fas fa-check-circle fa-lg"></i></td>
              <td style="text-align: center; color: #80C31E;"><i class="fas fa-check-circle fa-lg"></i></td>
            </tr>
            <tr style="background: #F8FAFC; font-weight: 700; border-bottom: 1px solid var(--border-light);">
              <td colspan="4" style="padding: 0.75rem 1.5rem; color: var(--secondary);">MANUFAKTUR & PROJECT COSTING</td>
            </tr>
            <tr style="border-bottom: 1px solid var(--border-light);">
              <td style="padding: 0.85rem 1.5rem;">Bill of Materials (BOM) & Perakitan/Pabrikasi</td>
              <td style="text-align: center; color: #CBD5E1;"><i class="fas fa-minus"></i></td>
              <td style="text-align: center; color: #CBD5E1; background: #F0F6FD;"><i class="fas fa-minus"></i></td>
              <td style="text-align: center; color: #80C31E;"><i class="fas fa-check-circle fa-lg"></i></td>
            </tr>
            <tr>
              <td style="padding: 0.85rem 1.5rem;">Project & Departmental Costing (Pusat Biaya)</td>
              <td style="text-align: center; color: #CBD5E1;"><i class="fas fa-minus"></i></td>
              <td style="text-align: center; color: #CBD5E1; background: #F0F6FD;"><i class="fas fa-minus"></i></td>
              <td style="text-align: center; color: #80C31E;"><i class="fas fa-check-circle fa-lg"></i></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </section>

  <!-- Bottom CTA (FinCount Green Banner Style) -->
  <section class="cta-section" style="background: var(--accent-gradient);">
    <div class="container cta-box">
      <h2 style="color: #fff;">Tertarik Melihat Demo FinCount Pro 2.0?</h2>
      <p style="color: rgba(255, 255, 255, 0.95); font-size: 1.15rem;">
        Spesialis software kami siap menjadwalkan sesi konsultasi dan presentasi sistem secara daring atau onsite langsung di kantor Anda.
      </p>
      <div class="cta-buttons">
        <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn btn-white btn-lg" style="color: var(--secondary) !important; font-weight: 700;">
          <i class="fas fa-calendar-check"></i> Jadwalkan Demo Gratis Sekarang
        </a>
        <a href="tel:1800887766" class="btn btn-primary btn-lg" style="box-shadow: 0 4px 12px rgba(0,0,0,0.2);">
          <i class="fas fa-phone-alt"></i> Hubungi Sales: 1800 88 7766
        </a>
      </div>
    </div>
  </section>

<?php
get_footer();
