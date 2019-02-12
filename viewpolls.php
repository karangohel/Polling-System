<?php

require_once("config.php");

global $mysqli;
$pollsquery = $mysqli->query("select id, question from poll
where DATE (Now()) BETWEEN start_date AND end_date");

while($row = $pollsquery->fetch_object())
{
$polls[] = $row;
}
echo "<br><br>Please select a poll<br><br><br><br>";


?>

<html>
<body bgcolor="#00ced1">
<?php if(!empty($polls)): ?>
    <ul>
       <?php foreach ($polls as $poll) {?>
           <li><a href="student-takepoll.php?id=<?php echo $poll->id ?>"><?php echo $poll->question; ?></a> </li>
        <?php }?>

    </ul>
<?php else: ?>
    <p>No Polls Available</p>
<?php endif; ?>

</body>
</html>
