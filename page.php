<?php get_header(); ?>


 <div id="content">
 <?php
while ( have_posts() ){
    the_post(); ?>
    <h3><?php the_title() ?></h3>
    <?php the_content(); ?>

<?php } ?>


<?php get_footer(); ?>
