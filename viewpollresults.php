<?php
require_once("config.php");
?>

<html>
<body bgcolor="#00ced1">
</html>

<?php

global $mysqli;


$query = "select p.opt, q.question FROM poll_answers p JOIN poll q ON p.poll_id = q.id";

$stmt = $mysqli->query($query);

while($row = $stmt->fetch_object())
{
    $polls[] = $row;
}
$pollQuestion = json_decode(json_encode($polls),true);

echo "<br><br>";
?>

<html>

<style type="text/css">
    table.table-style-three {
        font-family: verdana, arial, sans-serif;
        font-size: 11px;
        color: #333333;
        border-width: 1px;
        border-color: #3A3A3A;
        border-collapse: collapse;
    }

    table.table-style-three th {
        border-width: 1px;
        padding: 8px;
        border-style: solid;
        border-color: #FFA6A6;
        background-color: #D56A6A;
        color: #ffffff;
    }

    table.table-style-three a {
        color: #ffffff;
        text-decoration: none;
    }

    table.table-style-three tr:hover td {
        cursor: pointer;
    }

    table.table-style-three tr:nth-child(even) td {
        background-color: #F7CFCF;
    }

    table.table-style-three td {
        border-width: 1px;
        padding: 8px;
        border-style: solid;
        border-color: #FFA6A6;
        background-color: #ffffff;
    }
    body{
        background-image: url("<?php echo $backgroundimage;?>");
        background-attachment: fixed ;
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
    }
</style>

<table class = "table-style-three">
    <thead>
    <tr>
        <th>
            Poll Question
        </th>
        <th>
            Results
        </th>
    </tr>
    </thead>

    <tbody>
    <?php foreach ($pollQuestion as $poll) {?>

    <tr>
        <td>
            <?=$poll['question'];?>
        </td>
        <td>
            <?=$poll['opt'];?>
        </td>
    </tr>
    <?php }?>
    </tbody>

</table>

</html>
