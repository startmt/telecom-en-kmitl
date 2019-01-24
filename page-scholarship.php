<?php 
     get_header();?>
     <section id="blog1">
     <div class="container">
             <div class="text-center">
                 <h1>ทุนการศึกษา</h1>
             </div>
         </div>
         <div class="wow fadeInRightBig">
     <div class='row'>
     
         <?php
         $currentPage = get_query_var('paged');
         $query_array = array(
            'cat'            => '6',
            'posts_per_page' => '4',
            'paged'          => $currentPage
            );
    $newsposts = new WP_Query($query_array);
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
     <div class='text-center'>
     <?php
     echo(paginate_links(array(
         'total'    => $newsposts ->max_num_pages
     )))
     ?>
     </div>
     
     <?php
         else :
              echo '<p> No content </p>';
         endif;
         
         
?> 
</section>
<?php get_footer(); ?>