<?php
include 'helpers/post_to_discord.php';
include 'helpers/channel_info.php';
include 'helpers/string_manager.php';

set_time_limit(0);
ignore_user_abort(true);
ini_set('max_execution_time', 0);

$url = "https://1fichier.com/dir/TVGUMGQk";
$ch = curl_init();
$timeout = 5;
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
$html = curl_exec($ch);
curl_close($ch);

$dom = new DOMDocument();
@$dom->loadHTML($html);

$myint = 0;

foreach ($dom->getElementsByTagName('a') as $link) {

     //returns href title
    $Hyperlink_Title = $link->getAttribute('title');

    //check results for file type NSP
    if (strpos($Hyperlink_Title, 'nsp') !== false) {

        //returns Download Link
        $DownloadLink = $link->getAttribute('href');

        //returns first letter of the filename
        $Case = getFirstLetter($Hyperlink_Title);

        //decides what bot to send to (this method was used to sort out/seperate results alphabetically

        //if you are using this for one bot just replace below with
        //$Webhook = 'mywebhookurl';
        $Webhook = setChannel_Webhook($Case);

        //bot message title, again this is based on the result
        //if you dont care about the title then replace below with
        //$channel_Title = 'My Title';
        $Channel_Title = setChannel_Title($Case);


        //cleans up title
        $Title = getTitle($Hyperlink_Title);

       //cleans up title ID of an NSP
        $TitleID = getTitleID($Hyperlink_Title);

        $myint++;

        $filelink = rmDownload($Hyperlink_Title);

        // Displays Results
        echo "<br />\n";
        echo $myint . "<br />\n";
        echo '  Title:   ' . $Title . "<br />\n";
        echo '  TitleID:   ' . $TitleID . "<br />\n";


        $DirectURL = make_directurl($DownloadLink, $Hyperlink_Title);

        echo $DirectURL. "<br />\n";

        //encodes the url **DCMA reasons
        $Encoded = base64_encode($DirectURL);
        $Date = date("Y.m.d");

        echo $Encoded. "<br />\n";

        //organises the message somewhat (yes i know its dirty coding)
        $Discord_Title = $Channel_Title . $Date;
        $Discord_Hyperlink = Hyperlink($Encoded);
        $Discord_MSG_PT1 = markdown_Title($Title) . ' - ' . $TitleID;
        $Discord_MSG_PT2 = $Discord_MSG_PT1 . "\n" . $Discord_Hyperlink . "\n" . '```**As always thank Duex for the release**```' . "\n" . "\n" . ' ____________________________';

        //posts to discord
        $postToDiscord($Webhook, $Discord_Title, $Discord_MSG_PT2);

    }

}
