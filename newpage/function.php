<?php
include("confi.php");
?>
<?php
      if(isset($_POST['submit']))
      {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        $date = $_POST['date'];

        $result = mysqli_query($mysqli,"INSERT into contactinformation values('','$name','$email','$mobile','$date')");
         
        if($result)
        {
            
          header("location:form.php");
        }
        else
        {
            echo "failed";
        }
      }
     ?>