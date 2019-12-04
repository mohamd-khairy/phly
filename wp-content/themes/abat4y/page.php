 <?php get_header(); ?>

        <?php 
        if(have_posts()) {
            while(have_posts()){

                the_post();
                bannerpanel();
                ?>
                

    <div class="container container--narrow page-section">
        <?php
          $theparent = wp_get_post_parent_id(get_the_ID());
            if($theparent){ ?>

               <div class="metabox metabox--position-up metabox--with-home-link">
                    <p><a class="metabox__blog-home-link" href="<?php echo get_the_permalink($theparent) ?>"><i class="fa fa-home" aria-hidden="true"></i>Back to <?php echo get_the_title($theparent);?> </a> <span class="metabox__main"><?php the_title();?></span></p>
                   </div>  

               <?php }
            ?>

        <?php 
        // it is a parent page 
        $test_array= get_pages(array(
             'child_of' => get_the_id()

        ));  
    // if current page has a parenr or if it`s a parent 

    if($theparent or  $test_array ){ ?>
          
    <div class="page-links">
      <h2 class="page-links__title"><a href="<?php echo get_the_permalink($theparent) ?>"><?php echo get_the_title($theparent);?> </a></h2>
      <ul class="min-list">
        <?php
                if($theparent){
                $child_page_id = $theparent;
                }
                else{
                    $child_page_id = get_the_id();
                }
            wp_list_pages(array(
                
                'title_li'=>false,
                'child_of' => $child_page_id,
                'sort_column'  => 'menu_order'
            ));
          ?>

      
      </ul>
    </div>
          <?php } ?>

    <div class="generic-content">
        <?php the_content(); ?>
    </div>

  </div>

  <div class="page-section page-section--beige">
    <div class="container container--narrow generic-content">
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia voluptates vero vel temporibus aliquid possimus, facere accusamus modi. Fugit saepe et autem, laboriosam earum reprehenderit illum odit nobis, consectetur dicta. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos molestiae, tempora alias atque vero officiis sit commodi ipsa vitae impedit odio repellendus doloremque quibusdam quo, ea veniam, ad quod sed.</p>

      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia voluptates vero vel temporibus aliquid possimus, facere accusamus modi. Fugit saepe et autem, laboriosam earum reprehenderit illum odit nobis, consectetur dicta. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos molestiae, tempora alias atque vero officiis sit commodi ipsa vitae impedit odio repellendus doloremque quibusdam quo, ea veniam, ad quod sed.</p>
    </div>
  </div>

  <div class="page-section page-section--white">

   <div class="container container--narrow">
     
          <?php

             $professor= new wp_query(array(
              'posts_per_page' => -1,
              'post_type'=>'professer',
              'orderby'=>'title',
               'order'=>'ASC'
                
              
          ));
             
                if( $professor->have_posts()){
            echo "<hr class='section-break'>";
             echo "<h2 class='headline headline--medium'>". " Professors</h2>";
                     echo "<hr class='section-break'>";
             echo ' <ul class="professor-cards">';
             
             while( $professor->have_posts()){
             $professor->the_post(); ?>
               
                   <li class="professor-card__list-item">
                   <a href="<?php the_permalink(); ?>" class="professor-card">
                       <img class="professor-card__image" src="<?php the_post_thumbnail(); ?>">
                       <span class="professor-card__name"><?php the_title(); ?></span>
                     </a>
                   </li>
                 
                
               
             <?PHp   }}
               
             echo '</ul>'; ?>
             
     
     <hr class="section-break">

    <div class="row group generic-content">

      <div class="one-third">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia voluptates vero vel temporibus aliquid possimus, facere accusamus modi. Fugit saepe et autem, laboriosam earum reprehenderit illum odit nobis, consectetur dicta. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos molestiae, tempora alias atque vero officiis sit commodi ipsa vitae impedit odio repellendus doloremque quibusdam quo, ea veniam, ad quod sed.</p>
      </div>

      <div class="one-third">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia voluptates vero vel temporibus aliquid possimus, facere accusamus modi. Fugit saepe et autem, laboriosam earum reprehenderit illum odit nobis, consectetur dicta. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos molestiae, tempora alias atque vero officiis sit commodi ipsa vitae impedit odio repellendus doloremque quibusdam quo, ea veniam, ad quod sed.</p>
      </div>

      <div class="one-third">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia voluptates vero vel temporibus aliquid possimus, facere accusamus modi. Fugit saepe et autem, laboriosam earum reprehenderit illum odit nobis, consectetur dicta. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos molestiae, tempora alias atque vero officiis sit commodi ipsa vitae impedit odio repellendus doloremque quibusdam quo, ea veniam, ad quod sed.</p>
      </div>
    </div>

  </div>

</div>
           <?php     
                
        }
    }  ?>



<?php get_footer(); ?> 
              



