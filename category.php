<?php 
     get_header();?>
     <section id="blog1">
     <div class="container">
             <div class="text-center">
                 <h1>ข่าวภาคโทรคมนาคม</h1>
             </div>
         </div>
         <div class="wow fadeInRightBig">
     <div class='row'>
     
         <?php
    $newsposts = new WP_Query();
     if ($newsposts->have_posts()) :
        while ($newsposts->have_posts()) :   $newsposts->the_post(); ?>
        
    <article>

        <figure>
            <a href="#">
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
     </div>
     
     <?php
         else :
              echo '<p> No content </p>';
         endif;
         
         
?> 
</section>
<?php get_footer(); ?>