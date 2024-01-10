<?php
    if(isset($_POST["id"]) && isset($_POST["price"]) && isset($_POST["pnum"])){
        if($_POST["id"] != "" && $_POST["price"] != "" && $_POST["pnum"] != ""){
            $p_id = $_POST["id"];
            $p_price = $_POST["price"];
            $p_pnum = $_POST["pnum"];

            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "looloosoap";

            try {
            $conn = new PDO("mysql:host=$servername; dbname=$dbname", $username, $password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $sql = "UPDATE product SET Price='$p_price', Pnum = '$p_pnum' WHERE id = '$p_id'";

            // Prepare statement
            $stmt = $conn->prepare($sql);

            // execute the query
            $stmt->execute();

            // echo a message to say the UPDATE succeeded
            echo "更新成功!";
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