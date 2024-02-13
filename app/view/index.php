<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content='text/html; charset=iso-8859-1' http-equiv='Content-type' />
    <meta content='width=330, height=400, initial-scale=1' name='viewport' />
    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
    <?php 
        require_once("../database/koneksi.php");
        $table = "s_sistem";
        $sql = "SELECT * FROM $table WHERE flags='1'";
        $row = $conn->query($sql);
        $hasil = $row->fetch_array();
    ?>
    <title><?=$hasil["nama_sekolah"]; ?></title>
    <link rel="shortcut icon" href="../../assets/icon/<?=$hasil["logo"]?>" type="image/x-icon">
    <!--  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <!-- <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" /> -->
    <link rel="stylesheet" href="../../dist/css/glyphicon.css">
    <!--  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <style type="text/css">
    .fa-home {
        animation: colorChange 5s infinite linear;
    }

    @keyframes colorChange {
        25% {
            color: gray;
        }

        50% {
            color: red;
        }

        75% {
            color: red;
        }

        100% {
            color: gray;
        }
    }
    </style>

    <script>
    function buttonMI() {
        document.getElementById("textChange").innerText = "Fotocopy Rapor Terakhir";
        document.getElementById("rupiah").innerText = "Rp. 350.000,-";
    }

    function buttonMTS() {
        document.getElementById("textChange").innerText = "Fotocopy SKL sebagai pengganti ijazah sementara";
        document.getElementById("rupiah").innerText = "Rp. 400.000,-";
    }

    function buttonMA() {
        document.getElementById("textChange").innerText = "Fotocopy SKL sebagai pengganti ijazah sementara";
        document.getElementById("rupiah").innerText = "Rp. 450.000,-";
    }

    $(document).ready(function() {
        // Add smooth scrolling to all links
        $("a").on('click', function(event) {

            // Make sure this.hash has a value before overriding default behavior
            if (this.hash !== "") {
                // Prevent default anchor click behavior
                event.preventDefault();

                // Store hash
                var hash = this.hash;

                // Using jQuery's animate() method to add smooth page scroll
                // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
                $('html, body').animate({
                    scrollTop: $(hash).offset().top
                }, 800, function() {

                    // Add hash (#) to URL when done scrolling (default click behavior)
                    window.location.hash = hash;
                });
            } // End if
        });
    });
    </script>
</head>

<body style="background-color: gray;" class="active" id="beranda">
    <header class="navbar-expand-lg" style="min-height: 8vh;">
        <nav class="navbar navbar-expand-lg navbar-nav-scroll bg-body-secondary">
            <div class="container-fluid">
                <a href="index.php" class="navbar-brand">
                    <i class="fa fa-school shadow-sm fs-4 text-black-50"></i>
                    <?php echo $hasil["nama_sekolah"] ?>
                </a>
                <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarSupported"
                    aria-controls="navbarSupported" aria-hidden="false">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupported">
                    <ul class="ms-auto mb-2 mb-lg-1 navbar-nav">
                        <li class="nav-item">
                            <a href="index.php" aria-current="page" class="nav-link active">
                                <i class="fa fa-home fs-4 text-black-50 shadow-sm"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#contact" aria-current="page" class="nav-link active">
                                <i class="fa fa-address-book fs-4 text-black-50 shadow-sm"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="" data-bs-target="#account" data-bs-toggle="modal" aria-controls="modal"
                                aria-hidden="false" aria-current="page" class="nav-link active">
                                <i class="fa fa-sign-in-alt fs-4 text-black-50 shadow-sm"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="modal fade" id="account" tabindex="-1" aria-hidden="false">
            <div class="container-md mt-5 pt-5">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">

                        </div>
                        <div class="modal-body">
                            <form action="" method="post" enctype="multipart/form-data">

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section>
        <div class="container-fluid py-5 p-2 rounded-1">
            <div class="container-fluid py-1">
                <h3 class="display-5 text-center">
                    MI AL FALAH KLENDER
                    <br>
                    <h3 class="fs-4 fw-normal text-center">
                        alamat : <?php echo ucfirst($hasil['alamat']) ?>
                    </h3>
                </h3>
                <br>
                <div class="container-md container-lg py-5 p-2 bg-body-tertiary rounded-1">
                    <div class="d-flex justify-content-around align-items-center flex-wrap">
                        <!-- Image Start -->
                        <!-- Image Finish -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container-fluid py-5 p-2 rounded-1">
            <div class="container-md container-lg py-5 border border-1 bg-light rounded-1">
                <h3 class="fs-3 text-center text-success mb-3 mb-lg-3">
                    PPDB MADRASAH Ibtidaiyah AL FALAH KLENDER
                    <br>
                    <p class="text-black fw-normal fs-3 mt-3 mt-lg-3">Persyaratan & Pendaftaran PPDB</p>
                    <br>
                    <div class="flex-wrap d-flex justify-content-center align-items-center">
                        <div class="border border-top mx-auto border-success" style="border: 4px solid; width: 25%;">
                        </div>
                        <i class="fa fa-tag text-secondary"></i>
                        <div class="border border-top mx-auto border-success" style="border: 4px solid; width: 25%;">
                        </div>
                    </div>
                </h3>
                <nav class="navbar navbar-expand-lg">
                    <ul class="navbar-nav mx-auto">
                        <div class="flex-wrap">
                            <button type="button" onclick="buttonMI()"
                                class="btn btn-success btn-outline-dark border-light rounded-2 fs-3 text-white"
                                style="width: 250px; min-width:250px; height:50px; min-height:50px;">
                                <span class="fw-semibold">MI / SD</span>
                            </button>
                            <button type="button" onclick="buttonMTS()" hidden
                                class="btn btn-success btn-outline-dark border-light rounded-2 fs-3 text-white mx-5">
                                <span class="fw-semibold">MTS / SMP</span>
                            </button>
                            <button type="button" onclick="buttonMA()" hidden
                                class="btn btn-success btn-outline-dark border-light rounded-2 fs-3 text-white mx-5">
                                <span class="fw-semibold">MA / SMA</span>
                            </button>
                        </div>
                    </ul>
                </nav>
                <div class="border border-bottom border-dark rounded-1"></div>
                <div class="d-flex justify-content-start align-items-start flex-wrap mt-2 mt-lg-2 bg-light">
                    <div class="container-md">
                        - Membayar Biaya Formulir Pendaftaraan Rp. 150.000,- dan Biaya Pendaftaraan Siswa Baru<br>
                        - Melampirkan data calon siswa baru :
                    </div>
                    <div class="container-md">
                        <ul>
                            <li>Formulir Pendaftaran</li>
                            <li>Fotocopy Ijazah ( Jika sudah ada )</li>
                            <li id="textChange">Fotocopy Rapor Terakhir</li>
                            <li>Fotocopy KTP Ayah & Ibu / Wali</li>
                            <li>Fotocopy Kartu Keluarga (KK)</li>
                            <li>Fotocopy Akta Kelahiran</li>
                            <li>Fotocopy NISN</li>
                        </ul>
                    </div>
                    <div class="container-md">
                        - Mengikuti Kegiatan MATSAMA (Masa Ta'aruf Siswa Madrasah) untuk siswa baru. <br>
                        - Bersedia mengikuti segala ketentuan dan peraturan yang di tetapkan oleh Yayasan Al Falah
                        Klender dan Pihak Madrasah . <br>
                        - Biaya Pendidikan Perbulan sebesar <span id="rupiah">Rp. 350.000,-</span> dan dibayarkan paling
                        lambat tanggal 10 setiap bulannya.
                    </div>
                </div>
                <div class="border border-bottom border-dark rounded-1 mt-2 mt-lg-2"></div>
            </div>
        </div>
    </section>

    <section style="min-height: 100vh;" id="contact">
        <div class="container-fluid py-1 p-1 rounded-1">
            <div class="container-md container-lg py-3 border border-1 bg-light rounded-1">
                <h3 class="fs-3 text-center text-success mb-1 mb-lg-1">
                    Informasi Kontak PPDB
                    <br>
                    <br>
                    <div class="flex-wrap d-flex justify-content-center align-items-center">
                        <div class="border border-top mx-auto border-success" style="border: 4px solid; width: 25%;">
                        </div>
                        <span class="fa fa-address-book text-secondary"></span>
                        <div class="border border-top mx-auto border-success" style="border: 4px solid; width: 25%;">
                        </div>
                    </div>
                    <p class="text-black fw-normal fs-5 mt-3 mt-lg-3">Untuk informasi lebih lanjut, silahkan untuk
                        menghubungi narahubung tingkatan masing-masing madrasah.</p>
                </h3>
                <div class="py-3 container-md container-lg p-2 rounded-1 bg-light">
                    <div class="d-flex justify-content-around align-items-center flex-wrap">
                        <div class="card col-sm-3 col-md-3">
                            <div class="card-header">
                                <h4 class="card-title fs-5 text-center">Narahubung MI/SD</h4>
                            </div>
                            <div class="card-body">
                                <a href="https://wa.me/+6281296642913" role="button"
                                    class="btn btn-danger active my-2 mx-5">
                                    <i class="fab fa-whatsapp"></i>
                                    <span>Ibu Luthfia, S.Pd.I</span>
                                    <h6>+62-812-9664-2913</h6>
                                </a>
                                <a href="https://wa.me/+6285710282432" role="button" class="btn btn-danger active mx-5">
                                    <i class="fab fa-whatsapp"></i>
                                    <span>Ibu Ekawati, S.Pd.I</span>
                                    <h6>+62-857-1028-2432</h6>
                                </a>
                            </div>
                        </div>
                        <div class="card col-sm-3 col-md-3" hidden>
                            <div class="card-header">
                                <h4 class="card-title fs-5 text-center">Narahubung MTS/SMP</h4>
                            </div>
                            <div class="card-body">
                                <a href="https://wa.me/+6281319594441" role="button"
                                    class="btn btn-primary active my-2 mx-5">
                                    <i class="fab fa-whatsapp"></i>
                                    <span>Ibu Siti Rohmah, S.Pd.</span>
                                    <h6>+62-813-1959-4441</h6>
                                </a>
                                <a href="https://wa.me/+628133837381" role="button" class="btn btn-primary active mx-5">
                                    <i class="fab fa-whatsapp"></i>
                                    <span>Ibu Sri Eni Armiati, M.Pd.</span>
                                    <h6>+62-813-3837-381</h6>
                                </a>
                            </div>
                        </div>
                        <div class="card col-sm-3 col-md-3" hidden>
                            <div class="card-header">
                                <h4 class="card-title fs-5 text-center">Narahubung MA/SMA</h4>
                            </div>
                            <div class="card-body">
                                <a href="https://wa.me/+6282110303159" role="button"
                                    class="btn btn-success active my-2 mx-5">
                                    <i class="fab fa-whatsapp"></i>
                                    <span>Ibu Nurhayati, S.Pd.</span>
                                    <h6>+62-821-1030-3159</h6>
                                </a>
                                <a href="https://wa.me/+6281266747240" role="button"
                                    class="btn btn-success active mx-5">
                                    <i class="fab fa-whatsapp"></i>
                                    <span>Ibu Yusi Yurezki, S.Pd.</span>
                                    <h6>+62-812-6674-7240</h6>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-lg container-xl bg-success active">
            <footer class="row row-cols-1 row-cols-sm-2 row-cols-md-5 py-5 my-5 border-top border-dark">
                <div class="col-md-4 col-lg-4 mb-3">
                    <div class="card border border-0 bg-transparent">
                        <div class="card-header border border-0 bg-transparent">
                            <h5 class="card-title text-white shadow-lg">
                                <i class="fa fa-school shadow-sm fs-3 text-white"></i>
                                Madrasah Ibtidaiyah
                            </h5>
                        </div>
                        <div class="card-body">
                            <div class="card-text">
                                <p class="fs-6 text-white">
                                    Jalan Pahlawan Revolusi No.2B Klender – Duren Sawit Jakarta Timur 13470
                                </p>
                                <p class="fs-6 text-white">
                                    +62-857-1028-2432
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col mb-3">
                    <h5 class="text-white">Madrasah Ibtidaiyah Al Falah Klender</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2">
                            <a href="#beranda" class="nav-link p-0 text-white">
                                <span>
                                    <i class="glyphicon glyphicon-home fs-5"></i>
                                </span>
                            </a>
                        </li>
                        <li class="nav-item mb-2">
                            <a href="#contact" class="nav-link p-0 text-white">
                                <span>
                                    <i class="fa fa-address-book fs-5"></i>
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="col mb-3">
                    <h5 class="text-white">Maps Madrasah Ibtidaiyah Al Falah Klender</h5>
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3966.3662054702245!2d106.8952613!3d-6.2153421!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f359c4920e21%3A0xed3db0e1a3f15302!2sMadrasah%20Aliyah%20Swasta%20Al%20Falah%20Klender!5e0!3m2!1sid!2sid!4v1707019489832!5m2!1sid!2sid"
                        width="390" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <p class="text-body-secondary">© Madrasah Al Falah Klender, 2024</p>
                </div>

            </footer>
        </div>
    </section>
</body>

</html>