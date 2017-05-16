<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>便當系統</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/portfolio-item.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/css/bootstrap-select.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
<?php
  include 'bcs/mysql/connect.php';
  $Today = $TodayMenu($db);//

  if ($Today == false) {

    $TodayID = "(ID)";//顯示本日店家名ID
    $TodayStoreName = "(店家名)";//顯示本日店家名
    $TodayStorePhone = "(電話)";//顯示本日店家電話
    $description = "(待說明)";
    $pic = "http://placehold.it/750x500";

  }else {

    $TodayID = $Today["TodayID"];//顯示本日店家名ID
    $TodayStoreName = $Today["TodayStoreName"];//顯示本日店家名
    $TodayStorePhone = $Today["TodayStorePhone"];//顯示本日店家電話
    $ShowStoreIn = $TodayStoreInformation($db, $TodayStoreName);//把本日店家的所有資訊全部撈出

    if (empty($ShowStoreIn)) {
      $description = "(待說明)";//說明
      $pic = "http://placehold.it/750x500";
    }else {

      $description = $ShowStoreIn["0"]["StroeDescription"];
      $pic = $ShowStoreIn["0"]["StorePic"];
      if (empty($pic)) {
        $pic = "http://placehold.it/750x500";
      }
    }
  }
 ?>
</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><?php echo $TodayStoreName; ?></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse pull-right" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                  <li>
                    <!-- Single button -->
                    <div class="btn-group">
                      <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                        <h4>(會員名)~你好~~<span class="glyphicon glyphicon-user"></span><span class="caret"></span></h4>

                      </button>
                      <ul class="dropdown-menu dropdown-menu-left" role="menu" aria-labelledby="dLabel">
                        <li><a href="center.html">會員中心</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="login.html">登出</a></li>
                      </ul>
                    </div>
                  </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">
      <form class="form-horizontal" action="test.php" method="post">
        <!-- 店家名 -->
        <div class="row">
          <div class="col-lg-12">
            <h1 class="page-header"><?php echo $TodayStoreName; ?>
              <input type="hidden" name="TodayID" value="<?php echo $TodayID;?>">
              <small><?php echo $TodayStorePhone; ?></small>
            </h1>
          </div>
        </div>
        <!-- 店家名 -->

        <!-- 便當資訊-->
        <div class="row">
          <div class="col-md-8">
            <!-- 便當菜單 -->
            <img class="img-responsive" src="<?php echo $pic;?>" alt="">
            <!-- 便當菜單 -->
          </div>

          <div class="col-md-4">
            <h3>說明</h3>
            <p class="h5"><?php echo $description; ?></p>
          <!-- </div> -->
          <br/>

          <!-- <div class="col-md-4"> -->

            <div class="form-group">
              <h3>選擇便當</h3>
              <div class="col-sm-8">
                <!-- Single button -->
                <select class="selectpicker" data-style="btn-danger" name="CP"><!-- CP = convenient price-->
                  <optgroup label="便當+價位">
                    <?php
                      foreach ($ShowStoreIn as $key => $value) {
                     ?>
                    <option value="<?php echo $value['StoreConvenient']."+".$value["SCPrice"]; ?>">
                      <?php echo $value['StoreConvenient']."+".$value["SCPrice"]; ?>
                    </option>
                    <?php } ?>
                  </optgroup>
                </select>
              </div>
            </div>
            <div class="form-group">
              <div class="col-xs-8">
                <h3>數量...?</h3>
                <input type="text" class="form-control" name="number" id="number" placeholder="請輸入數量">
              </div>
            </div>

            <div class="form-group">
              <div class="col-xs-8">
                <h3>我是誰...?</h3>
                <input type="text" class="form-control" id="name" placeholder="(抓取會員名)">
              </div>
            </div>

            <div class="form-group">
              <div class="col-sm-2 col-xs-5">
                <button type="submit" class="btn btn-success">送出</button>
              </div>
            </div>

          </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <footer>
          <div class="row">
            <div class="col-lg-12">
              <p>By: &copy; Your Website 2014</p>
            </div>
          </div>
          <!-- /.row -->
        </footer>
      </form>
    </div>
    <!-- /.container -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/js/bootstrap-select.min.js"></script>
</body>
</html>
