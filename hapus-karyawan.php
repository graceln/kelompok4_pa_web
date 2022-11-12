<?php 
include 'koneksi.php';
$ID_KAR = $_GET['ID_KAR'];
$query = "DELETE FROM karyawan WHERE ID_KAR='$ID_KAR'";
$result = mysqli_query($connection, $query);
 
if(!$result) {
    die("Query Error : ".mysqli_errno($connection)." - ".mysqli_error($connection));
}else{
    echo "<script>alert('Data berhasil dihapus!');window.location='data-karyawan.php';</script>";  
}     
?>