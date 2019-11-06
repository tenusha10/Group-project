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
            <a href="#addEmployee">Edit</a>
			<a id = "logout" href="http://team017.sci-project.lboro.ac.uk/group_project/LoginPage.html">Log Out</a>
		</div>

		<div class="header">
			<a class="anchor" id="title"></a>
			<h1>Helpdesk Operator Page</h1>
		</div>
        
         <!-- This is the main class for the log call tab of the page -->
        <div class="log_call_container">
			<a class="anchor" id="log_call"></a>
			<h2 style="text-align: center;">Log a Call</h2>
            
             <!--CSS to initialise the div by hiding the following sub divs allowing only the callDiv to be seen-->
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
            
            <!-- The initialising Div that is present when the page first appears-->
            <div id="callDiv">
                Caller Name: <input type="text" name="caller"><br>
                Ext Num: <input type="text" name="ExtNum"><br>
    

            <!--When the operator specifies the purpose it displays the corresponing form/div
            This happens due to the showDiv javascript which hides and displays the corresponding divs-->
                Purpose Of Call: <select id="Purpose" onchange="showDiv()">
                <option value="">Select...</option>
                <option value="new">New Problem</option>
                <option value="old">Old Problem</option>
                <option value="other">Other</option>
                </select>          
            </div>

            <!--otherDiv is for other general queries regarding problems-->
            <div id="otherDiv">
                <form action="other.php" method="post"><br><br>
                    <h2>Other</h2>

                    <!--If the caller is  calling about something else (not sure where to submit this data if at all)-->
                    Notes: <textarea name="notes" rows="5" cols="30"></textarea><br><br><br><br><br>

                    <!--Button to hide the div in order to clean up the appearance of the website-->
                    <input type="button" value="Close" onclick="hideDiv()">
                    <input type="submit"><br>
                </form>
            </div>
            
            <!--newDiv is for adding a new problem to the database and has a lot of input types available:-->
            <div id="newDiv">
                <form action="new_problem.php" method="post">
                    <!--If the operator needs to add a new problem (caller doesn't specify a previous problem ID)-->
                    <br><br>
                    <h2>New Problem: </h2><br>
                    Description: <textarea name="Description" rows="5" cols="30"></textarea><br><br><br><br><br><br>

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
		                <option value="none">None</option>
                    </select><br>
                    
                    Add Notes: <textarea name="notes" rows="5" cols="30"></textarea><br><br><br><br><br><br>
                    <input type="checkbox" name="solved" value="solved">Solved?<br>
                    <input type="button" value="Close" onclick="hideDiv()"> 
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
                    Description: <textarea name="Description" rows="5" cols="30"></textarea><br><br><br><br><br><br>
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
                    Existing Notes: <textarea name="notes" rows="5" cols="30" readonly></textarea><br><br><br><br><br><br>
                    Add Notes: <textarea name="notes" rows="5" cols="30"></textarea><br><br><br><br><br><br>
                    <input type="checkbox" name="solved" value="solved">Solved?  <br>

                    <input type="button" value="Close" onclick="hideDiv()">
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

                  function hideDiv(){
                    var New = document.getElementById("newDiv");
                    var Modify = document.getElementById("modifyDiv");
                    var Other = document.getElementById("otherDiv");

                    New.style.display = "none";
                    Modify.style.display = "none";
                    Other.style.display = "none";
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
            <span class="white">Search: </span><input type="text" name="search">  
			<span class="white">Created: </span><select><option>before</option><option>after</option></select><input type="date">
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
                <span class="white">Search: </span><input type="text" name="search">  
			    <input type="button" value="Search">
				<thead><tr><th>Specialist Name</th><th>Speciality</th><th>Assigned Jobs</th><th>Availability</th><th>Location</th></tr></thead>
				<tbody>
					<?php 
						for($i=0;$i<=10; $i=$i+1){
							echo '<tr>
								<td>Name'.(1+$i).'</td>
								<td>IT</td>
								<td>'.(($i+1)*7).'</td>
								<td><select id="availability">
								<option value = "available">Available</option>
								<option value = "unavailable">Unavailable</option></td>
								<td>London</td>
							</tr>';
						}
					?>
				</tbody>
			</table>
		</div>

	<div class="container">
		<a class="anchor" id="employees"></a>
		<h2>Employees</h2>
		<table class="employees">
		<thead><tr><th>Name</th><th>ID number</th><th>Job Title</th><th>Department</th><th>Phone Number</th><th>Location</th></tr></thead>
		<tbody>
			<?php 
						for($i=0;$i<=10; $i=$i+1){
							echo '<tr>
								<td>Name'.(1+$i).'</td>
								<td>123</td>
								<td>Accountant</td>
								<td>Accounting</td>
								<td>123456</td>
								<td>London</td>
							</tr>';
						}
					?>
		</tbody>
        </table>
    </div>
            
            
    <div class="log_call_container">
            <a class="anchor" id="addEmployee"></a>
			<h2>Edit</h2>
            <style type="text/css">
                #newSpecialist{
                  display: none;
                }
                #modifySpecialist{
                  display: none;
                }
                #addOperator{
                  display: none;
                }
                #newType{
                    display: none;
                }
            </style> 

            
            <select id="Add" onchange="showDivAdd()">
                <option value="">Select...</option>
                <option value="addSpecialist">New Specialist</option>
                <option value="editSpecialist">Modify Specialist</option>
                <option value="addOperator">Add Operator</option>
                <option value="addType">Add Problem Type</option>
            </select><br>     
            
            <div id = "newSpecialist">
                <form method="post">
                    <h2>Add Specialist</h2>
                    Name: <input type="text" name="name"><br>
                    Tel Number: <input type="text" name="tel"><br>
                    Speciality: <input type="text" name="speciality"><br>
                    Availability: <input type="text" name="availability"><br>
                    <input type="submit">
                </form>
            </div>

            <div id="modifySpecialist">
                <form method="post">
                    <h2>Modify Specialist</h2>
                    Name: <input type="text" name="name"><br>
                    Tel Number: <input type="text" name="tel"><br>
                    Speciality: <input type="text" name="speciality"><br>
                    Availability: <input type="text" name="availability"><br>
                    <input type="submit">
                </form>
            </div>

            <div id="addOperator">
                <form method="post">
                    <h2>Add Operator</h2>
                    Name: <input type="text" name="name"><br>
                    Tel Number: <input type="text" name="tel"><br>
                    <input type="submit">
                </form>
            </div>

            <div id = "newType">
                <form method="post">
                    <h2>Add Problem Type</h2>
<!--                Input the more general type the problem falls under then give the more refined name of the problem type and give the spcialists
                    who it applies to-->
                    General: <input type="text" name="general"><br> 
                    Refined: <input type="text" name="refined"><br>
                    Specialists: <input type="text" name="speciality"><br>
                    <input type="submit">
                </form>
            </div>

            <script>
                function showDivAdd() {
                  var selector2 = document.getElementById("Add");
                  var value2 = selector2[selector2.selectedIndex].value
                  var newSpecialist = document.getElementById("newSpecialist");
                  var modifySpecialist = document.getElementById("modifySpecialist");
                  var addOperator = document.getElementById("addOperator");
                  var addType = document.getElementById("newType");
                  if (value2=="addSpecialist"){
                      newSpecialist.style.display = "none";
                      modifySpecialist.style.display = "none";
                      addOperator.style.display = "none";
                      addType.style.display = "none";
                      newSpecialist.style.display = "block";
                  }
                  else if (value2 == "editSpecialist"){
                      newSpecialist.style.display = "none";
                      modifySpecialist.style.display = "none";
                      addOperator.style.display = "none";
                      addType.style.display = "none";
                      modifySpecialist.style.display = "block";
                  }
                  else if (value2 == "addOperator"){
                      newSpecialist.style.display = "none";
                      modifySpecialist.style.display = "none";
                      addOperator.style.display = "none";
                      addType.style.display = "none";
                      addOperator.style.display = "block";
                  }
                  else if (value2 == "addType"){
                      newSpecialist.style.display = "none";
                      modifySpecialist.style.display = "none";
                      addOperator.style.display = "none";
                      addType.style.display = "block";
                  }
                  else if (value2 == ""){
                      newSpecialist.style.display = "none";
                      modifySpecialist.style.display = "none";
                      addOperator.style.display = "none";
                      addType.style.display = "none";
                  }
                  }
            </script>
        </div>
        
        <div id="google_translate_element"></div>
        <script type="text/javascript">
            function googleTranslateElementInit() {
                new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
            }
        </script>
        <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
	</body>
</html>
