<?php
    class Sessioon{
        public static function init(){
            session_start();
        }
        public static function set($key, $val){
            $_SESSION[$key]=$val;
        }
        public static function get($key){
            if (isset($_SESSION[$key])){
                return $_SESSION[$key];
            }else{
                return false;
            }
        }
        
        public static function checkUserSession(){
            self::init();
            if (self:: get("login")==false){
                self::destroy();
                header("location:login.php");
            }
        }
        public static function checkUserLogin(){
            
            if (self::get("userLogin")==true) {
                header("Location:cxtam.php");
            }
        }
        public static function checkSession(){
           
            if (self::get("login")==false){
                self::destroy();
                header("Location:login.php");
            }
        }
        public static function checkLogin(){
            
            if (self::get("login")==true){
                header("Location:cxtam.php");
            }
        }
        public static function destroy(){
            session_destroy();
            session_unset();
        }
    }

?>
