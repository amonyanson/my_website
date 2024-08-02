<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $to = "ansonosembo@gmail.com"; // your Gmail account
  $subject = "Contact Form Submission";
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  $headers = "From: $email\r\n";
  $headers .= "Reply-To: $email\r\n";
  $headers .= "MIME-Version: 1.0\r\n";
  $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

  $body = "<html><body>";
  $body .= "<h2>Contact Form Submission</h2>";
  $body .= "<p>Name: $name</p>";
  $body .= "<p>Email: $email</p>";
  $body .= "<p>Message: $message</p>";
  $body .= "</body></html>";

  mail($to, $subject, $body, $headers);

  header("Location: contact.html?sent=true");
  exit;
}
else {
  //Handle the other request methods (e.g., GET, PUT, DELETE)
  http_response_code(405);
  echo 'Method Not Allowed'
}
?>