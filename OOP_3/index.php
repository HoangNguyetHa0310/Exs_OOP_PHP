<?php 



?>





<!DOCTYPE html>
<html lang="en">

<head>
    <title>PHP OOP Phan Van Hoang </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
</head>

<body>

    <div class="card text-center" style="padding:15px;">
        <h4>PHP OOP Phan Van Hoang CRUD Example Tutorial</h4>
    </div><br><br>

    <div class="container">
        <?php
        if (isset($_GET['msg1']) == "insert") {
            echo "<div class='alert alert-success alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert'>×</button>
              Bạn đã thêm thành công !
            </div>";
        }
        if (isset($_GET['msg2']) == "update") {
            echo "<div class='alert alert-success alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert'>×</button>
              Bạn đã cập nhật thành công !
            </div>";
        }
        if (isset($_GET['msg3']) == "delete") {
            echo "<div class='alert alert-success alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert'>×</button>
              Bạn đã xóa thành công !
            </div>";
        }
        ?>
        <h2>Bảng thông tin 
            <a href="add.php" style="float:right;">
                <button class="btn btn-success">
                    <i class="fas fa-plus"></i>
                </button>
            </a>
        </h2><br><br>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>ID của khách</th>
                    <th>Họ và Tên</th>
                    <th>Email</th>
                    <th>Tiền lương </th>
                    <th>Chức năng</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td></td>
                    <td></td>    
                    <td></td>
                    <td></td>
                    <td>
                        <a href="edit.php">
                            <button class="btn btn-primary mr-2">
                                <i class="fa fa-pencil text-white" aria-hidden="true"></i>
                            </button>
                        </a>
                        <a href="index.php">
                            <button class="btn btn-danger">
                                <i class="fa fa-pencil text-white" aria-hidden="true"></i>
                            </button>
                        </a>

                    </td>
                </tr>
            </tbody>

        </table>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>