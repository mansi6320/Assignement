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

<h1>Subject:</h1>

<form method="post" action="AddSubject.php">


	<br><label>Select ClassID </label>
	<select name="ClassID">
		<?php
		$sql = mysqli_query($link, "SELECT ClassID, Capacity FROM classes");
		while ($row = $sql->fetch_assoc()){
			echo "<option value='{$row['ClassID']}'>{$row['Capacity']}</option>";
		}
		?>
	</select><br>
  <br>
              
              
               

               <br> <label>Requirements</label>
    			<input type="text" name="Requirements"><br>

                <br><label>Duration</label>
    			<input type="text" name="Duration"><br>

                <br><label>Level</label>
    			<input type="text" name="Level"><br> 

	<input type="submit" name="submit">

</form>

<?php

if (isset($_POST['submit'])) {
    $ClassID = $_POST['ClassID'];
    $Requirements = $_POST['Requirements'];
    $Duration = $_POST['Duration'];
    $Level = $_POST['Level'];

    // Establishing database connection
    $link = mysqli_connect("localhost", "root", "", "student89-3530313543fa");

    // Using prepared statements to prevent SQL injection attacks
    $stmt = mysqli_prepare($link, "INSERT INTO `subject` (`ClassID`, `Requirements`, `Duration`, `Level`) VALUES (?, ?, ?, ?)");
    mysqli_stmt_bind_param($stmt, "ssss", $ClassID, $Requirements, $Duration, $Level);

    if (mysqli_stmt_execute($stmt)) {
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