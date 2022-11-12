<?php 
include 'koneksi.php';
$ID_SUPPLIER = $_GET['ID_SUPPLIER'];
$query = "DELETE FROM supplier WHERE ID_SUPPLIER='$ID_SUPPLIER'";
$result = mysqli_query($connection, $query);
 
if(!$result) {
    die("Query Error : ".mysqli_errno($connection)." - ".mysqli_error($connection));
}else{
    echo "<script>alert('Data berhasil dihapus!');window.location='data-supplier.php';</script>";  
}     
?>