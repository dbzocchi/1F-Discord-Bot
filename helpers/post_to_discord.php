<?php

function postToDiscord($Channel, $Title, $Message)
{


    $data = array("content" => $Message, "username" => $Title);
    $curl = curl_init($Channel);
    curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data));
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    return curl_exec($curl);


}


