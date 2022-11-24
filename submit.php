<?php
require "connection.php";

if(isset($_POST['submit']))
{
     $id=$_GET["id"];
     $name=$_POST['name'];
     $dob=$_POST['dob'];
     $gender=$_POST['gender'];
     $image=$_FILES['image']['name'];
     $folder="uploads/".$image;
     move_uploaded_file($_FILES['image']['tmp_name'],$folder);

    $subject=$_POST['subject'];
    $address=$_POST['address'];
    $emailid=$_POST['emailid'];
    $password=$_POST['password'];
    $confirmpassword=md5($_POST['confirmpassword']);
    $contact=$_POST['contact'];
    $check= $_POST['check'];
    
   $sql  ="INSERT INTO empdata ( `id`,`name`, `dob`, `gender`,`image`, `subject`, `address`, `emailid`, `password`, `contact`, `check`)VALUES('$id','$name','$dob','$gender','$folder','$subject','$address','$emailid','$password','$contact','$check')";
    $res = mysqli_query($conn,$sql);
if ($res){
  header("location:form1.php");
 
}


 }
?>