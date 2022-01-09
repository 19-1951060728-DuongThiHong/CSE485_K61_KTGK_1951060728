<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Show Users from Database</title>
</head>
<body>
    <main>
    <h5 class="text-center text-primary mt-5" >Danh sách độc giả</h5>
    
    <div>
        <a href="index.php?controller=user&action=showAdd" class="btn btn-primary ms-5">Thêm</a>
    </div>
    <?php
    include_once  'view/commons/message.php';
    ?>
    <table class="table ms-5">
        <thead>
                    <tr>
                    <th scope="col">Mã đọc giả</th>
                    <th scope="col">Họ và tên</th>
                    <th scope="col">Giới tính</th>
                    <th scope="col">Năm sinh</th>
                    <th scope="col">Nghề nghiệp</th>
                    <th scope="col">Ngày cấp thẻ</th>
                    <th scope="col">Ngày hết hạn</th>
                    <th scope="col">Địa chỉ</th>

                    <th scope="col">Sửa</th>
                    <th scope="col">Xóa</th>

                    </tr>
                </thead>
    <?php
        foreach($users as $user){
            ?>
                <tbody>
                <tr>
                    <th scope="row"><?php echo $user['madg']; ?></th>
                    <td><?php echo $user['hovaten']; ?></td>
                    <td><?php echo $user['giotinh']; ?></td>
                    <td><?php echo $user['namsinh']; ?></td>
                    <td><?php echo $user['nghenghiep']; ?></td>
                    <td><?php echo $user['ngaycapthe']; ?></td>
                    <td><?php echo $user['ngayhethan']; ?></td>
                    <td><?php echo $user['diachi']; ?></td>

                    <?php
                    //khai báo 3 url xem, sửa, xóa
                    $urlEdit =
                        "index.php?controller=user&action=showEdit&id=" . $user['madg'];
                    $urlDelete =
                        "index.php?controller=user&action=delete&id=" . $user['madg'];
                    ?>
                    <td><a href="<?php echo $urlEdit?>"><i class="bi bi-pencil-square"></i></a> &nbsp;</td>
                    <td><a onclick="return confirm('Bạn chắc chắn muốn xóa?')"
                       href="<?php echo $urlDelete?>">
                       <i class="bi bi-trash"></i>
                    </a></td>   
                </tr>
                </tbody>
    <?php
           
        }
    ?>
     </table>
    </main>
   
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
    integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
    integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
    crossorigin="anonymous"></script>
</body>
</html>