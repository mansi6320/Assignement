<html>
<body> 

<?php

$link = mysqli_connect("localhost", "root", "","student89-3530313543fa");

if ($link === false) {
    die("Connection failed: ");
}
?>

<h3>See all Classes</h3>
	
		<table>
		
			<tr>
			
				
			<th width="150px">SportsId<br><hr></th>
			<th width="150px">PupilId<br><hr></th>
				<th width="150px">FirstName<br><hr></th>
				<th width="150px">LastName<br><hr></th>
				<th width="250px">SportName<br><hr></th>
				<th width="150px">Age<br><hr></th>
                
			</tr>
					
			<?php
			$sql = mysqli_query($link, "SELECT  SportsID, FirstName, LastName, SportName, Age FROM sportsclub");
			while ($row = $sql->fetch_assoc()){
			echo "
			<tr>
			
				
			<th>{$row['SportsID']}</th>
			<th>{$row['PupilID']}</th>
				<th>{$row['FirstName']}</th>
				<th>{$row['LastName']}</th>
				<th>{$row['SportName']}</th>
				<th>{$row['Age']}</th>
                
			</tr>";
			}
			?>
            </table>
        </body>
        </html>

