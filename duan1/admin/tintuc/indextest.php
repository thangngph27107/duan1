case 'listtintuc':
                $listtintuc = loadall_tintuc();
                include "./tintuc/list.php";
                break;

            case 'addtintuc':
                unset($_SESSION['error']);
                if (isset($_POST["themmoi"]) && $_POST['themmoi']) {
                    $error = [];
                    if (empty($_POST["tieu_de"])) {
                        $error[] = "Vui lòng nhập tiêu đề";
                    }
                    if (empty($_POST["noi_dung"])) {
                        $error[] = "Vui lòng nhập nội dung";
                    }
                    if (empty($_FILES["hinh_anh"]["name"])) {
                        $error[] = "Vui lòng chọn hình ảnh";
                    }
                    if (count($error) >= 1) {
                        $_SESSION['error'] = $error; // vadlidate
                    } else {
                        $tieu_de = $_POST["tieu_de"];
                        $noi_dung = $_POST["noi_dung"];
                        $iddm = $_POST["iddm"];
                        $filename = $_FILES["hinh_anh"]["name"];
                        $target_dir = "../uploads/";
                        $target_file = $target_dir . basename($filename);
                        if (move_uploaded_file($_FILES["hinh_anh"]["tmp_name"], $target_file)) {
                        } else {
                            echo "Lỗi up load file";
                        }

                        insert_tintuc($tieu_de, $noi_dung, $filename, $iddm);
                        $thongbao = "Thêm thành công";
                    }

                }

                $listdmtintuc = loadall_dmtintuc();
                include "./tintuc/add.php";
                break;

            case 'suatintuc':
                if (isset($_GET['id']) && $_GET['id'] > 0) {
                    $tintuc = loadone_tintuc($_GET['id']);
                }
                $listdmtintuc = loadall_dmtintuc();
                include "./tintuc/update.php";
                break;

                case 'updatetintuc':
                    unset($_SESSION['error']);
                    if (isset($_POST["capnhat_tt"]) && $_POST['capnhat_tt']) {
                        $error = [];
                        if (empty($_POST["tieu_de"])) {
                            $error[] = "Vui lòng nhập tiêu đề";
                        }
                        if (empty($_POST["noi_dung"])) {
                            $error[] = "Vui lòng nhập nội dung";
                        }
                       
                        if (count($error) >= 1) {
                            $_SESSION['error'] = $error; // vadlidate
                            header("location: http://localhost/kienph55754-Web2041.01/admin/index.php?act=suatintuc&id=".$_POST["id"]);
                        } else {
                            $id = $_POST['id'];
                            $tieu_de = $_POST["tieu_de"];
                            $noi_dung = $_POST["noi_dung"];
                            $iddm = $_POST["iddm"];
                            $filename = $_FILES["hinh_anh"]["name"];
                            $target_dir = "../uploads/";
                            $target_file = $target_dir . basename($filename);
                            if (move_uploaded_file($_FILES["hinh_anh"]["tmp_name"], $target_file)) {
                            } else {
                                echo "Lỗi up load file";
                            }
    
                            update_tintuc($id,$tieu_de, $noi_dung, $filename, $iddm);
                            header("location: http://localhost/kienph55754-Web2041.01/admin/index.php?act=listtintuc");
                        }
    
                    }
    
                    $listdmtintuc = loadall_dmtintuc();
                    include "./tintuc/list.php";
                    break;