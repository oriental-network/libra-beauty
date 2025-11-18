<?php

function get_header(){
echo '<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>Libra</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="美容を通じて “心に火が灯る瞬間” を。">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/additional.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kiwi+Maru&display=swap" rel="stylesheet">
</head>

<body class="home">
    <div id="container">
        <!--▼▼▼▼▼ここから「ヘッダー」-->
        <header>
            <h1 id="logo">
                <a href="index.php">
                    <img src="images/LIBRA.png" alt="サイト名">
                </a>
            </h1>
            <nav>
                <ul>
                    <li>
                        <a href="index.php">ホーム</a>
                    </li>
                    <li>
                        <a href="service.php">サービス</a>
                    </li>
                    <li>
                        <a href="company.php">会社概要</a>
                    </li>
                    <li>
                        <a href="recruit.php">採用情報</a>
                    </li>
                    <li>
                        <a href="shop.php">店舗一覧</a>
                    </li>
                    <li>
                        <a href="fc.php">FC加盟はこちら</a>
                    </li>
                </ul>
            </nav>
        </header>';

}

function get_footer(){
            echo '<footer>
                <div class="text">
                    <div>
                        <h4>Company</h4>
                        <p>大阪府中央区西心斎橋1丁目10-12 サムハイム心斎橋301
                            <br>営業時間 11:00〜20:30
                    </div>
                    <div>
                        <h4>Follow Us</h4>
                        <ul class="icons">
                            <li>
                                <a href="#">
                                    <i class="fa-brands fa-x-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fab fa-line"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fab fa-youtube"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="image">
                    <p class="logo">
                        <img src="images/libra-logo.png" alt="">
                    </p>
                    <small>© Libra</small>
                </div>
            </footer>
            <!--▲▲▲▲▲ここまで「フッター」-->
            <!--テンプレートの著作。削除しないで下さい。-->
            <!-- <span class="pr"> -->
            <!--     <a href="https://template-party.com/" target="_blank">《Web Design:Template-Party》</a> -->
            <!-- </span> -->
        </div>
        <!--/#container-->
        <!--開閉ボタン（ハンバーガーアイコン）-->
        <div id="menubar_hdr">
            <div class="menu-icon">
                <span>
                </span>
                <span>
                </span>
            </div>
        </div>
        <!--開閉ブロック-->
        <div id="menubar">
                <nav>
                    <ul>
                        <li>
                            <a href="service.php">サービス</a>
                        </li>
                        <li>
                            <a href="company.php">会社概要</a>
                        </li>
                        <li>
                            <a href="recruit.php">採用情報</a>
                        </li>
                        <li>
                            <a href="shop.php">店舗一覧</a>
                        </li>
                        <li>
                            <a href="fc.php">FC加盟はこちら</a>
                        </li>
                    </ul>
                </nav>
         </div>
            <!--/#menubar-->
            <!--jQueryの読み込み-->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
            <!--パララックス（inview）-->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/protonet-jquery.inview/1.1.2/jquery.inview.min.js"></script>
            <script src="js/jquery.inview_set.js"></script>
            <!--このテンプレート専用のスクリプト-->
            <script src="js/main.js"></script>
            <script src="js/additional.js"></script>
        </body>

        </html>';
}
