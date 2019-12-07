<?php
/*
Template Name: contact
*/
?>

<!-- header.phpを読み込む -->
<?php get_header(); ?>

<div id="contact">
   <div class="contact-us">
        <?php echo do_shortcode('[mwform_formkey key="15"]'); ?>
   </div>

 

</div>


<!-- footer.phpを読み込む -->
<?php get_footer(); ?>