<div class="form-container">
    <h1>Document Upload</h1>
    <form action="/student-registration-portal/documents.php" method="post" enctype="multipart/form-data">
        <div class="sections">
            <div class="form-fields">
                <label for="photo">Recent photo</label>
                <input type="file" accept=".jpg , .jpeg , .png" name="photo">
                <label for="marks">Marksheet</label>
                <input type="file" accept=".pdf" name="marks">
                <label for="major">Indentity proof</label>
                <input type="file" accept=".pdf" name="identity">
            </div>
        </div>

        <div class="form-action">
            <button type="submit" name="submit_doc">Save</button>
        </div>
    </form>
</div>