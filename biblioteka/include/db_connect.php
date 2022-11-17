<?php
        
        $servername = "localhost";
        $username= "biblioteka" ;
        $password = "biblioteka" ;
        $database = "biblioteka";
        
        $mysqlConnection = mysqli_connect($servername, $username, $password, $database);

            if(!$mysqlConnection){
                die("Próba połączenia z bazą danych zakończyła się niepowodzniem. Błąd: " .mysqli_connect_error());
            }

            echo "Połączono z bazą danych.";
            
?>