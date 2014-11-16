<?php
/**
 * Created by PhpStorm.
 * User: edev
 * Date: 16-Nov-14
 * Time: 1:44 AM
 */
Yii::import('zii.widgets.CPortlet');

class SearchBlock extends CPortlet
{
    public $title='Поиск';

    protected function renderContent()
    {
        echo CHtml::beginForm(array('search/search'), 'get', array('style'=> 'inline')) .
            CHtml::textField('q', '', array('placeholder'=> 'search...','style'=>'width:140px;')) .
            CHtml::submitButton('Go!',array('style'=>'width:30px;')) .
            CHtml::endForm('');
    }
}