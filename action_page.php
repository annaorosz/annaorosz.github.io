<?php

$to = 'aorosz@sas.upenn.edu';

$subject = 'HTML Form in HTML Email';

$headers = "From: aorosz@sas.upenn.edu\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

$message = '<html><body>';
$message .= '<form action="http://mysite.com/process.php" method="post" target="_blank">';
$message .= '<label for="email">Email address:</label>';
$message .= '<input id="email" name="email" placeholder="john.doe@upenn.edu" type="tel">';
$message .= '<textarea cols="75" name="commentText" rows="5"></textarea><br />';
$message .= '<br />';
$message .= '<input type="submit" value="Submit your review" />&nbsp;</form>';
$message .= '</body></html>';

mail($to, $subject, $message, $headers);

?>
