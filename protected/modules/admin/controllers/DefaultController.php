<?php

class DefaultController extends Controller
{
	/**Указываем где искать
	 *
	 * @var $layout='/layouts/column1'
	 */
	public $layout='/layouts/column1';
	//end mc
	public function actionIndex()
	{
		$this->render('index');
	}
}