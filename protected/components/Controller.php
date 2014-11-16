<?php
/**
 * Controller is the customized base controller class.
 * All controller classes for this application should extend from this base class.
 */
class Controller extends CController
{
	/**
	 * @var string the default layout for the controller view. Defaults to '//layouts/column1',
	 * meaning using a single column layout. See 'protected/views/layouts/column1.php'.
	 */
	public $layout='//layouts/column1';
	/**
	 * @var array context menu items. This property will be assigned to {@link CMenu::items}.
	 */
	public $menu=array();
	/**
	 * @var array the breadcrumbs of the current page. The value of this property will
	 * be assigned to {@link CBreadcrumbs::links}. Please refer to {@link CBreadcrumbs::links}
	 * for more details on how to specify this property.
	 */
	public $breadcrumbs=array();
	//add bootstrapStyle
	public function beforeAction($action)
	{
		Yii::app()->bootstrap->register();
		return parent::beforeAction($action);
	}
	//connect CSS Images CSS!!!!!!!!!!!!!!!!!!!!!!!!!!!!
	/**
	 * Array of paths of assets
	 * @var array
	 */
	private $_assetsPaths = array();

	/**
	 * Array of asset Url
	 * @var array
	 */
	private $_assetsUrl = array();

	/**
	 * Name of directory for css files
	 * @var strign
	 */
	protected $_cssDirName = 'css';

	/**
	 * Default file name of css
	 * @var string
	 */
	protected $_defaultCssFile = 'index.css';

	/**
	 * Name of directory for script files
	 * @var strign
	 */
	protected $_scriptDirName = 'js';

	/**
	 * Default file name of script
	 * @var string
	 */
	protected $_defaultScriptFile = 'index.js';

	/**
	 * Name of directory for images
	 * @var strign
	 */
	protected $_imageDirName = 'themes/images';


	/**
	 * This method is invoked at the beginning of {@link render()}.
	 *
	 * @param string $view the view to be rendered
	 * @return boolean whether the view should be rendered.
	 */
	protected function beforeRender($view)
	{
		$this->_setupScript($view);
		$this->_setupCss($view);

		$viewCamelCase = preg_replace_callback(
			'/_([a-z0-9])/',
			function ($char) {
				return strtoupper($char[1]);
			},
			ucfirst($view)
		);

		$methodScript = '_setupScript' . $viewCamelCase;
		if (method_exists($this, $methodScript)) {
			$this->$methodScript($view);
		}

		$methodCss = '_setupCss' . $viewCamelCase;
		if (method_exists($this, $methodCss)) {
			$this->$methodCss($view);
		}

		return true;
	}

	/**
	 * Setup script files
	 *
	 * @param string $view
	 * @return void
	 */
	protected function _setupScript($view)
	{
		$scriptRealPath = $this->getScriptPath($view, $this->_defaultScriptFile);
		if (is_file($scriptRealPath)) {
			$scriptPublishedUrl = $this->getScriptUrl($view, $this->_defaultScriptFile);
			Yii::app()->clientScript->registerScriptFile($scriptPublishedUrl);
		}
	}

	/**
	 * Setup css files
	 *
	 * @param string $view
	 * @return void
	 */
	protected function _setupCss($view)
	{
		$cssRealPath = $this->getCssPath($view, $this->_defaultCssFile);
		if (is_file($cssRealPath)) {
			$cssPublishedUrl = $this->getCssUrl($view, $this->_defaultCssFile);
			Yii::app()->clientScript->registerCssFile($cssPublishedUrl);
		}
	}

	/**
	 * Returns the published script URL
	 *
	 * @param string $view
	 * @param string $fileName
	 * @return string|false
	 */
	public function getScriptUrl($view, $fileName)
	{
		if (($publishedUrl = $this->getPublishedAssetsUrl($view))) {
			return $publishedUrl . '/' . $this->_scriptDirName . '/' . $fileName;
		}

		return false;
	}

	/**
	 * Returns the real script Path
	 *
	 * @param string $fileName
	 * @param string $view
	 * @return string|false
	 */
	public function getScriptPath($view, $fileName)
	{
		if (($path = $this->getAssetsPath($view))) {
			return $path . DIRECTORY_SEPARATOR . $this->_scriptDirName . DIRECTORY_SEPARATOR .  $fileName;
		}

		return false;
	}

	/**
	 * Returns the published css URL
	 *
	 * @param string $view
	 * @param string $fileName
	 * @return string|false
	 */
	public function getCssUrl($view, $fileName)
	{
		if (($publishedUrl = $this->getPublishedAssetsUrl($view))) {
			return $publishedUrl . '/' . $this->_cssDirName . '/' . $fileName;
		}

		return false;
	}

	/**
	 * Returns the real css path
	 *
	 * @param string $view
	 * @param string $fileName
	 * @return string|false
	 */
	public function getCssPath($view, $fileName)
	{
		if (($path = $this->getAssetsPath($view))) {
			return $path . DIRECTORY_SEPARATOR . $this->_cssDirName . DIRECTORY_SEPARATOR .  $fileName;
		}

		return false;
	}

	/**
	 * Returns the published image URL
	 *
	 * @param string $view
	 * @param string $fileName
	 * @return string|false
	 */
	public function getImageUrl($view, $fileName)
	{
		if (($publishedUrl = $this->getPublishedAssetsUrl($view))) {
			return $publishedUrl . '/' . $this->_imageDirName . '/' . $fileName;
		}

		return false;
	}

	/**
	 * Returns the real image path
	 *
	 * @param string $view
	 * @param string $fileName
	 * @return string|false
	 */
	public function getImagePath($view, $fileName)
	{
		if (($path = $this->getAssetsPath($view))) {
			return $path . DIRECTORY_SEPARATOR . $this->_imageDirName . DIRECTORY_SEPARATOR .  $fileName;
		}

		return false;
	}

	/**
	 * Returns alias of assets
	 *
	 * @param string $view
	 * @return string|false
	 */
	protected function getAssetsPath($view)
	{
		if (!array_key_exists($view, $this->_assetsPaths)) {
			$assetPath = false;

			$viewPath = $this->getViewFile($view);
			if ($viewPath) {
				if (($pos = strrpos($viewPath, DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR)) !== false) {
					$extension = ($renderer=Yii::app()->getViewRenderer()) !== null ?
						$renderer->fileExtension :
						'.php';

					$assetPath = substr($viewPath, 0, $pos) . DIRECTORY_SEPARATOR
						. 'assets'
						. substr($viewPath, $pos + 1 + strlen('views'));
					$assetPath = dirname($assetPath) . DIRECTORY_SEPARATOR .  basename($assetPath, $extension);
				}
			}

			$this->_assetsPaths[$view] = $assetPath;
		}

		return $this->_assetsPaths[$view];
	}

	/**
	 * Returns the published asset URL
	 *
	 * @param string $view
	 * @return string|false
	 */
	public function getPublishedAssetsUrl($view)
	{
		if (!array_key_exists($view, $this->_assetsUrl)) {
			$assetsUrl  = false;
			$assetsPath = $this->getAssetsPath($view);
			if ($assetsPath) {
				$assetsUrl = Yii::app()->assetManager->publish($assetsPath);
			}

			$this->_assetsUrl[$view] = $assetsUrl;
		}

		return $this->_assetsUrl[$view];
	}
//from  select language
public function __construct($id,$module=null){
parent::__construct($id,$module);
	// If there is a post-request, redirect the application to the provided url of the selected language
if(isset($_POST['language'])) {
$lang = $_POST['language'];
$MultilangReturnUrl = $_POST[$lang];
$this->redirect($MultilangReturnUrl);
}
// Set the application language if provided by GET, session or cookie
if(isset($_GET['language'])) {
	Yii::app()->language = $_GET['language'];
	Yii::app()->user->setState('language', $_GET['language']);
	$cookie = new CHttpCookie('language', $_GET['language']);
	$cookie->expire = time() + (60*60*24*365); // (1 year)
	Yii::app()->request->cookies['language'] = $cookie;
}
else if (Yii::app()->user->hasState('language'))
	Yii::app()->language = Yii::app()->user->getState('language');
else if(isset(Yii::app()->request->cookies['language']))
	Yii::app()->language = Yii::app()->request->cookies['language']->value;
}
public function createMultilanguageReturnUrl($lang='en'){
	if (count($_GET)>0){
		$arr = $_GET;
		$arr['language']= $lang;
	}
	else
		$arr = array('language'=>$lang);
	return $this->createUrl('', $arr);
	}
}