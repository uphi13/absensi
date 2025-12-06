<?php
// ==============================
// KONFIGURASI DATABASE (WAJIB PAKAI PORT 3307)
// ==============================
$db_server   = "127.0.0.1";
$db_port     = "3307"; // ✅ SESUAI XAMPP KAMU
$db_username = "root";
$db_password = "";
$database    = "databases_absensi_wajah_siswa";

// ==============================
// KONEKSI MYSQLI (DENGAN PORT)
// ==============================
$koneksi = mysqli_connect(
    $db_server,
    $db_username,
    $db_password,
    $database,
    $db_port
);

if (!$koneksi) {
    die("Gagal konek ke server: " . mysqli_connect_error());
}

// ==============================
// SET CHARSET KHUSUS PHP 7.0
// ==============================
mysqli_set_charset($koneksi, "latin1");

// ==============================
// KONEKSI PDO (JIKA DIPAKAI)
// ==============================
try {
    $dbh = new PDO(
        "mysql:host=$db_server;port=$db_port;dbname=$database;charset=latin1",
        $db_username,
        $db_password,
        array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)
    );
} catch (PDOException $e) {
    die("Koneksi PDO gagal: " . $e->getMessage());
}
?>
