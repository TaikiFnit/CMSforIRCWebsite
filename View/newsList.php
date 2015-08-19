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
      </ul>
    </section>
    <section id="alllist">
      <h3>ニュース一覧</h3>
      <ul>
        <?php echo $this->newsLink; ?>
      </ul>
    </section>
  </section>
</main>
