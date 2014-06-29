<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name . ' - About';
$this->breadcrumbs=array(
	'About',
);
//Yii::app()->bootstrap->registerAllCss();
//$this->renderPartial('bootstrap.views.gallery.preview');
Yii::app()->bootstrap->registerAssetCss('bootstrap-image-gallery.min.css');
$this->renderPartial('bootstrap.views.gallery.preview');
Yii::app()->bootstrap->registerAssetJs('fileupload/load-image.min.js');
Yii::app()->bootstrap->registerAssetJs('bootstrap-image-gallery.min.js');
?>
<h1>About</h1>
<div id="gallery" data-toggle="modal-gallery" data-target="#modal-gallery" data-filter="*" >
    <a href="http://placekitten.com/500/500" title="kitten" rel="gallery">
        <img src="http://placekitten.com/250/250" rel="list-gallery" />
    </a>
</div>
<p>This is a "static" page. You may change the content of this page
by updating the file <code><?php echo __FILE__; ?></code>.</p>
