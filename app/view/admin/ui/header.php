<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content='text/html; charset=iso-8859-1' http-equiv='Content-type' />
    <meta content='width=330, height=400, initial-scale=1' name='viewport' />
    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
    <?php 
        session_start();
        require_once("../../../database/koneksi.php");
        require_once("../../../config/auth.php");
        
        $table = "s_sistem";
        $sql = "SELECT * FROM $table WHERE flags='1'";
        $row = $conn->query($sql);
        $hasil = $row->fetch_array();

        if(isset($_GET['aksi'])){
            $aksi = $_GET['aksi'];
            if($aksi == "keluar"){
                if(isset($_SESSION['status'])){
                    unset($_SESSION['status']);
                    session_unset();
                    session_destroy();
                    $_SESSION = array();
                }
                header("location:../index.php");
                exit(0);
            }
        }

        if(!isset($_GET["page"])){
        }else{
            switch ($_GET["page"]) {
                case 'karyawan-list':
                    header("location:../data/karyawan.php");
                    break;
                    
                case 'siswa-list':
                    header("location:../data/siswa.php");
                    break;

                case 'raport-siswa':
                    header("location:../raport/raport-siswa.php");
                    break;                
                
                default:
                    header("location:../dashboard/index.php");
                    break;
            }
        }

    ?>
    <title>Dashboard <?php echo $hasil["nama_sekolah"] ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">
</head>

<body>
    <div class="app">
        <div class="layout">

        </div>
    </div>