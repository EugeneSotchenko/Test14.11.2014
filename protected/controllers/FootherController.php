<?php
/**
 * Created by PhpStorm.
 * User: edev
 * Date: 17-Nov-14
 * Time: 1:14 AM
 */
class FootherController extends Controller
{
 function actionIndex()
 {
     $this->layout = 'foother';
     $this->render('/site/index');
 }
}