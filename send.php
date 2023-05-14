<?php

$url = 'http://m1.top/send_order/';
$data = [
'ref' => 302499,
'api_key' => '07a15dd7c66750f69c8263c1da94329f',
'product_id' => 9563,
'phone' => $_REQUEST['phone'],
'name' => $_REQUEST['name'],
'ip' => $_SERVER['REMOTE_ADDR'],
's' => 'Google Ads',
'w' => '',
't' => '',
'p' => '',
'm' => ''
];

/** 
 * Язык лендинга (для бурж лендингов)
 * 
 * Указывается для того, чтобы все заказы, независимо от IP юзера приходили на ГЕО,
 * связанное с лендом.
 * 
 * Пример: $data['langCode'] = 'es';
 * 
 * Таким образом, даже если пользователь зайдет на лендинг с российского IP,
 * и у оффера есть при этом RU ГЕО, то заказ все равно уйдет на Испанию (ES)
 */
$data['langCode'] = 'kz';

$process = curl_init();
curl_setopt($process, CURLOPT_HEADER, 0);
curl_setopt($process, CURLOPT_USERAGENT, "Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; .NET CLR 1.0.3705; .NET CLR 1.1.4322; Media Center PC 4.0)");
curl_setopt($process, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($process, CURLOPT_FOLLOWLOCATION, 0);
curl_setopt($process, CURLOPT_TIMEOUT, 20);
curl_setopt($process, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($process, CURLOPT_POST, true);
curl_setopt($process, CURLOPT_POSTFIELDS, $data);
curl_setopt($process, CURLOPT_URL, $url);

echo $return = curl_exec($process);

curl_close($process);

?>


<!DOCTYPE html>
<html>
    <head>
                    <title>Рахмет Сіздің тапсырысыңыз қабылданды!</title>
                <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="icon" href="/assets_pages/upsells/favicon.ico" type="image/x-icon">
        <link rel="shortcut icon" href="/assets_pages/upsells/favicon.ico" type="image/x-icon">
        <link href='//fonts.googleapis.com/css?family=Roboto:400,300,500,300italic,700&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
        <link media="all" href="/assets_pages/upsells/css/main.css?v=0.1" rel="stylesheet" type="text/css">
        <link media="all" href="/assets_pages/upsells/css/hint.css" rel="stylesheet" type="text/css">

       
            </head>
    
    <body class="man" style="background-color: #f1f4f6;">
        <div class="first-block">
            <div class="wrapper">
                <div class="wrap">
                    <div class="top-title top-title-c">
                        <h2 style="color: #55d90d;">Рахмет Сіздің тапсырысыңыз қабылданды!</h2>
                                            </div>
                </div>
            </div>
        </div>


        <div class="section footer">
            <div class="wrap clearfix">
                <div class="right"><p>Copyright (c) 2023</p></div>
            </div>
        </div>

                





    </body>
</html>

