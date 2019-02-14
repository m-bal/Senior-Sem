<?php
function readCSV($csvFile){
    $file_handle = fopen($csvFile, 'r');
    while (!feof($file_handle) ) {
        $line_of_text[] = fgetcsv($file_handle, 1024);
    }
    fclose($file_handle);
    return $line_of_text;
}
 
 
// Set path to CSV file
$csvFile = '3.csv';
 
$csv = readCSV($csvFile);
echo '<pre>';
print_r($csv);
echo '</pre>';
echo $csv[0][1];
$source = pg_connect("host=localhost port=5432 dbname=games user=antoniosolorio password=pass");
$txt2 = "";
$query = pg_query($source, "SELECT * FROM question");
echo "\nCount of array is: " . count($query) . " .";
$myfile = fopen("qload_new.sql", "a") or die ("Unable to open file!");
while($row = pg_fetch_row($query)) {
echo htmlspecialchars($row[0]);
$txt2 = 'INSERT INTO question Values (' . $row[0] . ',\'' . $row[1] .  '\',' . $row[2] . ' , ' . $row[3]. ' , ' . $row[4]. ' , ' . $row[5]. ' , ' . $row[6]. ' , ' . $row[7]. ' , ' . $row[8]  . ');' . "\n";
fwrite($myfile, $txt2);
}


?>
