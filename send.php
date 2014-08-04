<?php
include('connect.inc.php');
#require 'connect.inc.php';

if(isset($_POST['name'])&&isset($_POST['phone'])&&isset($_POST['email'])&&isset($_POST['message']))
{
$name=$_POST['name'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$message=$_POST['message'];
if(!empty($name)&&!empty($phone)&&!empty($email)&&!empty($message)){  
              $query = "INSERT INTO contact(serial,name,phone,email,message) VALUES('','$name','$phone','$email','$message')";
              
  if($query_run = mysql_query($query)){
    header('location : register_success.php');
  }else{
  echo "sorry you cannot be registered right now!!";
  }
          }
  }
else{
echo "all fields are manadatory";
}

?>
