<!DOCTYPE html>
	<html>
		<head>
			<title>Registration form</title>
			<?php
        		if(isset($_POST['btn']))
        		{
					$fname=$_POST['fname'];
					$lname=$_POST['lname'];
					$date=$_POST['dob'];
					$gender=$_POST['gender'];
					$adress=$_POST['adress'];
					$country=$_POST['country'];
					$conn = mysqli_connect("localhost","root","");
					if(!$conn){
						die("Connection failed".mysqli_error());
					}
					
					$db=mysqli_select_db($conn,"registration");
					if(!$db){
						die("Db failed".mysqli_error());
					}
					
					
					$in="INSERT INTO regtable(fname,lname,dob,gender,adress,country) VALUES('$fname','$lname','$date','$gender','$adress','$country')";	
					$r=mysqli_query($conn,"$in");
					if(!$r){
						die("Insert failed".mysqli_error());
					}
					
					$q="SELECT * FROM regtable";
					$t=mysqli_query($conn,"$q");
					if(!$r){
						die("Insert failed".mysqli_error());
					}
					else{
						echo "<table>
						<tr>
						<th>first name</th>
						<th>last name</th>
						<th>date of birth</th>
						<th>gender</th>
						<th>adress</th>
						<th>country</th>
						</tr>";
						while($row=mysqli_fetch_assoc($t)){
							echo"<tr><td>".$row['fname']."</td><td>".$row['lname']."</td><td>".$row['dob']."</td><td>".$row['gender']."</td><td>".$row['adress']."</td></td>".$row['country']."</td></tr>";
						}
						echo "</table>";
					}
					
				}        		?>
		</head>
		<body>
			<h1 align="center">REGISTRATION FORM</h1>
			<form method="post"><center>
				<table>
					<tr>
						<td>FIRST NAME:</td>
						<td>
							<input type="text" name="fname" id="fname">
						</td>
					</tr>
					<tr>
						<td>LAST NAME:</td>
						<td>
							<input type="text" name="lname" id="lname">
						</td>
					</tr>
					<tr>
						<td>DATE OF BIRTH:</td>
						<td>
							<input type="date" name="dob" id="dob">
						</td>
					</tr>
					<tr>
						<td>GENDER:<td>
							<input type="radio" name="gender" id="male">
							<label for="male">MALE</label>
							<input type="radio" name="gender" id="female">
							<label for="female">FEMALE</label>
					</tr>
					<tr>		
						<td>ADDRESS</td>
						<td>
							<textarea rows="5" cols="25" name="adress" id="adress"></textarea>
						</td>
					</tr>
					<tr>
						<td>COUNTRY</td>
						<td>
							<select name="country" id="country">
							<option value="sel">SELECT THE COUNTRY</option>
							<option value="india">INDIA</option>
							<option value="srilanka">SRILANKA</option>
							<option value="america">AMERICA</option>
							<option value="australia">AUSTRALIA</option>
						</td>
					</tr>
					<tr>
						<td>SUBJECTS</td>
					</tr>
					<tr>
						<td >
							<input type="checkbox" id="java" name="java" value="java">
							<label for="java"> JAVA</label><br>
						</td>
						<td >
							<input type="checkbox" id="python" name="python" value="python">
							<label for="python"> PYTHON</label><br>
						</td>
					</tr>
					<tr>
						<td >
							<input type="checkbox" id="dbms" name="dbms" value="dbms">
							<label for="dbms"> DBMS</label><br>
						</td>
						<td >
							<input type="checkbox" id="c" name="c" value="c">
							<label for="c"> C</label><br>
						</td>
					</tr>
					<tr>
						<td >
							<input type="checkbox" id="cpp" name="cpp" value="cpp">
							<label for="cpp"> CPP</label><br>
						</td>
					</tr>
					<tr>
						<td>UPLOAD QUALIFICATION</td>
						<td>
							<input type="file" name="upload" id="upload"> 
						</td>
					<tr>
					</tr>
					</tr>
					<tr>
						<td>
						<input type="submit" name="btn" value="Submit">
						</td>
						<td>
							<button type="reset">RESET</button>
						</td>
					</tr>
				</table></center>
			</form>
		</body>
	</html>