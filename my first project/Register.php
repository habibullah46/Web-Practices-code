<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
   
       
       
    <div class="color">
        <div class="logo">
         <img src="PictureBox/123893023_1236823743359084_911949709874881227_n.jpg" alt="" width="98px">
        </div>
        <div class="heading">
         <h2><span>KUNIS STUDENT FOUNDATION</span></h2>
        </div>
     </div>
     <div class="mynavi">
        <li> <a href="index.html">Home</a></li>
        <li> <a href="about.html">About</a></li>
        <li> <a href="contact.html">Contact</a></li>
        <li> <a href="review.html">Review</a></li>
</div>
<div class="containter" style="text-align: center; background-color: aliceblue;">
    <form action="conn.php" method="post">
        <h1><b>-----Registration form------</b></h1>
        <hr>
        <p><b>Personal Information</b></p>
        <hr>
        <p><b>First Name:</b><input type="text" name="first_name" required></p>
        <p><b>Last Name:</b><input type="text" name="last_name" required></p>
        <p><b>Father Name:</b><input type="text" name="father_name" required></p>
        <p><b>CNIC:</b><input type="text"  name="cnic"   required  ></p>
        <p><b>DOB:</b><input type="text" name="dob"  required></p>
        <p><b>Status:</b>
            <select name="status" id="status">
                <option value="">---select choice--</option>
                <option value="Single">Single</option>
                <option value="Married">Married</option>
            </select>
        </p>
        <hr>
        <p><b>Contact Information</b></p>
        <hr>
        <p><b>Address:</b><input type="text" name="address"  required></p>
        <p><b>Email:</b><input type="email" name="email" required></p>
        <p><b>Contact:</b><input type="text" name="contact" required></p>
        <hr>
        <p><b></b><input type="submit"></p>
        

    </form>
</div>
 
 </div>