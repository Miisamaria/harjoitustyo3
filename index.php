<?php
header('Access-Control-Allow-Origin:*');
header('Content-Type: Application/json');

try{
    
$db = new PDO('mysql:host=localhost;dbname=shoppinglist;charset=utf8','root','');
$sql = "select * from item";
$query = $db->query($sql);
$results = $query->fetchAll(PDO::FETCH_ASSOC);
$json = json_encode($results,JSON_PRETTY_PRINT);
header('HTTP/1.1 200 OK');
print $json;

}

catch (PDOException $pdoex){
    header('HTTP/1.1 500 Tietokantayhteyden avaaminen epäonnistui');
    $error = array('error'=>$pdoex->getMessage());
    print json_encode($error);
}