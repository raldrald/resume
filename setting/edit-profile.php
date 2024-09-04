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
            <form action="update-process" method="post" enctype="multipart/form-data">
                <div class="profile">
                    <div class="form-group">
                        <label for="profilepic">Profile Picture</label>
                        <input type="file" name="profilepic" id="profilepic" placeholder="Profile Picture" accept=".jpg, .jpeg, .png">
                    </div>
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <label for="course">Course</label>
                        <input type="text" name="course" id="course" placeholder="Course">
                    </div>
                    <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" name="address" id="address" placeholder="Address">
                    </div>
                    <div class="form-group">
                        <label for="number">Phone Number</label>
                        <input type="number" name="number" id="number" placeholder="Phone Number">
                    </div>
                    <div class="personal-info">
                    <div class="form-group">
                        <label for="age">Age</label>
                        <input type="number" name="age" id="age" placeholder="Age">
                    </div>
                    <div class="form-group">
                        <label for="birthday">Date of Birth</label>
                        <input type="date" name="birthday" id="birthday" placeholder="Date of Birth">
                    </div>
                    <div class="form-group">
                        <label for="placeofbirth">Place Of Birth</label>
                        <input type="text" name="placeofbirth" id="placeofbirth" placeholder="Place of Birth">
                    </div>
                    <div class="form-group">
                        <label for="gender">Gender</label>
                        <input type="text" name="gender" id="gender" placeholder="Gender">
                    </div>
                    </div>
                    </div>
                  
                    <div class="form-group"> 
                 
                        <label for="skill">Skills</label>
                        <input type="text" name="skill1" id="skill1"  class="skill1" placeholder="Skill Number 1">
                        <input type="text" name="skill2" id="skill2" class="skill2" placeholder="Skill Number 2">
                        <input type="text" name="skill3" id="skill3" class="skill3" placeholder="Skill Number 3">
                        <input type="text" name="skill4" id="skill4" class="skill4" placeholder="Skill Number 4">
                        <input type="text" name="skill5" id="skill5" class="skill5" placeholder="Skill Number 5">
                    </div>
            

                    <div class="form-group">
                        <label for="school">School</label>
                        <input type="text" name="school" id="school" class="elementary" placeholder="Elementary School">
                        <input type="text" name="school1" id="school1" class="junior" placeholder="Junior High School">
                        <input type="text" name="school2" id="school2" class="senior" placeholder="Senior High School">
                        <input type="text" name="school3" id="school3" class="college" placeholder="College">
                    </div>
                    <div class="form-group">
                        <label for="objective">Objective</label>
                        <textarea  name="objective" id="objective" class="objective" placeholder="Objective" ></textarea>
                    </div>

                    <button type="submit" name="submit">Submit</button>
                
                
            </form>
        </div>
    
</body>
</html>