<?php

	namespace app\modules\admin\models;

	use yii\db\ActiveRecord;

	/**
	 * This is the model class for table "categories".
	 *
	 * @property int $id
	 * @property string $name
	 * @property int|null $parent_id
	 * @property int $language_id
	 *
	 * @property Articles[] $articles
	 * @property Languages $language
	 * @property Categories $parent
	 * @property Categories[] $categories
	 */
	class Categories extends ActiveRecord
	{
		/**
		 * {@inheritdoc}
		 */
		public static function tableName()
		{
			return 'categories';
		}

		/**
		 * {@inheritdoc}
		 */
		public function rules()
		{
			return [
				[['name', 'language_id'], 'required'],
				[['parent_id', 'language_id'], 'integer'],
				[['name'], 'string', 'max' => 55],
				[['language_id'], 'exist', 'skipOnError' => true, 'targetClass' => Languages::className(), 'targetAttribute' => ['language_id' => 'id']],
				[['parent_id'], 'exist', 'skipOnError' => true, 'targetClass' => Categories::className(), 'targetAttribute' => ['parent_id' => 'id']],
			];
		}

		/**
		 * {@inheritdoc}
		 */
		public function attributeLabels()
		{
			return [
				'id' => 'ID',
				'name' => 'Name',
				'parent_id' => 'Parent ID',
				'language_id' => 'Language ID',
			];
		}

		/**
		 * Gets query for [[Articles]].
		 *
		 * @return \yii\db\ActiveQuery
		 */
		public function getArticles()
		{
			return $this->hasMany(Articles::className(), ['category_id' => 'id']);
		}

		/**
		 * Gets query for [[Language]].
		 *
		 * @return \yii\db\ActiveQuery
		 */
		public function getLanguage()
		{
			return $this->hasOne(Languages::className(), ['id' => 'language_id']);
		}

		/**
		 * Gets query for [[Parent]].
		 *
		 * @return \yii\db\ActiveQuery
		 */
		public function getParent()
		{
			return $this->hasOne(Categories::className(), ['id' => 'parent_id']);
		}

		/**
		 * Gets query for [[Categories]].
		 *
		 * @return \yii\db\ActiveQuery
		 */
		public function getCategories()
		{
			return $this->hasMany(Categories::className(), ['parent_id' => 'id']);
		}
	}
