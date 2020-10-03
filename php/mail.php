<?php
parse_str($_POST['allData'], $formData);

$jname = $formData['jname'];
$jemail = $formData['jemail'];
$jphone = $formData['jphone'];
$jpeople = $formData['jpeople'];
$agree = (isset($formData['agree']) && $formData['agree'] != '') ? $formData['agree'] : '';
if($agree != '' && $agree == 1)
{
    $c = 'Agree';
}
else
{
    $c = 'Not Agree';
}




$to = 'themewar@gmail.com';
$subject = 'Quick Travel Booking Request';

$message = 'New booking request send from Quick Travel. User '.$c.' all terms and conditions.<br/><br/>';
$message .= '<strong>Name : </strong>'.$jname.'<br/><br/>';
$message .= '<strong>Email : </strong>'.$jemail.'<br/><br/>';
$message .= '<strong>Phone : </strong>'.$jphone.'<br/><br/>';
$message .= '<strong>No Of People : </strong>'.$jpeople.'<br/><br/>';

$message .= 'Thanks<br/>';

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= 'From: <'.$jemail.'>' . "\r\n";

mail($to,$subject,$message,$headers);
echo 1;