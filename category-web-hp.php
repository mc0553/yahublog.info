<?php
/*
Template Name: WEB開発―カテゴリー表示
*/
?>

<?php get_header(); ?>

<?php
    $paged = get_query_var('paged') ?: 1;

    $args  = array(
        'paged' => $paged, 
        'posts_per_page' => 6, // 表示する件数
        'orderby' => 'date', // 日付でソート
        'order' => 'DESC', // DESCで最新から表示、ASCで最古から表示
        'category_name' => 'web-hp', // 表示したいカテゴリーのスラッグを指定
    
    );
    $the_query = new WP_Query( $args );
?>

<h2>WEB開発 Articles</h2>

<section>

<?php if ( $the_query->have_posts() ) : ?>
    <div class="contentwrap">
        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

            <div class="card">
                <?php if(has_post_thumbnail()): ?>
                  <!-- サムネイルが設定されている場合 -->
                  <a href="<?php echo get_permalink(); ?>">
                    <img src="<?php the_post_thumbnail_url(); ?>" alt="">
                  </a>
                <?php else: ?>
                  <!-- サムネイルが設定されていない場合 -->
                  <img src="http://placehold.jp/300x300.png?text=画像がありません" alt="">
                <?php endif; ?>
                <div class="card-space">
                  <p><?php the_time('Y/m/d'); ?>投稿</p>
                  <p class="textheight"><?php the_title(); ?></p>
                  <?php the_excerpt(); ?>
                  <p class="line-space"></p>
                  <a href="<?php the_permalink(); ?>"><span>READ MORE</span></a>
                </div>
            </div>

        <?php endwhile; ?>
    </div>
<?php endif; ?>

</section>

<!-- ページャーの表示 -->
<?php if ( function_exists( 'pagination' ) ) :
    pagination( $the_query->max_num_pages, $paged );
    endif; ?>

<?php get_footer(); ?>
