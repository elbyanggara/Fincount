# FinCount Pro - Website WordPress & Standalone Web Application

Website resmi untuk aplikasi software akuntansi modern yang terinspirasi dari desain antarmuka [FinCount Pro](https://www.fincount.id/pro-accounting2.html).

---

## 🌟 Fitur Utama yang Telah Selesai Dibuat

1. **5 Halaman Lengkap & Responsif**:
   - **Front Page (Beranda)**: Hero SaaS interaktif, preview dashboard akuntansi, statistik live counter, modul unggulan, perbandingan edisi (Basic, Pro, Ultimate), ulasan klien, dan CTA.
   - **Product Feature (Halaman Produk)**: Rincian modul Buku Besar (GL), Faktur & e-Invoicing, Kontrol Stok Multi-Gudang, Rekonsiliasi Bank Otomatis, serta tabel perbandingan spesifikasi teknis.
   - **About Us (Tentang Kami)**: Sejarah perusahaan sejak 1996, visi & misi, timeline milestone inovasi, core values, dan sertifikasi (ISO 27001, Microsoft Gold Partner).
   - **Blog (Pusat Edukasi & Artikel)**: Blog siap pakai dengan artikel tips akuntansi, regulasi pajak e-Faktur, manajemen stok, filter kategori, pagination, dan halaman pembaca artikel tunggal (`blog-single.html` / `single.php`).
   - **Contact Us (Hubungi Kami)**: Formulir kontak interaktif berfungsi (dengan feedback instan & pengiriman email), embed peta interaktif Google Maps, jam operasional, dan info kantor.

2. **Layanan SEO & Optimasi**:
   - Meta title, meta description, dan keyword teroptimasi di setiap halaman.
   - Integrasi Open Graph (Facebook/LinkedIn) & Twitter Card metadata.
   - Schema.org Structured Data (`SoftwareApplication`, `LocalBusiness`, `BlogPosting`, `Product`).
   - File `sitemap.xml` dan `robots.txt` siap indeks mesin pencari Google.

3. **Formulir Kontak Berfungsi**:
   - Validasi input realtime (nama, email, no HP, perusahaan, pilihan produk).
   - Penanganan AJAX dengan status loading dan pesan konfirmasi pop-up/alert.
   - Integrasi handler PHP (`contact-handler.php` untuk server mandiri dan `wp_mail()` dengan nonce security untuk WordPress).
   - Pencatatan log kontak masuk ke `logs/contacts.log`.

4. **Integrasi Google Maps & Media Sosial**:
   - Embed iframe Google Maps responsif di halaman kontak.
   - Tombol mengambang (Floating Action Button) WhatsApp direct chat.
   - Tautan media sosial (Facebook, LinkedIn, Instagram, YouTube) di header dan footer.

---

## 📁 Struktur Direktori

```
FinCount/
├── fincount-accounting-theme.zip  <-- File tema siap upload ke WordPress!
├── fincount-theme/                <-- Source code lengkap tema WordPress
│   ├── style.css                   <-- Deklarasi tema WordPress
│   ├── functions.php               <-- Setup tema, AJAX mail, SEO engine, auto-page installer
│   ├── header.php                  <-- Header & navigasi responsif
│   ├── footer.php                  <-- Footer, media sosial & floating WhatsApp
│   ├── front-page.php              <-- Template halaman utama
│   ├── page-product.php            <-- Template halaman fitur produk
│   ├── page-about.php              <-- Template halaman tentang kami
│   ├── page-contact.php            <-- Template halaman kontak & Google Maps
│   ├── index.php                   <-- Template blog archive
│   ├── single.php                  <-- Template postingan artikel blog
│   ├── comments.php                <-- Template komentar blog
│   └── assets/                     <-- Asset CSS, JS, dan ikon tema
├── index.html                      <-- Standalone Preview: Beranda
├── product.html                    <-- Standalone Preview: Fitur Produk
├── about.html                      <-- Standalone Preview: Tentang Kami
├── blog.html                       <-- Standalone Preview: Blog Archive
├── blog-single.html                <-- Standalone Preview: Detail Artikel
├── contact.html                    <-- Standalone Preview: Kontak & Maps
├── contact-handler.php             <-- Backend PHP form kontak mandiri
├── sitemap.xml                     <-- Google XML Sitemap
├── robots.txt                      <-- Konfigurasi crawler SEO
└── assets/
    ├── css/
    │   └── style.css               <-- CSS desain modern FinCount
    └── js/
        └── main.js                 <-- Interaksi menu, tab, counter & AJAX form
```

---

## 🚀 Cara Menggunakan di WordPress

1. Buka dashboard WordPress Anda (`wp-admin`).
2. Masuk ke menu **Appearance (Tampilan)** > **Themes (Tema)** > **Add New (Tambah Baru)**.
3. Klik tombol **Upload Theme (Unggah Tema)** di bagian atas.
4. Pilih file **`fincount-accounting-theme.zip`** yang ada di folder projek ini.
5. Klik **Install Now (Pasang Sekarang)** lalu klik **Activate (Aktifkan)**.
6. Saat tema diaktifkan, tema secara otomatis:
   - Membuat ke-5 halaman utama (`Home`, `Product Features`, `About Us`, `Blog`, `Contact Us`).
   - Menghubungkan template masing-masing halaman.
   - Mengatur homepage dan blog page di pengaturan Reading WordPress.
   - Mengaktifkan fitur SEO otomatis dan handler kontak form `wp_mail()`.

---

## 💻 Cara Menjalankan Pratinjau Lokal (Preview)

Jika ingin membuka langsung di browser komputer Anda tanpa instalasi WordPress:

### Opsi 1: Klik Langsung File HTML
Buka file `index.html` langsung dengan klik dua kali di Windows Explorer menggunakan browser (Chrome, Edge, Firefox).

### Opsi 2: Jalankan PHP Server Lokal
Buka terminal PowerShell di folder ini lalu jalankan:
```bash
php -S localhost:8080
```
Buka browser dan akses alamat:
- Beranda: `http://localhost:8080/index.html`
- Produk: `http://localhost:8080/product.html`
- Tentang Kami: `http://localhost:8080/about.html`
- Blog: `http://localhost:8080/blog.html`
- Kontak: `http://localhost:8080/contact.html`
- Sitemap: `http://localhost:8080/sitemap.xml`
