<?php

/* @var $this yii\web\View */

$this->title = 'Название сайта';

?>
<div class="site-index">

    <!-- preloader start -->
    <div id="preloader">
        <div id="status"></div>
    </div>
    <!-- preloader end -->
<!---->
<!---->
<!--    <div class="switcher" style="left:-50px;"> <a id="switch-panel" class="hide-panel"> <i class="ion-gear-a"></i> </a>-->
<!--        <div id="switcher">-->
<!--            <ul class="colors-list">-->
<!--                <li><a href="#" class="red" id="custom-red"></a></li>-->
<!--                <li><a href="#" class="green" id="custom-green"></a></li>-->
<!--                <li><a href="#" class="purple" id="custom-purple"></a></li>-->
<!--                <li><a href="#" class="blue" id="custom-blue"></a></li>-->
<!--            </ul>-->
<!--        </div>-->
<!--    </div>-->


    <div class="wrapper">
        <!-- header toolbar start -->
        <div class="header-toolbar">
            <div class="container">
                <div class="row">
                    <div class="col-md-16 text-uppercase">
                        <div class="row">
                            <div class="col-sm-8 col-xs-16">
                                <ul id="inline-popups" class="list-inline">
                                    <li class="hidden-xs"><a href="#">advertisement</a></li>
                                    <li><a class="open-popup-link" href="#log-in" data-effect="mfp-zoom-in">log in</a></li>
                                    <li><a class="open-popup-link" href="#create-account" data-effect="mfp-zoom-in">create account</a></li>
                                    <li><a  href="#">About</a></li>
                                </ul>
                            </div>
                            <div class="col-sm-8 col-xs-16">
                                <div class="row">
                                    <div id="weather" class="col-lg-9 col-sm-8 col-xs-16"></div>
                                    <div id="time-date" class="col-lg-7 col-sm-8 col-xs-16"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- header toolbar end -->


        <!-- top sec start -->

        <div class="container">
            <div class="row">
                <!-- hot news start -->
                <div class="col-sm-16 hot-news hidden-xs">
                    <div class="row">
                        <div class="col-sm-15"> <span class="ion-ios7-timer icon-news pull-left"></span>
                            <ul id="js-news" class="js-hidden">
                                <?php foreach ($lastNews as $news) { ?>
                                <li class="news-item"><a href="#"><?php echo $this->escape($news['abridgment'])?></a></li>
                                <?php } ?>
                            </ul>
                        </div>
                        <div class="col-sm-1 shuffle text-right"><a href="#"><span class="ion-shuffle"></span></a></div>
                    </div>
                </div>
                <!-- hot news end -->
                <!-- banner outer start -->
                <div  class="col-sm-16 banner-outer wow fadeInLeft animated" data-wow-delay="1s" data-wow-offset="50">
                    <div class="row">
                        <div class="col-sm-16 col-md-10 col-lg-8">

                            <!-- carousel start -->
                            <div id="sync1" class="owl-carousel">
                                <?php foreach ($currentNews as $news)
                                { ?>
                                <div class="box item"> <a href="?r=site%2Fview&id=<?php echo $this->escape($news['post_id'])?>">
                                        <div class="carousel-caption"><?php echo $this->escape($news['abridgment']) ?></div>
                                        <img  src="images/banner-slider/slide-img-2.jpg" width="762" height="360" alt=""/>
                                        <div class="overlay"></div>
                                        <div class="overlay-info">
                                            <div class="cat">
                                                <p class="cat-data"><span class="ion-flask"></span><?php echo $this->escape($news['category_id']) ?></p>
                                            </div>
                                            <div class="info">
                                                <p>
                                                    <span class="ion-android-data"></span><?php echo $this->escape($news['date']) ?>
<!--                                                    <span class="ion-chatbubbles"></span>351-->
                                                </p>
                                            </div>
                                        </div>
                                    </a></div>
                                <?}?>
                            </div>
                            <div class="row">
                                <div id="sync2" class="owl-carousel">
                                    <?php foreach ($currentNews as $news)
                                    {?>
                                    <div class="item"><img class="img-responsive" src="images/banner-slider/slide-img-2.jpg" width="762" height="360" alt=""/></div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>


                        <div class="col-sm-6 col-md-6 col-lg-8 hidden-sm hidden-xs">
                            <div class="row">
                                <div class="col-lg-6 hidden-md"><a href="#">
                                        <div class="box">
                                            <div class=" carousel-caption">Extreme biking:
                                                dangerous, dirty
                                                and Fun</div>
                                            <img class="match-height" src="images/banner-static/bs-1.jpg" width="236" height="480"  alt="" />
                                            <div class="overlay"></div>
                                            <div class="overlay-info">
                                                <div class="cat">
                                                    <p class="cat-data"><span class="ion-model-s"></span>Lifestyle</p>
                                                </div>
                                                <div class="info">
                                                    <p><span class="ion-android-data"></span>Dec 16 2014<span class="ion-chatbubbles"></span>351</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a> </div>
                                <div class="col-md-16 col-lg-10">
                                    <div class="row">
                                        <div class="col-sm-16 right-img-top "> <a href="#">
                                                <div class="box">
                                                    <div class="carousel-caption">Best snack ever: mini mac and
                                                        cheese cupcakes</div>
                                                    <img class="img-responsive" src="images/banner-static/bs-2.jpg" width="440" height="292" alt=""/>
                                                    <div class="overlay"></div>
                                                    <div class="overlay-info">
                                                        <div class="cat">
                                                            <p class="cat-data"><span class="ion-model-s"></span>Lifestyle</p>
                                                        </div>
                                                        <div class="info">
                                                            <p><span class="ion-android-data"></span>Dec 16 2014<span class="ion-chatbubbles"></span>351</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a> </div>
                                        <div class="col-sm-16 right-img-btm "> <a href="#">
                                                <div class="box">
                                                    <div class="carousel-caption">Rolls Royce chicane phantom
                                                        coupé will terrify continental</div>
                                                    <img class="img-responsive" src="images/banner-static/bs-3.jpg" width="440" height="292" alt=""/>
                                                    <div class="overlay"></div>
                                                    <div class="overlay-info">
                                                        <div class="cat">
                                                            <p class="cat-data"><span class="ion-model-s"></span>Lifestyle</p>
                                                        </div>
                                                        <div class="info">
                                                            <p><span class="ion-android-data"></span>Dec 16 2014<span class="ion-chatbubbles"></span>351</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- banner outer end -->

            </div>
        </div>
        <!-- top sec end -->

        <!-- data start -->

        <div class="container ">
            <div class="row ">
                <!-- left sec start -->
                <div class="col-md-11 col-sm-11">
                    <div class="row">
                        <!-- business start -->
                        <div class="col-sm-16 business  wow fadeInDown animated" data-wow-delay="1s" data-wow-offset="50">
                            <div class="main-title-outer pull-left">
                                <div class="main-title">business</div>
                                <div class="span-outer"><span class="pull-right text-danger last-update"><span class="ion-android-data icon"></span>Last update: 2 days ago</span> </div>
                            </div>
                            <div class="row">
                                <div class="col-md-11 col-sm-16">
                                    <div class="row">
                                        <div class="col-md-8 col-sm-9 col-xs-16">
                                            <div class="topic"> <a href="#"><img class="img-thumbnail" src="images/business/business-main.jpg" width="600" height="398" alt=""/>
                                                    <h3>Famous artist share his tracks for free</h3>
                                                    <div class="text-danger sub-info-bordered">
                                                        <div class="time"><span class="ion-android-data icon"></span>Dec 9 2014</div>
                                                        <div class="comments"><span class="ion-chatbubbles icon"></span>204</div>
                                                        <div class="stars"><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star-half"></span></div>
                                                    </div>
                                                </a>
                                                <p>Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus.</p>
                                            </div>
                                        </div>
                                        <div class="col-md-8 col-sm-7 col-xs-16">
                                            <ul class="list-unstyled">
                                                <li> <a href="#">
                                                        <div class="row">
                                                            <div class="col-sm-5 hidden-sm hidden-md"><img class="img-thumbnail pull-left" src="images/business/business-th-1.jpg" width="76" height="76" alt=""/> </div>
                                                            <div class="col-sm-16 col-md-16 col-lg-11">
                                                                <h4>Irish cream and chocolate
                                                                    cheesecake </h4>
                                                                <div class="text-danger sub-info">
                                                                    <div class="time"><span class="ion-android-data icon"></span>Dec 16 2014</div>
                                                                    <div class="comments"><span class="ion-chatbubbles icon"></span>351</div>
                                                                    <div class="stars"><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star-half"></span></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a> </li>
                                                <li> <a href="#">
                                                        <div class="row">
                                                            <div class="col-sm-5 hidden-sm hidden-md"><img class="img-thumbnail pull-left" src="images/business/business-th-2.jpg" width="76" height="76" alt=""/> </div>
                                                            <div class="col-sm-16 col-md-16 col-lg-11">
                                                                <h4>Nielsen forecasts smaller black friday </h4>
                                                                <div class="text-danger sub-info">
                                                                    <div class="time"><span class="ion-android-data icon"></span>Dec 16 2014</div>
                                                                    <div class="comments"><span class="ion-chatbubbles icon"></span>351</div>
                                                                    <div class="stars"><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star-half"></span></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a> </li>
                                                <li> <a href="#">
                                                        <div class="row">
                                                            <div class="col-sm-5 hidden-sm hidden-md"><img class="img-thumbnail pull-left" src="images/business/business-th-3.jpg" width="76" height="76" alt=""/> </div>
                                                            <div class="col-sm-16 col-md-16 col-lg-11">
                                                                <h4>Nielsen forecasts smaller black friday </h4>
                                                                <div class="text-danger sub-info">
                                                                    <div class="time"><span class="ion-android-data icon"></span>Dec 16 2014</div>
                                                                    <div class="comments"><span class="ion-chatbubbles icon"></span>351</div>
                                                                    <div class="stars"><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star-half"></span></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a> </li>
                                                <li> <a href="#">
                                                        <div class="row">
                                                            <div class="col-sm-5 hidden-sm hidden-md"><img class="img-thumbnail pull-left" src="images/business/business-th-4.jpg" width="76" height="76" alt=""/> </div>
                                                            <div class="col-sm-16 col-md-16 col-lg-11">
                                                                <h4>The evolution of the apple mouse</h4>
                                                                <div class="text-danger sub-info">
                                                                    <div class="time"><span class="ion-android-data icon"></span>Dec 16 2014</div>
                                                                    <div class="comments"><span class="ion-chatbubbles icon"></span>351</div>
                                                                    <div class="stars"><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star-half"></span></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a> </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-5 col-sm-16 hidden-sm hidden-xs  left-bordered">
                                    <div id="vid-thumbs" class="owl-carousel">
                                        <div class="item">
                                            <div class="vid-thumb-outer">
                                                <div class="vid-thumb"><a class="popup-youtube" href="https://www.youtube.com/watch?v=TEnNaUg6Vm4">
                                                        <div class="vid-box"><span class="ion-ios7-film"></span><img class="img-thumbnail img-responsive" src="images/business/business-vid-1.jpg" width="250" height="143" alt=""/> </div>
                                                        <h4>Perspiciatis unde omnis iste natus</h4>
                                                    </a> </div>
                                                <div class="vid-thumb"><a class="popup-youtube" href="http://vimeo.com/7396421">
                                                        <div class="vid-box"><span class="ion-ios7-film"></span><img class="img-thumbnail img-responsive" src="images/business/business-vid-2.jpg" width="250" height="143" alt=""/> </div>
                                                        <h4>Cras tincidunt enim non metus ultricies.</h4>
                                                    </a> </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="vid-thumb-outer">
                                                <div class="vid-thumb"><a href="#">
                                                        <div class="vid-box"><span class="ion-ios7-film"></span><img class="img-thumbnail img-responsive" src="images/business/business-vid-1.jpg" width="250" height="143" alt=""/> </div>
                                                        <h4>Perspiciatis unde omnis iste natus</h4>
                                                    </a> </div>
                                                <div class="vid-thumb"><a href="#">
                                                        <div class="vid-box"><span class="ion-ios7-film"></span><img class="img-thumbnail img-responsive" src="images/business/business-vid-2.jpg" width="250" height="143" alt=""/> </div>
                                                        <h4>Cras tincidunt enim non metus ultricies.</h4>
                                                    </a> </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="vid-thumb-outer">
                                                <div class="vid-thumb"><a href="#">
                                                        <div class="vid-box"><span class="ion-ios7-film"></span><img class="img-thumbnail img-responsive" src="images/business/business-vid-1.jpg" width="250" height="143" alt=""/> </div>
                                                        <h4>Perspiciatis unde omnis iste natus</h4>
                                                    </a> </div>
                                                <div class="vid-thumb"><a href="#">
                                                        <div class="vid-box"><span class="ion-ios7-film"></span><img class="img-thumbnail img-responsive" src="images/business/business-vid-2.jpg" width="250" height="143" alt=""/> </div>
                                                        <h4>Cras tincidunt enim non metus ultricies.</h4>
                                                    </a> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                        </div>
                        <!-- business end -->

                        <!-- Science & Travel start -->
                        <div class="col-sm-16">
                            <div class="row">
                                <div class="col-xs-16 col-sm-8  wow fadeInLeft animated science" data-wow-delay="0.5s" data-wow-offset="130">
                                    <div class="main-title-outer pull-left">
                                        <div class="main-title">science</div>
                                        <div class="span-outer"><span class="pull-right text-danger last-update"><span class="ion-android-data icon"></span>Last update: 2 days ago</span> </div>
                                    </div>
                                    <div class="row">
                                        <div class="topic col-sm-16"> <a href="#"><img class=" img-thumbnail" src="images/science/sci-main.jpg" width="600" height="227" alt=""/>
                                                <h3> Curabitur ullamcorper ultricies nisi nam eget dui</h3>
                                                <div class="text-danger sub-info-bordered ">
                                                    <div class="time"><span class="ion-android-data icon"></span>Dec 9 2014</div>
                                                    <div class="comments"><span class="ion-chatbubbles icon"></span>204</div>
                                                    <div class="stars"><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star-half"></span></div>
                                                </div>
                                            </a>
                                            <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</p>
                                        </div>
                                        <div class="col-sm-16">
                                            <ul class="list-unstyled  top-bordered ex-top-padding">
                                                <li> <a href="#">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-4 hidden-sm  "><img width="76" height="76" alt="" src="images/science/sci-th-1.jpg" class="img-thumbnail pull-left"> </div>
                                                            <div class="col-lg-13 col-md-12">
                                                                <h4>Irish cream and chocolate
                                                                    cheesecake </h4>
                                                                <div class="text-danger sub-info">
                                                                    <div class="time"><span class="ion-android-data icon"></span>Dec 16 2014</div>
                                                                    <div class="comments"><span class="ion-chatbubbles icon"></span>351</div>
                                                                    <div class="stars"><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star-half"></span></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a> </li>
                                                <li> <a href="#">
                                                        <div class="row ">
                                                            <div class="col-lg-3 col-md-4 hidden-sm  "><img width="76" height="76" alt="" src="images/science/sci-th-2.jpg" class="img-thumbnail pull-left"> </div>
                                                            <div class="col-lg-13 col-md-12">
                                                                <h4>Irish cream and chocolate
                                                                    cheesecake </h4>
                                                                <div class="text-danger sub-info">
                                                                    <div class="time"><span class="ion-android-data icon"></span>Dec 16 2014</div>
                                                                    <div class="comments"><span class="ion-chatbubbles icon"></span>351</div>
                                                                    <div class="stars"><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star-half"></span></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a> </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-8 col-xs-16 wow fadeInRight animated" data-wow-delay="0.5s" data-wow-offset="130">
                                    <div class="main-title-outer pull-left">
                                        <div class="main-title">travel</div>
                                        <div class="span-outer"><span class="pull-right text-danger last-update"><span class="ion-android-data icon"></span>Last update: 2 days ago</span> </div>
                                    </div>
                                    <div class="row left-bordered">
                                        <div class="topic col-sm-16"> <a href="#"> <img  class="img-thumbnail" src="images/travel/travel-main.jpg" width="600" height="227" alt=""/>
                                                <h3>Feds open formal probe into tesla
                                                    electric ship</h3>
                                                <div class="text-danger sub-info-bordered">
                                                    <div class="time"><span class="ion-android-data icon"></span>Dec 9 2014</div>
                                                    <div class="comments"><span class="ion-chatbubbles icon"></span>204</div>
                                                    <div class="stars"><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star-half"></span></div>
                                                </div>
                                            </a>
                                            <p>Lorem Ipsum has been the standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                                        </div>
                                        <div class="col-sm-16">
                                            <ul class="list-unstyled top-bordered ex-top-padding">
                                                <li> <a href="#">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-4 hidden-sm  "><img width="76" height="76" alt="" src="images/travel/travel-th-1.jpg" class="img-thumbnail pull-left"> </div>
                                                            <div class="col-lg-13 col-md-12">
                                                                <h4>Irish cream and chocolate
                                                                    cheesecake </h4>
                                                                <div class="text-danger sub-info">
                                                                    <div class="time"><span class="ion-android-data icon"></span>Dec 16 2014</div>
                                                                    <div class="comments"><span class="ion-chatbubbles icon"></span>351</div>
                                                                    <div class="stars"><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star-half"></span></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a> </li>
                                                <li> <a href="#">
                                                        <div class="row ">
                                                            <div class="col-lg-3 col-md-4 hidden-sm  "><img width="76" height="76" alt="" src="images/travel/travel-th-2.jpg" class="img-thumbnail pull-left"> </div>
                                                            <div class="col-lg-13 col-md-12">
                                                                <h4>Irish cream and chocolate
                                                                    cheesecake </h4>
                                                                <div class="text-danger sub-info">
                                                                    <div class="time"><span class="ion-android-data icon"></span>Dec 16 2014</div>
                                                                    <div class="comments"><span class="ion-chatbubbles icon"></span>351</div>
                                                                    <div class="stars"><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star-half"></span></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a> </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                        </div>
                        <!-- Scince & Travel end -->
                        <!-- lifestyle start-->
                        <div class="col-sm-16 wow fadeInUp animated " data-wow-delay="0.5s" data-wow-offset="100">
                            <div class="main-title-outer pull-left">
                                <div class="main-title">lifestyle</div>
                                <div class="span-outer"><span class="pull-right text-danger last-update"><span class="ion-android-data icon"></span>Last update: 3 days ago</span> </div>
                            </div>
                            <div class="row">
                                <div id="owl-lifestyle" class="owl-carousel owl-theme lifestyle pull-left">
                                    <div class="item topic"> <a href="#"> <img class="img-thumbnail" src="images/lifestyle/lifestyle-slide-1.jpg" width="300" height="132" alt=""/>
                                            <h4>Etiam rhoncus. Maecenas tempus, tellus eget condimentum</h4>
                                            <div class="text-danger sub-info-bordered remove-borders">
                                                <div class="time"><span class="ion-android-data icon"></span>Dec 9 2014</div>
                                                <div class="comments"><span class="ion-chatbubbles icon"></span>204</div>
                                                <div class="stars"><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star-half"></span></div>
                                            </div>
                                        </a> </div>
                                    <div class="item topic"> <a href="#"> <img class="img-thumbnail" src="images/lifestyle/lifestyle-slide-2.jpg" width="300" height="132" alt=""/>
                                            <h4>Etiam rhoncus. Maecenas tempus, tellus eget condimentum</h4>
                                            <div class="text-danger sub-info-bordered remove-borders">
                                                <div class="time"><span class="ion-android-data icon"></span>Dec 9 2014</div>
                                                <div class="comments"><span class="ion-chatbubbles icon"></span>204</div>
                                                <div class="stars"><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star-half"></span></div>
                                            </div>
                                        </a> </div>
                                    <div class="item topic"> <a href="#"> <img class="img-thumbnail" src="images/lifestyle/lifestyle-slide-3.jpg" width="300" height="132" alt=""/>
                                            <h4>Etiam rhoncus. Maecenas tempus, tellus eget condimentum</h4>
                                            <div class="text-danger sub-info-bordered remove-borders">
                                                <div class="time"><span class="ion-android-data icon"></span>Dec 9 2014</div>
                                                <div class="comments"><span class="ion-chatbubbles icon"></span>204</div>
                                                <div class="stars"><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star-half"></span></div>
                                            </div>
                                        </a> </div>
                                    <div class="item topic"> <a href="#"> <img class="img-thumbnail" src="images/lifestyle/lifestyle-slide-1.jpg" width="300" height="132" alt=""/>
                                            <h4>Etiam rhoncus. Maecenas tempus, tellus eget condimentum</h4>
                                            <div class="text-danger sub-info-bordered remove-borders">
                                                <div class="time"><span class="ion-android-data icon"></span>Dec 9 2014</div>
                                                <div class="comments"><span class="ion-chatbubbles icon"></span>204</div>
                                                <div class="stars"><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star-half"></span></div>
                                            </div>
                                        </a> </div>
                                    <div class="item topic"> <a href="#"> <img class="img-thumbnail" src="images/lifestyle/lifestyle-slide-2.jpg" width="300" height="132" alt=""/>
                                            <h4>Etiam rhoncus. Maecenas tempus, tellus eget condimentum</h4>
                                            <div class="text-danger sub-info-bordered remove-borders">
                                                <div class="time"><span class="ion-android-data icon"></span>Dec 9 2014</div>
                                                <div class="comments"><span class="ion-chatbubbles icon"></span>204</div>
                                                <div class="stars"><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star-half"></span></div>
                                            </div>
                                        </a> </div>
                                    <div class="item topic"> <a href="#"> <img class="img-thumbnail" src="images/lifestyle/lifestyle-slide-3.jpg" width="300" height="132" alt=""/>
                                            <h4>Etiam rhoncus. Maecenas tempus, tellus eget condimentum</h4>
                                            <div class="text-danger sub-info-bordered remove-borders">
                                                <div class="time"><span class="ion-android-data icon"></span>Dec 9 2014</div>
                                                <div class="comments"><span class="ion-chatbubbles icon"></span>204</div>
                                                <div class="stars"><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star-half"></span></div>
                                            </div>
                                        </a> </div>
                                </div>
                            </div>
                            <hr>
                        </div>
                        <!-- lifestyle end -->

                        <!--Recent videos start-->
                        <div class="col-sm-16 recent-vid wow fadeInDown animated " data-wow-delay="0.5s" data-wow-offset="50">
                            <div class="main-title-outer pull-left">
                                <div class="main-title">recent videos</div>
                                <div class="span-outer"><span class="pull-right text-danger last-update"><span class="ion-android-data icon"></span>Last update: 1 day ago</span> </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-11 col-xs-16">
                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <div id="vid-first" class="tab-pane embed-responsive embed-responsive-16by9 active">
                                            <iframe width="514" height="289" src="http://www.youtube.com/embed/OFDAGiPJHL8?showinfo=0" frameborder="0" allowfullscreen></iframe>
                                        </div>
                                        <div id="vid-second" class="tab-pane embed-responsive embed-responsive-16by9">
                                            <iframe width="514" height="289" frameborder="0" allowfullscreen="" src="http://www.youtube.com/embed/TEnNaUg6Vm4?rel=0&amp;showinfo=0"></iframe>
                                        </div>
                                        <div id="vid-third" class="tab-pane embed-responsive embed-responsive-16by9">
                                            <iframe width="514" height="289" src="http://www.youtube.com/embed/rDZ1AjDJjFI?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-5 col-xs-2"> <!-- required for floating -->
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs tabs-right hidden-xs">
                                        <li class="active"><a data-toggle="tab" href="#vid-first">
                                                <div class="vid-thumb">
                                                    <div class="vid-box"><span class="ion-eye"></span><img class="img-thumbnail" src="images/recent-videos/re-vid-1.jpg" width="234" height="87" alt=""/> </div>
                                                </div>
                                            </a></li>
                                        <li class=""><a data-toggle="tab" href="#vid-second">
                                                <div class="vid-thumb">
                                                    <div class="vid-box"><span class="ion-eye"></span><img class="img-thumbnail" src="images/recent-videos/re-vid-2.jpg" width="234" height="87" alt=""/> </div>
                                                </div>
                                            </a></li>
                                        <li class=""><a data-toggle="tab" href="#vid-third">
                                                <div class="vid-thumb">
                                                    <div class="vid-box"><span class="ion-eye"></span><img class="img-thumbnail" src="images/recent-videos/re-vid-3.jpg" width="234" height="87" alt=""/> </div>
                                                </div>
                                            </a></li>
                                    </ul>
                                </div>
                            </div>
                            <hr>
                        </div>
                        <!--Recent videos end-->
                        <!--wide ad start-->
                        <div class="col-sm-16 wow fadeInDown animated " data-wow-delay="0.5s" data-wow-offset="25"><img class="img-responsive" src="images/ads/728-90-ad.gif" width="728" height="90" alt=""/></div>
                        <!--wide ad end-->

                    </div>
                </div>
                <!-- left sec end -->
                <!-- right sec start -->
                <div class="col-sm-5 hidden-xs right-sec">
                    <div class="bordered top-margin">
                        <div class="row ">
                            <div class="col-sm-16 bt-space wow fadeInUp animated" data-wow-delay="1s" data-wow-offset="50"> <img class="img-responsive" src="images/ads/336-280-ad.gif" width="336" height="280" alt=""/> <a href="#" class="sponsored">sponsored advert</a> </div>
                            <div class="col-sm-16 bt-spac wow fadeInUp animated" data-wow-delay="1s" data-wow-offset="150">
                                <div class="table-responsive">
                                    <table class="table table-bordered social">
                                        <tbody>
                                        <tr>
                                            <td><a class="rss" href="#">
                                                    <p> <span class="ion-social-rss"></span> subscribe<br>
                                                        to rss</p>
                                                </a></td>
                                            <td><a class="twitter" href="#">
                                                    <p><span class="ion-social-twitter"></span> 811,6
                                                        followers</p>
                                                </a></td>
                                            <td><a class="facebook" href="#">
                                                    <p> <span class="ion-social-facebook"></span> 6958,56<br>
                                                        fans</p>
                                                </a></td>
                                        </tr>
                                        <tr>
                                            <td><a class="youtube" href="#">
                                                    <p> <span class="ion-social-youtube"></span> 6954,55
                                                        subscribers</p>
                                                </a></td>
                                            <td><a class="vimeo" href="#">
                                                    <p><span class="ion-social-vimeo"></span> 896,7
                                                        subscribers</p>
                                                </a></td>
                                            <td><a class="dribbble" href="#">
                                                    <p> <span class="ion-social-dribbble-outline"></span> 6321,56
                                                        followers</p>
                                                </a></td>
                                        </tr>
                                        <tr>
                                            <td><a class="googleplus" href="#">
                                                    <p> <span class="ion-social-googleplus"></span> 9625.56
                                                        followers</p>
                                                </a></td>
                                            <td><a class="pinterest" href="#">
                                                    <p><span class="ion-social-pinterest"></span> 741,9
                                                        followers</p>
                                                </a></td>
                                            <td><a class="instagram" href="#">
                                                    <p> <span class="ion-social-instagram"></span> 3548,7
                                                        followers</p>
                                                </a></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- activities start -->
                            <div class="col-sm-16 bt-space wow fadeInUp animated" data-wow-delay="1s" data-wow-offset="130">
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs nav-justified " role="tablist">
                                    <li class="active"><a href="#popular" role="tab" data-toggle="tab">popular</a></li>
                                    <li><a href="#recent" role="tab" data-toggle="tab">recent</a></li>
                                    <li><a href="#comments" role="tab" data-toggle="tab">comments</a></li>
                                </ul>

                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div class="tab-pane active" id="popular">
                                        <ul class="list-unstyled">
                                            <li> <a href="#">
                                                    <div class="row">
                                                        <div class="col-sm-5 col-md-4"><img class="img-thumbnail pull-left" src="images/popular/pop-1.jpg" width="164" height="152" alt=""/> </div>
                                                        <div class="col-sm-11 col-md-12">
                                                            <h4>Tellus. Phasellus viverra nulla ut metus</h4>
                                                            <div class="text-danger sub-info">
                                                                <div class="time"><span class="ion-android-data icon"></span>Dec 16 2014</div>
                                                                <div class="comments"><span class="ion-chatbubbles icon"></span>351</div>
                                                                <div class="stars"><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star-half"></span></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a> </li>
                                            <li> <a href="#">
                                                    <div class="row">
                                                        <div class="col-sm-5  col-md-4 "><img class="img-thumbnail pull-left" src="images/popular/pop-2.jpg" width="164" height="152" alt=""/> </div>
                                                        <div class="col-sm-11 col-md-12">
                                                            <h4>The evolution of the apple ..</h4>
                                                            <div class="text-danger sub-info">
                                                                <div class="time"><span class="ion-android-data icon"></span>Dec 16 2014</div>
                                                                <div class="comments"><span class="ion-chatbubbles icon"></span>351</div>
                                                                <div class="stars"><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star-half"></span></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a> </li>
                                            <li> <a href="#">
                                                    <div class="row">
                                                        <div class="col-sm-5  col-md-4 "><img class="img-thumbnail pull-left" src="images/popular/pop-3.jpg" width="164" height="152" alt=""/> </div>
                                                        <div class="col-sm-11 col-md-12">
                                                            <h4>The evolution of the apple ..</h4>
                                                            <div class="text-danger sub-info">
                                                                <div class="time"><span class="ion-android-data icon"></span>Dec 16 2014</div>
                                                                <div class="comments"><span class="ion-chatbubbles icon"></span>351</div>
                                                                <div class="stars"><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star-half"></span></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a> </li>
                                            <li> <a href="#">
                                                    <div class="row">
                                                        <div class="col-sm-5  col-md-4 "><img class="img-thumbnail pull-left" src="images/popular/pop-4.jpg" width="164" height="152" alt=""/> </div>
                                                        <div class="col-sm-11 col-md-12">
                                                            <h4>The evolution of the apple ..</h4>
                                                            <div class="text-danger sub-info">
                                                                <div class="time"><span class="ion-android-data icon"></span>Dec 16 2014</div>
                                                                <div class="comments"><span class="ion-chatbubbles icon"></span>351</div>
                                                                <div class="stars"><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star-half"></span></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a> </li>
                                            <li> <a href="#">
                                                    <div class="row">
                                                        <div class="col-sm-5  col-md-4 "><img class="img-thumbnail pull-left" src="images/popular/pop-5.jpg" width="164" height="152" alt=""/> </div>
                                                        <div class="col-sm-11 col-md-12">
                                                            <h4>The evolution of the apple ..</h4>
                                                            <div class="text-danger sub-info">
                                                                <div class="time"><span class="ion-android-data icon"></span>Dec 16 2014</div>
                                                                <div class="comments"><span class="ion-chatbubbles icon"></span>351</div>
                                                                <div class="stars"><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star-half"></span></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a> </li>
                                        </ul>
                                    </div>
                                    <div class="tab-pane" id="recent">
                                        <ul class="list-unstyled">
                                            <li> <a href="#">
                                                    <div class="row">
                                                        <div class="col-sm-5  col-md-4 "><img class="img-thumbnail pull-left" src="images/popular/pop-5.jpg" width="164" height="152" alt=""/> </div>
                                                        <div class="col-sm-11  col-md-12 ">
                                                            <h4>The evolution of the apple ..</h4>
                                                            <div class="text-danger sub-info">
                                                                <div class="time"><span class="ion-android-data icon"></span>Dec 16 2014</div>
                                                                <div class="comments"><span class="ion-chatbubbles icon"></span>351</div>
                                                                <div class="stars"><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star-half"></span></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a> </li>
                                            <li> <a href="#">
                                                    <div class="row">
                                                        <div class="col-sm-5  col-md-4 "><img class="img-thumbnail pull-left" src="images/popular/pop-4.jpg" width="164" height="152" alt=""/> </div>
                                                        <div class="col-sm-11  col-md-12 ">
                                                            <h4>The evolution of the apple ..</h4>
                                                            <div class="text-danger sub-info">
                                                                <div class="time"><span class="ion-android-data icon"></span>Dec 16 2014</div>
                                                                <div class="comments"><span class="ion-chatbubbles icon"></span>351</div>
                                                                <div class="stars"><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star-half"></span></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a> </li>
                                            <li> <a href="#">
                                                    <div class="row">
                                                        <div class="col-sm-5  col-md-4 "><img class="img-thumbnail pull-left" src="images/popular/pop-3.jpg" width="164" height="152" alt=""/> </div>
                                                        <div class="col-sm-11  col-md-12 ">
                                                            <h4>The evolution of the apple ..</h4>
                                                            <div class="text-danger sub-info">
                                                                <div class="time"><span class="ion-android-data icon"></span>Dec 16 2014</div>
                                                                <div class="comments"><span class="ion-chatbubbles icon"></span>351</div>
                                                                <div class="stars"><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star-half"></span></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a> </li>
                                            <li> <a href="#">
                                                    <div class="row">
                                                        <div class="col-sm-5  col-md-4 "><img class="img-thumbnail pull-left" src="images/popular/pop-2.jpg" width="164" height="152" alt=""/> </div>
                                                        <div class="col-sm-11  col-md-12 ">
                                                            <h4>The evolution of the apple ..</h4>
                                                            <div class="text-danger sub-info">
                                                                <div class="time"><span class="ion-android-data icon"></span>Dec 16 2014</div>
                                                                <div class="comments"><span class="ion-chatbubbles icon"></span>351</div>
                                                                <div class="stars"><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star-half"></span></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a> </li>
                                            <li> <a href="#">
                                                    <div class="row">
                                                        <div class="col-sm-5  col-md-4 "><img class="img-thumbnail pull-left" src="images/popular/pop-1.jpg" width="164" height="152" alt=""/> </div>
                                                        <div class="col-sm-11  col-md-12 ">
                                                            <h4>The evolution of the apple ..</h4>
                                                            <div class="text-danger sub-info">
                                                                <div class="time"><span class="ion-android-data icon"></span>Dec 16 2014</div>
                                                                <div class="comments"><span class="ion-chatbubbles icon"></span>351</div>
                                                                <div class="stars"><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star-half"></span></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a> </li>
                                        </ul>
                                    </div>
                                    <div class="tab-pane" id="comments">
                                        <ul class="list-unstyled">
                                            <li> <a href="#">
                                                    <div class="row">
                                                        <div class="col-sm-5  col-md-4 "><img class="img-thumbnail pull-left" src="images/comments/com-1.jpg" width="164" height="152" alt=""/> </div>
                                                        <div class="col-sm-11  col-md-12 ">
                                                            <h4>Tellus Phasellus viverra nulla</h4>
                                                            <p>Cum sociis natoque penatibus et magnis dis parturient montes..</p>
                                                        </div>
                                                    </div>
                                                </a> </li>
                                            <li> <a href="#">
                                                    <div class="row">
                                                        <div class="col-sm-5  col-md-4 "><img class="img-thumbnail pull-left" src="images/comments/com-2.jpg" width="164" height="152" alt=""/> </div>
                                                        <div class="col-sm-11  col-md-12 ">
                                                            <h4>The evolution of the apple ..</h4>
                                                            <p>In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo..</p>
                                                        </div>
                                                    </div>
                                                </a> </li>
                                            <li> <a href="#">
                                                    <div class="row">
                                                        <div class="col-sm-5  col-md-4 "><img class="img-thumbnail pull-left" src="images/comments/com-3.jpg" width="164" height="152" alt=""/> </div>
                                                        <div class="col-sm-11  col-md-12 ">
                                                            <h4>The evolution of the apple ..</h4>
                                                            <p>Donec pede justo, fringilla vel, aliquet nec vulputate..</p>
                                                        </div>
                                                    </div>
                                                </a> </li>
                                            <li> <a href="#">
                                                    <div class="row">
                                                        <div class="col-sm-5  col-md-4 "><img class="img-thumbnail pull-left" src="images/comments/com-4.jpg" width="164" height="152" alt=""/> </div>
                                                        <div class="col-sm-12">
                                                            <h4>The evolution of the apple ..</h4>
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit..</p>
                                                        </div>
                                                    </div>
                                                </a> </li>
                                            <li> <a href="#">
                                                    <div class="row">
                                                        <div class="col-sm-5  col-md-4 "><img class="img-thumbnail pull-left" src="images/comments/com-5.jpg" width="164" height="152" alt=""/> </div>
                                                        <div class="col-sm-11  col-md-12 ">
                                                            <h4>The evolution of the apple ..</h4>
                                                            <p>Beatae vitae dicta sunt.explicabo ipsam..</p>
                                                        </div>
                                                    </div>
                                                </a> </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- activities end -->
                            <!-- radio start -->
                            <div class="col-sm-16 bt-space wow fadeInUp animated" data-wow-delay="1s" data-wow-offset="100">
                                <div class="main-title-outer pull-left">
                                    <div class="main-title">globalnews radio</div>
                                </div>
                                <iframe width="100%" height="166" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/172078992&amp;color=e74c3c&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false"></iframe>
                            </div>
                            <!-- radio end -->

                            <!-- calendar start -->
                            <div class="col-sm-16 bt-space wow fadeInUp animated" data-wow-delay="1s" data-wow-offset="50">
                                <div class="single pull-left"></div>
                            </div>
                            <!-- calendar end -->
                            <!-- flicker imgs start -->
                            <div class="col-sm-16 bt-space wow fadeInUp animated" data-wow-delay="1s" data-wow-offset="35">
                                <div class="main-title-outer pull-left">
                                    <div class="main-title">flicker images</div>
                                </div>
                                <ul class="list-inline">
                                    <li><a href="https://flic.kr/p/pGKEzR" target="_blank"><img class="img-responsive" src="http://farm4.staticflickr.com/3944/15557385115_2d191a5cc7_s.jpg" width="55" height="55" alt=""/></a></li>
                                    <li><a href="https://flic.kr/p/pq5PiE" target="_blank"><img class="img-responsive" src="http://farm4.staticflickr.com/3956/15368741148_ef02d92a65_s.jpg" width="55" height="55" alt=""/></a></li>
                                    <li><a href="https://flic.kr/p/pq9rDD" target="_blank"><img class="img-responsive" src="http://farm6.staticflickr.com/5608/15369448747_fd3f69cbb7_s.jpg" width="55" height="55" alt=""/></a></li>
                                    <li><a href="https://flic.kr/p/pGM4yz" target="_blank"><img class="img-responsive" src="http://farm4.staticflickr.com/3946/15557657525_da199f6917_s.jpg" width="55" height="55" alt=""/></a></li>
                                    <li><a href="https://flic.kr/p/pH6FJ4" target="_blank"><img class="img-responsive" src="http://farm4.staticflickr.com/3953/15561291195_e7ecf7d3a1_s.jpg" width="55" height="55" alt=""/></a></li>
                                    <li><a href="https://flic.kr/p/pqoKFn" target="_blank"><img class="img-responsive" src="http://farm4.staticflickr.com/3953/15372240967_9ee086188c_s.jpg" width="55" height="55" alt=""/></a></li>
                                    <li><a href="https://flic.kr/p/pGHh6g" target="_blank"><img class="img-responsive" src="http://farm4.staticflickr.com/3944/15556919225_c7d99f9667_s.jpg" width="55" height="55" alt=""/></a></li>
                                    <li><a href="https://flic.kr/p/pqxJZC" target="_blank"><img class="img-responsive" src="http://farm4.staticflickr.com/3939/15373994670_8c756abcb0_s.jpg" width="55" height="55" alt=""/></a></li>
                                    <li><a href="https://flic.kr/p/pEPtj9" target="_blank"><img class="img-responsive" src="http://farm4.staticflickr.com/3938/15535494656_d04ef318a0_s.jpg" width="55" height="55" alt=""/></a></li>
                                    <li><a href="https://flic.kr/p/pqjpxX" target="_blank"><img class="img-responsive" src="http://farm6.staticflickr.com/5605/15371392809_5069f8772d_s.jpg" width="55" height="55" alt=""/></a></li>
                                </ul>
                            </div>
                            <!-- flicker imgs end -->
                        </div>
                    </div>
                </div>
                <!-- right sec end -->
            </div>
        </div>
        <!-- data end -->


    </div>






    <!--    <div class="jumbotron">-->
<!--        <h1>Congratulations!</h1>-->
<!---->
<!--        <p class="lead">You have successfully created your Yii-powered application.</p>-->
<!---->
<!--        <p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">Get started with Yii</a></p>-->
<!--    </div>-->
<!---->
<!--    <div class="body-content">-->
<!---->
<!--        <div class="row">-->
<!--            <div class="col-lg-4">-->
<!--                <h2>Heading</h2>-->
<!---->
<!--                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et-->
<!--                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip-->
<!--                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu-->
<!--                    fugiat nulla pariatur.</p>-->
<!---->
<!--                <p><a class="btn btn-default" href="http://www.yiiframework.com/doc/">Yii Documentation &raquo;</a></p>-->
<!--            </div>-->
<!--            <div class="col-lg-4">-->
<!--                <h2>Heading</h2>-->
<!---->
<!--                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et-->
<!--                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip-->
<!--                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu-->
<!--                    fugiat nulla pariatur.</p>-->
<!---->
<!--                <p><a class="btn btn-default" href="http://www.yiiframework.com/forum/">Yii Forum &raquo;</a></p>-->
<!--            </div>-->
<!--            <div class="col-lg-4">-->
<!--                <h2>Heading</h2>-->
<!---->
<!--                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et-->
<!--                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip-->
<!--                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu-->
<!--                    fugiat nulla pariatur.</p>-->
<!---->
<!--                <p><a class="btn btn-default" href="http://www.yiiframework.com/extensions/">Yii Extensions &raquo;</a></p>-->
<!--            </div>-->
<!--        </div>-->

<!--    </div>-->
</div>
