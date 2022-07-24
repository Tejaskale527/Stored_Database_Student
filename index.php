<?php

if(isset($_POST['name']));{
$server = "localhost";
$username = "root";
$password = "";

$con = mysqli_connect($server,$username,$password);

if (!$con) {
    die("connection to this database failed due to" . 
    mysqli_connect_errno());
}

echo "Success connecting to the db";

//if (isset( $name )) || (isset($Age))  || (isset($gender)) || (isset($Emailid)) || (isset($Phoneno)) || (isset($Phoneno)) {
$name = $_POST['name'];
$Age = $_POST['Age'];
$gender  = $_POST['gender'];
$Emailid= $_POST['Emailid'];
$Phoneno=$_POST['Phoneno'];
$desc= $_POST['desc'];



$sql =   "INSERT INTO `collegeadmission` .`collegeadmission` (`name`, `age`, `gender`, `email id`, `phone.`, `other`) VALUES 
( '$name', '$Age', '$gender','$Emailid', '$Phoneno', '$desc');";
}
echo $sql;

if($con->query($sql)== true){
    echo"succesfully inserted";
}
else{
    echo"Error : $sql<br> $con->error";

}
$con ->close();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome To Travel Agency</title>
    <link rel="stylesheet" href="style.css">
    
    
</head>
<body>
    <img class="College" src="College.jpg" alt="Dhole Patil College Of Education Trust">
 
    <div class="container">
        <h1>Welcome To Dhole Patil College Of Education Trust</h1>
        <p>Enter your detail and submit your participent</p>
        <p class="submitmsg">Thanks For filling participent form</p>
        <form action="index.php" method="post">

            
        <input type="text" name="Name" id="Name", placeholder="Enter Your Name">
        <input type="text" name="Age" id="Age" placeholder="Enter Your Age">
        <input type="text" name="gender" id="gender", placeholder="Enter Your Gender">
        <input type="Emailid" name="Emailid" id="Emailid", placeholder="Enter Your Email Id">
        <input type="Phoneno" name="Phoneno" id="Phoneno", placeholder="Enter Your Phoneno.">
        
        <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter Your Description Message">

        </textarea>
    <button class="btn">submit</button>
</form>
    </div>

    <script src="index.js"></script>
</body>
</html>