<?php

// define variables and set to empty values
$postErr = $railingErr = $lengthErr = $websiteErr = "";
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

if (empty($_POST["comment"])) {
$comment = "";
} else {
$comment = test_input($_POST["comment"]);
}

if (empty($_POST["gender"])) {
$genderErr = "Gender is required";
} else {
$gender = test_input($_POST["gender"]);
}
}