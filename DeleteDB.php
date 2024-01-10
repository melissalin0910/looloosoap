<?php
    if(isset($_POST["id"])){
        if($_POST["id"] != ""){
            $p_id = $_POST["id"];

            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "looloosoap";

            try {
            $conn = new PDO("mysql:host=$servername; dbname=$dbname", $username, $password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $sql = "DELETE FROM product WHERE ID = '$p_id'";
            // use exec() because no results are returned
            $conn->exec($sql);
            echo "刪除成功";
            } catch(PDOException $e) {
                echo $sql . "<br>" . $e->getMessage();
            }

            $conn = null;            
        }else{
            echo '參數不得為空白欄位!';
        }
    }else{
        echo '參數不存在!';
    }


?>