<?php 
include 'koneksi.php';

if(isset($_POST['submit'])){
    $ID_KAR = $_POST['ID_KAR'];
    $NAMA_KAR = htmlspecialchars($_POST['NAMA_KAR']);
    $JABATAN = htmlspecialchars($_POST['JABATAN']);

    $query = "UPDATE karyawan SET NAMA_KAR='$NAMA_KAR', JABATAN='$JABATAN'";
    $query .= "WHERE ID_KAR='$ID_KAR'";
    $result = mysqli_query($connection, $query);

    if($result){
        echo "<script>alert('Data berhasil diubah!');window.location='data-karyawan.php';</script>";  
    } else {
        echo "<script>alert('Data gagal diubah!');window.location='data-karyawan.php';</script>";  
    }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <title>Ubah Data Karyawan</title>
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/input.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="css/admin.css">
    <link rel="icon" href="./image/user.ico">
</head>
<body>

    <input type="checkbox" id="nav-toggle">
    <div class="sidebar">
        <div class="sidebar-brand">
            <h2><span class="las la-mug-hot"></span><span>Ahay Coffee</span></h2>
        </div>

        <div class="sidebar-menu">
            <ul>
                <li>
                    <a href="admin.php"><span class="las la-igloo"></span>
                    <span>Dashboard</span></a>
                </li>
                <li>
                    <a href="data-menu.php"><span class="las la-coffee"></span>
                    <span>Data Menu</span></a>
                </li>
                <li>
                    <a href="data-supplier.php"><span class="las la-receipt"></span>
                    <span>Data Supplier</span></a>
                </li>
                <li>
                    <a href="data-karyawan.php" class="active"><span class="las la-users"></span>
                    <span>Data Karyawan</span></a>
                </li>
                <li>
                    <a href="data-pembeli.php"><span class="las la-users"></span>
                    <span>Data Pembeli</span></a>
                </li>
            </ul>
        </div>
    </div>

    <div class="main-content">
        <header>
            <h2>
                <label for="nav-toggle">
                    <span class="las la-bars"></span>
                </label>
                Data Karyawan
            </h2>

            <div class="user-wrapper">
                <img src="image/pic-1.png" width="40px" height="40px" alt="">
                <div>
                    <h4>Admin</h4>
                    <small>Admin</small>
                </div>
            </div>

            <div class="logout-wrapper">
                <a href="index.php"><span class="las la-power-off"></span></a>
            </div>
        </header>

        <!-- Ini Isi Konten -->
        <main>
            <div class="wrapper">
            <h2>Ubah Data Karyawan</h2>
            <hr>
            <?php
            include 'koneksi.php';
            $ID_KAR = $_GET['ID_KAR'];
            $query_mysql = mysqli_query($connection, "SELECT * FROM karyawan WHERE ID_KAR='$ID_KAR'");
            $nomor = 1;
            while($data = mysqli_fetch_array($query_mysql)){
            ?>
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="">Nama Karyawan</label>
                        <input type="hidden" name="ID_KAR" value="<?php echo $data['ID_KAR'] ?>">
                        <input type="text" name="NAMA_KAR" autocomplete="off" value="<?php echo $data['NAMA_KAR'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="">Jabatan</label>
                        <input type="hidden" name="ID_KAR" value="<?php echo $data['ID_KAR'] ?>">
                        <input type="text" name="JABATAN" autocomplete="off" value="<?php echo $data['JABATAN'] ?>">
                    </div>
                    <br>
                    <div class="form-group">
                        <button type="submit" name="submit" value="submit" class="edit">Ubah</button>
                        <button class="kembali"><a href="data-karyawan.php" class="kembali">Kembali</a></button>
                    </div>
                </form>
                <?php } ?>
            </div>
        </main>
        <!-- Akhir Isi Konten -->
    </div>

</body>
</html>
