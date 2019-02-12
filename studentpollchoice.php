<?php
require_once("config.php");
?>
<html>
<body bgcolor="#00ced1">
<li id="paletteItem:_1806469_1" class="clearfix ">
    <a href="index.php">
        <span title="Home">Home Page</span>
    </a>
</li>
</html>

<?php


//print_r($_REQUEST);
echo "<br><br><br><br>Feedback Recorded!!";
$pollQuestion = $_REQUEST['pollQuestionid'];
$choice = $_REQUEST['option'];

global $mysqli, $db_table_prefix;
$query = "INSERT INTO " . $db_table_prefix . "poll_answers SET 
              poll_id = '".$pollQuestion."',
              opt = '".$choice."'";
$stmt = $mysqli->query($query);
$stmt->execute();
$stmt->close();

?>
