<?php
    require_once 'model/AdminModel.php';
    class AdminController{
        // Điều khiển về mặt logic giữa UserModel và User View
        function index(){
            // Tôi sẽ cần gọi UserModel để truy vấn dữ liệu
            $adminModel = new AdminModel();
            $admins = $adminModel->getAllMember();
            // Sau khi truy vấn được dữ liệu, tôi sẽ đổ ra UserView/index.php tương ứng
            require_once 'view/gv/show.php';
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
            require_once 'view/gv/add.php';
        }
        function edit(){
            // Tôi sẽ cần gọi UserModel để truy vấn dữ liệu

            // Sau khi truy vấn được dữ liệu, tôi sẽ đổ ra UserView/edit.php tương ứng
        }

        public function delete() {
            //url trên trình dueyjet sẽ có dạng
    //        ?controller=book&action=delete&id=1
            //bắt id từ trình duyêtj
            $magv = $_GET['magv'];
            if (!is_numeric($magv)) {
                header("Location: index.php?controller=gv&action=index");
                exit();
            }
    
            $adminModel = new AdminModel();
            $isDelete = $adminModel->delete($magv);
    
            if ($isDelete) {
                //chuyển hướng về trang liệt kê danh sách
                //tạo session thông báo mesage
                $_SESSION['success'] = "Xóa bản ghi #$magv thành công";
            }
            else {
                //báo lỗi
                $_SESSION['error'] = "Xóa bản ghi #$magv thất bại";
            }
    
    
            exit();
    
    
        }
    }



?>