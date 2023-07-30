<div class="form-container">
    <h1>Programme Details</h1>
    <form action="http://localhost/student-registration-portal/major.php" method="post">
        <div class="sections">
            <div class="form-fields">
                <label for="course">Course</label>
                <?php 
                    echo '<input type="text" disabled placeholder="' . $course . '">';
                ?>
                <label for="sem">Semester</label>
                <input type="text" placeholder="1" disabled>
                <label for="major">Major</label>
                <select name="major">
                <?php

                    foreach ($options as $op) {
                        echo '<option value="' . $op . '">' . $op . '</option>';
                    }

                ?>
                </select>
            </div>
        </div>

        <div class="sections">
            <div class="form-fields">
                <label for="maj1">Major Paper 1</label>
                <input type="text" required name="paperm1">
                <label for="maj2">Major Paper 2</label>
                <input type="text" required name="paperm2">
                <label for="ele1">Elective Paper 1</label>
                <input type="text" required name="papere1">
                <label for="ele2">Elective Paper 2</label>
                <input type="text" required name="papere2">
                <label for="lab">Laboratory Paper</label>
                <input type="text" required name="paperl">
                <label for="cred">Total marks credits</label>
                <input type="text" placeholder="50" disabled>
            </div>
        </div>

        <div class="form-action">
            <button type="submit" name="submit_maj">Save</button>
        </div>
    </form>
</div>
