<?php 
    get_header();
    ?>
 <div class='row affix-center paddinghead'>
        
        <div class='head-col-3'>
        <div class="wow fadeInLeft">
        <a href="/about/"><div class="bg-article active" style="background-image: url('<?php echo get_template_directory_uri()?>/img/history-item.png');">

</div><div class="textonblur active">
<div class="borderofh1">
            <h1 class="font-bold">ประวัติ และ  ปรัชญา</h1>
</div>
            </div></a>
    </div>
</div>
    <div class='head-col-3'>
    <div class="wow fadeInLeft" data-wow-duration="0.5s">
    <a href="/personal/"><div class="bg-article" style="background-image: url('<?php echo get_template_directory_uri()?>/img/person-item.png'); background-size:cover; background-position:center;"> 
           
</div>  <div class="grass"></div><div class="textonblur">
<div class="borderofh1">
            <h1 class="font-bold">บุคลากร</h1>
</div>
            </div></a>
    </div>
</div>
    <div class='head-col-3'>
    <div class="wow fadeInLeft" data-wow-duration="0.5">
    <a href="/introduce/"><div class="bg-article" style="background-image: url('<?php echo get_template_directory_uri()?>/img/intro-item.png'); background-size:cover; background-position:center;">
    
</div> <div class="grass"></div><div class="textonblur">
    <div class="borderofh1">
           <h1 class="font-bold">แนะนำสาขา</h1></div>
            </div></a> 
</div>
    </div>
</div>

<section id="history">
    <ul>
<?php
$args = array(
    'post_type' => 'history',
    'cat' => 10,
    'post_status' => 'publish',
    'orderby' => 'publish_date',
    'order' => 'ASC');
 $newsposts = new WP_Query($args);   
 if ($newsposts->have_posts()) :
    while ($newsposts->have_posts()) :   $newsposts->the_post(); ?>


<li>
    <div class="row">
    <div class="col-lg-2 col-sm-12 col-md-12">
    <div class="img-circle">
    <h1><?php the_title() ?></h1>
 </div>
 </div>
 <div class="col-lg-1 col-sm-12 col-md-12"></div>
 <div class="col-lg-9 col-sm-12 col-md-12">
 <div>
     <div class="page-content" style="opacity:0.7; background:wheat;">
        <div class="text">
    <?php the_content(); ?>
 </div>
 </div>
</div></div></li><div class="underline"></div>
    
 <?php
 endwhile;
    endif;?>
    </ul>
</section>
    <?php
    get_footer();
?>
