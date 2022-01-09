<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Edit Users from Database</title>
</head>
<body>
    <main>
    <div class="container">
            <h5 class="text-center text-primary mt-5" >Sửa thông tin</h5>
            <form action="index.php?controller=user&action=edit&id=<?php echo $user['madg']?>" method="post">
            <div class="form-group">
                <label for="">Mã độc giả</label>
                <input type="text" class="form-control" disabled id="" name="madg" placeholder="" value="<?php echo $user['madg']; ?>">
            </div>
            <div class="form-group">
                <label for="txtHoTen">Họ và tên</label>
                <input type="text" class="form-control" id="" name="hovaten" placeholder="" value="<?php echo $user['hovaten']; ?>">
            </div>
            <div class="form-group">
                <label for="txtHoTen">Giới tính</label>
                <input type="text" class="form-control" id="" name="gioitinh" placeholder="" value="<?php echo $user['gioitinh']; ?>">
            </div>
            <div class="form-group">
                <label for="">Năm sinh</label>
                <input type="text" class="form-control" id="" name="namsinh" placeholder="" value="<?php echo $user['namsinh']; ?>">
            </div>
            <div class="form-group">
                <label for="">Nghề nghiệp</label>
                <input type="text" class="form-control" id="" name="nghenghiep" placeholder="" value="<?php echo $user['nghenghiep']; ?>">
            </div>
            <div class="form-group">
                <label for="">Ngày cấp thẻ</label>
                <input type="text" class="form-control" id="" name="ngaycapthe" placeholder="" value="<?php echo $user['ngaycapthe']; ?>">
            </div>
            <div class="form-group">
                <label for="">Ngày hết hạn</label>
                <input type="text" class="form-control" id="" name="ngayhethan" placeholder="" value="<?php echo $user['ngayhethan']; ?>">
            </div>
            <div class="form-group">
                <label for="">Địa chỉ</label>
                <input type="text" class="form-control" id="" name="diachi" placeholder="" value=""<?php echo $user['diachi']; ?>">
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Lưu Lại</button>
            </form>
        </div>
        </main>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
    integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
    integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
    crossorigin="anonymous"></script>
</body>
</html>
</html>