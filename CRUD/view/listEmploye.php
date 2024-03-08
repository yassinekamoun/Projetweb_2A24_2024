<?php
include '../Controller/EmployeC.php';
$employeC = new EmployeC();
$list = $employeC->listEmploye();
?>
<html>

<head></head>

<body>

    <center>
        <h1>List of employes</h1>
        <h2>
            <a href="addEmploye.php">Add Employe</a>
        </h2>
    </center>
    <table border="1" align="center" width="70%">
        <tr>
            <th>Id Employe</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Date of Birth</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
        <?php
        foreach ($list as $employe) {
        ?>
            <tr>
                <td><?= $employe['id']; ?></td>
                <td><?= $employe['firstName']; ?></td>
                <td><?= $employe['LastName']; ?></td>
                <td><?= $employe['email']; ?></td>
                <td><?= $employe['dOB']; ?></td>
                <td align="center">
                    <a href="updateEmploye.php?id=<?php echo $employe['id']; ?>">Update</a>
                </td>
                <td>
                    <a href="../View/deleteEmploye.php?id=<?php echo $employe['id']; ?>">Delete</a>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>