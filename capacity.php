<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Capacity</title>
    <style>
        body{
            background-color: white;
            }
        table {
	        margin-left:auto;
	        margin-right:auto;
            table-layout:fixed;
            width: 50%;
        }

        .change {
        	width: 25%;
            background-color: white;
        }

        .header{
            background-color:  #ffd693;
            border-color: black;
            text-align: center;
        }
    </style>
</head>
<body>

<?php
$servername="sci-mysql";
$username="coa123wuser";
$password="grt64dkh!@2FD";
$dbname="coa123wdb";
$conn = mysqli_connect($servername, $username, $password, $dbname);
$inp_valid = true;

$readHTML = file_get_contents("capacity.html");
$minCapacity = $_REQUEST['minCapacity'];
$minCapacity = htmlentities($minCapacity, ENT_QUOTES, "UTF-8");
$maxCapacity = $_REQUEST['maxCapacity'];
$maxCapacity = htmlentities($maxCapacity, ENT_QUOTES, "UTF-8");

if (!is_numeric($minCapacity) || !is_numeric($maxCapacity)){
    echo 'Please enter a number';
}
else if($minCapacity > $maxCapacity) {
    echo 'Please make sure minimum capacity is smaller than maximum capacity.';
}
else {
echo '<table class="table" border=1>
    <thead class="header">
        <tr>
            <td>Venue Name</td>
            <td>Weekday Price</td>
            <td>Weekend Price</td>
        </tr>
    </thead>
    <tbody>';



$sql = "SELECT name, weekday_price, weekend_price FROM venue WHERE licensed = 1 AND capacity BETWEEN $minCapacity AND $maxCapacity";
if($result = mysqli_query($conn, $sql)){
    while($row = mysqli_fetch_array($result)){
        echo "
        <tr class='change'>
            <td>$row[0]</td>
            <td>£$row[1]</td>
            <td>£$row[2]</td>
        </tr>";
    }

} else {
    echo "Database Error";
}
}
?>
    </tbody>
</table>
    
</body>
</html>