<html>
<head>
    <title>Success</title>
</head>
<body>
<center>

<?php

$userFirstName = $_POST["userFirstName"];
$userLastName = $_POST["userLastName"];
$userEmail = $_POST["userEmail"];
$userPhoneNumber = $_POST["userPhoneNumber"];
$userGender = $_POST["userGender"];

$serverName = "SERVER_ADDRESS\sqlexpress";
$connectionInfo = array("Database"=>"DATABASE_NAME_HERE", "UID"=>"USERNAME_HERE", "PWD"=>"PASSWORD_HERE");
$conn = sqlsrv_connect($serverName, $connectionInfo);

$query = "INSERT INTO People VALUES ('$userFirstName', '$userLastName', '$userEmail', '$userPhoneNumber', '$userGender')";
$writeToDatabase = sqlsrv_query($conn, $query);

if($conn){
    #echo "Connection established.<br><br>";
}
else{
    echo "Connection could not be established.<br><br>";
    die(print_r(sqlsrv_errors(), true));
}

if ($writeToDatabase){
    echo "Thank you. Your submission has been recorded.";
}
else {
    echo "Error writing to database.<br><br>";
    die(print_r(sqlsrv_errors(), true));
}

?>
</center>
</body>
</html>