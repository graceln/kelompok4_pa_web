<?php 
include 'koneksi.php';
$ID_USER = $_GET['ID_USER'];
$query = "DELETE FROM user WHERE ID_USER='$ID_USER'";
$result = mysqli_query($connection, $query);
 
if(!$result) {
    die("Query Error : ".mysqli_errno($connection)." - ".mysqli_error($connection));
}else{
    echo "<script>alert('Data berhasil dihapus!');window.location='data-pembeli.php';</script>";  
}     
?>