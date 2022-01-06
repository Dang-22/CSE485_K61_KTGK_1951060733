<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Show Users from Database</title>
</head>
<body>

    <main>
    <div class="container">
        <h5 class="text-center text-primary mt-5">DANH SÁCH GIẢNG VIÊN</h5>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Mã Viảng Viên</th>
                    <th scope="col">Họ Và Tên</th>
                    <th scope="col">Ngày Sinh</th>
                    <th scope="col">Giới tính</th>
                    <th scope="col">Trình Độ</th>
                    <th scope="col">Chuyên Môn</th>
                    <th scope="col">Học Hàm</th>
                    <th scope="col">Học Vị</th>
                    <th scope="col">Cơ Quan</th>
                </tr>
                <div>
                <a class="btn btn-primary" href="view/add.php">Thêm</a>
            </div>
            </thead>
            <tbody>
                
                <?php
                   
                   foreach ($admins as $admin){
                ?>
                            <tr>
                                <th scope="row">
                                <?php echo $admin['magv']; ?></th>
                                <th><?php echo $admin['hovaten']; ?></th>
                                <td><?php echo $admin['ngaysinh']; ?></td>
                                <td><?php echo $admin['gioitinh']; ?></td>
                                <td><?php echo $admin['trinhdo']; ?></td>
                                <td><?php echo $admin['chuyenmon']; ?></td>
                                <td><?php echo $admin['hocham']; ?></td>
                                <td><?php echo $admin['hocvi']; ?></td>
                                <td><?php echo $admin['coquan']; ?></td>
                            </tr>
                <?php
                        }                    
                ?>
                
                
            </tbody>
            </table>
    </div>    
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>