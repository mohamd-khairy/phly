<?php

if(comments_open()){ ?>
<h3> <?php comments_number( '0 comments', '1 comments', '% comments' ) ?> </h3>
<?php 
echo '<ul class="list-unstyled comments-list">';
$comment_argument= array(
           'avatar_size'  => 60,
            'max_depth'   => 5,
            'style'      => 'ol',
            'short_ping' => true,
            'type'      => 'comment'
);

wp_list_comments($comment_argument);


echo"</ul>";

     echo '<hr class="line-style">' ;  

      $comments_args = array(
        // Change the title of send button and class

        'submit_button'=> '<input  type="submit" name="send" value="send"   class="btn btn-primary" >',

        // Change the title of the reply section
        'title_reply' =>  'Write a Reply or Comment', 
        // Remove "Text or HTML to be displayed after the set of comment fields".
        'comment_notes_after' => '',
        // Redefine your own textarea (the comment body).
        'comment_field' => '<p class="comment-form-comment"><label for="comment">' . _x( 'Comment', 'noun' ) . '</label><br /><textarea id="comment" name="comment" aria-required="true"></textarea></p>',
);
comment_form( $comments_args );

}

else{
 
echo"comments not allowed here";
}



 ?>