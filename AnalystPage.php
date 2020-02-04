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
	<div class="container">
		<a class="anchor" id="hardwareStats"></a>
		<h2>Hardware Stats</h2>
		<table class="hardware_stats">
			<thead>
				<tr>
					<th>Serial number</th>
					<th>Type</th>
					<th>Make</th>
					<th>Number of Problems </th>
						
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
							<td>#</td>
							<td>..</td>
							<td>..</td>
							<td>#</td>
						</tr>';
					}
				?>
			</tbody>
		</table>
		<h2>Software Stats </h2>
		<table class="software_stats">
			<thead>
				<tr>
					<th>Software Name</th>
					<th>Version</th>
					<th>Number of Problems </th>
						
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
							<td>#</td>
							<td>..</td>
							<td>..</td>
						</tr>';
					}
				?>
			</tbody>
		</table>
	</div>

	<div class="container">
		<a class="anchor" id="trainingStats"></a>
		<h2>Staff Training </h2>
		<table class="training_stats">
			<thead>
				<tr>
					<th>Problem Type</th>
					<th>Average Time to solve</th>
					<th>Number of Occurances </th>
						
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
							<td> printer broken</td>
							<td>#</td>
							<td>#</td>
						</tr>';
					}
				?>
			</tbody>
		</table>
	</div>


		
		
        </body>