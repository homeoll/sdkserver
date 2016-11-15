<?php



$servername = "localhost";
$username = "root";
$password = "oneinstack";
$dbname = "rootsdk";



try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

    echo "conn success!!!" . PHP_EOL;
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $result = $conn->query('select * from cc');

    foreach ($result as $row) {
        print_r($row);
    }

/*
    $sql = "insert into accesslog (json) values ('ok');";
    $res = $pdo->exec($sql);   
	*/
    
} catch (PDOException $e) {
    echo $e->getMessage();
    echo "conn faild  :( " . PHP_EOL;
}

$conn = null;   // pdo close db conn
?>