<?php
    // Gerador de Tokens do instagram http://instagram.pixelunion.net/
    // É necessário que crie um com a conta que deseja criar a API

    $access_token="4378570628.e6bb260.ecf356cb634b4476a987583fa06116e5";
    $photo_count=8;
        
    $json_link="https://api.instagram.com/v1/users/self/media/recent/?";
    $json_link.="access_token={$access_token}&count={$photo_count}";

    $json = file_get_contents($json_link);
    $obj = json_decode($json, true, 512, JSON_BIGINT_AS_STRING);

?>