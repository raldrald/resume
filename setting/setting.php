<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../setting/setting.php">
    <title>Account Edit</title>
    <style>
        *{
    margin: 0;
    padding: 0;
    box-sizing: content-box;
}
body{
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    background-image: linear-gradient(to top right, #b5e070, #7eae77);
}
.container{
    margin: 0;
    padding: 20px;
    width: 800px;
    height: 500px;
    border: 5px solid #ccc;
    border-radius: 10px;
    box-shadow: 10px 10px;
    background-image: linear-gradient(to top right, #b5e070, #7eae77);

    
}
button{
    width: 300px;
    height: 100px;
   margin-bottom: 10px;
   margin-left: 250px;
   margin-top: 30px;
   background-color: darkblue;

}
button:hover{
    background-color: lightblue;
}
a{
    text-decoration: none;
    font-size: 20px;
    font-weight: bold;
    color: whitesmoke;
}
a:hover{
    color: black;
    font-size: 20px;
    font-weight: bold;
    text-decoration: underline;
}
.navbar{
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    background-color: #333;
    color: white;
    padding: 5px 10px;
    margin-bottom: 20px;
    z-index: 1000;
}

    </style>
</head>
<body>
<div class="navbar">
          <?php include "../index.php";?>
        </div>
        <div class="container">
       <button><a href="edit-profile.php" >Edit Profile</a></button><br>
       <button><a href="update.php">Account Update</a></button><br>
       <button><a href="logout.php">Logout</a></button> <br>
       </div>   
</body>
</html>