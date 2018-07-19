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

    <div class="main product">
        <div class="pagewidth bread">
            <ul class="bread_L">
                <li><a href="">画廊</a></li>
                <li><a href="">广西维多利亚多瑙河画廊</a></li>
                <li><a href="">美丽的女人</a></li>
            </ul>
        </div>
        <div class="float_clear pagewidth proinfo">
            <div class="proinfol">
                <table>
                    <tr>
                        <th>作品名称</th>
                        <td>《美丽的女人》 2015年10月创作</td>
                    </tr>
                    <tr>
                        <th>作者信息</th>
                        <td>李大光 ｜ 国家一级画师</td>
                    </tr>
                    <tr>
                        <th>作者简介</th>
                        <td class="jjdesc">作者简介作者简介作者简介作者简介作者简介作者简介作者简介作者简介作者简介作者简介作者简介作者简介作者简介作者简介作者简介作者简介作者简介作者简介作者简介作者简介作者简介作者简介作者简介作者简介作者简介作者简介作者简介作者简介</td>
                    </tr>
                </table>

                <div class="proimages">
                    <div class="bigimage">
                        <img src="./images/test10.png">
                    </div>
                    <div class="smallimages">
                        <div class="owl-carousel owl-theme">
                            <div class="item"><img src="./images/test10.png"></div>
                            <div class="item"><img src="./images/test8.png"></div>
                            <div class="item"><img src="./images/test10.png"></div>
                            <div class="item"><img src="./images/test8.png"></div>
                        </div>
                        <script type="text/javascript">
                            $('.owl-carousel').owlCarousel({
                                loop:true,
                                margin:10,
                                nav:true,
                                dots:false,
                                items:4
                            });
                            $(".smallimages img").click(function(){
                                $('.bigimage img').attr('src',$(this).attr('src'));
                            });
                            $(".smallimages owl-next").click(function(){
                                $('.bigimage img').attr('src',$(this).attr('src'));
                            });
                        </script>
                    </div>
                </div>
                
                <div class="profav">
                    收藏商品（0人气）
                </div>

                <div class="desctab">
                    <ul class="float_clear tablis">
                        <li class="active">商品详情</li>
                        <li>商品属性</li>
                        <li>累计评论</li>
                        <li>购买咨询</li>
                    </ul>
                    <div class="desctabs">
                        <div class="active">1</div>
                        <div>2</div>
                        <div>3</div>
                        <div>4</div>
                    </div>
                    <script type="text/javascript">
                        $(".tablis li").click(function(){
                            var $index = $(this).index();
                            $(".tablis>li").removeClass('active');
                            $(this).addClass('active');
                            $('.desctabs>div').removeClass('active');
                            $('.desctabs>div').eq($index).addClass('active').show();
                        });
                    </script>
                </div>

            </div>
            <div class="proinfor"></div>
                
        </div>
            

    </div>

       
    
</body>
</html>