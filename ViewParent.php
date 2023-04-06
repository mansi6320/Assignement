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
			<th width="250px">Parents Id<br><hr></th>
			<th width="150px">PupilID Id<br><hr></th>
				<th width="250px">FirstName<br><hr></th>
				<th width="250px">LastName<br><hr></th>
				<th width="150px">Address<br><hr></th>
				<th width="250px">Email<br><hr></th>
				<!-- <th width="150px">LastName<br><hr></th>
				<th width="250px">Address<br><hr></th>
				<th width="150px">PupilID<br><hr></th>
				<th width="250px">Email<br><hr></th> -->
                
			</tr>
					
			<?php
			$sql = mysqli_query($link, "SELECT ParentsID,PupilID, FirstName, LastName, Address, Email FROM Parents");
			while ($row = $sql->fetch_assoc()){
			echo "
			<tr>
				
			<th>{$row['ParentsID']}</th>
			<th>{$row['PupilID']}</th>
				
				<th>{$row['FirstName']}</th>
				<th>{$row['LastName']}</th>
				<th>{$row['Address']}</th>
				<th>{$row['Email']}</th>
			
                
			</tr>";
			}
			?>
            </table>
        </body>
        </html>

