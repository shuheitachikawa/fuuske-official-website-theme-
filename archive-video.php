<?php get_header(); ?>

  <!-- 投稿一覧ページ  コンテンツセクション -->
  <section class="contents-page-single-archive">
    <div class="content-video-archive">
      <h2 class="txtxxl content-archive-title">MUSIC VIDEO <i class="fab fa-youtube fa-lg vide-faicon"></i></h2>
        <div class="content-archive-area video-archive-area">  
    
        <ul class="list-contents">
<?php
 $paged = get_query_var('paged'); //ページ数を取得
 $arg = array(
    'post_type' => 'video',
    'posts_per_page' => 12,
    'order' => 'DESC', //昇順
    'paged' => $paged //ページ数を取得
	);
 $posts = new WP_Query($arg);
    if($posts->have_posts()): 
	while($posts->have_posts()) : $posts->the_post();
?>

    <li class="list_content">
      <a href="https://www.youtube.com/embed/<?php the_field('video_youtubeid'); ?>?autoplay=1" class="youtube" data-lity="data-lity">
        <div class="youtube-pic">
          <img src="https://i.ytimg.com/vi/<?php the_field('video_youtubeid'); ?>/mqdefault.jpg" alt="<?php the_title(); ?>" >
          <div class="video-page-icon"><i class="fab fa-youtube fa-4x vide-faicon"></i></div>
          <div class="video-title"><p class="video-caption"><?php the_title(); ?></p></div>
        </div> 
      </a>
    </li>

<?php endwhile;
  endif;	
wp_reset_postdata(); ?>
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


  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/lity.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/script-video.js"></script>
</body>
</html>