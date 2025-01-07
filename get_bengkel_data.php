<?php
include 'koneksi.php';

$sql = "SELECT id, nama, alamat, latitude, longitude, nomor_wa, deskripsi, kategori, jadwal_buka_tutup, link_maps FROM bengkel";
$result = $conn->query($sql);

$bengkel_data = array();
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $bengkel_data[] = $row;
    }
}

header('Content-Type: application/json');
echo json_encode($bengkel_data);
$conn->close();
?>