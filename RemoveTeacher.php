<?php
 $link = mysqli_connect('localhost', 'root', '', 'student89-3530313543fa');


if ($link === false) {
    die("Connection failed: " . mysqli_connect_error());
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $teacher_id = $_POST["teacher_id"];
    $sql = "DELETE FROM teacher WHERE TeacherID = $teacher_id";
    if (mysqli_query($link, $sql)) {
        echo "Class deleted successfully.";
    } else {
        echo "Error deleting class: " . mysqli_error($link);
    }
}

$sql = "SELECT TeacherID, FirstName FROM teacher";
$result = mysqli_query($link, $sql);
?>
<html>
    <head>
            </head>
            <body bgcolor="pink">

<h1>Delete TeacherID</h1>
<form method="post">
    <label>Select TeacherID</label>
    <select ClassID="teacher_id" name="teacher_id">
        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
            <option value="<?php echo $row["TeacherID"]; ?>"><?php echo $row["FirstName"]; ?></option>
        <?php } ?>
    </select>
    <br><br>
    <input type="submit" value="Delete">
</form>

<?php mysqli_close($link); ?>
</body>
        </html>