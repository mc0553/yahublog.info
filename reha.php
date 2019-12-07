<?php
/*
Template Name: 自費リハビリ
*/
?>

<!-- header.phpを読み込む -->
<?php get_header(); ?>

<div id="nonteku">
    <h2>自費のリハビリを受けたい</h2>

    <div class="reason">
        <h3>Rhyme & Reason</h3>
        <p>自費のため時間帯の相談も柔軟に対応</p>
        <p>今のリハビリでは物足りない方</p>
        <p>趣味や旅行などにも行きたい方</p>
        <p>もっと自分の身体のことを知りたい方</p>
        <p>ご家族からの相談もお気軽にどうぞ</p>
        <h4>yasuhide masuyama</h4>
    </div>

    <h2>臨床スキル/経験</h2>

    <div class="port-container">
        <div class="port-link">
            
                <img class="port-img" src="<?php echo get_template_directory_uri(); ?>/img/pnf.jpg" alt="">
            
        </div>
        <table class="port-intro">
            <tbody class="port-text">
                <tr>
                   <th class="port-title">臨床歴</th>
                   <th>理学療法士として10年以上</th>
               </tr>
               <tr>
                   <th class="port-title">職場遍歴</th>
                   <th>出水郡医師会立阿久根市民病院 <br> 初台リハビリテーション病院 <br> 玉水会病院</th>
               </tr>
               <tr>
                   <th class="port-title">プロフィール詳細</th>
                   <th><?php echo "<a href=\"https://www.medi-racy.org/益山康秀について/\"target=\"_blank\" rel=\"noopener\"  >\n" ;?> リンク　→経歴を詳細にみる</a></th>
               </tr>
               <tr>
                   <th class="port-title">経験領域</th>
                   <th>急性期 / 回復期 / <span class="port-text-th">慢性期</span> / 在宅リハビリ / 内部疾患 / スポーツ疾患 / 脳・神経領域 / 整形疾患 / 切断 / <span class="port-text-th">小児疾患</span></th>
               </tr>
               <tr>
                   <th class="port-title">スキル研鑽歴</th>
                   <th>認定理学療法士「管理・運営」「地域理学療法」 / 多職種連携教育コーディネーター / 糖尿病療養指導士 / 3学会合同呼吸療法認定士 / 国際PNF3Bレベル認定 / 促通反復療法研修 / 医療安全管理者研修 / 回復期リハビリ管理者研修 　などの勉強に励みました</th>
               </tr>
            </tbody>
        </table>
        <p class="port-p">豊富な臨床経験とマネジメント経験があります。個人で引き受けますので、私のサポート範囲を超える場合は、ご利用者様の適した所へご紹介させていただきます。自費で運営しておりますので、自由な悩み、ご相談などお気軽にご相談ください。</p>
    </div>


    <table class="price">
        <p class="compair">サービス比較表</p>
       <tbody>
           <tr class="tr-first">
               <th>料金体系</th>
               <th>益山康秀が行う<br>自費リハビリ</th>
               <th>自費による脳梗塞リハビリの相場<br>＊独自調査</th>
           </tr>
           <tr class="tr">
               <th>30分</th>
               <th>￥5,000</th>
               <th>￥5,700</th>
           </tr>
           <tr class="tr">
               <th>60分</th>
               <th>￥8,000</th>
               <th>￥11,400</th>
           </tr>
           <tr class="tr">
               <th>90分</th>
               <th>￥10,000</th>
               <th>￥17,000</th>
           </tr>
           <tr class="tr">
               <th>サポート内容</th>
               <th>あらゆる方策を練った<br>リハビリを提供<br>決まったメニューはなく<br>利用者に適したものを追求</th>
               <th>カウンセリング<br>自主トレまでサポート<br>体系化されたメニュー<br>電話サポート</th>
           </tr>
       </tbody>
     </table>


</div>

<hr width="80%" aline="center">
<!-- お問い合わせフォームを読み込む -->
<?php get_template_part('page'); ?>


<!-- footer.phpを読み込む -->
<?php get_footer(); ?>