<?php get_header(); ?>

  <!-- 投稿ページ　コンテンツセクション -->
  <section class="contents-page-single-archive">
    <div class="content-single">
    
    
    
        <?php
          if(have_posts()):
            while(have_posts()):
              the_post();
        
              get_template_part('content-single'); //content-single.php呼出し（記事の中身）

            endwhile;
          endif;
        ?>

    <!-- Next, Prevボタン -->
    
    <div class="more-contents">
      <?php
    $prev_post = get_previous_post(true); 
    $next_post = get_next_post(true);
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