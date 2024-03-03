<?php
function loadall_nxbsach(){
    $sql = "SELECT * FROM nhaxuatban";
    $list_nxb = pdo_query($sql);
    return $list_nxb;
}