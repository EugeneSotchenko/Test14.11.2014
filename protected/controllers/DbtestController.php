<?php
/**
 * Created by PhpStorm.
 * User: edev
 * Date: 16-Nov-14
 * Time: 9:44 PM
 */
class DbtestController extends CController
{
    public function actionIndex()
    {

        //Получаем записи на языке по умолчанию
        $posts= Post::model()->lang()->findAll();
        echo'<h1>Default language</h1>';
        foreach($posts as $post)
        {
            echo'<h2>'.$post->title.'</h2>';
        }
        //Получаем записи на русском языке
        $TblNews=TblNews::model('ru')->findAll();
        echo'<h1>ru</h1>';
        foreach($posts as $post)
        {
            echo'<h1>'.$post->title.'</h1>';
        }
        //Получаем записи на английском языке
        $posts= Post::model()->lang('en')->findAll();
        echo'<h1>en</h1>';
        foreach($posts as $post)
        {
            echo'<h2>'.$post->title.'</h2>';
        }

    }
}