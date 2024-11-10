<?php
// remove for production
ini_set('display_errors', 'On');
error_reporting(E_ALL);

$executionStartTime = microtime(true);

// Capture the selected country code from the request
$country = $_REQUEST['country'];

// Build the GeoNames Timezone API URL
// Using a fixed timezone lookup on the country's capital coordinates to get sunrise and sunset
$url = 'http://api.geonames.org/timezoneJSON?country=' . $country . '&username=christianv&style=full';

// Initialize cURL session
$ch = curl_init();
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_URL, $url);

// Execute cURL session and retrieve the result
$result = curl_exec($ch);
curl_close($ch);

// Decode JSON response from GeoNames
$decode = json_decode($result, true);

// Construct output array with status and data
$output['status']['code'] = "200";
$output['status']['name'] = "ok";
$output['status']['description'] = "success";
$output['status']['returnedIn'] = intval((microtime(true) - $executionStartTime) * 1000) . " ms";
$output['data']['countryName'] = $decode['countryName'] ?? "Unknown";
$output['data']['sunrise'] = $decode['sunrise'] ?? "No data";
$output['data']['sunset'] = $decode['sunset'] ?? "No data";

// Return JSON output
header('Content-Type: application/json; charset=UTF-8');
echo json_encode($output);
?>
