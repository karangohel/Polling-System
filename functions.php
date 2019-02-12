<?php

function fetchThisUser($username)
{
    global $mysqli, $db_table_prefix;
    $stmt = $mysqli->prepare(
        "
    SELECT
    username,
    password,
    role

    FROM " . $db_table_prefix . " login
    WHERE
    username = ? 
    LIMIT 1"
    );
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->bind_result($username, $password, $role);
    $stmt->execute();
    while ($stmt->fetch()) {
        $row[] = array(
            'username' => $username,
            'password' => $password,
            'role' => $role
        );
    }
    $stmt->close();
    return ($row);
}

function createnewpoll($question, $opt1, $opt2, $opt3, $start_date, $end_date)
{
    global $mysqli, $db_table_prefix;
    $query = "INSERT INTO " . $db_table_prefix . "poll SET 
              question = '".$question."',
              opt1 = '".$opt1."',
              opt2 = '".$opt2."',
              opt3 = '".$opt3."',
              start_date = '".$start_date."',
              end_date = '".$end_date."'";
        $stmt = $mysqli->query($query);
//    $stmt->bind_param("ssss", $question, $opt1, $opt2, $opt3, $start_date,$end_date);
  //  $row = $stmt->execute();
    $stmt->close();
    //return $row;
}

