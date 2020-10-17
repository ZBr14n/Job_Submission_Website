<?php

$conn = mysqli_connect("us-cdbr-east-02.cleardb.com", "bb92ec9f820191", "1b0c19a9", "heroku_103eb66bbeb0789", 3306, null);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error() . PHP_EOL);
} else {
    echo "Connected successfully" . PHP_EOL;
}


$resume = $_FILES["resume"]["name"];
$full_name = $_POST["fullName"];
$email = $_POST["email"];
$phone = $_POST["phone"];

$socialUrl = $_POST["socialUrl"];
$otherWeb = $_POST["websites"];

$textarea = $_POST["textarea"];
