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
        <div class="float_clear four_banner">
            <?php for($i=0;$i<4;$i++){?>
                <a href=""><img src="./images/test7.png"></a>
            <?php }?>
        </div>
    </div>
    
</body>
</html>