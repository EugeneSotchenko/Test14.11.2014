<?php
/**
 * Created by PhpStorm.
 * User: edev
 * Date: 17-Nov-14
 * Time: 1:09 AM
 */
class HeaderController extends Controller
{
    function actionIndex()
    {
        $this->layout = 'header';
        $this->render('/site/index');
    }
}