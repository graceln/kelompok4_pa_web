<?php 
include 'koneksi.php';
$ID_MENU = $_GET['ID_MENU'];
$query = "DELETE FROM menu WHERE ID_MENU='$ID_MENU'";
$result = mysqli_query($connection, $query);
 
if(!$result) {
    die("Query Error : ".mysqli_errno($connection)." - ".mysqli_error($connection));
}else{
    echo "<script>alert('Data berhasil dihapus!');window.location='data-menu.php';</script>";  
}     
?>