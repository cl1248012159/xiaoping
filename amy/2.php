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
                <a class="daoxiang" href=""><img src="./images/daoxiang.png"></a>
                <ul class="zuopin_nav">
                    <li>
                        <a href=""><span>人物国画</span></a>
                        <dl>
                            <dd>伟人头像</dd>
                            <dd>伟人头像</dd>
                            <dd>伟人头像</dd>
                            <dd>伟人头像</dd>
                            <dd>伟人头像</dd>
                        </dl>
                    </li>
                    <li>
                        <a href=""><span>山水国画</span></a>
                        <dl>
                            <dd>伟人头像</dd>
                            <dd>伟人头像</dd>
                            <dd>伟人头像</dd>
                            <dd>伟人头像</dd>
                            <dd>伟人头像</dd>
                        </dl>
                    </li>
                    <li>花鸟国画</li>
                    <li>刺绣</li>
                    <li>雕塑</li>
                    <li>书法镌刻</li>
                    <li class="special_price"><a href="">特价作品</a></li>
                </ul> 
            </div>
            <div class="float_clear"></div>
        </div>

        <div class="pagewidth bread">
            <ul class="bread_L">
                <li><a href="">作品</a></li>
                <li><a href="">人物国画</a></li>
                <li><a href="">伟人头像</a></li>
            </ul>
            <ul class="bread_R">
                <li class="active"><a href="">推荐作品<i></i></a></li>
                <li><a href="">最新上架<i></i></a></li>
                <li><a href="">浏览最多<i></i></a></li>
                <li class="cancel"><a href="">撤销条件</a></li>
            </ul>
            <div class="float_clear"></div>
        </div>
        <div class="pagewidth list_zuopin">
            <ul>
                <?php for($i=0;$i<20;$i++){?>
                    <li>
                        <div class="zuopin_pic"><a href=""><img src="./images/img_01.png"></a></div>
                        <div class="zuopin_resource">
                            <a href="">
                                <img src="./images/shopimg_01.png">
                                <span>广西大学美术学院</span>
                            </a>
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