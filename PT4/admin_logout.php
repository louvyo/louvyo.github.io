<?php
// Mulai sesi jika belum ada
session_start();

// Hapus semua variabel sesi
session_unset();

// Hancurkan sesi
session_destroy();

// Redirect ke halaman login
header('Location: index.html');
exit;
?>
