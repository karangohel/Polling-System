<?php

require_once("config.php");
$backgroundimage = "pace.jpg";

?>

<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN'
    'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml'>

<head>

    <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
    <title>
        Final Project
    </title>

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

</head>

<body>
<table class="table-style-three" align="center";>
    <thead>
    <form name="index" action="afterlogin.php" method="post">
        <tr>
            <th>Username</th>
            <td><input type="text" name="username" value=""></td>
        </tr>
        <tr>
            <th>Password</th>
            <td><input type="password" name="password" value=""></td>
        </tr>
        <tr>
            <td><input type="Submit" name="submit" value="submit"></td>
        </tr>
        </thead>
    </table>
</body>
</html>

