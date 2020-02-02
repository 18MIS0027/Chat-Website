<?php
session_start();
include('../includes/config.php');

$sql = "SELECT * FROM notesuser where userid='".$_SESSION['id']."' ORDER BY id ASC ";      
if($result = mysqli_query($con, $sql)){
    if(mysqli_num_rows($result) > 0){
	  while($row = mysqli_fetch_array($result)){	
?> 		
	<table>		
					<tr>
     <td><input type="checkbox" name="checkbox[]" id="checkbox[]" value="<?php echo $row["id"];?>"></td> 	
						<td><?php echo htmlentities($row['text']);?></td>	
					</tr>			
	</table>
	   <?php } ?>
<?php } ?>
<?php } ?>				
