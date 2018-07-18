<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('./public/head.php');?>
</head>
    
<body class="a_gallery">
    
    <?php include('./public/top.php');?>

    <div class="ysj">
        <div class="pagewidth float_clear">
            <div class="ysjtx">
                <img src="./images/img_01.png">
                <div class="btns">
                    <a href="">
                        + 关注
                    </a>
                    <a href="">
                        @ 私信
                    </a>
                </div>
            </div>
            <div class="ysjjs">
                <div class="ysjname">马然而</div>
                <div class="ysjzc">
                    <ul class="float_clear">
                        <li class="ld">中国美术家协会会员</li>
                        <li class="ld">河南省美术家协会理事</li>
                        <li class="ld">军旅画家</li>
                        <li>国画</li>
                        <li>丹青</li>
                        <li>技能标签</li>
                    </ul>
                    <p class="ysjjj">画廊成立于2010年，目前签约画家有14画廊成立于2010年，目前签约画家有14画廊成立于2010年，目前签约画家有14画廊成立于2010年，目前签约画家有14画廊成立于2010年，目前签约画家有14画廊成立于2010年，目前签约画家有14画廊成立于2010年，目前签约画家有14画廊成立于2010年，目前签约画家有14</p>
                </div>
            </div>
            <img class="qyqrcode" src="./images/test6.png">
        </div>
    </div>

    <div class="float_clear pagewidth qymain">
        <div class="qyml">
            <div class="float_clear ysjsort">
                <ul class="">
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
            <div class="ysjnb">
                <div class="ysjnbtitle">艺术家年表</div>
                <table class="ysjnbtab">
                    <?php for($i=0;$i<5;$i++){ ?>
                        <tr>
                            <th>1998年</th>
                            <td>获得了杰出青年奖</td>
                        </tr>
                    <?php }?>
                </table>
            </div>
        </div>
    </div>
    <?php include('./public/pages.php');?>
</body>
</html>