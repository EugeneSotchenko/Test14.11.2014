<?php

/**
 * This is the model class for table "tbl_news".
 *
 * The followings are the available columns in table 'tbl_news':
 * @property integer $id
 * @property string $title_ua
 * @property string $description
 * @property string $uri
 * @property string $page
 * @property string $data_create
 * @property string $data_modif
 * @property string $text_ua
 * @property string $lang
 * @property integer $visible
 * @property string $img_links
 * @property string $title_ru
 * @property string $text_ru
 * @property string $title_en
 * @property string $text_en
 */
class TblNews extends CActiveRecord

{
	//for lang
	public function defLang()
	{
		return array(
			'condition' => "lang=:lang",
			'params' => array
			(
				':lang' => Yii::app()->language,

			),
		);
	}

	public function lang($lang)
	{
		$this->getDbCriteria()->mergeWith(array(
			'condition' => "lang=:lang",
			'params' => array(
				':lang' => $lang,
			)
		));
		return $this;
	}


	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_news';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('description, uri, page, data_create, data_modif, text_ua, lang, visible, img_links, title_ru, text_ru, title_en, text_en', 'required'),
			array('visible', 'numerical', 'integerOnly'=>true),
			array('title_ua, description, uri, page, img_links, title_ru, title_en', 'length', 'max'=>255),
			array('lang', 'length', 'max'=>5),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, title_ua, description, uri, page, data_create, data_modif, text_ua, lang, visible, img_links, title_ru, text_ru, title_en, text_en', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'title_ua' => 'Title Ua',
			'description' => 'Description',
			'uri' => 'Uri',
			'page' => 'Page',
			'data_create' => 'Data Create',
			'data_modif' => 'Data Modif',
			'text_ua' => 'Text Ua',
			'lang' => 'Lang',
			'visible' => 'Visible',
			'img_links' => 'Img Links',
			'title_ru' => 'Title Ru',
			'text_ru' => 'Text Ru',
			'title_en' => 'Title En',
			'text_en' => 'Text En',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('title_ua',$this->title_ua,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('uri',$this->uri,true);
		$criteria->compare('page',$this->page,true);
		$criteria->compare('data_create',$this->data_create,true);
		$criteria->compare('data_modif',$this->data_modif,true);
		$criteria->compare('text_ua',$this->text_ua,true);
		$criteria->compare('lang',$this->lang,true);
		$criteria->compare('visible',$this->visible);
		$criteria->compare('img_links',$this->img_links,true);
		$criteria->compare('title_ru',$this->title_ru,true);
		$criteria->compare('text_ru',$this->text_ru,true);
		$criteria->compare('title_en',$this->title_en,true);
		$criteria->compare('text_en',$this->text_en,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return TblNews the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
