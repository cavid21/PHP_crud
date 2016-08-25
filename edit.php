<?php 

include "conf.php";

if (!isset($_GET["id"])) {
    header("Location:show.php");
}
$id = $_GET["id"];

$sql = "SELECT `name` , `yas` FROM `person` WHERE id=$id";

$query = mysqli_query($conn,$sql);

$row = mysqli_fetch_assoc($query);
    
?>

 <!doctype html>
 <html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Untitled</title>
        <style>
            input{
                background: aqua;
                padding: 10px;
            }
        </style>
    </head>     
    <body>
        <form action="update.php" method="post">
            <input type="text" name="name" placeholder="ad" value="<?= $row['name']?>"><br>
            <input type="hidden" name="id" value="<?= $id ?>">
            <input type="number" name="yas" placeholder="yas" value="<?= $row['yas']?>" ><br>
            <input type="submit" name="submit" value="Update">
        </form>

        <script src="js/main.js"></script>
    </body>
 </html>