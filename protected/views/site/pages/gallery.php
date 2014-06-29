<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name . ' - Gallery';
$this->breadcrumbs=array(
	'Gallery',
);

Yii::app()->bootstrap->registerAssetCss('bootstrap-image-gallery.min.css');
$this->renderPartial('bootstrap.views.gallery.preview');
Yii::app()->bootstrap->registerAssetJs('fileupload/load-image.min.js');
Yii::app()->bootstrap->registerAssetJs('bootstrap-image-gallery.min.js');


$this->widget(
    'booster.widgets.TbSelect2', array(
        'asDropDownList' => false,
        'name' => 'clevertech',
        'options' => array(
            'tags' => array('clever', 'is', 'better', 'clevertech'),
            'placeholder' => 'type clever, or is, or just type!',
            'width' => '40%',
            'tokenSeparators' => array(',', ' ')
        )
    )
);
?>
<h1>Gallery</h1>
<div id="gallery" data-toggle="modal-gallery" data-target="#modal-gallery" data-filter="*" >
    <a href="http://placekitten.com/500/500" title="kitten" rel="gallery">
        <img src="http://placekitten.com/250/250" rel="list-gallery" />
    </a>
</div>

