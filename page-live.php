<?php get_header(); ?>

  <!-- 投稿一覧ページ  コンテンツセクション -->
  <section class="contents-page-single-archive">
    <div class="content-archive">
      <h2 class="txtxxl content-archive-title"><?php echo get_main_title(); ?></h2>
        <div class="content-archive-area">  
    
        <ul>
        <?php
        $event_posts = get_specific_posts('live',null,-1);
        if($event_posts->have_posts()):
          while($event_posts->have_posts()):
            $event_posts->the_post();
        ?>
          <li class="content-archive-item" >
              <a href="<?php the_permalink(); ?>">
                <p class="page-event-items page-event-name">『<?php the_title(); ?>』</p>
                <p class="page-event-items page-event-place">　　日時：<?php the_field('date'); ?></p>
                <p class="page-event-items page-event-date">　　会場：<?php the_field('place'); ?></p>
              </a>
          </li>
        <?php
          endwhile;
        endif;
        ?>
        </ul>
        </div>



            <div class="pager">
              <ul class="pager-list">
    
                <?php
                if(function_exists('page_navi')):
                  page_navi();
                endif;
                ?>
    
              </ul>
            </div>



    </div>



    
  <?php get_footer(); ?>



  </section>



  <?php wp_footer(); ?>

  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/script-archive.js"></script>
</body>
</html>