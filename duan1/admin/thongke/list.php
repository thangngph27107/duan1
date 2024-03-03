<div class="row2">
    <div class="row2 formtitle">
        THỐNG KÊ
    </div>
    <div class="row2 formcontent">
    <form action="#" method="POST">
            <div class="row2 mb10 formds_loai">
            <table>
                <tr>
                    <th></th>
                    <th>MÃ DANH MỤC</th>
                    <th>TÊN DANH MỤC</th>
                    <th>SỐ LƯỢNG</th>
                    <th>GIÁ CAO NHẤT</th>
                    <th>GIÁ THẤP NHẤT</th>
                    <th>GIÁ TRUNG BÌNH</th>
                </tr>
                <?php foreach ($listthongke as $checklistthongke ) {
                    extract($checklistthongke);
                    //$update_bl = "index.php?act=update_bl&id_taikhoan=".$id_binhluan;
                    //$delete_bl = "index.php?act=delete_bl&id_taikhoan=".$id_binhluan;
                    echo '<tr>
                            <td><input type="checkbox" name="" id=""></td>
                            <td style="text-align: center;">'.$id.'</td>
                            <td>'.$name.'</td>
                            <td>'.$gia_avg.'</td>
                            <td>'.$gia_min.'</td>
                            <td>'.$gia_max.'</td>
                            <td>'.$soluong.'</td>
                            
                        </tr>';
                }?>
                        
            </table>
        </div>

        <div class="row margin_bottom">
            <!--<input type="button" value="CHỌN TẤT CẢ">
            <input type="button" value="BỎ CHỌN TẤT CẢ">
            <input type="button" value="XOÁ CÁC MỤC ĐÃ CHỌN">-->
            <a href="index.php?act=bieudo">
                <input type="button" value="KIỂM TRA BIỂU ĐỒ" tyle="background-color: #00BFFF; color: white;">
            </a>
        </div>
    </div>
</div>