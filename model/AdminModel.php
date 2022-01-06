<?php
    require_once 'config/db.php';

    class AdminModel{
        private $magv;
        private $hovaten;
        private $ngaysinh;
        private $gioitinh;
        private $trinhdo;
        private $chuyenmon;
        private $hocham;
        private $hocvi;
        private $coquan;

        // Định nghĩa các phương thức để sau này nhận các thao tác tương ứng với các action
        public function getAllMember(){
            // B1. Khởi tạo kết nối
            $conn = $this->connectDb();
            // B2. Định nghĩa và thực hiện truy vấn
            $sql = "SELECT * FROM giangvien";
            $result = mysqli_query($conn,$sql);

            // Tôi khai báo biến lưu kết quả trả về (dạng mảng)
            $arr_members = [];
            // B3. Xử lý và (KO PHẢI SHOW KẾT QUẢ) TRẢ VỀ KẾT QUẢ
            if(mysqli_num_rows($result) > 0){
                // Lấy tất cả dùng mysqli_fetch_all
                $arr_members = mysqli_fetch_all($result, MYSQLI_ASSOC); //Sử dụng MYSQLI_ASSOC để chỉ định lấy kết quả dạng MẢNG KẾT HỢP
            }

            return $arr_members;
        }
       
        public function insert($param = []) {
            $connection = $this->connectDb();
            //tạo và thực thi truy vấn
            $queryInsert = "INSERT INTO giangvien (hovaten, ngaysinh, gioitinh, trinhdo, chuyenmon, hocham, hocvi, coquan)
            VALUES ('{$param['hovaten, ngaysinh, gioi tinh, trinhdo, chuyenmon, hocham, hoc vi, co quan']}')";
            $isInsert = mysqli_query($connection, $queryInsert);
            $this->closeDb($connection);
    
            return $isInsert;
        }
    
        
        public function connectDb() {
            $connection = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
            if (!$connection) {
                die("Không thể kết nối. Lỗi: " .mysqli_connect_error());
            }
    
            return $connection;
        }
    
        public function closeDb($connection = null) {
            mysqli_close($connection);
        }
    }


?>