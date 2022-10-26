<?php
// 送信ボタンが押されたかどうか
if (isset($_POST['submit'])) {

    // POSTされたデータをエスケープ処理して変数に格納
    $name = htmlspecialchars($_POST['name'], ENT_QUOTES | ENT_HTML5);
    $kana  = htmlspecialchars($_POST['kana'], ENT_QUOTES | ENT_HTML5);
    $email = htmlspecialchars($_POST['email'], ENT_QUOTES | ENT_HTML5);
    $incentive = htmlspecialchars($_POST['incentive'], ENT_QUOTES | ENT_HTML5);
    $detail = htmlspecialchars($_POST['detail'], ENT_QUOTES | ENT_HTML5);

    session_start();
    $_SESSION['name'] = $name; //⇦エスケープ処理をして値を変数に格納済みの入力値
    $_SESSION['kana'] = $kana;
    $_SESSION['email'] = $email;
    $_SESSION['incentive'] = $incentive;
    $_SESSION['detail'] = $detail;

    header('Location:http://localhost:8888/confirm.php');

    // header('Location:https://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . '/confirm.php');
}

// header('Location:/confirm.php');

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
    <link rel="stylesheet" type="text/css" href="./css/reset.css" />
    <link rel="stylesheet" type="text/css" href="./css/sanitize.css" />
    <link rel="stylesheet" type="text/css" href="./css/style.css" />
    <!-- あらかじめcssを読み込んでいるので設定しなくてOK-->
</head>

<body>
    <!-- ここから記述しよう -->
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

    <div class="main_image">
        <h1>世界を変えるチーズを作ろう</h1>
        <p>チーズ職人養成学校「チーズアカデミーFUKUOKA」</p>
    </div>

    <main>
        <section id="about">
            <div class="about_text">
                <h2 class="about_title">ABOUT</h2>
                <div class="description">
                    <p>チーズアカデミーは，チーズ職人養成学校です．</p>
                    <p>チーズの素晴らしさを，自給自足を通じて，できるだけ多くの人に知っていただきたい．<br>そして，食卓にはいつもチーズがあった，あの頃の当たり前をこの手で取り戻したい．</p>
                    <p>そんな思いから，チーズ職人養成学校「チーズアカデミーFUKUOKA」は歩みを始めています．</p>
                    <p>卒業後，チーズ自給自足のバックアップはもちろんのこと，<br>チーズ職人への就職・転職もサポートします．</p>
                    <div class="about_movie">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/Ozu6GpfEUFs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
            </div>


            <div class="scroll">
                <ul class="scroll-list">
                    <li>
                        <img src="./img/about_01.jpg" alt="">
                    </li>
                    <li>
                        <img src="./img/about_02.jpg" alt="">
                    </li>
                    <li>
                        <img src="./img/about_03.jpg" alt="">
                    </li>
                    <li>
                        <img src="./img/about_04.jpg" alt="">
                    </li>
                </ul>
                <ul class="scroll-list">
                    <li>
                        <img src="./img/about_01.jpg" alt="">
                    </li>
                    <li>
                        <img src="./img/about_02.jpg" alt="">
                    </li>
                    <li>
                        <img src="./img/about_03.jpg" alt="">
                    </li>
                    <li>
                        <img src="./img/about_04.jpg" alt="">
                    </li>

                </ul>
            </div>


        </section>

        <section id="course">
            <div class="course_top_text">
                <h2 class="course_title">COURSE</h2>
                <p>未経験からでもスタートができるよう，カリキュラムは多くの専門家や<br>現役チーズ職人のアドバイスのもと，作られました．</p>
            </div>
            <ul class="course_list">
                <li class="course_item">
                    <img src="./img/course_01.jpg" alt="コース１">
                    <div class="course_item_description">
                        <h3>本格的な農園を使った実地研修</h3>
                        <p>チーズアカデミーでは，本格的な農園を使った実地研修を<br>行うことができます．プロとして活躍するチーズ職人も<br>使用するような，広大で環境も整った農園を余すところ<br>なく使い，卒業時には本格的なチーズを自分の力で作れる<br>実践力の養成を目指します．
                        </p>
                    </div>
                </li>
                <li class="course_item">
                    <img src="./img/course_02.jpg" alt="コース１">
                    <div class="course_item_description">
                        <h3>必要な知識もしっかりと取得</h3>
                        <p>チーズ作りには，しっかりとした食に関する知識が<br>欠かせません．チーズアカデミーでは，一流講師陣による，<br>チーズ作りに必要ないろはを余すところなく学べます．<br>チーズそのものでなく，栄養学全般を学ぶことも<br>可能ですので，チーズ以外への展開も夢ではないでしょう．
                        </p>
                    </div>
                </li>
                <li class="course_item">
                    <img src="./img/course_03.jpg" alt="コース１">
                    <div class="course_item_description">
                        <h3>卒業制作はティスティング審査あり</h3>
                        <p>チーズアカデミーでは最後の2ヶ月間で卒業制作を実施．<br>卒業制作として，チーズ作りを実際に行います．卒業後，<br>一般参加によるティスティング審査があるため，作り手の<br>目線だけでなく，消費者の目線から，卒業制作作品としての<br>チーズを，しっかりと評価いただくことができます．
                        </p>
                    </div>
                </li>
            </ul>
        </section>

        <section id="news">
            <div class="news_text">
                <h2 class="news_title">NEWS</h2>
                <p>ニュース</p>
            </div>

            <div id="wrapper">
                <div id="title">NEWS</div>
                <div id="ticKer">
                    <ul id="ulArea">
                        <!-- ul要素 箇条書き -->
                        <li>NEWS!! チーズアカデミー4月生 募集中！
                        </li>
                        <li>NEWS!! 広大な農地での研修を実施しました！</li>
                        <li>NEWS!! 卒業生の取材記事が掲載されました！</li>
                        <li>NEWS!! 10/28 卒業制作での試食会開催されます！</li>
                    </ul>
                </div>
            </div>


            <div class="news_box">
                <div class="news_list">
                    <div class="news_item">
                        <img src="./img/news_img.jpg" alt="ニュース画像">
                        <p class="news_date">2018/11/24</p>
                        <p>チーズアカデミー卒業生のコスゲさんによる<br>チーズだけをふんだんに使用した話題のピザ屋<br>「Kosuge Pizza」が天神でオープンしました！</p>
                    </div>
                    <div class="news_item">
                        <img src="./img/news_img.jpg" alt="ニュース画像">
                        <p class="news_date">2018/11/24</p>
                        <p>チーズアカデミー卒業生のコスゲさんによる<br>チーズだけをふんだんに使用した話題のピザ屋<br>「Kosuge Pizza」が天神でオープンしました！</p>
                    </div>
                    <div class="news_item">
                        <img src="./img/news_img.jpg" alt="ニュース画像">
                        <p class="news_date">2018/11/24</p>
                        <p>チーズアカデミー卒業生のコスゲさんによる<br>チーズだけをふんだんに使用した話題のピザ屋<br>「Kosuge Pizza」が天神でオープンしました！</p>
                    </div>
                </div>
            </div>

            <div class="more">
                <a href="#">MORE</a>
            </div>
        </section>

        <section id="access">
            <div class="access_text">
                <h2 class="access_title">ACCESS</h2>
                <p>会社情報</p>
            </div>
            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3323.7218191174475!2d130.39230201521508!3d33.5865712807352!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3541918695a762f1%3A0x7d7728407f54184b!2z44CSODEwLTAwNDEg56aP5bKh55yM56aP5bKh5biC5Lit5aSu5Yy65aSn5ZCN77yR5LiB55uu77yT4oiS77yU77yRIOODl-ODquOCquWkp-WQjeODk-ODqw!5e0!3m2!1sja!2sjp!4v1666334925600!5m2!1sja!2sjp" width="1600" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

            <table>
                <tr>
                    <th>学校名</th>
                    <td>チーズアカデミーFUKUOKA</td>
                </tr>
                <tr>
                    <th>事務所所在地</th>
                    <td>〒810-0041 福岡県福岡市中央区大名1丁目3-41 プリオ大名ビル1F</td>
                </tr>
                <tr>
                    <th>TEL</th>
                    <td>000-000-0000</td>
                </tr>
                <tr>
                    <th>FAX</th>
                    <td>999-999-9999</td>
                </tr>
                <tr>
                    <th>MAIL</th>
                    <td>dummy@cheeseacademy.tokyo</td>
                </tr>
            </table>
        </section>

        <section id="contact">
            <div class="contact_text">
                <h2 class="contact_title">Contact</h2>
                <p>説明会お申し込み・お問い合わせ</p>
                <p>ぜひ1度，足を運んでみませんか．説明会は随時開催中．<br>
                    その他，お問い合わせもお気軽にどうぞ．お待ちしております．</p>
                <p>※チーズアカデミーは実際には存在しません．<br>間違っても問い合わせしないようお願いいたします．</p>
            </div>

            <form action="index.php" method="post" autocomplete="off">
                <div class="name">
                    <label for="name">名前<span>必須</span></label>
                    <div class="form"><input type="text" name="name" id="name" required placeholder="チーズ 太郎"></div>
                </div>

                <div class="kana">
                    <label for="kana">カナ<span>必須</span></label>
                    <div class="form"><input type="text" name="kana" id="kana" required placeholder="チーズ タロウ"></div>
                </div>

                <div class="email">
                    <label for="email">メールアドレス<span>必須</span></label>
                    <div class="form"><input type="email" name="email" id="email" required placeholder="testtest@email.coom"></div>
                </div>

                <div class="checkbox">
                    <p>志望動機<span>必須</span></p>
                    <div class="check">
                        <label for="business"><input type="radio" name="incentive" id="business" value="起業したい">起業したい</label><br>
                        <label for="job_change"><input type="radio" name="incentive" id="job_change" value="チーズ系企業に就職・転職したい">チーズ系企業に就職・転職したい</label><br>
                        <label for="work"><input type="radio" name="incentive" id="work" value="チーズと関わる仕事をしており，仕事に生かしたい">チーズと関わる仕事をしており，仕事に生かしたい</label><br>
                        <label for="culture"><input type="radio" name="incentive" id="culture" value="チーズの教養を身につけたい">チーズの教養を身につけたい</label>
                    </div>
                </div>

                <div class="textarea">
                    <label for="detail">詳細<span>必須</span></label>
                    <textarea name="detail" id="detail" cols="30" rows="10" required></textarea>
                </div>

                <div class="btn">
                    <button type="submit" name="submit">確認画面へ</button>
                </div>
            </form>
        </section>


        <a class="pagetop" href="#">
            <div class="pagetop__arrow"></div>
        </a>


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