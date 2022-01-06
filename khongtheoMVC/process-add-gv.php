<?php
    // Xử lý giá trị GỬI TỚI
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
    $sql = "INSERT INTO giangvien (hovaten, ngaysinh, gioitinh, trinhdo, chuyenmon, hocham, hocvi, donvi) VALUES ('$hovaten','$gioitinh','$trinhdo','$chuyenmon','$hocham', '$hocvi', '$donvi')";
    // echo $sql;
    $ketqua = mysqli_query($conn,$sql);
    
    if(!$ketqua){
        header("location: index.php"); //Chuyển hướng lỗi
    }else{
        header("location: index.php"); //Chuyển hướng lại Trang Quản trị
    }
}

    // Bước 03: Đóng kết nối
    mysqli_close($conn);
    
?>