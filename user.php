<?php 
error_reporting(0);
include 'koneksi.php';
session_start();
if (!isset($_SESSION['signin'])) {
    header("Location: login_user.php");
    exit;
}
if(isset($_POST['submit'])){
    echo "<script>alert('Pemesanan Berhasil!');window.location='user.php';</script>";  
}

$cek = "";
if (isset($_POST['cari'])) {
    $cari = $_POST['keyword'];
    $data = mysqli_query($connection, "SELECT * FROM menu WHERE nama_menu LIKE '%$cari%' OR jenis_menu LIKE '%$cari%' OR harga_menu LIKE '%$cari%'");
    $cek = mysqli_num_rows($data);
} else {
    $data = mysqli_query($connection, "SELECT * FROM menu ORDER BY ID_MENU asc");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <title>Dashboard</title>
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="css/admin.css">
    <link rel="icon" href="./image/dashboard.ico">

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
                    <a href="user.php" class="active"><span class="las la-igloo"></span>
                    <span>Pemesanan</span></a>
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
                Pemesanan
            </h2>

            <div class="user-wrapper">
                <img src="image/pic-1.png" width="40px" height="40px" alt="">
                <div>
                    <h4>User</h4>
                    <small>User</small>
                </div>
            </div>

            <div class="logout-wrapper">
                <a href="logout.php"><span class="las la-power-off"></span></a>
            </div>
        </header>

        <main>
        <div class="content">
                <h2>PEMESANAN MENU</h2>
                <hr><br>                                    
                    <div id="searchresult"></div>
                    <table class="table">
                        <thead>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Jenis</th>
                            <th>Harga</th>                            
                            <th>Gambar</th>
                            <th>Pesan</th>
                        </thead>
                        <?php if($cek == "0") { ?>
                        <tr>
                            <td colspan="7" style="text-align:center;">No data available in table</td>
                        </tr>
                        <?php } ?>
                        <tbody>
                            <?php 
                            include 'koneksi.php';
                            $no = 1;
                            while($d = mysqli_fetch_array($data)){ ?>
                            <form action="" method="POST" enctype="multipart/form-data">
                                <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td><?php echo $d['NAMA_MENU']; ?></td>
                                    <td><?php echo $d['JENIS_MENU']; ?></td>
                                    <td><?php echo $d['HARGA_MENU']; ?></td>                                    
                                    <td><img style="width: 40px;" src="gambar/<?php echo $d['GAMBAR']; ?>"></td>
                                    <td>                                        
                                        <input name="jumlah" type="number" placeholder="Kuantitas"></td>                                                                                
                                    </td>
                                </tr>                                
                                <?php
                            }
                            ?>
                            <button type="submit" name="submit" value="submit" class="btn">Pesan</button><br><br>                        
                            </form>                            
                        </tbody>
            </table>
        </div>

        </mnain>

    </div>


</body>
</html>
