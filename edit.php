<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script type="text/javascript"></script>
        <title>Edit</title>
</head>
<body>
    <div class="container">
    <div class="col-md-7">
        <div class="card mt-4">
            <div class="card-body">
                <h1 class="text-center">Registration Form</h1>
                <form id="myform" method="POST" enctype="multipart/form-data">
                    <?php
                    $conn = mysqli_connect("localhost","root","","employee")or die("query failed");
                    // print_r ($_GET) ;
                    $id = $_GET["id"];
                    $sql = "SELECT * FROM empdata WHERE id = $id";
                    // echo $sql;
                    $res = mysqli_query($conn,$sql);
                    $rows = mysqli_fetch_assoc($res);
                    ?>
                    <input type="hidden" id="id" value="<?php echo $rows['id'];?>">
  <div class="form-floating">
    <input type="text" class="form-control" id="name" name="name" value="<?php echo $rows['name'];?>" placeholder="Name" pattern="[a-zA-Z]{5,}" title="Minimum 5 letters" required="">
    <label>Name</label>
    <span id="uname" style="color:red"></span>
  </div><br>

  <div class="datewrap">
    <label>Date of Birth</label>
    <input type="date" class="form-control" id="dob" name="dob" value="<?php echo $rows['dob'];?>" required="">
  </div><br>

  <div class="form-check">
    <label>Gender</label>
    <select class="" id="gender" name="gender">
        <option value="Male"<?php if($rows['gender'] == "Male") echo "selected";?>>Male</option>
        <option value="FeMale"<?php if($rows['gender'] == "FeMale") echo "selected";?>>FeMale</option>
</select>
  </div><br>

<div class="mb-3">
      <label class="form-label">Image</label>
      <input type="file" class="form-control" id="image" aria-describedby="emailHelp" name="image" value="<?php echo $rows['image'];?>">
</div><br>

<div class="form-check">
     <input class="form-check-input" type="checkbox" value="<?php echo $rows['check'];?>" id="defaultcheck" name="check">
     <label class="form-check-label" for="defaultcheck">I agree, Terms and condition</label>
</div><br>

<div class="form-group">
<label>Subject</label>
<select class="form-select" aria-label="Default select example" id="subject" name="subject" multiple="multiple" size="4">
<option selected>Select Subject</option>
<option value="English"<?php if($rows['subject'] == "English") echo "selected";?>>English</option>
<option value="Hindi"<?php if($rows['subject'] == "Hindi") echo "selected";?>>Hindi</option>
<option value="Marathi"<?php if($rows['subject'] == "Marathi") echo "selected";?>>Marathi</option>
</select>
</div><br>

<div class="form-floating mb-3">
<label>Address</label>
<textarea class="form-control" type="text" name="address" id="address"  value="<?php echo $rows['address'];?>" required="" style="height: 100px"></textarea>
</div><br>

<div class="form-floating mb-3">
  <input type="email" class="form-control" name="emailid" id="emailid" value="<?php echo $rows['emailid'];?>" placeholder="name@example.com">
  <label for="umail">Email address</label>
</div>

<div class="form-floating mb-3">
  <input type="password" class="form-control" name="password" id="password" value="<?php echo $rows['password'];?>" >
  <label for="floatingPassword">Password</label>
   <span id="message1" style="color:red"></span>
</div>
<div class="form-floating mb-3">
  <input type="password" class="form-control" name="confirmpassword" id="password" value="<?php echo $rows['password'];?>">
  <label for="floatingPassword">Confirm Password</label>
  <span id="message2"></span>
</div>

<div class="form-floating mb-3">
  <input type="contact" class="form-control" name="contact" required="" placeholder="Contact" id="contact" value="<?php echo $rows['contact'];?>">
  <label for="contact">Contact</label>
</div> 
<!-- <button class="btn btn-primary btn-lg" onclick="submitData('edit');">Update</button> -->
<!-- <input type="submit" class="btn btn-primary" name="update" value="update" id="update" onClick="submitData('edit');"> -->
<input type="submit" onclick="submitData('edit');" value="Update" id="update">
<!-- <button class="btn btn-primary btn-lg" onclick="submitData('edit');">Edit</button> -->
</form>
<br>
<a href="fetchdata.php">Go to Fetchdata</a>
<?php require 'script.php';?>

</div>
</div>
</div>
</div>
</body>
</html>