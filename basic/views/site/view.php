<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Post */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Posts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="post-view">

    <div id="preloader">
        <div id="status"></div>
    </div>
    <!-- preloader end -->

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
    <!-- /END THEME SWITCHER--> <!-- wrapper start -->
    <div class="wrapper">
        <!-- header toolbar start -->
<!--        <div class="header-toolbar">-->
<!--            <div class="container">-->
<!--                <div class="row">-->
<!--                    <div class="col-md-16 text-uppercase">-->
<!--                        <div class="row">-->
<!--                            <div class="col-sm-8 col-xs-16">-->
<!--                                <ul id="inline-popups" class="list-inline">-->
<!--                                    <li class="hidden-xs"><a href="#">advertisement</a></li>-->
<!--                                    <li><a class="open-popup-link" href="#log-in" data-effect="mfp-zoom-in">log in</a></li>-->
<!--                                    <li><a class="open-popup-link" href="#create-account" data-effect="mfp-zoom-in">create account</a></li>-->
<!--                                    <li><a  href="#">About</a></li>-->
<!--                                </ul>-->
<!--                            </div>-->
<!--                            <div class="col-sm-8 col-xs-16">-->
<!--                                <div class="row">-->
<!--                                    <div id="weather" class="col-lg-9 col-sm-8 col-xs-16"></div>-->
<!--                                    <div id="time-date" class="col-lg-7 col-sm-8 col-xs-16"></div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
        <!-- header toolbar end --> <!-- header start -->
<!--        <div class="container header">-->
<!--            <div class="row">-->
<!--                <div class="col-sm-5 col-md-5 wow fadeInUpLeft animated"><a class="navbar-brand" href="index-2.html">globalnews</a></div>-->
<!--                <div class="col-sm-11 col-md-11 hidden-xs text-right"><img src="images/ads/468-60-ad.gif" width="468" height="60" alt=""/></div>-->
<!--            </div>-->
<!--        </div>-->
        <!-- header end -->
        <!-- nav and search start -->
<!--        <div class="nav-search-outer">-->
<!--            <!-- nav start -->
<!---->
<!--            <nav class="navbar navbar-inverse" role="navigation">-->
<!--                <div class="container">-->
<!--                    <div class="row">-->
<!--                        <div class="col-sm-16"> <a href="javascript:;" class="toggle-search pull-right"><span class="ion-ios7-search"></span></a>-->
<!--                            <div class="navbar-header">-->
<!--                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>-->
<!--                            </div>-->
<!--                            <div class="collapse navbar-collapse" id="navbar-collapse">-->
<!--                                <ul class="nav navbar-nav text-uppercase main-nav ">-->
<!--                                    <li class="active"><a href="index-2.html">home</a></li>-->
<!--                                    <li> <a href="javascript:void(0)">business</a></li>-->
<!--                                    <li class="dropdown"> <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">lifestyle<span class="ion-ios7-arrow-down nav-icn"></span></a>-->
<!--                                        <ul class="dropdown-menu text-capitalize mega-menu" role="menu">-->
<!--                                            <li>-->
<!--                                                <div class="row">-->
<!--                                                    <div class="col-sm-16">-->
<!--                                                        <div class="row">-->
<!--                                                            <div class="col-xs-16 col-sm-16 col-md-6 col-lg-6">-->
<!--                                                                <ul class="mega-sub">-->
<!--                                                                    <li><a href="#"><span class="ion-ios7-arrow-right nav-sub-icn"></span>Home Decoration<span class="badge pull-right">Featured</span></a> </li>-->
<!--                                                                    <li><a href="#"><span class="ion-ios7-arrow-right nav-sub-icn"></span>Handbags &amp; Shoes</a> </li>-->
<!--                                                                    <li><a href="#"><span class="ion-ios7-arrow-right nav-sub-icn"></span>Furnishings &amp; Homeware<span class="badge pull-right">New</span></a> </li>-->
<!--                                                                    <li><a href="#"><span class="ion-ios7-arrow-right nav-sub-icn"></span>Beauty &amp; Fashion</a> </li>-->
<!--                                                                </ul>-->
<!--                                                            </div>-->
<!--                                                            <div class="col-sm-10 mega-sub-topics hidden-sm hidden-xs">-->
<!--                                                                <div class="row">-->
<!--                                                                    <div class="col-sm-8">-->
<!--                                                                        <div class="vid-thumb">-->
<!--                                                                            <h4>Buying a home: is it worth paying for a Homebuyer Report?</h4>-->
<!--                                                                            <a class="popup-youtube" href="https://www.youtube.com/watch?v=TEnNaUg6Vm4">-->
<!--                                                                                <div class="vid-box"><span class="ion-ios7-film"></span><img class="img-thumbnail" src="images/lifestyle/lifestyle-slide-2.jpg" width="300" height="132" alt=""/> </div>-->
<!--                                                                            </a> </div>-->
<!--                                                                    </div>-->
<!--                                                                    <div class="col-sm-8">-->
<!--                                                                        <div class="sub-topic-thumb">-->
<!--                                                                            <h4>Sugar-free chocolate recipes: dark chocolate</h4>-->
<!--                                                                            <a href="#">-->
<!--                                                                                <div class="sub-box"><img class="img-thumbnail" src="images/lifestyle/lifestyle-slide-1.jpg" width="300" height="132" alt=""/> </div>-->
<!--                                                                            </a> </div>-->
<!--                                                                    </div>-->
<!--                                                                </div>-->
<!--                                                            </div>-->
<!--                                                        </div>-->
<!--                                                    </div>-->
<!--                                                </div>-->
<!--                                            </li>-->
<!--                                        </ul>-->
<!--                                    </li>-->
<!--                                    <li> <a href="javascript:void(0)">science</a></li>-->
<!--                                    <li class="dropdown"> <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">politics<span class="ion-ios7-arrow-down nav-icn"></span></a>-->
<!--                                        <ul class="dropdown-menu text-capitalize" role="menu">-->
<!--                                            <li><a href="javascript:void(0)"><span class="ion-ios7-arrow-right nav-sub-icn"></span>World News</a></li>-->
<!--                                            <li><a href="javascript:void(0)"><span class="ion-ios7-arrow-right nav-sub-icn"></span>U.S.</a></li>-->
<!--                                            <li><a href="javascript:void(0)"><span class="ion-ios7-arrow-right nav-sub-icn"></span>AFRICA</a></li>-->
<!--                                            <li><a href="javascript:void(0)"><span class="ion-ios7-arrow-right nav-sub-icn"></span>Arabian Gulf</a></li>-->
<!--                                            <li><a href="javascript:void(0)"><span class="ion-ios7-arrow-right nav-sub-icn"></span>Topics and Issues</a></li>-->
<!--                                        </ul>-->
<!--                                    </li>-->
<!--                                    <li><a href="javascript:void(0)">sport</a></li>-->
<!--                                    <li><a href="javascript:void(0)" >travel</a></li>-->
<!--                                    <li class="dropdown"> <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">Pages<span class="ion-ios7-arrow-down nav-icn"></span></a>-->
<!--                                        <ul class="dropdown-menu text-capitalize" role="menu">-->
<!--                                            <li><a href="sections-page-style-1.html"><span class="ion-ios7-arrow-right nav-sub-icn"></span>sections page style 1</a></li>-->
<!--                                            <li><a href="sections-page-style-2.html"><span class="ion-ios7-arrow-right nav-sub-icn"></span>sections page style 2</a></li>-->
<!--                                            <li><a href="section-topic-details.html"><span class="ion-ios7-arrow-right nav-sub-icn"></span>section topic details</a></li>-->
<!--                                            <li><a href="404.html"><span class="ion-ios7-arrow-right nav-sub-icn"></span>404</a></li>-->
<!--                                            <li><a href="author-page.html"><span class="ion-ios7-arrow-right nav-sub-icn"></span>author page</a></li>-->
<!--                                            <li><a href="contact-us.html"><span class="ion-ios7-arrow-right nav-sub-icn"></span>contact us</a></li>-->
<!--                                            <li><a href="search-result-found.html"><span class="ion-ios7-arrow-right nav-sub-icn"></span>search result found</a></li>-->
<!--                                            <li><a href="search-result-not-found.html"><span class="ion-ios7-arrow-right nav-sub-icn"></span>search result not found</a></li>-->
<!--                                            <li><a href="faqs.html"><span class="ion-ios7-arrow-right nav-sub-icn"></span>FAQ's</a></li>-->
<!--                                        </ul>-->
<!--                                    </li>-->
<!--                                    <li class="dropdown"> <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">blog<span class="ion-ios7-arrow-down nav-icn"></span></a>-->
<!--                                        <ul class="dropdown-menu text-capitalize" role="menu">-->
<!--                                            <li><a href="blog-masonry.html"><span class="ion-ios7-arrow-right nav-sub-icn"></span>blog masonry</a></li>-->
<!--                                            <li><a href="post-item-details.html"><span class="ion-ios7-arrow-right nav-sub-icn"></span>post item details</a></li>-->
<!--                                        </ul>-->
<!--                                    </li>-->
<!--                                </ul>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <!-- nav end -->
<!--                <!-- search start -->
<!---->
<!--                <div class="search-container ">-->
<!--                    <div class="container">-->
<!--                        <form action="#" method="" role="search">-->
<!--                            <input id="search-bar" placeholder="Type & Hit Enter.." autocomplete="off">-->
<!--                        </form>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <!-- search end -->
<!--            </nav>-->
<!--            <!--nav end-->
<!--        </div>-->

        <!-- nav and search end-->
        <!-- bage header Start -->
<!--        <div class="container">-->
<!--            <div class="page-header" style="margin-top: 50px">-->
<!--                <h1>--><?php //echo $this->escape($post['title'])?><!--</h1>-->
<!--                <ol class="breadcrumb">-->
<!--                    <li><a href="#">Home</a></li>-->
<!--                    <li><a href="#">Pages</a></li>-->
<!--                    <li class="active">Section Topic Details</li>-->
<!--                </ol>-->
<!--            </div>-->
<!--        </div>-->
        <!-- bage header End -->
        <!-- data Start -->
        <section>
            <div class="container ">
                <div class="row ">
                    <!-- left sec Start -->
                    <div class="col-md-11 col-sm-11">
                        <div class="row">
                            <!-- post details start -->
                            <div class="col-sm-16">
                                <div class="row">
                                    <div class="sec-topic col-sm-16  wow fadeInDown animated "  data-wow-delay="0.5s">
                                        <div class="row">
                                            <div class="col-sm-16" style="margin:0 auto;"> <img width="600" height="606" src="images/sec/sec-3.jpg"  class="img-thumbnail"> </div>
                                            <div class="col-sm-16 sec-info">
                                                <h3><?php echo $this->escape($post['title'])?></h3>
                                                <div class="text-danger sub-info-bordered">
                                                    <div class="author"><span class="ion-person icon"></span>Автор: <?php echo $this->escape($post['last_name'] . " " . $post['first_name'])?></div>
                                                    <div class="time"><span class="ion-android-data icon"></span><?php echo $this->escape($post['date_created'])?></div>
<!--                                                    <div class="comments"><span class="ion-chatbubbles icon"></span>204</div>-->
                                                    <div class="stars"><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star-half"></span></div>
                                                </div>
                                                <p><span class="letter-badge">L</span>orem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.

                                                    Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. <a href="#">Vivamus elementum semper</a> nisi. Aenean vulputate eleifend tellus. <br>
                                                    Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet.Etiam ultricies>nisi vel augue. Curabitur ullamcorper ultricies nisi.</p>
                                                <blockquote>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                                </blockquote>
                                                <p> Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet.Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi.</p>
                                                <ul class="icn-list">
                                                    <li>Lorem ipsum dolor sit amet</li>
                                                    <li>Consectetur adipiscing elit</li>
                                                    <li>Integer molestie lorem at massa</li>
                                                    <li>Facilisis in pretium nisl aliquet</li>
                                                    <li>Nulla volutpat aliquam velit
                                                        <ul>
                                                            <li>Phasellus iaculis neque</li>
                                                            <li>Purus sodales ultricies</li>
                                                            <li>Vestibulum laoreet porttitor sem</li>
                                                            <li>Ac tristique libero volutpat at</li>
                                                        </ul>
                                                    </li>
                                                    <li>Faucibus porta lacus fringilla vel</li>
                                                    <li>Aenean sit amet erat nunc</li>
                                                    <li>Eget porttitor lorem</li>
                                                </ul>
                                                <p>Aenean commodo ligula eget dolor. Aenean massa.
                                                    <mark> Cum sociis</mark>
                                                    natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.

                                                    Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo</p>
                                                <hr>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-16 author-box">
                                        <div class="row">
                                            <div class=" col-xs-4 col-sm-2"><img class="img-thumbnail" src="images/comments/com-1.jpg" width="128" height="128" alt=""/></div>
                                            <div class="col-xs-12 col-sm-14">
                                                <h4><a href="#">Author Name</a></h4>
                                                <p>Nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-16 related">
                                        <div class="main-title-outer pull-left">
                                            <div class="main-title">related topics</div>
                                        </div>
                                        <div class="row">
                                            <div class="item topic col-sm-5 col-xs-16"> <a href="#"> <img class="img-thumbnail" src="images/sec/sec-1.jpg" width="1000" height="606" alt=""/>
                                                    <h4>Etiam rhoncus. Maecenas tempus, tellus eget condimentum</h4>
                                                    <div class="text-danger sub-info-bordered remove-borders">
                                                        <div class="time"><span class="ion-android-data icon"></span>Dec 9 2014</div>
                                                        <div class="comments"><span class="ion-chatbubbles icon"></span>204</div>
                                                        <div class="stars"><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star-half"></span></div>
                                                    </div>
                                                </a> </div>
                                            <div class="item topic col-sm-5 col-xs-16"> <a href="#"> <img class="img-thumbnail" src="images/sec/sec-2.jpg" width="1000" height="606" alt=""/>
                                                    <h4>Etiam rhoncus. Maecenas tempus, tellus eget condimentum</h4>
                                                    <div class="text-danger sub-info-bordered remove-borders">
                                                        <div class="time"><span class="ion-android-data icon"></span>Dec 9 2014</div>
                                                        <div class="comments"><span class="ion-chatbubbles icon"></span>204</div>
                                                        <div class="stars"><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star-half"></span></div>
                                                    </div>
                                                </a> </div>
                                            <div class="item topic col-sm-5 col-xs-16"> <a href="#"> <img class="img-thumbnail" src="images/sec/sec-3.jpg" width="1000" height="606" alt=""/>
                                                    <h4>Etiam rhoncus. Maecenas tempus, tellus eget condimentum</h4>
                                                    <div class="text-danger sub-info-bordered remove-borders">
                                                        <div class="time"><span class="ion-android-data icon"></span>Dec 9 2014</div>
                                                        <div class="comments"><span class="ion-chatbubbles icon"></span>204</div>
                                                        <div class="stars"><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star-half"></span></div>
                                                    </div>
                                                </a> </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-16 comments-area">
                                        <div class="main-title-outer pull-left">
                                            <div class="main-title">comments</div>
                                        </div>
                                        <div class="opinion pull-left">
                                            <div class="media"> <a href="#" class="pull-left"> <img alt="64x64" data-src="holder.js/64x64" class="media-object" style="width: 64px; height: 64px;" src="images/comments/com-1.jpg"> </a>
                                                <div class="media-body">
                                                    <div>
                                                        <h4 class="media-heading">John Doe</h4>
                                                        <div class="time text-danger"><span class="ion-android-data icon"></span>Dec 9 2014</div>
                                                    </div>
                                                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                                                    <div class="col-sm-16"><a href="#"><span class="reply pull-right ion-ios7-compose"></span></a></div>
                                                </div>
                                            </div>
                                            <div class="media"> <a href="#" class="pull-left"> <img alt="64x64" data-src="holder.js/64x64" class="media-object" style="width: 64px; height: 64px;" src="images/comments/com-2.jpg"> </a>
                                                <div class="media-body">
                                                    <div>
                                                        <h4 class="media-heading">John Doe</h4>
                                                        <div class="time text-danger"><span class="ion-android-data icon"></span>Dec 9 2014</div>
                                                    </div>
                                                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla.
                                                    <div class="col-sm-16"><a href="#"><span class="reply pull-right ion-ios7-compose"></span></a></div>
                                                    <div class="media nested-rep pull-left"> <a href="#" class="pull-left"> <img alt="64x64" class="media-object" style="width: 64px; height: 64px;" src="images/comments/com-1.jpg"> </a>
                                                        <div class="media-body ">
                                                            <div>
                                                                <h4 class="media-heading">John Doe</h4>
                                                                <div class="time text-danger"><span class="ion-android-data icon"></span>Dec 9 2014</div>
                                                            </div>
                                                            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
                                                            <div class="col-sm-16"><a href="#"><span class="reply pull-right ion-ios7-compose"></span></a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-16">
                                        <div class="main-title-outer pull-left">
                                            <div class="main-title">leave a comment</div>
                                        </div>
                                        <div class="col-xs-16 wow zoomIn animated">
                                            <form action="#" method="post" name="" class="comment-form">
                                                <div class="row">
                                                    <div class="form-group col-sm-8 name-field">
                                                        <input type="text" placeholder="Name*" required="" class="form-control">
                                                    </div>
                                                    <div class="form-group col-sm-8 email-field">
                                                        <input type="email" placeholder="Email*" required="" class="form-control" >
                                                    </div>
                                                    <div class="form-group col-sm-16">
                                                        <textarea placeholder="Your Message" rows="8" class="form-control" required id="message" name="message">                  </textarea>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <button class="btn btn-danger" type="submit"> Post Reply </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- post details end -->

                        </div>
                    </div>
                    <!-- left sec End -->
                    <!-- right sec Start -->
                    <div class="col-sm-5 hidden-xs right-sec">
                        <div class="bordered">
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
                    <!-- Right Sec End -->
                </div>
            </div>
        </section>
        <!-- Data End -->

        <!-- Footer Start -->
        <footer>
            <div class="top-sec">
                <div class="container ">
                    <div class="row match-height-container">
                        <div class="col-sm-6 subscribe-info wow fadeInDown animated" data-wow-delay="1s" data-wow-offset="40">
                            <div class="row">
                                <div class="col-sm-16">
                                    <div class="f-title">globalnews theme</div>
                                    <p>Lorem Ipsum has been the standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                                </div>
                                <div class="col-sm-16">
                                    <div class="f-title">subscribe to news letter</div>
                                    <form class="form-inline">
                                        <input type="email" class="form-control" id="input-email" placeholder="Type your e-mail adress">
                                        <button type="submit" class="btn"> <span class="ion-paper-airplane text-danger"></span> </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-5 popular-tags  wow fadeInDown animated" data-wow-delay="1s" data-wow-offset="40">
                            <div class="f-title">popular tags</div>
                            <ul class="tags list-unstyled pull-left">
                                <li><a href="#">Business</a></li>
                                <li><a href="#">Science</a></li>
                                <li><a href="#">video conferece</a></li>
                                <li><a href="#">conferece</a></li>
                                <li><a href="#">Photo</a></li>
                                <li><a href="#">education</a></li>
                                <li><a href="#">Smart phones</a></li>
                                <li><a href="#">Samsung mobile</a></li>
                                <li><a href="#">AI</a></li>
                                <li><a href="#">video conferece</a></li>
                                <li><a href="#">conferece</a></li>
                                <li><a href="#">education</a></li>
                                <li><a href="#">Technology</a></li>
                                <li><a href="#">computer</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-5 recent-posts  wow fadeInDown animated" data-wow-delay="1s" data-wow-offset="40">
                            <div class="f-title">recent posts</div>
                            <ul class="list-unstyled">
                                <li> <a href="#">
                                        <div class="row">
                                            <div class="col-sm-4"><img class="img-thumbnail pull-left" src="images/footer-recent/f-recent-1.jpg" width="70" height="70" alt=""/> </div>
                                            <div class="col-sm-12">
                                                <h4>The evolution of the apple ..</h4>
                                                <div class="f-sub-info">
                                                    <div class="time"><span class="ion-android-data icon"></span>Dec 16 2014</div>
                                                    <div class="comments"><span class="ion-chatbubbles icon"></span>351</div>
                                                    <div class="stars"><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star-half"></span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </a> </li>
                                <li> <a href="#">
                                        <div class="row">
                                            <div class="col-sm-4 "><img class="img-thumbnail pull-left" src="images/footer-recent/f-recent-2.jpg" width="70" height="70" alt=""/> </div>
                                            <div class="col-sm-12">
                                                <h4>The evolution of the apple ..</h4>
                                                <div class="f-sub-info">
                                                    <div class="time"><span class="ion-android-data icon"></span>Dec 16 2014</div>
                                                    <div class="comments"><span class="ion-chatbubbles icon"></span>351</div>
                                                    <div class="stars"><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star-half"></span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </a> </li>
                                <li> <a href="#">
                                        <div class="row">
                                            <div class="col-sm-4"><img class="img-thumbnail pull-left" src="images/footer-recent/f-recent-3.jpg" width="70" height="70" alt=""/> </div>
                                            <div class="col-sm-12">
                                                <h4>The evolution of the apple ..</h4>
                                                <div class="f-sub-info">
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
            <div class="btm-sec">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-16">
                            <div class="row">
                                <div class="col-sm-10 col-xs-16 f-nav wow fadeInDown animated" data-wow-delay="0.5s" data-wow-offset="10">
                                    <ul class="list-inline ">
                                        <li> <a href="#"> Home </a> </li>
                                        <li> <a href="#"> Business </a> </li>
                                        <li> <a href="#"> Science </a> </li>
                                        <li> <a href="#"> Lifestyle </a> </li>
                                        <li> <a href="#"> Politics </a> </li>
                                        <li> <a href="#"> Sport </a> </li>
                                        <li> <a href="#">short codes</a> </li>
                                        <li> <a href="#"> Contact </a> </li>
                                    </ul>
                                </div>
                                <div class="col-sm-6 col-xs-16 copyrights text-right wow fadeInDown animated" data-wow-delay="0.5s" data-wow-offset="10">© 2014 GLOBALNEWS THEME - ALL RIGHTS RESERVED</div>
                            </div>
                        </div>
                        <div class="col-sm-16 f-social  wow fadeInDown animated" data-wow-delay="1s" data-wow-offset="10">
                            <ul class="list-inline">
                                <li> <a href="#"><span class="ion-social-twitter"></span></a> </li>
                                <li> <a href="#"><span class="ion-social-facebook"></span></a> </li>
                                <li> <a href="#"><span class="ion-social-instagram"></span></a> </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer end -->
        <div id="create-account" class="white-popup mfp-with-anim mfp-hide">
            <form role="form">
                <h3>Create Account</h3>
                <hr>
                <div class="row">
                    <div class="col-sm-8">
                        <div class="form-group">
                            <input type="text" name="first_name" id="first_name" class="form-control" placeholder="First Name" tabindex="1">
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="form-group">
                            <input type="text" name="last_name" id="last_name" class="form-control" placeholder="Last Name" tabindex="2">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <input type="text" name="display_name" id="display_name" class="form-control" placeholder="Display Name" tabindex="3">
                </div>
                <div class="form-group">
                    <input type="email" name="email" id="email" class="form-control " placeholder="Email Address" tabindex="4">
                </div>
                <div class="row">
                    <div class="col-sm-8">
                        <div class="form-group">
                            <input type="password" name="password" id="password" class="form-control " placeholder="Password" tabindex="5">
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="form-group">
                            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="Confirm Password" tabindex="6">
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-16">
                        <input type="submit" value="Register" class="btn btn-danger btn-block btn-lg" tabindex="7">
                    </div>
                </div>
            </form>
        </div>
        <div id="log-in" class="white-popup mfp-with-anim mfp-hide">
            <form role="form">
                <h3>Log In Your Account</h3>
                <hr>
                <div class="form-group">
                    <input type="text" name="access_name" id="access_name" class="form-control" placeholder="Name" tabindex="3">
                </div>
                <div class="form-group">
                    <input type="password" name="password" id="password" class="form-control " placeholder="Password" tabindex="4">
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-16">
                        <input type="submit" value="Log In" class="btn btn-danger btn-block btn-lg" tabindex="7">
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- wrapper end -->
    <!-- jQuery -->
    <script src="js/jquery.min.js"></script>
    <!--jQuery easing-->
    <script src="js/jquery.easing.1.3.js"></script>
    <!-- bootstrab js -->
    <script src="js/bootstrap.js"></script>
    <!--style switcher-->
    <script src="js/style-switcher.js"></script> <!--wow animation-->
    <script src="js/wow.min.js"></script>
    <!-- time and date -->
    <script src="js/moment.min.js"></script>
    <!--news ticker-->
    <script src="js/jquery.ticker.js"></script>
    <!-- owl carousel -->
    <script src="js/owl.carousel.js"></script>
    <!-- magnific popup -->
    <script src="js/jquery.magnific-popup.js"></script>
    <!-- weather -->
    <script src="js/jquery.simpleWeather.min.js"></script>
    <!-- calendar-->
    <script src="js/jquery.pickmeup.js"></script>
    <!-- go to top -->
    <script src="js/jquery.scrollUp.js"></script>
    <!-- scroll bar -->
    <script src="js/jquery.nicescroll.js"></script>
    <script src="js/jquery.nicescroll.plus.js"></script>
    <!--masonry-->
    <script src="js/masonry.pkgd.js"></script>
    <!--media queries to js-->
    <script src="js/enquire.js"></script>
    <!--custom functions-->
    <script src="js/custom-fun.js"></script>
</div>
