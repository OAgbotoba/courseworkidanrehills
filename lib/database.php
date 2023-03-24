<?php
     $filepath = realpath(dirname(__FILE__));
    include_once ($filepath.'/../config/config.php');
    Class Database{
        public $host = DB_HOST;
        public $user = DB_USER;
        public $pass = DB_PASS;
        public $dbname = DB_NAME;
        public $link;
        public $error;
        public function __construct(){
            $this->connectDB();
        }

        private function connectDB(){
            $this->link = new mysqli($this->host, $this->user, $this->pass, $this->dbname);
            if (!$this->link){
                $this->error = "Connection fail".$this->link->connect_error;
                return false;
            }
        }
        public function select($query){
            $result = $this->link->query($query) or die($this->link->error.__LINE__);
            if ($result->num_rows>0){
                return $result;
            }
            else{
                return false;
            }
        }
        public function insert($query){
            $insert_row = $this->link->query($query) or die($this->link->error.__LINE__);
            $pic = explode(".", $_FILES['pic']['name']);
            $new_name = rand() . "." .$pic[1];
            $destination = './file/' . $new_name;
            move_uploaded_file($_FILES['pic']['tmp_name'], $destination);
            if ($insert_row){
                return $insert_row;
            }
            else {
                return false;
            }
        }
        public function upload_image(){
            $pic = explode(".", $_FILES['pic']['name']);
            $new_name = rand() . "." .$pic[1];
            $destination = './file/' . $new_name;
            move_uploaded_file($_FILES['pic']['tmp_name'], $destination);
            return $new_name;
        }
        public function update($query){
            $update_row = $this->link->query($query) or die($this->link->error.__LINE__);
            if ($update_row){
                return $update_row;
            }
            else {
                return false;
            }
        }
        public function delete($query){
            $delete_row = $this->link->query($query) or die($this->link->error.__LINE__);
            if ($delete_row){
                return $delete_row;
            }
            else {
                return false;
            }
        }
    } 
?>