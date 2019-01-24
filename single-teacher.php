<?php get_header()?>
<div class="post-bg" ></div>
<div id="post-tc">
<div class="wow fadeInRight">
<div class="row bgpost">
        <div class="col-xs-12 col-md-12 col-sm-12">
<div class="post-tc-imagecard">
<img class="post-tc-img" src="<?php the_post_thumbnail_url('');?>">
<div class="slideimage"></div></div>
<div class="post-tc-context">
<h2><?php echo CFS()->get( 'flname' ); ?></h2>
<?php if (CFS()->get( 'telephone' ) != ""):?>
<p><i class="fas fa-phone"></i> <?php echo CFS()->get( 'telephone' );  endif;?></p>
<p><i class="fas fa-envelope"></i> <?php echo CFS()->get( 'email' ); ?></p>
<?php if (CFS()->get( 'bachelor' ) != ""):?>
<p>ปริญญาตรี:</p> <p><?php echo CFS()->get( 'bachelor' ); ?></p>
<?php endif; if (CFS()->get( 'master' ) != ""):?>
<p> ปริญญาโท:</p><p><?php echo CFS()->get( 'master' ); ?></p>
<?php endif; if (CFS()->get( 'doctor' ) != ""):?>
<p> ปริญญาเอก:</p><p><?php echo CFS()->get( 'doctor' ); ?></p>
<?php endif; ?>
<p></div></div></div>
</div>   </div>
<?php if (have_posts()):?>
<div class="wow fadeIn">
<div class="page-space">
    <div class="text-center">
        <h2>งานวิจัย</h2>   
    </div>
<div class="page-content"><?php
if (have_posts()) :
    while (have_posts()) :   the_post(); ?>
<p><?php the_content(); endwhile;
endif;?></p>
</div>
</div>
</div>
<?php 
endif;
get_footer();
?>