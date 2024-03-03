<div class="row2">
    <div class="row2 font_title">
        DANH SÁCH TÀI KHOẢN
    </div>
    <div class="row2 form_content">
    <form action="#" method="POST">
            <div class="row2 mb10 formds_loai">
            <table>
                <tr>
                    <!--<th><td><input type="checkbox" name="" id=""></td></th>-->
                    <th>USER ID</th>
                    <th>USERNAME</th>
                    <th>EMAIL</th>
                    <th>PASSWORD</th>
                    <th>ADDRESS</th>
                    <th>NUMBER</th>
                    <th>ROLE</th>
                    <th></th>
                </tr>
                <?php foreach ($listtaikhoan as $checklisttaikhoan ) {
                    extract($checklisttaikhoan);
                    $update_tk = "index.php?act=update_tk&id=".$id;
                    $delete_tk = "index.php?act=delete_tk&id=".$id;
                    echo '<tr>
                            
                            <td style="text-align: center;">'.$id.'</td>
                            <td>'.$user.'</td>
                            <td>'.$email.'</td>
                            <td>'.$pass.'</td>
                            <td>'.$address.'</td>
                            <td>'.$tel.'</td>
                            <td>'.$role.'</td>
                            <td>
                                <a href="'.$update_tk.'">
                                    <input type="button" value="SỬA">
                                </a>
                                <a href="'.$delete_tk.'">
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
            <input type="button" value="XOÁ CÁC MỤC ĐÃ CHỌN">-->
            <!--<a href="index.php?act=add_dm"><input type="button" value="NHẬP THÊM"></a>-->
        </div>
    </div>
</div>