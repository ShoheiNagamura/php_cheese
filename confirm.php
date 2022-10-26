<?php

session_start(); //SESSIONを使うときは最初にスタートさせる
$name = $_SESSION['name'];
$kana = $_SESSION['kana'];
$email = $_SESSION['email'];
$incentive = $_SESSION['incentive'];
$detail = $_SESSION['detail'];

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>チーズアカデミー</title>
    <meta name="description" content=“世界を変えるチーズを作ろう。チーズアカデミーは、チーズ職人を養成するための学校です。”>
    <meta property="og:title" content="チーズアカデミー">
    <meta property="og:type" content="website" />
    <meta property="og:url" content="#" />
    <meta property="og:site_name" content="チーズアカデミー" />
    <meta property="og:description" content="世界を変えるチーズを作ろう。チーズアカデミーは、チーズ職人を養成するための学校です。" />
    <meta name="format-detection" content="telephone=no">
    <link rel="canonical" href="#">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/reset.css" />
    <link rel="stylesheet" type="text/css" href="css/sanitize.css" />
    <link rel="stylesheet" type="text/css" href="css/confirm.css" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <header>
        <div class="header_logo">
            <img src="./img/header_logo.png" alt="">
        </div>
        <nav>
            <ul>
                <a href="#about">
                    <li>ABOUT</li>
                </a>
                <a href="#course">
                    <li>COURSE</li>
                </a>
                <a href="#news">
                    <li>NEWS</li>
                </a>
                <a href="#access">
                    <li>ACCESS</li>
                </a>
                <a href="#contact">
                    <li>CONTACT</li>
                </a>
            </ul>
        </nav>
    </header>

    <main>
        <!-- 確認画面 -->
        <h1>Contact</h1>
        <p>お問い合わせ</p>

        <div class="verification_screen">
            <dl>
                <form action="./connect.php" method="post">
                    <dt>名前</dt>
                    <dd><?php echo $name; ?><br></dd>
                    <dt>カナ</dt>
                    <dd><?php echo $kana; ?><br></dd>
                    <dt>メールアドレス</dt>
                    <dd><?php echo $email; ?><br></dd>
                    <dt>志望動機</dt>
                    <dd><?php echo $incentive; ?><br></dd>
                    <div class="detail_area">
                        <dt class="detail">詳細</dt>
                        <div class="detail_text">
                            <dd><?php echo $detail; ?><br></dd>
                        </div>
                    </div>

                </form>
            </dl>
            <div class="action">
                <form action="./connect.php">
                    <input onclick="clickEvent()" type="submit" name="send" value="送信" />
                </form>
                <a href="index.php?action=edit">戻る</a>
            </div>
        </div>

    </main>



    <footer>
        <div class="sns">
            <a href="#"><img src="./img/insta.png" alt=""></a>
            <a href="#"><img src="./img/./Twitter.png" alt=""></a>
            <a href="#"><img src="./img/facebook.png" alt=""></a>
        </div>

        <small>copyrights 2016-2018 Cheeese Academy Fukuoka All RIghts Reserved.</small>
    </footer>

    <script src="./js/main.js"></script>



</body>

</html>