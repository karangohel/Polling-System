<?php
require_once("config.php");
echo "<br><br>";
?>

<html>
<body bgcolor="#00ced1">
</html>

<a href ="viewpollresults.php">View Past Poll Results</a>
<form name="createNewPoll" action="newpoll.php" method="Get">

    <table class="table-style-seven">
        <thead>

        <tr>
            <br>
            <th>Question: </th>
            <td><input type="text" name="question" value=""></td>
        </tr>

        <tr>
            <th><br><br>Option 1: </th>
            <td><br><br><input type="text" name="opt1" value=""></td><br><br>
        </tr>

        <tr>
            <th><br><br>Option 2:</th>
            <td><br><br><input type="text" name="opt2" value=""></td><br><br>
        </tr>

        <tr>
            <th><br><br>Option 3:</th>
            <td><br><br><input type="text" name="opt3" value=""></td>
        </tr>

        <tr>
            <th><br><br>Start Date</th>
            <td><br><br><input type="date" name="start_date" value=""></td>
        </tr>


        <tr>
            <th><br><br>End Date</th>
            <td><br><br><input type="date" name="end_date" value=""></td>
        </tr>

        <tr>
            <th><br><br>           </th>
            <td><br><br><input type="submit" value="Create Poll"></td>
        </tr>

        </thead>
    </table>
</form>

