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
            <ul class="sort">
                <li class="selected_asc">推荐画廊</li>
                <li class="selected_desc">销售最多</li>
                <li class="select_no">作品最多</li>
            </ul>
            <div class="pagewidth">
                <a class="daoxiang" href=""><img src="./images/daoxiang.png"></a>
            </div>
            <div class="float_clear"></div>
        </div>
        <div class="galleries">
            <?php for($i=0;$i<5;$i++){ ?>
                <div class="gallery">
                    <div class="info_part1">
                        <a href="" class="gallery_logo"><img src="./images/shopimg_01.png"></a>
                        <div class="gallery_addr">
                            <span>广西&nbsp;&nbsp;南宁</span>
                        </div>
                    </div>
                    <div class="info_part2">
                        <div class="gallery_name">广西南宁维多利多瑙河公共画廊</div>
                        <div class="gallery_desc">
                            本画廊是个正规的画廊，欢迎大家前来参观，
                            本画廊是个正规的画廊，欢迎大家前来参观，
                            本画廊是个正规的画廊，欢迎大家前来参观，
                            本画廊是个正规的画廊，欢迎大家前来参观，
                            本画廊是个正规的画廊，欢迎大家前来参观，
                        </div>
                        <div class="gallery_biaozhi">
                            <i class="icon_1"></i>
                            <i class="icon_2"></i>
                            <i class="icon_3"></i>
                            <span class="icon_text">
                                <span class="number">221</span>
                                <span class="num">作品数</span>
                            </span>
                        </div>
                        <div class="gallery_zuozhe">李大光,小天王,孟庭苇,王菲,谢霆锋,李大光,小天王,孟庭苇,王菲,谢霆锋,张李大光,小天王,孟庭苇,王菲,谢霆锋,张</div>
                    </div>
                    <div class="info_part3">
                        <div class="carousel">
                            <div class="owl-carousel owl-theme">
                                <div class="item"><img src="./images/img_01.png"></div>
                                <div class="item"><img src="./images/img_01.png"></div>
                                <div class="item"><img src="./images/img_01.png"></div>
                                <div class="item"><img src="./images/img_01.png"></div>
                                <div class="item"><img src="./images/img_01.png"></div>
                                <div class="item"><img src="./images/img_01.png"></div>
                                <div class="item"><img src="./images/img_01.png"></div>
                                <div class="item"><img src="./images/img_01.png"></div>
                            </div>
                        </div>
                        <div class="to to-next"></div>
                        <div class="to to-prev"></div>
                    </div>
                    <div class="float_clear"></div>
                </div>
            <?php } ?>

            <script type="text/javascript">
                $('.owl-carousel').owlCarousel({
                    loop:true,
                    margin:10,
                    //nav:true,
                    items:1
                });
                $(".to-next").click(function(){
                    $(this).siblings(".carousel").find(".owl-next").trigger('click');
                });
                $(".to-prev").click(function(){
                    $(this).siblings(".carousel").find(".owl-prev").trigger('click');
                });
            </script>
        </div>
        <?php include('./public/pages.php');?>
    </div>


</body>
</html>