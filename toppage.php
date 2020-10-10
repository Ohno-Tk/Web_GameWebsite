<!DOCTYPE html>
<head>
  <!-- 文字コード-->
  <meta charset="utf-8">

  <!-- ライブラリ -->
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

  <!-- 独自css-->
  <link rel="stylesheet" type="text/css" href="css/common.css">
  <link rel="stylesheet" type="text/css" href="css/header.css">

  <title>Enigma攻略サイト</title>
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
        <table class="table collapse show" id="collapse-all-achievement">
          <tr class="cell-title">
            <th>ゲームタイトル</th>
            <th>攻略機種</th>
          </tr>
          <tr>
            <td class="cell-info"><a href="./GameTitle/Helltaker/toppage.php">Helltaker</a></td>
            <td class="cell-info">Steam</td>
          </tr>
          <tr>
            <td class="cell-info"><a href="./GameTitle/SENRENBANKA/toppage.php">千恋＊万花</a></td>
            <td class="cell-info">Steam</td>
          </tr>
        </table>
      </div>

      <!-- サイド コンテンツ -->
      <div class="col-lg-2"></div>
    </div>
  </div>

</body>