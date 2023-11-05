<?php
	$file = "index.php";
	$date = "Sept 20, 2022";
	$description = "This is the home page of Silent Storm Hackathon";
	$title = "Silent Storm Hackathon Index Page";
	$banner = "Service for Diversity, Equity and Inclusion";

	include ("./header.php");
?>

<img src="./images/diversity.jpg" class="center-image"/>

<br/><br/>

<h2>Diversity, Equity and Inclusion means help hands. 
</h2>
<p>
	The idea of Diversity, Equity and Inclusion in workplace is not just some slogan or festivals.
	We understand that our employees from different origin often worry about work permit, permanent residency application.
	They might also want to help their families, such as spouse, kids, parents move to Canada. 
</p>

<!-- setup the table -->
<table border="0" width="100%">
	<tr><th width="34%"><li><a href="./agent_list.php">Immigration Agent</a></li></th>
		<th width="34%"><li><a href="./lawyer_list.php">Immigration Law Firm</a></li></th>
		<th width="32%"><li><a href="./useful_links.php">Useful Info</a></li></th>
	</tr>
	<tr><th><img src="./images/agent1.jpg" alt="Immigration Agent" width="90%"/></th>
		<th><img src="./images/lawyer1.jpg" alt="Immigration Lawyer" width="90%"/></th>
		<th><img src="./images/library1.jpg" alt="Immigration Info" width="90%"/></th>
	</tr>
</table>

<?php
include ("./footer.php");
?>