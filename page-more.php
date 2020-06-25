<?php get_header(); ?>

  <!-- Moreの子固定ページ一覧表示ページ -->
  <section class="contents-page-single-archive">
    <div class="content-archive">
      <h2 class="txtxxl content-archive-title"><?php echo get_main_title(); ?></h2>
        <div class="content-archive-area">  
    
        <?php
        $common_pages = get_child_pages();  //functions.phpで子ぺーじ取得の関数を定義
        if($common_pages->have_posts()):
          while($common_pages->have_posts()):
            $common_pages->the_post();
        ?>


              <a class="content-archive-item" href="<?php the_permalink(); ?>" style="text-align:center;">
              <div>
                
                <p class="txtxxl archive-item-title"><?php the_title(); ?></p>
              </div>
            </a>
        
            
        <?php
            endwhile;
            wp_reset_postdata();
          endif;
        ?>

        </div>
    </div>


    
  <?php get_footer(); ?>



  </section>



  <?php wp_footer(); ?>
</body>
</html>