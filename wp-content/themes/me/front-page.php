<?php get_header(); ?>

<?php

$first_title = get_field('first_title', 7);
$second_title = get_field('second_title', 7);
$third_title = get_field('third_title', 7);
$first_section_image = get_field('image', 7);

$available_on_first_link = get_field('available_on_first_link', 7);
$available_on_second_link = get_field('available_on_second_link', 7);
?>

<div class="container text-center content">
    <p class="text-center newText pb-3"><?php echo $first_title; ?></p>
    <h1 class="pb-2">
        <!-- <b>Our lives</b> in the <b> city </b> are <br> about to <b>Change</br> -->
        <?php echo $second_title; ?>
    </h1>
    <h2 class="pt-3 pb-2 txtSocial"><?php echo $third_title; ?></h2>
    <h6 class="pt-3 pb-2">AVAILABLE ON </h6>
    <h5>
        <span><a href="<?php echo $available_on_first_link; ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/icons-apple.svg" class="mr-2"></a>
            <a href="<?php echo $available_on_second_link; ?>"> <img src="<?php echo get_template_directory_uri(); ?>/images/googleplay.svg"></a></span>
    </h5>
</div>

<div id="poster" class="video text-center">
    <button class="btn btn-link" style="background-color:#ffffff1a"><img id="play" data-toggle="modal" data-target="#exampleModal" class="imgPlay" src="<?php echo get_template_directory_uri(); ?>/images/video-play-ico.svg"></button>
    <img width="100%" class="imagePoster" height="600" src="<?php echo $first_section_image; ?>">
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <!-- <div class="modal-content">
                <div class="modal-body p-0"> -->
        <div id="video" class="modal-content">
            <iframe width="100%" height="600" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <!-- </div>
            </div> -->
    </div>
</div>


<?php

$first_img = get_field('first_img', 7);
$first_url = get_field('first_url', 7);
$second_img = get_field('second_img', 7);
$second_url = get_field('second_url', 7);
$third_img = get_field('third_img', 7);
$third_url = get_field('third_url', 7);
$fourth_img = get_field('fourth_img', 7);
$fourth_url = get_field('fourth_url', 7);
$five_img = get_field('five_image', 7);
$five_url = get_field('five_url', 7);
$six_img = get_field('six_img', 7);
$six_url = get_field('six_url', 7);

$first_text = get_field('first_text', 7);


?>

<div class="details bg-white pt-5 px-3 pb-1">
    <div class="container">
        <?php if(!empty($first_img) && !empty($second_img) && !empty($third_img) && !empty($fourth_img) && !empty($five_img) && !empty($six_img)){ ?> 

        <h6 class="text-center textPage2 font-weight-bold pb-4">AS SEEN ON</h6>
        <div class="row rowImg">
            <div class="col-2">
                <a href="<?php echo $first_url; ?>"><img src="<?php echo $first_img; ?>" title="Amazon.com" class="mx-auto d-block" width="90%" height="50px"></a>
            </div>
            <div class="col-2">
                <a href="<?php echo $second_url; ?>"><img src="<?php echo $second_img; ?>" title="Etsy.com" class="mx-auto d-block" width="70%" height="50px"></a>
            </div>
            <div class="col-2">
                <a href="<?php echo $third_url; ?>"><img src="<?php echo $third_img; ?>" title="clickbank.com" class="mx-auto d-block" width="90%" height="50px"></a>
            </div>
            <div class="col-2">
                <a href="<?php echo $fourth_url; ?>"><img src="<?php echo $fourth_img; ?>" title="Medium.com" class="mx-auto d-block" width="50%" height="50px"></a>
            </div>
            <div class="col-2">
                <a href="<?php echo $five_url; ?>"><img src="<?php echo $five_img; ?>" title="youtube.com" class="mx-auto d-block" width="90%" height="50px"></a>
            </div>
            <div class="col-2">
                <a href="<?php echo $six_url; ?>"><img src="<?php echo $six_img; ?>" title="KICKSTARTER.com" class="mx-auto d-block" width="90%" height="50px"></a>
            </div>
        </div>
        <?php } ?>
        <img src="<?php echo get_template_directory_uri(); ?>/images/map.svg" class="mx-auto imgMap d-block pt-5">
        <div class="pt-5">
            <h3 class="txtDetails"><?php echo $first_text; ?></h3>
        </div>
    </div>
</div>

<?php

$title = get_field('title', 7);
$sub_title = get_field('sub_title', 7);
$first_content = get_field('first_content', 7);
$second_content = get_field('second_content', 7);
$third_content = get_field('third_content', 7);
$mobile_image = get_field('mobile_image', 7);
$back_image = get_field('back_image', 7);


?>



<div class="connect">
    <div class="container">
        <div class="row" dir="rtl">
            <div class="col-lg-7 col-md7 col-sm-6">
                <img src="<?php echo $back_image; ?>" class="img-fluid imgBuild">
                <img src="<?php echo $mobile_image; ?>" class="imgEdit">
                <h6 class="text-center textPage" dir="ltr"> Available on
                    <span><a href="<?php echo $available_on_first_link; ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/googleplay.svg" class="mr-2 ml-2"></a>
                        <a href="<?php echo $available_on_second_link; ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/icons-apple.svg"></a></span>
                </h6>
            </div>

            <div class="col-lg-5 col-md-5 col-sm-6" dir="ltr">
                <div class="pt-3 links px-3">
                    <h5 class="textPage3 pl-2 font-weight-bold">CONNECT</h5>
                    <h2 class="txtConnect pt-2"><?php echo $title; ?></h2>
                    <p class="pConnect pt-3"><?php echo $sub_title; ?></p>
                    <div class="media pt-3">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/dashboard.png" class="mr-3">
                        <div class="media-body">
                            <p class="text-muted"><?php echo $first_content; ?></p>
                        </div>
                    </div>

                    <div class="media pt-3">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/Group-17.svg" class="mr-3">
                        <div class="media-body">
                            <p class="text-muted"><?php echo $second_content; ?></p>
                        </div>
                    </div>

                    <div class="media pt-3">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/chat.svg" class="mr-3">
                        <div class="media-body">
                            <p class="text-muted"><?php echo $third_content; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php

    $title2 = get_field('title2', 7);
    $sub_title2 = get_field('sub_title2', 7);
    $first_content2 = get_field('first_content2', 7);
    $second_content2 = get_field('second_content2', 7);
    $third_content2 = get_field('third_content2', 7);
    $mobile_image1 = get_field('mobile_image1', 7);
    $mobile_image2 = get_field('mobile_image2', 7);

    ?>
    <div class="container section2">
        <div class="row">
            <div class="col-lg-5 col-md-5 col-sm-6">
                <img src="<?php echo get_template_directory_uri(); ?>/images/smile-comment.svg" class="img-fluid imgBuild">
                <img src="<?php echo $mobile_image1; ?>" class="imgEdit2">
                <img src="<?php echo $mobile_image2; ?>" class="imgEdit3">
            </div>
            <div class="col-1"></div>
            <div class="col-lg-6 col-md-6 col-sm-6" dir="ltr">
                <div class="rightSection px-3">
                    <h5 class="textPage3 pl-2 font-weight-bold">CONNECT</h5>
                    <h2 class="txtConnect pt-2"><?php echo $title2; ?></h2>
                    <p class="pConnect pt-4">
                        <?php echo $sub_title2; ?>
                    </p>
                    <div class="media pt-3">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/flash.svg" class="mr-3">
                        <div class="media-body">
                            <p class="text-muted"><?php echo $first_content2; ?></p>
                        </div>
                    </div>
                    <div class="media pt-3">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/gMap.svg" class="mr-3">
                        <div class="media-body">
                            <p class="text-muted"><?php echo $second_content2; ?></p>
                        </div>
                    </div>
                    <div class="media pt-3">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/chat.svg" class="mr-3">
                        <div class="media-body">
                            <p class="text-muted"><?php echo $third_content2; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php

$head_text = get_field('head_text', 7);
$feature_title = get_field('feature_title', 7);
$first_section_title = get_field('first_section_title', 7);
$first_section_content = get_field('first_section_content', 7);
$second_section_title = get_field('second_section_title', 7);
$second_section_content = get_field('second_section_content', 7);
$third_section_title = get_field('third_section_title', 7);
$third_section_content = get_field('third_section_content', 7);

?>
<div class="joins">
    <div class="container" id="join">
        <button class="btn btnJoin mx-auto d-block py-3 text-white mb-3"><?php echo $head_text; ?></button>
        <div class="features">
            <h5 class="text-center textPage2 font-weight-bold">FEATURES</h5>
            <h1 class="txtDetails2 pt-1"><?php echo $feature_title; ?></h1>
            <div class="row pt-5">
                <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                    <div class="subFeature text-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/playVideo.svg" class="mx-auto d-block">
                        <h6 class="text1 pt-3"><?php echo $first_section_title; ?></h6>
                        <h6 class="text2"><?php echo $first_section_content; ?></h6>
                        <!-- <p class="text-center"><a href="#">Learn More <i class="fa fa-chevron-right"></i></a></p> -->
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                    <div class="subFeature text-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/connection.svg" class="mx-auto d-block">
                        <h6 class="text1 pt-3"><?php echo $second_section_title; ?></h6>
                        <h6 class="text2"><?php echo $second_section_content; ?></h6>
                        <!-- <p class="text-center"><a href="#">Learn More <i class="fa fa-chevron-right"></i></a></p> -->
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                    <div class="subFeature text-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/notified.svg" class="mx-auto d-block">
                        <h6 class="text1 pt-3"><?php echo $third_section_title; ?></h6>
                        <h6 class="text2"><?php echo $third_section_content; ?></h6>
                        <!-- <p class="text-center"><a href="#">Learn More <i class="fa fa-chevron-right"></i></a></p> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php

$contactus_title = get_field('contactus_title', 7);
$contactus_sub_title = get_field('contactus_sub_title', 7);
$background_image = get_field('background_image', 7);

?>

<section class="contactUs" id="contactUs" style="background:url(<?php echo $background_image; ?>)">
    <div class="hero-container">
        <h6 class="pt-5">GET PHLY</h6>
        <h1 class="pt-3 pb-2">
            <?php echo $contactus_title; ?>
        </h1>
        <!-- <h1>Contact Us</h1>
            <h2>PHLY LLC</h2>
            <h2>500 Delaware Ave Unit 1</h2>
            <h2>Wilmington, Delaware 19899-7101</h2>
            <h2>United States</h2>
            <h2><a href="mailto:Support@phly.io"> Support@phly.io </a></h2> -->
        <h5 class="pt-3">
            <?php echo $contactus_sub_title; ?>
        </h5>
        <!-- <div class="input-group pt-5 newsletter">
                <input type="email" class="form-control" placeholder="Enter your email">
                <span class="input-group-btn"><button class="btn text-white btnSign" type="submit">Join now</button></span>
            </div> -->

        <form method="post" enctype="multipart/form-data" action="/phly/?msg#contactUs">
            <input type="hidden" name="wpforms[id]" value="110">
            <input type="hidden" name="wpforms[author]" value="0">
            <input type="hidden" name="wpforms[post_id]" value="7">
            <div class="input-group pt-5 newsletter">
                <input type="email" name="wpforms[fields][1]" class="form-control" placeholder="Enter your email">
                <span class="input-group-btn">
                    <button class="btn text-white btnSign" type="submit">Join now</button>
                </span>
            </div>
        </form>

        <?php  if(isset($_GET['msg'])){ ?>
            <h5 class="pt-3 text-warning" id="msg"> Email Sent Successfully </h5>
        <?php } ?>
        <?php //  echo do_shortcode('[wpforms id="110" title="false" description="false"]') 
        ?>

        <h2 class="text-center textPage py-3"><span>SOON ON </span>
            <span><a href="<?php echo $available_on_first_link; ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/googleplay.svg" class="mr-3 ml-3"></a>
                <a href="<?php echo $available_on_second_link; ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/icons-apple.svg"></a></span></h2>
    </div>
</section>



<?php get_footer(); ?>