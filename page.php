<?php get_header(); ?>

  <!-- 固定ページ　コンテンツセクション -->
  <section class="contents-page-single-archive">
    <div class="content-page">
      <h2 class="txtxxl content-page-title"><?php echo get_the_title(); ?></h2>
      <div class="content-page-area">
        <p class="content-page-text"> 
          
        

        <?php
        if(have_posts()):
          while(have_posts()):
            the_post();
            the_content();
          endwhile;
        else:
        ?>
        新着記事はありません。
        <?php
        endif;
        ?>
        </p>
      </div>
    </div>


    
  <?php get_footer(); ?>



  </section>



  <?php wp_footer(); ?>
</body>
</html>