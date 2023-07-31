<html>
<body>
<?php
$servername = "localhost";
$user = "root";
$password = "";
$db = "university2";

$conn = mysqli_connect($servername,$user,$password,$db);

if (!$conn){
    die("Connection Failed: ".mysqli_connect_error());
}
else{
    echo "Connection successful";
}
?>
</body>
</html>


