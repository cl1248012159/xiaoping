<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('./public/head.php');?>
</head>
<body class="a_gallery">
    
    <?php include('./public/top.php');?>

    <div class="qyxx">
        <div class="pagewidth float_clear">
            <div class="qylogo">
                <img src="./images/test9.png">
            </div>
            <div class="qyzh">
                <i class="qyq"></i>
                <i class="qyb"></i>
                <i class="qyp"></i>
                <span class="qyzps">
                    <span class="number">221</span>
                    <span class="num">作品数</span>
                </span>
            </div>
            <img class="qyqrcode" src="./images/test6.png">
        </div> 
    </div>

    <div class="float_clear pagewidth qymain">
        <div class="qyml">
            <ul class="tags">
                <li class="active">推荐作品</li>
                <li>张三丰［12］</li>
                <li>张三丰［12］</li>
                <li>张三丰［12］</li>
                <li>张三丰［12］</li>
                <li>张三丰［12］</li>
                <li>张三丰［12］</li>
                <li>张三丰［12］</li>
                <li>张三丰［12］</li>
                <li>张三丰［12］</li>
            </ul>
            <div class="qymsort">
                <ul>
                    <li>最新上架</li>
                    <li>浏览最多</li>
                </ul>
                <span>作品数：21</span>
            </div>
            <ul class="qyzplist">
                <?php for($i=0;$i<20;$i++){?>
                    <li>
                        <a href="">
                            <img src="./images/img_01.png">
                        </a>
                    </li>
                <?php }?>
            </ul>
        </div>
        <div class="qymr">
            <div class="hlxc">
                <img src="./images/img_01.png">
                <p class="hlxx">
                    <span class="xxlabel">画廊名称</span>
                    <span class="xxcontent">广西维多利亚多瑙河画廊</span>
                </p>
                <p class="hlxx">
                    <span class="xxlabel">画廊地址</span>
                    <span class="xxcontent">广西维多利亚多瑙河画廊121号大楼</span>
                </p>
                <p class="hlxx">
                    <span class="xxlabel">办公电话</span>
                    <span class="xxcontent">123456789</span>
                </p>
            </div>
            <div class="qyzj">
                <div class="qyzjtitle">
                    签约作家
                    <a href="">换一批</a>
                </div>
                <ul class="float_clear qyzjlist">
                    <?php for($i=0;$i<5;$i++){?>
                        <li>
                            <div class="qyzjtx"><img src="./images/img_01.png"></div>
                            <div class="qyzjxq">
                                <p><span class="qyzjmz">李大仙</span><span class="qyzjzc">中国美术家协会会员</span></p>
                                <p class="qyzjjl">阿富汗打击阿凡达绝对拉风多久啊了解到啦积分兑换附近的拉霍福德和服务费很深刻打击阿富汗夹克衫</p>
                            </div>
                        </li>
                    <?php }?>
                </ul>
            </div>
        </div>
    </div>
    <?php include('./public/pages.php');?>
</body>
</html>