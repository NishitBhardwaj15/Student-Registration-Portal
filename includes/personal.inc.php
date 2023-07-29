<div class="form-container">
    <h1>Personal Details</h1>
    <form action="/student-registration-portal/personal.php" method="post">
        <div class="sections">
            <div class="form-fields">
                <label for="name">Name</label>
                <input type="text" name="name" required autocomplete="off">
                <label for="contact">Contact Number</label>
                <input type="number" name="contact" required>
                <label for="sem">Semester</label>
                <input type="text" placeholder="1" disabled>
            </div>
        </div>

        <div class="sections">
            <div class="form-fields">
                <label for="fname">Father's Name</label>
                <input type="text" name="father" required autocomplete="off">
                <label for="mname">Mother's Name</label>
                <input type="text" name="mother" autocomplete="off" required>
                <label for="dob">Date of Birth</label>
                <input type="date" name="dob" autocomplete="off" required>
                <label for="gender">Gender</label>
                <select name="gender">
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Other">Other</option>
                </select>
                <label for="rel">Religion</label>
                <input type="text" name="religion" autocomplete="off" required>
                <label for="caste">Caste</label>
                <input type="text" name="caste" autocomplete="off" required>
                <label for="cat">Category</label>
                <select name="category">
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
                <textarea  name="address" autocomplete="off" required></textarea>
                <label for="tadd">Temporary Address</label>
                <textarea  name="tmp" autocomplete="off" required></textarea>
                <label for="state">State</label>
                <input type="text" name="state" autocomplete="off" required value="Assam">
                <label for="dis">District</label>
                <input type="text" name="district" autocomplete="off" required>
                <label for="pin">Pincode</label>
                <input type="number" name="pin" autocomplete="off" required>
                <label for="altphone">Guardian's Contact Number</label>
                <input type="number" name="gcontact" autocomplete="off" required>
            </div>
        </div>

        <div class="form-action">
            <button type="submit" name="submit_personal">Save</button>
        </div>
    </form>
</div>