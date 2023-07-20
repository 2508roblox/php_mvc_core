<?php

/**
 *Session Class
 **/

class Session
{
   public static function init()
   {
      if (version_compare(phpversion(), '5.4.0', '<')) {
         if (session_id() == '') {
            session_start();
         }
      } else {
         if (session_status() == PHP_SESSION_NONE) {
            session_start();
         }
      }
   }

   public static function set($key, $val)
   {
      $_SESSION[$key] = $val;
   }

   public static function get($key)
   {
      if (isset($_SESSION[$key])) {
         return $_SESSION[$key];
      } else {
         return false;
      }
   }

   public static function checkSession($key)
   //check điều kiện để vào trang index
   {
      self::init();
      if (empty(self::get($key))) {
         self::destroy();
         redirect('/user/signin');
      }
   }

   public static function checkLogin()
   {
      //kiểm tra xem session login tồn tại thì quay lại trang index
      self::init();
      if (self::get("adminLogin") == true) {
         header("Location:index.php");
      }
   }

   public static function destroy()
   {
      session_destroy();
      redirect('/admin/login');
   }
}
