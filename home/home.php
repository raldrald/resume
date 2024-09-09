


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
             $sql = "SELECT * FROM tb_account";
             $result = mysqli_query($conn,$sql);
                while($row = mysqli_fetch_assoc($result)){
                    echo '<img src="../images/' . $row['profilepic'] . '" alt="Profile Picture" width="200" height="200">';
                }
                ?>
                
            </div>  

        <div class="info">
             <?php
             if (!isset($_SESSION['login'])) {
                header('Location: ../login.php');
                exit();
            }
        
            if (isset($_GET['id'])) {
                $user_id = $_GET['id'];
        
                $sql = "SELECT r.email, a.* 
                        FROM tb_register r
                        LEFT JOIN tb_account a ON r.id = a.register_id
                        WHERE r.id='$user_id'";
        
                $result = mysqli_query($conn, $sql);
                $row = mysqli_fetch_array($result);
        
                if ($row) {
             echo "<h2>";
             echo "$row[fullname]";
             echo "</h2>";
             echo "<h3>";
             echo "$row[course]";
             echo "</h3>";
             echo "<p>";
             echo "$row[address]";
             echo "</p>";
             echo "<p>";
             echo "$row[phonenumber]";
             echo "</p>";
               }
            }
             ?>
             
            </div>

            <div class="objective">
                <H3 class="hobject">Objective</H3>
                <?php
             if (!isset($_SESSION['login'])) {
                header('Location: ../login.php');
                exit();
            }
        
            if (isset($_GET['id'])) {
                $user_id = $_GET['id'];
        
                $sql = "SELECT r.email, a.* 
                        FROM tb_register r
                        LEFT JOIN tb_account a ON r.id = a.register_id
                        WHERE r.id='$user_id'";
        
                $result = mysqli_query($conn, $sql);
                $row = mysqli_fetch_array($result);
        
                if ($row) {
                echo "<p>";
                echo "$row[objective]";
                echo "</p>";
               }
            }
            ?>

            </div>
            <div class="skill">
                <h3 class="hskill">Skill</h3>
                <?php
             if (!isset($_SESSION['login'])) {
                header('Location: ../login.php');
                exit();
            }
        
            if (isset($_GET['id'])) {
                $user_id = $_GET['id'];
        
                $sql = "SELECT r.email, a.* 
                        FROM tb_register r
                        LEFT JOIN tb_account a ON r.id = a.register_id
                        WHERE r.id='$user_id'";
        
                $result = mysqli_query($conn, $sql);
                $row = mysqli_fetch_array($result);
        
                if ($row) {
                echo "<p>";
                echo "$row[skill1]";
                echo "</p>";
                echo "<p>";
                echo "$row[skill2]";
                echo "</p>";
                echo "<p>";
                echo "$row[skill3]";
                echo "</p>";
                echo "<p>";
                echo "$row[skill4]";
                echo "</p>";
                echo "<p>";
                echo "$row[skill5]";
                echo "</p>";

               }
            }
            ?>

            </div>
            <div class="personal-info">
                <h3 class="hpersonalinfo">Personal Information</h3>
                <div class="p-pinfo">
                <?php
             if (!isset($_SESSION['login'])) {
                header('Location: ../login.php');
                exit();
            }
        
            if (isset($_GET['id'])) {
                $user_id = $_GET['id'];
        
                $sql = "SELECT r.email, a.* 
                        FROM tb_register r
                        LEFT JOIN tb_account a ON r.id = a.register_id
                        WHERE r.id='$user_id'";
        
                $result = mysqli_query($conn, $sql);
                $row = mysqli_fetch_array($result);
        
                if ($row) {
                echo "<p>";
                echo "Age: $row[age]";
                echo "</p>";
                echo "<p>";
                $formatted_date = date('F d Y', strtotime($row['birthday']));
                echo "Birthdate: $formatted_date";
                echo "</p>";
                echo "<p>";
                echo "Place of Birth: $row[placeofbirth]";
                echo "</p>";
                echo "<p>";
                echo "Gender: $row[gender]";
                echo "</p>";
               }
            }
            ?>
            </div>
            </div>
            <div class="school">
            <h3 class="hschool">Background Education</h3>
            <?php
             if (!isset($_SESSION['login'])) {
                header('Location: ../login.php');
                exit();
            }
        
            if (isset($_GET['id'])) {
                $user_id = $_GET['id'];
        
                $sql = "SELECT r.email, a.* 
                        FROM tb_register r
                        LEFT JOIN tb_account a ON r.id = a.register_id
                        WHERE r.id='$user_id'";
        
                $result = mysqli_query($conn, $sql);
                $row = mysqli_fetch_array($result);
        
                if ($row) {
                echo "<p>";
                echo "Elementary: $row[elementary]";
                echo "</p>";
                echo "<p>";
                echo "Junior High School: $row[junior]";
                echo "</p>";
                echo "<p>";
                echo "Senior High School: $row[senior]";
                echo "</p>";
                echo "<p>";
                echo "College: $row[college]";
                echo "</p>";
               }
            }
            ?>
            

            </div>
            </div>
         
</body>
</html>
