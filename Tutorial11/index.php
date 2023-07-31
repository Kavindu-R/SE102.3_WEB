<!DOCTYPE html>
<html>

<head>
    <title>Submitted Data</title>
</head>

<body>
    <h2 style="text-align:center;">Submitted Data</h2>
    <center><section class="container">
        <table>
            <tr>
                <td>First Name:</td>
                <td>
                    <?php echo isset($_POST['first_name']) ? $_POST['first_name'] : ""; ?>
                </td>
            </tr>
            <tr>
                <td>Last Name:</td>
                <td>
                    <?php echo isset($_POST['last_name']) ? $_POST['last_name'] : ""; ?>
                </td>
            </tr>
            <tr>
                <td>Username:</td>
                <td>
                    <?php echo isset($_POST['username']) ? $_POST['username'] : ""; ?>
                </td>
            </tr>
            <tr>
                <td>Password:</td>
                <td>
                    <?php echo isset($_POST['password']) ? $_POST['password'] : ""; ?>
                </td>
            </tr>
            <tr>
                <td>Gender:</td>
                <td>
                    <?php echo isset($_POST['gender']) ? $_POST['gender'] : ""; ?>
                </td>
            </tr>
            <tr>
                <td>Academic Year:</td>
                <td>
                    <?php echo isset($_POST['academic_year']) ? $_POST['academic_year'] : ""; ?>
                </td>
            </tr>
            <tr>
                <td>Email:</td>
                <td>
                    <?php echo isset($_POST['email']) ? $_POST['email'] : ""; ?>
                </td>
            </tr>
            <tr>
                <td>Phone Number:</td>
                <td>
                    <?php echo isset($_POST['phone_number']) ? $_POST['phone_number'] : ""; ?>
                </td>
            </tr>
        </table>
    </section>
    </center>
</body>

</html>