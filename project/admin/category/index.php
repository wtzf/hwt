<?php 
    require '../init.php';
    //接收PID
    $pid = empty($_GET['pid'])?0:$_GET['pid'];
    //SQL
    $sql = "SELECT `id`,`cname`,`pid`,`path`,`display` FROM ".PRE."category WHERE `pid`='$pid'";
    $list = query($link, $sql);
    // p($list);exit;
?>

<!DOCTYPE html>
<html lang="cn">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>cate-list</title>

    <!-- Bootstrap -->
    <link href="../public/css/bootstrap.min.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="../public/js/html5shiv.min.js"></script>
    <script src="../public/js/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="../public/admin.css">
</head>
<body>
<div class="container">
    <div class="row">
        <h1><b>分类管理</b></h1>

        <table class="table table-bordered table-hover h4">
            <tr>
                <th class=" text-center">ID</th>
                <th class=" text-center">分类名</th>
                <th class=" text-center">pid</th>
                <th class=" text-center">path</th>
                <th class=" text-center">是否显示</th>
                <?php 
                $sql = "SELECT `pid` FROM ".PRE."category WHERE `id`='$pid'";
                $row = query($link, $sql);
                $ppid = $row[0]['pid'];
                 ?>
                <th  class=" text-center">相关操作 &nbsp;&nbsp;&nbsp;
                <a href="./index.php?pid=<?php echo $ppid ?>" class="btn btn-warning btn-sm">返回</a>

                </th>
            </tr>
            <?php if (empty($list)): ?>
                <tr>
                    <td colspan="6">
                        <h3 class="text-center">
                            <label class="label label-danger">暂无数据</label>
                        </h3>
                    </td>
                </tr>
            <?php else: ?>
                <?php foreach ($list as $val): ?>
                    <tr class=" text-center">
                        <td><?php echo $val['id'] ?></td>
                        <td><?php echo $val['cname'] ?></td>
                        <?php 
                        //根据PID查询出父级的ID,名称
                        if ($val['pid'] != 0) {
                            $sql = "SELECT `cname` FROM ".PRE."category WHERE `id`='".$val['pid']."'";
                            $row = query($link, $sql);
                            $pname = $row[0]['cname'];
                            // p($row);
                        }
                         ?>
                        <td><?php echo isset($pname)?$pname:$val['pid']; ?></td>
                        <td><?php echo $val['path'] ?></td>
                        <td>
                            <a href="./action.php?a=display&display=<?php echo $val['display']?>&id=<?php echo $val['id'] ?>">
                            <?php echo $val['display']==0?'<span class="glyphicon glyphicon-remove"></span>':'<span class="glyphicon glyphicon-ok"></span>'; ?>
                            </a>
                        </td>
                        <td>
                            <!-- 查看子类,当前类的ID就变为PID,所以传递的是PID -->
                            <a href="./index.php?pid=<?php echo $val['id'] ?>" class="btn btn-info">查看子类</a>

                            <!-- 添加子类,当前类的ID就变为PID,所以传递的是PID -->
                            <a href="./add.php?pid=<?php echo $val['id'] ?>&path=<?php echo $val['path'] ?>" class="btn btn-success">添加子类</a>

                            <!-- 编辑 自己做-->
                            <a href="./edit.php?id=<?php echo $val['id'] ?>" class="btn btn-primary">编辑</a>

                            <!-- 删除 -->
                            <a href="./action.php?a=del&id=<?php echo $val['id'] ?>&pid=<?php echo $val['pid'] ?>&path=<?php echo $val['path'] ?>" class="btn btn-danger">删除</a>
                        </td>
                    </tr>
                <?php endforeach ?>
            <?php endif ?>
        </table>
    </div>
</div>


    <!-- 此处引入jQuery -->
    <script src="../public/js/jquery.min.js"></script>
    <!-- bootstrap.min.js必须放在JQ后面 -->
    <script src="../public/js/bootstrap.min.js"></script>
</body>
</html>

        

