<?php
 $link = mysqli_connect('localhost', 'root', '', 'student89-3530313543fa');


if ($link === false) {
    die("Connection failed: " . mysqli_connect_error());
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $pupil_id = $_POST["pupil_id"];
    $sql = "DELETE FROM students WHERE PupilID = $pupil_id";
    if (mysqli_query($link, $sql)) {
        echo "Class deleted successfully.";
    } else {
        echo "Error deleting class: " . mysqli_error($link);
    }
}

$sql = "SELECT PupilID, FirstName FROM students";
$result = mysqli_query($link, $sql);
?>
<html>
    <head>
            </head>
            <body bgcolor="pink">

<h1>Delete Pupils</h1>
<form method="post">
    <label>Select Pupils</label>
    <select ClassID="pupil_id" name="pupil_id">
        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
            <option value="<?php echo $row["PupilID"]; ?>"><?php echo $row["FirstName"]; ?></option>
        <?php } ?>
    </select>
    <br><br>
    <input type="submit" value="Delete">
</form>

<?php mysqli_close($link); ?>
</body>
        </html>