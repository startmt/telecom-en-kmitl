
<?php
get_header();?>

<div class="post-bg" ></div>
<section id="post-n">
    <div class="container">
<?php
 if (have_posts()) :
    while (have_posts()) :   the_post(); ?>
    <div class="wow fadeInLeft" data-wow-duration="1s">
        <span> <?php the_category();?></span>
    <h1><?php the_title() ?></h1>
    <span><?php the_date();?></span>
 </div>
 <div class="col-9">
     <img src="<?php the_post_thumbnail_url('large');?>">
     <div class="wow fadeIn" data-wow-duration="1s">
        <div class="text">
    <?php the_content(); ?>
 </div>
 </div>
</div></div></li><div class="underline"></div></div></div>
    
 <?php
 endwhile;
    endif;
    ?>
    </section>
    <?php
    get_footer();
    ?>