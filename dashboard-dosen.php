<?php 


session_start();

if( !isset($_SESSION["username"])){

     header("location:index.php");
}

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Sistem Informasi</title>

    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>Sistem Informasi</h3>
            </div>
            <ul class="list-unstyled components"> 
                <li class="active">
                    <a href="dashboard-dosen.php">Dashboard</a>
                </li>
                <li>
                    <a>Data Mahasiswa</a>
                    <ul class="list-unstyled" id="homeSubmenu">
                        <li>
                            <a href="mhs-bimbingan.php">Mahasiswa Bimbingan</a>
                        </li>
                        <li>
                            <a href="mhs-uji.php">Mahasiswa Diuji</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>

        <div id="content">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <h5>Dashboard</h5>
                    <a href="logout.php" class="btn btn-dark">Keluar</a>
            </nav>
            <div class="container">
                <div class="form-group mb-4">
                    <div class="form-row">
                        <div class="col-lg-3">
                         <h3>Foto</h3>
                        </div>
                        <div class="col-lg-9">
                            <h3 class="text-center">Selamat Datang di SIM Dosen Politeknik Negeri Banyuwangi</h3>
                            <div class="form-group">
                                <div class="form-row">
                                    <div class="col-md-4">NIP</div>
                                    <div class="col-md-8">: 199203302019031012</div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-4">Nama</div>
                                    <div class="col-md-8">: Lutfi Hakim S.Pd.,M.T.</div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-4">Alamat</div>
                                    <div class="col-md-8">: Jln. Kepodang no.11 RT 01 RW 02, Kalirejo, Kabat, Banyuwangi</div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-4">No. Telp/HP</div>
                                    <div class="col-md-8">: 085330161514</div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-4">Prodi</div>
                                    <div class="col-md-8">: D4 - Teknologi Rekayasa Perangkat Lunak</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                 <h1 class="text-center mt-4">Sistem Informasi</h1><br>
                 <h6 class="text-center">Anda berhasil login sebagai Dosen</h6>
            </div>
        </div>
    </body>

</html>