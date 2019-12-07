<?php get_header(); ?>


<div id="body">
  <!-- 一列目 -->
  <div class="leftside">

  </div>

  <!-- 二列目 -->
  <div id="container-single">
    <main>
      <div class="main-img">
        <img id="mainkizi" src="<?php the_post_thumbnail_url(); ?>" alt="">
        <p class="time">投稿日：<?php the_time('Y/m/d'); ?></p>
      </div>
    </main>

    <h2><?php the_title(); ?></h2>

    <section class="section">
      <?php if (have_posts()) : ?>
        <div class="contentwrap">
          <?php while (have_posts()) : the_post(); ?>
            <div class="singlecontent">
              <?php the_content(); ?>
              <div class="backimg">
                <?php previous_post_link('%link', '＜ 前の記事へ', true); ?>
                <?php next_post_link('%link', '次の記事へ ＞', true); ?>
              </div>
            </div>
        <?php endwhile;
        endif; ?>
        </div>
    </section>
  </div>
  <!-- ここまでがcontainer -->

  <!-- 三列目 -->
  <div class="center-line"></div>

  <!-- 四列目 -->
  <!-- サイドバーを挿入してみる -->
  <?php get_sidebar(); ?>

</div>



<?php get_footer(); ?>