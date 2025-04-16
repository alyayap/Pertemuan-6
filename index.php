<?php
$asal = ["Soekarno Hatta", "Husein Sastranegara", "Abdul Rachman Saleh", "Juanda"];
$tujuan = ["Ngurah Rai", "Hasanuddin", "Inanwatan", "Sultan Iskandar Muda"];
sort($asal);
sort($tujuan);
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Form Pendaftaran Penerbangan</title>
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
  <div class="container mt-5">
    <div class="card shadow p-4 rounded-4">
      <h3 class="text-center mb-4 text-primary">✈️ Pendaftaran Rute Penerbangan</h3>
      <form action="proses.php" method="post">
        <div class="row mb-3">
          <div class="col-md-6">
            <label class="form-label">Nama Maskapai</label>
            <input type="text" class="form-control" name="maskapai" required>
          </div>
          <div class="col-md-6">
            <label class="form-label">Tanggal Penerbangan</label>
            <input type="date" class="form-control" name="tanggal" required>
          </div>
        </div>

        <div class="row mb-3">
          <div class="col-md-6">
            <label class="form-label">Bandara Asal</label>
            <select name="asal" class="form-select" required>
              <option value="">-- Pilih Bandara Asal --</option>
              <?php foreach($asal as $a): ?>
                <option value="<?= $a ?>"><?= $a ?></option>
              <?php endforeach; ?>
            </select>
          </div>
          <div class="col-md-6">
            <label class="form-label">Bandara Tujuan</label>
            <select name="tujuan" class="form-select" required>
              <option value="">-- Pilih Bandara Tujuan --</option>
              <?php foreach($tujuan as $t): ?>
                <option value="<?= $t ?>"><?= $t ?></option>
              <?php endforeach; ?>
            </select>
          </div>
        </div>

        <div class="mb-3">
          <label class="form-label">Harga Tiket (Rp)</label>
          <input type="number" class="form-control" name="harga" min="0" required>
        </div>

        <div class="text-center">
          <button type="submit" class="btn btn-primary px-4">🎫 Pesan Tiket</button>
        </div>
      </form>
    </div>
  </div>
</body>
</html>
