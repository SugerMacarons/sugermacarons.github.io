<html><head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
    <meta content="index,follow" name="Baiduspider">
    <meta content="index,follow" name="robots">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link href="showCase.css" rel="stylesheet" type="text/css">
    <link rel="pingback" href="xmlrpc.php">
    <script src="jquery.min.js"></script>

    <!--[if lt IE 9]>
    <script src="https://www.leapcloud.cn/news/wp-content/themes/miwan/js/html5.js"></script>
    <![endif]-->
</head>
<body>
    <style>

         .case-download-bg{
            background-image:url(bg.jpg);
        }
        .icon{
            background-image:url(ico.jpg);
        }
    </style>
    <div id="maxleap_mask" style="display: none">
        <div class="tips">
            <div class="maxleap_top_tips">点击右上角菜单</div>
            <div class="maxleap_center_tips"><span id="openWay"></span></div>
            <div class="maxleap_bottom_tips">打开并安装应用</div>
        </div>
    </div>
    <div class="case-download-page">
        <div class="case-download-bg">
            <div class="case-download-blank" style="border-left: 768px solid transparent; border-right: 768px solid transparent; border-bottom: 57.76px solid rgb(255, 255, 255);"></div>
            <div class="cases-download-icon">
                <div class="icon" style="height: 79.42px; width: 79.42px;"></div>
                <h2 class="case-download-h">店铺管家</h2>
            </div>
        </div>

        <div class="case-download-info">
            <div class="case-download-buttons">
                 <a style="" href="https://s3.cn-north-1.amazonaws.com.cn/file.maxez.cn/iOS/5f1680a050251400012f4b32/Adhoc/file.plist " target="" class="case-ios">下载安装iOS版</a>
                <a style="" href="http://file.maxez.cn/Android/5f1680a050251400012f4b32/%E7%94%B5%E9%95%80%E4%B9%8B%E5%AE%B6-1.0-2.apk" target="none" class="case-android" target="none" class="case-android">下载安装安卓版</a>
                <a style="display:none" href="" target="none" class="case-mobile">打开微官网版</a>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $(function(){

            var ua = window.navigator.userAgent.toLowerCase();
            $(".icon").height($(window).height()*0.11);
            $(".icon").width($(window).height()*0.11);
            $(".case-download-blank").css("border-left",$(window).width()/2+"px " + "solid transparent");
            $(".case-download-blank").css("border-right",$(window).width()/2+"px " + "solid transparent");
            $(".case-download-blank").css("border-bottom",$(window).height()*0.08+"px " + "solid #fff");

            function isWeixin() {
                if(ua.match(/MicroMessenger/i) == 'micromessenger'){
                    return true;
                }else{
                    return false;
                }
            };

            if(isWeixin()){
                if(ua.indexOf('android') != -1){
                    document.getElementById('openWay').innerHTML = '在 "默认浏览器" 中';
                }
                if(ua.indexOf('iphone') != -1){
                    document.getElementById('openWay').innerHTML = '在 "Safari" 中';
                }
                document.getElementById('maxleap_mask').style.display = 'block';
            }

            if(ua.indexOf('android') != -1){
                document.getElementsByClassName("case-ios")[0].onclick = function(){
                    alert("请在 iOS 设备中打开此链接");
                };
            }
            if(ua.indexOf('iphone') != -1){
                document.getElementsByClassName("case-android")[0].onclick = function(){
                    alert("请在 android 设备中打开此链接");
                };
            }

            var downloadLink = document.getElementsByTagName("a")[0];
        })

    </script>
    <!--SDK-->
    <script type="text/javascript" src="MLTimeline.min.js?bust=4.9"></script>
    <!--SDK USE HELPER-->
    <script type="text/javascript" src="index.min.js"></script>
    <script>
        DataCollection.initialize({
            gaSwitch:false,
            utmSwitch:true
        });
        setTimeout(function () {
            DataCollection.monitor("ViewPage",{
                path:location.href
            });
        },1000);
    </script>



</body></html>