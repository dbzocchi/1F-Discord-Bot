<?php



// Removes the string Download  -   Mygame[454][45456].NSP
function rmDownload($title){
   return substr($title, 9);
}

// Gets the first letter of the game - A,B
function getFirstLetter($title){
    return substr(rmDownload($title), 0, 1);
}

// removes the FileType From The Title  -   Mygame[454][45456]
function rmNSP($title){
    return substr(rmDownload($title), 0, -4);
}

// Gets version - [v0]
function getVersion($title){
    return substr(rmNSP($title), -4);
}

// Gets titleid - [0748756456]
function getTitleID($title){
    return substr(rmNSP($title), -18, -5);
}

// Gets title - [myGame]
function getTitle($title){
    return substr(rmNSP($title), 0, -22);
}


function markdown_Title($title){
   return '__**' . $title . '**__';
}

function Hyperlink($Encoded){
    return '[' . $Encoded . ']' . '(' .  'http://hostfile.xyz/discord/bots/Decoder.php/' . $Encoded . ')';
}

function make_directurl($link, $title){
    return $link    .   '/'    .    urlencode(rmDownload($title));
}