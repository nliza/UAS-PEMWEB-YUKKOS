<?php
include ('koneksi.php');
require_once("dompdf/autoload.inc.php");
use Dompdf\Dompdf;
$dompdf = new Dompdf();
$query = mysqli_query($koneksi, "select * from tb_transaksi");
$html = '<center><h3>Daftar Transaksi</h3></center><hr/><br/><br/>';
$html .= '<table border="1" width="100%">
    <tr>
    <th>No</th>
    <th>Nama Kos</th>
    <th>Kategori Kos</th>
    <th>Nama Lengkap</th>
    <th>Email</th>
    <th>Lama Sewa</th>
    <th>Total Harga</th>
    <th>Metode Pembayaran</th>
    </tr>';
$no = 1;
while($row = mysqli_fetch_array($query))
{
    $html .= "<tr>
    <td>".$no."</td>
    <td>".$row['NamaKos']."</td>
    <td>".$row['KategoriKos']."</td>
    <td>".$row['namalengkap']."</td>
    <td>".$row['email']."</td>
    <td>".$row['lamasewa']."</td>
    <td>".$row['totalHarga']."</td>
    <td>".$row['metodepembayaran']."</td>
    </tr>";
    $no++;
}
$html .= "</html>";
$dompdf->loadHtml($html);
// Setting ukuran dan orientasi kertas
$dompdf->setPaper('A4', 'potrait');
// Rendering dari HTML ke PDF
$dompdf->render();
// Melakukan output file ke PDF
$dompdf->stream('report transaksi.pdf');
?>
