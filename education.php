<?php 
if(isset($_POST['submit_edu'])){
    $school = $_POST['school'];
    $saddress = $_POST['saddress'];
    $year = $_POST['year'];
    $stream = $_POST['stream'];
    $board = $_POST['board'];
    $sub1 = $_POST['sub1'];
    $sub2 = $_POST['sub2'];
    $sub3 = $_POST['sub3'];
    $sub4 = $_POST['sub4'];
    $sub5 = $_POST['sub5'];
    $tot = $_POST['total'];
    $percent = $_POST['percent'];
}
?>


<?php require './includes/header.inc.php' ?>

<div class="form-container">
    <h1>Educational Details</h1>
    <form action="http://localhost/student-registration-portal/education.php" method="post">
        <div class="sections">
            <div class="form-fields">
                <label for="sname">School Name</label>
                <input type="text" name="school" autocomplete="off" required>
                <label for="saddress">School Address</label>
                <textarea name="saddress" autocomplete="off" required></textarea>
                <label for="year">Year of Passing</label>
                <input type="number" name="year" autocomplete="off" max="2023" min="2020" required>
                <label for="stream">Stream</label>
                <select name="stram">
                    <option value="Arts">Arts</option>
                    <option value="Science">Science</option>
                    <option value="Commerce">Commerce</option>
                </select>
                <label for="board">Board</label>
                <select name="board">
                    <option value="CBSE">CBSE</option>
                    <option value="SEBA">SEBA</option>
                    <option value="ICSE">ICSE</option>
                </select>
            </div>
        </div>

        <div class="sections">
            <div class="form-fields">
                <label for="sub1">Name of Subject 1</label>
                <input type="text" name="sub1" autocomplete="off" required>
                <label for="sub2">Name of Subject 2</label>
                <input type="text" name="sub2" autocomplete="off" required>
                <label for="sub3">Name of Subject 3</label>
                <input type="text" name="sub3" autocomplete="off" required>
                <label for="sub4">Name of Subject 4</label>
                <input type="text" name="sub4" autocomplete="off" required>
                <label for="sub5">Name of Subject 5</label>
                <input type="text" name="sub5" autocomplete="off" required>
                <label for="tot">Total marks obtained</label>
                <input type="number" name="tot" autocomplete="off" max="500" required>
                <label for="rel">Aggregate percentage</label>
                <input type="number" name="percent" autocomplete="off" max="100" min="46">
            </div>
        </div>

        <div class="form-action">
            <button type="submit" name="submit_edu">Save</button>
        </div>
    </form>
</div>

<?php require './includes/footer.inc.php' ?>