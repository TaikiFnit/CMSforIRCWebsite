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
      <li>
        <p>&gt;</p>
      </li>
      <li><a href="/news/<?php echo $this->year; ?>/<?php echo $this->news_id; ?>">
        <p><?php echo $this->title; ?></p>
        </a></li>
    </ol>
  </div>
  <section>
    <h2 class="border">ニュース</h2>
    <section id="news">
      <h3><?php echo $this->title; ?></h3>
      <p>
        <time datetime="<?php echo $this->created; ?>"><?php echo $this->jpcreated; ?></time>
      </p>
      <p id="newsText"><?php echo $this->content; ?></p>
      <p>記載<?php echo $this->author; ?></p>
      <?php echo $this->imageArea; ?>
      <p id="back"><a href="/news/<?php echo $this->year; ?>"><?php echo $this->year; ?>年ニュース一覧へ</a></p>
    </section>
    <section id="alllist">
      <h3>ニュース一覧</h3>
      <ul>
        <?php echo $this->newsLink; ?>
      </ul>
    </section>
  </section>
</main>
