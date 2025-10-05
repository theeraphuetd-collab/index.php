<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: text/csv");

// Replace this with your Google Sheets published CSV link
$sheetCsvUrl = "https://docs.google.com/spreadsheets/d/e/2PACX-1vSUe_v_B04ps8TRVxi4y_s_yjGXzjnaKMmmo19YP0tlDHaOj49aTwUPWL570OkrOgT7ldJuoaGoQddF/pub?gid=0&single=true&output=csv";

// Fetch the CSV from Google
$csv = file_get_contents($sheetCsvUrl);
if ($csv === FALSE) {
  http_response_code(500);
  echo "Error fetching sheet";
} else {
  echo $csv;
}
?>
