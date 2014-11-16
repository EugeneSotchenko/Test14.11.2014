<?php
/**
 * Created by PhpStorm.
 * User: edev
 * Date: 15-Nov-14
 * Time: 8:40 PM
 */
Yii::import('zii.widgets.CPortlet');

class UserMenu extends CPortlet
{
    public function init()
    {
        $this->title=CHtml::encode(Yii::app()->user->name);
        parent::init();
    }

    protected function renderContent()
    {
        $this->render('userMenu');
    }
}