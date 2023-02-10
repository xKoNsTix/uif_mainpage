<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$subject = $_POST['subject'];
if ($name === ''){
  echo "Name cannot be empty.";
  die();
}
if ($email === ''){
  echo "Email cannot be empty.";
  die();
} else {
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
    echo "Email format invalid.";
    die();
  }
}
if ($subject === ''){
  echo "Subject cannot be empty.";
  die();
}
if ($message === ''){
  echo "Message cannot be empty.";
  die();
}
$content="From: $name \nEmail: $email \nMessage: $message";
$recipient = "uif@fh-salzburg.ac.at";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $content, $mailheader) or die("Error!");
echo "Email sent!";
?>
