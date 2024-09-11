<?php
    require '../config.php';
    if (isset($_GET['id'])) {
        $register_id = "";
        $profilepic_ = "";
        $background_ = "";
        $fullname_ = "";
        $course_ = "";
        $address_ = "";
        $phone_ ="";
        $age_ ="";
        $birthday_ ="";
        $placeofbirth_ ="";
        $gender_ ="";
        $skill1_ = "";
        $skill2_ = "";
        $skill3_ = "";
        $skill4_ = "";
        $skill5_ ="";
        $school_ ="";
        $school1_ = "";
        $school2_ ="";
        $school3_ = "";
        $objective_ ="";

        $sql = "SELECT * FROM tb_reg WHERE id" .$_GET['id'];
        $result = mysqli_query($conn,$sql);

            if($result -> num_rows>0){
                while($row = $result -> fetch_assoc()){         
                        $profilepic_ = $row['profilepic'];
                        $background_ = $row['background'];
                        $fullname_ = $row['fullname'];
                        $course_ = $row['course'];
                        $address_ = $row['address'];
                        $phonenumber_ =$row['phonenumber'];
                        $age_ =$row['age'];
                        $birthday_ =$row['birthday'];
                        $placeofbirth_ =$row['placeofbirth'];
                        $gender_ =$row['gender'];
                        $skill1_ = $row['skill1'];
                        $skill2_ = $row['skill2'];
                        $skill3_ = $row['skill3'];
                        $skill4_ = $row['skill4'];
                        $skill5_ =$row['skill5'];
                        $school_ =$row['school'];
                        $school1_ = $row['school1'];
                        $school2_ =$row['school2'];
                        $school3_ = $row['school3'];
                        $objective_ =$row['objective'];
                }
            }
            else{
                echo "<script>alert('ERROR')</script>";
            }

    }
?>








<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../setting/edit-profile.css">
    <title>Edit Profile</title>
</head>
<body>
        <div class="container">
            <form action="" method="post" enctype="multipart/form-data">
              
                    <div class="profilepic">
                    <div class="form-group">
                        <input type="hidden" name="id" value="<?php echo $_GET['id']?>">
                        <label for="profilepic" class="lprofilepic">Profile Picture</label>
                        <input type="file" name="profilepic" id="profilepic"  class="profilepic" placeholder="Profile Picture" accept=".jpg, .jpeg, .png">
                    </div>
                    </div>


                    <div class="hpersonal">
                        <h2>Personal Information</h2>
                    </div>

                    <div class="personal-info">
                        <div class="form-group">
                            <label for="name">Full Name</label>
                            <input type="text" name="fullname" id="fullname" class="fullname" value="<?php echo $fullname_?>">
                            <label for="course">Course</label>
                            <input type="text" name="course" id="course" class="course" placeholder="Course">
                            <label for="address">Address</label>
                            <input type="text" name="address" id="address" class="address" placeholder="Address">
                            <label for="number">Phone Number</label>
                            <input type="number" name="phonenumber" id="phonenumber" class="phone" placeholder="Phone Number">
                         </div>
                    <div class="form-group">
                        <label for="age" class="lage">Age</label>
                        <input type="number" name="age" id="age" class="age" placeholder="Age">
                    
                        <label for="birthday" class="lbday">Date of Birth</label>
                        <input type="date" name="birthday" id="birthday" class="bday" placeholder="Date of Birth">
              
                        <label for="placeofbirth" class="lpbirth">Place Of Birth</label>
                        <input type="text" name="placeofbirth" id="placeofbirth" class="pbirth" placeholder="Place of Birth">
                        <label for="gender" class="lgender">Gender</label>
                        <input type="text" name="gender" id="gender" class="gender" placeholder="Gender">
                    </div>
                    </div>

                    <div class="hskill">
                    <h2>Skills</h2>
                    </div>

                    <div class="skill">
                        <div class="form-group"> 
                        <input type="text" name="skill1" id="skill1"  class="skill1" placeholder="Skill Number 1">
                        <input type="text" name="skill2" id="skill2" class="skill2" placeholder="Skill Number 2">
                        <input type="text" name="skill3" id="skill3" class="skill3" placeholder="Skill Number 3">
                      </div>
                      <div class="form-group"> 
                        <input type="text" name="skill4" id="skill4" class="skill4" placeholder="Skill Number 4">
                        <input type="text" name="skill5" id="skill5" class="skill5" placeholder="Skill Number 5">
                        </div>
                    </div>
              
                    <div class="hschool">
                        <h2>Education Background</h2>
                    </div>     

                    <div class="school">
                    <div class="form-group">
                        <input type="text" name="elementary" id="elementary" class="elementary" placeholder="Elementary School">
                        <input type="text" name="junior" id="junior" class="junior" placeholder="Junior High School">
                        </div>
                    <div class="form-group">   
                        <input type="text" name="senior" id="senior" class="senior" placeholder="Senior High School">
                        <input type="text" name="college" id="college" class="college" placeholder="College">
                    </div>
                    </div>

                    <div class="hobjective">
                        <h2>Objective</h2>
                    </div>
                    <div class="form-group">
                        <textarea  name="objective" id="objective" class="objective" placeholder="Objective" ></textarea>
                    </div>

                    <div class="habout">
                        <h2>About Me</h2>
                    </div>
                    <div class="form-group">
                        <textarea  name="about" id="about" class="about" placeholder="About Me" ></textarea>
                    </div>

                    <button type="submit" id="sumbit-btn" name="submit">Submit</button>
                    <button><a href="../home/home.php">Go Back</a></button>

            </form>
        </div>
    
</body>
</html>