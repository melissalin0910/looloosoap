<?php
    $servername = "localhost";
    $username = "root";
    $password = "";

    try{
        //建立連線
        $conn = new PDO("mysql:host=$servername; dbname=looloosoap", $username, $password);
        //發現錯誤
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "連線成功!";
    }catch(PDOException $e){
        echo "連線錯誤" . $e->getMessage();
    }
?>