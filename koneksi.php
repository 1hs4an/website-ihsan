<?php

$host="localhost";
$user="root";
$pass="";
$database="db_pemrograman";

 $koneksi=mysqli_connect("$host","$user","$pass");
if($koneksi){
        $buka=mysqli_select_db($koneksi,$database);
        
        if(!$buka){
            echo "database tidak terhubung";
        }
}else{
        echo "mysqli tidak terhubung";
    }
    
  ?>  