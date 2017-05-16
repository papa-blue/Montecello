<!DOCTYPE html>
<html>
	<head>
		<title>booking</title>
		
		<script type="text/javascript" src="lib/jq/jquery.js"></script>
		<script type="text/javascript" src="lib/jq/jqueryui.js"></script>
		<script type="text/javascript" src="lib/jq/datepicker.i18n.js"></script>
		<link rel="stylsheet" href="lib/jq/datepicker.css" type="text/css"/>
	</head>
	
	<body>
	
		<div>
			<script>
			$(document).ready(function(){
				$.datepicker.setDefaults($.datepicker.regional["en-GB"]);
				$("#jqDate").datepicker($.datepicker.regional["en-GB"]);
				$("#jqDate").datepicker("option", "dateFormat","dd-mm-yy");
				$("#jqDate").datepicker({onSelect: function(){
					document.getElementById('dateForm').submit();
				document.getElementById('tt').innerHTML = "oninput listerner works";
				}});
				
			});
			</script>
			
			<script type="text/javascript">
			
			function fetchData()
			{
				document.getElementById('dateForm').submit();
				document.getElementById('tt').innerHTML = "oninput listerner works";
			}
			
			function doSomething()
			{
				document.getElementById('dateForm').submit();
				document.getElementById('tt').innerHTML = "oninput listerner works";
				document.getElementById('tot').innerHTML = "$_POST['date']";
				
			
			}
			</script>
		</div>
		
		<div id="dateDiv">
			<form action="" id="dateForm" method="POST">
				<input type="text" name="date" id="jqDate" size="8">
			</form>
		</div>
		</br>
		</br>
		</br>
		<div>
			<p id="tt"> 
				change me
			</p>
			
			<p id="tot"> 
				date here
			</p>

		<div>
		</br>
		</br>
		</br>
		
		<input type="text" name="tex" id="tex" size="8" oninput="doSomething()">
	
	</body>
	

</html>