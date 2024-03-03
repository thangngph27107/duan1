<div class="row2">
    <div class="2row formtitle">
        DANH SÁCH BÌNH LUẬN
    </div>
    <form action="#" method="POST">
            <div class="row2 mb10 formds_loai">
            <table>
                <tr>
                    <!--<th><td><input type="checkbox" name="" id=""></td></th>-->
                    <th>ID BÌNH LUẬN</th>
                    <th>NỘI DUNG</th>
                    <th>USER ID</th>
                    <th>ID PRODUCT</th>
                    <th>DATE</th>
                    <th></th>
                </tr>
                <?php foreach ($listbinhluan as $checklistbinhluan ) {
                    extract($checklistbinhluan);
                    $update_bl = "index.php?act=update_bl&id=".$id;
                    $delete_bl = "index.php?act=delete_bl&id=".$id;
                    echo '<tr>
                            
                            <td style="text-align: center;">'.$id.'</td>
                            <td>'.$noidung.'</td>
                            <td>'.$iduser.'</td>
                            <td>'.$idpro.'</td>
                            <td>'.$ngaybinhluan.'</td>
                            <td>
                                <a href="'.$delete_bl.'">
                                    <input type="button" value="XOÁ">
                                </a>
                            </td>
                        </tr>';
                }?>
                        
            </table>
        </div>
    </form>
        <div class="row margin_bottom">
            <!--<input type="button" value="CHỌN TẤT CẢ">
            <input type="button" value="BỎ CHỌN TẤT CẢ">
            <input type="button" value="XOÁ CÁC MỤC ĐÃ CHỌN">
            <a href="index.php?act=add_dm"><input type="button" value="NHẬP THÊM"></a>-->
        </div>
    </div>

</div>