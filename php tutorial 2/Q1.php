<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="Q1.php" method="post">
    <table>
        <tr>
            <th><h1>Registration Form</h1></th>
        </tr>
        <tr>
            <td>First Name</td>
            <td><input type="text" name="fname"></td>
        </tr>
        <tr>
            <td>Lasr Name</td>
            <td><input type="text" name="lname"></td>
        </tr>
        <tr>
            <td>Username</td>
            <td><input type="text" name="UserName"></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type="password" name="pass_word"></td>
        </tr>
        <tr>
            <td>Gender</td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="radio" name="gender" value="male"> Male</td>
        </tr>
        <tr>
            <td></td>
            <td><input type="radio" name="gender" value="female"> Female</td>
        </tr>
        <tr>
            <td colspan="2">Acedamic Year:</td>
        </tr>
        <tr>
            <td></td>
            <td>
                <select name="year" id="year">
                    <option value="1">1st Year</option>
                    <option value="2">2nd Year</option>
                    <option value="3">3rd Year</option>
                    <option value="4">4th Year</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="email" name="email"></td>
        </tr>
        <tr>
            <td>Phone No:</td>
            <td><input type="tel" name="phone"></td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit"></td>
        </tr>
    </table>
    </form>

    <table>
        <tr>
            <td>First Name</td>
            <td><?php echo $_POST['fname']; ?></td>
        </tr>
        <tr>
            <td>Last Name</td>
            <td><?php echo $_POST['lname']; ?></td>
        </tr>
        <tr>
            <td>UserName</td>
            <td><?php echo $_POST['UserName']; ?></td>
        </tr>
        <tr>
            <td>password</td>
            <td><?php echo $_POST['pass_word']; ?></td>
        </tr>
        <tr>
            <td>Gender</td>
            <td>
                <?php
                    if($_POST["gender"] === "Male"){
                        echo "Male";
                    }else {
                        echo "Female";
                    } 
                ?>
            </td>
        </tr>
        <tr>
            <td>Acedemic Year</td>
            <td><?php 
                    $year = $_POST["year"];
                    
                    if($year == 1) {
                        echo "1st Year";
                    }else if($year == 2) {
                        echo "2nd Year";
                    }elseif($year == 3) {
                        echo "3rd Year";
                    }elseif($year == 4) {
                        echo "4th Year";
                    }

                ?></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><?php echo $_POST["email"] ?></td>
        </tr>
        <tr>
            <td>Phone No</td>
            <td><?php echo $_POST["phone"] ?></td>
        </tr>
    </table>
</body>
</html>
