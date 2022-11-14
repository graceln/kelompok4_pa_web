<?php 
include 'koneksi.php';
if(isset($_POST['submit'])){
    $ID_MENU = $_POST['ID_MENU'];
    $NAMA_MENU = htmlspecialchars($_POST['NAMA_MENU']);
    $JENIS_MENU = htmlspecialchars($_POST['JENIS_MENU']);
    $HARGA_MENU = htmlspecialchars($_POST['HARGA_MENU']);
    $GAMBAR = $_FILES['gambar']['name'];
    
    if($gambar != "") {
        $ekstensi = array('jpg', 'png');
        $x = explode('.', $gambar);
        $extension = strtolower(end($x));
        $file_tmp = $_FILES['gambar']['tmp_name'];

        if(in_array($extension, $ekstensi) === true) {
            move_uploaded_file($file_tmp, 'gambar/'.$gambar);

            $query = "UPDATE menu SET NAMA_MENU='$NAMA_MENU', JENIS_MENU='$JENIS_MENU', HARGA_MENU='$HARGA_MENU', GAMBAR='$GAMBAR'";
            $query .= "WHERE ID_MENU='$ID_MENU'";
            $result = mysqli_query($connection, $query);

            if(!$result) {
                die("Query Error  : ".mysqli_errno($connection)." - ".mysqli_error($connection));
            }else{
                echo "<script>alert('Data berhasil diubah!');window.location='data-menu.php';</script>";  
            }

        }else{
            echo "<script>alert('Ekstensi gambar hanya jpg dan png!');window.location='edit.php';</script>";   
        }

    }else{
        $query = "UPDATE menu SET NAMA_MENU='$NAMA_MENU', JENIS_MENU='$JENIS_MENU', HARGA_MENU='$HARGA_MENU'";
        $query .= "WHERE ID_MENU='$ID_MENU'";
        $result = mysqli_query($connection, $query);

        if(!$result) {
            die("Query Error  : ".mysqli_errno($connection)." - ".mysqli_error($connection));
        }else{
            echo "<script>alert('Data berhasil diubah!');window.location='data-menu.php';</script>";  
        }     
    }

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <title>Ubah Data Menu</title>
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/input.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="css/admin.css">
    <link rel="icon" href="./image/ahay.ico">
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
                    <a href="data-menu.php" class="active"><span class="las la-coffee"></span>
                    <span>Data Menu</span></a>
                </li>
                <li>
                    <a href="data-supplier.php"><span class="las la-receipt"></span>
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
                Data Menu
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
            <h2>Ubah Data Menu</h2>
            <hr>
            <?php
            include 'koneksi.php';
            $ID_MENU = $_GET['ID_MENU'];
            $query_mysql = mysqli_query($connection, "SELECT * FROM menu WHERE ID_MENU='$ID_MENU'");
            $nomor = 1;
            while($data = mysqli_fetch_array($query_mysql)){
            ?>
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="">Nama Menu</label>
                        <input type="hidden" name="ID_MENU" value="<?php echo $data['ID_MENU'] ?>">
                        <input type="text" name="NAMA_MENU" autocomplete="off" value="<?php echo $data['NAMA_MENU'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="">Jenis Menu</label>
                        <input type="hidden" name="ID_MENU" value="<?php echo $data['ID_MENU'] ?>">
                        <input type="text" name="JENIS_MENU" autocomplete="off" value="<?php echo $data['JENIS_MENU'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="">Harga Menu</label>
                        <input type="hidden" name="ID_MENU" value="<?php echo $data['ID_MENU'] ?>">
                        <input type="number"  min="10000" max="50000" name="HARGA_MENU"autocomplete="off" value="<?php echo $data['HARGA_MENU'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="">Gambar</label>
                        <img src="gambar/<?php echo $data['GAMBAR']; ?>" style="width: 40px;"><br>
                        <input type="hidden" name="ID_MENU" value="<?php echo $data['ID_MENU'] ?>">
                        <input type="file" name="gambar">
                    </div>			
                    <br>
                    <div class="form-group">
                        <button type="submit" name="submit" value="submit" class="edit">Ubah</button>
                        <button class="kembali"><a href="data-menu.php" class="kembali">Kembali</a></button>
                    </div>
                </form>
                <?php } ?>
            </div>
        </main>
        <!-- Akhir Isi Konten -->
    </div>

</body>
</html>
