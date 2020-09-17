<!DOCTYPE html>
<head>
  <!-- 文字コード-->
  <meta charset="utf-8">

  <!-- ライブラリ  jquery-->
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

  <!-- ライブラリ -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

  <!-- 独自css-->
  <link rel="stylesheet" type="text/css" href="../../css/common.css">
  <link rel="stylesheet" type="text/css" href="../../css/header.css">
  <link rel="stylesheet" type="text/css" href="css/header-background.css">

  <title>チャプター2 好色悪魔 : Helltaker攻略</title>
</head>
<body>

  <!-- ヘッダー -->
  <?php include('./Header.html'); ?>


  <!-- コンテンツ-->
  <div class="container-fluid">
    <div class="row">
      <!-- サイド コンテンツ -->
      <div class="col-lg-2"></div>

      <!-- メイン コンテンツ-->
      <div class="col-lg-8">

      <h2>チャプター2 好色悪魔</h2>

      <!-- 目次 -->
      <h4 class="content">目次</h4>
      <ul>
        <li><a href="#answer">パズルの解き方</a></li>
        <li><a href="#choices">選択肢</a></li>
        <li><a href="#gamevideo">動画</a></li>
      </ul>

        <!-- パズルの解き方 -->
        <h4 class="content dropdown-bar" id="answer" data-toggle="collapse" data-target="#collapse-answer" aria-controls="collapse-answer">パズルの解き方　▼</h4>
        <div class="collapse show" id="collapse-answer">

          <table class="table-responsive">
            <tr>
              <td class="table-primary">ターン数</td>
              <td class="cell-info">24</td>
            </tr>
            <tr>
              <td class="table-primary">アイテム</td>
              <td class="cell-info">なし</td>
            </tr>
          </table>

          <hr>

          <ul>
            <li>スタート画面</li>
            <img src="./images/chapter2-map.jpg" class="img-fluid" alt="チャプター2マップ" width="850" height="650">
          </ul>

          <hr>

          <ul>
            <li>手順</li>
            <ol>
              <li>→↑↑（トゲ床を踏む）↑（敵を蹴る&トゲ床ダメージ）↑↑（敵を倒す）</li>
              <li>↑→→→↓（トゲ床を踏む）→→↓（ブロックを蹴る）↓↓（もう1度ブロックを蹴る）</li>
              <li>↓←（トゲ床を踏む）←↓（ゴール）</li>
            </ol>
          </ul>
        </div>


        <!-- 選択肢 -->
        <h4 class="content dropdown-bar" id="choices" data-toggle="collapse" data-target="#collapse-choices" aria-controls="collapse-choices">選択肢　▼</h4>
        <div class="collapse show" id="collapse-choices">

          <img src="./images/chapter2-choices.jpg" class="img-fluid" alt="チャプター2選択肢" width="850" height="650">
          <table class="table-responsive">
            <tr>
              <th class="table-primary">選択肢</th>
              <th class="table-primary">備考</th>
            </tr>
            <tr>
              <td class="cell-info">だな。質問は受け付けない。</td>
              <td class="cell-info">バッドエンドへ</td>
            </tr>
            <tr>
              <td class="cell-info">時間がないんだ。ハーレム作りで忙しくてな。</td>
              <td class="cell-info"><a href="./cheatschart_chapter3.php" title="チャプター3 三つ子悪魔">チャプター3 三つ子悪魔</a>へ</td>
            </tr>
          </table>
        </div>

        <!-- 動画 -->
        <h4 class="content dropdown-bar" id="gamevideo" data-toggle="collapse" data-target="#collapse-gamevideo" aria-controls="collapse-gamevideo">動画　▼</h4>
        <div class="embed-responsive embed-responsive-16by9 collapse show" id="collapse-gamevideo">
          <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/sjbl0HmFTiY" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"></iframe>
        </div>
      </div>

      <!-- サイド コンテンツ -->
      <div class="col-lg-2"></div>
    </div>
  </div>

</body>