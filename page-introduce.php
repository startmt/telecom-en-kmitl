<?php 
    get_header();
    ?><div class='row affix-center paddinghead'>
        
        <div class='head-col-3'>
        <div class="wow fadeInLeft">
        <a href="/about/"><div class="bg-article" style="background-image: url('<?php echo get_template_directory_uri()?>/img/history-item.png');">

</div><div class="textonblur">
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
    <a href="/introduce/"><div class="bg-article  active" style="background-image: url('<?php echo get_template_directory_uri()?>/img/intro-item.png'); background-size:cover; background-position:center;">
    
</div> <div class="grass"></div><div class="textonblur active">
    <div class="borderofh1">
           <h1 class="font-bold">แนะนำสาขา</h1></div>
            </div></a> 
</div>
    </div>
</div>

    <section class="page-space">
    <div class="page-content">
    <?php
    if (have_posts()) :
        while (have_posts()) :   the_post(); ?>
    
        <?php the_content(); ?>
     <?php
     endwhile;
        endif;?>
    </div>
</section>
    <?php
    get_footer();
?>
