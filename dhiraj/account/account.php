<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/account_style.css">
    <link href='https://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Calistoga' rel='stylesheet'>
    <title>ACCOUNT</title>
    
</head>
<body>

<?php
//    sign up code
  include 'dbcon.php';
  if(isset($_POST['submit']))
  {
      $username=mysqli_real_escape_string($con,$_POST['username']);
      $email=mysqli_real_escape_string($con,$_POST['email']);
      $password=mysqli_real_escape_string($con,$_POST['password']);
      $cpassword=mysqli_real_escape_string($con,$_POST['cpassword']);

      $pass=password_hash($password,PASSWORD_BCRYPT);
      $cpass=password_hash($cpassword,PASSWORD_BCRYPT);

      $emailquery="select * from signup where email='$email' ";
      $query=mysqli_query($con,$emailquery);

      $emailcout=mysqli_num_rows($query);

      if ( !preg_match ("/^[a-zA-Z\s]+$/",$username)) 
      {
        ?>
        <script>
            alert("Only character and space allowed!!");
        </script>
        <?php
      } 


      if($password!=$cpassword)
      {
          ?>
          
          <script>alert("Passwords are not matching!!!");
          </script>

          <?php
      }
     


      if($emailcout>0)
      {
        //echo "Email Already exist";
                    ?>
                    <script>
                                alert("Email Already Exist!!");
                    </script>
                    <?php
      }
      else
       {
            if(strlen($password)<8)
            {
                        ?>
                        <script>
                                alert("Enter 8 character password");
                        </script>
                        <?php            

            }
      
          
            if($password===$cpassword && strlen($password)>=8 
            && (preg_match ("/^[a-zA-Z\s]+$/",$username))==true)
            {
                $insertquery="insert into signup(name,email,password,cpassword) 
                values('$username','$email','$pass','$cpass')";
                //written in quouts becuse it is varchar

                $insquery=mysqli_query($con,$insertquery);

                if($insquery)
                {
                    ?>
                    <script>
                                alert("Account Created Successfully");
                    </script>
                    <?php
                }

                else
                {
                    ?>
                    <script>
                            alert("Unable to create the account");
                    </script>
                <?php
                }


            }
        }
    }
?>

<!-- Login code -->
<?php

include 'dbcon.php';
    
    if(isset($_POST['login']))
    {
        $email=$_POST['email'];
        $password=$_POST['password'];

        $email_search="SELECT * from signup where email='$email'";
        $query=mysqli_query($con,$email_search);

        $email_counts=mysqli_num_rows($query);

        if($email_counts)
        {
            $email_pass=mysqli_fetch_assoc($query);

            $db_pass=$email_pass['password'];

            $pass_decode=password_verify($password,$db_pass);

            if($pass_decode)
            {
                echo "<script>alert('Login Successfully')</script>";
			    echo"<script>window.location='../../home/home.php'</script>";
            }
            else
            {
                ?>
                <script>alert("Unable to login");</script>
                <?php
            }
        }
        else{
            ?>
                <script>
                        alert("Invalid Email");
                </script>
            <?php
        }
    }


?>

<div style='width:1535px; height:80px; background-color:orange;'>
        
        <h1 style="font-family:Calistoga; margin-left:80px; font-size:50px; color:white; ">Registration</h1></div>
        
        <div class="account-page" style="font-family:Ubuntu;">
            <div class="container" style='margin-left:-150px; margin-top:-20px;'>
                    <div>
                        <div class="form-container" style="background-color: Gainsboro;">
                            <div class="form-btn">
                                <span onclick="login()">Login</span>
                                <span onclick="register()">Register</span>
                                <hr id="Indicator">
                            </div>
                            
                            <form action="<?php echo htmlentities($_SERVER['PHP_SELF'])?>"
                             id="LoginForm" method="POST">
                                <input type="email" name="email" id="" placeholder="Email Id" > 
                                <input type="password" name="password" id="" placeholder="Password">
                                <button type="submit" name="login" class="btn" style="background-color:orange;color:white;">Login</button>
                                <br>
                                <!-- <a href="recover_email.php">Forgot Password?</a> -->
                            </form>

                            <form action="" id="RegForm" method="POST"
                            action="<?php echo htmlentities($_SERVER['PHP_SELF'])?>">
                                <input type="text" name="username" id="" placeholder="Username"
                                required>
                                <input type="email" name="email" id="" placeholder="Email"
                                required>
                                <input type="password" name="password" placeholder="Password"
                                required>
                                <input type="password" name="cpassword" placeholder="Confirm Password"
                                required>
                                <button type="submit" name="submit" class="btn" style="background-color:orange; color:white;">Register</button>
                            </form>
                        </div>

                    </div>
                <!-- </div> -->
            </div>
        </div>    
    <!---Footer-->


    <script>
        var LoginForm=document.getElementById("LoginForm");
        var RegForm=document.getElementById("RegForm");
        var Indicator=document.getElementById("Indicator");


        function register()
        {
            RegForm.style.transform="translateX(0px)";
            LoginForm.style.transform="translateX(0px)";
            Indicator.style.transform="translateX(100px)";
        }

        function login()
        {
            RegForm.style.transform="translateX(300px)";
            LoginForm.style.transform="translateX(300px)";
            Indicator.style.transform="translateX(0px)";
        }

    </script>

    

</body>
</html>