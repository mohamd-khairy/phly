<?php get_header(); ?>
<div class="container home-page">
    <div class="row">
        <?php 
        if(have_posts()) {
            while(have_posts()){

                the_post(); ?>
                    
                <div class="col-sm-6">
                    <div class="main-post">
                        <h3 class="post-title">
                            <a href="<?php the_permalink() ?>">
                                 <?php the_title(); ?>
                            </a>
                        </h3>
                        <span class="post-author">
                            <i class="fa fa-user fa-fw"> </i><?php the_author_posts_link(); ?>
                        </span>
                        <span class="post-data">
                            <i class="fa fa-calendar fa-fw"></i><?php the_time('F jS, Y'); ?>
                        </span>
                        <span class="post-comment">
                            <i class="fa fa-comment fa-fw"></i><?php comments_popup_link( 'No comments yet', '1 comment', '% comments', 'comments-link', 'Comments are off for this post');?>
                        </span>
                       <?php the_post_thumbnail('', ['class' => 'img-responsive img-thumbnail', 'title' => 'Feature image']); ?>
                        <div class="post-content">
                         <?php the_excerpt();    ?>
                        </div> 

                        <hr>
                        <p class="catogries">
                            <i class="fa fa-tags fa-fw"></i>
                            <?php the_category( ', ' ); ?>
                        </p>
<hr>
                       
                        <p class="post-tags">
                            <?php if(has_tag()){
                                the_tags();
                            
                            }
                        else{
                            echo "there's no tags";
                            }
                            ?>
                        </p>
                    </div>  
                </div>

           <?php     
                
        }
    } 

        ?>
    </div>

      <?php

       /* echo '<div class="post_pagenation">'; 
       //this for pagenation with out nymber
         if( get_previous_posts_link() ){

        previous_posts_link( '<i class="fa fa-chevron-left" aria-hidden="true"></i> prev ');
           }
            else{  echo "<span class='previous_span'> prev</span>";}

         if( get_next_posts_link() ){

               next_posts_link( 'next <i class="fa fa-chevron-right" aria-hidden="true"></i>');
           }
            else{ echo "<span class='next_span'>next </span>";
            }
      echo '</div>';
       */
        ?>

    <?php
    //pagenation _with number
    echo '<div class="post_pagenation">'; 
    echo add_pagenation_num ();
    echo '</div>';
        ?>
</div>


<?php get_footer(); ?> 
