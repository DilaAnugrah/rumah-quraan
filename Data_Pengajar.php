<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>

    <title>Rumah Quran Asy-Syafi'i</title>

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <!-- awal Navbar -->
        <nav class="navbar navbar-expand-lg fixed-top">
            <div class="container">
                <a class="navbar-brand" href="index.php"><img src="Gambar/logo.jpeg" alt="" height="75" width="175"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavAltMarkup" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup" id="navbarNavDarkDropdown">
                    <div class="navbar-nav ms-auto">
                        <a class="nav-link active" aria-current="page" href="index.php" style="color: white;">Beranda</a>
                        <a class="nav-link active" aria-current="page" href="Kegiatan.php" style="color: white;">Kegiatan</a>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: white;">
                                <b><u>Informasi</u></b>
                            </a>
                            <ul class="dropdown-menu dropdown-menu" style="background-color: #527f3a;">
                                <li><a class="dropdown-item" href="Data_Siswa.php" style="color: white;">Data Siswa</a></li>
                                <li><a class="dropdown-item" href="Data_Pengajar.php" style="color: white;">Data Pengajar</a></li>
                            </ul>
                        </li>
                        <a class="nav-link active" aria-current="page" href="Login.php" style="color: white;">Login</a>
                    </div>
                </div>
            </div>
        </nav>
        <!-- akhir Navbar -->

        <!-- Data Siswa -->
        <div class="siswa">
            <br><br><br>
            <h2>Data Pengajar</h2>
            <br>
            <nav class="navbar bg-light">
                <div class="container">
                    <form class="d-flex ms-auto" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </nav>
            <br>
            <br>
            <table class="table table-success table-striped">
                <tr>
                    <th>No.</th>
                    <th>NIP/NUPTK</th>
                    <th>Nama</th>
                    <th>Jabatan</th>
                </tr>
                <?php 
                    include 'koneksi.php';
                    $no = 1;
                    $data = mysqli_query($koneksi,"select * from data_pengajar");
                    while($d = mysqli_fetch_array($data)){
                        ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $d['NIP']; ?></td>
                            <td><?php echo $d['Nama']; ?></td>
                            <td><?php echo $d['Jabatan']; ?></td>
                            <!-- <td>
                                <a href="edit.php?id=<?php echo $d['id']; ?>">EDIT</a>
                                <a href="hapus.php?id=<?php echo $d['id']; ?>">HAPUS</a>
                            </td> -->
                        </tr>
                        <?php 
                    }
                ?>
            </table>
            <br>
            <br>
            <br>
        </div>
        <!-- Akhir Data Siswa -->

        <!-- Pagination -->
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
                <li class="page-item disabled">
                    <a class="page-link">Previous</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                </li>
            </ul>
        </nav>
        <br><br>
        <!-- Akhir Pagination -->
    </div>

        <!-- footer -->
        <footer>
            <div class="container pb-4">
                <h2 style="padding-top: 3%;">Rumah Quran Asy-Syafi'i</h2>
                <br>
                <img src="Gambar/home.svg" alt="" style="padding-right: 10px;">Jl. Gatot Subroto, Bengkalis Sebelum Simapng 3 Hangtuah
                <br> <br>
                <img src="Gambar/whatsapp-svgrepo-com.svg" alt="" style="padding-right: 10px;">0823-8521-4529
                <br> <br>
                <img src="Gambar/facebook-svgrepo-com.svg" alt=""  style="padding-right: 10px; height: 20px;"> RumahQuran Asy Syafii
                <br><br>
            </div>
        </footer>
        <!-- akhir footer -->
</body>
</html>