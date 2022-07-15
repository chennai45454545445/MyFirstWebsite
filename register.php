<?php

$db_host="localhost";
$db_user="root";
$db_password="";
$db_name="dummy";

$conn=new mysqli($db_host,$db_user,$db_password,$db_name);
if(isset($_REQUEST['register'])){
  $firstname=$_REQUEST['fname'];
  $lastname=$_REQUEST['lname'];
  $email=$_REQUEST['email'];
  $password=$_REQUEST['password'];
  $cpassword=$_REQUEST['cpassword'];
  if(empty($firstname)){
    echo "First name is required";
  }
  if(empty($lastname)){
    echo "Last name is required";
  }
  if(empty($email)){
    echo "email is required";
  }
  if(empty($password)){
    echo "Password is required";
  }
  if(empty($cpassword)){
    echo "First name is required";
  }
  if($password!=$cpassword){
    echo "Password must be same";
    die();
  }
if(!empty($firstname&&$lastname&&$email&&$password&&$cpassword)||$password==$cpassword){
    $sql="INSERT INTO student(fname,lname,email,password,cpassword)
    VALUES('$firstname','$lastname','$email','$password','$cpassword')";
    $conn->query($sql);
    echo "Signup Succesfull";
}

}





?>