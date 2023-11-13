<?php
include("confi.php");
$result = mysqli_query($mysqli,"SELECT * FROM contactinformation ORDER by id DESC");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <form action="function.php" method="POST" >
        Name: <input type="text" name="name" ><br>
        Email: <input type="email" name="email" ><br>
        Mobile:  <input type="mobile" name="mobile" ><br>
        Date:  <input type="date" name="date" ><br>
        <input type="submit" name="submit" >
     </form>

     <h2>Veiw Records</h2>
     <table border="2">
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Mobile</th>
            <th>Date</th>
            <th>Update</th>
            <th>Remove</th>

        </tr>
   <?php
      while($res=mysqli_fetch_array($result))
      {
          echo'<tr>';
          echo'<td>'.$res['name'].'</td>';
          echo'<td>'.$res['email'].'</td>';
          echo'<td>'.$res['mobile'].'</td>';
          echo'<td>'.$res['date'].'</td>';
         // echo"<td><a href=\"edit.php?id=$res[id]\"><input type='submit' value = 'Edit'></a>";
         echo"<td><a href=\"edit.php?id=$res[id]\">Edit</a></td>";
         echo '<td><a href="delete.php?id=' . $res['id'] . '" onClick="return confirm(\'Are you sure you want to delete?\')">Delete</a></td>';

        echo '</tr>';
      }
    
   ?>
   </table>
</body>
</html>