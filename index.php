<!-- header.phpを読み込む -->
<?php get_header(); ?>

<div id="body">

  <main>          
    <div class="maincont">
      <div class="mainbox">
        <div id="pcslide">
          <?php echo do_shortcode('[metaslider id="5"]'); ?>
        </div>
        <div id="spslide">
          <?php echo do_shortcode('[metaslider id="8"]'); ?>
        </div>
      </div>  
    </div>          
    
    <img class="splogo" src="<?php echo get_template_directory_uri(); ?>/img/visual_text_sp.png" alt="">
    <div class="right-maxwi"><img class="right-bottom" src="<?php echo get_template_directory_uri(); ?>/img/visual_text_pc.png" alt=""></div>
  </main>

  <div id="container">
    <a href="https://yahublog.info/">
      <img class="left-top" src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="">
    </a>
    <p class="font">あなたらしく「 活きる 」をナビゲートする</p>
    <p class="font2" id="kizitop"></p>

    <h2>Latest Articles</h2>
  
    <section>
      <?php if (have_posts()): ?>
      <div class="contentwrap">
        <?php while(have_posts()): the_post(); ?>
        <div class="card">
          <div class="card-img">
            <?php if(has_post_thumbnail()): ?>
              <!-- サムネイルが設定されている場合 -->
              <a href="<?php echo get_permalink(); ?>">
                <img src="<?php the_post_thumbnail_url(); ?>" alt="">
              </a>
              <?php else: ?>
                <!-- サムネイルが設定されていない場合 -->
                <img src="http://placehold.jp/300x300.png?text=画像がありません" alt="">
              <?php endif; ?>
            <div class="card-title">
              <p class="toukou"><?php the_time('Y/m/d'); ?>投稿</p>
              <p class="textheight"><?php the_title(); ?></p>
            </div>
          </div>

          <div class="card-space">
            <?php the_excerpt(); ?>
            <p class="line-space"></p>
            <a href="<?php the_permalink(); ?>"><span>READ MORE</span></a>
          </div> 
        </div>
        <?php endwhile; ?>

      <?php else: ?>
      <div class="contentwrap">
          <h2 class="sub-title">検索した投稿はみつかりませんでした</h2>
          <div class="reserch" >
            <?php get_search_form(); ?>
          </div>
            <?php endif; ?>
      </div>   
    </section>

    <!-- //ページごとのナビゲーションを作る -->
    <?php the_posts_navigation(array( 'prev_text' => '過去の６件', 'next_text' => '新しい６件' )); ?>

    <section class="ranking">
      <h2>Popular Articles</h2>

      <div class="ranking-body">
        <!-- ここからが人気記事投稿 -->
        <div class="ranking-case">
          <?php
          // views post metaで記事のPV情報を取得する
          setPostViews(get_the_ID());
          // ループ開始
          query_posts('meta_key=post_views_count&orderby=meta_value_num&posts_per_page=5&order=DESC'); while(have_posts()) : the_post(); ?>
          <!-- サムネイルの表示 -->
          <a href="<?php echo get_permalink(); ?>">
            <div class="popular">
              <div class="img-space" >
		            <?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'post-thumbnail'); } ?>
                <p class="textheight popular-title"><?php the_title(); ?></p>
              </div>
              <div class="popular-space">
                <p><?php the_time('Y/m/d'); ?>投稿</p>
                <?php the_excerpt(); ?>
              </div>
            </div>
          </a>
          <?php endwhile; ?>
        </div>
        <!-- ここからが被リンク      -->
        <div class="show-case">
           <h3>Pick up links</h3>
           <div class="project pro1">
             <?php echo "<a href=\"https://www.medi-racy.org/2018/12/05/地域連携の在り方/\" target=\"_blank\" rel=\"noopener\" >\n" ;?>
               <img class="show-img" src="<?php echo get_template_directory_uri(); ?>/img/ipe.jpg" alt="">
               <div class="over-lay lay1"></div>
               <p class="over-text lay1">地域連携の本来の姿は</p>
             </a>
           </div>
           <div class="project pro2">
             <?php echo "<a href=\"https://www.medi-racy.org/2018/11/10/ノンテク凄い-kazuhiro-satoも凄い/\"target=\"_blank\" rel=\"noopener\"  >\n" ;?>
               <img class="show-img" src="<?php echo get_template_directory_uri(); ?>/img/sdgs.jpg" alt="">
               <div class="over-lay lay2"></div>
               <p class="over-text lay2">唯一無二！ノンテクの素晴らしさ</p>
             </a>
           </div>
           <div class="project pro3">
             <?php echo "<a href=\"https://www.medi-racy.org/2018/11/02/ノンテク合宿で得たこと/\"target=\"_blank\" rel=\"noopener\"  >\n" ;?>
               <img class="show-img" src="<?php echo get_template_directory_uri(); ?>/img/nontekuday.png" alt="">
               <div class="over-lay lay3"></div>
               <p class="over-text lay3">非日常で合宿学習のメリット</p>
             </a>
           </div>
           <div class="project pro4">
             <?php echo "<a href=\"https://youtu.be/nKIu9yen5nc\"target=\"_blank\" rel=\"noopener\"  >\n" ;?>
               <img class="show-img" src="<?php echo get_template_directory_uri(); ?>/img/programmer.png" alt="">
               <div class="over-lay lay4"></div>
               <p class="over-text lay4">一度は聞いてほしい世界のプログラマー達の声</p>
             </a>
           </div>
           <div class="project pro5">
             <?php echo "<a href=\"https://www.facebook.com/Medicalliteracylab-2405374226192950/\"target=\"_blank\" rel=\"noopener\"  >\n" ;?>
               <img class="show-img" src="<?php echo get_template_directory_uri(); ?>/img/lab.jpg" alt="">
               <div class="over-lay lay5"></div>
               <p class="over-text lay5">メディカルリテラシーラボの紹介</p>
             </a>
           </div>
           <div class="project pro6">
             <?php echo "<a href=\"https://www.facebook.com/higapon99/\"target=\"_blank\" rel=\"noopener\"  >\n" ;?>
               <img class="show-img" src="<?php echo get_template_directory_uri(); ?>/img/ミラクルバー.png" alt="">
               <div class="over-lay lay6"></div>
               <p class="over-text lay6">ミラくるbarの紹介</p>
             </a>
           </div>
           <div class="project pro7">
             <?php echo "<a href=\"https://www.facebook.com/satokazuhiro1980/\"target=\"_blank\" rel=\"noopener\"  >\n" ;?>
               <img class="show-img" src="<?php echo get_template_directory_uri(); ?>/img/satou.jpg" alt="">
               <div class="over-lay lay7"></div>
               <p class="over-text lay7">佐藤和弘の紹介</p>
             </a>
           </div>
        </div>
      </div>
    </section>
  </div>
</div>

<!-- お問い合わせフォームを読み込む -->
<?php get_template_part('page'); ?>

<!-- footer.phpを読み込む -->
<?php get_footer(); ?>