<?php

//瑄姊複製錯誤 isset欄位需與member_1.php  $.ajax對應
// if(isset($_POST["username"]) && isset($_POST["password"]) && isset($_POST["name"]) && isset($_POST["mobile"]) && isset($_POST["degree"]))


if(isset($_POST["username"]) && isset($_POST["password"]) && isset($_POST["edu"])){
    //瑄姊複製錯誤 isset欄位需與member_1.php  $.ajax對應
    // if($_POST["username"] != "" && $_POST["password"] != "" && $_POST["name"] != "")

    if($_POST["username"] != "" && $_POST["password"] != "" ){
        $p_username = $_POST["username"];
        $p_password = $_POST["password"];
        $p_name = $_POST["name"];
        $p_email = $_POST["email"];
        $p_food = $_POST["food"];
        $p_edu = $_POST["edu"];
        $p_interest = $_POST["interest"];
        $p_blood = $_POST["blood"];
        $p_age = $_POST["age"];

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "looloosoap";
    
        try{
            // 建立連線
            $conn = new PDO("mysql:host=$servername; dbname=$dbname", $username, $password);
            //設定錯誤模式
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            //瑄姊複製錯誤 資料表欄位需括號 members(,,,,,)
            $sql = "INSERT INTO members (`username`, `password`, `name`, `email`, `food`, `edu`, `interest`, `blood`, `age`) VALUES ('$p_username', '$p_password', '$p_name', '$p_email', '$p_food','$p_edu','$p_interest','$p_blood','$p_age')";
            $conn->exec($sql);
            echo "註冊成功!";
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