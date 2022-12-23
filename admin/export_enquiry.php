<?php
// Load the database configuration file 
include('security.php');

// Filter the excel data 
function filterData(&$str)
{
    $str = preg_replace("/\t/", "\\t", $str);
    $str = preg_replace("/\r?\n/", "\\n", $str);
    if (strstr($str, '"')) $str = '"' . str_replace('"', '""', $str) . '"';
}

// Excel file name for download 
$fileName = "enquiries_" . date('Y-m-d') . ".xls";

// Column names 
$fields = array('ID', 'NAME', 'MOBILE', 'EMAIL', 'SERVICE', 'MESSAGE', 'STATUS');

// Display column names as first row 
$excelData = implode("\t", array_values($fields)) . "\n";

// Fetch records from database 
$query = $connection->query("SELECT * FROM contact_form ORDER BY id DESC");
if ($query->num_rows > 0) {
    // Output each row of the data 
    while ($row = $query->fetch_assoc()) {
        $status = ($row['view_status'] == 1) ? 'Viewed' : 'Not Viewed';
        $lineData = array($row['id'], $row['name'], $row['mobile'], $row['email'], $row['service'], $row['message'], $status);
        array_walk($lineData, 'filterData');
        $excelData .= implode("\t", array_values($lineData)) . "\n";
    }
} else {
    $excelData .= 'No records found...' . "\n";
}

// Headers for download 
header("Content-Type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=\"$fileName\"");

// Render excel data 
echo $excelData;

exit;
