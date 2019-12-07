<?php
/*
Template Name: ノンテクニカルスキル
*/
?>

<!-- header.phpを読み込む -->
<?php get_header(); ?>

<div id="nonteku">
    <h2>組織学習で取り組む問題解決</h2>

    <div class="reason">
        <h3>Rhyme & Reason</h3>
        <p>個人学習では現場は変わらない</p>
        <p>なぜなら業務はチームで行うから</p>
        <p>本当に頑張っている人が報われる</p>
        <p>現場を変えるための学習は</p>
        <p>組織単位で行うのが最低条件となる</p>
        <h4>yasuhide masuyama</h4>
    </div>
 
    <img class="soshiki-learning" src="<?php echo get_template_directory_uri(); ?>/img/learning.png" alt="">

    <h2 class="nonteku-tema">ノンテクニカルスキルを通した組織変革</h2>
    <p class="nonteku-link"><?php echo "<a href=\"https://www.medi-racy.org/ノンテクニカルスキルとは/\" target=\"_blank\" rel=\"noopener\"  > リンク →ノンテクニカルスキルとは</a>\n";?></p>

    
    <table class="price">
        <p class="compair">サービス比較表<br>＊別途交通費・宿泊費は請求します</p>
       <tbody>
           <tr class="tr-first">
               <th>料金体系</th>
               <th>Medicalliteracylabによる<br>組織学習</th>
               <th>経営コンサルタントの相場<br>＊独自調査による</th>
           </tr>
           <tr class="tr">
               <th>パターンA<br>講義３時間</th>
               <th>￥90,000</th>
               <th>￥200,000</th>
           </tr>
           <tr class="tr">
               <th>パターンB<br>講義６時間</th>
               <th>￥180,000</th>
               <th>￥450,000</th>
           </tr>
           <tr class="tr">
               <th>パターンC<br>講義６時間<br>＋<br>課題レポート等<br>＋<br>振り返り３時間</th>
               <th>￥270,000</th>
               <th>￥500,000</th>
           </tr>
           <tr class="tr">
               <th>テーマ</th>
               <th>ノンテクニカルスキルを通した組織変革<br>変革リーダー育成含む</th>
               <th>リーダーシップ<br>コミュニケーション研修など</th>
           </tr>
           <tr class="tr">
               <th>強み</th>
               <th>あくまでも組織学習に重きをおく<br>問題解決に特化</th>
               <th>高学歴・高キャリアスタッフ<br>実績多数<br>ビジネスに特化</th>
           </tr>
           <tr class="tr">
               <th>サポート内容</th>
               <th>組織全体での共通言語づくりから開始<br>仕掛けと仕組みづくりに特化<br>変革リーダーの継続学習をサポート</th>
               <th>例）経営コンサルタントが講師<br>場づくりのノウハウあり　等</th>
           </tr>
           <tr class="tr">
               <th>ゴール</th>
               <th>組織変革は５年から１０年かかる道のり<br>変化に適応できる組織づくりを目指す</th>
               <th>研修を受けた個人だけがインプットし<br>現場でアウトプットし終了</th>
           </tr>
       </tbody>
     </table>


</div>


<hr width="80%">
<!-- お問い合わせフォームを読み込む -->
<?php get_template_part('page'); ?>



<!-- footer.phpを読み込む -->
<?php get_footer(); ?>