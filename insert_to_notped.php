<?php
function ThDate(){
$ThDay = array ( "อาทิตย์", "จันทร์", "อังคาร", "พุธ", "พฤหัส", "ศุกร์", "เสาร์" );
$ThMonth = array ( "มกรามก", "กุมภาพันธ์", "มีนาคม", "เมษายน","พฤษภาคม", "มิถุนายน", "กรกฏาคม", "สิงหาคม","กันยายน", "ตุลาคม", "พฤศจิกายน", "ธันวาคม" );
$week = date( "w" ); // ค่าวันในสัปดาห์ (0-6)
$months = date( "m" )-1; // ค่าเดือน (1-12)
$day = date( "d" ); // ค่าวันที่(1-31)
$years = date( "Y" )+543; // ค่า ค.ศ.บวก 543 ทำให้เป็น ค.ศ.
 return "วัน $ThDay[$week]ที่ $day เดือน $ThMonth[$months] พ.ศ. $years";
}
 $date=ThDate(); // แสดงวันที่
 $time =  date("H.i");


$strFileName=fopen("log.txt", "a");
$newrecord="Date: $date\r\nTime: $time\r\n********************************************\r\n";
fputs($strFileName, $newrecord);
fclose($strFileName);

?>
