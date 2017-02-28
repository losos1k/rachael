<?php
// check for form submission - if it doesn’t exist then send back to contact form
if (!isset($_POST["save"]) || $_POST["save"] != "contact") {
    header("Location: contact.html"); exit;
}
// get the posted data
$name = $_POST["contact_name"];
$email_address = $_POST["contact_email"];
$phone_number = $_POST["phone_number"];
$radio = $_POST["radio"];
$hear = $_POST["contact_hear"];
$message = $_POST["contact_message"];
// write the email content
$email_content = "Name: $name\n";
$email_content .= "Email address: $email_address\n";
$email_content .= "Phone number: $phone_number\n";
$email_content .= "Hear about us: $hear\n";
if($radio=='ph') {
$email_content .= "Preferred phone call.\n";
} else {
$email_content .= "Preferred email message.\n";
}
$email_content .= "Message:\n\n$message";
// send the email
mail ("inquiries@rachaelwatsonphotography.com", "New Contact Message", $email_content);
// send the user back to the form
$newURL = "tnx.html";
header('Location: '.$newURL); exit;
?>