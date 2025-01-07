<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peta Bengkel Kecamatan Karanganyar</title>

    <!-- Link CSS untuk Leaflet -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    
    <!-- Link JS untuk Leaflet -->
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>

    <!-- Link CSS untuk Leaflet Routing Machine -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet-routing-machine/dist/leaflet-routing-machine.css" />

    <!-- Link JS untuk Leaflet Routing Machine -->
    <script src="https://unpkg.com/leaflet-routing-machine/dist/leaflet-routing-machine.js"></script>

    <!-- Link CSS untuk Bootstrap (Navbar dan Footer) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        /* Atur ukuran peta */
        #map {
            height: 500px;
            width: 100%;
        }

        /* Styling navbar dan footer */
        .navbar {
            margin-bottom: 20px;
        }

        footer {
            background-color: #f8f9fa;
            padding: 20px 0;
            text-align: center;
            margin-top: 20px;
        }

        /* Styling tabel */
        .table-container {
            margin-top: 30px;
        }

        .btn-detail {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
        }

        .btn-detail:hover {
            background-color: #0056b3;
        }
    </style>
    
</head>
<body style="background-color: #FCFAEE;">

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg" style="background-color: #7EACB5;">
        <div class="container-fluid">
        <img src="Lambang_Kabupaten_Karanganyar.png" alt="Logo" width="30" height="30" class="d-inline-block align-text-top">
            <a class="navbar-brand" href="#">  Bengkel Kecamatan Karanganyar</a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="#beranda">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#tentang-kami">Tentang Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#kontak">Kontak</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Container untuk Peta -->
    <div class="container" id="beranda">
        <h2 class="text-center mb-4">Peta Bengkel Kecamatan Karanganyar</h2>
        <div id="map"></div>
    </div>

<!-- Tentang Kami -->
<div class="container my-5" id="tentang-kami">
    <div class="text-center">
        <h3 class="mb-4">Tentang Kami</h3>
        <p>
            Sistem Informasi Bengkel  Kecamatan Karanganyar adalah platform yang dirancang untuk memberikan informasi akurat dan terkini tentang bengkel-bengkel yang ada di wilayah Kecamatan Karanganyar. 
            Kami berkomitmen untuk mempermudah masyarakat dalam menemukan bengkel terdekat yang sesuai dengan kebutuhan mereka.
        </p>
        <p>
            Dengan fitur peta interaktif dan daftar bengkel yang lengkap, kami berharap dapat menjadi solusi bagi masyarakat untuk mencari layanan bengkel secara cepat dan efisien.
        </p>
    </div>
<!-- Tabel Bengkel -->
<div class="container table-container">
    <h4 class="text-center mb-4">Daftar Bengkel</h4>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Bengkel</th>
                <th>Alamat</th>
                <th>Nomor WA</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody id="bengkel-table-body">
            <!-- Data bengkel akan dimasukkan di sini menggunakan JavaScript -->
        </tbody>
    </table>

    <!-- Kontainer untuk tombol pagination -->
    <div id="pagination-container" class="text-center mt-4">
        <!-- Tombol pagination akan dimasukkan di sini menggunakan JavaScript -->
    </div>
</div>
<!-- Bagian Kontak -->
<div class="container mt-5 p-4" id="kontak">
    <h4 class="text-center mb-4">Kontak Kami</h4>
    <div class="row">
        <!-- Informasi Kontak -->
        <div class="col-md-6">
            <h5>Hubungi Kami</h5>
            <p><strong>Alamat:</strong>Jl. Raya Solo-Tawangmangu No.KM. 12, Pandes, Papahan, Kec. Tasikmadu, Kabupaten Karanganyar, Jawa Tengah 57761</p>
            <p><strong>Email:</strong>ihusen826@gmail.com</p>
            <p><strong>Telepon:</strong>089677272288</p>
            <p><strong>WhatsApp:</strong> <a href="https://wa.me/6289677272288" target="_blank">+62 896-7727-2288</a></p>
        </div>

        <!-- Formulir Kontak -->
        <div class="col-md-6">
            <h5>Kirim Pesan</h5>
            <form action="kirim_pesan.php" method="POST">
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama Anda</label>
                    <input type="text" class="form-control" id="nama" name="nama" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="mb-3">
                    <label for="pesan" class="form-label">Pesan</label>
                    <textarea class="form-control" id="pesan" name="pesan" rows="5" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Kirim Pesan</button>
            </form>
        </div>
    </div>
</div>

    <!-- Footer -->
    <footer style="background-color: #7EACB5;">
        <p>&copy; 2024 Sistem Informasi Bengkel Kecamatan Karanganyar | All rights reserved</p>
        <p>Teknik Komputer UMUKA</p>
    </footer>

    <!-- Link JS untuk Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        // Inisialisasi peta dengan lokasi default (misal Kecamatan Karanganyar)
        var map = L.map('map').setView([-7.603111866678145, 110.96031742367983], 13);

        // Tambahkan peta OpenStreetMap
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        // Variabel untuk menyimpan rute yang sudah dihitung
        var currentRoute = null;

        // Ambil data bengkel dari server
        fetch('get_bengkel_data.php')
            .then(response => response.json())
            .then(bengkelLatLon => {
                let bengkelTableBody = document.getElementById('bengkel-table-body');

                bengkelLatLon.forEach(function(bengkel, index) {
                    // Tambahkan marker untuk setiap bengkel
                    var bengkelMarker = L.marker([bengkel.latitude, bengkel.longitude])
                        .addTo(map)
                        .bindPopup(
                            "<b>" + bengkel.nama + "</b><br>" + bengkel.alamat + 
                            "<br><a href='https://wa.me/" + bengkel.nomor_wa + "' target='_blank'>Hubungi via WhatsApp</a>"
                        );

                    // Tambahkan data bengkel ke tabel
                    // Variabel untuk menyimpan data yang diterima dari server
let bengkelData = [];
let currentPage = 1;
const rowsPerPage = 5; // Jumlah data per halaman

// Fungsi untuk menampilkan data ke tabel
function displayTableData(page) {
    let bengkelTableBody = document.getElementById('bengkel-table-body');
    bengkelTableBody.innerHTML = ""; // Kosongkan tabel sebelum diisi ulang

    // Hitung indeks awal dan akhir data
    const start = (page - 1) * rowsPerPage;
    const end = start + rowsPerPage;

    // Ambil data yang sesuai dengan halaman saat ini
    const paginatedData = bengkelData.slice(start, end);

    // Tambahkan data ke tabel
    paginatedData.forEach((bengkel, index) => {
        const row = bengkelTableBody.insertRow();
        row.innerHTML = `
            <td>${start + index + 1}</td>
            <td>${bengkel.nama}</td>
            <td>${bengkel.alamat}</td>
            <td>${bengkel.nomor_wa}</td>
            <td><a href="detail_bengkel.php?id=${bengkel.id}" class="btn btn-primary">Detail</a></td>
        `;
    });
}

// Fungsi untuk membuat tombol pagination
function setupPagination() {
    const paginationContainer = document.getElementById('pagination-container');
    paginationContainer.innerHTML = ""; // Kosongkan tombol pagination

    const totalPages = Math.ceil(bengkelData.length / rowsPerPage);

    for (let i = 1; i <= totalPages; i++) {
        const button = document.createElement('button');
        button.textContent = i;
        button.classList.add('btn', 'btn-secondary', 'mx-1');
        if (i === currentPage) button.classList.add('active');

        button.addEventListener('click', () => {
            currentPage = i;
            displayTableData(currentPage);
            setupPagination();
        });

        paginationContainer.appendChild(button);
    }
}

// Ambil data bengkel dari server
fetch('get_bengkel_data.php')
    .then(response => response.json())
    .then(data => {
        bengkelData = data; // Simpan data ke variabel global
        displayTableData(currentPage); // Tampilkan halaman pertama
        setupPagination(); // Buat tombol pagination
    })
    .catch(error => {
        console.error('Error:', error);
        alert('Terjadi kesalahan saat memuat data bengkel.');
    });

                    // Ketika marker bengkel diklik, tampilkan rute ke bengkel
                    bengkelMarker.on('click', function() {
                        if (currentRoute) {
                            map.removeControl(currentRoute); // Hapus rute sebelumnya jika ada
                        }

                        // Dapatkan lokasi pengguna saat ini
                        navigator.geolocation.getCurrentPosition(function(position) {
                            var userLat = position.coords.latitude;
                            var userLon = position.coords.longitude;

                            // Buat rute dari lokasi pengguna ke bengkel yang dipilih
                            currentRoute = L.Routing.control({
                                waypoints: [
                                    L.latLng(userLat, userLon), // Lokasi pengguna
                                    L.latLng(bengkel.latitude, bengkel.longitude) // Lokasi bengkel
                                ],
                                routeWhileDragging: true
                            }).addTo(map); // Menambahkan kontrol rute ke peta
                        });
                    });
                });
            });

        // Fungsi untuk mendapatkan lokasi pengguna
        function getUserLocation() {
            if (navigator.geolocation) {
                // Minta lokasi pengguna
                navigator.geolocation.getCurrentPosition(function(position) {
                    var userLat = position.coords.latitude;
                    var userLon = position.coords.longitude;

                    // Tampilkan lokasi pengguna di peta
                    var userMarker = L.marker([userLat, userLon]).addTo(map);
                    userMarker.bindPopup("<b>Lokasi Anda</b>").openPopup();

                    // Pindahkan peta ke lokasi pengguna
                    map.setView([userLat, userLon], 13);
                }, function(error) {
                    alert("Gagal mendapatkan lokasi: " + error.message);
                });
            } else {
                alert("Geolocation tidak didukung oleh browser ini.");
            }
        }

        // Panggil fungsi untuk mendapatkan lokasi pengguna saat halaman dimuat
        getUserLocation();

        
    </script>

</body>
</html>
