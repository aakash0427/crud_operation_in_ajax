<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script type="text/javascript"></script>
    <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js" rel="stylesheet"> -->
    <title>Document</title>
</head>
<body>
    <div class="container">
    <div class="col-md-7">
        <div class="card mt-4">
            <div class="card-body">
                <h1 class="text-center">Registration Form</h1>
                <form id="myform" method="POST" action="submit.php"  enctype="multipart/form-data">
  <div class="form-floating">
    <input type="text" class="form-control" name="name" placeholder="Name" pattern="[a-zA-Z]{5,}" title="Minimum 5 letters" required="">
    <label>Name</label>
    <span id="uname" style="color:red"></span>
  </div><br>

  <div class="datewrap">
    <label>Date of Birth</label>
    <input type="date" class="form-control" id="dob" name="dob" required="">
  </div><br>

  <div class="form-check">
    <label>Gender</label>
    <select class="" id="gender" name="gender">
        <option value="Male">Male</option>
        <option value="FeMale">FeMale</option>
</select>
  </div><br>

<div class="mb-3">
      <label class="form-label">Image</label>
      <input type="file" class="form-control" id="image" aria-describedby="emailHelp" name="image" value="">
</div><br>

<div class="form-check">
     <input class="form-check-input" type="checkbox" value="it is check" id="defaultcheck" name="check">
     <label class="form-check-label" for="defaultcheck">I agree, Terms and condition</label>
</div><br>

<div class="form-group">
<label>Subject</label>
<select class="form-select" aria-label="Default select example" id="subject" name="subject" multiple="multiple" size="4">
<option selected>Select Subject</option>
<option value="English">English</option>
<option value="Hindi">Hindi</option>
<option value="Marathi">Marathi</option>
</select>
</div><br>

<div class="form-floating mb-3">
<label>Address</label>
<textarea class="form-control" type="text" name="address" required="" placeholder="Enter your address here" id="address" style="height: 100px"></textarea>
</div><br>

<div class="form-floating mb-3">
  <input type="email" class="form-control" name="emailid" id="umail" value="" placeholder="name@example.com">
  <label for="umail">Email address</label>
</div>

<div class="form-floating mb-3">
  <input type="password" class="form-control" name="password" id="pass1" value="" placeholder="Password">
  <label for="floatingPassword">Password</label>
   <span id="message1" style="color:red"></span>
</div>
<div class="form-floating mb-3">
  <input type="password" class="form-control" name="confirmpassword" id="pass2" value="" placeholder="ConfirmPassword">
  <label for="floatingPassword">Confirm Password</label>
  <span id="message2"></span>
</div>

<div class="form-floating mb-3">
  <input type="contact" class="form-control" name="contact" required="" placeholder="Contact" id="contact" value="">
  <label for="contact">Contact</label>
</div> 
<!-- <button type="button" class="btn btn-primary btn-lg" name="submit" onclick="submitData(insert)">Insert</button> -->
<input type="submit" class="btn btn-primary" name="submit" id="submit" onClick="submit">
</form>


</div>
</div>
</div>
</div>


<script>
  $(document).ready(function(){
var form =$('#myform');
  $('#submit').click(function(){
    $.ajax({
      url: form.attr("action"),
      // url: 'submit.php',
      type: "POST",
      data: $('#myform').serialize(),
      success: function(data){

      }

    });
  });
  });
  </script>

<!-- <script>
// function name_input(){
//     var username = document.getElementById("name").value;

//     if(name==null || name==""){
//         document.getElementById("uname").innerHTML="Name must be filled out";
//         return false;
//     }
// }

// function myfun() {

 
//     var m = document.getElementById("pass1").value;
//     var n = document.getElementById("pass2").value;
//     var regx = /^(?=.{8,32}$)(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9]).*/; 
//     console.log(m.length);


//     if(m == ""){
//         document.getElementById("message1").innerHTML="**Fill the password!";
//         return false;
//     }
    
//     if(m.length < 8){
//         console.log("=================================lenght=================");
//         document.getElementById("message1").innerHTML="**Length must be atleast 8 characters";
//         return false;
//     }
    
//     console.log(m);
//      console.log(n);
//      if(m != n){
//         console.log("password not match");
//      }
//      return false;
//     if(m != n){
//         document.getElementById("message1").innerHTML="password is not same";
//         return false;
//     }else{

//         console.log("--------------------else----------------");
//         return false;
//     }
// }
 </script>  -->
</body>
</html>