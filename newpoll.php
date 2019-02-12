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

echo "<br><br>Poll Created!!";

$question = $_REQUEST['question'];
$opt1 = $_REQUEST['opt1'];
$opt2 = $_REQUEST['opt2'];
$opt3 = $_REQUEST['opt3'];
$start_date = $_REQUEST['start_date'];
$end_date = $_REQUEST['end_date'];

$newpoll = createnewpoll($question,$opt1,$opt2,$opt3, $start_date, $end_date);



?>

<html>
<li id="paletteItem:_1806469_1" class="clearfix ">
 <a href="index.php">
    <span title="Home">Home Page</span>
    </a>
</li>
</html>
