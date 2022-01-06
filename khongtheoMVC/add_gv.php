<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<main>
    <div class="container">
        <h5 class="text-center text-primary mt-5">Thêm Mới Giảng Viên</h5>
        <!-- Form thêm Dữ liệu nhân viên -->
        <form action="process-add-gv.php" method="post">
            <div class="form-group">
                <label for="txtHoTen">Họ và tên</label>
                <input type="text" class="form-control" id="txtHoTen" name="hovaten" placeholder="Nhập họ tên">
                <!-- <small id="txtHoTenHelp" class="form-text text-muted">Có thể dùng nó hiển thị thông báo lỗi hoặc gợi ý</small> -->
            </div>

            <div class="form-group">
                <label for="txtNgaySinh">Ngày Sinh</label>
                <input type="date" class="form-control" id="txtngaysinh" name="ngaysinh" placeholder="Nhập ngày sinh">
                <!-- <small id="txtHoTenHelp" class="form-text text-muted">Có thể dùng nó hiển thị thông báo lỗi hoặc gợi ý</small> -->
            </div>

            
            <div class="form-group">
                <label for="txtGioiTinh">Giới tính</label>
                <input type="text" class="form-control" id="txtgioitinh" name="gioitinh" placeholder="Nhập giới tính">
                <!-- <small id="txtHoTenHelp" class="form-text text-muted">Có thể dùng nó hiển thị thông báo lỗi hoặc gợi ý</small> -->
            </div>

            <div class="form-group">
                <label for="txtTrinhDo">Trình Độ</label>
                <input type="text" class="form-control" id="txtTrinhDo" name="trinhdo" placeholder="Nhập trình độ">
                <!-- <small id="txtHoTenHelp" class="form-text text-muted">Có thể dùng nó hiển thị thông báo lỗi hoặc gợi ý</small> -->
            </div>
            <div class="form-group">
                <label for="txtChuyenMon">Chuyên Môn</label>
                <input type="text" class="form-control" id="txtChuyenMon" name="chuyenmon" placeholder="Nhóm chuyên môn">
                
            </div>
            <div class="form-group">
                <label for="txtHocHam">Học Hàm</label>
                <input type="text" class="form-control" id="txthocham" name="hocham" placeholder="Nhập học hàm">
               
            </div>
            
            <div class="form-group">
                <label for="txtHocVi">Học Vị</label>
                <input type="text" class="form-control" id="txthocvi" name="hocvi" placeholder="Nhập học vị">
               
            </div>
            
            <div class="form-group">
                <label for="txtCoQuan">Cơ Quan</label>
                <input type="text" class="form-control" id="txtcoquan" name="coquan" placeholder="Nhập cơ quan">
               
            </div>
            <button type="submit" class="btn btn-primary mt-3">Lưu lại</button>
        </form>
    </div>    
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>