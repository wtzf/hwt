<?php require './init.php'; ?>

<!DOCTYPE html>
<html lang="cn">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="./imgs/bitcoin-blank.png" type="image/png" sizes="16x16">
    <title>menu</title>

    <!-- Bootstrap -->
    <link href="./public/css/bootstrap.min.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="./public/js/html5shiv.min.js"></script>
    <script src="./public/js/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="./public/admin.css">
</head>
<body>
<div class="mt30"></div>
<div class="panel-group" id="accordion">
  <div class="panel panel-success">
    <div class="panel-heading">
      <a data-toggle="collapse" data-parent="#accordion" href="#menu1">
        <h4 class="panel-title">
          用户管理
        </h4>
      </a>
    </div>
    <div id="menu1" class="panel-collapse collapse">
      <div class="list-group">
          <a href="./user/index.php" target="main" class="list-group-item">前台用户列表</a>
          <a href="./user/add.php" target="main" class="list-group-item">添加前台用户</a>
          <a href="./admin_user/index.php" target="main" class="list-group-item">后台用户列表</a>
          <a href="./admin_user/add.php" target="main" class="list-group-item">添加后台用户</a>
      </div>
    </div>
  </div>

  <div class="mt20"></div>
  <div class="panel panel-success">
    <div class="panel-heading">
      <a data-toggle="collapse" data-parent="#accordion" href="#menu2">
        <h4 class="panel-title">
          分类管理
        </h4>
      </a>
    </div>
    <div id="menu2" class="panel-collapse collapse">
      <div class="list-group">
          <a href="./category/index.php" target="main" target="main" class="list-group-item">分类列表</a>
          <a href="./category/add.php" target="main" target="main" class="list-group-item">添加顶级分类</a>
      </div>
    </div>
  </div>
</div>

  <div class="mt20"></div>
  <div class="panel panel-success">
    <div class="panel-heading">
      <a data-toggle="collapse" data-parent="#accordion" href="#menu3">
        <h4 class="panel-title">
          商品管理
        </h4>
      </a>
    </div>
    <div id="menu3" class="panel-collapse collapse">
      <div class="list-group">
          <a href="./goods/index.php" target="main" class="list-group-item">商品列表</a>
          <a href="./goods/add.php" target="main" class="list-group-item">添加商品</a>
      </div>
    </div>
  </div>
</div>

  <div class="mt20"></div>
  <div class="panel panel-success">
    <div class="panel-heading">
      <a data-toggle="collapse" data-parent="#accordion" href="#menu4">
        <h4 class="panel-title">
          订单管理
        </h4>
      </a>
    </div>
    <div id="menu4" class="panel-collapse collapse">
      <div class="list-group">
          <a href="./order/index.php" target="main" class="list-group-item">订单列表</a>
      </div>
    </div>
  </div>
</div>
<div class="mt20"></div>
  <div class="panel panel-success">
    <div class="panel-heading">
      <a data-toggle="collapse" data-parent="#accordion" href="#menu5">
        <h4 class="panel-title">
          评论管理
        </h4>
      </a>
    </div>
    <div id="menu5" class="panel-collapse collapse">
      <div class="list-group">
          <a href="./comment/index.php" target="main" class="list-group-item">评论列表</a>
      </div>
    </div>
  </div>
</div>




<!-- 此处引入jQuery -->
<script src="./public/js/jquery.min.js"></script>
<!-- bootstrap.min.js必须放在JQ后面 -->
<script src="./public/js/bootstrap.min.js"></script>
</body>
</html>