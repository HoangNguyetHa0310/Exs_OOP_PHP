<?php
    class Employee
    {
        private $servername = "localhost";
        private $username = "root";
        private $password = "";
        private $database  = "dbbanhang";
        public  $conn;

        // constructor kết nối 
        public function __construct() {
            $this->conn = mysqli_connect($this->servername, $this->username, $this->password, $this->database);
            if (mysqli_connect_error()) {
                trigger_error("Ket noi that bai , Thu lai !", mysqli_connect_error());
            }else {
                return $this->conn;
            }
        }

        public function chenDuLieu($post) {
            
        }



    }

?>
