<?php
include 'connect.php';
if(isset($_GET['id'])){
    $id = $_GET['id'];
    echo $id;
    $sql = "DELETE FROM user WHERE id = $id";
    $res = mysqli_query($conn, $sql);
    if($res){
        header('location: display.php');
    } else{
        echo $conn->error;
    }

}
?>