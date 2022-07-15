<?php

$db_host="localhost";
$db_user="root";
$db_password="";
$db_name="dummy";
$conn=new mysqli($db_host,$db_user,$db_password,$db_name);
if(isset($_REQUEST['login'])){
    $email=$_REQUEST['email'];
    $password=$_REQUEST['password'];
   
    $sql="SELECT email,password FROM student where email='".$email."' AND password='".$password."'";
    $conn->query($sql);

echo "<script>location.href='/operation/index.php'</script>";
    
}


?>