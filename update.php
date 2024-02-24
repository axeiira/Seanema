<?php
    include'balancing.php';
    include'connection.php';

    if(isset($_POST['aksi'])){
        if($_POST['aksi'] == "topup"){
            $balance += $_POST['money'];
            $query = "UPDATE tb_balance SET Value = $balance";
            $sql = mysqli_query($conn,$query);
            header("location: index.php");
            
        }else if($_POST['aksi'] == "withdraw" && ($balance - $_POST['money'] >= 0)){
            $balance -= $_POST['money'];
            $query = "UPDATE tb_balance SET Value = $balance";
            $sql = mysqli_query($conn,$query);
            header("location: index.php");
        }
    }

    if(isset($_POST['select_movie'])){
        
    }
?>