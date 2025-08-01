<?php
mb_internal_encoding("utf8");
$pdo = new PDO("mysql:dbname=4each_commeit;host=localhost;","user","pass");

$sql = "insert into contactform(name, mail, age, comments) values(?,?,?,?)";
$stmt = $pdo->prepare($sql);

$stmt->bindValue(1, $_POST['name']);
$stmt->bindValue(2, $_POST['mail']);
$stmt->bindValue(3, $_POST['age']);
$stmt->bindValue(4, $_POST['comments']);

$stmt->execute();
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style2.css">
    <script src="script.js" defer></script>
    <script src="https://code.jquery.com/jquery-3.7.1.slim.js"
        integrity="sha256-UgvvN8vBkgO0luPSUl2s8TIlOSYRoGFAX4jlCIm9Adc=" crossorigin="anonymous"></script>

    <title>4eachプログラミングサイト</title>
</head>

<body>
    <header>
        <div class="headImg">
            <a href="main.html"><img src="imgfile/4eachblog_logo.jpg" alt="4eachロゴ" class="logoimg"></a>
        </div>
        <div class="menu-btn">
            <span class="menu-line"></span>
        </div>
        </div>
        <div class="overlay-nav">
            <nav class="g-nav">
                <ul class="hidn">
                    <li class="nav_item"><a href="main.html">トップ &gt;</a></li>
                    <li class="nav_item"><a
                            href="https://programmercollege.jp/lp5-3/?utm_source=bing&utm_medium=cpc&utm_campaign=brand_01&argument=wKOwHUYo&dmai=a655340c0a2856&msclkid=4afe96302fba1e29f70bf16682f49c03">4eachについて&gt;</a>
                    </li>
                    <li class="nav_item"><a href="commentFform.html">お問い合わせ&gt;</a></li>
                    <li class="nav_item"><a href="https://4each.jp/form">登録フォーム&gt;</a></li>
                    <li class="nav_item"><a href="https://4each.jp/index">会員サイトへ&gt;</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <img src="imgfile\bookstore.jpg">

    <section>
    <p>
        お問い合わせありがとうございました。<br>3営業日以内に担当者よりご連絡差し上げます。
    </p>
     <div class="btn">
                <a href="main.html"><button>ホームに戻る</button></a>
         </div>
</section>
<footer>
        <div class="footer">
            <img src="imgfile/zeru_logo.png" alt="zeru_logo">
            <p>copyright©zeru <br>create by zeru</p>
        </div>
    </footer>
    <div class="toTop">
        <p>△<br>上に戻る</p>
    </div>
    
</body>
</html>