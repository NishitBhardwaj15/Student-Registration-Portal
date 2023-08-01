<?php require '../controller/admin.controller.php' ?>

<?php
if (isset($_POST["submit_log"])) {
    $password = $_POST["password_l"];
    $email = $_POST["email_l"];

    $admin = new AdminController();
    $admin->loginAdminData($email,$password);
}

if (isset($_POST["submit_reg"])) {
    $password = $_POST["password_r"];
    $email = $_POST["email_r"];
    $cpassword = $_POST['cpassword_r'];

    $admin = new AdminController();
    $admin->registerAdminData($email,$password,$cpassword);
}
?>

<?php require '../includes/admin.inc.php' ?>

    <div class="form-container">

        <div class="form">
            <h3>Admin : Login</h3>
            <form action="/student-registration-portal/admin/login.php" method="post">
                <div class="form-fields">
                    <label for="email_l">Email</label>
                    <input type="email" name="email_l" autocomplete="off" required>
                    <label for="password_l">Password</label>
                    <input type="password" name="password_l" autocomplete="off" required minlength="5" maxlength="15">
                </div>
                <div class="form-action">
                    <button type="submit" name="submit_log">Login</button>
                </div>
            </form>
        </div>

        <div class="form">
            <h3>Admin : Register</h3>
            <form action="/student-registration-portal/admin/login.php" method="post">
                <div class="form-fields">
                    <label for="email_r">Email</label>
                    <input type="email" name="email_r" autocomplete="off" required>
                    <label for="password_r">Password</label>
                    <input type="password" name="password_r" autocomplete="off" required minlength="5" maxlength="15">
                    <label for="cpassword_r">Confirm Password</label>
                    <input type="password" name="cpassword_r" autocomplete="off" required minlength="5" maxlength="15">
                </div>
                <div class="form-action">
                    <button type="submit" name="submit_reg">Register</button>
                </div>
            </form>
        </div>


    </div>

<?php require '../includes/footer.inc.php' ?>
    