<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];


$email_form='formspree.io/geethabasavraju18@gmail.com';
$email_subject="new form submission";
$email_body="user name :$name.\n".
              "user name :$visitor_email.\n".
                    "user name :$message.\n".
					$
$to ="geethabasavraju18@gmail.com";

$headers="from:$email_form\r\n";
$headers.="reply-to:$email\r\n";
mail($to,$email_subject,$email_body,$email_headers);
header(location:index.html");
?>
