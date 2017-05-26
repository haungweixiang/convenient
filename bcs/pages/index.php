<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>便當系統後台</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="../vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="../vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- 下拉式選單的css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/css/bootstrap-select.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

  <div id="wrapper">

    <!-- 左邊那排 -->
    <?php include 'left.php';?>

    <div id="page-wrapper">
      <div class="row">
        <div class="col-lg-12">
          <h1 class="page-header">菜單</h1>

        </div>
        <!-- /.col-lg-12 -->
      </div>
      <!-- /.row -->
      <div class="row">
        <div class="col-lg-12">
          <div class="panel panel-default">
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
              <div class="panel panel-danger">
                <div class="panel-heading" role="tab" id="headingOne" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  <h4 class="panel-title">
                    新增菜單
                  </h4>
                </div>
                <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                  <div class="panel-body">
                    <form action="../../test.php" method="post" role="form">

                      <div class="form-group">
                        <label>店家名</label>
                        <input type="text" class="form-control" name="new_store_name" placeholder="請輸入店家">
                        <!-- new_store_name 店家名 -->
                      </div>

                      <div class="form-group">
                        <label>電話</label>
                        <input type="text" class="form-control" name="new_phone_number" placeholder="請輸入電話">
                      </div>
                      <!-- new_phone_number 店家 -->

                      <div class="form-group">
                        <label>說明</label>
                        <textarea class="form-control" name="new_description" placeholder="請說明"></textarea>
                      </div>
                      <!-- new_description 說明 -->

                      <div class="form-group">
                        <label>店家圖片上傳</label>
                        <input type="url" name="new_pices_file" class="form-control">
                        <!-- new_pices_file 照片 -->
                      </div>

                      <div class="form-group">
                        <div class="input_fields_wrap">
                          <button class="add_field_button btn btn-info">增加便當欄位</button>
                          <br/>
                          <label>便當</label>
                          <input type="text" class="form-control" name="new_convenient[]" placeholder="請輸入便當">
                          <label>價位</label>
                          <input type="number" class="form-control" name="new_price[]" placeholder="請輸入價位">
                        </div>
                      </div>
                      <button type="submit" class="btn btn-success" name="submit_new_menu">提交上傳</button>
                      <button type="reset" class="btn btn-danger">清除已填項目</button>
                    </form>
                  </div><!-- panel-body -->
                </div>
              </div>

              <div class="panel panel-primary">
                <div class="panel-heading collapsed" role="tab" id="headingTwo"  data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  <h4 class="panel-title">
                    本日菜單
                  </h4>
                </div>
                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                  <div class="panel-body">
                    <form role="form" action="../../test.php" method="post">
                      <div class="form-group">
                        <label>店家名</label>
                        <select class="selectpicker" name="today_storeName">
                          <optgroup label="Picnic">
                            <option value="a">Mustard</option>
                            <option>Ketchup</option>
                            <option>Relish</option>
                          </optgroup>
                          <optgroup label="Camping">
                            <option>Tent</option>
                            <option>Flashlight</option>
                            <option>Toilet Paper</option>
                          </optgroup>
                        </select>
                      </div>

                      <div class="form-group">
                        <label>說明</label>
                        <p class="h5">test test test</p>
                      </div>
                    <img src="http://www.people.com.cn/mediafile/pic/20150216/85/15606292194463751861.jpg" class="img-responsive img-rounded" >
                    <br>
                      <button type="submit" class="btn btn-success" name="today_store_name">送出</button>
                    </form>
                  </div>
                </div>
              </div>
              <div class="panel panel-success">
                <div class="panel-heading collapsed" role="tab" id="headingThree" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  <h4 class="panel-title">
                      總菜單
                  </h4>
                </div>
                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                  <div class="panel-body">
                    <!-- /.row -->
                    <div class="row">
                      <div class="col-lg-12">
                        <div class="panel panel-default">
                          <!-- /.panel-heading -->
                          <div class="panel-body">

                            <form role="form" action="../../test.php" method="post">
                              <div class="form-group">
                                <label>店家名</label>
                                <select class="selectpicker" name="select_store_name">
                                  <optgroup label="Picnic">
                                    <option value="a">Mustard</option>
                                    <option>Ketchup</option>
                                    <option>Relish</option>
                                  </optgroup>
                                  <optgroup label="Camping">
                                    <option>Tent</option>
                                    <option>Flashlight</option>
                                    <option>Toilet Paper</option>
                                  </optgroup>
                                </select>
                                <h5>電話:</h5>
                              </div>

                              <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                  <tr>
                                    <th>店家名</th>
                                    <th>便當</th>
                                    <th>價位</th>
                                    <th>日期</th>
                                    <th></th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr class="odd gradeX">
                                    <td>Trident</td>
                                    <td>Internet Explorer 4.0</td>
                                    <td>Win 95+</td>
                                    <td class="center">4</td>
                                    <td class="center">
                                      <span
                                      class="fa fa-pencil-square-o" aria-hidden="true"
                                      data-toggle="modal"
                                      data-target="#Edit" style="color:#0044BB">
                                      </span>
                                      <span
                                      class="glyphicon glyphicon-remove" aria-hidden="true"
                                      data-toggle="modal"
                                      data-target="#Delete" style="color:red">
                                      </span>
                                    </td>
                                  </tr>
                                  <tr class="even gradeC">
                                    <td>Trident</td>
                                    <td>Internet Explorer 5.0</td>
                                    <td>Win 95+</td>
                                    <td class="center">5</td>
                                    <td class="center">C</td>
                                  </tr>
                                  <tr class="odd gradeA">
                                    <td>Trident</td>
                                    <td>Internet Explorer 5.5</td>
                                    <td>Win 95+</td>
                                    <td class="center">5.5</td>
                                    <td class="center">A</td>
                                  </tr>
                                  <tr class="even gradeA">
                                    <td>Trident</td>
                                    <td>Internet Explorer 6</td>
                                    <td>Win 98+</td>
                                    <td class="center">6</td>
                                    <td class="center">A</td>
                                  </tr>
                                </tbody>
                              </table>
                              <!-- /.table-responsive -->
                            </form>
                            <!-- Edit -->
                            <div id="Edit" class="modal fade" role="dialog">
                              <div class="modal-dialog">
                                <!-- Modal content-->
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">更新便當</h4>
                                  </div>
                                  <div class="modal-body">
                                    <form class="form-horizontal" action="/action_page.php" method="post">
                                      <div class="form-group">
                                        <label class="control-label col-sm-2" for="StoreName">店家</label>
                                        <div class="col-sm-10">
                                          <input type="text" class="form-control" id="StoreName" placeholder="請輸入店家" name="StoreName">
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <label class="control-label col-sm-2" for="StorePhone">電話</label>
                                        <div class="col-sm-10">
                                          <input type="password" class="form-control" id="StorePhone" placeholder="請輸入電話" name="StorePhone">
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <label class="control-label col-sm-2" for="StoreConvenint">便當</label>
                                        <div class="col-sm-10">
                                          <input type="text" class="form-control" id="StoreConvenint" placeholder="請輸入便當" name="StoreConvenint">
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <label class="control-label col-sm-2" for="StorePrice">價位</label>
                                        <div class="col-sm-10">
                                          <input type="number" class="form-control" id="StorePrice" placeholder="請輸入價位" name="StorePrice">
                                        </div>
                                      </div>
                                    </form>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="submit" class="btn btn-danger pull-left" name="submit_up_convenient">更新黑~~~</button>
                                    <button type="button" class="btn btn-info" data-dismiss="modal">關閉</button>
                                  </div><!-- modal-header -->
                                </div><!-- modal-content -->
                              </div><!-- modal-dialog -->
                            </div><!-- #Edit -->
                            <!-- Delete -->
                            <div id="Delete" class="modal fade" role="dialog">
                              <div class="modal-dialog">
                                <!-- Modal content-->
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">確定要刪除此(便當)嗎???</h4>
                                  </div>
                                  <div class="modal-body">
                                    <p></p>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-danger pull-left" data-dismiss="modal" name="submit_de_convenient">刪除</button>
                                    <button type="button" class="btn btn-info" data-dismiss="modal">關閉</button>
                                  </div><!-- modal-header -->
                                </div><!-- modal-content -->
                              </div><!-- modal-dialog -->
                            </div><!-- #Delete -->
                          </div>
                          <!-- /.panel-body -->
                        </div>
                        <!-- /.panel -->
                      </div>
                      <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                  </div><!-- panel-body -->
                </div><!-- collapseThree -->
              </div>
            </div>
          </div><!-- /.panel -->
        </div><!-- panel panel-default -->
      </div><!-- /.row -->
    </div><!-- page-wrapper -->
  </div><!-- /#wrapper -->


    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="../vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="../vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="../vendor/datatables-responsive/dataTables.responsive.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

    <!-- 下拉式選單的js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/js/bootstrap-select.min.js"></script>

    <!-- 下拉式選單的js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/js/i18n/defaults-zh_TW.min.js"></script>
    <!-- 增加欄位 -->
    <script type="text/javascript">

    $(document).ready(function() {
    var max_fields      = 10; //maximum input boxes allowed
    var wrapper         = $(".input_fields_wrap"); //Fields wrapper
    var add_button      = $(".add_field_button"); //Add button ID

    var x = 1; //initlal text box count
    $(add_button).click(function(e){ //on add input button click
        e.preventDefault();
        if(x < max_fields){ //max input box allowed
            x++; //text box increment
            $(wrapper).append('<div><label>便當</label><input type="text" class="form-control" name="new_convenient[]" placeholder="請輸入便當"><label>價位</label><input type="text" class="form-control" name="new_price[]" placeholder="請輸入價位"><a href="#" class="remove_field">Remove</a></div>'); //add input box
        }
    });

    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent('div').remove(); x--;
    })
  });
  </script>
  <!-- 增加欄位 -->

<!-- datatable -->
  <script type="text/javascript">
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
  </script>
  <!-- datatable -->

</body>

</html>
