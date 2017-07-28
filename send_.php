<?php
// Multiple recipients
$to = 'johny@example.com, sally@example.com'; // note the comma

// Subject
$subject = 'Birthday Reminders for August';

// Message
$message = '
<html>
<head>
  <title>TESTT</title>
</head>
<body>
  <p>Here is a test!</p>
</body>
</html>
';

// To send HTML mail, the Content-type header must be set
$headers[] = 'MIME-Version: 1.0';
$headers[] = 'Content-type: text/html; charset=iso-8859-1';

// Additional headers
$headers[] = 'To: Tristan Farkas <trille@trilleplay.net>';
$headers[] = 'From: NinCashTransfer <nincash@trilleplay.net>';

// Mail it
mail($to, $subject, $message, implode("\r\n", $headers));
?>
