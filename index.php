<?php
session_start();
if (isset($_SESSION['status'])) {
    echo "<script>alert('" . $_SESSION['status'] . "');</script>";
    unset($_SESSION['status']);
}
include("config.php");
include("firebaseRDB.php");
$db = new firebaseRDB($databaseURL);

?>

<title>Firebase Data Entry</title>

<table border="1" width="auto">
    <tr>
        <td>Picture</td>
        <td>Last Name</td>
        <td>First Name</td>
        <td>Middle Name</td>
        <td>Age</td>
        <td>Gender</td>
        <td>Civil Status</td>
        <td>Email</td>
        <td>Contact Number</td>
        <td>SSS NO</td>
        <td>PAGIBIG NO</td>
        <td colspan="2">ACTION</td>
    </tr>

    <?php
    $data = $db->retrieve("employee");
    $data = json_decode($data, 1);

    if (is_array($data)) {
        foreach ($data as $id => $employee) {
            echo "<tr>
                <td><img src='{$employee['picture']}' width='200' height='200'></td>
                <td>{$employee['Lname']}</td>
                <td>{$employee['Fname']}</td>
                <td>{$employee['Mname']}</td>
                <td>{$employee['age']}</td>
                <td>{$employee['gender']}</td>
                <td>{$employee['civilstatus']}</td>
                <td>{$employee['email']}</td>
                <td>{$employee['contactnumber']}</td>
                <td>{$employee['sssNo']}</td>
                <td>{$employee['pagibigNo']}</td>
                <td><a href='edit.php?id=$id'><button> EDIT </button></a></td>
                <td><a href='delete.php?id=$id'><button> DELETE </button></a></td>
            </tr>";
        }
    }
?>
</table>
<a href="add.php"><button> ADD DATA </button></a>

