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
        <div class="pagewidth float_clear four_banner">
            <?php for($i=0;$i<4;$i++){?>
                <a href=""><img src="./images/test7.png"></a>
            <?php }?>
        </div>

        <div class="pagewidth gmlist">
            <?php for($i=0;$i<3;$i++){?>
                <div class="gmblock">
                    <div class="gmbtitle">
                        家用电器
                        <a href="">更多</a>
                    </div>
                    <ul class="gmblist">
                        <?php for($j=0;$j<10;$j++){ ?>
                            <li class="gmbitem">
                                <a href="">
                                    <img src="./images/img_01.png">
                                    <span class="gmbiname">Skyworth/ 55H5 55寸智能网络液晶平板wifi电视机官方旗舰店</span>
                                    <span class="gmbiprice">¥2600.00</span>
                                </a>
                            </li>
                        <?php }?>
                    </ul>
                    <div class="float_clear"></div>
                </div>
            <?php } ?>
        </div>
        <?php include('./public/pages.php');?>
    </div>
    
</body>
</html>