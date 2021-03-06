<!-- 1.订单表，订单商品表重做， -->
订单表status加入一个代付款，代发货，已发货，待评价，已完成；         (OK)
成交时间  订单表加字段 时间戳 
2.个人中心订单的遍历:订单号及其ID先查出来，然后订单商品表根据其订单ID查询出其下面的商品        (OK)
3.先查数据库，分类ID放入数组中，删除的分类ID在商品表中根据其查找，如果返回为空，则可以删除     (OK)
4.评论    (OK)
5.后台的评论管理  回复  (OK)
6.后台的订单管理  不能删除订单，只能改变订单状态      (OK)
7.积分  用户信息表增加个积分字段  积分 一块钱=一分  结算时总额-积分的1/100
8.图像 新增数据表 关联user表的ID 
<!-- 9.地址新增删除功能 -->


前台个人中心的订单遍历完成，继续后台的订单管理，然后地址的删除功能未增加(OK)


（OK）后台订单状态改变的操作: 0 未发货 点击后变为1   （默认为0，未发货）
                        1 已发货 点击后强制确认收货，或者卖家点击确认收货 1变为2 
                        2 已完成 无需操作也不能操作 用户可以进行评价,评价后状态改变为4
                        3 已失效 当状态为未发货时，买家可点击取消订单，后台也可进行撤单操作 操作后状态为3
                         已评价 前台无需操作 后台可以进行回复 (评论页面进行连接跳转进行改变状态)
                         后台显示已回复  前台显示交易结束
    订单完成后，销量加,库存减少； （OK）
    跳转到一个新的页面之中 ，然后将表单提交到action页面在进行订单状态的修改
    客户已评价 -> 回复连接到评论管理
    CREATE TABLE IF NOT EXISTS `s47_comment`(
        `id` INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        `og_id` INT UNSIGNED NOT NULL,
        `p_id` INT UNSIGNED NOT NULL,
        `comment` VARCHAR(600) NOT NULL,
        `return` VARCHAR(600) DEFAULT '',
        `status` TINYINT NOT NULL DEFAULT 0
    )ENGINE=InnoDB DEFAULT CHARSET=utf8;
    0 显示评价
    1 不显示评价
    ，订单主页回复后状态的改变，详情页评论的展示
    每个商品都能进行评论

    评论管理遍历循环有误,详情页评论未显示 个人中心缺少评价
    订单搜索 订单的成交时间，在订单表中加字段，


    订单状态与商品评价分离 
------------------------------------------
订单搜素


INSERT INTO `s47_user` VALUES 
('NULL', 'hqwd', 'e10adc3949ba59abbe56e057f20f883e', '18112112787', '2', '111232@qq.com', '1', '0'),
('NULL', 'hewrd', 'e10adc3949ba59abbe56e057f20f883e', '18111122222', '1', '1165@qq.com', '2', '0'),
('NULL', 'htretd', 'e10adc3949ba59abbe56e057f20f883e', '18111312222', '1', '11544@qq.com', '2', '0'),
('NULL', 'llssad', 'e10adc3949ba59abbe56e057f20f883e', '18111112222', '2', '11786@qq.com', '0', '0'),
('NULL', 'hello', 'e10adc3949ba59abbe56e057f20f883e', '18114311222', '1', '1168776@qq.com', '2', '0'),
('NULL', 'love', 'e10adc3949ba59abbe56e057f20f883e', '18111644222', '2', '1167867@qq.com', '2', '0'),
('NULL', 'evening', 'e10adc3949ba59abbe56e057f20f883e', '18111766622', '1', '1145354@qq.com', '2', '0'),
('NULL', 'bill', 'e10adc3949ba59abbe56e057f20f883e', '18111999922', '2', '1123423@qq.com', '2', '0'),
('NULL', 'hapl', 'e10adc3949ba59abbe56e057f20f883e', '18111888222', '1', '112345@qq.com', '2', '0'),
('NULL', 'help', 'e10adc3949ba59abbe56e057f20f883e', '18111198222', '2', '11436@qq.com', '2', '0'),
('NULL', 'login', 'e10adc3949ba59abbe56e057f20f883e', '18117982222', '2', '116547@qq.com', '2', '0'),
('NULL', 'main', 'e10adc3949ba59abbe56e057f20f883e', '18111198722', '1', '116325@qq.com', '2', '0'),
('NULL', 'pubilc', 'e10adc3949ba59abbe56e057f20f883e', '18197812222', '2', '1563117@qq.com', '2', '0'),
('NULL', 'note', 'e10adc3949ba59abbe56e057f20f883e', '18111119872', '1', '111243@qq.com', '2', '0'),
('NULL', 'image', 'e10adc3949ba59abbe56e057f20f883e', '18111134222', '2', '12421@qq.com', '2', '0'),
('NULL', 'phone', 'e10adc3949ba59abbe56e057f20f883e', '18111154322', '2', '12341@qq.com', '2', '0'),
('NULL', 'order', 'e10adc3949ba59abbe56e057f20f883e', '18111112222', '2', '11241@qq.com', '2', '0'),
('NULL', 'goods', 'e10adc3949ba59abbe56e057f20f883e', '18116282222', '1', '19391@qq.com', '2', '0'),
('NULL', 'comment', 'e10adc3949ba59abbe56e057f20f883e', '18119753022', '2', '193871@qq.com', '2', '0'),
('NULL', 'mask', 'e10adc3949ba59abbe56e057f20f883e', '18110864622', '1', '106361@qq.com', '2', '0'),
('NULL', 'today', 'e10adc3949ba59abbe56e057f20f883e', '18111086722', '2', '11947@qq.com', '2', '0'),
('NULL', 'lastday', 'e10adc3949ba59abbe56e057f20f883e', '18111090222', '1', '137561@qq.com', '2', '0'),
('NULL', 'shabi', 'e10adc3949ba59abbe56e057f20f883e', '18111165722', '2', '198761@qq.com', '2', '0'),
('NULL', 'updays', 'e10adc3949ba59abbe56e057f20f883e', '18199812222', '1', '134561@qq.com', '2', '0'),
('NULL', 'uploads', 'e10adc3949ba59abbe56e057f20f883e', '18119012222', '2', '14617@qq.com', '2', '0'),
('NULL', 'cofing', 'e10adc3949ba59abbe56e057f20f883e', '18111454222', '0', '17651@qq.com', '2', '0'),
('NULL', 'myself', 'e10adc3949ba59abbe56e057f20f883e', '18111162222', '2', '131541@qq.com', '2', '0'),
('NULL', 'find', 'e10adc3949ba59abbe56e057f20f883e', '18111116522', '2', '1456761@qq.com', '2', '0'),
('NULL', 'password', 'e10adc3949ba59abbe56e057f20f883e', '18116411222', '1', '1157679@qq.com', '2', '0'),
('NULL', 'text', 'e10adc3949ba59abbe56e057f20f883e', '18115431222', '2', '1178234@qq.com', '2', '0'),
('NULL', 'shopping', 'e10adc3949ba59abbe56e057f20f883e', '18123412222', '1', '114560@qq.com', '2', '0'),
('NULL', 'letgo', 'e10adc3949ba59abbe56e057f20f883e', '18111127522', '2', '11654035@qq.com', '2', '0'),
('NULL', 'shasha', 'e10adc3949ba59abbe56e057f20f883e', '18112346222', '1', '1167940@qq.com', '2', '0');


--------------------------------------------------------------------------
    zan的数量 一个人一个商品只能点一次 先判断然后才能点 数据表重建
    评论管理的搜素没写

