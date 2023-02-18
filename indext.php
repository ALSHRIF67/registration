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
       

        <input type="submit" name="submit" value="register now" class="form-btn">
      <p>already have an account? <a href="registration.php">login now</a></p>
        <input type="submit" name="submit" value="Register" />
    
        </form>
    </body>
</html>