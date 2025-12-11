<?php
$host = "localhost";
$user = "book_review_user_24092025";
$pass = "password";
$dbname = "book_review_24092025";

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
<a href="index.html">Atpakaļ</a>