<html>
<body> 

<?php

$link = mysqli_connect("localhost", "root", "","student89-3530313543fa");

if ($link === false) {
    die("Connection failed: ");
}
?>

<h3>See all Parents</h3>
	
		<table>
		
			<tr>
			<th width="150px">Class ID<br><hr></th>
			
			<th width="250px">Teacher ID<br><hr></th>
		
				<th width="250px">Capacity<br><hr></th>
				<th width="150px">ClassName<br><hr></th>
				<!-- <th width="150px">LastName<br><hr></th>
				<th width="250px">Address<br><hr></th>
				<th width="150px">PupilID<br><hr></th>
				<th width="250px">Email<br><hr></th> -->
                
			</tr>
					
			<?php
			$sql = mysqli_query($link, "SELECT  ClassID, TeacherID, Capacity, ClassName FROM classes");
			while ($row = $sql->fetch_assoc()){
			echo "
			<tr>

			<th>{$row['ClassID']}</th>
			<th>{$row['TeacherID']}</th>
				
			
				<th>{$row['Capacity']}</th>
				<th>{$row['ClassName']}</th>
			
                
			</tr>";
			}
			?>
            </table>
        </body>
        </html>

