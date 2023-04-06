<html>
<body> 

<?php


$link = mysqli_connect("localhost", "root", "","student89-3530313543fa");
if ($link === false) {
    die("Connection failed: ");
}
?>
<h3>See all Subject</h3>
	
		<table>
		
			<tr>
			<th width="250px">Subject ID<br><hr></th>
			<th width="150px">ClassID<br><hr></th>
				<th width="250px">Requirments<br><hr></th>
				<th width="150px">Duration<br><hr></th>
				<th width="250px">Level<br><hr></th>
                
			</tr>
					
			<?php
			$sql = mysqli_query($link, "SELECT `SubjectID`,'ClassID', `Requirements`, `Duration`, `Level` FROM `subject`");
			while ($row = $sql->fetch_assoc()){
				echo "
				<tr>
				<th>{$row['SubjectID']}</th>
				<th>{$row['ClassID']}</th>
					<th>{$row['Requirements']}</th>
					<th>{$row['Duration']}</th>
					<th>{$row['Level']}</th>
				</tr>";
			}
			?>
            </table>
        </body>
        </html>

