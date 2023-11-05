
<?php
	
	$file = "program_decision_form.php";
	$date = "Sept 24, 2022";
	$description = "This is the form for possible programs";
	$title = "Silent Storm's Program Form Page";
	$banner = "Program Decision Form";

include ("./header.php");
?>
	
	<h2>This page is to give advice for possible programs.</h2>  

	<FORM METHOD="post" ACTION="program_decision.php">
	<p>Years you have been in Canada: <INPUT TYPE="text" NAME="val1" SIZE=10></p>
	<p>Years you have been working in Canada: <INPUT TYPE="text" NAME="val2" SIZE=10></p>
	
	<p>Your current status:<br>
	<INPUT TYPE="radio" NAME="calc" VALUE="pr"> Permanent Resident<br>
	<INPUT TYPE="radio" NAME="calc" VALUE="worker"> Temporary Foreign Worker<br>
	<INPUT TYPE="radio" NAME="calc" VALUE="student"> International Student<br>
			
	<p><INPUT TYPE="submit" NAME="submit" VALUE="Enter"></p>

	<a href="./index.php">Click here to go back to the main page</a>

<?php
include ("./footer.php");
?>