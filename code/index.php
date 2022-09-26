<?php 
$url = 'https://script.google.com/macros/s/AKfycby-TJmFFUFTfiNUbMoSIZx8LVtiskQ-bUt4xO6hmrU0XQpJS8IPUBow/exec';



if(!empty($_POST)){

    $postArray= array(
        "cle"     => "CLE-TEST-IOT",
        "donnees" => array(
            "id"        => trim(strip_tags($_POST['id'])),
            "date"      => trim(strip_tags($_POST['date'])),
            "urlRelais" => trim(strip_tags($_POST['urlRelais'])),
            "message"   => trim(strip_tags($_POST['message']))
        )
    );

    $json = json_encode($postArray);

    $ch= curl_init($url);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-type:application/json'));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($ch);
    curl_close($ch);




   
    // $file = 'entries.json';
    // file_put_contents($file, $json, FILE_APPEND);
    var_dump($json);
}

?>

<form action ="" method="post"> 
    <label for="id"> Adresse mail : </label>
    <input id ="id" type="email" name="id">
    <label for="date"> Date : </label>
    <input id ="date" type="text" name="date">
    <label for="urlRelais"> Adresse du repo git : </label>
    <input id ="urlRelais" type="text" name="urlRelais">
    <label for="message"> P'tit message : </label>
    <input id ="message" type="text" name="message">
    <input type="submit">
    