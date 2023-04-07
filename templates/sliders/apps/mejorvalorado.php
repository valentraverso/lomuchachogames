<?php
include_once '../../includes/conection.php';

$rating = "SELECT gameid, SUM(stars) AS total FROM rating GROUP BY gameid";
$doi = $conn->query($rating);
$flow = mysqli_fetch_array($doi);

echo $flow;