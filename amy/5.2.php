<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('./public/head.php');?>
</head>
<body class="a_gallery">

    <?php include('./public/top.php');?>
    <?php include('./public/header.php');?>

    <div class="main">
        <div class="main_top">
            <div class="pagewidth">
                <ul class="zuopin_nav">
                    <?php for($i=0;$i<6;$i++){?>
                        <li>
                            <a href=""><span>书籍</span></a>
                            <dl>
                                <dd>伟人</dd>
                                <dd>头像</dd>
                                <dd>伟人</dd>
                                <dd>头像</dd>
                                <dd>伟人</dd>
                                <dd>头像</dd>
                            </dl>
                        </li>
                    <?php }?>
                    
                    <li class="special_price"><a href="">品牌活动</a></li>
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
        <div class="float_clear pagewidth msyps">
            <ul class="msyps_L">
                <?php for($i=0;$i<24;$i++){?>
                    <li>
                        <a href="">
                            <p class="msyph-image"><img src="./images/test8.png"></p>
                            <p class="msyph-price">¥10.80<span class="oldprice">¥19.8</span></p>
                            <p class="msyph-name">中华。112炭笔（盒）（12支／盒）</p>
                            <p class="msyph-btn">
                                <span class="msyp-sales">销量 25</span>
                                <span class="msyp-repley">评价 3</span>
                                <span class="msyp-fav">收藏</span>
                            </p>
                        </a>
                    </li>
                <?php }?>
            </ul>
            <div class="msyps_R">
                <div class="msyphottitle">热销商品</div>
                <ul class="msyphot">
                    <?php for($i=0;$i<5;$i++){?>
                        <li>
                            <a href="">
                                <p class="msyph-image"><img src="./images/test8.png"></p>
                                <p class="msyph-price">¥10.80</p>
                                <p class="msyph-name">中华。112炭笔（盒）（12支／盒）</p>
                            </a>
                        </li>
                    <?php }?>
                </ul>
            </div>
        </div>
        <?php include('./public/pages.php');?>
    </div>
    
</body>
</html>