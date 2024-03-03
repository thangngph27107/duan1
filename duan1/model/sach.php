<?php
function loadall_sach(){
    $sql = "SELECT sach.*, nxb.ten_nha_xuat_ban FROM sach AS sach
    INNER JOIN nhaxuatban AS nxb ON nxb.id_nha_xuat_ban = sach.id_nha_xuat_ban";
    $list_sach= pdo_query($sql);
    return $list_sach;
}

function insert_sach($ten_sach,$filename,$id_nha_xuat_ban,$gia,$mo_ta){
    $sql = " INSERT INTO sach (ten_sach,hinh_anh,id_nha_xuat_ban,gia,mo_ta)
    VALUES ('$ten_sach','$filename','$id_nha_xuat_ban','$gia','$mo_ta')";
    pdo_execute($sql);
    
}

function loadone_sach($id){
    $sql = "SELECT * FROM sach WHERE id = '$id'";
    $sach = pdo_query_one($sql);
    return $sach;
}

function update_sach($id,$ten_sach,$filename,$id_nha_xuat_ban,$gia,$mo_ta){
    if($filename !=""){
        $sql = "UPDATE sach SET id_nha_xuat_ban='$id_nha_xuat_ban',ten_sach = '$ten_sach',gia='$gia',mo_ta='$mo_ta'
        WHERE id =".$id;
    }
    pdo_execute($sql);
}

function delete_sach($id){
    $sql = "DELETE FROM sach WHERE id = ".$id;
    pdo_execute($sql);
}
?>