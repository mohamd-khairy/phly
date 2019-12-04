<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since 1.0.0
 */

get_header();
?>

<div class="container text-center content">
        <p class="text-center newText pb-3">NEW YORK CITY</p>
        <h1 class="pb-2">
            <b>Our lives</b> in the <b> city </b> are <br> about to <b>Change</br>
        </h1>
        <h2 class="pt-3 pb-2 txtSocial">a social neighborhood network where you can share,<br>
            engage and discover your city like never before.
        </h2>
        <h6 class="pt-3 pb-2">AVAILABLE ON </h6>
        <h5>
            <span><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/icons-apple.svg" class="mr-2"></a> <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/googleplay.svg"></a></span>
        </h5>
    </div>

    <div id="poster" class="video text-center">
        <button class="btn btn-link"><img id="play" data-toggle="modal" data-target="#exampleModal" class="imgPlay" src="<?php echo get_template_directory_uri(); ?>/images/video-play-ico.svg"></button>
        <img width="100%" class="imagePoster" height="600" src="<?php echo get_template_directory_uri(); ?>/images/bitmap.png">
    </div>

    

    <div class="details bg-white pt-5 px-3 pb-1">
        <div class="container">
            <h6 class="text-center textPage2 font-weight-bold pb-4">AS SEEN ON</h6>
            <img src="<?php echo get_template_directory_uri(); ?>/images/partner.svg" class="mt-2" width="100%">
            <img src="<?php echo get_template_directory_uri(); ?>/images/map.svg" class="mx-auto imgMap d-block pt-5">
            <div class="pt-5">
                <h3 class="txtDetails">With its 3D map and unique features, PHLY offers a one in a kind brand new visual
                    social experience</h3>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <!-- <div class="modal-content">
                <div class="modal-body p-0"> -->
                    <div id="video" class="modal-content">
                        <iframe width="100%" height="600" frameborder="0"
                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                <!-- </div>
            </div> -->
        </div>
    </div>

    <div class="connect">
        <div class="container">
            <div class="row" dir="rtl">
                <div class="col-lg-7 col-md7 col-sm-6">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/building.png" class="img-fluid imgBuild">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/mob.png" class="imgEdit">
                    <h6 class="text-center textPage" dir="ltr"> Available on 
                        <span><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/googleplay.svg" class="mr-2 ml-2"></a> <a href="#"><img src="images/icons-apple.svg"></a></span>
                    </h6>
                </div>

                <div class="col-lg-5 col-md-5 col-sm-6" dir="ltr">
                    <div class="pt-3 links px-3">
                        <h5 class="textPage3 pl-2 font-weight-bold">CONNECT</h5>
                        <h2 class="txtConnect pt-2">Get closer to places around you</h2>
                        <p class="pConnect pt-3">“Places” is rooted in our identity & personal characteristics; being
                            where we live, work, study & hangout. Phly taps on this and connect us with those in our
                            daily places and areas.</p>
                        <div class="media pt-3">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/dashboard.png" class="mr-3">
                            <div class="media-body">
                                <p class="text-muted">Discover Amazing places you’ve been ditching</p>
                            </div>
                        </div>

                        <div class="media pt-3">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/Group-17.svg" class="mr-3">
                            <div class="media-body">
                                <p class="text-muted">Automatic Day & Night Modes</p>
                            </div>
                        </div>
                        
                        <div class="media pt-3">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/chat.svg" class="mr-3">
                            <div class="media-body">
                                <p class="text-muted">Integrated Chat Platform</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container section2">
            <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-6">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/smile-comment.svg" class="img-fluid imgBuild">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/mob.png" class="imgEdit2">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/mob2.png" class="imgEdit3">
                </div>
                <div class="col-1"></div>
                <div class="col-lg-6 col-md-6 col-sm-6" dir="ltr">
                    <div class="rightSection px-3">
                        <h5 class="textPage3 pl-2 font-weight-bold">CONNECT</h5>
                        <h2 class="txtConnect pt-2">Get closer to people around you</h2>
                        <p class="pConnect pt-4">
                                Established Friends’ circles & common-interest groups can share content & activities at the Places of their life. Here, they harness Places’ visual identity to strengthen the sense of community & expand through Phly’s unique use cases
                        </p>
                        <div class="media pt-3">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/flash.svg" class="mr-3">
                            <div class="media-body">
                                <p class="text-muted">Lightning fast enviroment</p>
                            </div>
                        </div>
                        <div class="media pt-3">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/gMap.svg" class="mr-3">
                            <div class="media-body">
                                <p class="text-muted">Explore who’s doing what nearby</p>
                            </div>
                        </div>
                        <div class="media pt-3">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/chat.svg" class="mr-3">
                            <div class="media-body">
                                <p class="text-muted">Integrated Chat Platform</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="joins">
        <div class="container" id="join">
            <button class="btn btnJoin mx-auto d-block text-white mb-3">Join the waiting list now</button>
            <div class="features">
                <h5 class="text-center textPage2 font-weight-bold">FEATURES</h5>
                <h1 class="txtDetails2 pt-1">Here’s why you will love using Phly</h1>
                <div class="row pt-5">
                    <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                        <div class="subFeature text-center">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/playVideo.svg" class="mx-auto d-block">
                            <h6 class="text1 pt-3">Watch your neigborhood from a birds-eye view</h6>
                            <h6 class="text2">Track your favorite shows automatically without switching between apps.</h6>
                            <p class="text-center"><a href="#">Learn More <i class="fa fa-chevron-right"></i></a></p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                        <div class="subFeature text-center">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/connection.svg" class="mx-auto d-block">
                            <h6 class="text1 pt-3">Net-like connection between you and the people you love</h6>
                            <h6 class="text2">Get recommendations like never before, which are truly customized for your taste.</h6>
                            <p class="text-center"><a href="#">Learn More <i class="fa fa-chevron-right"></i></a></p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                        <div class="subFeature text-center">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/notified.svg" class="mx-auto d-block">
                            <h6 class="text1 pt-3">Get notified when theres an activity around you</h6>
                            <h6 class="text2">Receive smart notifications exactly at the right moments when you need them.</h6>
                            <p class="text-center"><a href="#">Learn More <i class="fa fa-chevron-right"></i></a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	
	
<?php
get_footer();
