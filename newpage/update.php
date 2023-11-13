<?php
include("confi.php");
$result = mysqli_query($mysqli,"SELECT * FROM contactinformation ORDER by id DESC");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update form</title>
</head>
<body>
     <table>
        <?php
         while($res=mysqli_fetch_array($result)) 
         {
            echo'<tr>';
            echo '<td>'.$res['name']. '</td>';
            echo '</tr>';
         }
        ?>
     </table>
</body>
</html>