<?php get_header(); ?>
<!--Contact Banner-->
    <section class="row">
        <div class="row m0 sub_banner overly relative">
            <div class="container overly-content text-center">
            	<div class="col-sm-12">
                    <h4>اتصل بنا</h4>
                </div>
            </div>
        </div>
    </section>

    <!--Contact Form-->
    <section class="row contact_content section-spacing bg-pattern">
        <div class="container">
            <div class="row form_row">
            	<div class="col-sm-3 cause2choose">
                    <div class="media border shadow bg-pattern">
                        <div class="media-left"><i class="ti-map-alt fa-5x text-gredient1"></i></div>
                        <div class="media-body">
                            <h4>موقعنا</h4>
                            <p>2451,Jdel Villa,6th Site,</p>
                            <p>East California 125,USA</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-3 cause2choose">
                    <div class="media border shadow bg-pattern">
                        <div class="media-left"><i class="ti-mobile fa-5x text-gredient1"></i></div>
                        <div class="media-body">
                            <h4>اتصل بنا علي</h4>
                            <p>(012) 45752 1254 05486</p>
                            <p>(015) 352 047 424 325</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-3 cause2choose">
                    <div class="media border shadow bg-pattern">
                        <div class="media-left"><i class="ti-email fa-5x text-gredient1"></i></div>
                        <div class="media-body">
                            <h4>ارسل رسالة</h4>
                            <p>info@website.com</p>
                            <p>support@website.com</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-3 cause2choose">
                    <div class="media border shadow bg-pattern">
                        <div class="media-left"><i class="ti-headphone-alt fa-5x text-gredient1"></i></div>
                        <div class="media-body">
                            <h4>24 / 7 مكتب المساعدة</h4>
                            <p>(012) 45752 1254 05486</p>
                            <p>(015) 352 047 424 325</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pattern1 section-spacing">
    	<div class="col-md-8 center-block">
        	<div class="bg_white padding30 radius shadow-dark text-right">
            	<h3>اترك رسالتك</h3>
                <div class="contactForm row m0">
                    <div class="contactForm">
                        <div class="row">
                           <div class="col-md-12">
                                    <div class="successMessage alert alert-success alert-dismissible fade in" role="alert" style="display: none;font-family: 'j';">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><i class="fa fa-times"></i></button>
                                        <strong> ! أحسنت</strong>! شكرا لك سوف نتصل بك قريبا
                                    </div>

                                    <div class="alert alert-warning alert-dismissible fade in" role="alert" style="display: none;font-family: 'j';">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><i class="fa fa-times"></i></button>
                                        <strong>! تحذير</strong> Ups! حدث خطأ. الرجاء معاودة المحاولة في وقت لاحق
                                    </div>
                                </div>
                            
                            
                        </div>
                        <br>
                        <form role="form" action="form/send.php" method="post" class="contact_form contactForm validateIt" data-email-subject="Contact Form" data-show-errors="true">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <input required type="text" name="field[]" class="name form-control" placeholder="Name">
                                    </div>
                                    <div class="form-group">
                                        <input required type="email" name="field[]" class="email form-control" placeholder="E-mail">
                                    </div>
                                    <div class="form-group">
                                        <input required type="tel" name="field[]" class="phonenumber form-control" placeholder="Phone">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <textarea class="form-control" rows="4" name="field[]" required placeholder="Your message"></textarea>
                                    </div>
                                    <button type="submit" class="submit btn btn-xlg btn-block btn-primary">ارسل الرسالة</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <img src="images/corner.png" alt="" class="image-background img-responsive relative">
    </section>

    <!--Contact Features-->
    <section class="row contact_content section-spacing bg-gray">
        <div class="container">
            <div class="sectionTitle p-bottom80">
                <h5>نحن</h5>
                <h2>ندعمك</h2>
            </div>
            <div class="row we_support">
                <div class="col-sm-12">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="media">
                                
                                <div class="media-body text-right">
                                    <h4 class="text-gredient1">دعم الدردشة الحية</h4>
                                    <p>Lorem ipsum dolor sit amet, dipiscing elit. Nulam eget</p>
                                </div>
                                
                                <div class="media-left">
                                    <i class="icon-chat fa-5x text-gredient1"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="media">
                                
                                <div class="media-body text-right">
                                    <h4 class="text-gredient1">قدم التذكرة</h4>
                                    <p>Lorem ipsum dolor sit amet, dipiscing elit. Nulam eget</p>
                                </div>
                                <div class="media-left">
                                    <i class="icon-clock fa-5x text-gredient1"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="media">
                                
                                <div class="media-body text-right">
                                    <h4 class="text-gredient1">دعم البريد الإلكتروني</h4>
                                    <p>Lorem ipsum dolor sit amet, dipiscing elit. Nulam eget</p>
                                </div>
                                <div class="media-left">
                                    <i class="icon-envelope fa-5x text-gredient1"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

  


<?php get_footer(); ?> 
