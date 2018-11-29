<?php
  $serverName = $_SERVER['SERVER_NAME'];

	if ($_POST) {
		// get form data
    $name = trim($_POST['name']);
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $message = trim($_POST['message']);
		
		// Build email
    $subject = "Nowa wiadomość od $name";

    // Build the email content.
    $email_content = "<strong>Imię</strong>: $name<br>";
    $email_content .= "<strong>Email</strong>: $email<br><br>";
    $email_content .= "<strong>Wiadomość</strong>:<br>$message<br>";

    $my_email = "nedvedek111@gmail.com";

    if ($serverName !== 'localhost') {
      $my_email = "stylist@smorawska.pl";
    }

    $headers    = array(
	   "From: {$email}",
		"MIME-Version: 1.0",
		"Content-Type: text/html; charset=utf-8"
    );

  if ( empty($name) OR empty($message) OR !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    // Set a 400 (bad request) response code and exit.
    http_response_code(400);
    echo "Oops! There was a problem with your submission. Please complete the form and try again.";
    exit;
  }

// Send the email.
    // mail (to, subject, content)
    if ( mail($my_email, $subject, $email_content, implode("\r\n", $headers)) ) {
    // Set a 200 (okay) response code.
    http_response_code(200);
    echo "Thank You! Your message has been sent.";
    } else {
    // Set a 500 (internal server error) response code.
    http_response_code(500);
    echo "Oops! Something went wrong and we couldn't send your message.";
    }
   
	} else {
		// Not a POST request, set a 403 (forbidden) response code.
    http_response_code(403);
    echo "There was a problem with your submission, please try again.";
}

?>