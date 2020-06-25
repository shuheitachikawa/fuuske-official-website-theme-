
<!-- 記事の中身（single.phpから呼び出される） -->

  <p class="single-category"><?php echo get_main_title(); ?></p>
  <p class="single-date"><span class="far fa-calendar-times"></span><?php the_time('Y.m.d'); ?></p> 
  <div class="single-item-thumbnail"><?php the_post_thumbnail(array(500,500), array('class' => "single-thumbnail-img")); ?></div>
  <h2 class="txtxxl content-single-title"><?php the_title(); ?><h2>
  <div class="content-single-area">
    <p class="content-single-text"><?php the_content(); ?></p>
  </div>

