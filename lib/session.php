<?php
class Session{
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

class Sessioon{
        public static function initt(){
            session_start();
        }
        public static function set($key, $val){
            $_SESSION[$key]=$val;
        }
        public static function geet($key){
            if (isset($_SESSION[$key])){
                return $_SESSION[$key];
            }else{
                return false;
            }
        }
        
        public static function checkUserSession(){
            self::initt();
            if (self:: geet("login")==false){
                self::destroy();
                header("location:login.php");
            }
        }
        public static function checkUserLogin(){
            
            if (self::geet("userLogin")==true) {
                header("Location:ctxam.php");
            }
        }
        public static function checkSeession(){
           
            if (self::geet("login")==false){
                self::destroy();
                header("Location:login.php");
            }
        }
        public static function checkLogin(){
            
            if (self::geet("login")==true){
                header("Location:ctxam.php");
            }
        }
        public static function destroy(){
            session_destroy();
            session_unset();
        }
    }

class Sessiion{
        public static function iniit(){
            session_start();
        }
        public static function sett($key, $val){
            $_SESSION[$key]=$val;
        }
        public static function gett($key){
            if (isset($_SESSION[$key])){
                return $_SESSION[$key];
            }else{
                return false;
            }
        }
        
        public static function checkUserSessiion(){
            self::iniit();
            if (self:: gett("login")==false){
                self::destroy();
                header("location:login.php");
            }
        }
        public static function checkUserrLogin(){
            
            if (self::gett("userLogin")==true) {
                header("Location:xtam.php");
            }
        }
        public static function checkSessiion(){
           
            if (self::gett("login")==false){
                self::destroy();
                header("Location:login.php");
            }
        }
        public static function checkLoogin(){
            
            if (self::gett("login")==true){
                header("Location:xtam.php");
            }
        }
        public static function destroy(){
            session_destroy();
            session_unset();
        }
    }
class Seessioon{
        public static function niit(){
            session_start();
        }
        public static function set($key, $val){
            $_SESSION[$key]=$val;
        }
        public static function ett($key){
            if (isset($_SESSION[$key])){
                return $_SESSION[$key];
            }else{
                return false;
            }
        }
        
        public static function checkUserSeessioon(){
            self::iniitt();
            if (self:: ett("login")==false){
                self::destroy();
                header("location:login.php");
            }
        }
        public static function checkUserrLogin(){
            
            if (self::ett("userLogin")==true) {
                header("Location:bvxtam.php");
            }
        }
        public static function checkSessioon(){
           
            if (self::ett("login")==false){
                self::destroy();
                header("Location:login.php");
            }
        }
        public static function checkLoogin(){
            
            if (self::ett("login")==true){
                header("Location:bvxtam.php");
            }
        }
        public static function destroy(){
            session_destroy();
            session_unset();
        }
    }


?>
