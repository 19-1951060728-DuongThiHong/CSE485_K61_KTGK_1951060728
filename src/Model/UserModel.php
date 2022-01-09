<?php
    require_once 'config/database.php';

    class UserModel{
        private $usermadg;
        private $userhovaten;
        private $usergioitinh;
        private $reg_namsinh;
        private $usernghenghiep;
        private $reg_ngaycapthe;
        private $reg_ngayhethan;
        private $userdiachi;

        public function getAllUsers(){
            $conn = $this->connectDb();

            $sql = "SELECT * FROM 1951060728_libraries";
            $result = mysqli_query($conn,$sql);

            $arr_users = [];
       
            if(mysqli_num_rows($result) > 0){
                $arr_users = mysqli_fetch_all($result, MYSQLI_ASSOC); 
            }

            return $arr_users;
        }
    
        public function getUser($userID) {
            
            $connection = $this->connectDb();
            $querySelect = "SELECT * FROM 1951060728_libraries WHERE bd_id=$userID";
            $result = mysqli_query($connection, $querySelect);
            $arr_user = [];
            if(mysqli_num_rows($result) > 0) {
                $arr_users = mysqli_fetch_all($result, MYSQLI_ASSOC);
                
                $arr_user = $arr_users[0];
            }
           
            $this->closeDb($connection);
            return $arr_user;
        }
    
        /**
         * Truy vấn lấy ra tất cả sách trong CSDL
         */
        public function delete($usermadg) {
            $connection = $this->connectDb();
    
            $queryDelete = "DELETE FROM 1951060728_libraries WHERE madg = $usermadg";
            $isDelete = mysqli_query($connection, $queryDelete);
           
            $this->closeDb($connection);
    
            return $isDelete;
        }
        public function insert($param = []) {
            $connection = $this->connectDb();
            
            $queryInsert = "INSERT INTO 1951060728_libraries (madg, hovaten, giotinh, namsinh, nghenghiep, ngaycapthe, ngayhethan, diachi) 
            VALUES('{$param['madg']}','{$param['hovaten']}','{$param['gioitinh']}','{$param['namsinh']}','{$param['nghenghiep']}','{$param['ngaycapthe']}','{$param['ngayhethan']}','{$param['diachi']}')";
           
            $isInsert = mysqli_query($connection, $queryInsert);
            $this->closeDb($connection);
    
            return $isInsert;
        }
        public function update($user = []) {
            $connection = $this->connectDb();
            $queryUpdate = "UPDATE 1951060728_libraries
        SET madg = '{$user['madg']}',
            hovaten = '{$user['hovaten']}',
            giotinh = '{$user['gioitinh']}',
            namsinh = '{$user['namsinh']}',
            nghenghiep = '{$user['nghenghiep']}',
            ngaycapthe = '{$user['ngaycapthe']}',
            ngayhethan = '{$user['ngayhethan']}',
            diachi = '{$user['diachi']}',
            
         WHERE madg = {$user['madg']}";
         
            $isUpdate = mysqli_query($connection, $queryUpdate);
            var_dump($isUpdate);
            return;
            $this->closeDb($connection);
    
            return $isUpdate;
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