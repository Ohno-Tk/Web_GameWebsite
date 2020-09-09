<!DOCTYPE html>
<head>
  <!-- 文字コード-->
  <meta charset="utf-8">
  <meta http-equiv="Content-Script-Type" content="text/javascript">

  <!-- ライブラリ  jquery-->
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

  <!-- ライブラリ  bootstrap-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  <!-- 独自css-->
  <link rel="stylesheet" type="text/css" href="../../css/common.css">
  <link rel="stylesheet" type="text/css" href="../../css/toppage.css">
  <link rel="stylesheet" type="text/css" href="../../css/header.css">
  <link rel="stylesheet" type="text/css" href="css/header-background.css">

  <title>Helltaker攻略 : Enigma攻略サイト</title>
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

        <p>Steam用ソフト「Helltaker」の攻略サイトです。</p>

        <h2 class="main_content" data-toggle="collapse" data-target="#collapse-game-info" aria-controls="collapse-game-info">ゲーム情報　▼</h2>

        <!-- ゲーム情報 -->
        <table class="table-responsive collapse show" id="collapse-game-info">
            <tr>
              <td rowspan="4">
                <img src="Images\gametitle.jpg" alt="Images\gametitle.jpg" width="150" height="150">
              </td>
              <td class="game-info-cell">タイトル</td>
              <td>Helltaker</td>
            </tr>
            <tr>
              <td class="game-info-cell">機種</td>
              <td>Steam</td>
            </tr>
            <tr>
              <td class="game-info-cell">ジャンル</td>
              <td>パズル</td>
            </tr>
            <tr>
              <td class="game-info-cell">公式サイト</td>
              <td><a href="https://store.steampowered.com/app/1289310/Helltaker/" rel="nofollow">https://store.steampowered.com/app/1289310/Helltaker/</a></td>
            </tr>
        </table>

        <!-- 公式Twitter -->
        <h2 class="main_content" data-toggle="collapse" data-target="#collapse-official-info" aria-controls="collapse-official-info">Helltaker 公式Twitter　▼</h2>
        <nav class="table-responsive collapse show" id="collapse-official-info">
          <a class="twitter-timeline" data-lang="ja"  data-height="800" data-theme="light" href="https://twitter.com/vanripperart?ref_src=twsrc%5Etfw">
            Tweets by vanripperart
          </a>
          <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
        </nav>
      </div>

      <!-- サイド コンテンツ -->
      <div class="col-lg-2"></div>
    </div>
  </div>

</body>