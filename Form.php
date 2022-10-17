<!DOCTYPE html>
<html>
<head>
	<title>	Excercise </title>
</head>
<body>

	<?php
		if(!empty($_GET)){
    	$student = [];
    	$student['School_Name'] = $_GET['school'];
    	$student['School_ID_No'] = $_GET['schoolId'];
    	$student['Student_ID_No'] = $_GET['studentId'];
    	$student['First_Name'] = $_GET['firstname'];
    	$student['Last_Name'] = $_GET['lastname'];
    	$student['Middle_Inital'] = $_GET['middleInitial'];
    	$student['Track'] = $_GET['tracks'];
		
    
    	$studentArray = [];
    	array_push($studentArray, $student);
    	$str = print_r($studentArray, true);
    	file_put_contents('student.txt', $str, FILE_APPEND);
	}
	?>
		<div>	
				<form action="" method="_GET" >	
				<div>
					<label>	
								<select name="school">	
										<option>University of the Cordilleras</option>
										<option>University of Baguio</option>
										<option selected="selected">University of the Philippines</option>
								</select>		
						</label>
				</div>

				<br>

				<div>	
					
					<label>	
							SCHOOL ID NO. <input type="text" size="20" name="schoolId">
					</label>
				</div>

				<br>

				<div>	
					<label>	
							BAGUIO CITY, PHILIPPINES
					</label>
				</div>

				<br>

				<div>	
					
					<label>	
							STUDENT ID NO.<input type="text" size="20" name="studentId">
					</label>
				</div>

				<br>

				<div>	
					
					<label>	
							LAST NAME: <input type="text" size="20" name="lastname" placeholder="Your last name ..">
					</label>
				</div>	

				<br>

				<div>	
					
					<label>	
							FIRST NAME: <input type="text" size="20" name="firstname" placeholder="Your first name ..">
					</label>
				</div>

				<br>

				<div>	
					
					<label>	
							MIDDLE INITIAL: <input type="text" size="5" name="middleInitial">
					</label>
				</div>

				<br>

				<div>	
					<h3>CITCS Tracks</h3>
					<label>	
							<input type="radio" name="tracks" value="web tech"> Web Development
							<input type="radio" name="tracks" value="net sec"> Network Security
							<input type="radio" name="tracks" value="erp"> ERP
					</label>
				</div>
				<div>	
						<input type="submit">
				</div>
				</form>
		</div>

		
</body>
</html>


