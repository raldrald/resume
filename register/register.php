<?php
    require '../config.php';

        if(isset($_POST['submit'])){
            $email = $_POST['email'];
            $password =$_POST['password'];
            $confirmpassword = $_POST['confirmpassword'];

            $sql = "SELECT * FROM tb_register WHERE email = '$email'";
            $result = mysqli_query($conn,$sql);

            if($result -> num_rows >0){
                echo "<script>alert('Email Already Taken')</script>";
            }
            else{
                if($password == $confirmpassword){
                    $query = "INSERT INTO tb_register (email,password,confirmpassword) VALUES ('$email','$password','$confirmpassword')";
                    if(mysqli_query($conn,$query)){
                      echo "<script>alert('Register Account')</script>";
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
             

        

    
?>


<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Register</title>
    </head>
    <body>

            <div class="container">
                <form action="" method="post" autocomplete="off" enctype="multipart/form-data">
                    <div class="signup">
                        <label for="email"> Email: </label>
                        <input type="email" name="email" id="email" placeholder="Email"><br>

                        <label for="email"> Password: </label>
                        <input type="password" name="password" id="password" placeholder="Password"><br>

                        <label for="email"> Confirm Password: </label>
                        <input type="password" name="confirmpassword" id="confirmpasswor" placeholder="Confirm Password"><br>
                    </div>
                    <div class="button">
                        <button type="submit" name="submit">Register</button>
                        <button ><a href="login.php">Go Back</a></button>
                    </div>
                    
                </form>
            </div>

    </body>
</html>