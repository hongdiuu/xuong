<?php
require 'vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();

if (isset($_POST['expostExcel'])) {
    // Get list data
    // $listsp;
    // Tạo tiêu đề
    $sheet
        ->setCellValue('A1', 'STT')
        ->setCellValue('B1', 'ID')
        ->setCellValue('C1', 'Tên')
        ->setCellValue('D1', 'giá')
        ->setCellValue('E1', 'ảnh');

    // Ghi dữ liệu
    $rowCount = 2;
    foreach ($listsp as $key => $value) {
        $sheet->setCellValue('A' . $rowCount, $rowCount - 1);
        $sheet->setCellValue('B' . $rowCount, $value['id']);
        $sheet->setCellValue('C' . $rowCount, $value['name_product']);
        $sheet->setCellValue('D' . $rowCount, $value['price']);
        $sheet->setCellValue('E' . $rowCount, "http://localhost/xuong" . $value['image']);
        $rowCount++;
    }

    // Xuất file
    $writer = new \PhpOffice\PhpSpreadsheet\Writer\Xlsx($spreadsheet);
    $writer->setOffice2003Compatibility(true);
    $filename = "listproduct". ".xlsx";
    $writer->save($filename);
    // header('Content-Type:application/force-download');
    header("location:" . $filename);
}
?>