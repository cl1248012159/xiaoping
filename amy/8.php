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
            <div class="proinfor">
                <div class="zhekou">
                    <img src="./images/zhekou.png">
                    <div class="countdown" id="countdown"></div>
                    <!-- 倒计时工具 -->
                    <script type="text/javascript">
                        countdown('countdown',2018,9,1,23,59,59);
                        function countdown(id,theyear,themonth,theday,thehour,themin,thesec){
                            var id=id;
                            var yr=theyear;
                            var mo=themonth;
                            var da=theday;
                            var ho=thehour;
                            var mi=themin;
                            var se=thesec;
                            var montharray=new Array("Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec");
                            var today=new Date();
                            var todayy=today.getYear();
                            if (todayy < 1000)
                                todayy+=1900;
                            var todaym=today.getMonth();
                            var todayd=today.getDate();
                            var todayh=today.getHours();
                            var todaymin=today.getMinutes();
                            var todaysec=today.getSeconds();
                            var todaystring=montharray[todaym]+" "+todayd+", "+todayy+" "+todayh+":"+todaymin+":"+todaysec;
                            futurestring=montharray[mo-1]+" "+da+", "+yr+" "+ho+":"+mi+":"+se;
                            dd=Date.parse(futurestring)-Date.parse(todaystring);
                            dday=Math.floor(dd/(60*60*1000*24)*1);
                            dhour=Math.floor((dd%(60*60*1000*24))/(60*60*1000)*1);

                            if(0<dhour && dhour<10){dhour="0"+dhour;}
                            dmin=Math.floor(((dd%(60*60*1000*24))%(60*60*1000))/(60*1000)*1);
                            if(0<dmin && dmin<10){dmin="0"+dmin;}
                            dsec=Math.floor((((dd%(60*60*1000*24))%(60*60*1000))%(60*1000))/1000*1);
                            if(0<dsec && dsec<10){dsec = "0"+dsec;}



                            if(dday<=0 && dhour<=0&&dmin<=0&&dsec<=1&&todayd==da){
                                document.getElementById(id).innerHTML='';
                                return;
                            }else if (dday<=-1){
                                document.getElementById(id).innerHTML="";
                                return;
                            }else{
                                var countdown_html = '';
                                if(dday>0){
                                    countdown_html = '<span class="dday">'+dday+'</span>';
                                }
                                countdown_html  +=  '<span class="dhour">'+dhour+'</span>'+
                                    '<span class="dmin">'+dmin+'</span>'+
                                    '<span class="dsec">'+dsec+'</span>';
                                document.getElementById(id).innerHTML = countdown_html;
                                setTimeout(function(){countdown(id,yr,mo,da,ho,mi,se)},1000);
                            }
                        }
                    </script>
                </div>
                <div class="gmdiv">
                    <div class="float_clear gminfo">
                        <ul class="float_clear">
                            <li>
                                <p>市场价</p>
                                <p><span class="martprice">¥10.00</span><span class="danwei">/件</span></p>
                            </li>
                            <li>
                                <p>销售价</p>
                                <p><span class="saleprice">¥5.00 /件</span><span class="wgyh">gyh</span></p>
                            </li>
                            <li>
                                <p>本店活动</p>
                                <p><span class="manjian">满减</span><span class="manjiandesc">满1.00减1.00；</span></p>
                            </li>
                            <li class="guige">
                                <p>规格</p>
                                <p>
                                    <input class="selected" type="button" name="" value="规格">
                                    <input type="button" name="" value="gfds">
                                </p>
                                <script type="text/javascript">
                                    $('.guige input').click(function(){
                                        $('.guige input').removeClass('selected');
                                        $(this).addClass('selected');
                                    });
                                </script>
                            </li>
                            <li>
                                <p>数量</p>
                                <div class="gmqty">
                                    <input type="text" name="" value="1">
                                    <span class="jia">+</span>
                                    <span class="jian">-</span>
                                </div>
                                <p>&nbsp;&nbsp;件 库存93件 </p>   
                                <script type="text/javascript">
                                    $(".gmqty .jia").click(function(){
                                        var qty = $(".gmqty input").val();
                                        $(".gmqty input").val( qty*1+1 );
                                    });
                                    $(".gmqty .jian").click(function(){
                                        var qty = $(".gmqty input").val();
                                        if(qty>1){
                                            $(".gmqty input").val( qty-1 );
                                        }
                                    });
                                </script>
                            </li>
                        </ul>
                        <input class="checkout" type="button" name="" value="立即购买">
                        <input class="addtocart" type="button" name="" value="加入购物车">
                    </div>
                </div>
                <div class="hlcats">
                    <div class="hlcatstitle">本画廊作品分类</div>
                    <ul class="float_clear">
                        <?php for($i=0;$i<3;$i++){?>
                            <li><a href="">推荐作品</a></li>
                            <li><a href="">张三丰［12］</a></li>
                            <li><a href="">鲁迅［12］</a></li>
                        <?php }?>
                    </ul>
                </div>
            </div>
                
        </div>
            

    </div>

       
    
</body>
</html>