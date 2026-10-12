<?php
/**
 * Direct PHP Contact Form Handler
 * Processes incoming form submissions, sends email, and returns JSON response.
 */

header('Content-Type: application/json; charset=utf-8');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Metode request tidak diizinkan.']);
    exit;
}

// Sanitize inputs
$name    = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
$email   = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$phone   = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_SPECIAL_CHARS);
$company = filter_input(INPUT_POST, 'company', FILTER_SANITIZE_SPECIAL_CHARS) ?: 'Tidak disebutkan';
$product = filter_input(INPUT_POST, 'product', FILTER_SANITIZE_SPECIAL_CHARS) ?: 'FinCount Pro 2.0';
$message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_SPECIAL_CHARS);

// Validate
if (!$name || !$email || !$phone || !$message) {
    http_response_code(400);
    echo json_encode(['success' => false, 'message' => 'Mohon lengkapi semua bidang yang wajib diisi.']);
    exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    http_response_code(400);
    echo json_encode(['success' => false, 'message' => 'Alamat email tidak valid.']);
    exit;
}

// Mail configuration (default recipient: sales/support)
$to      = 'sales@fincount.id'; // Replace with admin email
$subject = "Pesan Kontak Baru dari: {$name} - {$company} ({$product})";

$email_body = "Anda menerima pertanyaan/permintaan demo baru melalui Website FinCount:\n\n";
$email_body .= "Nama Lengkap: {$name}\n";
$email_body .= "Email: {$email}\n";
$email_body .= "Nomor HP/WA: {$phone}\n";
$email_body .= "Perusahaan: {$company}\n";
$email_body .= "Produk Diminati: {$product}\n";
$email_body .= "Pesan:\n{$message}\n\n";
$email_body .= "Waktu Kirim: " . date('Y-m-d H:i:s') . "\n";
$email_body .= "IP Pengirim: " . ($_SERVER['REMOTE_ADDR'] ?? 'Unknown');

$headers = [];
$headers[] = 'From: FinCount Web <noreply@fincount.id>';
$headers[] = "Reply-To: {$name} <{$email}>";
$headers[] = 'X-Mailer: PHP/' . phpversion();

// Send email using PHP mail() if available
$mail_sent = @mail($to, $subject, $email_body, implode("\r\n", $headers));

// Log contact inquiry to file for record keeping
$log_dir = __DIR__ . '/logs';
if (!is_dir($log_dir)) {
    @mkdir($log_dir, 0755, true);
}
$log_file = $log_dir . '/contacts.log';
$log_entry = sprintf("[%s] Name: %s | Email: %s | Phone: %s | Company: %s | Product: %s | MailSent: %s\n",
    date('Y-m-d H:i:s'), $name, $email, $phone, $company, $product, $mail_sent ? 'YES' : 'NO'
);
@file_put_contents($log_file, $log_entry, FILE_APPEND);

echo json_encode([
    'success' => true,
    'message' => "Terima kasih {$name}, pesan Anda telah berhasil dikirim. Tim spesialis FinCount akan segera menghubungi Anda.",
    'mail_dispatched' => $mail_sent
]);
exit;
