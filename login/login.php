<?php
    require '../config.php';

        if(isset($_POST['submit'])){

            $email = $_POST['email'];
            $password = $_POST['password'];

            if(empty($email) || empty($password)){
                echo "<script>alert('Please fill in all fields')</script>";
            }
            else{
                $sql = "SELECT * FROM tb_reg WHERE email='$email'";
                $result = mysqli_query($conn,$sql);
                $row = mysqli_fetch_array($result);

                if($row){
                    if($password == $row['password']){
                        $_SESSION['login']=true;
                        $_SESSION['id'] = $row['id'];
                        
                        header('Location: ../home/home.php?id='.$row['id'].'');
                    }
                    else{
                        echo "<script>alert('Incorrect Password')</script>";
                    }
            }
            else{
                echo "<script>alert('User not found')</script>";
            }
        }
        }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../login/login-style.css">
    <title>Login</title>
</head>
<body>
        <div class="container">
            <form action="" method="post">
                <div class="login">
                    <div class="header">
                        <h1>Login</h1>
                    </div>
                    <div class="form-group">
                         <label for="email">Email</label>
                         <input type="text" name="email" id="email" placeholder="Email">
                    </div>

                    <div class="form-group">
                        <label for="Password">Password</label>
                        <input type="password" name="password" id="password" placeholder="Password">
                    </div>

                    <div class="login-button">
                        <button type="submit" name="submit">Sign In</button>
                    </div>
                    <div class="register-link">
                       Don`t have an account? <a href="../register/register.php"> Register</a>
                    </div>
                </div>
            </form>

        </div>
</body>
</html>