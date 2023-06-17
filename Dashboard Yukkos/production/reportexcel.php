<?php
include('koneksi.php');
require 'vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();
$sheet->setCellValue('A1', 'No');
$sheet->setCellValue('B1', 'Nama Kos');
$sheet->setCellValue('C1', 'Kategori Kos');
$sheet->setCellValue('D1', 'Nama Lengkap');
$sheet->setCellValue('E1', 'Email');
$sheet->setCellValue('F1', 'Lama Sewa');
$sheet->setCellValue('G1', 'Harga');
$sheet->setCellValue('H1', 'Total Harga');
$sheet->setCellValue('I1', 'Metode Pembayaran');

$query = mysqli_query($koneksi, "Select * from tb_transaksi");
$i = 2;
$no = 1;

while($row = mysqli_fetch_array($query))
{
    $sheet->setCellValue('A'.$i, $no++);
    $sheet->setCellValue('B'.$i, $row['NamaKos']);
    $sheet->setCellValue('C'.$i, $row['KategoriKos']);
    $sheet->setCellValue('D'.$i, $row['namalengkap']);
    $sheet->setCellValue('E'.$i, $row['email']);
    $sheet->setCellValue('F'.$i, $row['lamasewa']);
    $sheet->setCellValue('G'.$i, $row['harga']);
    $sheet->setCellValue('H'.$i, $row['totalHarga']);
    $sheet->setCellValue('I'.$i, $row['metodepembayaran']);
    $i++;
}

$styleArray = [
            'borders' => [
                'allBorders' => [ 
                    'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                ],
            ],
        ];
$i = $i - 1;
$sheet->getStyle('A1:I'.$i)->applyFromArray($styleArray);

$writer = new Xlsx($spreadsheet);
$writer->save('Report Transaksi.xlsx');

if ($query) {
        // pesan jika data tersimpan
        echo "<script>alert('Berhasil Cetak!'); window.location.href='index.php'</script>";
    }
?>