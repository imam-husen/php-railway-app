<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari formulir
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $pesan = $_POST['pesan'];

    // Tentukan nama file untuk menyimpan data
    $file = "data_kontak.csv";

    // Cek apakah file sudah ada
    $is_new_file = !file_exists($file);

    // Buka file dalam mode append (tambahkan data di akhir)
    $handle = fopen($file, "a");

    // Jika file baru, tambahkan header
    if ($is_new_file) {
        fputcsv($handle, ["Nama", "Email", "Pesan"]);
    }

    // Tambahkan data ke file CSV
    fputcsv($handle, [$nama, $email, $pesan]);

    // Tutup file
    fclose($handle);

    // Redirect atau tampilkan pesan sukses
    echo "<script>alert('Pesan berhasil dikirim!'); window.location.href='index.php';</script>";
    exit();
}
?>
