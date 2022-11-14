<?php 
include 'koneksi.php';

if(isset($_POST['submit'])){
    $ID_SUPPLIER = $_POST['ID_SUPPLIER'];
    $NAMA_SUPP = htmlspecialchars($_POST['NAMA_SUPP']);
    $ALAMAT_SUPP = htmlspecialchars($_POST['ALAMAT_SUPP']);
    $KOMODITAS = htmlspecialchars($_POST['KOMODITAS']);

    $query = "UPDATE supplier SET NAMA_SUPP='$NAMA_SUPP', ALAMAT_SUPP='$ALAMAT_SUPP', KOMODITAS='$KOMODITAS'";
    $query .= "WHERE ID_SUPPLIER='$ID_SUPPLIER'";
    $result = mysqli_query($connection, $query);

    if($result){
        echo "<script>alert('Data berhasil diubah!');window.location='data-supplier.php';</script>";  
    } else {
        echo "<script>alert('Data gagal diubah!');window.location='data-supplier.php';</script>";  
    }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <title>Ubah Data Supplier</title>
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/input.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="css/admin.css">
    <link rel="icon" href="./image/supplier.ico">
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
                    <a href="data-supplier.php" class="active"><span class="las la-receipt"></span>
                    <span>Data Supplier</span></a>
                </li>
                <li>
                    <a href="data-karyawan.php"><span class="las la-users"></span>
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
                Data Supplier
            </h2>

            <div class="user-wrapper">
                <img src="image/pic-1.png" width="40px" height="40px" alt="">
                <div>
                    <h4>Admin</h4>
                    <small>Admin</small>
                </div>
            </div>

            <div class="logout-wrapper">
                <a href="logout.php"><span class="las la-power-off"></span></a>
            </div>
        </header>

        <!-- Ini Isi Konten -->
        <main>
            <div class="wrapper">
            <h2>Ubah Data Menu</h2>
            <hr>
            <?php
            include 'koneksi.php';
            $ID_SUPPLIER = $_GET['ID_SUPPLIER'];
            $query_mysql = mysqli_query($connection, "SELECT * FROM supplier WHERE ID_SUPPLIER='$ID_SUPPLIER'");
            $nomor = 1;
            while($data = mysqli_fetch_array($query_mysql)){
            ?>
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="">Nama Supplier</label>
                        <input type="hidden" name="ID_SUPPLIER" value="<?php echo $data['ID_SUPPLIER'] ?>">
                        <input type="text" name="NAMA_SUPP" autocomplete="off" value="<?php echo $data['NAMA_SUPP'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="">Alamat Supplier</label>
                        <input type="hidden" name="ID_SUPPLIER" value="<?php echo $data['ID_SUPPLIER'] ?>">
                        <input type="text" name="ALAMAT_SUPP" autocomplete="off" value="<?php echo $data['ALAMAT_SUPP'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="">Komoditas</label>
                        <input type="hidden" name="ID_SUPPLIER" value="<?php echo $data['ID_SUPPLIER'] ?>">
                        <input type="text" name="KOMODITAS" autocomplete="off" value="<?php echo $data['KOMODITAS' ] ?>">
                    </div>
                    <br>
                    <div class="form-group">
                        <button type="submit" name="submit" value="submit" class="edit">Ubah</button>
                        <button class="kembali"><a href="data-supplier.php" class="kembali">Kembali</a></button>
                    </div>
                </form>
                <?php } ?>
            </div>
        </main>
        <!-- Akhir Isi Konten -->
    </div>

</body>
</html>
