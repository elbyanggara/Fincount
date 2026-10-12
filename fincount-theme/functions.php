<?php
/**
 * FinCount Pro Theme Functions & Definitions
 *
 * @package FinCount_Theme
 * @version 2.5.0
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

/**
 * 1. Theme Setup
 */
function fincount_theme_setup() {
    // Add default posts and comments RSS feed links to head.
    add_theme_support('automatic-feed-links');

    // Let WordPress manage the document title.
    add_theme_support('title-tag');

    // Enable support for Post Thumbnails on posts and pages.
    add_theme_support('post-thumbnails');
    set_post_thumbnail_size(800, 480, true);

    // Register Navigation Menus
    register_nav_menus([
        'primary' => __('Menu Utama (Header)', 'fincount-theme'),
        'footer'  => __('Menu Footer', 'fincount-theme'),
    ]);

    // Switch default core markup to output valid HTML5.
    add_theme_support('html5', [
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script'
    ]);

    // Support Custom Logo
    add_theme_support('custom-logo', [
        'height'      => 60,
        'width'       => 220,
        'flex-height' => true,
        'flex-width'  => true,
    ]);

    // Responsive embeds
    add_theme_support('responsive-embeds');
}
add_action('after_setup_theme', 'fincount_theme_setup');

/**
 * 2. Enqueue Styles & Scripts
 */
function fincount_theme_scripts() {
    // Google Fonts
    wp_enqueue_style(
        'fincount-google-fonts',
        'https://fonts.googleapis.com/css2?family=Outfit:wght@500;600;700;800&family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap',
        [],
        null
    );

    // Font Awesome Icons
    wp_enqueue_style(
        'font-awesome',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css',
        [],
        '6.5.1'
    );

    // Main Theme CSS
    wp_enqueue_style(
        'fincount-main-style',
        get_template_directory_uri() . '/assets/css/style.css',
        [],
        '2.5.0'
    );

    // Root Style fallback
    wp_enqueue_style(
        'fincount-theme-style',
        get_stylesheet_uri(),
        ['fincount-main-style'],
        '2.5.0'
    );

    // Main JS
    wp_enqueue_script(
        'fincount-main-js',
        get_template_directory_uri() . '/assets/js/main.js',
        [],
        '2.5.0',
        true
    );

    // Localize Script for Contact Form AJAX
    wp_localize_script('fincount-main-js', 'fincount_ajax_obj', [
        'ajax_url' => admin_url('admin-ajax.php'),
        'nonce'    => wp_create_nonce('fincount_contact_nonce'),
    ]);
}
add_action('wp_enqueue_scripts', 'fincount_theme_scripts');

/**
 * 3. SEO Meta Tags & Schema Generator (Layanan SEO)
 */
function fincount_seo_head_tags() {
    if (is_front_page()) {
        $desc = "Kelola keuangan, pembukuan, stok gudang, dan e-Faktur bisnis Anda dengan FinCount Pro V2. Aman, cepat, terintegrasi, dan dipercaya oleh 200.000+ bisnis.";
        $title = "FinCount Pro 2.0 | Software Akuntansi All-in-One Terbaik";
    } elseif (is_page('product') || is_page_template('page-product.php')) {
        $desc = "Eksplorasi modul lengkap FinCount: Buku Besar, Piutang, Hutang, Multi-Gudang, Rekonsiliasi Bank, dan e-Faktur terpadu.";
        $title = "Fitur Lengkap FinCount Pro 2.0";
    } elseif (is_page('about') || is_page_template('page-about.php')) {
        $desc = "Tentang FinCount Software: Pelopor solusi akuntansi andal selama lebih dari 25 tahun di Asia Tenggara.";
        $title = "Tentang Kami | FinCount Software";
    } elseif (is_page('contact') || is_page_template('page-contact.php')) {
        $desc = "Hubungi tim spesialis FinCount untuk demo gratis, informasi lisensi, dan dukungan teknis. Telepon: 1800 88 7766.";
        $title = "Hubungi Kami | FinCount Software";
    } elseif (is_single()) {
        global $post;
        $desc = wp_strip_all_tags(get_the_excerpt($post));
        $title = get_the_title($post) . " | FinCount Blog";
    } else {
        $desc = get_bloginfo('description');
        $title = wp_get_document_title();
    }

    $canonical = esc_url(get_permalink());
    if (is_front_page()) $canonical = esc_url(home_url('/'));
    ?>
    <meta name="description" content="<?php echo esc_attr($desc); ?>">
    <meta name="keywords" content="software akuntansi, fincount accounting, aplikasi pembukuan bisnis, software accounting indonesia, e-faktur pajak, manajemen persediaan, laporan keuangan otomatis">
    <link rel="canonical" href="<?php echo $canonical; ?>">
    <meta property="og:locale" content="id_ID">
    <meta property="og:type" content="<?php echo is_single() ? 'article' : 'website'; ?>">
    <meta property="og:title" content="<?php echo esc_attr($title); ?>">
    <meta property="og:description" content="<?php echo esc_attr($desc); ?>">
    <meta property="og:url" content="<?php echo $canonical; ?>">
    <meta property="og:site_name" content="FinCount Pro">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo esc_attr($title); ?>">
    <meta name="twitter:description" content="<?php echo esc_attr($desc); ?>">
    
    <!-- Schema.org Organization Structured Data -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "SoftwareApplication",
      "name": "FinCount Pro 2.0",
      "operatingSystem": "Windows 10, Windows 11, Web Cloud",
      "applicationCategory": "BusinessApplication",
      "offers": {
        "@type": "Offer",
        "price": "0",
        "priceCurrency": "IDR",
        "description": "Uji Coba Gratis 14 Hari"
      }
    }
    </script>
    <?php
}
add_action('wp_head', 'fincount_seo_head_tags', 1);

/**
 * 4. Contact Form AJAX Handler (Kirim ke Email)
 */
function fincount_handle_contact_form() {
    check_ajax_referer('fincount_contact_nonce', 'nonce');

    $name    = isset($_POST['name']) ? sanitize_text_field($_POST['name']) : '';
    $email   = isset($_POST['email']) ? sanitize_email($_POST['email']) : '';
    $phone   = isset($_POST['phone']) ? sanitize_text_field($_POST['phone']) : '';
    $company = isset($_POST['company']) ? sanitize_text_field($_POST['company']) : 'Tidak disebutkan';
    $product = isset($_POST['product']) ? sanitize_text_field($_POST['product']) : 'FinCount Pro';
    $message = isset($_POST['message']) ? sanitize_textarea_field($_POST['message']) : '';

    if (empty($name) || empty($email) || empty($phone) || empty($message)) {
        wp_send_json_error(['message' => 'Mohon lengkapi semua bidang yang wajib diisi.']);
    }

    if (!is_email($email)) {
        wp_send_json_error(['message' => 'Alamat email tidak valid.']);
    }

    $admin_email = get_option('admin_email');
    $subject = "Permintaan Demo / Kontak Baru dari {$name} ({$company})";
    
    $body = "Pesan baru dari Website FinCount:\n\n";
    $body .= "Nama: {$name}\n";
    $body .= "Email: {$email}\n";
    $body .= "Telepon/WA: {$phone}\n";
    $body .= "Perusahaan: {$company}\n";
    $body .= "Produk Diminati: {$product}\n\n";
    $body .= "Pesan:\n{$message}\n\n";
    $body .= "Tanggal: " . current_time('mysql') . "\n";

    $headers = [
        'Content-Type: text/plain; charset=UTF-8',
        "From: FinCount Web <noreply@" . wp_parse_url(home_url(), PHP_URL_HOST) . ">",
        "Reply-To: {$name} <{$email}>"
    ];

    $sent = wp_mail($admin_email, $subject, $body, $headers);

    wp_send_json_success([
        'message' => "Terima kasih, Bapak/Ibu {$name}! Permintaan Anda telah kami terima. Tim spesialis FinCount akan segera menghubungi Anda.",
        'mail_sent' => $sent
    ]);
}
add_action('wp_ajax_fincount_contact_submit', 'fincount_handle_contact_form');
add_action('wp_ajax_nopriv_fincount_contact_submit', 'fincount_handle_contact_form');

/**
 * 5. Automatic Setup of 5 Default Pages upon Theme Switch
 */
function fincount_create_default_pages() {
    $pages = [
        'front-page' => [
            'title'    => 'Beranda',
            'template' => 'front-page.php',
        ],
        'product' => [
            'title'    => 'Product Features',
            'template' => 'page-product.php',
        ],
        'about' => [
            'title'    => 'About Us',
            'template' => 'page-about.php',
        ],
        'blog' => [
            'title'    => 'Blog',
            'template' => 'index.php',
        ],
        'contact' => [
            'title'    => 'Contact Us',
            'template' => 'page-contact.php',
        ],
    ];

    foreach ($pages as $slug => $data) {
        $existing = get_page_by_path($slug);
        if (!$existing) {
            $page_id = wp_insert_post([
                'post_title'   => $data['title'],
                'post_name'    => $slug,
                'post_status'  => 'publish',
                'post_type'    => 'page',
                'post_content' => 'Konten untuk halaman ' . $data['title'],
            ]);

            if ($page_id && !empty($data['template']) && $data['template'] !== 'index.php') {
                update_post_meta($page_id, '_wp_page_template', $data['template']);
            }

            if ($slug === 'front-page') {
                update_option('show_on_front', 'page');
                update_option('page_on_front', $page_id);
            } elseif ($slug === 'blog') {
                update_option('page_for_posts', $page_id);
            }
        }
    }
}
add_action('after_switch_theme', 'fincount_create_default_pages');
