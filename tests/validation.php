<?php

// define variables and set to empty values
$postErr = $railingErr = $lengthErr = "";
$posts = $railings = $c = $m = $length = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $c = test_input($_POST["c"]);
    $cm = test_input($_POST["cm"]);
    $length = test_input($_POST["length"]);
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["posts"]) XOR empty($_POST["railings"])) {
    $materialsErr = "Please supply both posts and railings.";
    } else {
    $posts = test_input($_POST["posts"]);
    $railings = test_input($_POST["railings"]);
}

if (empty($_POST["lenth"])) {
    $length = "";
    } else {
    $length = test_input($_POST["email"]);
}

if (empty($_POST["website"])) {
    $website = "";
    } else {
    $website = test_input($_POST["website"]);
}
