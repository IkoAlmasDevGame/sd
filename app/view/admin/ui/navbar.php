<?php 
if($_SESSION["user_level"]==""){
    header("location:../index.php");
    exit(0);
}
?>

<?php 
if($_SESSION["user_level"] == "admin" || $_SESSION["user_level"] == "guru"){
?>
<div class="col-md-12 col-lg-12">
    <nav class="navbar navbar-expand-lg bg-secondary active">
        <div class="container-fluid">
            <a href="../dashboard/index.php" class="navbar-brand text-white">
                <img src="../../../../assets/icon/<?=$hasil["logo"]?>" alt="<?=$hasil["logo"]?>" width="32"
                    class="shadow opacity-75 bg-danger">
                <?php echo $hasil["nama_sekolah"]; ?>
            </a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarSupported"
                aria-expanded="false" aria-controls="navbarSupported">
                <span class="navbar-toggler-icon"></span>
            </button>

            <aside class="collapse navbar-collapse" id="navbarSupported">
                <ul class="navbar-nav mx-auto mb-lg-1 mb-1">
                    <li class="nav-item">
                        <a href="" aria-current="page" class="btn btn-outline-light nav-link active">
                            <i class="fa fa-tachometer-alt"></i>
                            <span class="fs-5">Beranda</span>
                        </a>
                    </li>
                    <?php 
                        if(!empty($_SESSION["user_level"] == "admin")){
                    ?>
                    <li class="nav-item mx-2">
                        <div class="dropdown">
                            <a href="" role="button" class="btn btn-outline-light dropdown-toggle"
                                data-bs-toggle="dropdown" aria-controls="dropdown-toggle">
                                <i class="fa fa-user-alt"></i>
                                <span class="fs-5 mx-1">Database</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="dropdown-item-text">
                                    <a href="" aria-current="page" class="dropdown-item bg-light text-black">
                                        <i class="has-icon fa fa-user-alt text-warning"></i>
                                        <span class="fs-6 mx-1">Karyawan</span>
                                    </a>
                                </li>
                                <li class="dropdown-item-text">
                                    <a href="" aria-current="page" class="dropdown-item">
                                        <i class="has-icon fa fa-user-graduate text-success"></i>
                                        <span class="fs-6 mx-1">Siswa/Siswi</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item mx-2">
                        <div class="dropdown">
                            <a href="" role="button" class="btn btn-outline-light dropdown-toggle"
                                data-bs-toggle="dropdown" aria-controls="dropdown-toggle">
                                <span class="fs-5 mx-1">Pembayaran & Raport</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="dropdown-item-text">
                                    <a href="" aria-current="page" class="dropdown-item bg-light text-black">
                                        <i class="has-icon fa fa-book"><i class="fa fa-money-bill"></i></i>
                                        <span class="fs-6 mx-1">Pembayaran SPP</span>
                                    </a>
                                </li>
                                <li class="dropdown-item-text">
                                    <a href="" aria-current="page" class="dropdown-item bg-light text-black">
                                        <i class="has-icon fa fa-book"></i>
                                        <span class="fs-6 mx-1">Raport Siswa/i</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item mx-2">
                        <div class="dropdown">
                            <a href="" role="button" class="btn btn-outline-light dropdown-toggle"
                                data-bs-toggle="dropdown" aria-controls="dropdown-toggle">
                                <i class="fa fa-building"></i>
                                <span class="fs-5 mx-1">Kelas</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="dropdown-item-text">
                                    <a href="" aria-current="page" class="dropdown-item bg-light text-black">
                                        <i class="has-icon fa fa-building text-opacity-75 text-info"><i
                                                class="fa fa-user-graduate text-secondary"></i></i>
                                        <span class="fs-6 mx-1">Kelas 1</span>
                                    </a>
                                </li>
                                <li class="dropdown-item-text">
                                    <a href="" aria-current="page" class="dropdown-item bg-light text-black">
                                        <i class="has-icon fa fa-building text-opacity-75 text-info"><i
                                                class="fa fa-user-graduate text-secondary"></i></i>
                                        <span class="fs-6 mx-1">Kelas 2</span>
                                    </a>
                                </li>
                                <li class="dropdown-item-text">
                                    <a href="" aria-current="page" class="dropdown-item bg-light text-black">
                                        <i class="has-icon fa fa-building text-opacity-75 text-info"><i
                                                class="fa fa-user-graduate text-secondary"></i></i>
                                        <span class="fs-6 mx-1">Kelas 3</span>
                                    </a>
                                </li>
                                <li class="dropdown-item-text">
                                    <a href="" aria-current="page" class="dropdown-item bg-light text-black">
                                        <i class="has-icon fa fa-building text-opacity-75 text-info"><i
                                                class="fa fa-user-graduate text-secondary"></i></i>
                                        <span class="fs-6 mx-1">Kelas 4</span>
                                    </a>
                                </li>
                                <li class="dropdown-item-text">
                                    <a href="" aria-current="page" class="dropdown-item bg-light text-black">
                                        <i class="has-icon fa fa-building text-opacity-75 text-info"><i
                                                class="fa fa-user-graduate text-secondary"></i></i>
                                        <span class="fs-6 mx-1">Kelas 5</span>
                                    </a>
                                </li>
                                <li class="dropdown-item-text">
                                    <a href="" aria-current="page" class="dropdown-item bg-light text-black">
                                        <i class="has-icon fa fa-building text-opacity-75 text-info"><i
                                                class="fa fa-user-graduate text-secondary"></i></i>
                                        <span class="fs-6 mx-1">Kelas 6</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item mx-2">
                        <div class="dropdown">
                            <a href="" role="button" class="btn btn-outline-light dropdown-toggle"
                                data-bs-toggle="dropdown" aria-controls="dropdown-toggle">
                                <i class="fa fa-book-open"></i>
                                <span class="fs-5 mx-1">Jadwal</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="dropdown-item-text">
                                    <a href="" aria-current="page" class="dropdown-item bg-light text-black">
                                        <i class="has-icon fa fa-book text-danger"></i>
                                        <span class="fs-6 mx-1">Jadwal Guru</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item mx-2">
                        <div class="dropdown">
                            <a href="" role="button" class="btn btn-outline-light dropdown-toggle"
                                data-bs-toggle="dropdown" aria-controls="dropdown-toggle">
                                <i class="fa fa-pen"></i>
                                <span class="fs-5 mx-1">Absensi</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="dropdown-item-text">
                                    <a href="" aria-current="page" class="dropdown-item bg-light text-black">
                                        <i class="has-icon fa fa-pen-alt text-danger"></i>
                                        <span class="fs-6 mx-1">Absensi</span>
                                    </a>
                                </li>
                                <li class="dropdown-item-text">
                                    <a href="" aria-current="page" class="dropdown-item bg-light text-black">
                                        <i class="has-icon fa fa-pen-alt text-danger"></i>
                                        <span class="fs-6 mx-1">Lihat Absensi Siswa/i</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <?php
                    }
                        if(!empty($_SESSION["user_level"] == "guru")){
                    ?>
                    <?php
                        }
                    ?>
                    <li class="nav-item">
                        <div class="dropdown">
                            <a href="" role="button" class="btn btn-outline-light dropdown-toggle"
                                data-bs-toggle="dropdown" aria-controls="dropdown-toggle">
                                <i class="fa fa-gear"></i>
                                <span class="fs-5">Settings</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="dropdown-item-text">
                                    <a href="" aria-current="page" class="dropdown-item bg-light text-black">
                                        <i class="has-icon fa fa-edit"></i>
                                        <span class="fs-6 mx-1">Edit Account</span>
                                    </a>
                                </li>
                                <li class="dropdown-item-text">
                                    <a href="" aria-current="page" class="dropdown-item bg-light text-black">
                                        <i class="has-icon fa fa-info"></i>
                                        <span class="fs-6 mx-1">Informasi Edit</span>
                                    </a>
                                </li>
                                <li class="dropdown-item-text">
                                    <a href="../ui/header.php?aksi=keluar"
                                        onclick="javascript:return confirm('Apakah anda ingin keluar dari sini ?')"
                                        aria-current="page" class="dropdown-item text-danger bg-light">
                                        <i class="has-icon fa fa-sign-out-alt"></i>
                                        <span class="fs-6 mx-1">Log Out</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
                <div class="ms-auto mx-4">
                    <div class="dropdown">
                        <a href="" role="button" class="btn btn-outline-light dropdown-toggle" data-bs-toggle="dropdown"
                            aria-controls="dropdown-toggle">
                            <?php echo $_SESSION["email_pengguna"] ?>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-item-text">
                                <span class="fs-6">Nama : <?php echo $_SESSION["nama_pengguna"] ?></span>
                                <span class="fs-6">Jabatan : <?php echo $_SESSION["user_level"] ?></span>
                            </li>
                        </ul>
                    </div>
                </div>
            </aside>
        </div>
    </nav>
</div>
<?php
}else{
    header("location:../index.php");
    exit(0);
}
?>