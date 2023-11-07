<?php
include('../connection.php');
$id = $_POST['id_pembelian'];
$nama = $_POST['nama_pelanggan'];
$total = $_POST['total_barang'];
$tanggal = $_POST['tanggal_pembelian'];


if (!empty($id) && !empty($nama) && !empty($tanggal) && !empty($total)) {
    $sql = "UPDATE 2201010173_pembelian SET nama_pelanggan = '$nama', tanggal_pembelian = '$tanggal', total_barang = '$total' WHERE id_pembelian='$id'";
    $query = mysqli_query($conn, $sql);
    if (mysqli_affected_rows($conn) > 0) {
        $data['status'] = 200;
        $data['result'][] = 'Data Diubah';
    }else {
        $data['status'] = '400';
        $data['result'][] = "Data tidak boleh kosong";}
} else {
    $data['status'] = '400';
    $data['result'][] = "Data tidak boleh kosong";
}

echo json_encode($data);
?>