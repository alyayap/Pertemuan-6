<?php
// Daftar pajak bandara asal
$pajak_asal = [
  "Soekarno Hatta" => 65000,
  "Husein Sastranegara" => 50000,
  "Abdul Rachman Saleh" => 40000,
  "Juanda" => 30000
];

// Daftar pajak bandara tujuan
$pajak_tujuan = [
  "Ngurah Rai" => 85000,
  "Hasanuddin" => 70000,
  "Inanwatan" => 90000,
  "Sultan Iskandar Muda" => 60000
];

$nomor = rand(10000, 99999);
$tanggal = date("d-m-Y");

// Cek apakah data tersedia dari POST
$maskapai = $_POST['maskapai'] ?? '';
$asal = $_POST['asal'] ?? '';
$tujuan = $_POST['tujuan'] ?? '';
$harga = $_POST['harga'] ?? 0;

// Hitung pajak
$pajak_asal_value = $pajak_asal[$asal] ?? 0;
$pajak_tujuan_value = $pajak_tujuan[$tujuan] ?? 0;
$pajak_total = $pajak_asal_value + $pajak_tujuan_value;

// Total harga tiket
$total = $pajak_total + $harga;
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Hasil Pendaftaran</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="style.css" rel="stylesheet">
</head>
<body>
  <div class="container">
    <div class="ticket-box">
      <h2 class="text-center mb-4">Detail Penerbangan</h2>
      <table class="table">
        <tr><th>Nomor:</th><td><?= $nomor ?></td></tr>
        <tr><th>Tanggal:</th><td><?= $tanggal ?></td></tr>
        <tr><th>Nama Maskapai:</th><td><?= htmlspecialchars($maskapai) ?></td></tr>
        <tr><th>Asal Penerbangan:</th><td><?= htmlspecialchars($asal) ?></td></tr>
        <tr><th>Tujuan Penerbangan:</th><td><?= htmlspecialchars($tujuan) ?></td></tr>
        <tr><th>Harga Tiket:</th><td>Rp<?= number_format($harga, 0, ',', '.') ?></td></tr>
        <tr><th>Pajak:</th><td>Rp<?= number_format($pajak_total, 0, ',', '.') ?></td></tr>
        <tr><th>Total Harga Tiket:</th><td>Rp<?= number_format($total, 0, ',', '.') ?></td></tr>
      </table>
      <div class="text-center">
        <button onclick="window.print()" class="btn btn-success">Cetak Tiket</button>
        <a href="index.html" class="btn btn-outline-primary">Kembali</a>
      </div>
    </div>
  </div>
</body>
</html>
