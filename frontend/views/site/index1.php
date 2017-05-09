<?php
/* @var $this yii\web\View */
$this->title = Yii::$app->name;
?>
<div class="container">
<div class="site-index">

    <?php echo \common\widgets\DbCarousel::widget([
        'key'=>'index',
        'options' => [
            'class' => 'slide', // enables slide effect
            'style' => 'width:1000px;margin:auto'
        ],
    ]) ?>

    <h2 class="block-title block-title--bottom">新闻</h2>

    <body>



        <section class="container">
            <h3 class="not-visible">Main conrainer</h3>
            <div class="row">
                <?php echo \yii\widgets\ListView::widget([
                    'dataProvider'=>$dataProvider['data0'],
                   'pager'=>[
                        'hideOnSinglePage'=>true,
                    ]
                    ,'summary'=>'',
                    'itemView'=>'_item'
                ])?>
            </div>
        </section><!-- end container -->

        <div class="number-container bottom-space--small">
            <div class="container">
                <div class="row">
                    <h2 class="block-title block-title--simple" id="number-start">Allec in Numbers</h2>


                    <!-- Brand shape stat view -->
                    <div class="col-xs-6 col-md-3 one-column">
                        <div class="stat stat--shape">
                            <p class="stat__dimension">download</p>
                            <span class="stat__number" data-result="140k" data-value="140">0</span>
                        </div>
                    </div><!-- end col -->

                    <div class="col-xs-6 col-md-3 one-column">
                        <div class="stat stat--shape stat--shape-end">
                            <p class="stat__dimension">spent hours</p>
                            <span class="stat__number" data-result="6718" data-value="471">0</span>
                        </div>
                    </div><!-- end col -->

                    <div class="col-xs-6 col-md-3 one-column">
                        <div class="stat stat--shape">
                            <p class="stat__dimension">countries</p>
                            <span class="stat__number" data-result="106" data-value="106">0</span>
                        </div>
                    </div><!-- end col -->

                    <div class="col-xs-6 col-md-3 one-column">
                        <div class="stat stat--shape last">
                            <p class="stat__dimension">loyal clients</p>
                            <span class="stat__number" data-result="239" data-value="23">0</span>
                        </div>
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </div>

        <section class="container">
            <h2 class="block-title block-title--top-larger">Our Partners</h2>
        </section>

        <!-- Slider with 2 sides arrow -->
        <div class="full-carousel carousel-present-sm">
            <div class="container">
                <div class="swiper-container carousel-sides">
                    <div class="swiper-wrapper">
                        <?php echo \yii\widgets\ListView::widget([
                            'dataProvider'=>$dataProvider['data1'],
                            'pager'=>[
                                'hideOnSinglePage'=>true,
                            ]
                            ,'summary'=>'',
                            'itemView'=>'_itemTeacher'
                        ])?>
                        <!--Slide-->
                        <a href="#" class="swiper-slide" data-src="http://placehold.it/300x200" data-head="Beeznees">
                            <div class="image-container image-container--border">
                                <img src="http://placehold.it/526x526" alt="">
                            </div>
                        </a>

                        <!--Slide-->
                        <a href="#" class="swiper-slide" data-src="http://placehold.it/300x200" data-head="AMovie">
                            <div class="image-container image-container--border">
                                <img src="http://placehold.it/526x526" alt="">
                            </div>
                        </a>

                        <!--Slide-->
                        <a href="#" class="swiper-slide" data-src="http://placehold.it/300x200" data-head="Appcorner">
                            <div class="image-container image-container--border">
                                <img src="http://placehold.it/526x526" alt="">
                            </div>
                        </a>

                        <!--Slide-->
                        <a href="#" class="swiper-slide" data-src="http://placehold.it/300x200" data-head="Бандлер">
                            <div class="image-container image-container--border">
                                <img src="http://placehold.it/526x526" alt="">
                            </div>
                        </a>

                    </div><!--end swiper wrapper-->
                </div><!--end swiper container-->
            </div><!--end swiper container-->

            <div class="leftside-arrow">
                <i class="fa fa-angle-left"></i>
                <div class="slide-preview">
                    <img class="img-arrow img-prev" src="#" alt="">
                    <span class="arrow-heading"></span>
                </div>
            </div>
            <div class="rightside-arrow">
                <i class="fa fa-angle-right"></i>
                <div class="slide-preview">
                    <img class="img-arrow img-next" src="#" alt="">
                    <span class="arrow-heading"></span>
                </div>
            </div>
            <!--end swiper controls-->
        </div>
        <!-- end slider with 2 sides arrow -->

        <div class="container">
            <h2 class="block-title block-title--top-larger">Available Services</h2>
        </div>

        <!-- Fading slider -->
        <div class="swiper-container fading-slider">
            <div class="swiper-wrapper">
                <!--Slide-->
                <div class="swiper-slide swiper-no-swiping">
                    <!-- Sevrice preview -->
                    <div class="service">
                        <div class="icon icon--strips">
                            <i class="icon__item fa fa-credit-card"></i>
                        </div>
                        <a class="service__link" href="single-service.html">
                            <h3 class="service__heading">Reasonable Price</h3>
                        </a>

                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque in lacinia quam. Fusce quis nulla tincidunt, interdum magna vitae, viverra est. Nunc eu sodales turpis, varius viverra mauris.</p>
                    </div>
                    <!-- end sevrice preview -->
                </div>

                <!-- Slide-->
                <div class="swiper-slide swiper-no-swiping">
                    <!-- Sevrice preview -->
                    <div class="service">
                        <div class="icon icon--strips">
                            <i class="icon__item fa fa-heart"></i>
                        </div>
                        <a class="service__link" href="single-service.html">
                            <h3 class="service__heading">Made with Love</h3>
                        </a>

                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque in lacinia quam. Fusce quis nulla tincidunt, interdum magna vitae, viverra est. Nunc eu sodales turpis, varius viverra mauris.</p>
                    </div>
                    <!-- end sevrice preview -->
                </div>

                <!--Slide-->
                <div class="swiper-slide swiper-no-swiping">
                    <!-- Sevrice preview -->
                    <div class="service">
                        <div class="icon icon--strips">
                            <i class="icon__item fa fa-cogs"></i>
                        </div>
                        <a class="service__link" href="single-service.html">
                            <h3 class="service__heading">Fully Customizable</h3>
                        </a>

                        <p>Nullam lacinia nibh et nisi luctus rhoncus. Cras vitae purus volutpat, rhoncus mauris quis, elementum neque. In cursus magna eget consequat placerat. Nulla facilisi. </p>
                    </div>
                    <!-- end sevrice preview -->
                </div>

                <!-- Slide-->
                <div class="swiper-slide swiper-no-swiping">
                    <!-- Sevrice preview -->
                    <div class="service">
                        <div class="icon icon--strips">
                            <i class="icon__item fa fa-phone"></i>
                        </div>
                        <a class="service__link" href="single-service.html">
                            <h3 class="service__heading">Premium-class Support</h3>
                        </a>

                        <p>Sed eget placerat arcu. Nullam porta faucibus ligula, egestas tempus tellus dapibus tincidunt. Nunc vitae interdum massa. Nam in augue quis elit sagittis accumsan.</p>
                    </div>
                    <!-- end sevrice preview -->
                </div>


                <!--Slide-->
                <div class="swiper-slide swiper-no-swiping">
                    <!-- Sevrice preview -->
                    <div class="service">
                        <div class="icon icon--strips">
                            <i class="icon__item fa fa-dashboard"></i>
                        </div>
                        <a class="service__link" href="single-service.html">
                            <h3 class="service__heading">Efficient Workflow</h3>
                        </a>

                        <p>Sed eget placerat arcu. Nullam porta faucibus ligula, egestas tempus tellus dapibus tincidunt. Nunc vitae interdum massa. Nam in augue quis elit sagittis accumsan.</p>
                    </div>
                    <!-- end sevrice preview -->
                </div>

                <!--Slide-->
                <div class="swiper-slide swiper-no-swiping">
                    <!-- Sevrice preview -->
                    <div class="service">
                        <div class="icon icon--strips">
                            <i class="icon__item fa fa-magic"></i>
                        </div>
                        <a class="service__link" href="single-service.html">
                            <h3 class="service__heading">Innovative Technologies</h3>
                        </a>

                        <p>Sed eget placerat arcu. Nullam porta faucibus ligula, egestas tempus tellus dapibus tincidunt. Nunc vitae interdum massa. Nam in augue quis elit sagittis accumsan.</p>
                    </div>
                    <!-- end sevrice preview -->
                </div>

            </div>

            <div class="fade-slider-control">
                <a class="prev-arrow" href="#"><i class="fa fa-angle-left"></i></a>
                <a class="next-arrow" href="#"><i class="fa fa-angle-right"></i></a>
            </div><!-- end slider controls-->

            <div class="clearfix"></div>

            <div class="product-slider-pagination fade-pagination"></div>

        </div>

        <div class="container">
            <div class="devider-brand"></div>
        </div>

        <div class="container">
            <h2 class="block-title block-title--simple block-title--bottom-s block-title--top-large">Check Allec in Action</h2>

            <div class="row animated-row">
                <div class="col-sm-12 col-md-6 col-md-push-3">
                    <div class="image-container image-container--empty animated fadeInUpStart start-2">
                        <div class="video-container video-container--large">
                            <iframe src="http://player.vimeo.com/video/18776121?title=0&amp;byline=0&amp;portrait=0" width="100%" height="100%" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                </div><!-- end col -->

                <div class="col-sm-6 col-md-3 col-md-pull-6">
                    <ul class="list list--bordered list--top-line animated fadeInUpStart start-1">
                        <li>Etiam augue sem, pellentesque </li>
                        <li>Duis nec neque posuere, gravida</li>
                        <li>Cras felis nunc, tempus ut</li>
                        <li>Ut tincidunt varius pellentesque. Aenean laoreet nibh et nulla </li>
                        <li>Donec imperdiet posuere dolor, at fringilla augue</li>
                    </ul>
                </div><!-- end col -->


                <div class="col-sm-6 col-md-3">
                    <ul class="list list--bordered list--top-line animated fadeInUpStart start-3">
                        <li>Etiam augue sem, pellentesque </li>
                        <li>Duis nec neque posuere, gravida</li>
                        <li>Cras felis nunc, tempus ut</li>
                        <li>Ut tincidunt varius pellentesque. Aenean laoreet nibh et nulla </li>
                        <li>Donec imperdiet posuere dolor, at fringilla augue</li>
                    </ul>
                </div><!-- end col -->
            </div><!-- end row -->

            <div class="devider-brand"></div>

            <div class="col-sm-10 col-sm-offset-1">
                <div class="short-text short-text--uni animated fadeInStart">
                    <h4>Nullam lacinia nibh et nisi luctus rhoncus. Cras vitae purus volutpat, rhoncus mauris quis, elementum neque. </h4>

                    <p>In cursus magna eget consequat placerat. Nulla facilisi. Ut pretium quis lacus quis mollis. Aenean justo mi, adipiscing a ligula id, lobortis porttitor arcu. Cras tincidunt tempus est a scelerisque. Maecenas adipiscing nulla sapien, non laoreet orci accumsan tempus. Vestibulum cursus nisi ut purus lobortis, non aliquet mauris pulvinar.  </p>

                    <a class="link link--top" href="about.html">Learn more</a>
                </div>
            </div>
        </div>

        <!-- Colored devider -->
        <div class="devider-color bottom-space--m"></div>

        <!-- Footer section -->
        <footer class="footer">
            <div class="container">
                <!-- Twitter carousel -->
                <div class="swiper-container">
                    <div class="swiper-wrapper" id="twitter-feed"></div>
                    <!-- Slider pagination -->
                    <div class="swiper-pagination"></div>
                </div>

                <div class="row">

                    <!-- Latest post -->
                    <div class="col-sm-4">
                        <h3 class="heading-info">Latest from blog:</h3>

                        <div class="row">
                            <div class="col-xs-6 col-sm-12 one-column">
                                <article class="post post--latest">
                                    <h3 class="not-visible">Latest post</h3>
                                    <a class="post__images" href="single-post.html">
                                        <img src="http://placehold.it/160x160" alt="">
                                    </a>
                                    <a class="post__text" href="single-post.html">Mauris orci purus, ultrices dapibus justo non, eleifend consequat lorem. </a>
                                    <time datetime="2014-07-17" class="post__date">July 17, 2014</time>
                                </article>
                            </div>

                            <div class="col-xs-6 col-sm-12 one-column">
                                <article class="post post--latest">
                                    <h3 class="not-visible">Latest post</h3>
                                    <a class="post__images" href="single-post.html">
                                        <img src="http://placehold.it/160x160" alt="">
                                    </a>
                                    <a class="post__text" href="single-post.html">Pellentesque et magna malesuada, scelerisque elit ac, convallis lacus. </a>
                                    <time datetime="2014-07-16" class="post__date">July 16, 2014</time>
                                </article>
                            </div>
                        </div>
                    </div>
                    <!-- end latest post -->

                    <!-- Contact info about company -->
                    <div class="col-sm-4">
                        <h3 class="heading-info heading-info--mobile">Contact info:</h3>
                        <!-- Contact information about company -->
                        <address class="contact-info contact-info--list">
                            <div class="row">
                                <div class="col-xs-6 col-sm-12 one-column">
									<span class="contact-info__item">
										<i class="fa fa-location-arrow"></i>
										101 West Street, New York, NY 12345
									</span>
                                    <span class="contact-info__item">
										<i class="fa fa-mobile"></i>
										+1-888-555-5555 / +1-888-123-3535
									</span>
                                </div>

                                <div class="col-xs-6 col-sm-12 one-column">
									<span class="contact-info__item">
										<i class="fa fa-envelope"></i>
										info@allec.com / sales@allec.com
									</span>
                                    <span class="contact-info__item">
										<i class="fa fa-skype"></i>
										allec-support
									</span>
                                </div>
                            </div>
                        </address>
                        <!-- end contact information -->
                    </div>
                    <!-- end contact info -->

                    <!-- Social links -->
                    <div class="col-sm-4">
                        <h3 class="heading-info heading-info--mobile">We’re social:</h3>
                        <div class="social social--default">
                            <!-- List with social icons -->
                            <ul>
                                <li class="social__item"><a class="social__link" href="https://twitter.com/OliaGozha" target="_blank"><i class="social__icon fa fa-twitter"></i></a></li>
                                <li class="social__item"><a class="social__link" href="https://www.facebook.com/olia.gozha" target="_blank"><i class="social__icon fa fa-facebook"></i></a></li>
                                <li class="social__item"><a class="social__link" href="https://plus.google.com/u/0/+OliaGozha/posts" target="_blank"><i class="social__icon fa fa-google-plus"></i></a></li>
                                <li class="social__item"><a class="social__link" href="#" target="_blank"><i class="social__icon fa fa-pinterest"></i></a></li>
                                <li class="social__item"><a class="social__link" href="#" target="_blank"><i class="social__icon fa fa-tumblr"></i></a></li>
                                <li class="social__item"><a class="social__link" href="http://www.linkedin.com/pub/olia-gozha/49/b91/268" target="_blank"><i class="social__icon fa fa-linkedin"></i></a></li>
                                <li class="social__item"><a class="social__link" href="#" target="_blank"><i class="social__icon fa fa-youtube"></i></a></li>
                                <li class="social__item"><a class="social__link" href="#" target="_blank"><i class="social__icon fa fa-github-alt"></i></a></li>
                                <li class="social__item"><a class="social__link" href="#" target="_blank"><i class="social__icon fa fa-flickr"></i></a></li>
                                <li class="social__item"><a class="social__link" href="#" target="_blank"><i class="social__icon fa fa-vimeo-square"></i></a></li>
                                <li class="social__item"><a class="social__link" href="http://dribbble.com/OliaGozha" target="_blank"><i class="social__icon fa fa-dribbble"></i></a></li>
                                <li class="social__item"><a class="social__link" href="#" target="_blank"><i class="social__icon fa fa-stumbleupon"></i></a></li>
                                <li class="social__item"><a class="social__link" href="http://instagram.com/olechka_dumka#" target="_blank"><i class="social__icon fa fa-instagram"></i></a></li>
                                <li class="social__item"><a class="social__link" href="#" target="_blank"><i class="social__icon fa fa-soundcloud"></i></a></li>
                                <li class="social__item"><a class="social__link" href="http://www.behance.net/olia_gozha" target="_blank"><i class="social__icon fa fa-behance"></i></a></li>
                                <li class="social__item"><a class="social__link" href="#" target="_blank"><i class="social__icon fa fa-vine"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- end social links -->
                </div><!-- end row -->

                <div class="copy">
                    &copy; Allec, 2014. All rights reserved. More Templates <a href="http://www.cssmoban.com/" target="_blank" title="模板之家">模板之家</a> - Collect from <a href="http://www.cssmoban.com/" title="网页模板" target="_blank">网页模板</a>
                </div>

            </div><!-- end container -->
        </footer>
        <!-- end footer section -->

        <div class="top-scroll"><i class="fa fa-angle-up"></i></div>

    </div>
</div>

</div>
<script>
    $(document).ready(function() {
        numberStart();
        sliderSides();
    });
</script>
