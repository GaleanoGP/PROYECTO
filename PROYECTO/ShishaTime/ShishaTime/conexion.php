<!--En este archivo creo la conexión con la base de datos ShishaTime. -->
<?php
$host_db = "localhost";
 $user_db = "root";
 $pass_db = "";
 $db_name = "ShishaTime";
 $tbl_name = "usuarios";
 $mysqli=new mysqli("localhost","root","","ShishaTime");
 class DB{
     public static $con=null;

     public static function getConexion(){
         if(self::$con==null){
             self::$con=new mysqli("localhost","root","","ShishaTime");
         }
         return self::$con;
     }

 }
?>
