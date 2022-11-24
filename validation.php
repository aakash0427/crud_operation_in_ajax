<?php
$nameError="";
$dobError="";
$genderError="";
$imageError="";
$subjectError="";
$addressError="";
$emailidError="";
$passwordError="";
$contactError="";
$checkError="";

if(isset($_POST['submit'])){
if (empty($_POST["name"])) {
$nameError = "Name is required";
} else {
$name = test_input($_POST["name"]);
// check name only contains letters and whitespace
if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
$nameError = "Only letters and white space allowed";
}
}
if (empty($_POST["gender"])) {
$genderError = "Gender is required";
} else {
$gender = test_input($_POST["gender"]);
}
}

?>