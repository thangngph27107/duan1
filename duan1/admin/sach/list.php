<div class="row2">
    <div class="row2 font_title">
        <h1>DANH SÁCH SACH</h1>
    </div>
    <div class="row2 form_content">
        <form action="" method="POST">
            <div class="row2 mb10 formds_loai">
                <table>
                    <tr>
                        <th></th>
                        <th>TEN SACH</th>
                        <th>HINH ANH</th>
                        <th>NHA XUAT BAN</th>
                        <th>GIA</th>
                        <th>MO TA</th>
                    </tr>
                    <?php foreach ($listsach as $sach){
                        extract($sach);
                        $suasp = "index.php?act=suasach&id=" . $id;
                        $xoasp = "index.php?act=xoasac&id=" . $id;
                        $thongbaoxoa = "'"."Bạn có chắc chắn muốn xóa sach:".$ten_sach."'";
                        $hinh_anh_path = "../uploads/".$hinh_anh;
                        if(is_file($hinh_anh_path)){
                            $hinh = "<img src='$hinh_anh_path' height='80' width='80'>";
                        }else{
                            $hinh = "Không có hình";
                        }
                        echo '<tr>
                        <td><input type="checkbox" name="" id=""/></td>
                        <td>' .$ten_sach.'</td>
                        <td>' .$hinh. '</td>
                        <td>' .$ten_nha_xuat_ban. '</td>
                        <td>' .$gia. '</td>
                        <td>' .$mo_ta. '</td>
                        <td>
                          <a href="'.$suasp.'"><input type="button" value="Sửa"/></a>
                          <a href="'.$xoasp.'" onclick="return confirm('.$thongbaoxoa.')" role="button"><input type="button" value="Xóa"/></a>
                        </td>
                      </tr>';
                    }
                    ?>
                </table>
            </div>

            <div class="row mb10">
                <input class="mr20" type="button" value="CHỌN TẤT CẢ"/>
                <input class="mr20" type="button" value="BỎ CHỌN TẤT CẢ"/>
                <a href="index.php?act=addsach">
                    <input class="mr20" type="button" value="NHẬP THÊM"/>
                </a>
            </div>
        </form>

    </div>
</div>
