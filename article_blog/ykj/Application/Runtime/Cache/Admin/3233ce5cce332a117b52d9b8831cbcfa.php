<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>后台管理</title>
    <link rel="stylesheet" type="text/css" href="http://localhost/ykj/Application/Admin/Public/css/common.css"/>
    <link rel="stylesheet" type="text/css" href="http://localhost/ykj/Application/Admin/Public/css/main.css"/>
    <script type="text/javascript" src="http://localhost/ykj/Application/Admin/Public/js/libs/modernizr.min.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery.js"></script>
</head>
<body>
<div class="topbar-wrap white">
    <div class="topbar-inner clearfix">
        <div class="topbar-logo-wrap clearfix">
            <h1 class="topbar-logo none"><a href="index.html" class="navbar-brand">后台管理</a></h1>
            <ul class="navbar-list clearfix">
                <li><a class="on" href="/ykj/index.php/Admin/Index/index">首页</a></li>
                <li><a href="#" target="_blank">网站首页</a></li>
            </ul>
        </div>
        <div class="top-info-wrap">
            <ul class="top-info-list clearfix">
                <li>管理员：<span style="color:blue;"><?php echo (session('username')); ?></span></li>
                <li><a href="/ykj/index.php/Admin/Admin/edi">修改密码</a></li>
                <li><a href="/ykj/index.php/Admin/Login/logout">退出</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="container clearfix">
    <div class="sidebar-wrap">
        <div class="sidebar-title">
            <h1>菜单</h1>
        </div>
        <div class="sidebar-content">
            <ul class="sidebar-list">
                <li>
                    <a href="#"><i class="icon-font">&#xe003;</i>常用操作</a>
                    <ul class="sub-menu">
                        <!-- <li><a href="design.html"><i class="icon-font">&#xe008;</i>作品管理</a></li> -->
                        <li><a href="/ykj/index.php/Admin/Article/lst"><i class="icon-font">&#xe005;</i>文章管理</a></li>
                        <li><a href="/ykj/index.php/Admin/Cate/lst"><i class="icon-font">&#xe006;</i>分类管理</a></li>
                        <!-- <li><a href="design.html"><i class="icon-font">&#xe004;</i>留言管理</a></li>
                        <li><a href="design.html"><i class="icon-font">&#xe012;</i>评论管理</a></li> -->
                        <li><a href="/ykj/index.php/Admin/Link/lst"><i class="icon-font">&#xe052;</i>友情链接</a></li>
                        <li><a href="/ykj/index.php/Admin/Admin/lst"><i class="icon-font">&#xe033;</i>管理员管理</a></li>
                    </ul>
                </li>
               <!--  <li>
                    <a href="#"><i class="icon-font">&#xe018;</i>系统管理</a>
                    <ul class="sub-menu">
                        <li><a href="system.html"><i class="icon-font">&#xe017;</i>系统设置</a></li>
                        <li><a href="system.html"><i class="icon-font">&#xe037;</i>清理缓存</a></li>
                        <li><a href="system.html"><i class="icon-font">&#xe046;</i>数据备份</a></li>
                        <li><a href="system.html"><i class="icon-font">&#xe045;</i>数据还原</a></li>
                    </ul>
                </li> -->
            </ul>
        </div>
    </div>

    <!--/sidebar-->
    <div class="main-wrap">

        <div class="crumb-wrap">
            <div class="crumb-list"><i class="icon-font"></i><a href="/jscss/admin">首页</a><span class="crumb-step">&gt;</span><span class="crumb-name">文章管理</span></div>
        </div>
        <div class="search-wrap">
            <div class="search-content">
                <form action="/jscss/admin/design/index" method="post">
                    <table class="search-tab">
                        <tr>
                            <th width="120">选择分类:</th>
                            <td>
                                <select name="search-sort" id="">
                                    <option value="">全部</option>
                                    <option value="19">精品界面</option><option value="20">推荐界面</option>
                                </select>
                            </td>
                            <th width="70">关键字:</th>
                            <td><input class="common-text" placeholder="关键字" name="keywords" value="" id="" type="text"></td>
                            <td><input class="btn btn-primary btn2" name="sub" value="查询" type="submit"></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
        <div class="result-wrap">
            <form name="myform" id="myform" method="post" action="/ykj/index.php/Admin/Article/sort">
                <div class="result-title">
                    <div class="result-list">
                        <a href="/ykj/index.php/Admin/Article/add"><i class="icon-font"></i>新增文章</a>
                        <a id="batchDel" href="javascript:void(0)"><i class="icon-font"></i>批量删除</a>
                    </div>
                </div>
                <div class="result-content">
                    <table class="result-tab" width="100%">
                        <tr>
                            <th class="tc" width="5%"><input class="allChoose" name="" type="checkbox"></th>
                            <!-- <th>排序</th> -->
                            <th>ID</th>
                            <th width="10%">文章标题</th>
                            <th width="15%">文章缩略图</th>
                            <th width="50%">文章描述</th>
                            <th>文章对应分类</th>
                            <!-- <th>审核状态</th>
                            <th>点击</th>
                            <th>发布人</th>
                            <th>更新时间</th>
                            <th>评论</th> !-->
                            <th>操作</th>
                        </tr>
                        <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                                <td class="tc"><input name="id[]" value="59" type="checkbox"></td>
                                <!-- <td>
                                    <input class="common-input sort-input" name="<?php echo ($vo["id"]); ?>" value="<?php echo ($vo["sort"]); ?>" type="text">
                                </td> -->
                                <td><?php echo ($vo["id"]); ?></td>
                                <td title="<?php echo ($vo["title"]); ?>"><?php echo ($vo["title"]); ?></td>
                                <td title="<?php echo ($vo["pic"]); ?>">
                                <?php if($vo['pic'] != ''): ?><img src="/ykj/<?php echo ($vo["pic"]); ?>" height="30px">
                                <?php else: ?>暂无缩略图<?php endif; ?>
                                </td>
                                <td title="<?php echo ($vo["descr"]); ?>"><?php echo ($vo["descr"]); ?></td>
                                <td><?php echo ($vo["catename"]); ?></td>

                                <!-- <td>0</td>
                                <td>2</td>
                                <td>admin</td>
                                <td>2014-03-15 21:11:01</td>
                                <td></td> -->
                                <td>
                                    <a class="link-update" href="/ykj/index.php/Admin/Article/edi/id/<?php echo ($vo["id"]); ?>">修改</a>
                                    <a class="link-del" onclick="return confirm('确定要删除吗')" href="/ykj/index.php/Admin/Article/del/id/<?php echo ($vo["id"]); ?>">删除</a>
                                </td>
                            </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                    </table>    
                    <div class="list-page"><?php echo ($show); ?></div>
                </div>
            </form>
        </div>
    </div>
    <!--/main-->
</div>
</body>
</html>