<?php
    require_once 'model/UserModel.php';
    class UserController{
   
        function index(){
    
            $userModel = new UserModel();
            $users = $userModel->getAllUsers();
            require_once 'view/user/index.php';
        }

        function add(){
                $error = '';
               
                if (isset($_POST['submit'])) {
                    
                    $usermadg = $_POST['madg'];
                    $userhovaten = $_POST['hovaten'];
                    $usergioitinh = $_POST['gioitinh'];
                    $reg_namsinh = $_POST['namsinh'];
                    $usernghenghiep = $_POST['nghenghiep'];
                    $reg_ngaycapthe = $_POST['ngaycapthe'];
                    $reg_ngayhethan = $_POST['ngayhethan'];
                    $userdiachi = $_POST['diachi'];
                    if (empty($userName)) {
                        $error = "Name không được để trống";
                    }
                    else {
                        $userModel = new UserModel();
                        $userArr = [
                            'madg' => $usermadg,
                            'hovaten' => $userhovaten,
                            'gioitinh' =>$usergioitinh,
                            'namsinh' =>$reg_namsinh,
                            'nghenghiep' =>$usernghenghiep,
                            'ngaycapthe' =>$reg_ngaycapthe,
                            'ngayhethan' =>$reg_ngayhethan,
                            'diachi' =>$userdiachi
                                                              
                        ];
                       
                        $isInsert = $userModel->insert($userArr);
                        
                        if ($isInsert) {
                            $_SESSION['success'] = "Thêm mới thành công";
                        }
                        else {
                            $_SESSION['error'] = "Thêm mới thất bại";
                        }
                       
                        header("Location: index.php?controller=user&action=index");
                        exit();
                    }
                }
            }

         function showAdd(){
            require_once 'view/user/add.php';
        }
        function edit(){
            // Kiểm tra nếu người dùng nhấn submit
            $error = '';
                    $usermadg = $_POST['madg'];
                    $userhovaten = $_POST['hovaten'];
                    $usergioitinh = $_POST['gioitinh'];
                    $reg_namsinh = $_POST['namsinh'];
                    $usernghenghiep = $_POST['nghenghiep'];
                    $reg_ngaycapthe = $_POST['ngaycapthe'];
                    $reg_ngayhethan = $_POST['ngayhethan'];
                    $userdiachi = $_POST['diachi'];

                    $userModel = new UserModel();
                
                        $userArr = [
                            'madg' => $usermadg,
                            'hovaten' => $userhovaten,
                            'gioitinh' =>$usergioitinh,
                            'namsinh' =>$reg_namsinh,
                            'nghenghiep' =>$usernghenghiep,
                            'ngaycapthe' =>$reg_ngaycapthe,
                            'ngayhethan' =>$reg_ngayhethan,
                            'diachi' =>$userdiachi
                        ];
                        $isUpdate = $userModel->update($userArr);
                        if ($isUpdate) {
                            $_SESSION['success'] = "Thêm mới thành công";
                        }
                        else {
                            $_SESSION['error'] = "Thêm mới thất bại";
                        }
                       
                        header("Location: index.php?controller=user&action=index");
                        exit();
            // Nếu ko show ra view UserView/edit.php tương ứng

       
    }
        function showEdit(){
            $userID = $_GET['id'];
            $userModel = new UserModel();
            $user = $userModel->getUser($userID);
            
            require_once 'view/user/edit.php';
        }
        function delete(){
                $userID = $_GET['id'];
                if (!is_numeric($userID)) {
                    header("Location: index.php?controller=user&action=index");
                    exit();
                }
        
                $userModel = new UserModel();
                $isDelete = $userModel->delete($userID);
        
                if ($isDelete) {
                    //chuyển hướng về trang liệt kê danh sách
                    //tạo session thông báo mesage
                    $_SESSION['success'] = "Xóa bản ghi #$userID thành công";
                }
                else {
                    //báo lỗi
                    $_SESSION['error'] = "Xóa bản ghi #$userID thất bại";
                }
        
                header("Location: index.php?controller=user&action=index");
                exit();
            }
        
    }
?>