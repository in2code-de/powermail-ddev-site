<?php
$mailtext = '<html>
<head>
    <title>HTML-E-Mail mit PHP erstellen</title>
</head>
 
<body>
 
<p>
Testmail from http://powermail.in2code.de/fileadmin/sendMail.php
</p>

<p>GET:<br />
' . print_r($_GET, 1) . '
</p>

<p>POST:<br />
' . print_r($_POST, 1) . '
</p>

</body>
</html>
';
 
$empfaenger = "alexander.kellner@in2code.de"; //Mailadresse
$absender   = "powermail@powermailt346.in2code.de";
$betreff    = "Mail-Test - HTML-E-Mail mit PHP erstellen";
$antwortan  = "test@test.de";
 
$header  = "MIME-Version: 1.0\r\n";
$header .= "Content-type: text/html; charset=iso-8859-1\r\n";
 
$header .= "From: $absender\r\n";
$header .= "Reply-To: $antwortan\r\n";
// $header .= "Cc: $cc\r\n";  // falls an CC gesendet werden soll
$header .= "X-Mailer: PHP ". phpversion();
 
mail( $empfaenger,
      $betreff,
      $mailtext,
      $header);
 
echo "Mail wurde gesendet!";
?>