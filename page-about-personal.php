<?php 
    get_header();
    ?>
    <div class='row affix-center paddinghead'>
        
        <div class='head-col-3'>
            <div class="bg-article">
<div class="text-center">
            <a href=""><h1>ประวัติ และ ปรัชญา</h1></a>
            </div>
</div>
    </div>
    <div class='head-col-3'>
            <div class="bg-article">
            <div class="text-center">
            <a href="/personal/"><h1>บุคลากร</h1></a> 
            </div>
</div>
    </div>
    <div class='head-col-3'>
            <div class="bg-article">
            <div class="text-center">
            <a href="/introduce/"><h1>แนะนำสาขา</h1></a> 
            </div>
</div>
    </div>
</div>
    <section class="page-space">
   
    <div class ="container">
        <?php
    if (have_posts()) :
        while (have_posts()) :   the_post(); ?>
        <?php the_content(); ?>
        <?php
        endwhile;
    else :
        echo '<p> No content </p>';
    endif;
    ?> 
    </div>
</section>
    <?php
    get_footer();
?>
