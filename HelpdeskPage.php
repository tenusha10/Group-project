<!DOCTYPE html>
<html lang="en">
	<head>

		<title>Helpdesk Operator</title>
		
        <link href="Users.css" rel="stylesheet">
		
	</head>
	
	<body>
		<div class="navbar">
			<a href="#title">Home</a>
			<a href="#log_call">Log Call</a>
			<a href="#active_problems">Active Problems</a>
			<a href="#solved_problems">Solved Problems</a>
			<a href="#specialist">Specialists</a>
			<a href="#employees">Employees</a>
			<a id = "logout" href="http://team017.sci-project.lboro.ac.uk/group_project/LoginPage.html">Log Out</a>
		</div>
		<div class="header">
			<a class="anchor" id="title"></a>
			<h1>Helpdesk Operator Page</h1>
		</div>
        
        <div class="log_call_container">
			<a class="anchor" id="log_call"></a>
			<h2 style="text-align: center;">Log a Call</h2>
            
			<style type="text/css">
                #newDiv{
                  display: none;
                }
                #modifyDiv{
                  display: none;
                }
                #otherDiv{
                  display: none;
                }
            </style> 
            
            <div id="callDiv">
                Caller Name: <input type="text" name="caller"><br>
                Ext Num: <input type="text" name="ExtNum"><br>
    <!--        Operator: <input type="text" name="operator"><br>
                Time:<input type="text" name="time"><br> 
                ^^^-- these can be done automaticallly by the system-->

    <!--        When the operator specifies the purpose it displays the corresponing form-->
                Purpose Of Call: <select id="Purpose" onchange="showDiv()">
                <option value="">Select...</option>
                <option value="new">New Problem</option>
                <option value="old">Old Problem</option>
                <option value="other">Other</option>
                </select><br>          
            </div>

            <div id="otherDiv">
                <form action="other.php" method="post">
                    <br><br>
                    <h2>Other</h2>
        <!--        If the caller is  calling about something else (not sure where to submit this data if at all)-->
                    Notes: <textarea name="notes" rows="5" cols="30"></textarea><br><br><br><br><br>
                    <input type="submit"><br>
                </form>
            </div>

            <div id="newDiv">
                <form action="new_problem.php" method="post">
        <!--        If the operator needs to add a new problem (caller doesn't specify a previous problem ID)-->
                    <br><br>
                    <h2>New Problem: </h2><br>
                    Description: <input type="text" name="caller"><br>
                    Problem Type: <select name="problemType">
                    <option value="">Select...</option>
                    <optgroup label="Hardware">
                        <option value="printer">Printer</option>
                        <option value="printerJam">&nbsp;--Jammed</option>
                        <option value="printerRefill">&nbsp;--Needs more paper / ink</option>
                        <option value="phone">Phone</option>
                    </optgroup>
                    <optgroup label="Software">
                        <option value="renewal">Need renewal</option>
                        <option value="update">Update</option>
                    </optgroup>
                    <optgroup label="Network">
                        <option value="wifi">Wifi Down</option>
                    </optgroup>
                    </select><br>
                    Hardware Serial: <input type="text" name="serial"><br>
                    OS: <input type="text" name="OS"><br>
                    Software: <input type="text" name="software"><br>
                    Specialist: <select name="specialist">
                    <option value="">Select...</option>
                    <option value="bert">Bert</option>
                    <option value="clara">Clara</option>
		    <option value="clara">None</option>
                    </select><br>
                    Notes: <textarea name="notes" rows="5" cols="30"></textarea><br><br><br><br><br><br>
                    <input type="checkbox" name="solved" value="solved">Solved?<br>
                    <input type="submit"><br>
                </form>
            </div>

            <div id="modifyDiv">
                <form action="modify_problem.php" method="post">
        <!--        If the operator needs to modify an existing problem (caller specifies their problem ID) then that
                    corresponding problem data fills the input things and the operator can change them and resubmit it to
                    the DB-->
                    <br><br>
                    <h2>Modify Problem: </h2><br>
                    Problem Num: <input type="text" name="num"><br>
                    Description: <input type="text" name="caller"><br>
                    Problem Type: <select name="problemType">
                    <option value="">Select...</option>
                    <optgroup label="Hardware">
                        <option value="printer">Printer</option>
                        <option value="printerJam">&nbsp;--Jammed</option>
                        <option value="printerRefill">&nbsp;--Needs more paper / ink</option>
                        <option value="phone">Phone</option>
                    </optgroup>
                    <optgroup label="Software">
                        <option value="renewal">Need renewal</option>
                        <option value="update">Update</option>
                    </optgroup>
                    <optgroup label="Network">
                        <option value="wifi">Wifi Down</option>
                    </optgroup>
                    </select><br>
                    Hardware Serial: <input type="text" name="serial"><br>
                    OS: <input type="text" name="OS"><br>
                    Software: <input type="text" name="software"><br>
                    Specialist: <select name="specialist">
                    <option value="">Select...</option>
                    <option value="bert">Bert</option>
                    <option value="clara">Clara</option>
                    </select><br>
                    Notes: <textarea name="notes" rows="5" cols="30"></textarea><br><br><br><br><br><br>
                    <input type="checkbox" name="solved" value="solved">Solved?  <br>
                    <input type="submit"><br>
                </form>
            </div>

            <script>
                function showDiv() {
                  var selector = document.getElementById("Purpose");
                  var value = selector[selector.selectedIndex].value
                  var New = document.getElementById("newDiv");
                  var Modify = document.getElementById("modifyDiv");
                  var Other = document.getElementById("otherDiv");
                  if (value=="new"){
                      New.style.display = "none";
                      Modify.style.display = "none";
                      Other.style.display = "none";
                      New.style.display = "block";
                  }
                  else if (value == "old"){
                      New.style.display = "none";
                      Modify.style.display = "none";
                      Other.style.display = "none";
                      Modify.style.display = "block";
                  }
                  else if (value == "other"){
                      New.style.display = "none";
                      Modify.style.display = "none";
                      Other.style.display = "none";
                      Other.style.display = "block";
                  }
                  else if (value == ""){
                      New.style.display = "none";
                      Modify.style.display = "none";
                      Other.style.display = "none";
                  }
                  }
                
                function showDivNewSpecialist() {
                    newSpecialist.style.display = "block";
                    modifySpecialist.style.display = "none";
                }
                function showDivModifySpecialist() {
                    newSpecialist.style.display = "none";
                    modifySpecialist.style.display = "block";
                }
            </script>

		</div>   

		<div class="container">
			<a class="anchor" id="active_problems"></a>
			<h2>Active Problems</h2>
			<table class="active_problems">
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
						for($i=0;$i<=10; $i=$i+1){
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

        <div class="container">
			
			<a class="anchor" id="solved_problems"></a>
			<h2>Solved Problems</h2>
			<span class="white">Created</span><select><option>before</option><option>after</option></select><input type="date"></input>
			<input type="button" value="Search">
			<table class="active_problems">
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
						for($i=0;$i<=10; $i=$i+1){
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
		
		<div class="container">
			<a class="anchor" id="specialist"></a>
			<h2>Specialists</h2>
			<table class="specialist">

            <style type="text/css">
                #newSpecialist{
                  display: none;
                }
                #modifySpecialist{
                  display: none;
                }
            </style> 

				<thead><tr><th>Specialist Name</th><th>Speciality</th><th>Assigned Jobs</th><th>Availability</th></tr></thead>
				<tbody>
					<?php 
						for($i=0;$i<=10; $i=$i+1){
							echo '<tr>
								<td>Name'.(1+$i).'</td>
								<td>IT</td>
								<td>'.(($i+1)*7).'</td>
								<td><select id="availability">
								<option value = "available">Available</option>
								<option value = "unavailable">Unavailable</option>
								</td>
							</tr>';
						}
					?>
				</tbody>
			</table>
            <input type = "button" onclick="showDivNewSpecialist()" value="Add Specialist"></input></br>
            <input type = "button" onclick="showDivModifySpecialist()" value="Modify Specialist"> </input>
            <div id = "newSpecialist">
                <form method="post">
                    Name: <input type="text" name="name"></input><br>
                    Tel Number: <input type="text" name="tel"></input><br>
                    Speciality: <input type="text" name="speciality"></input><br>
                    Availability: <input type="text" name="availability"></input><br>
                    <input type="submit"> Submit </submit>
                </form>
            </div>
            <div id="modifySpecialist">
                <form method="post">
                    Name: <input type="text" name="name"></input><br>
                    Tel Number: <input type="text" name="tel"></input><br>
                    Speciality: <input type="text" name="speciality"></input><br>
                    Availability: <input type="text" name="availability"></input><br>
                    <input type="submit"></submit>
                </form>
            </div>
		</div>
		
		<div class="container">
		<a class="anchor" id="employees"></a>
		<h2>Employees</h2>
		<table class="employees">
		<thead><tr><th>Name</th><th>ID number</th><th>Job Title</th><th>Department</th><th>Phone Number</th></tr></thead>
		<tbody>
			<?php 
						for($i=0;$i<=10; $i=$i+1){
							echo '<tr>
								<td>Name'.(1+$i).'</td>
								<td>123</td>
								<td>Accountant</td>
								<td>Accounting</td>
								<td>123456</td>
							</tr>';
						}
					?>
		</tbody>
		</div>
	</body>
</html>
