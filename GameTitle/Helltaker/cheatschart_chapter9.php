<!DOCTYPE html>
<head>
  <!-- 文字コード-->
  <meta charset="utf-8">

  <!-- SEO-->
  <meta name="description" content="HelltakerのChapter1攻略"/>
  <meta name="keywords" content="Helltaker, STEAM">

  <!-- ライブラリ -->
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

  <!-- 独自css-->
  <link rel="stylesheet" type="text/css" href="../../css/common.css">
  <link rel="stylesheet" type="text/css" href="css/header.css">

  <title>チャプター9 ジャッジメント : Helltaker攻略</title>
</head>
<body>

  <!-- ヘッダー -->
  <?php include('./Header.html'); ?>


  <!-- コンテンツ-->
  <div class="container-fluid">
    <div class="row">
      <!-- サイド コンテンツ -->
      <div class="col-lg-3">
        <?php include('./sidemenu.html'); ?>
      </div>

      <!-- メイン コンテンツ-->
      <div class="col-lg-8">

      <h2>チャプター9 ジャッジメント</h2>

      <!-- 目次 -->
      <h4 class="content">目次</h4>
      <ul>
        <li><a href="#answer">パズルの解き方</a></li>
        <li><a href="#gamevideo">動画</a></li>
        <li><a href="#action-puzzles">アクションパズル</a></li>
        <li><a href="#choices">選択肢</a></li>
      </ul>

        <!-- パズルの解き方 -->
        <h4 class="content dropdown-bar" id="collapse-action-puzzles" data-toggle="collapse" data-target="#collapse-answer" aria-controls="collapse-answer">パズルの解き方　▼</h4>
        <div class="collapse show" id="collapse-answer">

          <table class="table-responsive">
            <tr>
              <td class="cell-title">ターン数</td>
              <td class="cell-info">33</td>
            </tr>
            <tr>
              <td class="cell-title">アイテム</td>
              <td class="cell-info">鍵</td>
            </tr>
          </table>

          <hr>

          <ul>
            <li>スタート画面</li>
            <img src="./images/chapter9-map.jpg" class="img-fluid" alt="チャプター9マップ" width="850" height="650">
          </ul>

          <hr>

          <ul>
            <li>手順</li>
            <ol>
              <li>→↑（ブロックを蹴る）↑→（ブロックを蹴る）→→（ブロックを蹴る）</li>
              <li>→↓→→（ブロックを蹴る）←↑↑（ブロックを蹴る）↑→（ブロックを蹴る）</li>
              <li>→→（ブロックを蹴る）→↓（ブロックを蹴る）↓→（ブロックを蹴る）</li>
              <li>→↑（ブロックを蹴る）↑→（鍵ゲット）←←←↑↑（ブロックを蹴る）</li>
              <li>↑←（錠を開ける）↑（ゴール）</li>
            </ol>
          </ul>

          <p>クリアすると<br><a class="achievement" href="./achievement">&#x1f3c6;<b>実績「Gatetaker」</b></a>を獲得。</p>
        </div>

        <!-- 動画 -->
        <h4 class="content dropdown-bar" id="gamevideo" data-toggle="collapse" data-target="#collapse-gamevideo" aria-controls="collapse-gamevideo">動画　▼</h4>
        <div class="embed-responsive embed-responsive-16by9 collapse show" id="collapse-gamevideo">
          <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/AHNSiPkUqSM" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"></iframe>
        </div>

        <!-- アクションパズル -->
        <h4 class="content dropdown-bar" id="action-puzzles" data-toggle="collapse" data-target="#collapse-action-puzzles" aria-controls="collapse-action-puzzles">アクションパズル　▼</h4>
        <div class="collapse show" id="collapse-action-puzzles">

          <ul>
            <li>床が下から上へと流れだす。<br>
            上下の床牙に当たると、その時点でゲームオーバー。</li>
            <li>出現する鎖に当たらないよう、一定時間避け続ける。<br>
            「○○の鎖」破壊時に、当たった回数はリセットされる。</li>

            <img src="./images/chapter9-map2.jpg" class="img-fluid" alt="チャプター9マップ2" width="850" height="650">

            <li>両端に出現する「○○の鎖」の何回も蹴り破壊すると、イベント。<br>
            中央が安置で、床が動かなくなるのでパターンをゆっくり確認できる。</li>

            <img src="./images/chapter9-map2.jpg" class="img-fluid" alt="チャプター9マップ3" width="850" height="650">
          </ul>

          <p>クリアすると<br><a class="achievement" href="./achievement">&#x1f3c6;<b>実績「Sintaker」</b></a>を獲得。</p>
        </div>

        <!-- 選択肢 -->
        <h4 class="content dropdown-bar" id="choices" data-toggle="collapse" data-target="#collapse-choices" aria-controls="collapse-choices">選択肢　▼</h4>
        <div class="collapse show" id="collapse-choices">

          <img src="./images/chapter9-choices.jpg" class="img-fluid" alt="チャプター9選択肢" width="850" height="650">
          <table class="table-responsive">
            <tr>
              <th class="cell-title">選択肢</th>
              <th class="cell-title">備考</th>
            </tr>
            <tr>
              <td class="cell-info">君の髪は綺麗だな。</td>
              <td class="cell-info">次の選択肢へ</td>
            </tr>
            <tr>
              <td class="cell-info">その衣装デザイン最高！10点満点！</td>
              <td class="cell-info">次の選択肢へ</td>
            </tr>
          </table>

          <img src="./images/chapter9-choices2.jpg" class="img-fluid" alt="チャプター9選択肢2" width="850" height="650">
          <table class="table-responsive">
            <tr>
              <th class="cell-title">選択肢</th>
              <th class="cell-title">備考</th>
            </tr>
            <tr>
              <td class="cell-info">そうだな。だから今伝えるべきだと思った。</td>
              <td class="cell-info">次の選択肢へ</td>
            </tr>
            <tr>
              <td class="cell-info">爪もマジでイカしてるぞ！</td>
              <td class="cell-info">次の選択肢へ</td>
            </tr>
          </table>

          <img src="./images/chapter9-choices3.jpg" class="img-fluid" alt="チャプター9選択肢3" width="850" height="650">
          <table class="table-responsive">
            <tr>
              <th class="cell-title">選択肢</th>
              <th class="cell-title">備考</th>
            </tr>
            <tr>
              <td class="cell-info">もっと早く君を見つけられればよかったと後悔している。</td>
              <td class="cell-info">次の選択肢へ</td>
            </tr>
            <tr>
              <td class="cell-info">君に罰せられるなら、俺の罪も価値あるものとなった。</td>
              <td class="cell-info">次の選択肢へ</td>
            </tr>
          </table>

          <img src="./images/chapter9-choices4.jpg" class="img-fluid" alt="チャプター9選択肢4" width="850" height="650">
          <table class="table-responsive">
            <tr>
              <th class="cell-title">選択肢</th>
              <th class="cell-title">備考</th>
            </tr>
            <tr>
              <td class="cell-info">そうか、すまん。だが、君の目に見とれてな。</td>
              <td class="cell-info">次の選択肢へ</td>
            </tr>
            <tr>
              <td class="cell-info">君の髪がどれだけ素晴らしいか話していいか？</td>
              <td class="cell-info">次の選択肢へ</td>
            </tr>
          </table>

          <img src="./images/chapter9-choices5.jpg" class="img-fluid" alt="チャプター9選択肢5" width="850" height="650">
          <table class="table-responsive">
            <tr>
              <th class="cell-title">選択肢</th>
              <th class="cell-title">備考</th>
            </tr>
            <tr>
              <td class="cell-info">他に道はない。</td>
              <td class="cell-info"><a href="./cheatschart_chapter10.php" title="チャプター10 エピローグ">チャプター10 エピローグ</a>へ</td>
            </tr>
            <tr>
              <td class="cell-info">大丈夫、俺のハーレムにはもっとひどいのもいる。</td>
              <td class="cell-info"><a href="./cheatschart_chapter10.php" title="チャプター10 エピローグ">チャプター10 エピローグ</a>へ</td>
            </tr>
          </table>
        </div>
      </div>

      <!-- サイド コンテンツ -->
      <div class="col-lg-1"></div>
    </div>
  </div>

</body>