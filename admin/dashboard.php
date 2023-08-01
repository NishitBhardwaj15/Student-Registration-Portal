<?php require '../view/dashboard.view.php' ?>

<?php require '../includes/headerdash.inc.php' ?>

<?php
$dashboard = new DashboardView();
$result = $dashboard->dashboardData();
?>

<table class="styled-table">
    <thead>
        <tr>
            <th>Student id</th>
            <th>Email</th>
            <th>Name</th>
            <th>Contact Number</th>
            <th>Total marks in 12</th>
            <th>Aggregate Percentage</th>
            <th>Passport photo</th>
            <th>Marksheet</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($result as $row) {
            echo "<tr>";
            foreach ($row as $key => $value) {
                if ($key != "step" && $key != 'photo_src' && $key != 'marks_src') {
                    echo "<td>" . $value . "</td>";
                }
                elseif($key == 'photo_src'){
                    ?>
                        <td>
                            <img class="dashboard-img" src="../<?php echo $value?>" alt="profile">
                        </td>
                    <?php
                }
                elseif($key == 'marks_src'){
                    ?>
                        <td>
                           <a href="../<?php echo $value?>" download>Download</a>
                        </td>
                    <?php
                }
            }
            echo "<td><button class='accept'>Accept</button></td>";
            echo "</tr>";
        }
        ?>
    </tbody>
</table>