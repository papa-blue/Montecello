<html>
	<head>
		<title>New User</title>
		<script src= "angular.min.js"></script>
		<script src= "boot/js/bootstrap.min.js"></script>
		<script src= "boot/js/bootstrap.js"></script>
		<script src= "boot/css/bootstrap.min.css"></script>
	</head>
	
	<body>
	
	<div>
		
		<label style="float: right;"><?php //displaying the name and surname of the logged-in user using the session variable
		session_start(); echo "Welcome: " .$_SESSION['name']. " ". $_SESSION['surname']. '</br></br></br>';
		?>
		</label>
	</div>
	
	
	<div class="container">
		<form action="residenceProcessing.php" method="POST">
			<label>Firstname: </label> </br>
			<input type="text" name="firstname"/>
			</br></br>
			
			<label>Surname: </label> </br>
			<input type="text" name="surname"/>
			</br></br>
			
			<label>ID Number: </label> </br>
			<input type="text" name="idno"/>
			</br></br>
			
			<label>Mobile: </label> </br>
			<input type="text" name="mobile"/>
			</br></br>
			
			<label>Residential Type </label> </br>
			<select name="type">
			  <option value="owner">owner</option>
			  <option value="tenant">tenant</option>
			</select>
			</br></br>
			
			<?php
				require_once('iconnect.php');
				
				$query = "SELECT * from stands";
				
				$results = @mysqli_query($dbc, $query);
				
				echo '<label>Stand No: </label> </br>';
				echo '<select name="stand">';
				
				while ($row = mysqli_fetch_array($results)){
					
					echo '<option value = "' . $row['stand_no'] . '">' . $row['stand_no'] . '</option>';
				}
				
				echo '</select>';
				echo '</br></br>';
			?>
			
			<label>E-mail: </label></br>
			<input type="text" name="email"/>
			</br></br>
		
			<label>Username: </label></br>
			<input type="text" name="username"/>
			</br></br>
			<label>Password: </label></br>
			<input type="password" name="password"/>
			</br>
			
			</br>
			<input type="submit" name="submit" value="Save"/>
		
		</form>
		
		<div style="position:absolute; left:348px; top:573px;width:309px;height:74p;">
		<?php
		
			if(isset($_POST['userExistErrorMsg']))
			{
				echo $_POST['userExistErrorMsg'];
			}
			else if(isset($_POST['insertionError'])){
				echo $_POST['insertionError'];
			}
			else if(isset($_POST['success']))
			{
				//$_SESSION['registration'] = $_SESSION['registration'];
				//echo $_SESSION['registration'];
				
				echo $_POST['success'];
			}
		
		?>
		
		
		</div>
		
	</div>
	
	</body>

</html>