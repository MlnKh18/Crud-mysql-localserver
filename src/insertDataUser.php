<?php
include('../connection.php');

$id = $_POST['id_pembelian'];
$nama = $_POST['nama_pelanggan'];
$total = $_POST['total_barang'];
$tanggal = $_POST['tanggal_pembelian'];

if (!empty($id) && !empty($nama) && !empty($total) && !empty($tanggal)) {
    $sqlCheck = "SELECT * FROM 2201010173_pembelian WHERE id_pembelian = '$id' AND nama_pelanggan = '$nama'";
    $queryCheck = mysqli_query($conn, $sqlCheck);
    $resultCheck = mysqli_fetch_array($queryCheck);
    if ($resultCheck[0] == 0) {
        $sql = "INSERT INTO 2201010173_pembelian (id_pembelian, nama_pelanggan, total_barang, tanggal_pembelian) VALUES ('$id', '$nama', '$total', '$tanggal')";
        $query = mysqli_query($conn, $sql);
        if ($query) {
            $data['status'] = 'ok';
            $data['result'][] = "Data Inserted";
        } else {
            die("Connection Failed : " . mysqli_connect_error());
        }
    } else {
        $data['status'] = 400;
        $data['result'][] = "Data sudah ada";
    }
} else {
    $data['status'] = '400';
    $data['result'][] = "Data tidak boleh kosong";
}
print_r(json_encode($data));
?>