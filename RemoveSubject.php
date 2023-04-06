<?php
 $link = mysqli_connect('localhost', 'root', '', 'student89-3530313543fa');


if ($link === false) {
    die("Connection failed: " . mysqli_connect_error());
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $subject_id = $_POST["subject_id"];
    $sql = "DELETE FROM subject WHERE SubjectID = $subject_id";
    if (mysqli_query($link, $sql)) {
        echo "Class deleted successfully.";
    } else {
        echo "Error deleting class: " . mysqli_error($link);
    }
}

$sql = "SELECT SubjectID, Requirements FROM subject";
$result = mysqli_query($link, $sql);
?>
<html>
    <head>
            </head>
            <body bgcolor="pink">

<h1>Delete SubjectID</h1>
<form method="post">
    <label>Select SubjectID</label>
    <select ClassID="subject_id" name="subject_id">
        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
            <option value="<?php echo $row["SubjectID"]; ?>"><?php echo $row["Requirements"]; ?></option>
        <?php } ?>
    </select>
    <br><br>
    <input type="submit" value="Delete">
</form>

<?php mysqli_close($link); ?>
</body>
        </html>