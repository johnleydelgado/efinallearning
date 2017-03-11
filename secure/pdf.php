<?php
$file = $_GET["pdfname"];
$filename = $_GET["pdfname"];
header('Content-type: application/pdf');
header('Content-Disposition: inline; filename="' . $filename . '"');
header('Content-Transfer-Encoding: binary');
header('Content-Length: ' . filesize($file));
header('Accept-Ranges: bytes');
@readfile($file);
?>