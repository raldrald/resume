


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../home/homestyle.css">
    <title>Document</title>
</head>
<body>
        <?php
             require "../config.php";
        ?>

        <div class="navbar">
          <?php include "../index.php";?>
        </div>
        <div class="container">
        
            <div class="profilepic">
                    <?php
                    $sql = "SELECT * FROM tb_acc";
                    $result = mysqli_query($conn,$sql);
                        while($row = mysqli_fetch_assoc($result)){
                            echo '<img src="../images/' . $row['profilepic'] . '" alt="Profile Picture" width="200" height="200">';
                        }
                        ?>
                                
            </div>  

        <div class="info">
        <?php
                   $sql = "SELECT * FROM tb_acc";
                   $result = mysqli_query($conn,$sql);

                   if($result -> num_rows>0){
                        while($row = $result->fetch_assoc()){
                            echo "<H2>".$row['fullname']."</h2>";
                            echo "<H3>".$row['course']."</h3>";
                            echo "<p>".$row['address']."</p>";
                            echo "<p>".$row['phonenumber']."</p>";
                        }
                   }

                ?>
             
            </div>

            <div class="objective">
                <H3 class="hobject">Objective</H3>
                <?php
                   $sql = "SELECT * FROM tb_acc";
                   $result = mysqli_query($conn,$sql);

                   if($result -> num_rows>0){
                        while($row = $result->fetch_assoc()){
                            echo "<p>".$row['objective']."</p>";
                        }
                   }

                ?>

            </div>
            <div class="skill">
                <h3 class="hskill">Skill</h3>
                <?php
                   $sql = "SELECT * FROM tb_acc";
                   $result = mysqli_query($conn,$sql);

                   if($result -> num_rows>0){
                        while($row = $result->fetch_assoc()){
                            echo "<p>".$row['skill1']."</p>";
                            echo "<p>".$row['skill2']."</p>";
                            echo "<p>".$row['skill3']."</p>";
                            echo "<p>".$row['skill4']."</p>";
                            echo "<p>".$row['skill5']."</p>";
                            
                        }
                   }

                ?>

            </div>
            <div class="personal-info">
                <h3 class="hpersonalinfo">Personal Information</h3>
                <div class="p-pinfo">
                <?php
                   $sql = "SELECT * FROM tb_acc";
                   $result = mysqli_query($conn,$sql);

                   if($result -> num_rows>0){
                        while($row = $result->fetch_assoc()){
                            echo "<p>Age: ".$row['age']."</p>";
                            echo "<p>Birth Date: ".$row['birthday']."</p>";
                            echo "<p>Place of Birth: ".$row['placeofbirth']."</p>";
                            echo "<p>Gender: ".$row['gender']."</p>";
                        }
                   }

                ?>
             </div>
            </div>

            <div class="school">
            <h3 class="hschool">Background Education</h3>
            <?php
                   $sql = "SELECT * FROM tb_acc";
                   $result = mysqli_query($conn,$sql);

                   if($result -> num_rows>0){
                        while($row = $result->fetch_assoc()){
                            echo "<p>Elementary: ".$row['elementary']."</p>";
                            echo "<p>Junior High School: ".$row['junior']."</p>";
                            echo "<p>Senior High School: ".$row['senior']."</p>";
                            echo "<p>College: ".$row['college']."</p>";
                        }
                   }

                ?>
        </div>
            
            </div>
         
</body>
</html>