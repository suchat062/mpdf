<?php
    ob_start();
?>
    <h1>สวัดดีครับ</h1>
<?php
    $html = ob_get_contents();
    ob_end_clean();

    require_once "MPDF60/mpdf.php";
    $mpdf = new mPDF('th', 'A4-L', '0', 'THSarabunNew', 15, 15, 16, 16, 9 , 9, 'L');
    $mpdf->WriteHTML(file_get_contents('styles/invoice.css'), 1);
    $mpdf->WriteHTML($html);
    $mpdf->Output();
    echo $html;
    exit;
?>
