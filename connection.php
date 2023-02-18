<?php      
    $host = "sql12.freemysqlhosting.net:3306";  
    $user = "sql12599246";  
    $password = "yhejV1nbwJ";  
    $db_name = "sql12599246";  
      
    $con = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  
?>  