<?php
function current_url($url = ''){
    $path = trim($_SERVER['REQUEST_URI'], '/\\');
    $path = substr($path, 12, -4);
    if($url == $path){
        return true;
    }
    return false;
}


function dbconnection(){
    $conn = new mysqli("127.0.0.1", "root", "", "gaza"); 
    if ($conn === false) { 
        echo ("ERROR: Could not connect. " .$conn->connect_error); 
        return false;
    } 
    return $conn;
}

function getArticles(){
    $conn = dbconnection();
    if($conn){
        $sql = "SELECT * FROM articles ORDER BY date_publish ASC"; 
        $res = $conn->query($sql);
        if($res->num_rows > 0){
            return $res->fetch_all(MYSQLI_ASSOC);
        }
        return false;
    }
    return false;
}

function convertDate($d){
    $date=date_create($d);
    return date_format($date,"d M, Y");
}


?>