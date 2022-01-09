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
    <div class="container">
            <h5 class="text-center text-primary mt-5" >Thêm mới danh sách độc giả</h5>
            <form method="post" action="index.php?controller=user&action=add">
            <div class="form-group">
                <label for="">Họ và tên</label>
                <input type="text" class="form-control" id="" name="hoten" placeholder="Nhập họ tên" value="">
            </div>
            <div class="form-group">
                <label for="">Giới tính</label>
                <input type="text" class="form-control" id="" name="gioitinh" placeholder="" value="">
            </div>
            <div class="form-group">
                <label for="">Năm sinh</label>
                <input type="text" class="form-control" id="" name="namsinh" placeholder="" value="">
            </div>
            <div class="form-group">
                <label for="">Nghề nghiệp</label>
                <input type="text" class="form-control" id="" name="nghenghiep" placeholder="" value="">
            </div>
            <div class="form-group">
                <label for="">Ngày cấp thẻ</label>
                <input type="text" class="form-control" id="" name="ngaycapthe" placeholder="" value="">
            </div>
            <div class="form-group">
                <label for="">Ngày hết hạn</label>
                <input type="text" class="form-control" id="" name="ngayhethan" placeholder="" value="">
            </div>
            <div class="form-group">
                <label for="">Địa chỉ </label>
                <input type="text" class="form-control" id="" name="diachi" placeholder="" value="">
            </div>  
            <input type="submit" class="bg-primary" name="submit" value="Save" >
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