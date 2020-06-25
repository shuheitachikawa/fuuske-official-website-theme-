<?php get_header(); ?>

  <!-- 投稿ページ　コンテンツセクション -->
  <section class="contents-page-single-archive">
    <div class="content-single">
    
    
    
        <?php
          if(have_posts()):
            while(have_posts()):
              the_post();
        ?>
              <p class="event-category">LIVE</p>
                <h2 class="txtxl content-single-title event-title-single"><?php the_title(); ?><h2>
                <a class="event-url linkto-event-page" href="<?php the_field('eventurl'); ?>" target="_blank">【イベントページ】</a>
                  <div class="single-event-items">
                    <?php $image = get_field('image'); if( !empty($image) ): ?>
                      <img class="single-event-image" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                    <?php endif; ?>
                  <p class="single-event-item"><span class="event-tag">日時：　</span><?php the_field('date'); ?></p>
                  <p class="single-event-item"><span class="event-tag">会場：　</span><?php the_field('place'); ?>　<a class="event-url" href="<?php the_field('website'); ?>" target="_blank">【会場URL】</a></p>
                  <p class="single-event-item"><span class="event-tag">料金：　</span><?php the_field('price'); ?></p>
                  <p class="single-event-item"><span class="event-tag">詳細：　</span><?php the_field('detail'); ?></p>
                </div>
              
        <?php
            endwhile;
          endif;
        ?>


<!-- SNSシェアボタン（設定画面から反映されなかった為手動で追加） -->
<div class="live-sns">
  <?php echo do_shortcode('[addtoany]'); ?>
</div>


    <!-- Next, Prevボタン -->
    <div class="more-contents">
    <?php
    $next_post = get_next_post();
    $prev_post = get_previous_post();
    if($next_post):
    ?>
      <div class="prev">
        <a class="another-link" href="<?php echo get_permalink($next_post->ID); ?>">Prev</a>
        <a class="another-link-txt" href="<?php echo get_permalink($next_post->ID); ?>"><</a>
        </div>
    <?php
    endif;
    if($prev_post):
    ?>
      <div class="next">
        <a class="another-link-txt" href="<?php echo get_permalink($prev_post->ID); ?>">></a>
        <a class="another-link" href="<?php echo get_permalink($prev_post->ID); ?>">Next</a>
      </div>
    <?php
    endif;
    ?>
    </div>





    </div>


    
  <?php get_footer(); ?>



  </section>



  <?php wp_footer(); ?>
</body>
</html>