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
					<th>Number</th>
					<th>Problem Description</th>
					<th>Created</th>
					<th>Logged By</th>
					<th>Reported By</th>
					<th>See More</th>
						
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
							<td>'.(1+$i).'</td>
							<td>Example</td>
							<td>01/01/2020</td>
							<td>User1</td>
							<td>User2</td>
							<td><button>See More</button></td>
						</tr>';
					}
				?>
			</tbody>
		</table>
	</div>



		
		
        </body>