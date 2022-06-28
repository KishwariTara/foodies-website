<?php

$conn = mysqli_connect("localhost","root","","foodies_website");

if(!$conn){

  die("Connection Failed");
}
else {

  //echo "success";
}
?>
 <?php
if(isset($_GET['submit']))
{
  $name=$_GET['name'];
  $address=$_GET['address'];
  $phonenumber=$_GET['phonenumber'];
  $email=$_GET['email'];
  $message=$_GET['message'];
echo '<div class="success">Thank you <strong> '.$name.',</strong> you have registered successfully...';
}

  $query="INSERT INTO contact_details VALUES  ('$name','$address','$phonenumber','$email','$message')";
  $data=mysqli_query($conn,$query);

  if($data)
  {
     echo "Data inserted into Database";
  }
  else
  {
     echo "Failed to insert Data into Database";
  }
  ?>