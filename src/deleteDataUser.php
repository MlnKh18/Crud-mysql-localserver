<?php
include('../connection.php');

$id = $_POST['id_pembelian'];

if (!empty($id)) {
    $sql = "DELETE FROM 2201010173_pembelian WHERE id_pembelian ='$id'";
    $query = mysqli_query($conn, $sql);
    $data['status']=200;
    $data['result'][]='Data Berhasil Dihapus';
}else{
    $data['status']= 400;
    $data['result'][]= 'Data Not Found';
}
print_r(json_encode($data));





?>