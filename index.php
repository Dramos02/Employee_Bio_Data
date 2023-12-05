<link href='https://fonts.googleapis.com/css?family=Alatsi' rel='stylesheet'>
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
                <td><a href='edit.php?id=$id'><button class='edit-btn'> EDIT </button></a></td>
                <td><a href='delete.php?id=$id'><button class='delete-btn'> DELETE </button></a></td>
            </tr>";
        }
    }
?>
</table>
<a href="add.php"><button class="add-data-btn"> ADD DATA </button></a>

<style>
    body {
        font-family: 'Open Sans', san-serif;
        background-image: url('https://static.vecteezy.com/system/resources/previews/020/040/458/non_2x/retro-background-1970s-pattern-groovy-trippy-vintage-texture-seventies-style-groovy-abstract-psychedelic-background-hippie-aesthetic-60s-70s-80s-illustration-vector.jpg');
        background-size: cover;
        background-position: center;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        height: auto;
        --font-color: #323232;
        --font-color-sub: #666;
        --bg-color: beige;
        --main-color: black;
        
    }

    table {
        font-family: 'Alatsi';|
        font-size: 22px;
        border-collapse: collapse;
        width: auto;
        margin: 20px;
        background: #95D7A4;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        border-radius: 5px;
        border: 2px solid var(--main-color);
        box-shadow: 4px 4px var(--main-color);
    }
    
    th, td {
        border: 2px solid #000000;
        padding: 12px;
        text-align: center;
    }

    th {
        background-color: #3498db;
        color: #fff;
    }

    tr:nth-child(even) {
        background-color: #B3C9F4;
    }

    tr:nth-child(odd):not(:first-child) {
        background-color: #f9f9f9;
    }

    img {
        max-width: 200px;
        height: auto;
    }


    .edit-btn {
        padding: 10px;
        background-color: #4CAF50; /* Green */
        cursor: pointer;
        border-radius: 5px;
        border: 2px solid var(--main-color);
        box-shadow: 4px 4px var(--main-color);
        font-size: 17px;
        font-weight: 600;
        color: var(--font-color);
        cursor: pointer;
    }

    .edit-btn:hover {
        background-color: #45a049; /* Darker Green on hover */
    }

    .delete-btn {
        padding: 10px;
        background-color: #e74c3c; /* Red */
        cursor: pointer;
        border-radius: 5px;
        border: 2px solid var(--main-color);
        box-shadow: 4px 4px var(--main-color);
        font-size: 17px;
        font-weight: 600;
        color: var(--font-color);
        cursor: pointer;
    }

    .delete-btn:hover {
        background-color: #c0392b; /* Darker Red on hover */
    }

    .add-data-btn {
        padding: 10px;
        background-color: #f39c12; /* Orange */
        cursor: pointer;
        border-radius: 5px;
        border: 2px solid var(--main-color);
        box-shadow: 4px 4px var(--main-color);
        font-size: 17px;
        font-weight: 600;
        color: var(--font-color);
        cursor: pointer;

    }

    .add-data-btn:hover {
        background-color: #d35400; /* Darker Orange on hover */
    }
</style>


