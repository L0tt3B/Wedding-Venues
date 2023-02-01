<?php
//login details for sql database
$servername = "sci-mysql";
$username = "coa123wuser";
$password = "grt64dkh!@2FD";
$database = "coa123wdb";
$connection = new mysqli($servername, $username, $password);
$connection->select_db($database);

//request required variables
$date = $_REQUEST["date"];
$partySize = $_REQUEST["partySize"];
$cateringGrade = $_REQUEST["cateringGrade"];

//sql query to get suitable venues
$sql = "
    SELECT venue.venue_id, name, capacity, catering.cost as 'catering_cost', weekend_price, weekday_price, licensed, 
    (SELECT DISTINCT COUNT(venue_booking.venue_id) FROM venue_booking WHERE venue_booking.venue_id = venue.venue_id) as 'total_bookings' 
    FROM venue 
    LEFT JOIN catering ON venue.venue_id = catering.venue_id 
    WHERE venue.capacity > $partySize AND catering.grade = $cateringGrade
    AND NOT EXISTS (SELECT venue_id FROM venue_booking WHERE venue_booking.venue_id = venue.venue_id AND venue_booking.booking_date = '$date')";
$result = $connection->query($sql);
$venueResults = array();
while ($venue = mysqli_fetch_assoc($result)) {
    array_push($venueResults, $venue);
}

echo json_encode($venueResults);

  ?>