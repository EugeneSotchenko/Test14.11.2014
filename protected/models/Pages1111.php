<?php

/**
 * This is the model class for table "pages".
 *
 * The followings are the available columns in table 'pages':
 * @property integer $id
 * @property string $title
 * @property string $description
 * @property string $keywords
 * @property string $uri
 * @property string $content
 * @property string $dateCreate
 * @property string $dateModified
 * @property string $UserModify
 * @property string $userCreate
 * @property integer $visible
 */
class Pages extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'pages';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('title, description, keywords, uri, content, dateCreate, dateModified, UserModify, userCreate, visible', 'required'),
			array('visible', 'numerical', 'integerOnly'=>true),
			array('title, description, keywords, uri, UserModify, userCreate', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, title, description, keywords, uri, content, dateCreate, dateModified, UserModify, userCreate, visible', 'safe', 'on'=>'search'),
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
			'id' => 'ID страницы',
			'title' => 'Заголовок',
			'description' => 'Описание',
			'keywords' => 'Keywords',
			'uri' => 'Uri страницы',
			'content' => 'Контент',
			'dateCreate' => 'Дата Создания',
			'dateModified' => 'Дата Изменения',
			'UserModify' => 'Кто изменил',
			'userCreate' => 'Кто создал',
			'visible' => 'Видимость',
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
		$criteria->compare('Заголовок',$this->title,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('keywords',$this->keywords,true);
		$criteria->compare('uri страницы',$this->uri,true);
		$criteria->compare('Контент',$this->content,true);
		$criteria->compare('Дата создания',$this->dateCreate,true);
		$criteria->compare('Дата изменения',$this->dateModified,true);
		$criteria->compare('Последние редакция',$this->UserModify,true);
		$criteria->compare('Создание',$this->userCreate,true);
		$criteria->compare('Видимость',$this->visible);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Pages the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
