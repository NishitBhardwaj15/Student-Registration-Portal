<?php require './includes/header.inc.php' ?>

<div class="form-container">
    <h1>Educational Details</h1>
    <form action="">
        <div class="sections">
            <div class="form-fields">
                <label for="sname">School Name</label>
                <input type="text">
                <label for="saddress">School Address</label>
                <textarea></textarea>
                <label for="year">Year of Passing</label>
                <input type="number">
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
                <input type="text">
                <label for="sub2">Name of Subject 2</label>
                <input type="text">
                <label for="sub3">Name of Subject 3</label>
                <input type="text">
                <label for="sub4">Name of Subject 4</label>
                <input type="text">
                <label for="sub5">Name of Subject 5</label>
                <input type="text">
                <label for="tot">Total marks obtained</label>
                <input type="number">
                <label for="rel">Aggregate percentage</label>
                <input type="number">
            </div>
        </div>

        <div class="form-action">
            <button type="submit">Save</button>
        </div>
    </form>
</div>

<?php require './includes/footer.inc.php' ?>