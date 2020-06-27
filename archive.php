<?php get_header(); ?>

  <!-- 投稿一覧ページ  コンテンツセクション。 -->
  <section class="contents-page-single-archive">
    <div class="content-archive">
      <h2 class="txtxxl content-archive-title"><?php echo get_main_title(); ?></h2>
        <div class="content-archive-area">  
          <ul>
        <?php
          if(have_posts()):
            while(have_posts()):
              the_post();
        
              get_template_part('content-archive');  //content-archive.phpを呼出し

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