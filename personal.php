<?php require './includes/header.inc.php' ?>

<div class="form-container">
    <h1>Personal Details</h1>
    <form action="">
        <div class="sections">
            <div class="form-fields">
                <label for="name">Name</label>
                <input type="text">
                <label for="contact">Contact Number</label>
                <input type="text">
                <label for="sem">Semester</label>
                <input type="text" placeholder="1" disabled>
            </div>
        </div>

        <div class="sections">
            <div class="form-fields">
                <label for="fname">Father's Name</label>
                <input type="text">
                <label for="mname">Mother's Name</label>
                <input type="text">
                <label for="dob">Date of Birth</label>
                <input type="date">
                <label for="gender">Gender</label>
                <select name="gen">
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Other">Other</option>
                </select>
                <label for="rel">Religion</label>
                <input type="text">
                <label for="caste">Caste</label>
                <input type="text">
                <label for="cat">Category</label>
                <select name="cat">
                    <option value="General">General</option>
                    <option value="OBC">OBC</option>
                    <option value="ST">ST</option>
                    <option value="SC">SC</option>
                </select>
            </div>
        </div>

        <div class="sections">
            <div class="form-fields">
                <label for="add">Permanent Address</label>
                <textarea ></textarea>
                <label for="tadd">Temporary Address</label>
                <textarea ></textarea>
                <label for="state">State</label>
                <input type="text">
                <label for="dis">District</label>
                <input type="text">
                <label for="pin">Pincode</label>
                <input type="number">
                <label for="altphone">Guardian's Contact Number</label>
                <input type="number">
            </div>
        </div>

        <div class="form-action">
            <button type="submit">Save</button>
        </div>
    </form>
</div>

<?php require './includes/footer.inc.php' ?>