<?php
    if(isset($_POST["pname"]) && isset($_POST["price"]) && isset($_POST["pnum"]) && isset($_POST["premark"])){
        if($_POST["pname"] != "" && $_POST["price"] != "" && $_POST["pnum"] != "" && $_POST["premark"] != ""){
            $p_pname = $_POST["pname"];
            $p_price = $_POST["price"];
            $p_pnum = $_POST["pnum"];
            $p_premark = $_POST["premark"];
        
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "looloosoap";
        
            try{
                // 建立連線
                $conn = new PDO("mysql:host=$servername; dbname=$dbname", $username, $password);
                //設定錯誤模式
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
                $sql = "INSERT INTO product (Pname, Price, Pnum, Premark) VALUES ('$p_pname', '$p_price', '$p_pnum', '$p_premark')";
                $conn->exec($sql);
                echo "新增成功!";
            }catch(PDOException $e){
                echo '連線錯誤!'.$sql.$e->getMessage();
            }
        }else{
            echo '參數不得為空白欄位!';
        }
    }else{
        echo '參數不存在!';
    }
?>