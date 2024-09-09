<?php
    require '../config.php';

        if(isset($_POST['submit'])){
           

            $profilepic = $_FILES['profilepic']['name'];
            $profilepic_tmp = $_FILES['profilepic']['tmp_name'];

            $profilepic_folder = '../images/'.$profilepic;

            move_uploaded_file($profilepic_tmp,$profilepic_folder);


            $fullname=$_POST['fullname'];
            $course = $_POST['course'];
            $address = $_POST['address'];
            $phonenumber = $_POST['phonenumber'];
            $age = $_POST['age'];
            $birthday = $_POST['birthday'];
            $placeofbirth = $_POST['placeofbirth'];
            $gender = $_POST['gender'];
            $skill1 = $_POST['skill1'];
            $skill2 = $_POST['skill2'];
            $skill3 = $_POST['skill3'];
            $skill4 = $_POST['skill4'];
            $skill5 =$_POST['skill5'];
            $elementary=$_POST['elementary'];
            $junior = $_POST['junior'];
            $senior =$_POST['senior'];
            $college = $_POST['college'];
            $objective =$_POST['objective'];

            if(empty($fullname) || empty($course) || empty($address)){
                echo "<script>alert('Name, Course and Address Are Empty')</scirpt>";
            }
            else{
                $sql = "INSERT INTO tb_account (profilepic,fullname,course,address,phonenumber,age,birthday,placeofbirth,gender,skill1,skill2,skill3,skill4,skill5,elementary,junior,senior,college,objective) values
                  ('$profilepic','$fullname','$course','$address','$phonenumber','$age','$birthday','$placeofbirth','$gender','$skill1','$skill2','$skill3','$skill4','$skill5','$elementary','$junior','$senior','$college','$objective')";
                $result = mysqli_query($conn,$sql);

                    if($result === true){
                        echo "<script>alert('Create New Record')</script>";
                    }
                    else{
                        echo "<script>alert('Error')</scirpt>";
                    }
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
                            <input type="text" name="fullname" id="fullname" class="fullname" placeholder="Full Name">
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

                    <button type="submit" id="sumbit-btn" name="submit">Submit</button>
            </form>
        </div>
    
</body>
</html>