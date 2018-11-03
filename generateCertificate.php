<?php
require('fpdf181\fpdf.php');
// Demonstration version

function generateCertificate ($username) {
// Creation section
    $pdf = new FPDF();
    $pdf->AddPage('L');
    
// Title Section
    $pdf->SetFont('Arial','B',32);
    $pdf->Cell(0,30,'Certificate of Achievement!',1,1,'C');
    
// Initial message
    $pdf->SetFont('Times','B',24);
    $pdf->Cell(0, 50,'This document certifies that',0,1,'C');
    
// Username section
    $pdf->SetFont('Times','I',20);
    $pdf->Cell(0, 20,$username,'B',1,'C');
    
// After username message
    $pdf->SetFont('Times','I',18);
    $pdf->Cell(0, 30,'Has completed the cyber security 2.0 course!',0,1,'C');
    
// Date and senders section
    $pdf->SetFont('Times','',18);
    $pdf->Cell(20);
    $pdf->Cell(40, 20,date("m-Y-d"),'B',0,'C');
    $pdf->Cell(140);
    $pdf->Cell(60, 20,'The Phase 4 team!','B',1,'C');
    $pdf->SetFont('Times','I',18);
    $pdf->Cell(20);
    $pdf->Cell(20, 10,'Date of course completion',0,0);
    $pdf->Cell(160);
    $pdf->Cell(20, 10,'The Phase 4 team!',0,1);
    
// Border
    $pdf->SetLineWidth(15);
    $pdf->SetDrawColor(0,156,222);
    $pdf->Rect(1,1,$pdf->GetPageWidth()-2,$pdf->GetPageHeight()-2);
    
// Output Section
    $filename=$username.'Certificate.pdf';
    $root = realpath(str_replace('\\', '/', $_SERVER['DOCUMENT_ROOT']) );
    $pathToFile=$root.'\CyberSecurity2.0\Certificates\\';
    $pdf->Output($pathToFile.$filename,'F');
    return $filename;
}

function storeCertificate($databaseConnection, $filename) {
    $id = $_SESSION['id'];
    $certificate_store_sql = "INSERT INTO certificates (id, filename)
                        VALUES ('$id', '$filename')";
    mysqli_query($databaseConnection, $certificate_store_sql);
}

function getFilename($databaseConnection, $id) {
    $filename_query = "SELECT filename FROM certificates WHERE id = '$id'";
    $result = mysqli_query($databaseConnection, $filename_query);
    $result_info = mysqli_fetch_row($result);
    return $result_info[0];
}

function createAndStoreCertificate($db) {
    $filename = generateCertificate($_SESSION['username']);
    storeCertificate($db, $filename);
}