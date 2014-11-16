<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <!--[if lt IE 8]>
   <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/ie.css" media="screen, projection" />
   <![endif]-->
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl;?>/css/style.css" />
   <?php Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/js/script.js'); ?>
   <title><?php echo CHtml::encode($this->pageTitle); ?></title>
    <?php// $this->pageTitle=Yii::app()->name . ' Фото котенка ' . $model->name ?>
   <title>ДП "ОБ'ЄДНАНА ГІРНІЧО-ХІМІЧНА КОМПАНІЯ"</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<div class="container">
<div class="row header">
    <div class="col-xs-5 col-sm-3 col-md-2 logo">
        <!--CHtml::image($this->getImageUrl($view));-->
        <?php //echo CHtml::encode(Yii::app()->name); ?>
        <img alt="UMCC" src="<?php echo Yii::app()->theme->baseUrl; ?>/images/umcc.jpg">
    </div>
    <div class="col-xs-7 col-sm-5 col-md-7">
        <h2 class="dp">Державне Підприємство</h2>
        <h2 class="umcc">"ОБ'ЄДНАНА ГІРНІЧО-ХІМІЧНА КОМПАНІЯ"</h2>
    </div>
    <!--Add language!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
    <div  id="language-selector" style="float:right; margin:5px;">
        <?php
        //$this->widget('application.components.widgets.LanguageSelector');
        ?>
    </div>
    -->

    <div class="col-sm-4 col-md-3">
        <div class="language">
            <a href="#">UA</a>
            <a href="#">EN</a>
            <a href="#">RU</a>
        </div>
        <div class="search">
            <form role="form">
                <div class="input-group">
                    <!--Find/Poisk-->
                    <?php
                    $this->widget('SearchBlock', array(
                    ));
                    ?>

                    <input type="text" class="form-control" placeholder="Пошук...">
								<span class="input-group-btn">
									<button class="btn btn-default" type="button">
                                        <span class="glyphicon glyphicon-search"></span>
                                    </button>
								</span>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="row head-menu">
    <nav class="navbar navbar-default" role="navigation">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
<!--
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <?php
                /*
                 $this->widget('zii.widgets.CMenu',array(
			    'items'=>array(
				array('label'=>'Новини', 'url'=>array('/site/index')),
                array('label'=>'Виробництво', 'url'=>array('/site/manaf')),
                array('label'=>'Продукція', 'url'=>array('/site/produktion')),
                array('label'=>'Підприємство', 'url'=>array('/site/page', 'view'=>'about')),
                array('label'=>'Історія', 'url'=>array('/site/index')),
				array('label'=>'Контакти', 'url'=>array('/site/contact')),
            ),

		));
        */
                ?>

            </ul>
        </div>
    </nav>
</div>
-->
        <div id="sidebar">
            <?php if(!Yii::app()->user->isGuest) $this->widget('UserMenu'); ?>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Новини</a></li>
                <li><a href="#">Виробництво</a></li>
                <li><a href="#">Продукція</a></li>
                <li><a href="#">Підприємство</a></li>
                <li><a href="#">Історія</a></li>
                <li><a href="#">Контакти</a></li>
            </ul>
        </div>
    </nav>
</div>

<hr class="heavy long">
<hr class="indent">

<!-- /header -->

<div id="carousel-main-generic" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/titan-crystal_bar.jpg" alt="Titan crystal">
            <div class="carousel-caption">
                <h3>Титанові руди</h3>
                <p>Україна має найбільші в Європі ресурси і запаси титану.
                    Державним балансом запасів корисних копалин України
                    враховується 15 родовищ титану (з 40), які мають високий ступінь
                    розвідки і промислового освоєння. Родовища розташовані в межах
                    Київської, Днепропетровської, Харківської, Житомирської областей
                    і приурочені до Українського щита та Дніпровсько-Донецької западини.
                    Родовища алювіальні, залишкові.</p>
            </div>
        </div>
        <div class="item">
            <img src="<?php echo Yii::app()->theme->baseUrl; ?><?php echo Yii::app()->theme->baseUrl; ?>/images/titan-crystal_bar.jpg" alt="Titan crystal">
            <div class="carousel-caption">
                <h3>Титанові руди</h3>
                <p>Україна має найбільші в Європі ресурси і запаси титану.
                    Державним балансом запасів корисних копалин України
                    враховується 15 родовищ титану (з 40), які мають високий ступінь
                    розвідки і промислового освоєння. Родовища розташовані в межах
                    Київської, Днепропетровської, Харківської, Житомирської областей
                    і приурочені до Українського щита та Дніпровсько-Донецької западини.
                    Родовища алювіальні, залишкові.</p>
            </div>
        </div>
    </div>

    <a class="left carousel-control" href="#carousel-main-generic" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#carousel-main-generic" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<hr class="heavy indent">
<h1>Життя ДП "Об'єднана гірничо-хімічна компанія"</h1>
<hr class="indent">

<div class="row main-content">
    <div class="col-md-6">

        <h4>Новини</h4>

        <a href="#">
            <div class="row short-block">
                <div class="col-xs-5 image">
                    <img alt="" src="<?php echo Yii::app()->theme->baseUrl; ?>/images/news1.png">
                </div>
                <div class="col-xs-7 description">
                    <div>
                        <h5>Титанові запаси</h5>
                        <p>03.11.14</p>
                        <p>Загальні запаси ТіО2 в 20 закордонних країнах сягають 420 млн т. (1999).
                            Близько 90% загальних світових запасів знаходяться в Україні,
                            Бразилії, ПАР, Австралії, Індії, Китаї. Світові (без Росії)
                            підтверджені запаси на початок</p>
                    </div>
                </div>
            </div>
        </a>
        <a href="#">
            <div class="row short-block">
                <div class="col-xs-5 image">
                    <img alt="" src="<?php echo Yii::app()->theme->baseUrl; ?>/images/news2.png">
                </div>
                <div class="col-xs-7 description">
                    <div>
                        <h5>Титанові запаси</h5>
                        <p>03.11.14</p>
                        <p>Загальні запаси ТіО2 в 20 закордонних країнах сягають 420 млн т. (1999).
                            Близько 90% загальних світових запасів знаходяться в Україні,
                            Бразилії, ПАР, Австралії, Індії, Китаї. Світові (без Росії)
                            підтверджені запаси на початок</p>
                    </div>
                </div>
            </div>
        </a>
        <a href="#">
            <div class="row short-block">
                <div class="col-xs-5 image">
                    <img alt="" src="<?php echo Yii::app()->theme->baseUrl; ?>/images/news3.png">
                </div>
                <div class="col-xs-7 description">
                    <div>
                        <h5>Титанові запаси</h5>
                        <p>03.11.14</p>
                        <p>Загальні запаси ТіО2 в 20 закордонних країнах сягають 420 млн т. (1999).
                            Близько 90% загальних світових запасів знаходяться в Україні,
                            Бразилії, ПАР, Австралії, Індії, Китаї. Світові (без Росії)
                            підтверджені запаси на початок</p>
                    </div>
                </div>
            </div>
        </a>
        <a href="#">
            <div class="row short-block">
                <div class="col-xs-5 image">
                    <img alt="" src="<?php echo Yii::app()->theme->baseUrl; ?>/images/news4.png">
                </div>
                <div class="col-xs-7 description">
                    <div>
                        <h5>Титанові запаси</h5>
                        <p>03.11.14</p>
                        <p>Загальні запаси ТіО2 в 20 закордонних країнах сягають 420 млн т. (1999).
                            Близько 90% загальних світових запасів знаходяться в Україні,
                            Бразилії, ПАР, Австралії, Індії, Китаї. Світові (без Росії)
                            підтверджені запаси на початок</p>
                    </div>
                </div>
            </div>
        </a>

        <p class="more"><a href="#">Більше новин...</a></p>
    </div>
    <div class="col-md-6">

        <h4>Виробництво</h4>

        <a href="#">
            <div class="row short-block">
                <div class="col-xs-4 image-type-2">
                    <img alt="" src="<?php echo Yii::app()->theme->baseUrl; ?>/images/production1.png">
                </div>
                <div class="col-xs-8 description-type-2">
                    <h5>Філія "Вільногірський<br> Гірничо-Металургічний Комбінат"</h5>
                </div>
            </div>
        </a>
        <a href="#">
            <div class="row short-block">
                <div class="col-xs-4 image-type-2">
                    <img alt="" src="<?php echo Yii::app()->theme->baseUrl; ?>/images/production2.png">
                </div>
                <div class="col-xs-8 description-type-2">
                    <h5>Філія "Іршанський<br> Гірничо-Збагачувальний Комбінат"</h5>
                </div>
            </div>
        </a>

        <h4>Медіа</h4>

        <div class="embed-responsive embed-responsive-16by9">
            <iframe src="//www.youtube.com/embed/Sj1Mzm3Qlcw" class="embed-responsive-item" frameborder="0" allowfullscreen></iframe>
        </div>

    </div>
</div>
<!-- footer -->

<hr class="heavy indent long">

<div class="row footer">
    <div class="col-sm-4">
        <h4>Навігація</h4>
        <hr class="indent">
        <ul class="nav">
            <?php $this->widget('zii.widgets.CMenu',array(
                'items'=>array(
                    array('label'=>'Новини', 'url'=>array('/site/index')),
                    array('label'=>'Виробництво', 'url'=>array('/site/manaf')),
                    array('label'=>'Продукція', 'url'=>array('/site/produktion')),
                    array('label'=>'Підприємство', 'url'=>array('/site/page', 'view'=>'about')),
                    array('label'=>'Історія', 'url'=>array('/site/index')),
                    array('label'=>'Контакти', 'url'=>array('/site/contact')),
                ),

            ));?>
            <!--
            <li><a href="#">Новини</a></li>
            <li><a href="#">Виробництво</a></li>
            <li><a href="#">Продукція</a></li>
            <li><a href="#">Підприємство</a></li>
            <li><a href="#">Історія</a></li>
            <li><a href="#">Контакти</a></li>
            -->
        </ul>
    </div>
    <div class="col-sm-4">
        <h4>Контакт</h4>
        <hr class="indent">
        <h5>Державне Підприємство<br>
            "Об'єднана Гірничо-Хімічна Компанія"</h5>
        03035 м. Київ, вул. Сурікова, 3<br>
        тел.: +38 (044) 229-02-47<br>
        email: info@umcc.com.ua
    </div>
    <div class="col-sm-4">
        <h4>Зв'язок</h4>
        <!--Connect to email extensions-->
        <?php

 //send google smtp
        //$this->mailsend('example@mail.ru' (от кого письмо), 'example@mail.ru'(кому пусьмо), 'example'(тема письма), 'example'(текст письма));
        ?>
        <?php  $this->widget('application.extensions.email.debug'); ?>
        <hr class="indent">
        <form role="form">
            <input type="email" class="form-control" placeholder="Ваш email">
            <textarea class="form-control" rows="3" placeholder="Повідомлення"></textarea>
            <button type="submit" class="btn btn-primary">Надіслати</button>
        </form>
    </div>
</div>

<div class="row copy">
    &copy; 2014 umcc.com.ua All rights reserved
</div>

</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
</body>
</html>














!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
    <div id="content" role="main">
    <?php echo $content; ?>

        <hr /> <!-- Post seperator - Not the most optimal solution -->
        
        <article class="post">
       
    </div> <!-- #content -->
    
    <aside id="sidebar" role="complementary">
    
        <aside class="widget">
            <h3>Sidebar heading</h3>
            
            <?/*php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'Home', 'url'=>array('/site/index')),
				array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
				array('label'=>'Contact', 'url'=>array('/site/contact')),
				array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
		)); */?>
        </aside> <!-- .widget -->
        

    
</div> <!-- #main -->
<footer id="footer">
        <!-- You're free to remove the credit link to Jayj.dk in the footer, but please, please leave it there :) -->
        <p>
            Copyright &copy; 2014 <a href="#">mushfiq.me</a>
            <span class="sep">|</span>
            Design by <a href="http://jayj.dk" title="Design by Jayj.dk">Jayj.dk</a>
        </p>
    </footer> <!-- #footer -->
    
    <div class="clear"></div>

<!--[if IE]><?php Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/js/excanvas.js'); ?><![endif]-->   
<?php //Yii::app()->clientScript->registerCoreScript('jquery'); ?>



<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.min.js"></script>
    


</body>
</html>