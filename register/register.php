<?php
    require '../config.php';

        if(isset($_POST['submit'])){
          
            $email = $_POST['email'];
            $password =$_POST['password'];
            $confirmpassword = $_POST['confirmpassword'];

            if (empty($email) || empty($password) || empty($confirmpassword)) {
                echo "<script>alert('Please fill in all fields.')</script>";
            } else {
            $sql = "SELECT * FROM tb_reg WHERE email = '$email'";
            $result = mysqli_query($conn,$sql);

            if($result -> num_rows >0){
                echo "<script>alert('Email Already Taken')</script>";
            }
            else{
                if($password == $confirmpassword){
                    $query = "INSERT INTO tb_reg (email,password,confirmpassword) VALUES ('$email','$password','$confirmpassword')";
                    if(mysqli_query($conn,$query)){
                        $register_id = mysqli_insert_id($conn);
                        $_SESSION['register_id'] = $register_id;
                        echo "<script>alert('Register Account with ID: $register_id')</script>";;
                    }
                    else{
                        echo "<script>alert('Fail Register')</script>";
                    }
                }
                else{
                    echo "<script>alert('ERROR')</script>";
                }
            }

            }
        }
             

        

    
?>


<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../register/register-style.css">
        <title>Register</title>
    </head>
    <body>
            <div class="container">
                <form action="" method="post" autocomplete="off">
                <div class="header"><h1>Register</h1></div>

                    <div class="signup">

                        <div class="form-group">
                        <label for="email"> Email </label>
                        <input type="email" name="email" id="email" placeholder="Email"><br>
                        </div>

                        <div class="form-group">
                        <label for="email"> Password </label>
                        <input type="password" name="password" id="password" placeholder="Password"><br>
                        </div>

                        <div class="form-group">
                        <label for="email"> Confirm Password </label>
                        <input type="password" name="confirmpassword" id="confirmpasswor" placeholder="Confirm Password"><br>
                        </div>
                    </div>
                    
                    <div class="button">
                        <button type="submit" name="submit">Register</button>
                        <button ><a href="../login/login.php">Go Back</a></button>
                    </div>
                    
                </form>
            </div>

    </body>
</html>