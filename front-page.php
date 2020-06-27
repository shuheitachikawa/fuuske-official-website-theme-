<?php get_header(); ?>


  
  <!-- メイン写真セクション -->
  <section class = "main-visual">
    <div class="main-image-area">
      <img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" class="main-img">

        <!-- イベント情報 -->
      <div class="top-event-area">
      <?php
      $event_posts = get_specific_posts('live',null,-1);
    if($event_posts->have_posts()):
    ?>
      <p class="top-event-title">LIVE Information</p>
    <?php
      while($event_posts->have_posts()):
        $event_posts->the_post();
    ?>
        <a class="top-event-content" href="<?php the_permalink(); ?>">
          <p class="top-event-items top-event-name">『<?php the_title(); ?>』</p><br class="br-sp">
          <p class="top-event-items top-event-place">　日時：<?php the_field('date'); ?></p>
          <p class="top-event-items top-event-date"> 会場：<?php the_field('place'); ?></p>
        </a>
    <?php
      endwhile;
      wp_reset_postdata();
    endif;
    ?>
      </div>
    </div>


  </section>
  
  <section class="sns-wrapper">
    <div class="sns-area-top">
      <p>SNS Account</p>
      <ul>
        <li><a class="fab fa-facebook fa-2x" href="https://rua.jp/f/621195244594793" target=”_blank”></a></li>
        <li><a class="fab fa-instagram fa-2x" href="https://rua.jp/i/fuuske_life" target=”_blank”></a></li>
        <li><a class="fab fa-youtube fa-2x" href="https://www.youtube.com/channel/UCqmZWnDKLpt3QqZvcz6SkLg" target=”_blank”></a></li>
      </ul>
    </div>
  </section>


  <!-- コンテンツセクション -->
  <section class="contents">


    <!--ニュース一覧表示エリア-->
    <div class="content news-wrapper news-wrapperj">
    <?php
    $news_obj = get_term_by('slug','News','category'); 
    ?>

      <div class="content-title">
        <h2 class="txtxxl">NEWS</h2>
      </div>
      
    <?php
    $news_posts = get_specific_posts('post', 'news', 3);
    if($news_posts->have_posts()):
      while($news_posts->have_posts()):
        $news_posts->the_post();
    ?>
      <div class="content-text top-news-content">
        <time class="top-news-date"><?php the_time('Y.m.d'); ?></time>
        <a class="top-news-title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        <p class="top-news-text"><?php echo get_the_excerpt(); ?></p>
        <a class="top-news-more" href="<?php the_permalink(); ?>">Read More</a>
      </div>
    <?php
      endwhile;
      wp_reset_postdata();
    endif;
    ?>
      <div class="top-button-area">
        <a class="top-section-button" href="<?php echo esc_url(get_term_link($news_obj)); ?>">View All</a>
      </div>
     </div>

     
    <!--動画表示エリア-->
      <div class="content video-wrapper">
        <div class="content-title">
          <h2 class="txtxxl">MUSIC VIDEO</h2>
        </div>
        <div class="content-top-video">
          


        <!-- 動画一覧ページと供用 -->
              <?php
              $paged = get_query_var('paged'); //ページ数を取得
              $arg = array(
                  'post_type' => 'video',
                  'posts_per_page' => 1,
                  'order' => 'DESC', //昇順
                  'paged' => $paged //ページ数を取得
                );
              $posts = new WP_Query($arg);
                  if($posts->have_posts()): 
                while($posts->have_posts()) : $posts->the_post();
              ?>

                  <div class="top_video_content">
                    <a href="https://www.youtube.com/embed/<?php the_field('video_youtubeid'); ?>?autoplay=1" class="youtube" data-lity="data-lity">
                      <div class="youtube-pic">
                        <img src="https://i.ytimg.com/vi/<?php the_field('video_youtubeid'); ?>/mqdefault.jpg" alt="<?php the_title(); ?>" >
                        <div class="video-page-icon"><i class="fab fa-youtube fa-4x vide-faicon"></i></div>
                      </div> 
                      <div class="video-title-top"><p class="video-caption-top"><?php the_title(); ?></p></div>
                    </a>
                  </div>
              <?php endwhile;
                endif;	
              wp_reset_postdata(); ?>

              <a href="http://fuuske.bubekiti.net/archives/video/" class="top-section-button video-all-button">View All</a>



        </div>
      </div>


    <!--グッズ表示エリア-->
      <div class="content goods-wrapper">
        <?php
        $goods_obj = get_page_by_path("GOODS");
        $post = $goods_obj;
        setup_postdata($post);
        ?>
        <div class="content-title">
          <h2 class="txtxxl">GOODS</h2>
        </div>
        <div class="top-goods-content-area">
          <p class="top-goods-content"><?php the_content(); ?></p>
          <div class="good-thumbnail"><?php the_post_thumbnail(array(600,600), array('class' => "goods-thumbnail-img")); ?></div>
          <a class="top-section-button top-goods-button">Fuuske Online Store</a>
        </div>
      <?php
        wp_reset_postdata();
      ?>
      </div>
    

    <!--ブログ一覧表示エリア (news-wrapperとcssタグ供用)--> 
    <div class="content news-wrapper blog-wrapper">
    <?php
    $blog_obj = get_term_by('slug','Blog','category'); 
    ?>

      <div class="content-title">
        <h2 class="txtxxl">BLOG</h2>
      </div>
      
    <?php
    $blog_posts = get_specific_posts('post', 'Blog', 3);
    if($blog_posts->have_posts()):
      while($blog_posts->have_posts()):
        $blog_posts->the_post();
    ?>
      <div class="content-text top-news-content">
        <div class="top-thumbnail"><?php the_post_thumbnail(array(100,100), array('class' => "top-thumbnail-img")); ?>
        </div>
        <div class="top-blog-txtarea">
          <time class="top-news-date"><?php the_time('Y.m.d'); ?></time>
          <a class="top-news-title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
          <p class="top-news-text"><?php echo get_the_excerpt(); ?></p>
        </div>
        <a class="top-news-more" href="<?php the_permalink(); ?>">Read More</a>
      </div>
    <?php
      endwhile;
      wp_reset_postdata();
    endif;
    ?>
      <div class="top-button-area">
        <a class="top-section-button" href="<?php echo esc_url(get_term_link($blog_obj)); ?>">View All</a>
      </div>
    </div>


    
  <?php get_footer(); ?>



  </section>



  <?php wp_footer(); ?>

  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/script-top.js"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/lity.js"></script>
</body>
</html>