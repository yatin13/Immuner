<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice Page</title>
     <script src="https://kit.fontawesome.com/8d249fdd95.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../cssfiles/invoice.css">
</head>
<body>
<script> localStorage.clear(); </script>
<?php
$name='';
function run(){
$con=mysqli_connect("localhost","root","","cust");
if($con==true)
{
    echo "connected  to database";
}
$row=mysqli_fetch_row(mysqli_query($con,"SELECT * FROM che ORDER BY num DESC LIMIT 1"));
$output='';
$output='<div class="cust-data">
<div style="color:black;text-align:center;font-size:15px;font-weight:400;">
<h5>Issued By:Immuner.co</h5>
<h5>Registered under all the licence</h5>
</div>
<div style="border:2px solid black;">
<span style="color:blue;text-align:center;">Shopping Details</span>
<br>
<span> Name:'.$row[0].'</span>
<br>
<span> Email Id:'.$row[1].'</span>
<br>
<span> Contact :'.$row[2].'</span>
<br>
<span> Delevired to :'.$row[6].'</span>
<br>
<span> Order Id:'.$row[5].'</span>
<br>
<span> Date of Purchase:'.$row[8].'</span>
<br>
<span> Total Products:'.$row[7].'</span>
<br>
<span> Total Amount:'.$row[3].'</span>
<br>
</div>
(Note:This bill is issued by Immuner.Co(All Rights Reserved))
';
return $output;
}

if(isset($_POST["create"]))
{
require_once('../PDF for php/tcpdf.php');
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);
$pdf->setJPEGQuality(75);
$pdf->SetTextColor(62,179,247);
$pdf->SetTitle("Shopping Details");
$pdf->SetFont('times', '', 20); 
$pdf->AddPage();  
$content = ''; 
$content= run();  
$pdf->writeHTML($content); 
$pdf->Image('../images/immu.jpeg',150,0,40,15, 'JPEG', '', 'M', false, 150, '', false, false, 1, false, false, false);
ob_end_clean();  
$pdf->Output('invoice.pdf', 'I');  
 }  
 ?> 
<?php $con=mysqli_connect("localhost","root","","cust");
$row=mysqli_fetch_row(mysqli_query($con,"SELECT * FROM che ORDER BY num DESC LIMIT 1"));
?>
<a style="font-size:20px;" href="Home.php"><i class="fas fa-home"></i>Go back to Home</a>
<div class="welcome">
<h1>Thankyou for shopping with us &#128516; ,<br><?php echo $row[0]; ?></h1>
<h1>Download your invoice by<br> below</h1>
<form method="POST">
<div class="button-content">
<button type="submit" id="generate" name="create">Generate PDF</button>
</div>
</form>
</div>
<img class="side1" src="../Media/buy.jpg">
<img src="../Media/thanks.webp" id="img">
<h1 class="track">For Tracking,click the following</h1>
<img src="../Media/for-you.svg" width="100" height="200" style="position:absolute;margin:-9rem 0 0 58rem">
<img src="../Media/fit2.gif" width="200" height="200" style="border-radius:50px;position:absolute;margin-top:-8rem;">
<a href="track.php"><button class="tra">Track Order</button></a>
</body>
</html>