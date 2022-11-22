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
                                Informasi
                            </a>
                            <ul class="dropdown-menu dropdown-menu" style="background-color: #527f3a;">
                                <li><a class="dropdown-item" href="Data_Siswa.php" style="color: white;">Data Siswa</a></li>
                                <li><a class="dropdown-item" href="Data_Pengajar.php" style="color: white;">Data Pengajar</a></li>
                            </ul>
                        </li>
                        <a class="nav-link active" aria-current="page" href="Login.php" style="color: white;"><b><u>Login</u></b></a>
                    </div>
                </div>
            </div>
        </nav>
        <!-- akhir Navbar -->

        <!-- login -->
        <div class="login">
            <div class="card mb-3" style="max-width: 5400px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="Gambar/Login.jpg" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <br> <br>
                            <form method="post" action="login/cek_login.php">
                                <h2 style="text-align: center;">Login</h2>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                                    <input type="email" class="form-control" name="email" id="" aria-describedby="emailHelp">
                                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Password</label>
                                    <input type="password" class="form-control" name="password" id="exampleInputPassword1">
                                </div>
                                <button type="submit" class="btn btn-success" name="login" style="align-items: center;">Login</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Akhir Login -->

        <!-- cek pesan notifikasi -->
        <?php 
        if(isset($_GET['pesan'])){
            if($_GET['pesan'] == "gagal"){
                echo "Login gagal! username dan password salah!";
            }else if($_GET['pesan'] == "logout"){
                echo "Anda telah berhasil logout";
            }else if($_GET['pesan'] == "belum_login"){
                echo "Anda harus login untuk mengakses halaman admin";
            }
        }
        ?>
    </div>
</body>
</html>