<?php
$id = "1rKwfRBXCtCoDYAM18lZdVEk72UodpLIjjzpxZx1VdEs";
// CSV link from Google Sheets (publish to web as CSV)
$url = "https://docs.google.com/spreadsheets/d/".$id."/export?format=csv";

// Fetch CSV
$data = file_get_contents($url);
$lines = explode("\n", trim($data));
$header = str_getcsv(array_shift($lines));

$result = [];
$rowAssocTemp;
$arrayKatalog = [];
$arrayNamaKatalog = [];

foreach ($lines as $line) {
    if (trim($line) == "") continue;

    $row = str_getcsv($line);
    $rowAssoc = array_combine($header, $row);
    
    $result[] = [
        "KEY" => csvSafe($rowAssoc['KEY'] ?? ""),
        "ID"  => csvSafe($rowAssoc['ID'] ?? ""),
        "EN"  => csvSafe($rowAssoc['EN'] ?? ""),
    ];
}

// Convert to JSON
$json = json_encode($result, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_INVALID_UTF8_SUBSTITUTE);

// Save to file (same folder as this script)
file_put_contents("assets/json/lang.json", $json);

// Optional: also send to browser
header('Content-Type: application/json');
echo $json;

function csvSafe($text) {
    $text = str_replace('"', '""', $text); // escape double quotes
    return $text;
}

