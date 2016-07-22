<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>
     豆瓣  一刻
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo CSS_PATH;?>mycss/_init_.css" rel="stylesheet">  
    <link href="<?php echo CSS_PATH;?>mycss/app_mobile.css" rel="stylesheet">
</head>

<body>
    
    <div class="bs-header">
      <div class="container">
        <ul class="header-download">
            <li><a href="javascript:;">下载iPhone版</a> 
        </li></ul>
        <div class="nav-logo">
          <a class="logo" href="javascript:;">
            <img width="48" height="48" src="<?php echo IMG_PATH;?>myimages/logo_56.png">
          </a>
          <a class="slogan" href="javascript:;">
          一刻
          <span>豆瓣每日内容精选</span>
          </a>
        </div>
      </div>
    </div>

    <div class="container bs-docs-container">
      
    <div id="top">
        <div class="share">
            分享
          <div id="db-div-sharing" class="share-btns"> 
            <a  href="javascript:;"></a>  
            <a  href="javascript:;" class="rec1"></a> 
            <a  href="javascript:;" class="rec2"></a> 
            <a  href="javascript:;" class="rec3"></a> 
            <a  href="javascript:;" class="rec4"></a> 
            <a  href="javascript:;" class="rec5"></a>  
          </div>
        </div>
        <div style="width: 1px; height: 1px; overflow: hidden;">
            <img src="<?php echo IMG_PATH;?>myimages/weixin_rec.jpg">
        </div>
        <div class="content">
            <div class="logo">
                <img src="<?php echo IMG_PATH;?>myimages/top.png">
                <h1>一刻</h1>
                <p class="slogan">豆瓣每日内容精选</p>
            </div>
            <div class="download">
                
                    <a class="app-store" href="javascript:;">Download on the App Store</a>
                    
            </div>
        </div>
    </div>

    <div id="intro">
        <h2>随时随地 轻松「一刻」</h2>
        <p>每日推送豆瓣内的优质文章、图集、评论、话题等</p>
        <img src="<?php echo IMG_PATH;?>myimages/intro.png" width="90%">
    </div>

    <div id="selection">
        <h2>
            <b>一刻每日精选</b>
            <img src="<?php echo IMG_PATH;?>myimages/selection.png" width="50%">
        </h2>
        <ul>
            <li>
                <h3><a href="<?php echo $CATEGORYS['9']['url'];?>">又见海，初见你</a></h3>
                <p class="meta">玛利亚保佑</p>
                <p class="abstract">又见海，初见你（玛利亚保佑的相册）</p>
            </li>
            
            <li>
                <h3><a href="<?php echo $CATEGORYS['10']['url'];?>">“葛优躺”为什么突然爆红？</a></h3>
                <p class="meta">墙头马上</p>
                <p class="abstract">于是在这样一个燥热的夏天，二混子纪春生的销魂一躺，以一种无厘头的形式，戳中这个时代的G点。</p>
            </li>
            
            <li>
                <h3><a href="<?php echo $CATEGORYS['11']['url'];?>">生活在恐袭阴影下是怎样的体验——伪球迷的欧洲杯手记</a></h3>
                <p class="meta">蝈蝈</p>
                <p class="abstract">那些恐惧，那些悲伤，都在热闹的气氛中一点点消散。音乐声和欢呼声给了这个千疮百孔的国家安慰，给了她生活下去的勇气和希望。</p>
            </li>
            
            <li>
                <h3><a href="<?php echo $CATEGORYS['12']['url'];?>">冰心与知堂</a></h3>
                <p class="meta">齐物秋水</p>
                <p class="abstract">周作人自一九一七年任教于北京大学，后经胡适力荐，又兼任燕京大学新文学系主任。在新的课堂上，日后最知名的学生应该当属冰心了。其时的文坛视冰心为周作人的得意门生，似给人造成的印象乃苦雨斋一脉，而事实上，大约并非如此。</p>
            </li>
            
            <li>
                <h3><a href="<?php echo $CATEGORYS['13']['url'];?>">整形</a></h3>
                <p class="meta">魏庆</p>
                <p class="abstract">“你说下巴是不是打多了？”助理仔细看了一会儿，“应该还好。医生不是说过几天会吸收一些嘛，两周左右就特别自然了。”
“眼皮这儿呢？”“也还好。我觉得。”“你看是不是两边打得不一样多？”“……好像有一点诶。”</p>
            </li>
            
            <li>
                <h3><a href="<?php echo $CATEGORYS['14']['url'];?>">如何在大阪花费600RMB吃一次地道的米其林怀石料理</a></h3>
                <p class="meta">穿裤子的云</p>
                <p class="abstract">打开来，里头是大葱与微炙的白肉鱼搭配浓稠微酸的酱汁，鱼肉非常地有弹性，带点清爽的微甜滋味，大葱十分甜嫩。</p>
            </li>
            
            <li>
                <h3><a href="<?php echo $CATEGORYS['15']['url'];?>">时光流转，游戏四季</a></h3>
                <p class="meta">本格加加</p>
                <p class="abstract">时光荏苒，我从一个没日没夜的闯关族成了一个没日没夜的上班族，又从一个人吃饱全家不饿的单身汉，变得多了一些甜蜜的负担。F2P兴起，世嘉黯然退出，口袋妖怪成了精灵宝可梦，史克威尔和艾尼克斯变成了史克威尔艾尼克斯。</p>
            </li>
            
            <li>
                <h3><a href="<?php echo $CATEGORYS['16']['url'];?>">孤独是一座花园</a></h3>
                <p class="meta">小馅儿</p>
                <p class="abstract">我的毕业创作</p>
            </li>
        </ul>
    </div>  
    </div>

    <div class="footer container">
      <p class="copyright">
        ©&nbsp;2005－2016&nbsp;douban.com, all rights reserved<br>
        北京豆网科技有限公司
      </p>
    </div>
</body>
    <script src="<?php echo JS_PATH;?>myjs/jquery.js"></script>
    <script type="text/javascript" src="<?php echo JS_PATH;?>myjs/dialog.js" async="true">
    </script><script src="<?php echo JS_PATH;?>myjs/_init_.js"></script>
</html>