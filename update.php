<?php 
include "conf.php";

if (isset($_POST)) {
    $id = $_POST['id'];
    $ad = $_POST['name'];
    $age = $_POST['yas'];


    $sql = "UPDATE `person` SET `name`='$ad' ,`yas`='$age' WHERE id = $id";

    $query = mysqli_query($conn,$sql);
    if ($query) {
            header("Location:show.php");
    }else {
            echo "error";
    }
}

 ?>

