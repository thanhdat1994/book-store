<?php

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>
    
    <?= $this->Html->css('bootstrap.min.css') ?>
    <?= $this->Html->css('bootstrap-responsive.min.css') ?>
    <?= $this->Html->css('font-awesome.css') ?>
    <?= $this->Html->css('prettify.css') ?>
    <?= $this->Html->css('home.css') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>

    <link rel="shortcut icon" href="themes/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="themes/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="themes/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="themes/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="themes/images/ico/apple-touch-icon-57-precomposed.png">
    <style type="text/css" id="enject"></style>

</head>
<body>
    <div id="header">
        <div class="container-header">
            <div class="container">
                <a class="brand" href="index.html"><img src="themes/images/logo.png" alt="Bootsshop"/></a>
                <div class="account_desc">
                    <ul>
                        <li><a href="contact.html">Register</a></li>
                        <li><a href="contact.html">Login</a></li>
                        <li><a href="preview.html">Delivery</a></li>
                        <li><a href="#">Checkout</a></li>
                        <li><a href="#">My Account</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row-header">
            <div class="col-sm-9">
                <div>
                    aaaaaaaaaaaaaaaa
                </div>    
            </div>
            <div class="col-sm-3">
                <div class="search_box pull-right">
                    <input type="text" placeholder="Search"/>
                </div>
            </div>
        </div>
    </div>
<!-- Header End====================================================================== -->
<div id="mainBody">
    <div class="container">
        <div class="row">
            <!-- Sidebar ================================================== -->
            <div id="sidebar" class="span3">
                <ul id="sideManu" class="nav nav-tabs nav-stacked">
                    <li class="subMenu open"><a> ELECTRONICS [230]</a>
                        <ul>
                            <li><a class="active" href="products.html"><i class="icon-chevron-right"></i>Cameras (100) </a></li>
                            <li><a href="products.html"><i class="icon-chevron-right"></i>Computers, Tablets & laptop (30)</a></li>
                            <li><a href="products.html"><i class="icon-chevron-right"></i>Mobile Phone (80)</a></li>
                            <li><a href="products.html"><i class="icon-chevron-right"></i>Sound & Vision (15)</a></li>
                        </ul>
                    </li>
                    <li class="subMenu"><a> CLOTHES [840] </a>
                        <ul style="display:none">
                            <li><a href="products.html"><i class="icon-chevron-right"></i>Women's Clothing (45)</a></li>
                            <li><a href="products.html"><i class="icon-chevron-right"></i>Women's Shoes (8)</a></li>                                                
                            <li><a href="products.html"><i class="icon-chevron-right"></i>Women's Hand Bags (5)</a></li>    
                            <li><a href="products.html"><i class="icon-chevron-right"></i>Men's Clothings  (45)</a></li>
                            <li><a href="products.html"><i class="icon-chevron-right"></i>Men's Shoes (6)</a></li>                                              
                            <li><a href="products.html"><i class="icon-chevron-right"></i>Kids Clothing (5)</a></li>                                                
                            <li><a href="products.html"><i class="icon-chevron-right"></i>Kids Shoes (3)</a></li>                                               
                        </ul>
                    </li>
                    <li class="subMenu"><a>FOOD AND BEVERAGES [1000]</a>
                        <ul style="display:none">
                            <li><a href="products.html"><i class="icon-chevron-right"></i>Angoves  (35)</a></li>
                            <li><a href="products.html"><i class="icon-chevron-right"></i>Bouchard Aine & Fils (8)</a></li>                                             
                            <li><a href="products.html"><i class="icon-chevron-right"></i>French Rabbit (5)</a></li>    
                            <li><a href="products.html"><i class="icon-chevron-right"></i>Louis Bernard  (45)</a></li>
                            <li><a href="products.html"><i class="icon-chevron-right"></i>BIB Wine (Bag in Box) (8)</a></li>                                                
                            <li><a href="products.html"><i class="icon-chevron-right"></i>Other Liquors & Wine (5)</a></li>                                             
                            <li><a href="products.html"><i class="icon-chevron-right"></i>Garden (3)</a></li>                                               
                            <li><a href="products.html"><i class="icon-chevron-right"></i>Khao Shong (11)</a></li>                                              
                        </ul>
                    </li>
                    <li><a href="products.html">HEALTH & BEAUTY [18]</a></li>
                    <li><a href="products.html">SPORTS & LEISURE [58]</a></li>
                    <li><a href="products.html">BOOKS & ENTERTAINMENTS [14]</a></li>
                </ul>
                <br/>
            </div>
            <!-- Sidebar end=============================================== -->
            <div class="span9">
                <div class="well well-small">
                    <h4>Sách bán chạy nhất </h4>
                    <div class="row-fluid">
                        <div id="featured" class="carousel slide">
                            <div class="carousel-inner">
                                <div class="item active">
                                    <ul class="thumbnails">
                                        <li class="span3">
                                            <div class="thumbnail">
                                                <i class="tag"></i>
                                                <a href="anh-sang-vo-hinh"><img src="webroot/img/home/anh-sang-vo-hinh.jpg" alt=""></a>
                                                <div class="caption">
                                                    <div class="product-name"><p><h5>Ánh sáng vô hình</h5></p>
                                                    </div>
                                                    <h4><span>90,000Đ</span></h4>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="span3">
                                            <div class="thumbnail">
                                                <i class="tag"></i>
                                                <a href="bien-doi-thay"><img src="webroot/img/home/bien-doi-thay.jpg" alt=""></a>
                                                <div class="caption">
                                                    <div class="product-name"><p><h5>Biển đổi thay</h5></p>
                                                    </div>
                                                    <h4><span>40,000Đ</span></h4>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="span3">
                                            <div class="thumbnail">
                                                <i class="tag"></i>
                                                <a href="chuong-nguyen-hon-ai"><img src="webroot/img/home/chuong-nguyen-hon-ai.jpg" alt=""></a>
                                                <div class="caption">
                                                    <div class="product-name"><p><h5>Chuông nguyện hồn ai</h5></p>
                                                    </div>          
                                                    <h4><span>80,000Đ</span></h4>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="span3">
                                            <div class="thumbnail">
                                                <i class="tag"></i>
                                                <a href="ong-gia-va-bien-ca"><img src="webroot/img/home/ong-gia-va-bien-ca.jpg" alt=""></a>
                                                <div class="caption">
                                                    <div class="product-name"><p><h5>Ông già và biển cả</h5></p>
                                                    </div>
                                                    <h4><span>20,000Đ</span></h4>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="item">
                                    <ul class="thumbnails">
                                        <li class="span3">
                                            <div class="thumbnail">
                                                <i class="tag"></i>
                                                <a href="mot-voi-mot-la-ba"><img src="webroot/img/home/mot-voi-mot-la-ba.jpg" alt=""></a>
                                                <div class="caption">
                                                    <div class="product-name"><p><h5>Một với một là ba</h5></p>
                                                    </div>
                                                    <h4><span>40,000Đ</span></h4>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="span3">
                                            <div class="thumbnail">
                                                <i class="tag"></i>
                                                <a href="nguoi-thap-sang-tam-hon"><img src="webroot/img/home/nguoi-thap-sang-tam-hon.jpg" alt=""></a>
                                                <div class="caption">
                                                    <div class="product-name"><p><h5>Người thắp sáng tâm hồn</h5></p>
                                                    </div>
                                                    <h4><span>35,000Đ</span></h4>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="span3">
                                            <div class="thumbnail">
                                                <i class="tag"></i>
                                                <a href="nha-dao-tao-sanh-soi"><img src="webroot/img/home/nha-dao-tao-sanh-soi.jpg" alt=""></a>
                                                <div class="caption">
                                                    <div class="product-name"><p><h5>Nhà đào tạo sành sỏi</h5></p>
                                                    </div>
                                                    <h4><span>65,000Đ</span></h4>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="span3">
                                            <div class="thumbnail">
                                                <i class="tag"></i>
                                                <a href="troi-xanh-cua-tao"><img src="webroot/img/home/troi-xanh-cua-tao.jpg" alt=""></a>
                                                <div class="caption">
                                                    <div class="product-name"><p><h5>Trời xanh của táo</h5></p>
                                                    </div>
                                                    <h4><span>50,000Đ</span></h4>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <a class="left carousel-control" href="#featured" data-slide="prev">‹</a>
                            <a class="right carousel-control" href="#featured" data-slide="next">›</a>
                        </div>
                    </div>
                </div>    
                <ul class="thumbnails">
                    <?= $this->Flash->render() ?>
                    <?= $this->fetch('content') ?>
                </ul>
            </div>  
        </div>
    </div>
</div>
<!-- Footer ================================================================== -->
<div  id="footerSection">
    <div class="container">
        <div class="row">
            <div class="span3">
                <h5>ACCOUNT</h5>
                <a href="login.html">YOUR ACCOUNT</a>
                <a href="login.html">PERSONAL INFORMATION</a> 
                <a href="login.html">ADDRESSES</a> 
                <a href="login.html">DISCOUNT</a>  
                <a href="login.html">ORDER HISTORY</a>
            </div>
            <div class="span3">
                <h5>INFORMATION</h5>
                <a href="contact.html">CONTACT</a>  
                <a href="register.html">REGISTRATION</a>  
                <a href="legal_notice.html">LEGAL NOTICE</a>  
                <a href="tac.html">TERMS AND CONDITIONS</a> 
                <a href="faq.html">FAQ</a>
            </div>
            <div class="span3">
                <h5>OUR OFFERS</h5>
                <a href="#">NEW PRODUCTS</a> 
                <a href="#">TOP SELLERS</a>  
                <a href="special_offer.html">SPECIAL OFFERS</a>  
                <a href="#">MANUFACTURERS</a> 
                <a href="#">SUPPLIERS</a> 
            </div>
            <div id="socialMedia" class="span3 pull-right">
                <h5>SOCIAL MEDIA </h5>
                <a href="#"><img width="60" height="60" src="themes/images/facebook.png" title="facebook" alt="facebook"/></a>
                <a href="#"><img width="60" height="60" src="themes/images/twitter.png" title="twitter" alt="twitter"/></a>
                <a href="#"><img width="60" height="60" src="themes/images/youtube.png" title="youtube" alt="youtube"/></a>
            </div> 
        </div>
        <p class="pull-right">&copy; Bootshop</p>
    </div><!-- Container End -->
</div>


    <?= $this->Html->script('jquery.js') ?>
    <?= $this->Html->script('bootstrap.min.js') ?>
    <?= $this->Html->script('prettify.js') ?>
    <?= $this->Html->script('bootshop.js') ?>
    <?= $this->Html->script('jquery.lightbox-0.5.js') ?>

</body>
</html>
