<?php
$conn =mysqli_connect("localhost","root","","employee")or die("query failed");
    
if(isset($_POST["action"])){
   
    if($_POST["action"] == "insert"){
        insert();
    }
    else if($_POST["action"] == "edit"){
        edit();
    }
    else {
        delete();
    }

}

function insert(){
    global $conn;
    $name = $_POST['name'];
    $dob=$_POST['dob'];
    $gender=$_POST['gender'];
    $image=$_POST["image"];
    // $pic = $_FILES['image']['name']; 
    // $folder = "uploads/".$pic;
    
    // move_uploaded_file($_FILES['image']['tmp_name'],$folder);
    $subject=$_POST['subject'];
    $address=$_POST['address'];
    $emailid=$_POST['emailid'];
    $password=$_POST['password'];
    $contact=$_POST['contact'];
    $check=$_POST['check'];

    $query = "INSERT INTO empdata VALUES('$name','$dob', '$gender','$image','$subject','$address','$emailid','$password','$contact','$check')";
    mysqli_query($conn, $query);
    echo "Inserted Successfully";
    }

    function edit(){
    global $conn;
    $id = $_POST["id"];
    $name = $_POST["name"];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $pic = $_FILES['image']['name']; 
    $folder = "uploads/".$pic;
    
    move_uploaded_file($_FILES['image']['tmp_name'],$folder);
    $subject=$_POST['subject'];
    $address=$_POST['address'];
    $emailid=$_POST['emailid'];
    $password=$_POST['password'];
    $contact=$_POST['contact'];
    $check=$_POST['check'];

    $query = "UPDATE `empdata` SET `id`='$id',`name`='$name',`dob`='$dob',`gender`='$gender',`image`='$pic',`subject`='$subject',`address`='$address',`emailid`='$emailid',`password`='$password',`contact`='$contact',`check`='$check' WHERE id ='$id' ";
    mysqli_query($conn, $query);
    echo "Updated Successfully";
    }

    function delete(){
    global $conn;

    $id = $_POST["action"];

    $query = "DELETE FROM empdata WHERE id = $id";
    mysqli_query($conn, $query);
    echo "Deleted Successfully";
    }


?>