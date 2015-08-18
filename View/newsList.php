<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>情報研究部</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="/stylesheets/common.css">
<link rel="shortcut icon" href="/images/fav.ico">
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-66392218-1', 'auto');
  ga('send', 'pageview');

</script>
</head>

<body>
<header role="banner">
  <div class="container">
    <h1><a href="http://miyagi-th.myswan.ne.jp/"><img src="/images/mth2.png" alt="宮城県工業高等学校" id="h1_one"></a><a href="/index.html"><img src="/images/logo.png" alt="情報研究部" id="h1_two"></a></h1>
    <nav>
      <ul>
        <li><a href="/index.html">
          <div class="nav">
            <div class="nav_icon"><img src="/images/home.gif" alt="ホーム"></div>
            <div class="nav_text">HOME</div>
          </div>
          </a></li>
        <li><a href="/club.html">
          <div class="nav">
            <div class="nav_icon"><img src="/images/about.gif" alt="部について"></div>
            <div class="nav_text">部について</div>
          </div>
          </a></li>
        <li><a href="2015.html">
          <div class="nav">
            <div class="nav_icon"><img src="/images/news.gif" alt="ニュース"></div>
            <div class="nav_text">ニュース</div>
          </div>
          </a></li>
        <li><a href="/works.html">
          <div class="nav">
            <div class="nav_icon"><img src="/images/product.gif" alt="作品紹介"></div>
            <div class="nav_text">作品紹介</div>
          </div>
          </a></li>
        <li><a href="/record.html">
          <div class="nav">
            <div class="nav_icon"><img src="/images/record.gif" alt="受賞記録"></div>
            <div class="nav_text">受賞記録</div>
          </div>
          </a></li>
      </ul>
    </nav>
  </div>
</header>
<main role="main">
  <div id="topic_path">
    <ol>
      <li><a href="/index.html">
        <p>HOME</p>
        </a></li>
      <li>
        <p>&gt;</p>
      </li>
      <li><a href="/news/<?php echo $this->year; ?>">
        <p>ニュース <?php echo $this->year; ?>年</p>
        </a></li>
    </ol>
  </div>
  <section id="contents">
    <h2 class="border">ニュース一覧</h2>
    <section id="newslist">
      <h3><?php echo $this->year; ?>年</h3>
      <ul>
      <?php echo $this->newsList; ?>
      <!--li><a href="news/2015_6.html">
          <div>
            <p>
              <time datetime="2015-08-17">2015年8月17日</time>
            </p>
            <p><span class="irc">IRC</span></p>
          </div>
          <p class="newstitle">情報研究部の夏！</p>
          </a>
      </li>
      <li><a href="news/2015_5.html">
          <div>
            <p>
              <time datetime="2015-08-17">2015年8月17日</time>
            </p>
            <p><span class="web">ウェブ班</span></p>
          </div>
          <p class="newstitle">第53回技能五輪全国大会本戦出場決定</p>
          </a></li>
        <li><a href="news/2015_4.html">
          <div>
            <p>
              <time datetime="2015-08-16">2015年8月16日</time>
            </p>
            <p><span class="irc">IRC</span></p>
          </div>
          <p class="newstitle">ウェブサイトリニューアルのお知らせ</p>
          </a></li>
        <li><a href="news/2015_3.html">
          <div>
            <p>
              <time datetime="2015-01-24">2015年1月24日</time>
            </p>
            <p><span class="soft">ソフト班</span></p>
          </div>
          <p class="newstitle">宮城県産業教育高校生コンピュータ・ソフトコンテスト 審査結果</p>
          </a></li>
        <li><a href="news/2015_2.html">
          <div>
            <p>
              <time datetime="2015-01-22">2015年1月22日</time>
            </p>
            <p><span class="irc">IRC</span></p>
          </div>
          <p class="newstitle">ラーメン二郎の本店に行きました!</p>
          </a></li>
        <li><a href="news/2015_1.html">
          <div>
            <p>
              <time datetime="2015-01-22">2015年1月22日</time>
            </p>
            <p><span class="irc">IRC</span></p>
          </div>
          <p class="newstitle">BCN ITジュニア賞 2015を受賞しました。</p>
          </a></li-->
      </ul>
    </section>
    <section id="alllist">
      <h3>ニュース一覧</h3>
      <ul>
        <?php echo $this->newsLink; ?>
        <!--li>
          <p class="triangle"><a href="2015.html">2015年</a></p>
        </li>
        <li>
          <p class="triangle"><a href="2014.html">2014年</a></p>
        </li>
        <li>
          <p class="triangle"><a href="2013.html">2013年</a></p>
        </li>
        <li>
          <p class="triangle"><a href="2012.html">2012年</a></p>
        </li-->
      </ul>
    </section>
  </section>
</main>
<footer role="contentinfo">
  <ul>
    <li><a href="/index.html">ホーム</a></li>
    <li><a href="/club.html">部について</a></li>
    <li><a href="2015.html">ニュース</a></li>
    <li><a href="/works.html">作品紹介</a></li>
    <li><a href="/record.html">受賞記録</a></li>
  </ul>
  <p><a href="http://miyagi-th.myswan.ne.jp/"><img src="/images/mth.png" alt="宮城県工業高等学校"></a></p>
  <p><small>Miyagi Technical High School-IRC All rights reserved.</small></p>
</footer>
</body>
</html>