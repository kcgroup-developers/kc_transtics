<?php
// Include the Composer autoload file
require 'vendor/autoload.php';  // Adjust this path if necessary

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

// Debugging: Check if the class exists
if (!class_exists('PhpOffice\PhpSpreadsheet\Spreadsheet')) {
    die('PhpSpreadsheet is not loaded correctly.');
}

include '../PHP/config/db_conn.php';

// Capture filter inputs
$bulk_action = $_GET['bulk_action'] ?? '';
$date_filter = $_GET['date_filter'] ?? '';
$status_filter = $_GET['status_filter'] ?? '';
$customer_filter = $_GET['customer_filter'] ?? '';
$start_date = $_GET['start_date'] ?? '';
$end_date = $_GET['end_date'] ?? '';
$export_status_filter = $_GET['export_status_filter'] ?? '';

// Base SQL query
$sql = "SELECT * FROM quotation WHERE 1=1";

// Modify query based on filters
if (!empty($date_filter)) {
    if ($date_filter == 'today') {
        $sql .= " AND DATE(shipping_date) = CURDATE()";
    } elseif ($date_filter == 'this_week') {
        $sql .= " AND WEEK(shipping_date) = WEEK(CURDATE())";
    } elseif ($date_filter == 'this_month') {
        $sql .= " AND MONTH(shipping_date) = MONTH(CURDATE())";
    }
}

if (!empty($status_filter)) {
    $sql .= " AND status = '$status_filter'";
}

if (!empty($customer_filter)) {
    $sql .= " AND name LIKE '%$customer_filter%'";
}

if (!empty($start_date) && !empty($end_date)) {
    $sql .= " AND DATE(shipping_date) BETWEEN '$start_date' AND '$end_date'";
}

if (!empty($export_status_filter)) {
    $sql .= " AND status = '$export_status_filter'";
}

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $spreadsheet = new Spreadsheet();
    $sheet = $spreadsheet->getActiveSheet();
    $sheet->setTitle('Quotations');

    // Set header row
    $sheet->setCellValue('A1', 'No.');
    $sheet->setCellValue('B1', 'Name');
    $sheet->setCellValue('C1', 'Email');
    $sheet->setCellValue('D1', 'Company');
    $sheet->setCellValue('E1', 'Phone');
    $sheet->setCellValue('F1', 'City');
    $sheet->setCellValue('G1', 'Country');
    $sheet->setCellValue('H1', 'Type of goods');
    $sheet->setCellValue('I1', 'Quantity');
    $sheet->setCellValue('J1', 'Shipping Date');
    $sheet->setCellValue('K1', 'Delivery Date');
    $sheet->setCellValue('L1', 'Status');
    $sheet->setCellValue('M1', 'Detail');

    $rowNum = 2;

    while ($row = $result->fetch_assoc()) {
        $sheet->setCellValue('A' . $rowNum, $row['id']);
        $sheet->setCellValue('B' . $rowNum, $row['name']);
        $sheet->setCellValue('C' . $rowNum, $row['email']);
        $sheet->setCellValue('D' . $rowNum, $row['company']);
        $sheet->setCellValue('E' . $rowNum, $row['phone']);
        $sheet->setCellValue('F' . $rowNum, $row['city']);
        $sheet->setCellValue('G' . $rowNum, $row['country']);
        $sheet->setCellValue('H' . $rowNum, $row['type_of_goods']);
        $sheet->setCellValue('I' . $rowNum, $row['quantity']);
        $sheet->setCellValue('J' . $rowNum, $row['shipping_date']);
        $sheet->setCellValue('K' . $rowNum, $row['delivery_date']);
        $sheet->setCellValue('L' . $rowNum, $row['status']);
        $sheet->setCellValue('M' . $rowNum, $row['details']);
        $rowNum++;
    }

    $writer = new Xlsx($spreadsheet);
    $fileName = 'quotations_' . date('Y-m-d_H-i-s') . '.xlsx';

    // Set the headers to prompt a file download
    header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    header('Content-Disposition: attachment;filename="' . $fileName . '"');
    header('Cache-Control: max-age=0');

    $writer->save('php://output');
    exit;
} else {
    echo "No results found";
}

$conn->close();
?>
