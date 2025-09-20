<?php
session_start();
// Set default language if not set
if (!isset($_SESSION['LANG'])) {
    $_SESSION['LANG'] = 'EN';
}


$sheetID = "1rKwfRBXCtCoDYAM18lZdVEk72UodpLIjjzpxZx1VdEs";
$url = "https://docs.google.com/spreadsheets/d/$sheetID/gviz/tq?tqx=out:json";

$data = file_get_contents($url);
// Clean response (Google wraps it in some JS)
$data = substr($data, strpos($data, "{"));
$data = substr($data, 0, strrpos($data, "}")+1);

$json = json_decode($data, true);

// Extract rows
$exportJSON = [];
foreach ($json['table']['rows'] as $row) {
    $cells = [];
    foreach ($row['c'] as $cell) {
        $cells[] = $cell['v'] ?? null;
    }
    $exportJSON[] = $cells;
}
// Convert rows to associative array
$rows = [];
$languages = $exportJSON[0]; // first row is header

for ($i = 1; $i < count($exportJSON); $i++) {
    $row = $exportJSON[$i];
    $key = $row[0];
    for ($j = 1; $j < count($row); $j++) {
        $rows[$languages[$j]][$key] = $row[$j];
    }
}

// Example usage
$language = $_SESSION['LANG']; // or "ENGLISH"
$lang = $rows[$language];
?>