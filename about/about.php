<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../about/about.css">
        <title>About Me</title>
    </head>
    <body>
    <div class="navbar">
          <?php include "../index.php";?>
        </div>
    
        <div class="container">
        <h1 class="about">About Me</h1>
                <?php
                  require '../config.php';

                    $sql = "SELECT * FROM tb_acc";
                    $result = mysqli_query($conn,$sql);
 
                    if($result -> num_rows>0){
                         while($row = $result->fetch_assoc()){
                             echo "<p>".$row['about']."</p>";
                         }
                    }
 
                 ?>
        </div>

    </body>
</html>