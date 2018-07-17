<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('./public/head.php');?>
</head>
<body>
    <?php include('./public/top.php');?>
    <?php include('./public/header.php');?>

    <div class="main">
        <div class="main_top">
            <div class="pagewidth">
                <ul class="artist_select">
                    <li class="active">
                        <span>作品分类</span>
                        <dl>
                            <dd><a href="">作品分类</a></dd>
                            <dd><a href="">作品分类</a></dd>
                            <dd><a href="">作品分类</a></dd>
                            <dd><a href="">作品分类</a></dd>
                            <dd><a href="">作品分类</a></dd>
                        </dl>
                    </li>
                    <li>
                        <span>所在省份</span>
                        <dl>
                            <dd><a href="">安徽</a></dd>
                            <dd><a href="">上海</a></dd>
                            <dd><a href="">江苏</a></dd>
                            <dd><a href="">浙江</a></dd>
                            <dd><a href="">北京</a></dd>
                        </dl>
                    </li>
                    <li>
                        <span>职称头衔</span>
                        <dl>
                            <dd><a href="">资深</a></dd>
                            <dd><a href="">高级</a></dd>
                            <dd><a href="">中级</a></dd>
                            <dd><a href="">初级</a></dd>
                            <dd><a href="">菜鸟</a></dd>
                        </dl>
                    </li>
                </ul>
                <ul class="artist_sort">
                    <li>销售最多</li>
                    <li>作品最多</li>
                </ul>
                <div class="float_clear"></div>
            </div>
        </div>

        <div class="pagewidth artist">
            <ul>
                <?php for($i=0;$i<20;$i++){?>
                <li>
                    <div class="zhanwei"><!--占位符--></div>
                    <div class="art">
                        <img src="./images/test4.png">
                        <p class="zuopin_num">
                            <span class="label">作品</span>
                            <br>
                            <span class="number">231</span>
                        </p>
                        <div class="artist_info">
                            <div class="artist_name">刘一刀</div>
                            <div class="artist_gallery">广西大学美术学院</div>
                        </div>
                    </div>
                </li>
                <?php }?>
            </ul>
            <div class="float_clear"></div>
        </div>

        <?php include('./public/pages.php');?>
    </div>
    
</body>
</html>