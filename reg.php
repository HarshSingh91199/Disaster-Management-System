<?php
require 'db.php';

session_start();

if(isset($_POST['sub']))
{

        $name = trim($_POST['name']);
        $name = strip_tags($name);
        $name = htmlspecialchars($name);

        $age = trim($_POST['age']);
        $age = strip_tags($age);
        $age = htmlspecialchars($age);

        $phone = trim($_POST['phone']);
        $phone = strip_tags($phone);
        $phone = htmlspecialchars($phone);
        
        $email = trim($_POST['email']);
        $email = strip_tags($email);
        $email = htmlspecialchars($email);

        $password = trim($_POST['password']);
        $password = strip_tags($password);
        $password = htmlspecialchars($password);

        $address = trim($_POST['address']);
        $address = strip_tags($address);
        $address = htmlspecialchars($address);
        
        $state = trim($_POST['state']);
        $state = strip_tags($state);
        $state = htmlspecialchars($state);

        $city = trim($_POST['city']);
        $city = strip_tags($city);
        $city = htmlspecialchars($city);

        $category = trim($_POST['category']);
        $category = strip_tags($category);
        $category = htmlspecialchars($category);

        $zip = trim($_POST['zip']);
        $zip = strip_tags($zip);
        $zip = htmlspecialchars($zip);
       
      
      
        
        
        $test="SELECT id FROM profile WHERE email='$email'";
        $result=mysqli_query($conn,$test);
        $lenght=mysqli_num_rows($result);
        if ($lenght==0) {
           
$sql="INSERT INTO profile(name, email, address, city, state, zip, category,phone,age,password) VALUES ('$name','$email','$address','$city','$state','$zip','$category','$phone','$age','$password')";
        mysqli_query($conn,$sql);
    
  $sql="INSERT INTO loginform(email,user,pass)VALUES('$email','$name','$password')";
  mysqli_query($conn,$sql); 
       
    }



        
}

?>



