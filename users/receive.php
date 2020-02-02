<?php
include('../includes/config.php');
$sql = "SELECT * FROM (
SELECT * FROM message ORDER BY id DESC) sub 
ORDER BY id ASC";
         
if($result = mysqli_query($con, $sql)){
    if(mysqli_num_rows($result) > 0){
	  while($row = mysqli_fetch_array($result)){	
?> 		
	<table>		
					<tr>
						<td><?php echo htmlentities($row['name']);?>:</td>
						<td><?php echo htmlentities($row['message']);?></td>	
					</tr>			
	</table>
	   <?php } ?>
<?php } ?>
<?php } ?>				
				
