
<!DOCTYPE html>
<html>
<head>
<?php wp_head(); ?>
</head>


<body>
<div id="firstPage_head">
    <div id="centralTitle">  
        <!-- <div id="right_firstPage_head"> -->
        <div id="logo">
        <img src="<?php echo( get_header_image() ); ?>" alt="<?php echo( get_bloginfo( 'title' ) ); ?>" />
        </div>
        <!-- </div> -->

        <!-- <div id="left_firstPage_head"> -->
        <h1 id="siteTitle"> <?php bloginfo( 'name' ) ; ?></h1>
        <h5 id="siteDescription"><?php  bloginfo( 'description' ) ?></h5>
        <span id="mainMenu"> <?php wp_nav_menu( array('theme_location' => 'left-menu', 'menu' => 'main')); ?> </span>
        
        <!-- </div> -->

    </div>

</div>


<?php get_footer(); ?>


  
 
 </div>

</body>
