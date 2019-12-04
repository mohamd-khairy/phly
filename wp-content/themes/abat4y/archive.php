<?php get_header(); ?>
<?php bannerpanel(array(
  'title'=>get_the_archive_title(),
  'subtitle'=>get_the_archive_description()
 
));?>

    
  
 <div class="container container--narrow page-section">
     <?php
    while(have_posts()){
        the_post(); ?>
        
    <div class="post-item">
        <h2 class="headline headline--medium headline--post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <div class="metabox">
            <p>created by :<i class="fa fa-user fa-fw"> </i><?php  the_author_posts_link(); ?> on: <?php the_time('j , m, y') ?>in <?php echo get_the_category_list(', ' ); ?></p>
        </div>
        <div class="genric-content">
            <?php 
            the_excerpt();?>
            <P ><a class="btn btn--blue"  href="<?php the_permalink(); ?>">continue reading&raquo;</a></P>
        </div>
    </div>
        
     <?php }
        ?>
</div>
  
        
   
  


<?php get_footer(); ?> 
