<?php

require_once "connection.php";


// function created to remove special characters from the info gotten
    function trimInfo($info){
        $info = htmlspecialchars($info);
        $info = trim($info);
        $info = stripslashes($info);

        return $info;
    }

    // echo $info;

// functions created to validate and filter info gotten 
    function sanitizer($sanval){
        $valid = filter_var_array($sanval, FILTER_SANITIZE_STRING);

        return $valid;
    }

// funcitons used to escape special characters gotten from sql db 
    function mysql_use($connect, $string){
        $data = mysqli_real_escape_string($connect, $string);

        return $data;
    }
?>