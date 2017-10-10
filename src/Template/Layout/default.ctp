<?php
    $cakeDescription = 'Books Store';
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
    <?= $this->Html->css('font-awesome/css/font-awesome.css') ?>
    <?= $this->Html->css('prettify.css') ?>
    <?= $this->Html->css('home.css') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>


    <link rel="shortcut icon" href="/themes/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/themes/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/themes/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/themes/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="/themes/images/ico/apple-touch-icon-57-precomposed.png">
    <style type="text/css" id="enject"></style>

</head>
<body>
    <div id="header">
        <div class="container-header">
            <div class="container"> 
                <a class="brand" href="index.php"><img src="themes/images/newlogo2.png" alt="Bootsshop"/></a>
                <div class="account_desc">
                    <ul class="navbar-header">
                        <li><a href="#">Giới Thiệu</a></li>
                        <li><a href="#">Liên Hệ</a></li>
                        <li><a href="#">Đăng Kí</a></li>
                        <li><a href="#">Đăng Nhập</a></li>
                        <li><a href="#">Giỏ Hàng</a></li>
                        <li><a href="#">Tài Khoản</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="wrap-box"></div>        
    </div>
<!-- Header End====================================================================== -->
<div id="mainBody">
    <div class="container">
        <div class="row">
            <!-- Sidebar ================================================== -->
            <div id="sidebar" class="span3">
                <div class="form-inline">
                    <div class="input-search">
                        <?php echo $this->Form->create('Books',['url'=>['action'=>'get_keyword'],'novalidator'=>true,'class'=>'form-control pull-right']); ?>
                        <?php echo $this->Form->input('keyword',['label'=>'','placeholder'=>'Tìm kiếm sách...','error'=>false]); ?>
                    </div>
                    <div class="input-btn">
                        <button type="submit" id="submitButton" class="btn btn-primary"><i class="fa fa-search"></i></button>
                        <?php echo $this->Form->end(); ?>
                    </div>
                </div>
                <h4>Danh mục sách </h4>
                <ul id="sideManu" class="nav nav-tabs nav-stacked">
                <div class="well well-small">
                <h4>Danh mục sách</h4>
                <?php //echo $this->element('menu_categories'); ?>
                </div>
                    <li><a href="danh-muc/van-hoc"> Kĩ Năng Sống</a></li>
                    <li><a href="danh-muc/van-hoc"> Kinh tế</a></li>
                    <li><a href="danh-muc/van-hoc"> Lịch sử</a></li>
                    <li><a href="danh-muc/van-hoc"> Văn Học</a></li>
                    <li><a href="danh-muc/giao-khoa"> Giáo Khoa</a></li>
                </ul>
                <br/>
                <h4>Danh mục tác giả </h4>
                <ul id="sideManu" class="nav nav-tabs nav-stacked">                   
                    <li><a href="tac-gia/philip-miller"> Philip Miller</a></li>
                    <li><a href="tac-gia/anđy-andrews"> Andy Andrews</a></li>
                    <li><a href="tac-gia/dat-lai-lat-ma"> Đạt Lai Lạt Ma</a></li>
                    <li><a href="tac-gia/anthony-doerr"> Anthony Doerr</a></li>
                    <li><a href="tac-gia/ernest-hemingway"> Ernest Hemingway</a></li>
                    <li><a href="tac-gia/do-huan"> Đỗ Huân</a></li>
                    <li><a href="tac-gia/hidehiko"> Hidehiko</a></li>
                    <li><a href="tac-gia/dave-trott"> Dave Trott</a></li>
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
                                                    <div class="product-name"><p><h4>Ánh sáng vô hình</h4></p>
                                                    </div>
                                                    <h5><span>Anthony Doerr</span></h5>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="span3">
                                            <div class="thumbnail">
                                                <i class="tag"></i>
                                                <a href="bien-doi-thay"><img src="webroot/img/home/bien-doi-thay.jpg" alt=""></a>
                                                <div class="caption">
                                                    <div class="product-name"><p><h4>Biển đổi thay</h4></p>
                                                    </div>
                                                    <h5><span>Ernest Hemingway</span></h5>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="span3">
                                            <div class="thumbnail">
                                                <i class="tag"></i>
                                                <a href="chuong-nguyen-hon-ai"><img src="webroot/img/home/chuong-nguyen-hon-ai.jpg" alt=""></a>
                                                <div class="caption">
                                                    <div class="product-name"><p><h4>Chuông nguyện hồn ai</h4></p>
                                                    </div>          
                                                    <h5><span>Ernest Hemingway</span></h5>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="span3">
                                            <div class="thumbnail">
                                                <i class="tag"></i>
                                                <a href="ong-gia-va-bien-ca"><img src="webroot/img/home/ong-gia-va-bien-ca.jpg" alt=""></a>
                                                <div class="caption">
                                                    <div class="product-name"><p><h4>Ông già và biển cả</h4></p>
                                                    </div>
                                                    <h5><span>Ernest Hemingway</span></h5>
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
                                                    <div class="product-name"><p><h4>Một với một là ba</h4></p>
                                                    </div>
                                                    <h5><span>Hidehiko - Dave Trott</span></h5>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="span3">
                                            <div class="thumbnail">
                                                <i class="tag"></i>
                                                <a href="nguoi-thap-sang-tam-hon"><img src="webroot/img/home/nguoi-thap-sang-tam-hon.jpg" alt=""></a>
                                                <div class="caption">
                                                    <div class="product-name"><p><h4>Người thắp sáng tâm hồn</h4></p>
                                                    </div>
                                                    <h5><span>Andy Andrews</span></h5>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="span3">
                                            <div class="thumbnail">
                                                <i class="tag"></i>
                                                <a href="nha-dao-tao-sanh-soi"><img src="webroot/img/home/nha-dao-tao-sanh-soi.jpg" alt=""></a>
                                                <div class="caption">
                                                    <div class="product-name"><p><h4>Nhà đào tạo sành sỏi</h4></p>
                                                    </div>
                                                    <h5><span>Đỗ Huân</span></h5>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="span3">
                                            <div class="thumbnail">
                                                <i class="tag"></i>
                                                <a href="troi-xanh-cua-tao"><img src="webroot/img/home/troi-xanh-cua-tao.jpg" alt=""></a>
                                                <div class="caption">
                                                    <div class="product-name"><p><h4>Trời xanh của táo</h4></p>
                                                    </div>
                                                    <h5><span>Anthony Doerr</span></h5>
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
