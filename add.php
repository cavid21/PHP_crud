<?php 
    include "conf.php";
?>
<html>
<head>
    <meta charset="UTF-8">
    <title>Add</title>
    <style>
        input{
            background: aqua;
            padding: 10px;
        }
    </style>
</head>
<body>
    <form action="add.php" method="post">
        <input type="text" name="name" placeholder="ad"><br>
        <input type="number" name="yas" placeholder="yas"><br>
        <input type="submit" name="submit" value="add">
    </form>
    <?php 
        if (isset($_POST['submit'])) {
            @$ad = $_POST['name'];
            @$yas = $_POST['yas'];

            $sql = "INSERT INTO `person`(`name` , `yas`) VALUES ('$ad' , '$yas')";
            print_r($sql);
            $query = mysqli_query($conn, $sql);
            
            if ($query) {
                header("Location:show.php");
            }else{
                echo "query islemir";
            }
        }
    ?>
</body>
</html>
