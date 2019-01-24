<?php 
    get_header();
    ?>
    <div class='row affix-center paddinghead'>
        
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
<a href="/personal/"><div class="bg-article   active" style="background-image: url('<?php echo get_template_directory_uri()?>/img/person-item.png'); background-size:cover; background-position:center;"> 
       
</div>  <div class="grass"></div><div class="textonblur active">
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
    <section id="personal" class="page-space">
    
    <div class ="page-content">
    <?php
$args = array(
    'post_type' => 'teacher',
    'tax_query' => array(
		array(
			'taxonomy' => 'role',
			'field'    => 'slug',
			'terms'    => 'head',
		)),
    'orderby' => 'ID',
    'posts_per_page' => 100);

 $newsposts = new WP_Query($args);   ?>
 <div class="text-center">
            <h2 style="text-decoration: underline;">บุคลากรภายในภาค</h2>
        </div>
  <div class="wow fadeIn">

     <div class='row' style="justify-content: center">
     
         <?php
     if ($newsposts->have_posts()) :
        while ($newsposts->have_posts()) :   $newsposts->the_post(); ?>
        
    <article class="person" style="background:#f4f4f2">

        <figure>
            <a href="<?php the_permalink();?>">
            <img class="img-person" style="height=250px;" src="<?php the_post_thumbnail_url('thumbnail');?>"> </a></figure>
        <div class="card-body content ">
          <a href="<?php the_permalink();?>"><p><?php the_title() ?></p></a>
          <p class="card-text"><?php echo CFS()->get( 'role' ); ?>
        </p>
     </article>
     
     
    <?php
     endwhile;
     ?>
     
     
     <?php
         endif;
?>


     <?php
     $args = array(
        'post_type' => 'teacher',
        'tax_query' => array(
            array(
                'taxonomy' => 'role',
                'field'    => 'slug',
                'terms'    => 'old-teacher',
            )),
        'orderby' => 'ID',
        'posts_per_page' => 100);
    
     $newsposts = new WP_Query($args);
     if ($newsposts->have_posts()) :
        while ($newsposts->have_posts()) :   $newsposts->the_post(); ?>
        
    <article class="person" style="background:#f4f4f2">

        <figure>
            <a href="<?php the_permalink();?>">
            <img class="img-person" src="<?php the_post_thumbnail_url('thumbnail');?>"> </a></figure>
        <div class="card-body content ">
          <a href="<?php the_permalink();?>"><p><?php the_title() ?></p></a>
          <p class="card-text"><?php echo CFS()->get( 'role' ); ?>
        </p>
     </article>
     
     
    <?php
     endwhile;
     ?>
     
     <?php
         endif;
?>

     <?php
     $args = array(
        'post_type' => 'teacher',
        'tax_query' => array(
            array(
                'taxonomy' => 'role',
                'field'    => 'slug',
                'terms'    => 'prof',
            )),
        'orderby' => 'ID',
        'posts_per_page' => 100);
    
     $newsposts = new WP_Query($args);
     if ($newsposts->have_posts()) :
        while ($newsposts->have_posts()) :   $newsposts->the_post(); ?>
        
    <article class="person" style="background:#f4f4f2">

        <figure>
            <a href="<?php the_permalink();?>">
            <img class="img-person" style="height=250px;" src="<?php the_post_thumbnail_url('thumbnail');?>"> </a></figure>
        <div class="card-body content ">
          <a href="<?php the_permalink();?>"><p><?php the_title() ?></p></a>
          <p class="card-text"><?php echo CFS()->get( 'role' ); ?>
        </p>
     </article>
     
     
    <?php
     endwhile;
     ?>
     
     <?php
         endif;
?>

     <?php
     $args = array(
        'post_type' => 'teacher',
        'tax_query' => array(
            array(
                'taxonomy' => 'role',
                'field'    => 'slug',
                'terms'    => 'assoc',
            )),
        'orderby' => 'ID',
        'posts_per_page' => 100);
    
     $newsposts = new WP_Query($args);
     if ($newsposts->have_posts()) :
        while ($newsposts->have_posts()) :   $newsposts->the_post(); ?>
        
    <article class="person" style="background:#f4f4f2">

        <figure>
            <a href="<?php the_permalink();?>">
            <img class="img-person" style="height=250px;" src="<?php the_post_thumbnail_url('thumbnail');?>"> </a></figure>
        <div class="card-body content ">
          <a href="<?php the_permalink();?>"><p><?php the_title() ?></p></a>
          <p class="card-text"><?php echo CFS()->get( 'role' ); ?>
        </p>
     </article>
     
     
    <?php
     endwhile;
     ?>
     
     <?php
         endif;
?>

     <?php
     $args = array(
        'post_type' => 'teacher',
        'tax_query' => array(
            array(
                'taxonomy' => 'role',
                'field'    => 'slug',
                'terms'    => 'asst',
            )),
        'orderby' => 'ID',
        'posts_per_page' => 100);
    
     $newsposts = new WP_Query($args);
     if ($newsposts->have_posts()) :
        while ($newsposts->have_posts()) :   $newsposts->the_post(); ?>
        
    <article class="person" style="background:#f4f4f2">

        <figure>
            <a href="<?php the_permalink();?>">
            <img class="img-person" style="height=250px;" src="<?php the_post_thumbnail_url('thumbnail');?>"> </a></figure>
        <div class="card-body content ">
          <a href="<?php the_permalink();?>"><p><?php the_title() ?></p></a>
          <p class="card-text"><?php echo CFS()->get( 'role' ); ?>
        </p>
     </article>
     
     
    <?php
     endwhile;
     ?>
     
     <?php
         endif;
?>

     <?php
     $args = array(
        'post_type' => 'teacher',
        'tax_query' => array(
            array(
                'taxonomy' => 'role',
                'field'    => 'slug',
                'terms'    => 'dr',
            )),
        'orderby' => 'ID',
        'posts_per_page' => 100);
    
     $newsposts = new WP_Query($args);
     if ($newsposts->have_posts()) :
        while ($newsposts->have_posts()) :   $newsposts->the_post(); ?>
        
    <article class="person" style="background:#f4f4f2">

        <figure>
            <a href="<?php the_permalink();?>">
            <img class="img-person" style="height=250px;" src="<?php the_post_thumbnail_url('thumbnail');?>"> </a></figure>
        <div class="card-body content ">
          <a href="<?php the_permalink();?>"><p><?php the_title() ?></p></a>
          <p class="card-text"><?php echo CFS()->get( 'role' ); ?>
        </p>
     </article>
     
     
    <?php
     endwhile;
     ?>
     <?php
         endif;
?><?php
$args = array(
   'post_type' => 'staff',
   'orderby' => 'ID',
   'posts_per_page' => 100);

$newsposts = new WP_Query($args);
if ($newsposts->have_posts()) :
   while ($newsposts->have_posts()) :   $newsposts->the_post(); ?>
   
<article class="person" style="background:#f4f4f2">

   <figure>
       <img class="img-person" style="height=250px;" src="<?php the_post_thumbnail_url('thumbnail');?>"></figure>
   <div class="card-body content ">
    <p style="color:#0275d8"><?php the_title() ?></p>
    <p class="card-text"><?php echo the_content();
    ?>
   </p>
</article>


<?php
endwhile;
?>
</div></div>
<?php
    endif;
?>

    </div>
</section>
    <?php
    get_footer();
?>
