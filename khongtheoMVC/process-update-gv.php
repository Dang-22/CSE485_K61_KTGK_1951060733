<?php
    // Trước khi cho người dùng xâm nhập vào bên trong
    // Phải kiểm tra THẺ LÀM VIỆC
    session_start();
    // Xử lý giá trị GỬI TỚI
    if(isset($_POST['magv'])){
        $magv = $_POST['magv'];
    }
    if (isset($_POST['submit'])) {
        $hovaten = $_POST['hovaten'];
        $ngaysinh = $_POST['ngaysinh'];
        $gioitinh = $_POST['gioitinh'];
        $trinhdo = $_POST['trinhdo'];
        $chuyenmon = $_POST['chuyenmon'];
        $hocham = $_POST['hocham'];
        $hocvi = $_POST['hocvi'];
        $coquan = $_POST['coquan'];
    
    // Bước 01: Kết nối Database Server
    $conn = mysqli_connect('localhost','root','','1951060733_university');
    if(!$conn){
        die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
    }
    // Bước 02: Thực hiện truy vấn
    $sql = "UPDATE giangvien SET hovaten='$hovaten', ngaysinh='$ngaysinh', gioitinh = '$$gioitinh', trinhdo = '$$trinhdo', chuyenmon ='$$chuyenmon', hocham = '$$hocham', hocvi = '$hocvi', coquan = '$coquan' WHERE magv = '$magv'";
    // echo $sql;

    $ketqua = mysqli_query($conn,$sql);
    
    if(!$ketqua){
        header("location: error.php"); //Chuyển hướng lỗi
    }else{
        header("location: admin.php"); //Chuyển hướng lại Trang Quản trị
    }
    }
    // Bước 03: Đóng kết nối
    mysqli_close($conn);

?>