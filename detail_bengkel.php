<?php
include 'koneksi.php';

$id = $_GET['id'];
$sql = "SELECT * FROM bengkel WHERE id = $id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $bengkel = $result->fetch_assoc();
} else {
    echo "Data tidak ditemukan";
    exit;
}
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Bengkel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h2 class="mt-4">Detail Bengkel</h2>
        <table class="table table-bordered mt-3">
            <tbody>
                <tr>
                    <th>Nama</th>
                    <td><?= $bengkel['nama']; ?></td>
                </tr>
                <tr>
                    <th>Alamat</th>
                    <td><?= $bengkel['alamat']; ?></td>
                </tr>
                <tr>
                    <th>Nomor WA</th>
                    <td><?= $bengkel['nomor_wa']; ?></td>
                </tr>
                <tr>
                    <th>Lokasi</th>
                    <td>[<?= $bengkel['latitude']; ?>, <?= $bengkel['longitude']; ?>]</td>
                </tr>
                <tr>
                    <th>Deskripsi</th>
                    <td><?= $bengkel['deskripsi']?></td>
                </tr>
                <tr>
                    <th>Kategori</th>
                    <td><?= $bengkel['kategori']?></td>
                </tr>
                <tr>
                    <th>Jadwal Buka Tutup</th>
                    <td><?=$bengkel['jadwal_buka_tutup']?></td>
                </tr>
                <tr>
                 <th>Link Google Maps</th>
                <td>
                  <a href="<?= $bengkel['link_maps']; ?>" target="_blank">Buka di Google Maps</a>
                </td>
                </tr>

            </tbody>
        </table>
        <a href="index.php" class="btn btn-secondary">Kembali</a>
    </div>
</body>
</html>
