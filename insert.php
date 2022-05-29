<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require "conn.php";
$link = mysqli_connect($host, $user, $pass);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
$red_count = mysqli_real_escape_string($link, $_REQUEST['red_vote']);
$blue_count = mysqli_real_escape_string($link, $_REQUEST['blue_vote']);
$yellow_count = mysqli_real_escape_string($link, $_REQUEST['yellow_vote']);
$green_count = mysqli_real_escape_string($link, $_REQUEST['green_vote']);
$purple_count = mysqli_real_escape_string($link, $_REQUEST['purple_vote']);
$orange_count = mysqli_real_escape_string($link, $_REQUEST['orange_vote']);
$white_count = mysqli_real_escape_string($link, $_REQUEST['white_vote']);
$black_count = mysqli_real_escape_string($link, $_REQUEST['black_vote']);



// Attempt insert query execution

if($red_count == "red") {
    $sql = "INSERT INTO u610989519_colors2.colors (best_color) VALUES
            ('$red_count')";
    } if($blue_count == "blue"){
        $sql = "INSERT INTO u610989519_colors2.colors (best_color) VALUES
            ('$blue_count')";
    } if($yellow_count == "yellow"){
        $sql = "INSERT INTO u610989519_colors2.colors (best_color) VALUES
            ('$yellow_count')";
    }if($green_count == "green"){
        $sql = "INSERT INTO u610989519_colors2.colors (best_color) VALUES
            ('$green_count')";
    }if($purple_count == "purple"){
        $sql = "INSERT INTO u610989519_colors2.colors (best_color) VALUES
            ('$purple_count')";
    }if($orange_count == "orange"){
        $sql = "INSERT INTO u610989519_colors2.colors (best_color) VALUES
            ('$orange_count')";
    }if($white_count == "white"){
        $sql = "INSERT INTO u610989519_colors2.colors (best_color) VALUES
            ('$white_count')";
    }if($black_count == "black"){
        $sql = "INSERT INTO u610989519_colors2.colors (best_color) VALUES
            ('$black_count')";
    };
    
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// Close connection
mysqli_close($link);

header("Location: index.php#bar-chart"); 

?>