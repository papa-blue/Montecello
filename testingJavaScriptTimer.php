<?php

$id = 2;
$date= "2017/03/23";
?>
<script type="text/javascript">
			var ref_int = setTimeout(changeStatus, 60*1000);
			
			function changeStatus(){
				
				'<?php
					//$tId = "<script>document.write(userId) </script>";
					//$tDate = "<script>document.write(bookingDate) </script>";
					
					//echo "This is from PHP code, if you didn't know now you know";
					//echo $tDate;
				
				?>'
				
				document.write("This is life");
			}
</script>
<?php
?>