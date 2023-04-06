<html>
<body> 

<?php

$link = mysqli_connect("localhost", "root", "","student89-3530313543fa");

if ($link === false) {
    die("Connection failed: ");
}
?>

<h3>See all Teacher</h3>
	
		<table>
		
			<tr>
				<th width="150px">TeacherID<br><hr></th>
				<th width="150px">ClassID<br><hr></th>
				<th width="250px">FirstName<br><hr></th>
				<th width="150px">LastName<br><hr></th>
				<th width="250px">PhNumber<br><hr></th>
				<th width="150px">Address<br><hr></th>
				<th width="250px">Email<br><hr></th>
                
			</tr>
					
			<?php
			$sql = mysqli_query ($link,"SELECT `TeacherID`, `FirstName`, `LastName`, `PhNumber`, `Address`, `Email` FROM `teacher`");
			while ($row = $sql->fetch_assoc()){
			echo "
			<tr>
				<th>{$row['TeacherID']}</th>
				<th>{$row['ClassID']}</th>
				<th>{$row['FirstName']}</th>
				<th>{$row['LastName']}</th>
				<th>{$row['PhNumber']}</th>
				<th>{$row['Address']}</th>
				<th>{$row['Email']}</th>
                
			</tr>";
			}
			?>
            </table>
        </body>
        </html>

