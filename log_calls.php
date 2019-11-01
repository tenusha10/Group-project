<html>
	<head>

		<title>Log Call</title>
		
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
		
	</head>
	
	<body>
		<h1>Log a Call</h1>
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
    <!--        If the caller is  calling about something else (not sure where to submit this data if at all)-->
                Notes: <input type="text" name="notes"><br>
                <input type="submit"><br>
            </form>
        </div>
        
        <div id="newDiv">
            <form action="new_problem.php" method="post">
    <!--        If the operator needs to add a new problem (caller doesn't specify a previous problem ID)-->
                <br><br>
                New Problem: <br>
                Description: <input type="text" name="caller"><br>
                Problem Type: <select name="problemType">
                <option value="">Select...</option>
                <option value="hardware">Hardware</option>
                <option value="software">Software</option>
                <option value="network">Network</option>
                </select><br>
                Hardware Serial: <input type="text" name="serial"><br>
                OS: <input type="text" name="OS"><br>
                Software: <input type="text" name="software"><br>
                Specialist: <select name="specialist">
                <option value="">Select...</option>
                <option value="bert">Bert</option>
                <option value="clara">Clara</option>
                </select><br>
                Notes: <input type="text" name="notes"><br>
                <input type="submit"><br>
            </form>
        </div>
            
        <div id="modifyDiv">
            <form action="modify_problem.php" method="post">
    <!--        If the operator needs to modify an existing problem (caller specifies their problem ID) then that
                corresponding problem data fills the input things and the operator can change them and resubmit it to
                the DB-->
                <br><br>
                Modify Problem: <br>
                Problem Num: <input type="text" name="num"><br>
                Description: <input type="text" name="caller"><br>
                Problem Type: <select name="problemType">
                <option value="">Select...</option>
                <option value="hardware">Hardware</option>
                <option value="software">Software</option>
                <option value="network">Network</option>
                </select><br>
                Hardware Serial: <input type="text" name="serial"><br>
                OS: <input type="text" name="OS"><br>
                Software: <input type="text" name="software"><br>
                Specialist: <select name="specialist">
                <option value="">Select...</option>
                <option value="bert">Bert</option>
                <option value="clara">Clara</option>
                </select><br>
                Notes: <input type="text" name="notes"><br>
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
        </script>
	</body>
</html>