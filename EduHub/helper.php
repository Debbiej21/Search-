<?php
//helper.php

//connect database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "eduhub";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

function getGender($g){ //$g is basically f or m
    $gender = getGenderList();
    return $gender[$g];
}

function getGenderIcon(){
    $gender = getGenderList();
    if($gender === 'Male'){
        return 'fas fa-mars';
    } else{
        return 'fas fa-venus';
    }
    
}

function getGenderList(){
    return ['M' => 'Male', 'F' => 'Female'];
}
