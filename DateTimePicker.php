<?php

namespace udokmeci\bdtp;
use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\helpers\Json;
use yii\web\View;
/**
 * DateTimePicker.
 */

class DateTimePicker extends \yii\widgets\InputWidget
{

	public $pluginOptions=[];
	public $events=[];
    public function run()
    {
    	$mainInputid=Html::getInputId($this->model, $this->attribute);
    	$id=$mainInputid.'_dtp';
    	$name= $this->attribute.'_dtp';
    	$mainInput=$this->field->form->field($this->model, $this->attribute,['template' => '{input}'])->hiddenInput()->label(false);
    	$input=$this->field->form->field($this->model, $this->attribute, ['enableClientValidation' => false, 'template' => '{input}'])->textInput(['id'=>$id])->label(false);

    	BDTPAsset::register($this->view);
    	$pluginOptions=ArrayHelper::merge($this->pluginOptions, [
    		'collapse'=>false,
    		'sideBySide'=>true,
    		'locale'=>\Yii::$app->language,
    	]);

    	$var=$this->id.'var';

    	$events=ArrayHelper::merge($this->events, ['dp.change'=>"function(e){
			$('#".$mainInputid."').val(e.date.unix());
		}"]);

		$js="var ".$var."=$('#".$id."').datetimepicker(".Json::encode($pluginOptions).");
			".$var.".data('DateTimePicker').date(moment.unix($('#".$mainInputid."').val()));";
		foreach ($events as $event => $func) {
			$js.=$var.".on('$event', $func);";
		}
    	$this->view->registerJs($js, View::POS_READY);
        return $input.$mainInput;
    }
}
