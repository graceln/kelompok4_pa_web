<?php 
// error_reporting(0);
include 'koneksi.php';
// session_start();
// if (!isset($_SESSION['signin'])) {
//     header("Location: signin.php");
//     exit;
// }
$cek = "";
if (isset($_POST['cari'])) {
    $cari = $_POST['keyword'];
    $data = mysqli_query($connection, "SELECT * FROM user WHERE USERNAME LIKE '%$cari%' OR EMAIL LIKE '%$cari%'");
    $cek = mysqli_num_rows($data);
} else {
    $data = mysqli_query($connection, "SELECT * FROM user ORDER BY ID_USER asc");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <title>Data Pembeli</title>
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/cari.css">
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
                Data Pembeli
            </h2>

            <div class="user-wrapper">
                <img src="image/pic-1.png" width="40px" height="40px" alt="">
                <div>
                    <h4>John Doe</h4>
                    <small>Admin</small>
                </div>
            </div>

            <div class="logout-wrapper">
                <a href="index.php"><span class="las la-power-off"></span></a>
            </div>
        </header>

        <!-- Ini Isi Konten -->
        <main>
        <div class="content">
                <h2>DATA PEMBELI</h2>
                <hr><br>
                <button class="btn"><a href="tambah-pembeli.php" class="btn">Tambah</a></button><br><br>
                    <form action="" method="POST">
                        <input  class="search"type="text" name="keyword" id="live-search" placeholder="Cari" autocomplete="off">
                        <button type="submit" name="cari" id="keyword" class="button">Cari</button>
                    </form>
                    <div id="searchresult"></div>
                    <table class="table">
                        <thead>
                            <th>No</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Aksi</th>
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
                                <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td><?php echo $d['USERNAME']; ?></td>
                                    <td><?php echo $d['EMAIL']; ?></td>
                                    <td>
                                        <button class="edit"><a href="ubah-pembeli.php?ID_USER=<?php echo $d['ID_USER']; ?>" class="edit">Ubah</a></button>
                                        <button class="hapus"><a href="hapus-pembeli.php?ID_USER=<?php echo $d['ID_USER']; ?>" onclick="return confirm('Anda yakin hapus data ini?')"
                                        class="hapus">Hapus</a></button>
                                    </td>
                                </tr>
                                <?php
                            }
                            ?>
                        </tbody>
            </table>
        </div>
        </main>
        <!-- Akhir Isi Konten -->

    </div>


</body>
</html>