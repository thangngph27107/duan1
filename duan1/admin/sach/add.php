<div class="row2">
    <div class="row2 font_title">
        <h1>THÊM MỚI SACH</h1>
    </div>
    <div>
        <ul>
            <?php if(isset($_SESSION['error'])){
                foreach ($_SESSION['error'] as $er){
                    ?>
                    <li style="..."><?php echo $er; ?></li>
                    <?php
                }
            }?>
        </ul>
    </div>
    <div class="row2 form_content">
        <form action="index.php?act=addsach" method="post" enctype="multipart/form-data">
            <div class="row2 mb10 form_content_container">
                <label>NHA XUAT BAN</label>
                <select name="nxb">
                    <?php foreach ($listnxb as $nxb){
                        extract($nxb);
                        echo "<option value = $id_nha_xuat_ban>$ten_nha_xuat_ban</option>";
                    }
                    ?>
                </select>
            </div>
            <div class="row2 mb10">
                <label>Ten Sach</label> <br>
                <input type="text" name="ten_sach">
            </div>
            <div class="row2 mb10">
                <label></label> Mo Ta <br>
                <input type="text" name="mo_ta">
            </div>
            <div class="row2 mb10">
                <label>Hinh Anh </label> <br>
                <input type="file" name="hinh_anh">
            </div>
            <div class="row2 mb10">
                <input class="mr20" type="submit" name="themmoi" value="Thêm mới">
                <input class="mr20" type="reset" value="Nhập lại">
                <a href="index.php?act=listtintuc"><input class="mr20" type="button" value="Nha Xuat Ban"></a>
            </div>
            <?php
            if(isset($thongbao) && $thongbao!=""){
                echo $thongbao;
            }
            ?>

        </form>

    </div>
</div>