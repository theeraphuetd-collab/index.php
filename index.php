<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: text/csv");

// Replace YOUR_SHEET_ID with your actual Google Sheet ID
$url = "https://docs.google.com/spreadsheets/d/e/2PACX-1vSUe_v_B04ps8TRVxi4y_s_yjGXzjnaKMmmo19YP0tlDHaOj49aTwUPWL570OkrOgT7ldJuoaGoQddF/pub?gid=0&single=true&output=csv";

$csv = @file_get_contents($url);
if ($csv === FALSE) {
  http_response_code(500);
  echo "Error fetching sheet";
} else {
  echo $csv;
}
?>

