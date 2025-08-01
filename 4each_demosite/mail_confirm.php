<!DOCTYPE html>
<html lang="ja">
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
    <main>
        <img src="imgfile\bookstore.jpg" alt="main">
     <section>
    
        <p>お問い合わせ内容はこちらで宜しいでしょうか？
        <br>宜しければ「送信する」ボタンを押してください。
        </p>
        <p>名前
        <br>
        <?php echo $_POST['name'];?>
        </p>

        <p>メールアドレス
        <br>
        <?php echo $_POST['mail'];?>
        </p>

        <p>年齢
        <br>
        <?php echo $_POST['age'];?>
        </p>

        <p>コメント
        <br>
        <?php echo $_POST['comments'];?>
        </p>

        
        <form action="commentFform.html">
            <div class="btn2">
                <button>戻って修正する</button>
            </div>
        </form>
       

        <form action="insert.php" method="post">
            <div class="btn">
                <button>送信する</button>
            </div>
            <input type="hidden" value="<?php echo $_POST['name'];?>" name="name">
            <input type="hidden" value="<?php echo $_POST['mail'];?>" name="mail">
            <input type="hidden" value="<?php echo $_POST['age'];?>" name="age">
            <input type="hidden" value="<?php echo $_POST['comments'];?>" name="comments">
        </form>
 </section>
</main>
    
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
   
 
