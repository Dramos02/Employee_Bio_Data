<?php
include("config.php");
include("firebaseRDB.php");
$db = new firebaseRDB($databaseURL);
$id = $_GET['id'];
$retrieve = $db->retrieve("employee/$id");
$data = json_decode ($retrieve, 1);
?>

<form method="post" action="action_edit.php">
<table border="0" width="800">
    <tr>
        <td>Picture</td>
        <td>:</td>
        <td><input type="text" name="picture" value="<?php echo $data['picture']?>"></td>
    </tr>
    <tr>
        <td>Last Name</td>
        <td>:</td>
        <td><input type="text" name="Lname" value="<?php echo $data['Lname']?>"></td>
    </tr>
    <tr>
        <td>First Name</td>
        <td>:</td>
        <td><input type="text" name="Fname" value="<?php echo $data['Fname']?>"></td>
    </tr>
    <tr>
        <td>Middle Name</td>
        <td>:</td>
        <td><input type="text" name="Mname" value="<?php echo $data['Mname']?>"></td>
    </tr>
    <tr>
        <td>Age </td>
        <td>:</td>
        <td><input type="number" name="age"  min="16" max="99"  value="<?php echo $data['age']?>"></td>
    </tr>
    <tr>
        <td>Gender</td>
        <td>:</td>
        <td><input type="text" name="gender" value="<?php echo $data['gender']?>" ></td>
    </tr>
    <tr>
        <td>Civil Status</td>
        <td>:</td>
        <td><input type="text" name="civilstatus" value="<?php echo $data['civilstatus']?>"></td>
    </tr>
    <tr>
        <td>Email</td>
        <td>:</td>
        <td><input type="email" name="email" value="<?php echo $data['email']?>"></td>
    </tr>
    <tr>
        <td>Contact Number</td>
        <td>:</td>
        <td><input type="number" name="contactnumber" value="<?php echo $data['contactnumber']?>"></td>
    </tr>
    <tr>
        <td>SSS NO</td>
        <td>:</td>
        <td><input type="text" name="sssNo" value="<?php echo $data['sssNo']?>"></td>
    </tr>
    <tr>
        <td>PAG IBIG NO</td>
        <td>:</td>
        <td><input type="text" name="pagibigNo" value="<?php echo $data['pagibigNo']?>"></td>
    </tr>
    <tr>
        <td><input type="hidden" name="id" value="<?php echo $id?>">
        <input type="submit" value="SAVE"></button></td>

    </tr>
</table>
</form>