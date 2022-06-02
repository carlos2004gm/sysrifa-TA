<?php

   // Carregar as credencias do banco de dados
 $hostname = "sql212.epizy.com";
 $database = "epiz_31521520_sysrifa";
 $user = "epiz_31521520";
 $password = "JYaad6JZ9w";

   try{
       $pdo = new PDO('mysql:host='.$hostname.';dbname='.$database, $user,  $password);
       $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   } catch () {

   }

   
   
   