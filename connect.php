<?php
//現在の時刻を設定
date_default_timezone_set('Asia/Tokyo');


session_start(); //SESSIONを使うときは最初にスタートさせる
$name = $_SESSION['name'];
$kana = $_SESSION['kana'];
$email = $_SESSION['email'];
$incentive = $_SESSION['incentive'];
$detail = $_SESSION['detail'];


//データベースに接続
$dsn = 'mysql:host=localhost;dbname=cheese;charset=utf8';
$user = 'root';
$pass = 'root';

$dbh = new PDO($dsn, $user, $pass);

//SQL作成
$stmt = $dbh->prepare("INSERT INTO contact(name, kana, email, incentive, detail) VALUES (:name, :kana, :email, :incentive, :detail)");

//登録するデータをセット
$stmt->bindValue(':name', $name, PDO::PARAM_STR);
$stmt->bindValue(':kana', $kana, PDO::PARAM_STR);
$stmt->bindValue(':email', $email, PDO::PARAM_STR);
$stmt->bindValue(':incentive', $incentive, PDO::PARAM_STR);
$stmt->bindValue(':detail', $detail, PDO::PARAM_STR);

//SQL実行
$res = $stmt->execute();

//データベースの接続解除
$pdo = null;


?>

<!DOCTYPE html>
<html lang="ja">

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
    <link rel="stylesheet" href="css/connect.css">
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
        <h1>Contact</h1>
        <h2>お問い合わせ</h2>
        <p>ご質問、ご意見などございましたら再度、お問い合わせフォームよりお送りください。</p>
        <p>担当者より後日ご連絡させていただきます。</p>
        <div class="contact">
            <p>お問い合わせありがとうございます。</p>
            <p>3営業日以内にご連絡させていただきます。</p>
        </div>

        <a href="./index.php">トップページへ</a>
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