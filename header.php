<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
   		"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"> 
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="./css/hackathon.css" /> 

	<?php 
		require "./includes/functions.php"; 
		
		ob_start();
	?>
</head>


		
	<!--
	Author: Silent Storm
	Filename: <?php echo $file. "\n"; ?> 
	Date: <?php echo $date. "\n"; ?> 
	Description: <?php echo $description. "\n"; ?> 
	-->
	<title>Silent Storm Hackathon - <?php echo $title; ?></title>
</head>
<body>
<div id="container">
	<div id="header">
		<!-- <img src="./images/diversity.jpeg" alt="Diversity" /> -->
		<h1>
			<?php echo $banner; ?> 
		</h1>
	</div>

	<div id="content-container">
		<div id="navigation">
			<ul>
				<li><a href="./index.php">Home</a></li>
				<li><a href="./program_decision_form.php">See What Suggestion We Have For You</a></li>
				<li><a href="./agent_list.php">Immigration Agent</a></li>
				<li><a href="./lawyer_list.php">Immigration Law Firm</a></li>
				<li><a href="./useful_links.php">Useful Links</a></li>
			</ul>
		</div>
		<div id="content">