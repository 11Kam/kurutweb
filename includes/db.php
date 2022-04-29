<?php 
   $dsn = "mysql:host=localhost; dbname=kurutweb";

   try {
       $pdo = new PDO($dsn, 'root', '');
   }
   catch (PDOExeption $e) {
       echo $e->getMessage();
   }
?>