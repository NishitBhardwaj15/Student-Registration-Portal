<?php require './includes/header.inc.php' ?>

<div class="form-container">
    <h1>Programme Details</h1>
    <form action="">
        <div class="sections">
            <div class="form-fields">
                <label for="course">Course</label>
                <input type="text" placeholder="B.SC" disabled>
                <label for="sem">Semester</label>
                <input type="text" placeholder="1" disabled>
                <label for="major">Major</label>
                <select name="major">
                    <option value="Physics">Physics</option>
                    <option value="Chemistry">Chemistry</option>
                    <option value="Mathematics">Mathematics</option>
                    <option value="Botany">Botany</option>
                    <option value="Zoology">Zoology</option>
                </select>
            </div>
        </div>

        <div class="sections">
            <div class="form-fields">
                <label for="maj1">Major Paper 1</label>
                <input type="text">
                <label for="maj2">Major Paper 2</label>
                <input type="text">
                <label for="ele1">Elective Paper 1</label>
                <input type="text">
                <label for="ele2">Elective Paper 2</label>
                <input type="text">
                <label for="lab">Laboratory Paper 1</label>
                <input type="text">
                <label for="cred">Total marks credits</label>
                <input type="text" placeholder="100" disabled>
            </div>
        </div>

        <div class="form-action">
            <button type="submit">Save</button>
        </div>
    </form>
</div>

<?php require './includes/footer.inc.php' ?>