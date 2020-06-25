
<!-- 記事一覧の中身（archive.phpに呼び出される） -->
<li class="content-archive-item" >
  <a href="<?php the_permalink(); ?>">
    <div>
      <div class="archive-item-thumbnail"><?php the_post_thumbnail(array(100,100), array('class' => "archive-thumbnail-img")); ?></div>
      <time class="archive-item-date"><?php the_time('Y.m.d'); ?></time>
      <p class="archive-item-title"><?php the_title(); ?></p>
    </div>
  </a>

</li>
              
