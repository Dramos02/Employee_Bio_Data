<form method="post" action="action_add.php">
<table border="0" width="800">
    <tr>
        <td>Picture</td>
        <td>:</td>
        <td><input type="text" name="picture" class="input" placeholder="imgurl"required></td>
    </tr>
    <tr>
        <td>Last Name</td>
        <td>:</td>
        <td><input type="text" name="Lname" placeholder="Last Name" required></td>
    </tr>
    <tr>
        <td>First Name</td>
        <td>:</td>
        <td><input type="text" name="Fname" placeholder="First Name" required></td>
    </tr>
    <tr>
        <td>Middle Name</td>
        <td>:</td>
        <td><input type="text" name="Mname" placeholder="Middle Name" required></td>
    </tr>
    <tr>
        <td>Age </td>
        <td>:</td>
        <td><input type="number" name="age"  min="15" max="99" placeholder="XX" required></td>
    </tr>
    <tr>
        <td>Gender</td>
        <td>:</td>
        <td><input type="text" name="gender" placeholder="Male/Female" equired></td>
    </tr>
    <tr>
        <td>Civil Status</td>
        <td>:</td>
        <td><input type="text" name="civilstatus" placeholder="Single/Married/Widower/Annulled/Legally Separated"required></td>
    </tr>
    <tr>
        <td>Email</td>
        <td>:</td>
        <td><input type="email" name="email" placeholder="email@email.com"required></td>
    </tr>
    <tr>
        <td>Contact Number</td>
        <td>:</td>
        <td><input type="text" name="contactnumber"  pattern="09\d{9}" title="Please enter 11 digits start with 09" placeholder="09XXXXXXX" required></td>
    </tr>
    <tr>
        <td>SSS NO</td>
        <td>:</td>
        <td><input type="text" name="sssNo" pattern="\d{2}-\d{7}-\d{1}" title="Please enter a valid SSS number" placeholder="XX-XXXXXXXX-X" required></td>
    </tr>
    <tr>
        <td>PAG IBIG NO</td>
        <td>:</td>
        <td><input type="text" name="pagibigNo" pattern="\d{4}-\d{4}-\d{4}" title="Please enter a valid PAG IBIG number" placeholder="XXXX-XXXX-XXXX"required></td>
    </tr>

    <tr>
        <td><button type="submit" class="button-confirm">Submit</button></td>
    </tr>
</table>
</form>

<style>
        body {
            font-family: Arial, sans-serif;
            background-image: url('userinputbg.jpg');
            background-size: cover;
            background-position: center;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: auto; 
        }

        form {
            --input-focus: #2d8cf0;
            --font-color: #323232;
            --font-color-sub: #666;
            --bg-color: beige;
            --main-color: black;
            padding: 20px;
            background: lightblue;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            justify-content: center;
            gap: 20px;
            border-radius: 5px;
            border: 2px solid var(--main-color);
            box-shadow: 4px 4px var(--main-color);
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        td {
            color: var(--font-color);
            font-weight: 750;
            font-size: 20px;
            margin-bottom: 25px;
            padding: 10px;
        }

        input {
            width: 300px;
            height: 40px;
            border-radius: 5px;
            border: 2px solid var(--main-color);
            background-color: var(--bg-color);
            box-shadow: 4px 4px var(--main-color);
            font-size: 15px;
            font-weight: 600;
            color: var(--font-color);
            padding: 5px 10px;
            outline: none;
        }

        .input::placeholder {
            color: var(--font-color-sub);
            opacity: 0.8;
        }

        .input::placeholder {
            color: var(--font-color-sub);
            opacity: 0.8;
        }

        button {
            background-color: #4caf50;
            margin: 50px auto 0 auto;
            width: 120px;
            height: 40px;
            border-radius: 5px;
            border: 2px solid var(--main-color);
            border-radius: 4px;
            box-shadow: 4px 4px var(--main-color);
            font-size: 17px;
            font-weight: 600;
            color: var(--font-color);
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>