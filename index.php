<?php 
     get_header();?>
     <section id="title">
    
     <header>
     <div class="wow fadeIn" data-wow-duration="2s">
        <div class="bg">
            <div class="title">
        <h2>วิศวกรรมศาสตร์โทรคมนาคม KMITL</h2>
        </div>
</div>

</div>
</header>
</section>
     <section id="blog1">
         <div class="container">
             <div class="text-center">
                 <h1>ข่าวภาคโทรคมนาคม</h1>
             </div>
         </div>
         <div class="wow fadeInRightBig">
     <div class='row'>
     
         <?php
    $newsposts = new WP_Query('cat=5&posts_per_page=4');
     if ($newsposts->have_posts()) :
        while ($newsposts->have_posts()) :   $newsposts->the_post(); ?>
        
    <article>

        <figure>
            <a href="<?php the_permalink();?>">
            <img class="img-news" src="<?php the_post_thumbnail_url();?>"> </a></figure>
        <div class="card-body content ">
          <a href="<?php the_permalink();?>"><h2><?php the_title() ?></h2></a>
          <p class="card-text"><?php echo get_the_excerpt(); ?>
        </p>
     </article>
     
    <?php
     endwhile;
     ?>
     </div></div>
     <div class='text-right'>
     <a href="/archives/category/news"><button type="button" class="btn btn-outline-danger ">ดูทั้งหมด</button></a></div>
     
     <?php
         else :
              echo '<p> No content </p>';
         endif;
         
         
?> <div class="conatainer">
<div class="text-center">
<h1>ทุนการศึกษา</h1>
</div>
</div> <div class="wow fadeInLeftBig">
<div class='row affix-center'>
    
         <?php
    $newsposts = new WP_Query('cat=6&posts_per_page=3');
     if ($newsposts->have_posts()) :
        while ($newsposts->have_posts()) :   $newsposts->the_post(); ?>
       
    <article class='sc'>
        <figure><a href="<?php the_permalink();?>">
        <img class="img-news" src="<?php the_post_thumbnail_url();?>"> </a></figure>
        <div class="card-body content">
          <a href="<?php the_permalink();?>"><h2><?php the_title() ?></h2></a>
          <p class="card-text"><?php echo get_the_excerpt(); ?>
        </p>
     </article>
    
     
    <?php
     endwhile;
     ?>
     </div> </div>
    
     <div class='text-right'>
     <a href="/archives/category/scholarship/"><button type="button" class="btn btn-outline-danger ">ดูทั้งหมด</button></a></div>
     <?php
         else :
              echo '<p> No content </p>';
         endif;
         
         
?>
</section>

<section id='blog2'>
         
             <div class="row" >
                 
                 <div class="col-md-7 col-sm-12">
                 <div class="wow fadeInLeft" data-wow-duration="2s">
                     <div class="blog2"></div>
        </div>
        </div>
        <div class="col-md-4 col-sm-12 content">
        <div class="wow fadeInRightBig" data-wow-duration="2s">
                    <div class="text-center">
                     <h2>เกี่ยวกับโทรคมนาคม</h2>
                     วิศวกรรมโทรคมนาคม เป็นศาสตร์ทางวิศวกรรมไฟฟ้าที่รวบรวมองค์ความรู้หลายด้าน โดยรวมด้านอิเล็กทรอนิกส์ คลื่นแม่เหล็กไฟฟ้า สายอากาศ คลื่นแสง การประมวลผลสัญญาณดิจิทัลและเครือข่ายข้อมูลและคอมพิวเตอร์เข้าด้วยกัน
        </div>
        </div>
        </div>
            
             </div>
        </section>
        <section id='blog2'>
         
             <div class="row" >
                
        <div class="col-md-4 col-sm-12 content">
        <div class="wow fadeInRightBig" data-wow-duration="2s">
                    <div class="text-center">
                     <h2>ปรัชญา</h2>
                     เพื่อผลิตวิศวกรที่มีความรู้ความสามารถทางด้านวิศวกรรมโทรคมนาคมเพื่อสนองความต้องการ

ของหน่วยงานต่าง ๆ ทั้งภาครัฐและภาคเอกชนเพื่อทำการวิจัยและพัฒนาวิชาการทางวิศวกรรม

โทรคมนาคมให้เป็นประโยชน์ต่อประเทศ
        </div>
        </div>
        </div>
             
        <div class="col-md-7 col-sm-12">
                 <div class="wow fadeInLeft" data-wow-duration="2s">
                     <div class="blog2" style="background-image: url('<?php echo get_template_directory_uri()?>/img/bg10.png')"></div>
        </div>
        </div>
             </div>
        </section>
        <section id='blog3'>
        <div class="wow fadeIn" data-wow-duration="2s">
        <div class="module">
             <video autoplay muted loop id="myVideo">
                  <source src="<?php bloginfo('template_directory'); ?>/img/cut1.mp4" type="video/mp4" >
                     Your browser does not support HTML5 video.
                </video>
                 <header>
               <h1>
            โครงการวิจัยของภาคโทรคมนาคม
                  </h1>
                   <p>วิศวกรรมโทรคมนาคม เป็นศาสตร์ทางวิศวกรรมไฟฟ้าที่รวบรวมองค์ความรู้หลายด้าน โดยรวมด้านอิเล็กทรอนิกส์ คลื่นแม่เหล็กไฟฟ้า สายอากาศ คลื่นแสง การประมวลผลสัญญาณดิจิทัลและเครือข่ายข้อมูลและคอมพิวเตอร์เข้าด้วยกัน ในสถาบันการศึกษาหลายแห่ง ได้จัดตั้งภาควิชาวิศวกรรมโทรคมนาคม แยกออกจากภาควิชาวิศวกรรมไฟฟ้า (กำลัง) แต่มีอีกหลายแห่งที่นักศึกษาต้องเลือกเรียนในภาควิชาวิศวกรรมไฟฟ้าแล้วจึงแยกย่อยเป็นวิศวกรรมไฟฟ้าสื่อสาร <a href="/research/">ดูงานวิจัยทั้งหมด</a> </p>
  </header>
</div>
        </div>
        </section>
<?php get_footer(); ?>