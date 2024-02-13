<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <meta content='text/html; charset=iso-8859-1' http-equiv='Content-type' />
    <meta content='width=330, height=400, initial-scale=1' name='viewport' />
    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
    <?php 
        require_once("../../database/koneksi.php");
        $table = "s_sistem";
        $sql = "SELECT * FROM $table WHERE flags='1'";
        $row = $conn->query($sql);
        $hasil = $row->fetch_array();
    ?>
    <link rel="shortcut icon" href="../../../assets/icon/<?=$hasil["logo"]?>" type="image/x-icon">
    <!--  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <title>Dashboard Login</title>
</head>

<body>
    <div class="layout-navbar-fixed">
        <nav class="navbar navbar-expand-lg bg-secondary">
            <div class="container-fluid py-1">
                <a href="index.php" class="navbar-brand text-white">
                    <img src="../../../assets/icon/<?=$hasil["logo"]?>" alt="<?=$hasil["logo"]?>" width="32"
                        class="shadow opacity-75 bg-danger">
                    <?php echo $hasil["nama_sekolah"] ?>
                </a>
                <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarSupported"
                    aria-expanded="false" aria-controls="navbarSupported">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </nav>
    </div>
    <div class="container-fluid py-5 p-1 mt-0 bg-secondary border border-dark">
        <div class="container-fluid py-5 pt-5 mb-2 bg-black rounded-3">
            <div class="d-flex justify-content-between align-items-center gap-1 flex-wrap">
                <div class="card" style="min-width: 50%; width: 920px; height: 69.1dvh;">
                    <div class="card-body">
                        <h5 class="text-black">Maps Madrasah Ibtidaiyah Al Falah Klender</h5>
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3966.3662054702245!2d106.8952613!3d-6.2153421!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f359c4920e21%3A0xed3db0e1a3f15302!2sMadrasah%20Aliyah%20Swasta%20Al%20Falah%20Klender!5e0!3m2!1sid!2sid!4v1707019489832!5m2!1sid!2sid"
                            style="border:0; min-width: 100%; width: auto; min-height: 60dvh;" allowfullscreen=""
                            loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                </div>
                <div class="card" style="min-width: 30%; width: 378px; height: 69.1dvh;">
                    <div class="card-header shadow-lg">
                        <h5 class="card-title text-center shadow-sm bg-white fs-2">LOGIN DASHBOARD</h5>
                        <h5 class="text-md-center text-secondary shadow-sm fs-6"><?php echo $hasil["nama_sekolah"] ?>
                        </h5>
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="d-grid justify-content-center align-content-center m-5 p-5">
                                <div class="shadow-lg">
                                    <div class="input-group">
                                        <div class="input-group-text col-md-12 col-lg-12">
                                            <input type="text" name="userEmail" id="userEmail" class="form-control"
                                                style="min-width: 85%; width:321px;" required="required"
                                                placeholder="masukan username / email anda">
                                            <div class="bg-transparent border border-0 input-group-text">
                                                <label class="fa fa-envelope" for="userEmail"></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="shadow-lg">
                                    <div class="input-group">
                                        <div class="input-group-text col-md-12 col-lg-12">
                                            <input type="password" name="password" id="password" class="form-control"
                                                style="min-width: 85%; width:321px;" required="required"
                                                placeholder="masukkan password anda">
                                            <div class="bg-transparent border border-0 input-group-text">
                                                <label class="fa fa-lock" id="passwd" onclick="changePass()"></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer me-auto mt-2 mt-lg-2">
                                    <button type="submit" class="btn btn-outline-dark mx-2" name="submit">
                                        <i class="fas fa-save"></i>
                                        <span>Log In</span>
                                    </button>
                                    <button type="reset" class="btn btn-outline-danger mx-2">
                                        <span>Cancel</span>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer">
                        &copy;
                        <span id="tampil">
                            <script type="text/javascript">
                            var date = new Date();
                            var tahun = date.getFullYear();
                            document.getElementById("tampil").innerHTML = tahun;
                            </script>
                            , Madrasah Ibtidaiyah AL Falah Klender
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script type="text/javascript">
    function changePass() {
        if (document.getElementById("password").type === "password") {
            document.getElementById("password").type = "text";
            document.getElementById("passwd").classList.add("fa-lock-open");
            document.getElementById("passwd").style.cursor = "pointer";
        } else {
            document.getElementById("password").type = "password";
            document.getElementById("passwd").classList.remove("fa-lock-open").replace("fa-lock");
            document.getElementById("passwd").style.cursor = "pointer";
        }
    }
    </script>
</body>

</html>