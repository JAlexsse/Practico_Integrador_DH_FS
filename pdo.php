<?php
  
   $dsn = 'mysql:host=127.0.0.1;port=3306;dbname=noe;charset=utf8';
   $user = 'root';
   $pass = '';
   $opt= [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

    try {
      $db = new PDO($dsn, $user, $pass, $opt);
    } 
    catch(PDOException $e){
      var_dump( $e->getMessage());exit;
    }

    


  ?>

  
