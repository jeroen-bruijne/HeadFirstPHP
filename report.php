<html>

<head>
	<title>Aliens Abducted Me - Report an Abduction</title>
</head>
	
<body>
	<h2>Aliens Abducted Me - Report an Abduction</h2>


<?php
 	$first_name = $_POST['firstname'];
 	$last_name = $_POST['lastname'];
 	$how_many = $_POST['howmany'];
 	$what_they_did = $_POST['whattheydid'];
	$when_it_happened = $_POST['whenithappened'];
	$how_long = $_POST['howlong'];
	$alien_description = $_POST['aliendescription'];
	$fang_spotted = $_POST['fangspotted'];
	$email = $_POST['email'];
	$other = $_POST['other'];



	$to = 'jeroen.bruijne@hotmail.com';
	$subject = 'Aliens Abducted Me - Abduction Report';
	$msg = "$name  was abducted $when_it_happened and was gone for $how_long .\n" .
		"Number of aliens: $how_many .\n" .
		"Alien description: $alien_description .\n" .
		"What they did: $what_they_did \n".
		"Fang spotted: $fang_spotted \n" .
		"Other comments: $other";

	mail($to, $subject, $msg, 'From:' . $email);


	Echo 'Thanks for submitting the form.<br />';
	Echo 'You were abducted in ' . $when_it_happened;
	Echo ' and were gone for ' . $how_long . '<br />';
	Echo 'Number of aliens: ' . $how_many . '<br />';
	Echo 'Describe them: ' . $alien_description . '<br />';
	Echo 'The aliens did this: ' . $what_they_did . '<br />';
	Echo 'Was Fang there? ' . $fang_spotted . '<br />';
	Echo 'Other comments: ' . $other . '<br />';
	Echo 'Your email adress is ' . $email;
 ?>


</body>

</html>