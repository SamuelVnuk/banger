<?php
require_once('../sdg/connection.php');

$sql = "SELECT * FROM articles";
$result = $conn->query($sql);
$articles = [];

while($article = $result->fetch_assoc()){
    array_push($articles, $article);
}
?>