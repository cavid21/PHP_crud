<!doctype html>
<html>
    <head>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Untitled</title>
        <style>
            th , td{
                padding: 10px;
                background: chocolate;
            }
            .aa{
                text-decoration: none;
                padding: 15px;
                background: orangered; 
            }
        </style>
    </head>
    <body>
        <table border="1">
            <thead>
                <tr>
                    <th>id</th>
                    <th>ad</th>
                    <th>yas</th>
                    <th>delete</th>
                    <th>edit</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    include "conf.php";

                    $sql = "SELECT * FROM `person`";
                    $query = mysqli_query($conn, $sql);

                    if ($query) {
                        while($row = mysqli_fetch_assoc($query)){
                            echo "<tr>";
                                echo"<td>".$row['id']."</td>";
                                echo"<td>".$row['name']."</td>";
                                echo"<td>".$row['yas']."</td>";
                                echo"<td><a href='delete.php?id=".$row['id']."'>delete</a></td>";
                                echo"<td><a href='edit.php?id=".$row['id']."'>edit</a></td>";
                            echo "</tr>";
                        }
                    }
                 ?>
            </tbody>
        </table>
        <br>
        <a class="aa" href="add.php">yeni melumat elave et</a>
        <script src="js/main.js"></script>
    </body>
</html>