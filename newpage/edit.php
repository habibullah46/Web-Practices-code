<?php
include("confi.php");
$id = $_GET['id'];
$result = mysqli_query($mysqli, "SELECT name, email, mobile, date FROM contactinformation WHERE id = $id");

while($res=mysqli_fetch_array($result))
{
    $name = $res['name'];
    $email = $res['email'];
    $mobile = $res['mobile'];
    $date = $res['date'];

}
?>
<?php
if(isset($_POST['update']))
{
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $date = $_POST['date'];
    $result = mysqli_query($mysqli,"Update contactinformation Set name = '$name', email='$email' , mobile='$mobile',date='$date' where id=$id ");
    if($result)
    {
       
        header("location:form.php");
    }
    else 
    {
        echo "Update Failed";
    }
}
?>

<form action="" method="POST" >
        Name: <input type="text" name="name" value="<?php echo $name ?>" ><br>
        Email: <input type="email" name="email"  value="<?php echo $email ?>" ><br>
        Mobile:  <input type="mobile" name="mobile"  value="<?php echo $mobile ?>" ><br>
        Date:  <input type="date" name="date"  value="<?php echo $date ?>" ><br>
       <br>
       <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>" >

       <br>
       <input type="submit" name="update" value="Update" >

      
      
     
       
     </form>