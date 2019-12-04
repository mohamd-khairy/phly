<?php get_header(); ?>
<div class="container author-page">
    <h1 class="profile-header text-center"><?php the_author_meta( 'nickname' )?> page </h1>
    <div class="autor-main-info">

    
    <div class="row" >
        
        <div class="col-md-3">
      
        <?php $avatar_rgument=array(
         'class'=>'img-responsive img-thumbnail center-block'
        ); ?>
        <?php echo get_avatar( get_the_author_meta( 'ID' ), 190,'','user_avatar',$avatar_rgument ); ?>

         </div>

           <div class="col-md-9 ">
            <ul class="list-unstyled">
                <li><span class="list-item">first name :</span> <?php the_author_meta( 'first_name' ) ?></li>
                <li><span class="list-item">last name :</span> <?php the_author_meta( 'last_name' ) ?></li>
                <li><span class="list-item">nickname :</span> <?php the_author_meta( 'nickname' )?> </li>
            </ul>
       
            <hr>
            <?php if(get_the_author_meta('id')){ ?>

            <p> <?php the_author_meta( 'description' ) ?>  </p>  
            
         
    
            <?php } else { echo 'ther is no  biography '; } ?> 

               
              </div>
         
            
    </div>  
</div> 

    <!-- start new row --> 
    <div class="row autor-stute">
         <div class="col-md-4">
             <div class="stute">
               posts cont  
                 <span><?php echo count_user_posts(get_the_author_meta('id'))?> </span>
             </div>
        </div>

        <div class="col-md-4">
             <div class="stute">commment count
                 <span>
                <?php     $args = array(
                    'user_id' =>get_the_author_meta('id') ,   // Use user_id.
                    'count'   => true               // Return only the count.
                        );
                     $comments_count = get_comments( $args );
 
                     echo $comments_count; ?>
                 </span>
             </div>
        </div>

         <div class="col-md-4"> 
             <div class="stute"> total post view
                 <span>0</span>
            </div>
        </div>
        
        
    </div>
     <!-- end new row -->

     <!-- start new row for posts -->
    <div class="row">
<?php 
if(count_user_posts(get_the_author_meta('id'))>=6){
$posts_per_page = 6;
}
else{
$posts_per_page ='';
}
?>
<div class="col-sm-12">
        <?php 
        if(have_posts()) { ?>

       <h3 class="author-posthead">latest <?php echo $posts_per_page ;?> posts of <?php the_author_meta('nickname') ?></h3> 
       <?php    } ?>

    </div>
    </div>

    <div class="row author-posts">
 
    <?php
        $posts_per_page = 6;
        $query_argument=array(
          'author' =>get_the_author_meta('id'),
         'posts_per_page'=>$posts_per_page
        );
        $the_query = new wp_query($query_argument);
        if($the_query->have_posts()) {
           
            while($the_query->have_posts()){

                $the_query->the_post(); ?>
       
     
                <div class="col-sm-2">
                <?php the_post_thumbnail('', ['class' => 'img-responsive img-thumbnail', 'title' => 'Feature image']); ?>     
                </div>
        
                <div class="col-sm-9">
                      <h3 class="post-title">
                         <a href="<?php the_permalink() ?>">
                             <?php the_title(); ?>
                          </a>
                        </h3>
                      
                        <span class="post-data">
                            <i class="fa fa-calendar fa-fw"></i><?php the_time('F jS, Y'); ?>
                        </span>
                        <span class="post-comment">
                            <i class="fa fa-comment fa-fw"></i><?php comments_popup_link( 'No comments yet', '1 comment', '% comments', 'comments-link', 'Comments are off for this post');?>
                        </span>
                      
                        <div class="post-content">
                         <?php the_excerpt();    ?>
                        </div> 
                   
                </div>
  
  
           <?php     
                
        }
    } 
      wp_reset_postdata();
        ?>
    </div>
    <!-- end new row -->
<?php
    
        $comment_per_page = 4;
         $comment_argument=array(
            'user_id' => get_the_author_meta('id'),
            'status' => 'approve',
            'number' => $comment_per_page,
            'post_status' => 'publish',
	        'post_type' => 'post'
        );
         $comments = get_comments($comment_argument);
            if($comments){ ?>
            <h3 class="author-posthead">latest comments of <?php the_author_meta('nickname') ?></h3>
            
            <?php  foreach($comments as $comment){ ?>
            <div class="author-comment">
           <a href="<?php the_permalink($comment->comment_post_ID) ?>">
            <?php  echo get_the_title( $comment->comment_post_ID ); ?>
        </a>
        <br>
         <span class="comment-data">
         <i class="fa fa-calendar fa-fw"></i><?php echo mysql2date( 'l, F j, Y', $comment->comment_date  )  ; ?>
         </span>
        
        <br>
         <span class="post-comment">
         <i class="fa fa-comment fa-fw"></i><?php  echo  $comment->comment_content ; ?>
        </span>
       
      
</div>
      <?php  } ?>
                
          <?php   } 
            else { echo '<h2> this Author dosent have any comment </h2>';
            }
       
      
        ?>
 </div>


<?php get_footer(); ?>