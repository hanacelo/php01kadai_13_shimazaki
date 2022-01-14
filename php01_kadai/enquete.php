<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="enqete.css">
    <title>アンケート</title>
</head>

<body>
    <form action="enquete_confirm.php" method="post"> 
    <h1>♡MY DATA♡</h1>
    <div id="parsonal">
        Name: <input type="text" name="name"><br>
        Nickname:<input type="text" name="nickname"><br>
        Address: <input type="text" name="address"><br>
        SNS ID:<input type="text" name="birthPlace"><br>
    </div>

        <div id="text">
            私は<input type="date" name="birthday" id="birthday">生まれの<input type="text" name="za" id="za">座で、血液型は<input type="text" name="gata" id="gata">だよ。
            性格は<input type="text" name="seikaku" id="seikaku">で、チャームポイントは<input type="text" name="charm" id="charm">かな♡
            子供の頃のユメは<input type="text" name="yume" id="yume">で、大人になった今は、
            <input type="text" name="work" id="work">しているんだ。そんな私は今は、<input type="text" name="mezasu" id="mezasu">を目指していて、そのために
            <input type="text" name="shiteru" id="shiteiru">をしているよ。このユメを叶えて、<input type="text" name="yume2" id="yume2">を実現したい
            と思っているんだ♡
        </div>

        <div id="flex-box2">
            <p id="food">たべもの<br>
                <input type="text" name="food"></p>
            <p id="tv">テレビ<br>
                <input type="text" name="tv"></p>
            <p id="comic">まんが<br>
                <input type="text" name="comic"></p>
            <p id="music">おんがく<br>
                <input type="text" name="music"></p>
        </div>

        <div id="flex-box3">
            <p id="drink">のみもの<br>
            <input type="text" name="drink"></p>
            <p id="game">ゲーム<br>
                <input type="text" name="game"></p>
            <p id="chara">キャラ<br>
                <input type="text" name="chara"></p>
            <p id="color">いろ<br>
                <input type="text" name="color"></p>
        </div>

        <div id="flex-box4">
            <p id="app">アプリ<br>
                <input type="text" name="app"></p>
            <p id="animals">どうぶつ<br>
                <input type="text" name="animals"></p>
            <p id="shop">みせ<br>
                <input type="text" name="shop"></p>
            <p id="sports">スポーツ<br>
                <input type="text" name="sports"></p>
        </div>

        <div id="flex-box5">
            <img src="https://pics.prcm.jp/4eedb82162c0c/77956658/png/77956658_220x220.png" alt="ハート" id="heart" width="170px">
            <p id="kamoku">かもく<br>
                <input type="text" name="kamoku"></p>
            <p id="teacher">せんせい<br>
                <input type="text" name="teacher"></p>
            <p id="play">あそび<br>
                <input type="text" name="play"></p>
        </div>

        <div id="flex-box6">
            <img src="https://pics.prcm.jp/0x0x0/58898053/png/58898053_220x220.png" alt="ハート" id="heart" width="170px">
            <p id="famous">げいのうじん<br>
                <input type="text" name="geinou"></p>
            <p id="cosme">コスメ<br>
                <input type="text" name="cosme"></p>
            <p id="brand">ブランド<br>
                <input type="text" name="brand"></p>
        </div>

        <input type="submit" value="送信" id="submit">
    </form>
</body>

</html>
