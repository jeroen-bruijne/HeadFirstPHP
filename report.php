<html>

<head>
	<title>Aliens Abducted Me - Report an Abduction</title>
</head>
	
<body>
	<h2>Aliens Abducted Me - Report an Abduction</h2>


<?php

	
	$dbc = mysqli_connect('localhost', 'root', '', 'aliendatabase')
		or die('Error connecting to MySQL server.');

 	$first_name = $_POST['firstname'];
 	$last_name = $_POST['lastname'];
 	$email = $_POST['email'];
 	$when_it_happened = $_POST['whenithappened'];
 	$how_long = $_POST['howlong'];
 	$how_many = $_POST['howmany'];
 	$alien_description = $_POST['aliendescription'];
 	$what_they_did = $_POST['whattheydid'];
	$fang_spotted = $_POST['fangspotted'];
	$other = $_POST['other'];

	$query = "INSERT INTO aliens_abduction (first_name, last_name, " .
		"when_it_happened, how_long, how_many, alien_description, " .
		"what_they_did, fang_spotted, other, email) " .
		"VALUES ('$first_name', '$last_name', '$when_it_happened', " .
		"'$how_long', '$how_many', '$alien_description', " .
		"'$what_they_did', '$fang_spotted', '$other', '$email')";


	$result = mysqli_query($dbc, $query)
		or die('Error querying database failed m8.');

	mysqli_close($dbc);
	

	// $to = 'jeroen.bruijne@hotmail.com';
	// $subject = 'Aliens Abducted Me - Abduction Report';
	// $msg = "$name  was abducted $when_it_happened and was gone for $how_long .\n" .
	// 	"Number of aliens: $how_many .\n" .
	// 	"Alien description: $alien_description .\n" .
	// 	"What they did: $what_they_did \n".
	// 	"Fang spotted: $fang_spotted \n" .
	// 	"Other comments: $other";

	// mail($to, $subject, $msg, 'From:' . $email);


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