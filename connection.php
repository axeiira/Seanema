<?php
    $host='localhost';
    $user='root';
    $pass='';
    $db='db_cinema';
    $conn = mysqli_connect($host,$user,$pass,$db);
    mysqli_select_db($conn, $db);

    //BALANCE DATA
    $query = "SELECT * FROM tb_balance;";
    $sql = mysqli_query($conn, $query);
    $result = mysqli_fetch_row($sql);
    $balance = $result[1];

    //TEST CONNECTION
    if($conn){
        //echo "connected";
    }
?>