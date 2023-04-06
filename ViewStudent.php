<html>
<body> 

<?php


$link = mysqli_connect("localhost", "root", "","student89-3530313543fa");
if ($link === false) {
    die("Connection failed: ");
}
?>
<h3>See all Students</h3>
	
		<table>
		
			<tr>
				
			
				<th width="150px">Pupil Id<br><hr></th>
				<th width="150px">Subject Id<br><hr></th>
				<th width="250px">FirstName<br><hr></th>
				<th width="150px">LastName<br><hr></th>
				<th width="250px">Class<br><hr></th>
				<th width="250px">MedicalINF<br><hr></th>
				
			</tr>
				
			<?php

			$sql = mysqli_query($link, "SELECT PupilID, FirstName, LastName, Class, MedicalINF FROM Students");
			while ($row = $sql->fetch_assoc()){
			echo "
			<tr>
			    <th>{$row['PupilID']}</th>
				<th>{$row['SubjectId']}</th>
				<th>{$row['FirstName']}</th>
				<th>{$row['LastName']}</th>
				<th>{$row['Class']}</th>
				<th>{$row['MedicalINF']}</th>
                
			</tr>";
			}
			?>
            </table>
        </body>
        </html>


