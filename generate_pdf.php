<?php
require_once "connect.php";
require_once "fpdf.php";

$sql = "SELECT * FROM form ORDER BY id";
$result = $conn->query($sql);
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 12);
while ($row = $result->fetch_object()) {
    $id = $row->id;
    $name = $row->name;
    $email = $row->email;
    $address = $row->address;
    $password = $row->password;

    $pdf->Cell(40, 15, $id, 1);
    $pdf->Cell(40, 15, $name, 1);
    $pdf->Cell(40, 15, $email, 1);
    $pdf->Cell(40, 15, $address, 1);
    $pdf->Cell(40, 15, $password, 1);
    $pdf->Ln();
}
$pdf->Output();
?>