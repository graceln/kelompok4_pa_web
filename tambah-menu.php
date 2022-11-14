<?php 
include 'koneksi.php';

if(isset($_POST['submit'])){
    $nama_menu = htmlspecialchars($_POST['nama_menu']);
    $jenis_menu = htmlspecialchars($_POST['jenis_menu']);
    $harga_menu = htmlspecialchars($_POST['harga_menu']);
    $gambar = $_FILES['gambar']['name'];

    if($gambar != "") {
        $ekstensi = array('jpg', 'png');
        $x = explode('.', $gambar);
        $extension = strtolower(end($x));
        $file_tmp = $_FILES['gambar']['tmp_name'];


        if(in_array($extension, $ekstensi) === true) {
            move_uploaded_file($file_tmp, 'gambar/'.$gambar);

            $query = "INSERT INTO menu (id_menu, nama_menu, jenis_menu, harga_menu, gambar)VALUES('','$nama_menu','$jenis_menu','$harga_menu','$gambar')";
            $result = mysqli_query($connection, $query);

            if(!$result) {
                die("Query Error : ".mysqli_errno($connection)." - ".mysqli_error($connection));
            }else{
                echo "<script>alert('Data berhasil ditambahkan!');window.location='data-menu.php';</script>";  
            }

        }else{
            echo "<script>alert('Ekstensi gambar hanya jpg dan png!');window.location='tambah.php';</script>";   
        }

    }else{
        $query = "INSERT INTO movie (id_menu, nama_menu, jenis_menu, harga_menu)VALUES('','$nama_menu','$jenis_menu','$harga_menu')";
        $result = mysqli_query($connection, $query);

        if(!$result) {
            die("Query Error : ".mysqli_errno($connection)." - ".mysqli_error($connection));
        }else{
            echo "<script>alert('Data berhasil ditambahkan!');window.location='data-menu.php';</script>";  
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
    <title>Tambah Data Menu</title>
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
                <a href="logout.php"><span class="las la-power-off"></span></a>
            </div>
        </header>

        <!-- Ini Isi Konten -->
        <main>
            <div class="wrapper">
            <h2>Tambah Data Menu</h2>
            <hr>
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="">Nama Menu</label>
                        <input type="text" name="nama_menu" required="required" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label for="">Jenis Menu</label>
                        <input type="text" name="jenis_menu" required="required" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label for="">Harga Menu</label>
                        <input type="number"  min="10000" max="50000" name="harga_menu" required="required" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label for="">Gambar</label>
                        <input type="file" name="gambar" required="required">
                    </div>			
                    <br>
                    <div class="form-group">
                        <button type="submit" name="submit" value="submit" class="btn">Tambah</button>
                        <button class="kembali"><a href="data-menu.php" class="kembali">Kembali</a></button>
                    </div>
                </form>
            </div>
        </main>
        <!-- Akhir Isi Konten -->
    </div>

</body>
</html>
