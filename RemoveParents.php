<?php
 $link = mysqli_connect('localhost', 'root', '', 'student89-3530313543fa');


if ($link === false) {
    die("Connection failed: " . mysqli_connect_error());
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $parents_id = $_POST["parents_id"];
    $sql = "DELETE FROM parents WHERE ParentsID = $parents_id";
    if (mysqli_query($link, $sql)) {
        echo "Class deleted successfully.";
    } else {
        echo "Error deleting class: " . mysqli_error($link);
    }
}

$sql = "SELECT ParentsID, FirstName FROM parents";
$result = mysqli_query($link, $sql);
?>
<html>
    <head>
            </head>
            <body bgcolor="pink">

<h1>Delete ParentsID</h1>
<form method="post">
    <label>Select ParentsID</label>
    <select ClassID="parents_id" name="parents_id">
        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
            <option value="<?php echo $row["ParentsID"]; ?>"><?php echo $row["FirstName"]; ?></option>
        <?php } ?>
    </select>
    <br><br>
    <input type="submit" value="Delete">
</form>

<?php mysqli_close($link); ?>
</body>
        </html>