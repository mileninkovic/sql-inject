<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="margin-top: 50px">
    <div class="container">
    <div class="row">
    <div class="span6">
 
 <?php
 $host=""; // Host
 $username=""; // Username
 $password=""; // Password
 $db_name=""; // Database
 $con= mysqli_connect("$host", "$username", "$password", $db_name) or die("cannot connect"); 

$uid = $_POST['uid'];
$pid = $_POST['passid'];
$SQL = "select * from user_details where userid = '$uid' and password = '$pid' ";
$result = mysqli_query($con, $SQL);
if(mysqli_num_rows($result) > 0) {
    echo "<h4>"."-- Personal Information -- ".$row[3]."</h4>";
    while($row = mysqli_fetch_row($result)) {
        echo "<p>"."User ID : ".$row[0]."</p>";
        echo "<p>"."Password : ".$row[1]."</p>";
        echo "<p>"."First Name : ".$row[2]."</p>";
        echo "<p>"."Last Name : ".$row[3]."</p>";
        echo "<p>"."Gender : ".$row[4]."</p>";
        echo "<p>"."Date of Birth : ".$row[5]."</p>";
        echo "<p>"."Country : ".$row[6]."</p>";
        echo "<p>"."User rating : ".$row[7]."</p>";
        echo "<p>"."Email ID : ".$row[8]."</p>";
        echo "--------------------------------------------";}
    } else {
        echo "Invalid user id or password";
    }
    mysqli_close($con);
?>

</div>
</div>
</div>
</body>
</html>