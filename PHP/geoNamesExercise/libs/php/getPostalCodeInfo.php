<?php  // copy-pasted from GeonamesExample/getCountyInfo.php only $url was altered.
// remove for production
ini_set('display_errors', 'On');
error_reporting(E_ALL);

$executionStartTime = microtime(true);

// Concatenates the url for the API call
$url = 'http://api.geonames.org/postalCodeLookupJSON?postalcode=' . $_REQUEST['postalcode'] . '&country=' . 'GB' . '&username=christianv';
// '&country=' . 'GB' == Fixed to United Kingdom

// Initiates the cURL object and sets some parameters
// Curl: It is a tool for transferring files and data with URL syntax
$ch = curl_init();
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_URL, $url);

// Execute cURL session and retrieve result
$result = curl_exec($ch);
curl_close($ch);

// Decode JSON response from GeoNames
$decode = json_decode($result, true);

// Construct output array with status and data
$output['status']['code'] = "200";
$output['status']['name'] = "ok";
$output['status']['description'] = "success";
$output['status']['returnedIn'] = intval((microtime(true) - $executionStartTime) * 1000) . " ms";
$output['data'] = $decode['postalcodes'] ?? [];

// Return JSON output
header('Content-Type: application/json; charset=UTF-8');
echo json_encode($output);
?>


