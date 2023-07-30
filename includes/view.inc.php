<div class="form-container print-area">
    <h1><i class="fa-sharp fa-solid fa-building-columns"></i>
            XYZ College - Application Form</h1>
    <div class="form">
        <div class="sections">
            <div class="form-fields">
                <label for="pic">Profile Photo</label>
                <img src="<?php echo $fourth['photo_src'] ?>" alt="Profile Picture" id="profile-picture">
                <label for="name">Name</label>
                <span><?php echo $first['name']?></span>
                <label for="sem">Semester</label>
                <span><?php echo $first['semester']?></span>
                <label for="dob">Date of Birth</label>
                <span><?php echo $first['dob']?></span>
                <label for="gender">Gender</label>
                <span><?php echo $first['gender']?></span>
                <label for="rel">Religion</label>
                <span><?php echo $first['religion']?></span>
                <label for="caste">Caste</label>
                <span><?php echo $first['caste']?></span>
                <label for="cat">Category</label>
                <span><?php echo $first['category']?></span>
            </div>
        </div>

        <div class="sections">
            <div class="form-fields">
                <label for="fname">Father's Name</label>
                <span><?php echo $first['father']?></span>
                <label for="mname">Mother's Name</label>
                <span><?php echo $first['mother']?></span>
                <label for="contact">Contact Number</label>
                <span><?php echo $first['contact']?></span>
                <label for="add">Permanent Address</label>
                <span><?php echo $first['address']?></span>
                <label for="state">State</label>
                <span><?php echo $first['state']?></span>
                <label for="dis">District</label>
                <span><?php echo $first['district']?></span>
            </div>
        </div>

        <div class="sections">
            <div class="form-fields">
                <label for="school">School</label>
                <span><?php echo $second['school']?></span>
                <label for="passing">Year fo Passing</label>
                <span><?php echo $second['passing']?></span>
                <label for="strem">Stream</label>
                <span><?php echo $second['stream']?></span>
                <label for="board">Board</label>
                <span><?php echo $second['board']?></span>
                <label for="tot">Total Marks</label>
                <span><?php echo $second['total']?></span>
                <label for="tot">Percentage</label>
                <span><?php echo $second['percent']?></span>
            </div>
        </div>

        <div class="sections">
            <div class="form-fields">
                <label for="course">Course</label>
                <span><?php echo $third['course']?></span>
                <label for="major">Major</label>
                <span><?php echo $third['major']?></span>
                <label for="pap1">Major Paper 1</label>
                <span><?php echo $third['paper1']?></span>
                <label for="pap2">Major Paper 2</label>
                <span><?php echo $third['paper2']?></span>
                <label for="elec1">Elective Paper 1</label>
                <span><?php echo $third['elec1']?></span>
                <label for="elec2">Elective Paper 2</label>
                <span><?php echo $third['elec2']?></span>
                <label for="elec2">Laboratory Paper 1</label>
                <span><?php echo $third['lab1']?></span>
            </div>
        </div>

    </div>

    <div class="form-action">
        <button id="print" onclick="window.print();">Print Form</button>
    </div>
    
</div>