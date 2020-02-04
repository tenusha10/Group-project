<!DOCTYPE html>
<html lang="en">
	<head>

		<title>Analyst</title>
		
        <link href="Users.css" rel="stylesheet">
		
	</head>
    <div class="header">
			<a class="anchor" id="title"></a>
			<h1>Analyst Page</h1>
		</div>
        <body>

		<div class="navbar">
			<a href="#title">Home</a>
			<a href="#specialist">Specialist</a>
			<a href="#equipment_software">Equipment & software</a>
			<a href="#training">Training</a>
			<a id = "logout" href="http://team017.sci-project.lboro.ac.uk/group_project/LoginPage.php">Log Out</a>
	</div>
    
	 <div class="container">
		<a class="anchor" id="specialistStats"></a>
		<h2>Specialist Stats</h2>
		<table class="specialist_stats">
			<thead>
				<tr>
					<th>Name</th>
					<th>Average Time to solve problem</th>
					<th>Number of Problems solved </th>
					<th>Number of Active Problems </th>
						
					<!--
					<th>Assigned To</th>
					<th>Serial Number</th>
					<th>OS</th>
					<th>Software</th>
					-->
				</tr>
			</thead>
			<tbody>
				<?php 
					for($i=0;$i<10; $i=$i+1){
						echo '<tr>
							<td> John Doe</td>
							<td>#</td>
							<td>#</td>
							<td>#</td>
						</tr>';
					}
				?>
			</tbody>
		</table>
	</div>



		
		
        </body>