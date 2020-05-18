<!--En este archivo creo la conexión con la base de datos ShishaTime, con la tabla de pedidos. -->
<?php
$host_db = "localhost";
 $user_db = "root";
 $pass_db = "";
 $db_name = "ShishaTime";
 $tbl_name = "pedidos";
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
