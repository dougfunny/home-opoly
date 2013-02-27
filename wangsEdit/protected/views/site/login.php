<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Login';
$this->breadcrumbs=array(
	'Login',
);
?>
<div id="bg">
	<p class="note"><span class="required">*</span>  </p>
    <p class="note"> <span class="required">*</span> </p>
    <p class="note"> <span class="required">*</span> </p>
 	<p class="note"><span class="required">*</span>  </p>
 <p class="note"> <span class="required">*</span> </p>
 <p class="note"> <span class="required">*</span> </p>
	<div id="light">
 
		<div id="wrap">
			

 
 <div id="form-wrap">
 
<div class="form">
 
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'login-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>
<center>

<p class="note">Fields with <span class="required">*</span> are required.</p>

	<div class="row">
		<?php echo $form->labelEx($model,'email');?>
		<?php echo $form->textField($model,'email'); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model,'password'); ?>
		<?php echo $form->error($model,'password'); ?>
	</div>
 <p>
 
	<div class="row rememberMe">
		<?php echo $form->checkBox($model,'rememberMe'); ?>
		<?php echo $form->label($model,'rememberMe'); ?>
		<?php echo $form->error($model,'rememberMe'); ?>
	</div>
	<center>

	<div class="row buttons" id ="login">
	 
		<?php echo CHtml::submitButton('Login'); ?>
	</div>

<?php $this->endWidget(); ?>
 
	</div>
</div><!-- form -->