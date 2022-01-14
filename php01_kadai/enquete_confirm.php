<?php

$birthday = $_POST['birthday'];
$za = $_POST['za'];
$gata = $_POST['gata'];
$seikaku = $_POST['seikaku'];
$charm = $_POST['charm'];
$yume = $_POST['yume'];
$work = $_POST['work'];
$mezasu = $_POST['mezasu'];
$shiteru = $_POST['shiteru'];
$yume2 = $_POST['yume2'];

$food = $_POST['food'];
$tv = $_POST['tv'];
$comic = $_POST['comic'];
$music = $_POST['misic'];

$drink = $_POST['drink'];
$game = $_POST['game'];
$chara = $_POST['chara'];
$color = $_POST['color'];

$app = $_POST['app'];
$animals = $_POST['animals'];
$shop = $_POST['shop'];
$sports = $_POST['sports'];

$kamoku = $_POST['kamoku'];
$teacher = $_POST['teacher'];
$play = $_POST['play'];

$geinou = $_POST['geinou'];
$cosme = $_POST['cosme'];
$brand = $_POST['brand'];

$birthday = htmlspecialchars($birthday,ENT_QUOTES);
$za = htmlspecialchars($za,ENT_QUOTES);
$gata = htmlspecialchars($gata,ENT_QUOTES);
$seikaku = htmlspecialchars($seikaku,ENT_QUOTES);
$charm = htmlspecialchars($charm,ENT_QUOTES);
$yume = htmlspecialchars($yume,ENT_QUOTES);
$work = htmlspecialchars($work,ENT_QUOTES);
$mezasu = htmlspecialchars($mezasu,ENT_QUOTES);
$shiteru = htmlspecialchars($shiteru,ENT_QUOTES);
$yume2 = htmlspecialchars($yume2,ENT_QUOTES);

$food = htmlspecialchars($food,ENT_QUOTES);
$tv = htmlspecialchars($tv,ENT_QUOTES);
$comic = htmlspecialchars($comic,ENT_QUOTES);
$music = htmlspecialchars($music,ENT_QUOTES);

$drink = htmlspecialchars($drink,ENT_QUOTES);
$game = htmlspecialchars($game,ENT_QUOTES);
$chara = htmlspecialchars($chara,ENT_QUOTES);
$color = htmlspecialchars($color,ENT_QUOTES);

$app = htmlspecialchars($app,ENT_QUOTES);
$animals = htmlspecialchars($animals,ENT_QUOTES);
$shop = htmlspecialchars($shop,ENT_QUOTES);
$sports = htmlspecialchars($sports,ENT_QUOTES);

$kamoku = htmlspecialchars($kamoku,ENT_QUOTES);
$teacher = htmlspecialchars($teacher,ENT_QUOTES);
$play = htmlspecialchars($play,ENT_QUOTES);

$geinou = htmlspecialchars($geinou,ENT_QUOTES);
$cosme = htmlspecialchars($cosme,ENT_QUOTES);
$brand = htmlspecialchars($brand,ENT_QUOTES);
?>

<html>
    <head>
        <meta charset="utf-8">
        <title>POST（受信）</title>
    </head>
    <style>
        li{list-style: none;}
    </style>
    <body>
        <div id="text">
            私は＜<?= $birthday ?>＞生まれの＜<?=$za ?>＞座で、血液型は＜<?= $gata ?>＞だよ。<br>
            性格は＜<?= $seikaku ?>＞で、チャームポイントは＜<?= $charm ?>＞かな♡<br>
            子供の頃のユメは<<?= $yume ?>>で、大人になった今は、<br>
            ＜<?= $work ?>＞をしているんだ。そんな私は今は、＜<?= $mezasu ?>＞を目指していて、そのために<br>
            ＜<?= $shiteru ?>＞をしているよ。このユメを叶えて、＜<?= $yume2 ?>＞を実現したい<br>
            と思っているんだ♡<br>
        </div>
        <br>
        <div id="data">
            たべもの：<?= $food ?><br>
            テレビ：<?= $tv ?><br>
            まんが：<?= $comic ?><br>
            おんがく：<?= $comic ?><br>
            <br>
            飲み物：<?= $drink ?><br>
            ゲーム：<?= $game ?><br>
            キャラ：<?= $chara ?><br>
            いろ：<?= $color ?><br>
            <br>
            アプリ：<?= $app ?><br>
            どうぶつ：<?= $animals ?><br>
            みせ：<?= $shop ?><br>
            スポーツ：<?= $sports ?><br>
            <br>
            かもく：<?= $kamoku ?><br>
            せんせい：<?= $teacher ?><br>
            あそび：<?= $play ?><br>
            <br>
            げいのうじん：<?= $geinou ?><br>
            コスメ：<?= $cosme ?><br>
            ブランド：<?= $brand ?><br>
        </div>
        <ul>
        <li><a href="enquete.php">戻る</a></li>
        </ul>
    </body>





</html>