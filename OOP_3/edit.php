





<!DOCTYPE html>
<html lang="en">

<head>
    <title>PHP OOP Phan Van Hoang</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
</head>

<body>

    <div class="card text-center" style="padding:15px;">
        <h4>PHP OOP Phan Van Hoang CRUD Example Tutorial</h4>
    </div><br>

    <div class="container">
        <div class="row">
            <div class="col-md-5 mx-auto">
                <div class="card">
                    <div class="card-header bg-dark text-white">
                        <h4>Thêm dữ liệu</h4>
                    </div>
                    <div class="card-body bg-light">
                        <form action="add.php" method="POST">
                            <div class="form-group">
                                <label for="name">Họ và Tên :</label>
                                <input type="text" class="form-control" name="name" placeholder="Nhập tên " required="">
                            </div>
                            <div class="form-group">
                                <label for="email">Tuổi </label>
                                <input type="number" class="form-control" name="email" placeholder="Nhập tuổi" required="">
                            </div>
                            <div class="form-group">
                                <label for="sex">Giới tính </label>
                                <input type="text" class="form-control" name="sex" placeholder="Nhập giới tính " required=""> 
                            </div>
                            <div class="form-group">
                                <label for="numberPhone">Số điện thoại</label>
                                <input type="number" class="form-control" name="numberPhone" placeholder="Số điện thoại" required="">
                            </div>
                            <div class="form-group">
                                <label for="address">Địa chỉ </label>
                                <input type="text" class="form-control" name="address" placeholder="Nhập địa chỉ " required="">
                            </div>
                            <input type="submit" name="submit" class="btn btn-primary" style="float:right;" value="Xác nhận">
                            <a href="index.php">
                                <!-- <i class="fa fa-pencil text-white" aria-hidden="true"></i> -->
                                <i style="float:left; font-style: normal; font-size: 18px; margin-top: 8px;">Quay lại </i>
                            </a>
                        </form> 
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>