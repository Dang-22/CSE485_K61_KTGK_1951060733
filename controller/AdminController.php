<?php
    require_once 'model/AdminModel.php';
    class AdminController{
        // Điều khiển về mặt logic giữa UserModel và User View
        function index(){
            // Tôi sẽ cần gọi UserModel để truy vấn dữ liệu
            $adminModel = new AdminModel();
            $admins = $adminModel->getAllMember();
            // Sau khi truy vấn được dữ liệu, tôi sẽ đổ ra UserView/index.php tương ứng
            require_once 'view/show.php';
        }

        public function add() {
            $error = '';
            //xử lý submit form
            if (isset($_POST['submit'])) {
                $hovaten = $_POST['hovaten'];
                $ngaysinh = $_POST['ngaysinh'];
                $gioitinh = $_POST['gioitinh'];
                $trinhdo = $_POST['trinhdo'];
                $chuyenmon = $_POST['chuyenmon'];
                $hocham = $_POST['hocham'];
                $hocvi = $_POST['hocvi'];
                $coquan = $_POST['coquan'];
                //xử lý validate, nếu mà để trống tên sách
    //            thì báo lỗi và không cho submit form
                if (empty($hovaten)) {
                    $error = "ho va ten không được để trống";
                }
                else {
                    //gọi model để insert dữ liệu vào database
                    $adminModel = new AdminModel();
                    //gọi phương thức để insert dữ liệu
                    //nên tạo 1 mảng tạm để lưu thông tin của
    //                đối tượng dựa theo cấu trúc bảng
                    $GVArr = [
                        'hovaten' => $hovaten ,
                        'ngaysinh' => $ngaysinh ,
                        'gioitinh' => $gioitinh ,
                        'trinhdo' => $trinhdo ,
                        'chuyenmon' => $chuyenmon ,
                        'hocham' => $hocham ,
                        'hocvi' => $hocvi ,
                        'coquan' => $coquan ,
                    ]; 
                    $isInsert = $adminModel->insert($GVArr);
                    if ($isInsert) {
                        $_SESSION['success'] = "Thêm mới thành công";
                    }
                    else {
                        $_SESSION['error'] = "Thêm mới thất bại";
                    }
                    header("Location: index.php");
                    exit();
                }
            }
            //gọi view
            require_once 'view/add.php';
        }
        function edit(){
            // Tôi sẽ cần gọi UserModel để truy vấn dữ liệu

            // Sau khi truy vấn được dữ liệu, tôi sẽ đổ ra UserView/edit.php tương ứng
        }

        function delete(){

        }
    }



?>