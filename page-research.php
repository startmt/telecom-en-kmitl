<?php 
    get_header();
    ?>
    <div class ="paddinghead">
             <div class="text-center">
                 <h1><?php the_title() ?></h1>
             </div>
         </div>
    <section>
    
    <?php
    $newsposts = new WP_Query(array('cat=9',
    'post_type' => 'researchpost',));
    $a = 1;
     if ($newsposts->have_posts()) :
        while ($newsposts->have_posts()) :   $newsposts->the_post(); if(trim($post->post_content) != "") : 
         
         
         if ($a % 2 == 1) : {
         ?>
         <div class ="paddinghead"></div>
        <section id='blog2'>
         
        <div class="row" >
            <div class="col-md-8 col-sm-12">
                <div class="wow fadeInRightBig">
            <img class="img-fluid" src="<?php the_post_thumbnail_url();?>">
         </div>
   </div>
   <div class="col-md-4 col-sm-12 content">
   <div class="wow fadeInLeftBig">
               <div class="text-center">
                <h2><?php the_title()?></h2>
                
   </div>
   </div>
         </div>
       
        </div>
   </section>
    <?php  

         }
        else:

            ?><div class="col-md-8 col-sm-12 content" id="mobile">
            <img class="img-fluid" src="<?php the_post_thumbnail_url();?>">
   </div>
           <section id='blog2'>
           
           <div class="row">
           
           <div class="col-md-4 col-sm-12 content">
           <div class="wow fadeInRightBig">
                  <div class="text-center">
                  <h2><?php the_title()?></h2>
      </div>
      </div></div>
               <div class="col-md-8 col-sm-12 text-right" id="pc">
               <div class="wow fadeInLeftBig">
               <img class="img-fluid" src="<?php the_post_thumbnail_url();?>">
      </div>
        </div>
          
           </div>
      </section>
              
         <?php
        endif; ?>
        <section class="page-space">
            <div class="wow fadeIn" data-wow-duration="2s">
        <div class = "page-content">

              <br><?php echo get_the_content(); ?></div>
            </p>
    </div>
         </div>
    </section>
        <?php $a += 1;
      endif;
     endwhile;
  
     ?>
     </div>
     
     <?php
         else :
              echo '<p> No content </p>';
         endif;
         
         
?>
</section>
    <?php
    get_footer();
?>
