<?php
require_once('../sdg/connection.php');
$isEmpty = false;

$title = mysqli_real_escape_string($conn, $_POST['Title']);
$text = mysqli_real_escape_string($conn, $_POST['Text']);
$autor = mysqli_real_escape_string($conn, $_POST['Autor']);


//pri zapise musi byt vo vsetkych polickach nieco napisane
if(empty($_POST["Title"])){
    $isEmpty = true;
}
if(empty($_POST["Autor"])){
    $isEmpty = true;
}
if(empty($_POST["Text"])){
    $isEmpty = true;
}

if($isEmpty == true){
    header('Location: ../sdg/createArticle.php?message=Nieco si nezadal');
}
//random obrazek
$s = rand(1,5);
switch($s) {
    case 1:
        $img = "1.jpg";
        break;
    case 2:
        $img = "dog.jpg";
        break;
    case 3:
        $img = "meda.jpg";
        break;   
    case 4:
        $img = "macka.jpg";
        break;   
    case 5:
            $img = "face.jpg";
            break;          
}

//ak su policka zapisane je to DONE a prida sa clanok do databazy
if($isEmpty == false){
    $sql = "INSERT INTO articles (Title, Text, Autor, Cover_image) 
    VALUES('$title', '$text', '$autor', '$img')";
    if ($conn->query($sql) == true){       
        header('Location: ../sdg/createArticle.php?message=Clanok bol vytvoreny');
    }
    else{
        echo "Error" . $sql . "<br>" . $conn->error;
    }
    $conn->close();
}


?>