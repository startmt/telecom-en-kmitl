<?php 
    get_header();
    ?>
   <div class='row affix-center paddinghead'>
        
   <div class='head-col-2'>
   <div class="wow fadeInLeft">
   <a href="/program/"><div class="bg-article active" style="background-image: url('<?php echo get_template_directory_uri()?>/img/bg3.jpg'); background-size:cover; background-position:center;"> 

</div><div class="textonblur">

<div class="borderofh1" style="background-color:rgba(0,0,0,0)">
       <h1 class="font-bold" style="color:black;">ปริญญาตรี</h1>
</div>
       </div></a>
</div>
</div>
<div class='head-col-2'>
<div class="wow fadeInLeft">
<a href="/graduate/"><div class="bg-article" style="background-image: url('<?php echo get_template_directory_uri()?>/img/primary.jpg'); background-size:cover; background-position:center;"> 
      
</div>  <div class="grass"></div><div class="textonblur">

<div class="borderofh1" style="background-color:rgba(0,0,0,0)">
       <h1 class="font-bold" style="color:black;">ปริญญาโทและเอก</h1></div>
       </div></a>
</div>
</div>
</div>

    <section id="program" class="page-space">
    <div class ="page-content" style="background:white;">
        <?php
    if (have_posts()) :
        while (have_posts()) :   the_post(); ?>
        <div class="text-center">
        </div>
        <?php the_content(); ?>
        <?php
        endwhile;
    endif;
    ?> <br>
    <div class="text-center"><a href="http://www1.telecom.kmitl.ac.th/telecom/images/stories/couse-telecom/BE%20Telecom%202560.pdf"><h4>ดาวน์โหลดเอกสารทั้งหมด <i class="fas fa-download"></i></h4 ></a></div>
    </div>
</section>
    <?php
    get_footer();
?>
