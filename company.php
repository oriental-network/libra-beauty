<?php
require('parts.php');
get_header();
?>
        <main id="company-page">
            <!--▼▼▼▼▼ここから「私たちのこだわり」-->
            <div class="back"><div id="pagetopimg"></div></div>

            <section class="box1" id="greeting">
                <p class="deco-text">Greeting</p>
                <div class="title">
                    <h2>
                        <span class="main-text">代表メッセージ</span>
                        <span class="sub-text">greeting</span>
                    </h2>
                </div>
                <div class="greeting-part">
                    <div class="blur">
                        <img src="images/daihyo.jpg" alt="" class="speed1">
                    </div>
                    <div class="text order1 blur">
                        <p>LIBRAは、“自分を好きになれるきっかけを届けたい”という想いから生まれた会社です。</p>
                        <p>サロンを立ち上げた当初は、私が1人でチェアーが１つだけの小さなお店でした。思うようにいかないことばかりで、<br />
                            技術・集客・スタッフ育成……すべてが手探りの毎日でした。<br />
                            けれど、その中でもお客様からいただく「ありがとう」「また来たい」の言葉が、<br />
                            どんな時も私を支えてくれました。<br />
                            <br />
                            LIBRAがここまで成長できたのは、まぎれもなくお客様のお声、<br />
                            そして一緒に挑戦してくれる仲間たちの存在があったからです。<br />
                            <br />
                            これからも私たちは、<br />
                            「もっとこうなりたい」という想いに寄り添い、<br />
                            美容を通して一人ひとりの可能性を広げていける会社であり続けます。<br />
                            <br />
                            “美しくなること”は、ゴールではなくスタート。<br />
                            LIBRAは、誰もが自分らしく輝ける社会を目指して歩み続けます。
                        </p>
                        <p class="daihyo_name"><span>株式会社 LIBRA</span><br />代表　千田陽美</p>
                    </div>
                </div>
                <!--/.text-->
            </section>
            <section class="faq" id="faq">
                <h2>
                    <span class="kazari">企業理念</span>
                </h2>
                <div class="text">
                    <dl>
                        <dt>「人を育て、美を届け、人生を変える。」</dt>
                        <dd>
                            私たちは、美容を通じて “心に火が灯る瞬間” をつくりたい。<br />
                            お客様には自信というエネルギーを。スタッフには挑戦する勇気を。<br />
                            関わるすべての人の人生が、今よりもっと輝くためのきっかけになる場所でありたい。
                        </dd>
                        <dt>Vision（目指す未来）</dt>
                        <dd>
                            美容を通じて、人と人が成長し合い、豊かな人生を共に築ける社会をつくる。<br />
                            <br />
                            美しさは、自信をくれる。<br />
                            自信は、行動を変える。<br />
                            行動は、人生を動かす。<br />
                            <br />
                            私たちは、そんな「人生を変える起点」として、美容というフィールドから無限の可能性を広げていきます。
                        </dd>
                        <dt>Mission（使命）</dt>
                        <dd>
                            お客様には自信と心の豊かさを、スタッフには挑戦と成長の機会を提供する。<br />
                            <br />
                            ・美容サービスを超えて、“自分を好きになる”体験を提供する<br />
                            ・スタッフ全員が“自分の人生にワクワクできる”環境をつくる<br />
                            ・スタッフ一人ひとりの夢や目標を応援し、共に高め合う職場をつくる<br />
                        </dd>
                        <dt>Value（行動指針・大切にする価値観）</dt>
                        <dd>
                            1.寄り添う心：お客様にもスタッフにも、思いやりと敬意をもって接します<br />
                            2.挑戦と成長：現状に満足せず、学び、行動し、進化し続けます<br />
                            3.自信を与える：接客で、相手の心が前向きになる価値を提供します<br />
                            4.チームでつくる未来：一人ひとりの力を信じ、助け合いながら大きな目標を目指します<br />
                            5.美しさ＝心の豊かさ：見た目の美だけでなく、心にプラスの変化を届けます
                        </dd>
                    </dl>
                    <p class="btn3 white">
                        <!-- <a href="#">View More</a> -->
                    </p>
                </div>
            </section>
            <section id="company-info">
                <h1>会社概要</h1>
                <table>
                  <tr>
                    <th>会社名</th>
                    <td>株式会社LIBRA</td>
                  </tr>
                  <tr>
                    <th>代表取締役</th>
                    <td>千田陽美</td>
                  </tr>
                  <tr>
                    <th>事業内容</th>
                    <td>ホワイトニング事業/脱毛サロン事業/FC事業</td>
                  </tr>
                  <tr>
                    <th>設立</th>
                    <td>2024年9月9日</td>
                  </tr>
                  <tr>
                    <th>所在地</th>
                    <td>〒542-0086 大阪府大阪市中央区西心斎橋１丁目１０−１２ サンハイム心斎橋 301号室</td>
                  </tr>
                  <tr>
                    <th>アクセス</th>
                    <td>心斎橋駅徒歩1分</td>
                  </tr>
                  <tr>
                    <th>Eメール</th>
                    <td>libra95official@gmail.com</td>
                  </tr>

                </table>
            </section>

            <!--▲▲▲▲▲ここまで「私たちのこだわり」-->
            <!--▼▼▼▼▼ここから「製品ブランド」-->
        </main>
        <!--▼▼▼▼▼ここから「フッター」-->

<?= get_footer() ;?>
