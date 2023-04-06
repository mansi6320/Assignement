<?php
 $link = mysqli_connect('localhost', 'root', '', 'student89-3530313543fa');


if ($link === false) {
    die("Connection failed: " . mysqli_connect_error());
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $sportsclub_id = $_POST["sportsclub_id"];
    $sql = "DELETE FROM sportsclub WHERE SportsID = $sportsclub_id";
    if (mysqli_query($link, $sql)) {
        echo "Class deleted successfully.";
    } else {
        echo "Error deleting class: " . mysqli_error($link);
    }
}

$sql = "SELECT SportsID, FirstName FROM sportsclub";
$result = mysqli_query($link, $sql);
?>
<html>
    <head>
            </head>
            <body bgcolor="pink">

<h1>Delete SportsID</h1>
<form method="post">
    <label>Select SportsID</label>
    <select ClassID="sportsclub_id" name="sportsclub_id">
        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
            <option value="<?php echo $row["SportsID"]; ?>"><?php echo $row["FirstName"]; ?></option>
        <?php } ?>
    </select>
    <br><br>
    <input type="submit" value="Delete">
</form>

<?php mysqli_close($link); ?>
</body>
        </html>