
<?php

@include 'dbconnct.php';

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $password= md5($_POST['password']);
  // $number= md5($_POST['number']);

   //$cpass = md5($_POST['cpassword']);
   //$created =  new DateTime();
   //$_POST['user_type'];

  $select = " SELECT * FROM user WHERE email = '$email' && password = '$password' ";

   $result = mysqli_query($conn, $select);

 if(mysqli_num_rows($result) > 0){

      $error[1][] = 'user already exist!';

   }else{

      if($password == $name){
         $error[] = 'password not matched!';
      }else{
         $insert = "INSERT INTO user (name, email, password ) VALUES('$name','$email','$password')";
         mysqli_query($conn, $insert);
         header('location:registration.php');
         
      }
   }


;
}

?>

                    
<!DOCTYPE html>
<html>
<style>


</style>

<head>
    <title>Register</title>
</head>

<body>

    <h2>Registration Form</h2>
    

        
<form method="post" action="" name="registerform">

        
<?php
           if(isset($erromg[0])){
            foreach($erromg[0]  as $nameErrors){
                echo"<p class='small text-danger'> ".$nameErrors."</p>";

            }
           }


?>
        <label><b>Username</b></label>
        <input type="text" name="name" placeholder=" your name "/>
     
<br>
<?php
           if(isset($erromg[1])){
            foreach($erromg[1]  as $emailErrors){
                echo"<p class='small text-danger'> ".$emailErrors."</p>";

            }
           }


?>
        <label><b>Email</b></label>
        <input type="email" name="email" placeholder="eamil"/>
        <?php
           if(isset($erromg[2])){
            foreach($erromg[2] as $passwordErrors){
                echo"<p class='small text-danger'> ".$passwordErrors."</p>";

            }
           }


?>
        <label><b>Password</b></label>
        <input type="password" name="password" auto_complete="off" placeholder=""/>
        <input type="submit" name="submit" value="Register" />
       

      <p>already have an account? <a href="login.php">login now</a></p>
    
        </form>
    </body>
</html>