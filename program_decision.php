
<?php

	$file = "program_decision.php";
	$date = "Sept 24, 2022";
	$description = "This is the function page for possible programs";
	$title = "Silent Storm's Program Decision Page";
	$banner = "Program Decision Function";

	$val1 = "";
	$val2 = "";
include ("./header.php");
?>

	<h2>This is for suggestion purpose only.</h2>

<?php
	if (($_POST['val1'] == "") || ($_POST['val2'] == "") || ($_POST['calc'] =="")) {
		header("Location: program_decision_form.php");
		exit;
	}	
	if (($_POST['calc'] == "pr") && ($_POST['val1'] >= 4)) {
		$result = "You might need to renew your PR status soon";
	} 
	else if (($_POST['calc'] == "worker") && ($_POST['val1'] >= 1) && ($_POST['val2'] >= 1)) {
		$result = "You might qualified for CEC program";
	} 
	else if (($_POST['calc'] == "student") && ($_POST['val1'] >= 2) && ($_POST['val2'] >= 1)) {
		$result = "You might qualified for PNP graduate stream program";
	} 
	else {
		$result = "Sorry, looks like nothing much you can do for now.";
	}
?>

<p>The suggestion is: <?php echo "$result"; ?></p>

	<a href="./index.php">Click here to go back to the main page</a>

<?php
include ("./footer.php");
?>