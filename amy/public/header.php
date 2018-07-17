<div class="header">
    <div class="pagewidth">
        <div class="logo">
            <a href=""><img src="./images/logo.png"></a>
        </div>
        <div class="search">
            <input type="text" name="" class="input_text">
            <div class="types">
                <div class="cur_type">画廊</div>
                <ul class="l_type">
                    <li>画廊</li>
                    <li>作者</li>
                </ul>
                <script type="text/javascript">
                    $(".cur_type").click(function(){
                        $(".l_type").toggleClass('open');
                    });
                    $(".l_type").click(function(e){
                        $(".l_type").toggleClass('open');
                        $(".cur_type").html(e.target.innerText);
                    });
                </script>
            </div>
            <div class="search_btn">
                <input type="submit" name="" class="input_btn" value=" ">
            </div>
        </div>
        <div class="telphone">
            <img src="./images/telphone.png" alt="">
        </div>
        <div class="tuihuo">
            <img src="./images/tuihuo.png" alt="">
        </div>
        <div class="shopcart">
            <img src="./images/shopcart.png" alt="">
        </div>
        <div class="float_clear"></div>
    </div>
</div>