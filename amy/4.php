<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('./public/head.php');?>
</head>
<body class="a_gallery">
    <?php include('./public/top.php');?>

    <div class="main">
        <div class="zixun">
            <div class="owl-carousel owl-theme">
                <div class="item"><a href=""><img src="./images/test1.png"></a></div>
                <div class="item"><a href=""><img src="./images/test2.png"></a></div>
                <div class="item"><a href=""><img src="./images/test1.png"></a></div>
                <div class="item"><a href=""><img src="./images/test2.png"></a></div>
            </div>
            <script type="text/javascript">
                $('.owl-carousel').owlCarousel({
                    loop:true,
                    margin:10,
                    dots:true,
                    items:1,
                    autoplay:true,
                    autoplayTimeout:3000,
                    autoplayHoverPause:true
                });
            </script>
        </div>
            
        <div class="pagewidth">
            <div class="qianyue">
                <p class="qrcode"><img src="./images/test6.png"></p>
                <p class="have_all">已经有<span style="color:#6cb5ac;">141</span>个画家签约了<span style="color:#d35d68;">画报网</span>商城</p>
                <p class="free">免费让您的作品全国各地巡展</p>
            </div>

            <div class="shengqing">
                <div class="to_shengqing">
                    <p class="gongsi">
                        <span class="hbg">运营方</span>
                        <span class="gsname">画宝网科技有限公司</span>
                        <br>
                        <span class="hbg">会展房</span>
                        <span class="gsname">中国大文博科技有限公司</span>
                    </p>
                    <div class="jianjie">
                        <h5>画宝网艺术品联盟简介</h5>
                        <p class="jjinfo">画宝网艺术品联盟简介画宝网艺术品联盟简介画宝网艺术品联盟简介画宝网艺术品联盟简介画宝网艺术品联盟简介画宝网艺术品联盟简介画宝网艺术品联盟简介画宝网艺术品联盟简介画宝网艺术品联盟简介画宝网艺术品联盟简介画宝网艺术品联盟简介画宝网艺术品联盟简介</p>
                    </div>
                    <input class="sq_btn" type="submit" name="" value="我要申请">
                </div>
                <div class="list_shengqing">
                    <ul>
                        <?php for($i=0;$i<15;$i++){?>
                            <li>
                                <a href=""><img src="./images/test3.png"></a>
                            </li>
                        <?php }?>
                    </ul>
                </div>
                <div class="float_clear"></div>
            </div>

            <ul class="float_clear zxlist">
                <?php for($i=0;$i<20;$i++){?>
                    <li>
                        <a href="">
                            <img src="./images/test5.png">
                            <span class="biao">人工智能</span>
                            <span class="jjitem">人工智能人工智能人工智能人工智能人工智能人工智能人工智能</span>
                        </a>
                    </li>
                <?php }?>
            </ul>
        </div>
        <?php include('./public/pages.php');?>
    </div>
</body>
</html>