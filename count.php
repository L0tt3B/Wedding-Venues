<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Count</title>
    <style>
        body{
            background-color: white;

        }
        table{
            margin-left:auto;
            margin-right:auto;
            table-layout:fixed;
            width:50%;
        }
        .change{
            width:25%;
            background-color: white;
        }
        .header{
            background-color: #ffd693;
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

$readHTML = file_get_contents("count.html");
$month =  $_REQUEST['month'];
$month = htmlentities($month, ENT_QUOTES, "UTF-8");

if($month <= 0 || $month > 12){
    echo 'Number needs to match a REAL month.';
}
else {
    echo '<table class="table" border=1>
    <thead class="header">
        <tr>
            <td>Venue Name</td>
            <td>Available Date</td>
        </tr>
    </thead>
    <tbody>';




$sql = "SELECT name, COUNT(booking_date) FROM venue LEFT JOIN venue_booking ON venue.venue_id = venue_booking.venue_id WHERE MONTH(venue_booking.booking_date) = $month GROUP BY venue.name ORDER BY COUNT(booking_date) DESC";
if($result = mysqli_query($conn, $sql)){
    while($row = mysqli_fetch_array($result)){
        echo "
        <tr class='change'>
            <td>$row[0]</td>
            <td>$row[1]</td>
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