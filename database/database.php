<?php  
    $filepath = realpath(dirname(__FILE__));
    require_once "../database/session.php";
    Session::checkLogin();
    require_once "../database/connectDB.php";
    require_once "../helper/format.php";
?>  
<?php

class AdminLogin {
    private $fm;
    private $db;
    public function __construct() {
        $this->fm = new Format();
        $this->db = new Database();
    }
    public function admin_login($username, $password) {
        $username = $this->fm->validation($username);
        $password = $this->fm->validation($password);
        $username = mysqli_real_escape_string($this->db->link,$username);
        $password = mysqli_real_escape_string($this->db->link,$password);
        if(empty($username) || empty($password)){
            $alert = "Please enter your username and password";
            return $alert;
        }else{
            $query = "SELECT * FROM user WHERE name='$username' AND password='$password' LIMIT 1";
            $result = $this->db->select($query);
            if($result != false){
                $value = $result->fetch_assoc();
                Session::set('adminlogin',true);
                Session::set('id',$value['id']);
                Session::set('name',$value['name']);
                Session::set('password',$value['password']);
                header("Location: /index.php");

            }else{
                $alert = "404 not found!";
                return $alert;
            }
        }
    }
}

