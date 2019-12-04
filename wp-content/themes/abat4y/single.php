<?php get_header(); ?>
<div class="container post-page">
   
        <?php 
        if(have_posts()) {
            while(have_posts()){

                the_post(); ?>
                    
                
                    <div class="main-post singl-post">
                 
                         <div class="row">
                        <div class="col-sm-6">
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
                         </div>

                        <div class="col-sm-6">
                        <div class="post-content">
                         <?php the_content();    ?>
                        </div> 
                              <?php edit_post_link( __( 'Edit', 'textdomain' ), '<p>', '</p>', null, 'btn btn-primary btn-edit-post-link' );?>
                        </div>
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
           <?php 
//get postid:get_queried_object_id() 
// get catogries id =>wp_get_post_categories(get_queried_object_id())  
      
                
        }
    } 

     
        
          ?> 
  
        <div class="row aurhor-info ">
            <div class="co-md-3 autor-img">
      
        <?php $avatar_rgument=array(
         'class'=>'img-responsive img-thumbnail center-block'
        ); ?>
        <?php echo get_avatar( get_the_author_meta( 'ID' ), 85,'','user_avatar',$avatar_rgument ); ?>

            </div>
            <div class="col-md-9 autor-info">
        <h4>
             
            <?php the_author_meta( 'first_name' ) ?>
            <?php the_author_meta( 'last_name' )?>     
        (<span><?php the_author_meta( 'nickname' )?></span>)
            <h7 class="autor-post-count"> user posts count: <span><?php echo count_user_posts(get_the_author_meta('id'))?></span></h7>
     
             
        </h4>
       
            <?php if(get_the_author_meta('id')){ ?>

            <p> <?php the_author_meta( 'description' ) ?>  </p>  
            
         
    
            <?php } else { echo 'ther is no  biography '; } ?> 
              </div>
            <p class="author-stats">

            profile link : <?php the_author_posts_link() ?>
        </p>
           </div>  


        
      
        <hr class="line-style"> 
       <?php
        echo '<div class="post_pagenation">';
            //get the previous post if it`s exist
         if( get_previous_post_link() ){

             previous_post_link( '%link', '<i class="fa fa-chevron-left" aria-hidden="true"></i> prev Articl: %title' );
           }
            else{  echo "<span class='previous_span'> prev Articl: None </span>";}
        //get the next post if it`s exist
         if( get_next_post_link() ){

              next_post_link( '%link', 'Next Articl: %title <i class="fa fa-chevron-right" aria-hidden="true"></i>' );
           }
            else{ echo "<span class='next_span'>Next Articl: None </span>";
            }
        echo '</div>';

        ?>
            
                <hr class="line-style">
                 <?php comments_template(); ?> 
            
           
</div>



<?php get_footer(); ?> 
