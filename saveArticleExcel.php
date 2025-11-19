<?php
$id = "1LzHSrkkmpzwTEWKrq5QHLZiDK669R5EmaJez1DJwH-M";
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
        "id"            => $rowAssoc['ID'],
        "title"         => $rowAssoc['TITLE'],
        "type"          => $rowAssoc['TYPE'],
        "date"          => $rowAssoc['DATE'],
        "image"         => "https://floresflavora.com/assets/article-image/".$rowAssoc['IMAGE'],
        "headline"      => $rowAssoc['HEADLINE'],
        "detail"        => $rowAssoc['DETAIL'],
        "orderno"       => $rowAssoc['ORDERNO'],
        "viewcounter"   => $rowAssoc['VIEWCOUNTER'],
        "likecounter"   => $rowAssoc['LIKECOUNTER'],
    ];
}

usort($result, function($a, $b) {
    return $a['orderno'] <=> $b['orderno'];
});

// Convert to JSON
$json = json_encode($result, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);

// Save to file (same folder as this script)
file_put_contents("assets/json/article.json", $json);

// Optional: also send to browser
header('Content-Type: application/json');
echo $json;

