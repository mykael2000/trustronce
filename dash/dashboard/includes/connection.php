<?php
// Database connection (Change credentials accordingly)
        $servername = "mysql.trustronce.com";
        $username = "trustronce";
        $password = "trSHF@Hdo!";
        $dbname = "trustronce";

        $conn = new mysqli($servername, $username, $password, $dbname);
        if($conn){
            echo "connected successfully";
        }else{
            echo "connection failed";
        }