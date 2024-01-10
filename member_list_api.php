<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "looloosoap";

    try {
        $conn = new PDO("mysql:host=$servername; dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $stmt = $conn->prepare("SELECT * FROM members");
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $mydata = [];
        foreach($stmt->fetchAll() as $key => $v){ 
            $mydata[] = $v;
        }
        echo json_encode($mydata);
    } catch (PDOException $e) {
        echo '連線錯誤' . $e->getMessage();
    }
?>