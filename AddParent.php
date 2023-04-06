<html>

	<head><title>School Management System</title>

	<meta charset="UTF-8">
    <title>Add Parent</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



</head>
<style>
      body {
        font-family: Arial, Helvetica, sans-serif;
      }

      .navbar {
        overflow: hidden;
        background-color: #630565;
      }

      .navbar a {
        float: left;
        font-size: 16px;
        color: white;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
      }

      .dropdown {
        float: left;
        overflow: hidden;
      }

      .dropdown .dropbtn {
        font-size: 16px;
        border: none;
        outline: none;
        color: white;
        padding: 14px 16px;
        background-color: inherit;
        font-family: inherit;
        margin: 0;
      }

      .navbar a:hover, .dropdown:hover .dropbtn {
        background-color: rgb(180, 27, 139);
      }

      .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(255, 255, 255, 0.2);
        z-index: 1;
      }

      .dropdown-content a {
        float: none;
        color: rgb(0, 0, 0);
        padding: 12px 16px;
        text-decoration: none;
        display: block;
        text-align: left;
      }

      .dropdown-content a:hover {
        background-color: #ecb3e0;
      }

      .dropdown:hover .dropdown-content {
        display: block;
      }
      </style>

	<body bgcolor="pink">



	<div class="navbar">
        <a href="index.html">Home</a>
        <div class="dropdown">
            <button class="dropbtn">View
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="ViewStudent.php">Student</a>
                <a href="ViewParent.php">Parent</a>
                <a href="ViewTeacher.php">Teacher</a>
                <a href="ViewClass.php">Class</a>
                <a href="ViewSubject.php">Subject</a>
                <a href="ViewSportclub.php">Sport</a>
               
            </div>
        </div>
        <div class="dropdown">
            <button class="dropbtn">Add
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="AddStudent.php">Student</a>
                <a href="AddParent.php">Parent</a>
                <a href="AddTeacher.php">Teacher</a>
                <a href="AddClass.php">Class</a>
                <a href="AddSubject.php">Subject</a>
                <a href="AddSportclub.php">Sport</a>
               
            </div>
        </div>
        <div class="dropdown">
              <button class="dropbtn">Remove
                  <i class="fa fa-caret-down"></i>
              </button>
              <div class="dropdown-content">
                  <a href="RemoveSportsclub.php">Student</a>
                  <a href="RemoveParents.php">Parent</a>
                  <a href="RemoveTeacher.php">Teacher</a>
                  <a href="RemoveClasses.php">Class</a>
                  <a href="RemoveSubject.php">Subject</a>
                  <a href="RemoveSportsclub.php">Sport</a>

              </div>
          </div>
        <a href="Contact.html">Contact Us</a>
    </div>
		
		<?php

$link = mysqli_connect("localhost", "root", "","student89-3530313543fa");
// Check connection
if ($link === false) {
	die("Connection failed: " . mysqli_connect_error());
}
?>

<h1>Parent:</h1>

<form method="post" action="AddParent.php">


	<br><label>Select PupilID </label>
	<select name="PupilID">
		<?php
		$sql = mysqli_query($link, "SELECT PupilID, FirstName FROM students");
		while ($row = $sql->fetch_assoc()){
			echo "<option value='{$row['PupilID']}'>{$row['FirstName']}</option>";
		}
		?>
	</select><br>

	<br> <label>First Name</label>
    			<input type="text" name="FirstName"><br>

                <br><label>Last Name</label>
    			<input type="text" name="LastName"><br>

                <br><label>Address</label>
    			<input type="text" name="Address"><br> 

               
                <br><label>Email ID</label>
    			<input type="text" name="Email"><br> 

	<input type="submit" name="submit">

</form>

<?php

if (isset($_POST['submit'])) {
   
    $PupilID = $_REQUEST['PupilID'];
    $FirstName = $_REQUEST['FirstName'];
    $LastName = $_REQUEST['LastName'];
    $Address = $_REQUEST['Address'];
    $Email = $_REQUEST['Email'];
  
    // Establishing database connection
    $link = mysqli_connect("localhost", "root", "","student89-3530313543fa");

	$sql = "INSERT INTO `parents` (PupilID, `FirstName`, `LastName`, `Address`, `Email`) VALUES ('$PupilID','$FirstName','$LastName','$Address','$Email')";
	if (mysqli_query($link, $sql)) {
	  echo "New record created successfully";
	} else {
	  echo "Error adding record: " . mysqli_error($link);
	}

	// Closing database connection
	mysqli_close($link);
}





?>

	
	</body>

</html>