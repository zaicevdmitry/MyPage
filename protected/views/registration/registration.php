<?php
/* @var $this SiteController */
/* @var $model RegistrationForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Register';
$model = new RegistrationForm();
/*$this->breadcrumbs=array(
	'Login',
);*/

$this->layout = 'sidebar';
?>
<div class="search">
    <div class="form-center span5">

        <h1>Register</h1>

        <div class="form">
            <?php $form=$this->beginWidget('CActiveForm', array(
                'id'=>'registration-form',
                'enableClientValidation'=>true,
                'clientOptions'=>array(
                    'validateOnSubmit'=>true,
                ),
            )); ?>

            <div class="row">
                <?php echo $form->textField($model,'first_name', array('placeholder'=>'First Name')); ?>
                <?php echo $form->error($model,'first_name'); ?>
            </div>

            <div class="row">
                <?php echo $form->textField($model,'last_name', array('placeholder'=>'Last Name')); ?>
                <?php echo $form->error($model,'last_name'); ?>
            </div>

            <div class="row">
                <?php echo $form->textField($model,'email', array('placeholder'=>'Your Email')); ?>
                <?php echo $form->error($model,'email'); ?>
            </div>

            <div class="row">
                <?php echo $form->passwordField($model,'pass', array('placeholder'=>'Password')); ?>
                <?php echo $form->error($model,'pass'); ?>
            </div>

            <div class="row buttons">
                <?php echo CHtml::submitButton('Submit', array('class'=>'btn btn-primary')); ?>
            </div>

            <?php if($login->validate() && $login->login())
                    $this->redirect('protected/views/site/index');
                    $this->endWidget(); ?>
        </div><!-- form -->
    </div>
</div>