<?php

    include('../connection.php');

    $sql = "SELECT * FROM 2201010173_pembelian";
    $query = mysqli_query($conn,$sql);

    if (mysqli_num_rows($query) > 0){
        while ($row = mysqli_fetch_assoc($query)){
            $data['status'] = 200;
            $data['result'][]=$row;
        }
    }else {
        $data['status']=400;
        $data['result'][]="Data Not Found";
    }

    echo json_encode($data);

?>