<?php
require_once("config.php");
?>

<html>
<body bgcolor="#00ced1">
</html>

<?php

$id = $_GET['id'];
echo "<br><br><br>";

global $mysqli;

$pollquery = $mysqli->query("select id, question from poll
where id = $id AND DATE (Now()) BETWEEN start_date AND end_date");

while($row = $pollquery->fetch_object())
{
    $polls[] = $row;
}

$choices = $mysqli->query("select id, opt1, opt2, opt3 from poll where id = $id ");

while($row1 = $choices->fetch_object())
{
    $polls1[] = $row1;
}
$pollQuestion = json_decode(json_encode($polls),true);

$pollAnswer = json_decode(json_encode($polls1),true);

?>

<div class="poll">
    <div class="poll-questions">
            <?php echo $pollQuestion[0]["question"]; ?></a>

    </div>

    <?php if(!empty($pollAnswer)): ?>

        <form action="studentpollchoice.php" method="post">
        <div class="poll-options">

            <div class="poll-option">
                <input type="radio" name="option" value="<?php print $pollAnswer[0]['opt1']; ?>" id="option1">
                <label for="option1"><?php print $pollAnswer[0]['opt1']; ?></label>
            </div>

            <div class="poll-option">
                <input type="radio" name="option" value="<?php print $pollAnswer[0]['opt2']; ?>" id="option2">
                <label for="option1"><?php print $pollAnswer[0]['opt2']; ?></label>
            </div>

            <div class="poll-option">
                <input type="radio" name="option" value="<?php print $pollAnswer[0]['opt3']; ?>" id="option3">
                <label for="option1"><?php print $pollAnswer[0]['opt3']; ?></label>
            </div>
        </div>

        <input type="Submit" value="Submit Answer">
        <input type="hidden" name="pollQuestionid" value="<?php echo $pollQuestion[0]["id"]; ?>">

    </form>
    <?php else:
        echo "There are no choices";
        endif; ?>
</div>
</body>
</html>