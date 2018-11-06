<!doctype HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
    <html>
        <head>
            <title>URL Decoder for Discord NSP</title>
            <style>
                .myButton {
                    -moz-box-shadow: 0px 0px 0px 2px #9fb4f2;
                    -webkit-box-shadow: 0px 0px 0px 2px #9fb4f2;
                    box-shadow: 0px 0px 0px 2px #9fb4f2;
                    background: -webkit-gradient(linear, left top, left bottom, color-stop(0.05, #7892c2), color-stop(1, #476e9e));
                    background: -moz-linear-gradient(top, #7892c2 5%, #476e9e 100%);
                    background: -webkit-linear-gradient(top, #7892c2 5%, #476e9e 100%);
                    background: -o-linear-gradient(top, #7892c2 5%, #476e9e 100%);
                    background: -ms-linear-gradient(top, #7892c2 5%, #476e9e 100%);
                    background: linear-gradient(to bottom, #7892c2 5%, #476e9e 100%);
                    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#7892c2', endColorstr='#476e9e', GradientType=0);
                    background-color: #7892c2;
                    -moz-border-radius: 10px;
                    -webkit-border-radius: 10px;
                    border-radius: 10px;
                    display: inline-block;
                    cursor: pointer;
                    color: #ffffff;
                    font-family: Trebuchet MS;
                    font-size: 28px;
                    font-weight: bold;
                    padding: 12px 55px;
                    text-decoration: none;
                    text-shadow: 0px 1px 0px #283966;
                }

                .myButton:hover {
                    background: -webkit-gradient(linear, left top, left bottom, color-stop(0.05, #476e9e), color-stop(1, #7892c2));
                    background: -moz-linear-gradient(top, #476e9e 5%, #7892c2 100%);
                    background: -webkit-linear-gradient(top, #476e9e 5%, #7892c2 100%);
                    background: -o-linear-gradient(top, #476e9e 5%, #7892c2 100%);
                    background: -ms-linear-gradient(top, #476e9e 5%, #7892c2 100%);
                    background: linear-gradient(to bottom, #476e9e 5%, #7892c2 100%);
                    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#476e9e', endColorstr='#7892c2', GradientType=0);
                    background-color: #476e9e;
                }

                .myButton:active {
                    position: relative;
                    top: 1px;
                }
            </style>
        </head>

        <body>

            <?php

                echo 'Decoding your url now...     ';
                $encrypedmsg = basename($_SERVER['REQUEST_URI']);
                $decoded = base64_decode($encrypedmsg);
            ?>

            <a href="<?php echo $decoded ?>" class="myButton">Click Here</a>

        </body>
    </html>