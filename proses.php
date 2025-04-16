<?php
$pajak_asal = [
  "Soekarno Hatta" => 65000,
  "Husein Sastranegara" => 50000,
  "Abdul Rachman Saleh" => 40000,
  "Juanda" => 30000
];


$pajak_tujuan = [
  "Ngurah Rai" => 85000,
  "Hasanuddin" => 70000,
  "Inanwatan" => 90000,
  "Sultan Iskandar Muda" => 60000
];

$kelas_harga = [
  "Ekonomi" => 700000,
  "Bisnis" => 1500000,
  "First Class" => 3000000
];

$maskapai = $_POST['maskapai'] ?? '';
$asal = $_POST['asal'] ?? '';
$tujuan = $_POST['tujuan'] ?? '';
$tanggal_keberangkatan = $_POST['tanggal'] ?? '';
$kelas = $_POST['kelas'] ?? '';
$harga = $kelas_harga[$kelas] ?? 0;

$tanggal_input = date("Y-m-d H:i:s");

$pajak_asal_value = $pajak_asal[$asal] ?? 0;
$pajak_tujuan_value = $pajak_tujuan[$tujuan] ?? 0;
$pajak_total = $pajak_asal_value + $pajak_tujuan_value;

$total = $harga + $pajak_total;

$nomor_tiket = "TK-" . strtoupper(uniqid());
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Tiket Penerbangan</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
</head>
<body class="bg-light">
  <div class="container d-flex justify-content-center py-5">
    <div class="ticket-card">
      <h2 class="text-center text-primary mb-4">🎟️ Tiket Penerbangan</h2>

      <div class="ticket-row"><span class="ticket-label">Nomor Tiket:</span><span><?= $nomor_tiket ?></span></div>
      <div class="ticket-row"><span class="ticket-label">Tanggal Input:</span><span><?= $tanggal_input ?></span></div>
      <div class="ticket-row"><span class="ticket-label">Tanggal Keberangkatan:</span><span><?= $tanggal_keberangkatan ?></span></div>
      <div class="ticket-row"><span class="ticket-label">Maskapai:</span><span><?= htmlspecialchars($maskapai) ?></span></div>
      <div class="ticket-row"><span class="ticket-label">Kelas:</span><span><?= htmlspecialchars($kelas) ?></span></div>
      <div class="ticket-row"><span class="ticket-label">Asal Penerbangan:</span><span><?= htmlspecialchars($asal) ?></span></div>
      <div class="ticket-row"><span class="ticket-label">Tujuan Penerbangan:</span><span><?= htmlspecialchars($tujuan) ?></span></div>
      <div class="ticket-row"><span class="ticket-label">Harga Tiket:</span><span>Rp <?= number_format($harga, 0, ',', '.') ?></span></div>
      <div class="ticket-row"><span class="ticket-label">Pajak:</span><span>Rp <?= number_format($pajak_total, 0, ',', '.') ?></span></div>

      <div class="total-section mt-4">
        Total Harga Tiket: Rp <?= number_format($total, 0, ',', '.') ?>
      </div>

      <div class="text-center mt-4">
        <a href="index.php" class="btn btn-primary px-4">⬅️ Kembali ke Form</a>
      </div>
    </div>
  </div>
</body>
</html>
