<?php require './includes/header.inc.php' ?>

<div class="form-container">
    <h1>Document Upload</h1>
    <form action="">
        <div class="sections">
            <div class="form-fields">
                <label for="photo">Recent photo</label>
                <input type="file" accept=".jpg , .jpeg , .png">
                <label for="marks">Marksheet</label>
                <input type="file" accept=".pdf">
                <label for="major">Indentity proof</label>
                <input type="file" accept=".pdf">
            </div>
        </div>

        <div class="form-action">
            <button type="submit">Save</button>
        </div>
    </form>
</div>

<?php require './includes/footer.inc.php' ?>