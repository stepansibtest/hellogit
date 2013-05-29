<?
header('Content-Type: text/html; charset=utf-8');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>
        HelloWorld - Git & Github test application
    </title>

    <!--<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=1">-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="/css/bootstrap.css" media="screen"/>
    <link rel="stylesheet" type="text/css" href="/css/style.css?nocache=<?= mt_rand() ?>" media="all"/>

    <script src="/js/jquery-1.9.1.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/func.js?nocache=<?= mt_rand() ?>"></script>

    <!--
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    -->

</head>

<body>

<div class="main">
    <div class="greetings">
        <h2>Hello, <span id="name">Git</span>!</h2>
        Today is <?=date("d/m/Y")?> and i'm still learninng Git
    </div>

    <div class="well">
        <input type="text" name="name" value="" placeholder="Type a new name here"/>
        <a href="#" class="btn say-hello">Say hello!</a>
    </div>
</div>

</body>

</html>